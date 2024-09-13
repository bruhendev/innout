<?php
session_start();
requireValidSession();
loadModel('WorkingHours');

$exception = null;

$date = (new DateTime())->getTimestamp();
$dateTime = new DateTime("@$date"); // Cria um objeto DateTime a partir do timestamp

$formatter = new IntlDateFormatter(
    'pt_BR', // Localidade (português do Brasil)
    IntlDateFormatter::LONG, // Tipo de formatação para a data
    IntlDateFormatter::NONE, // Sem formatação para a hora
    'America/Sao_Paulo' // Fuso horário
);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', [
    'today' => $formatter->format($dateTime),
    'exception' => $exception,
    'records' => $records
]);
