<?php

class programa_controlador{

    public function __construct(){
        $this->obj= new Plantilla();
    }

    public function principal(){
        $this->obj->unirPagina("programa/principal");
    }

    public function frmRegistrar(){
        $this->obj->unirPagina("programa/frmRegistrar");
    }

    
    public function registrar(){}

    public function frmEditar(){}
    public function editar(){}

    public function eliminar(){}

    public function buscar(){}

}