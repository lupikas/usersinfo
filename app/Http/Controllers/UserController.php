<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        $hashedApiKey = '$2y$10$AZktAPSZ4kqmThHrno7m2Ozhj1EZYNPKf.iC1vm.36Gck4jg5sPTK';
        
        $apikey = $_GET['apikey'];
        $verify = password_verify($apikey, $hashedApiKey); 

        if (!$verify) { 
            $message = "Bad api key!"; 
            return response()->json(compact('message'),401);
        } 
            
        $getData = json_decode(file_get_contents("php://input"), true);
        
        if(empty($getData)){
            $message = "Nothing to show!"; 
            return response()->json(compact('message'),401);
        }
        
        foreach($getData['users'] as $key => $value){
            $firstName = array(
                'full name' => $value['first_name'],
            );

            $lastName = array (
                'full name' => $value['last_name'],
            );

            $combineArrays = array_merge_recursive($firstName, $lastName);
            
            $usersData = array('users' => $combineArrays);
            echo json_encode($usersData);
        }
    }
}
