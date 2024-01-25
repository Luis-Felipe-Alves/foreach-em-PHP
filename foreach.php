<?php

$contasCorrentes = [

    'conta1' => [
        'titular'=> 'Augusto',
        'saldo'=> 200000.00,
    ],
    
    'conta2' => [
        "titular"=> "Luis",
        "saldo"=> 90100100100.00,
    ],

    'conta3' => [
        "titular"=> "Maria",
        "saldo"=> 120000.00,
    ]
];

//Nesta estrutura, o parâmetro "$conta" representa cada elemento no vetor "$contasCorrentes" e "$contaDaPessoa" representa os índices do vetor "$contasCorrentes". 

foreach($contasCorrentes as $contaDaPessoa => $conta){ 
    echo $conta['titular'] . ' tem R$'. $conta['saldo'] .  PHP_EOL;
    echo $contaDaPessoa . PHP_EOL;
}

//Uma aplicação mais trivial do método foreach():

$vetorAleatorio = [1,2,3,4];

foreach($vetorAleatorio as $indice => $elemento){
    echo 'No índice ' . $indice . ' o elemento é ' . $elemento . '.' . PHP_EOL;

}
