<?php
include_once "PriorityQueue.php";

$priorityQueue = new PriorityQueue();
$priorityQueue->enqueue("Smith", 5);
$priorityQueue->enqueue("Jones", 4);
$priorityQueue->enqueue("Fehrenbach", 4);
$priorityQueue->enqueue("Brown", 1);
$priorityQueue->enqueue("Ingram", 1);
echo "----Queue:<br>";
echo $priorityQueue->toString() . "<br>";
echo "----Examined patient:<br>";
echo $priorityQueue->dequeue() . "<br><br>";
echo "----Queue:<br>";
echo $priorityQueue->toString() . "<br>";
echo "----Examined patient:<br>";
echo $priorityQueue->dequeue() . "<br><br>";
echo "----Queue:<br>";
echo $priorityQueue->toString() . "<br>";