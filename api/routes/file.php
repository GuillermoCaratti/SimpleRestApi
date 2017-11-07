<?php

use controller\FileController;

$RestApi->post("/api/file",function ($data){
  FileController::write($data->data,$data->name);
  return "OK";
});


$RestApi->get("/api/file/?",function ($name){
  FileController::read($name);
  return "???";
});
