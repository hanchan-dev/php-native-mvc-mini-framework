<?php

function getDatabaseConfig(): array {
    $dbms = "mysql:host=localhost:3306;";
    $dbname = "dbname=test";
    $username = 'root';
    $password = 'hanchanp155';
    return [
        "database" => [
            "test" => [
                "url" => $dbms . $dbname,
                "username" => $username,
                "password" => $password
            ],
            "production" => [
                "url" => $dbms . $dbname,
                "username" => $username,
                "password" => $password
            ]
        ]
    ];
}
