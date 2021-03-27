<?php
    $elso = [
        '1' => '0-18',
        '2' => '19-21',
        '3' => '22-24',
        '4' => '25-27',
        '5' => '28-30',
        '6' => '30+'
    ];

    $masodik = [
            'tel' => 'télen',
        'tavasz' => 'tavasszal',
        'nyar' => 'nyáron',
        'osz' => 'ősszel'
    ];

    $harmadik = [
            'macska' => 'macskát',
        'kutya' => 'kutyát',
        'exitikus' => 'exotikus állatot',
        'nem' => 'semmilyen'
    ];

    $negyedik = [
            'alien' => 'Alien',
        'predator' => 'Predator',
        'ember' => 'Ember'
    ];

    $otodik = [
            'sor' => 'sört',
        'bor' => 'bort',
        'palinka' => 'pálinkát',
        'nem' => 'semmit nem'
    ];

    $hatodik = [
            ''
    ]
    ?><!DOCTYPE html>
<html lang="hu">
<head>
    <title>Milyen elefánt vagy?</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Rugjunk.be</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Milyen elefánt vagy?</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <h1 class="page-heading">Milyen elefánt vagy?</h1>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="margin-bottom:0;">Eredmény</h5>
                </div>
                <div class="card-body">
                    <img style="width:100%; margin-bottom:15px;" src="/img/dumbo.jpg" alt="elephant1">
                    <h1 style="text-align:center;">Electroswing Elefánt vagy, de gondolom erre már rájöttél ;)</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>