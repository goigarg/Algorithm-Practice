<?php

class Node
{
    public $data;
    public $next = NULL;
    function __construct($data)
    {
        $this->data = $data;
    }
}

class LinkedList
{
    public $head;
    function __construct()
    {
        $this->head = NULL;
    }
    function printList()
    {
        $temp = &$this->head;
        while ($temp) {
            echo $temp->data;
            echo " -> ";
            $temp = &$temp->next;
        }
    }
    function add($data)
    {
        $temp = $this->head;
        $this->head = new Node($data);
        $this->head->next = $temp;
    }
}
$list = new LinkedList();

$list->add(1);
$list->add(2);
$list->add(3);
$list->add(4);



$list->printList();
