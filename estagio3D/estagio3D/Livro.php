<?php

class Livro {
    private string $titulo;
    private string $autor;
    private int $anoPub;  

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo){
        return $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
   
    public function setAutor($Autor){
        return $this->Autor = $Autor;
    }

    public function getAnoPub() {
        return $this->anoPub;
    }

    public function setAnoPub($ano){
        return $this->AnoPub = $ano;
    }
}


?>