<?php

namespace App\Services;

use Corsinvest\ProxmoxVE\Api\PveClient;

class ProxmoxService
{
    protected $client;

    public function connect()
    {
        $this->client = new PveClient(env('PROXMOX_HOST'), env('PROXMOX_PORT'));

        // Login al cluster (realm = pam)
        $this->client->login(
            env('PROXMOX_USER'),
            env('PROXMOX_PASSWORD'),
            env('PROXMOX_REALM', 'pam')
        );

    }

    public function getClient()
    {
        return $this->client;
    }

    public function pickBestNode()
    {
        $response = $this->client->getNodes()->list()->getResponse()->data;

        $onlineNodes = array_filter($response, fn($node) => $node->status === 'online');

        usort($onlineNodes, fn($a, $b) => $a->cpu <=> $b->cpu);

        return $onlineNodes[0]->node;
    }

}
