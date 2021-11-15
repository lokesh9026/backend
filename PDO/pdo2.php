<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=PDO", "root", "");

    $sql = 'SELECT * FROM PDO';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
	while($row=$q->fetch())
	{
		//echo $row['id']." ".$row["name"]." ".$row['address']." ".$row['mobile']." "."<br>";
		echo "{$row['id']} - {$row['name']} - {$row['address']} - {$row['mobile']} <br>";
	}
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>