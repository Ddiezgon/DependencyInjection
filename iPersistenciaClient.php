<?php

include_once('Client.php');

interface iPersistenciaClient {

    function insert($client);

    function read();

}

?>