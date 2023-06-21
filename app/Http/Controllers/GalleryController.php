<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GalleryController extends Controller
{
    public function fetchGallery()
    {
        $client = new Client();
        
        try {
            $response = $client->post('https://api-eu-central-1-shared-euc1-02.hygraph.com/v2/clj187jrp1bfx01uq9b9yb8rb/master', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'query' => '
                        query Gallery {
                            galleries {
                                smallHeading
                                image {
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
            $data = $data['data']['galleries'][0];
            
            return $data;
        } catch (\Exception $e) {
            // Handle any errors that occur during the request
            return [];
        }
    }
}
  