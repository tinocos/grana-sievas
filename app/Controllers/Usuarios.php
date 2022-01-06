<?php

namespace App\Controllers;

class Usuarios extends BaseController{
    
    public function index(){
        
        echo view('/login');
        
    }
    
    public function logout(){
        
        echo view('/login');
        
    }

}