<?php

namespace Service;

class ProxmoxService
{
    public function pickBestNode()
    {
        $nodes = $this->client->getNodes()->list()->getResponse()->data;


        $nodes = array_filter($nodes, fn($n) => $n->status === 'online');


        usort($nodes, fn($a, $b) => $a->cpu <=> $b->cpu);

        return $nodes[0]->node;
    }



}
