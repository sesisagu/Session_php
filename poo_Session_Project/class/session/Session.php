<?php
class Session {

    public $attribut = [];

    public function __isset($value){

        return isset($this->attribut[$value]);

    }

    public function __unset($value) {

        unset($this->attribut[$value]);

    }

    public function __set($value, $attribut){

        return $this->attribut[$value]=$attribut;

    }

    public function __get($value) {

        return $this->attribut[$value];
    }

}
?>