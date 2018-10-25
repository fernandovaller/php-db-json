<?php
require 'Conexao.php';

class Usuarios {

    private $id;
    private $nome;
    private $email;    

    //construtor da classe
    public function __construct($nome, $email) {
        $this->setId();
        $this->setNome($nome);
        $this->setEmail($email);        
    }   

    public function getId() {        
        return $this->id;
    }

    public function setId() {
        //$this->id = md5(rand(10,2));
        $this->id = rand(1,10);                
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function to_array(){
        //return (array) $this;
        return array(
            'id'=> $this->id,
            'nome' =>$this->nome,
            'email'=> $this->email
        );
    }    

}