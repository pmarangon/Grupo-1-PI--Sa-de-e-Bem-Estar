<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
   public function index(){
       echo "Hello Word do controller.";
   }
   public function getIndex(){

    return view ('usuarios');

       
   

