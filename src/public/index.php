<?php
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents('body.txt' , file_get_contents('php://input'));
}

echo file_get_contents('body.txt');

