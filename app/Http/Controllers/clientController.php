<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class clientController extends Controller
{
    public function cardapio($empresa)
    {
        $url = 'http://10.1.0.85:8080/api/produtos?api_token=6MWqljFoJ44beKzPRS6fqXT4MJxUDzZQYWG1ZCJmONRyh6QWx1JCZt2SzVlU';
        $client = new Client();
        $res = $client->request('GET',$url);
        $produtos = json_decode($res->getBody(),true);

        return view('pages.cardapio',compact('produtos','empresa'));
    }

    public function pedido(Request $req)
    {
        return $req;
    }
}
