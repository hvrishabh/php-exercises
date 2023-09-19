<?php

try {
    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);
    $sql = $conn->prepare("SELECT * FROM students");
    $sql->execute();

    $error = $sql->errorInfo();
    echo "<pre>";
    print_r($error);
    echo "</pre>";


} catch (PDOException $e) {
    echo $e->getMessage();

}

if ($error[1]) {
    echo $error[2];
} else {
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}