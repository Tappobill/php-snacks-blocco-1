<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$arrayStudenti = [
    [
        'nome' => 'Uno',
        'cognome' => 'Uno',
        'voti' => [2, 4, 6, 8, 10]
    ],
    [
        'nome' => 'Due',
        'cognome' => 'Due',
        'voti' => [1, 3, 5, 7, 9]
    ],
    [
        'nome' => 'Tre',
        'cognome' => 'Tre',
        'voti' => [2, 4, 6, 8, 10]
    ],
    [
        'nome' => 'Quattro',
        'cognome' => 'Quattro',
        'voti' => [1, 3, 5, 7, 9]
    ],
    [
        'nome' => 'Cinque',
        'cognome' => 'Cinque',
        'voti' => [2, 4, 6, 8, 10]
    ],
];

for ($i = 0; $i < count($arrayStudenti); $i++) {

    $mediaVoto = array_sum($arrayStudenti[$i]['voti'])/ count($arrayStudenti[$i]['voti']);

    echo $arrayStudenti[$i]['nome'] . '-' . $arrayStudenti[$i]['cognome'] . ' Media Voto = ' . $mediaVoto;
    echo "<br>";
}

?>