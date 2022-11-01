<?php

abstract class parentclass{
    public static string $title='iniclass'.__CLASS__;

    public static function gettitle(){
        return new static;
    }


    //  title static function getself(){

    }
    
        return new self;
    

class childclass extends parentclass{

}
