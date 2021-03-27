<?php
    session_start();

$elso = [
    '1' => 'geci fiatal',
    '2' => 'átlagos életkorú',
    '3' => 'átlagos életkorú',
    '4' => 'geciöreg',
    '5' => 'geciöreg',
    '6' => 'geciöreg',
    'fasztudja' => 'fasz tudja milyen öreg'
];

$masodik = [
    'tel' => 'szar',
    'tavasz' => 'kula',
    'nyar' => 'okádék',
    'osz' => 'undorító',
    'fasztudja' => 'fasz tudja milyen'
];

$harmadik = [
    'macska' => 'macskát',
    'kutya' => 'kutyát',
    'exotikus' => 'exotikus állatot',
    'nem' => 'semmilyen',
    'fasztudja' => 'fasz tudja'
];

$negyedik = [
    'alien' => 'Alien',
    'predator' => 'Predator',
    'ember' => 'Ember',
    'fasztudja' => 'fasz tudja'
];

$otodik = [
    'sor' => 'faszt',
    'bor' => 'pélót',
    'palinka' => 'kugit',
    'nem' => 'hordozható porszívót',
    'fasztudja' => 'hordozható porszívót'
];

$hatodik = [
    'spar' => 'Sparban',
    'tesco' => 'Tescoban',
    'aldi' => 'Aldiban',
    'lidli' => 'Lidliben',
    'kisbot'=> 'Kisbótban',
    'fasztudja' => 'fasz tudja'
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
                    <h3 style="text-align:center;">Egy <b><?= isset($_SESSION['1']) && isset($elso[$_SESSION['1']]) ? $elso[$_SESSION['1']] : 'fasz tudja milyen öreg' ?></b>
                        elefánt vagy, aki egy <b><?= isset($_SESSION['2']) && isset($masodik[$_SESSION['2']]) ? $masodik[$_SESSION['2']] : 'fasz tudja milyen évszakban' ?></b> született,
                        és méghozzá szereted a <b><?= isset($_SESSION['5']) && isset($otodik[$_SESSION['5']]) ? $otodik[$_SESSION['5']] : 'fasz tudja milyen évszakban' ?></b> az ánusznyílásodban.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php
unset($_SESSION['1']);
unset($_SESSION['2']);
unset($_SESSION['5']);
?>