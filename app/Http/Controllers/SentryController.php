<?php
 
namespace App\Http\Controllers;
 
use Exception;
use Illuminate\Http\Request;
 
class SentryTestController extends Controller
{
    public function test()
    {
 
        try {
            throw new Exception('Este es un error, ALERTAAAAAAAAAA!');
        } catch (Exception $e) {
         
            if (app()->bound('sentry')) {
                \Sentry\captureException($e);
            }
 
            return response()->json([
                'status' => 'error capturado',
                'message' => $e->getMessage()
            ]);
        }
    }
}