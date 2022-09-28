<?php

    $url = 'http://localhost/api-php/public_html/api';
    $service = '/user';
    $param = '';

    $response = file_get_contents($url.$service.$param);

    echo $response;

    //$response = json_decode($response); //Transforma em objeto
    //$response = json_decode($response, 1); //Transforma em array

    //var_dump($response->data[0]->email); /Acesso como objeto
    //var_dump($response['data'][0]['email']); /Acesso como array