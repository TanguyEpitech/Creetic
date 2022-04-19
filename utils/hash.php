<?php


class hash {
    
    
    private $valid;
    public function __construct($mp, $hash)
    {
        
        if (password_verify($mp, $hash)) {
            $this->valid = 'Password is valid!';
        } else {
            $this->valid ="";
        }
    }
    
    public function get_valid() {
        return $this->valid;
    }
}