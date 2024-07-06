<?php

    ##### you MUST update those variables

    $HOST     = 'localhost';
    $DATABASE = 'Web';
    $USER     = 'root';
    $PASSWORD = 'xing1211114';

    ######################################################

    $USER_TABLE   = 'user_info';
    $VOTES_TABLE  = 'votes';
    $VOTE_RECORDS_TABLE = 'vote_records';

    $PDO = getPDO($HOST,$DATABASE,$USER,$PASSWORD);
    
    ######################################################

    function getPDO($host,$db,$user,$pass) {
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
?>
