<?php

$frases = [
    "O sucesso não é o final, o fracasso não é fatal: é a coragem de continuar que conta.",
    "Acredite que você pode e você está no meio do caminho.",
    "Você é mais forte do que pensa.",
    "Nenhum obstáculo é grande demais quando sua vontade de vencer é maior.",
    "A persistência é o caminho do êxito.",
    "Coragem é a resistência ao medo, o domínio do medo — não a ausência do medo.",
    "Grandes conquistas nascem de grandes sacrifícios."
];


$fraseSelecionada = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fraseSelecionada = $frases[array_rand($frases)];
}
?>