<?php

namespace LinkedList;


class Node
{
    public $data = null;
    public $next = null;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

}