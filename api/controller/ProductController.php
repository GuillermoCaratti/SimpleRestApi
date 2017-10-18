<?php

namespace controller;

use model\Producto;
use db\DbController;

class ProductController{
    
    public static function all(){   
        return Producto::all();
    }
    
    
    public static function byId($id){   
        return Producto::byId($id);
    }
    
    public static function create($name,$price){  
        $p = new Producto();
        $p->nombre = $name;
        $p->precio = $price;
        $p->create();
        return "OK";
    }
    
     public static function update($id,$name,$price){  
        $p = Producto::byId($id);
        $p->nombre = $name;
        $p->precio = $price;
        $p->update();
        return "OK";
    }
    
    
}
