<?php

class ContactController{

var $ContactModel;

function __construct(){
    require_once('models/ContactModel.php');
    $this -> ContactModel = new ContactModel();
}

function listContacts(){
    $result = $this -> ContactModel -> listContacts();
    $arrayContact = array();
    while($line = $result -> fetch_assoc()){
        array_push($arrayContact, $line);
    }
    header('Content-Type: application/json');
    echo json_encode($arrayContact);
}

function listContact($idContact){
    $result = $this -> ContactModel -> listContact($idContact);
    if($contact = $result->fetch_assoc()){
        header('Content-Type: application/json');
        echo json_encode($contact);
    }else{
        header('Content-Type: application/json');
        echo('{"error": "Contato não encontrado"}');
    }
}

function insertContact(){
    $contact = json_decode(file_get_contents('php://input'));
    $arrayContact = array(
        'name' => $contact -> name,
        'email' => $contact -> email,
        'message' => $contact -> message
    );
    $idContact = $this -> ContactModel -> insertContact($arrayContact);
    header('Content-Type: application/json');
    echo('{"message": "Contato foi cadastrado"}');
}

function updateContact($idContact){
    $contact = json_decode(file_get_contents('php://input'));
    
    $arrayContact = array(
        'idContact' => $idContact,
        'name' => $contact -> name,
        'email' => $contact -> email,
        'message' => $contact -> message,
        'status' => $contact -> status,
        'description' => $contact -> description,
    );
    $this -> ContactModel -> updateContact($arrayContact);
    header('Content-Type: application/json');
    echo('{"message": "Contato foi editado"}');
}

function deleteContact($idContact){
    $this -> ContactModel -> deleteContact($idContact);
    header('Content-Type: application/json');
    echo('{"message": "Contato foi excluído"}');
}    
}
?>