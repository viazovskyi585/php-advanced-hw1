<?php
const DNS = "pgsql:host=db;dbname=postgres";
const USER = "postgres";
const PASSWORD = "postgres";

try {
	$pdo = new PDO(DNS, USER, PASSWORD, [
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	]);
	echo "Connected to the database successfully!";
} catch (PDOException $e) {
	echo $e->getMessage();
}

# $pdo->exec("CREATE TABLE IF NOT EXISTS users (id serial primary key, name varchar(255), email varchar(255))");
# $pdo->exec("INSERT INTO users (name, email) VALUES ('John Doe', 'doe@emample.com')");
# $pdo->exec("INSERT INTO users (name, email) VALUES ('John Smith', 'smith@emample.com')");
