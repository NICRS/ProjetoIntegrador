<?php

class Usuario {
    public $id;
    public $username;
    public $foto;
  
    

    public function __construct($id, $nome){
        $this->id = $id;
        $this->username = $nome;
    }
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    
    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }



}