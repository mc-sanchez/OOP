<?php 

    class User {

        protected $email;
        protected $password;
        protected $direccion;
        protected $tarjeta;

        // GET Y SET EMAIL
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        // GET Y SET PASSWORD HASH
        public function encriptarPass($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }
        public function setPassword($password){
            $this->password = $this->encriptarPass($password);
        }
        public function getPassword(){
            return $this->password;
        }

        // GET Y SET DIRECCION
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function getDireccion(){
            return $this->direccion;
        }

        // GET Y SET TARJETA 
        public function setTarjeta($tarjeta){
            $this->tarjeta = $tarjeta;
        }
        public function getTarjeta(){
            return $this->tarjeta;
        }

    }