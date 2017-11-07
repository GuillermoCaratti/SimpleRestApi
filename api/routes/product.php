<?php

use controller\ProductController as PrCnt;
use controller\AuthController;

$RestApi->get("/api/product/?",function($id){
    return PrCnt::byId($id);

});

$RestApi->post("/api/product?",function($data){

    return PrCnt::create($data->name,$data->price);
});

$RestApi->put("/api/product/?",function($id,$data){
    AuthController::validate();
    return PrCnt::update($id,$data->name,$data->price);
});

$RestApi->get("/api/product",function(){
    return PrCnt::all();
});

$RestApi->delete("/api/product/?",function($id){
    return PrCnt::delete($id);
});
