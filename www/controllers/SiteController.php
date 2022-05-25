<?php

    class SiteController{

        function home(){
            // Cabeçalho
            require_once("views/templates/header.php");
            // Módulo
            require_once("views/pages/home.php");
            // Rodapé
            require_once("views/templates/footer.php");
        }

        function about(){
            // Cabeçalho
            require_once("views/templates/header.php");
            // Módulo
            require_once("views/pages/about.php");
            // Rodapé
            require_once("views/templates/footer.php");
        }

        function products(){
            // Cabeçalho
            require_once("views/templates/header.php");
            // Módulo
            require_once("views/pages/products.php");
            // Rodapé
            require_once("views/templates/footer.php");
        }

        function contact(){
            // Cabeçalho
            require_once("views/templates/header.php");
            // Módulo
            require_once("views/pages/contact.php");
            // Rodapé
            require_once("views/templates/footer.php");
        }
    }

?>