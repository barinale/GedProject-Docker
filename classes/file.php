<?php
    abstract class File{
        public function __construct(protected int $id_user,protected string $name,protected string $path){

        }
        abstract public function save();
    }