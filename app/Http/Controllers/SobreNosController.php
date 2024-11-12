<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobre(){
        return View('site.sobrenos');
    }
}
