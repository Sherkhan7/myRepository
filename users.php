<?php
    /*$users = array(
        array(
        'username' => 'Jane',
        'comment' => 'Hello, I am Jane!!!',
        'image' => 'images/userIcon.jpg'
        ),
        array(
            'username' => 'Hury',
            'comment' => 'Hello, I am Hurry!!!',
            'image' => 'images/userIcon.jpg'
        ),
        array(
            'username' => 'John',
            'comment' => 'Hello, I am Joh!!!',
            'image' => 'images/userIcon.jpg'
        ),
        array(
            'username' => 'Bill',
            'comment' => 'Hello, I am Bill!!!',
            'image' => 'images/userIcon.jpg'
        ),
    );*/

    $pdo = new PDO("mysql:host=localhost; dbname=comment", "root", "");
    if(!$pdo){
        die("Sorry");
    }

    $sql = "SELECT * FROM comments ORDER BY Date DESC";
    $statement = $pdo -> prepare($sql);
    $statement -> execute();
    $users = $statement -> fetchAll( PDO::FETCH_ASSOC);

?>