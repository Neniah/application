<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex(){
    
  }

  public function getAbout(){
    return "About Me!";
  }

  public function getContact(){
    return "Hello Contact Page";
  }

  public function postContact(){

  }

}
 ?>
