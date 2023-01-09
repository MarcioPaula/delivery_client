<?php
use App\Http\Controllers\clientController;
//Redireciona para cardapio
Route::get('/{empresa}',function ($empresa){
    return redirect()->route('cardapio',$empresa);
});

//Pagina cardápio utilizando prefixo da empresa
Route::get('/{empresa}/cardapio/',[clientController::class, 'cardapio'])->name('cardapio');

//Pagina meus pedidos
Route::get('/{empresa}/pedidos', function ($empresa) {
    return view('pages.sample',compact('empresa'));
})->name('pedidos');

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//Pagina meus pedidos
Route::post('/pedido', [clientController::class, 'pedido'])->name('pedido');

// 404 for undefined routes
Route::any('/{page?}',function(){
    return view('pages.error');
})->where('page','.*');
