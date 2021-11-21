<?php
class authHelper{
    function checkAdminLoggedIn(){
        session_start();
        if($_SESSION['admin']!=1){
            header("Location:".BASE_URL."login");
            die();
        }
    }
    function checkRol(){
        session_start();
        if(isset($_SESSION['Email']) && ($_SESSION['admin']==1)){
            $rol="admin";

        }else if(isset($_SESSION['Email']) && ($_SESSION['admin']!=1)){
            $rol = "user";
        }else{
            $rol = "guest";
        }
        return $rol;
    }
    function adminView(){
        session_start();
        if($_SESSION["admin"]==1){
            header("Location:".BASE_URL."login");
            die();
        }else{
            if(isset($_SESSION['Email']) && $_SESSION['admin'] == 1){
                $rol = "admin";
            }
            elseif (isset($_SESSION['Email']) && ($_SESSION['admin'] != 1)){
                $rol = "usuario";
            }
            else{
                $rol = "invitado";
            }
            return $rol;
        }
    }
}