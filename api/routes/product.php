<?php

use controller\ProductController as PrCnt;

$RestApi->get("/api/product/?",function($id){
    
    return PrCnt::byId($id);
    
});

$RestApi->get("/api/product/?/?",function($name,$price){
    
    return PrCnt::create($name,$price);
});

$RestApi->get("/api/product/?/?/?",function($id,$name,$price){
    
    return PrCnt::update($id,$name,$price);
});

$RestApi->get("/api/product",function($name,$price){
    
    return PrCnt::all();
});

$RestApi->get("/api/delete/product/?",function($id){

    return PrCnt::delete($id);
    
});