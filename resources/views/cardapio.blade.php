@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')

    <link rel="stylesheet" href="{{asset('css/cardapio.css')}}">

    <div id="comidas"><h3>Comidas</h3></div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="food-card food-card--vertical">
                <div class="food-card_img">
                    <img src="{{asset('assets/images/produtos/x-tudo.png')}}" alt="">
                    <a href="#!"><i class="fa fa-heart"></i></a>
                </div>
                <div class="food-card_content">
                    <div class="food-card_title-section">
                        <a href="#!" class="food-card_title">Double Cheese Potato Burger</a>
                        <p class="food-card_author">Xtudo, com hamburguer, salcicha e ovos, acompanha molho.</p>
                    </div>
                    <div class="food-card_bottom-section">
                        <hr>
                        <div class="space-between">
                            <div class="food-card_price">
                                <span>5.99R$</span>
                            </div>
                            <div class="food-card_order-count">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="margin-left: -50px !important;">
                                        <button class="btn btn-outline-secondary minus-btn" type="button" id="button-addon1"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control input-manulator" placeholder=""  aria-label="Example text with button addon" maxlength="2" aria-describedby="button-addon1" value="0">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-btn" type="button" id="button-addon1"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="food-card food-card--vertical">
                <div class="food-card_img">
                    <img src="{{asset('assets/images/produtos/pizza.png')}}" alt="">
                    <a href="#!"><i class="fa fa-heart"></i></a>
                </div>
                <div class="food-card_content">
                    <div class="food-card_title-section">
                        <a href="#!" class="food-card_title">Pizza calabresa com muçarela</a>
                        <p class="food-card_author">Deliciosa pizza de calabresa com muçarela, regada de oregaco e com tomate.</p>
                    </div>
                    <div class="food-card_bottom-section">
                        <hr>
                        <div class="space-between">
                            <div class="food-card_price">
                                <span>5.99R$</span>
                            </div>
                            <div class="food-card_order-count" >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="margin-left: -50px !important;">
                                        <button class="btn btn-outline-secondary minus-btn" type="button" id="button-addon1"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control input-manulator" placeholder=""  aria-label="Example text with button addon" maxlength="2" aria-describedby="button-addon1" value="0">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-btn" type="button" id="button-addon1"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bebidas"><h3>Bebidas</h3></div>
    <div class="row">

        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="food-card food-card--vertical">
                <div class="food-card_img">
                    <img src="{{asset('assets/images/produtos/guarana.png')}}" alt="">
                    <a href="#!"><i class="fa fa-heart"></i></a>
                </div>
                <div class="food-card_content">
                    <div class="food-card_title-section">
                        <a href="#!" class="food-card_title">Refrigerante</a>
                        <p class="food-card_author">Guaraná Antartica.</p>
                    </div>
                    <div class="food-card_bottom-section">
                        <hr>
                        <div class="space-between">
                            <div class="food-card_price">
                                <span>5.99R$</span>
                            </div>
                            <div class="food-card_order-count" >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend float-right" style="margin-left: -50px !important;">
                                        <button class="btn btn-outline-secondary minus-btn" type="button" id="button-addon1"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control input-manulator" placeholder=""  aria-label="Example text with button addon" maxlength="2" aria-describedby="button-addon1" value="0">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-btn" type="button" id="button-addon1"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="food-card food-card--vertical">
                <div class="food-card_img">
                    <img src="{{asset('assets/images/produtos/agua.png')}}" alt="">
                    <a href="#!"><i class="fa fa-heart"></i></a>
                </div>
                <div class="food-card_content">
                    <div class="food-card_title-section">
                        <a href="#!" class="food-card_title">Água mineral</a>
                        <p class="food-card_author">Água sem gás.</p>
                    </div>
                    <div class="food-card_bottom-section">
                        <hr>
                        <div class="space-between">
                            <div class="food-card_price">
                                <span>5.99R$</span>
                            </div>
                            <div class="food-card_order-count" >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="margin-left: -50px !important;">
                                        <button class="btn btn-outline-secondary minus-btn" type="button" id="button-addon1"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control input-manulator" placeholder=""  aria-label="Example text with button addon" maxlength="2" aria-describedby="button-addon1" value="0">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-btn" type="button" id="button-addon1"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
