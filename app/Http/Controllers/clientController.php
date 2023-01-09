<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientController extends Controller
{
    public function cardapio($empresa)
    {
       $produtos = DB::table('produtos')->get();
       return view('pages.cardapio',compact('empresa','produtos'));
    }

    public function pedido(Request $req)
    {
        return $req;
    }
}
