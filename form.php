<?php
require_once 'connect.php';
$pdo = new \PDO(DSN, USER, PASS);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);

    $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
    $statement = $pdo->prepare($query);

    $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
    $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);

    $statement->execute();

}

$queryFetch = "SELECT * FROM friend";
$statementFetch = $pdo->prepare($queryFetch);
$statementFetch->execute();

$friendsArray = $statementFetch->fetchAll(PDO::FETCH_ASSOC);

foreach($friendsArray as $friend) {
    echo '<li>' . $friend['firstname'] . ' ' . $friend['lastname'] . '</li>';
}


