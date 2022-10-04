<?php

trait ServisGreeting{
    public $name;
    public function sayHelo($name){
        return $this->name = $name;
    }
}