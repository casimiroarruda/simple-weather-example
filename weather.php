#!/usr/bin/env php
<?php

const API_URI = 'api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&units=metric&lang=pt_br';

$apiKey = $_SERVER['APIKEY'] ?? '';

$parameters = getopt('', ['city:']);

if (false === $parameters || !isset($parameters['city'])) {
    die('É necessário declarar uma cidade' . PHP_EOL);
}

$finalUri = sprintf('https://' . API_URI, $parameters['city'], $apiKey);

$data = file_get_contents($finalUri);

$weather = json_decode($data);
echo 'Versão do PHP: ' . PHP_VERSION . PHP_EOL;
echo 'Clima agora: ' . $weather->weather[0]->description . PHP_EOL;
echo 'Temperatura: ' . $weather->main->temp . '°C' . PHP_EOL;
echo 'Sensação térmica: ' . $weather->main->feels_like . '°C' . PHP_EOL;
echo 'Umidade: ' . $weather->main->humidity . '%' . PHP_EOL;
