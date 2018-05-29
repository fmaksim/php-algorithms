<?php

namespace LinkedList;

require_once "Node.php";

class LinkedList
{

    public $total = 0;
    public $firstNode = null;

    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->isEmpty()) {
            $this->firstNode = $newNode;
        } else {
            $currentNode = $this->firstNode;
            while ($this->isHasNextNode($currentNode)) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        ++$this->total;
    }

    private function isEmpty()
    {
        return ($this->firstNode === null) ? true : false;
    }

    private function isHasNextNode($node)
    {
        return ($node->next !== null) ? true : false;
    }

    public function display()
    {
        echo "Total list items: " . $this->total . PHP_EOL;
        $currentNode = $this->firstNode;
        while ($currentNode != null) {
            echo "List Item: " . $currentNode->data . PHP_EOL;
            $currentNode = $currentNode->next;
        }
    }

}