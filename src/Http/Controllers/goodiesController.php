<?php

namespace splittlogic\goodies\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\goodies\goodies;

class goodiesController extends Controller
{


  public function index ()
  {

    $content = 'This is splittlogic/goodies'; 

    return view('goodies::blank', ['content' => $content]);

  }


}
