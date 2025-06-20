<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorTestController extends Controller
{
    public function triggerError() 
    { 
        throw new Exception("Error generado desde el controlador para probar Sentry."); 
    } 
}
