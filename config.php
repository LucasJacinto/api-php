<?php

    //MySQL
    const DBDRIVE = 'mysql';
    const DBHOST = 'localhost';
    const DBNAME = 'api';
    const DBUSER = 'root';
    const DBPASS = '';

    //Conexão
    const PDO = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);