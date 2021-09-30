<?php

    // Conexão com o db
    $mysql = new mysqli('localhost', 'root', '', 'blog');
    $mysql->set_charset('utf8');

    



    // Se der erro na conexão com o  banco...
    if(!isset($mysql)){
        echo 'Erro na Conexão.';
    }




