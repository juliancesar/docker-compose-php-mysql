<?php

$envVars = [
  "DB_PORT_3306_TCP_PORT",
  "DB_PORT_3306_TCP_ADDR",
  "DB_ENV_MYSQL_USER",
  "DB_ENV_MYSQL_DATABASE",
  "DB_ENV_MYSQL_PASSWORD",
  "DB_ENV_MYSQL_ROOT_PASSWORD",
];

foreach ($envVars as $envVar) {
    $envValue = getenv($envVar);
    echo nl2br("<b>{$envVar}</b>: {$envValue}\n");
}

$connection = new PDO("mysql:dbname=myapp;host=db", "dev", "123456");

$sql = 'SELECT * FROM test';
foreach ($connection->query($sql) as $row) {
    print $row['teste'] . "\t";
}