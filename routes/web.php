<?php

//Redireciona para cardapio
Route::get('/{empresa}',function ($empresa){
    return redirect()->route('cardapio',$empresa);
});

//Pagina cardápio utilizando prefixo da empresa
Route::get('/{empresa}/cardapio', function ($empresa) {
    return view('pages.cardapio',compact('empresa'));
})->name('cardapio');

//Pagina meus pedidos
Route::get('/{empresa}/pedidos', function ($empresa) {
    return view('pages.sample',compact('empresa'));
})->name('pedidos');

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('Página não encontrada');
})->where('page','.*');
