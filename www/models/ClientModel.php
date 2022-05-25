<?php

class ClientModel{

    function listClients(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $Connection = $connectClass -> getConn();

        $sql = 'SELECT * FROM clients';

        return $Connection -> query($sql);
    }

}

?>