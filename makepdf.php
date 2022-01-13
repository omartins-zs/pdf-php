<?php

use \mPDF;



require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new mPDF('C');


// Pegar Variaveis
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensagem = $_POST['mensagem'];

// Criar nova instancia de PDF

// Criar o PDF
$data = '';

$data .= '<h1>Your Details !</h1>';

// Adicionar data

$data .= '<strong>Nome</strong> ' . $fname . '<br/>';
$data .= '<strong>Sobrenome</strong> ' . $lname . '<br/>';
$data .= '<strong>Email</strong> ' . $email . '<br/>';
$data .= '<strong>Telefone</strong> ' . $phone . '<br/>';

if ($mensagem) {
    $data .= '<br/> <strong>Mensagem</strong> <br />' . $mensagem;
}

// Escrevendo PDF
$mpdf->WriteHTML($data);

// Sair do navegador
$mpdf->Output('myfile.pdf', 'D');