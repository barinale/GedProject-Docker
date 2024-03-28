<?php
    abstract class File{
        public function __construct(protected string $name,protected string $path){

        }
        abstract public function save();
    }