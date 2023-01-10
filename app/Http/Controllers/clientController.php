<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class clientController extends Controller
{
    public function verifica_empresa($empresa)
    {

      $sql= DB::table('estabelecimento')->where('nome','=',$empresa)->get();

      if(count($sql) > 0)
      {
          return redirect()->route('cardapio',$empresa);
      }else { return view('pages.error');}

    }

    public function cardapio($empresa)
    {
        //Valida se empresa existe
        $sql= DB::table('estabelecimento')->where('nome','=',$empresa)->get();
        if(count($sql) > 0)
        {
            foreach ($sql as $empresa_dados)
            {
                $url = 'http://vortexadmin.alavancaweb.com.br/api/produtos/'.$empresa_dados->id.'?api_token=6MWqljFoJ44beKzPRS6fqXT4MJxUDzZQYWG1ZCJmONRyh6QWx1JCZt2SzVlU';

            }


                $client = new Client();
        $res = $client->request('GET',$url);
        $produtos = json_decode($res->getBody(),true);


         return view('pages.cardapio',compact('produtos','empresa'));
        }else { return view('pages.error');}



    }

    public function pedido(Request $req)
    {
        return $req;
    }
}
