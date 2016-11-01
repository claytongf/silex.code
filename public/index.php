<?php
require_once __DIR__.'/../bootstrap.php';
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

$response = new JsonResponse();

$app->get("/", function () use ($response){
    $response->setContent("Ola mundo!");
    return $response;
});

$app->get("/cliente", function() use ($response) {
    $response->setData([
        [
            "nome" =>"Clayton",
            "email"=>"cla@gmail.com",
            "cpf"=>"12345767323"
        ],
        [
            "nome"=>"Gerson",
            "email"=>"gerson@gmail.com",
            "cpf"=>"98765432112"
        ]
    ]);
    return $response;
});

$app->run();