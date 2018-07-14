<?php
/**
 * Interface que define el comportamiento de la base de datos
 */


interface InterfaceBaseDeDatos{

    public function insert(stdClass $o):bool;

    public function update(stdClass $o):bool;
 
    public function exists(int $id):bool;

    public function delete(int $id):bool;
    
    public function all():array;

    public function select(int $id):stdClass;
}