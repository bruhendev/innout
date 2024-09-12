<?php
session_start();
requireValidSession();

$date = (new DateTime())->getTimestamp();
$dateTime = new DateTime("@$date"); // Cria um objeto DateTime a partir do timestamp

$formatter = new IntlDateFormatter(
    'pt_BR', // Localidade (português do Brasil)
    IntlDateFormatter::LONG, // Tipo de formatação para a data
    IntlDateFormatter::NONE, // Sem formatação para a hora
    'America/Sao_Paulo' // Fuso horário
);

loadTemplateView('day_records', ['today' => $formatter->format($dateTime)]);