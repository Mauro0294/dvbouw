<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KernwaardeController extends Controller
{
    public function fetchKernwaardes()
    {
        $client = new Client();
        
        try {
            $response = $client->post('https://api-eu-central-1-shared-euc1-02.hygraph.com/v2/clj187jrp1bfx01uq9b9yb8rb/master', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'query' => '
                        query Kernwaardes {
                            kernwaardes {
                                heading
                                description
                                icon {
                                    url
                                }
                            }
                        }
                    ',
                ],
                'verify' => false,
            ]);
            
            $data = json_decode($response->getBody(), true);
            
            // Extract the necessary data from the response
            $kernwaardes = $data['data']['kernwaardes'];
            
            return $kernwaardes;
        } catch (\Exception $e) {
            // Handle any errors that occur during the request
            return [];
        }
    }
}