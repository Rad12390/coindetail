<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Coin;

class FetchApiResponseController extends Controller
{
    
    public  function GetApiResponse(){
   
        $client = new \GuzzleHttp\Client();
       
         try{
                $url = env('APP_API_URL')."/coins/list?include_platform=true";
            
                $response = $client->request('GET', $url);

                $data =  $response->getBody();
                
                if(!empty($data)){
                    $data = json_decode($data);
                            
                    
                    foreach ($data as $key => $value) {
                            $coin = new Coin;

                            $coin->id = ($value->id)?$value->id:'';
                            $coin->symbol = ($value->symbol)?$value->symbol:'';
                            $coin->name = ($value->name)?$value->name:'';
                            $platforms = ($value->platforms)?$value->platforms:'';
                           
                            if($platforms)
                                $coin->platforms = json_encode($platforms);
                           
                            
                            $coin->save();
                             
                            }
                           
                }    
        }catch(ConnectException $e){
                return 'facing some issue.';
        }   
    }
}
