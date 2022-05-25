<?php

    class ClientController{

        var $ClientModel;

        function __construct(){
            if(!isset($_SESSION['user'])){
                header('Location: index.php?controller=main&action=login');
            }
            require_once ('models/ClientModel.php');
            $this -> ClientModel = new ClientModel();
        }

        function listClients(){
            $result = $this -> ClientModel -> listClients();
            $arrayClients = array();
            while($line = $result -> fetch_assoc()){
                array_push($arrayClients, $line);
            }
            require_once('views/templates/header.php');
            require_once('views/client/listClients.php');
            require_once('views/templates/footer.php');
        }

        function insertClient(){
            require_once('views/templates/header.php');
            require_once('views/client/insertClient.php');
            require_once('views/templates/footer.php');
        }

        function insertClientAction(){
            $client = array(
                "name" => $_POST["name"],
                "phone" => $_POST["phone"],
                "email" => $_POST["email"],
                "address" => $_POST["address"]
            );
            $idClient = $this -> ClientModel -> insertClient($client);

           //Grava clintes na pasta img
           $this -> savePhoto($idClient);

            header('Location: index.php?controller=client&action=listClients');
        }

        function updateClient($idClient){
            $result = $this -> ClientModel -> listClient($idClient);
            if($client = $result->fetch_assoc()){
                require_once('views/templates/header.php');
                require_once('views/client/updateClient.php');
                require_once('views/templates/footer.php');
            }
        }

        function updateClientAction($idClient){
            $client = array(
                "idClient" => $idClient,
                "name" => $_POST["name"],
                "phone" => $_POST["phone"],
                "email" => $_POST["email"],
                "address" => $_POST["address"]
            );
            $this -> ClientModel -> updateClient($client);
            $this -> savePhoto($idClient);
            
            header('Location: index.php?controller=client&action=listClients');
        }

        function deleteClient($idClient){
            $this -> ClientModel -> deleteClient($idClient);
            $linkPhoto = "assets/img/clients/{$idClient}.jpg";
            if(is_file($linkPhoto)){
                unlink($linkPhoto);
            }

            header('Location: index.php?controller=client&action=listClients');
        }

        public function savePhoto($idClient){
            if(isset($_FILES["photo"]) && $_FILES['photo']['name'] != ''){

                $foto_temp = $_FILES["photo"]["tmp_name"];	//pega o caminho temporário do arquivo
                $foto_name = $_FILES["photo"]["name"];		//pega o nome
                $extensao = str_replace('.','',strrchr($foto_name, '.')); //strtolower(end(explode('.', $foto_name)))
                $max_width = 600; //define largura máxima
                $max_height = 600; //define altura míxima

                // Carrega a imagem 
                $img = null;

                //Transforma a imagem em JPG
                if ($extensao == 'jpg' || $extensao == 'jpeg') { 
                    $img = imagecreatefromjpeg($foto_temp);
                } else if ($extensao == 'png') { 
                    $img = imagecreatefrompng($foto_temp);
                } else if ($extensao == 'gif') { 
                    $img = imagecreatefromgif($foto_temp); 
                }  else     
                    $img = imagecreatefromjpeg($foto_temp);

                //cria imagem no diretório @imagejpeg($img,"diretorio/".$id_noticia) se já tiver com este nome vai su
                $localFile = "assets/img/clients/{$idClient}.jpg";
                imagejpeg($img, $localFile); 
                     
            }
        }
    }
?>