<?php

namespace controller;

use model\Usuarios;
use Exception;

class AuthController{

  static function validate(){
    if(isset($_SESSION['user'])){
      return $_SESSION['user'];
    }
    throw new Exception("No tiene permisos");
  }

  static function authenticate($username,$password){
    $users = Usuarios::where("usuario = '$username' and pass = '$password'");
    if(isset($users[0])){
      $_SESSION['user'] = json_encode($users[0]);
      return $users[0];
    } else {
      throw new Exception("Credenciales inválidas");
    }
  }

  static function logout(){
      $_SESSION['user'] = NULL;
  }

}
