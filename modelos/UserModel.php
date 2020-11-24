<?php

/**
 *   Clase 'UserModel' que implementa el modelo de usuarios de nuestra aplicación en una
 * arquitectura MVC. Se encarga de gestionar el acceso a la tabla usuarios
 */
class UserModel extends BaseModel
{

   private $id;

   private $nif;

   private $nombre;

   private $apellido1;

   private $apellido2;

   private $imagen;

   private $login;

   private $password;

   private $email;

   private $telefono;

   private $direccion;

   private $rol_id;

   public function __construct()
   {
      // Se conecta a la BD
      parent::__construct();
      $this->table = "usuarios";  
   }

   public function getId()
   {
      return $this->id;
   }

   public function setId($id)
   {
      $this->id = $id;
   }

   public function getNombre()
   {
      return $this->nombre;
   }

   public function setNombre($nombre)
   {
      $this->nombre = $nombre;
   }

   public function getApellido1()
   {
      return $this->apellido1;
   }

   public function setApellido1($apellido1)
   {
      $this->apellido1 = $apellido1;
   }

   public function getApellido2()
   {
      return $this->apellido2;
   }

   public function setApellido2($apellido2)
   {
      $this->apellido1 = $apellido2;
   }

   public function getImagen()
   {
      return $this->imagen;
   }

   public function setImagen($image)
   {
      $this->imagen= $imagen;

   }

   public function getLogin()
   {
      return $this->login;
   }

   public function setLogin($login)
   {
      $this->login= $login;
   }


   public function getPassword()
   {
      return $this->password;
   }

   public function setPassword($password)
   {
      $this->password = $password;
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function setEmail($email)
   {
      $this->email = $email;
   }

   public function getTelefono()
   {
      return $this->telefono;
   }

   public function setTelefono($telefono)
   {
      $this->telefono = $telefono;
   }

   public function getDireccion()
   {
      return $this->direccion;
   }

   public function setDireccion($direccion)
   {
      $this->direccion = $direccion;
   }

   public function getRol_Id()
   {
      return $this->rol_id;
   }

   public function setRol_id($rol_id)
   {
      $this->rol_id = $rol_id;
   }

}


  