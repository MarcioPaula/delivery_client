@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/cardapio.css')}}">
    <form action='{{route('pedido')}}' id='pedidos' method='post'>
        {{csrf_field()}}
    <div id="comidas"><h3>Comidas</h3></div>
    <div class="row">
        @foreach($produtos as $produto)
            <div id="{{$produto['nome']}}"  ></div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="food-card food-card--vertical">
                <div class="food-card_img">
                    <img src="{{asset('assets/images/produtos/'.$produto['nome'].'.png')}}" alt="">
                    <a href="#!"><i class="fa fa-heart"></i></a>
                </div>
                <div class="food-card_content">
                    <div class="food-card_title-section">
                        <a href="#!" class="food-card_title">{{$produto['nome']}}</a>
                        <p class="food-card_author">{{$produto['descricao']}}</p>
                    </div>
                    <div class="food-card_bottom-section">
                        <hr>
                        <div class="space-between">
                            <div class="food-card_price">
                                <span>R${{$produto['valor_unitario']}}</span>
                            </div>
                            <div class="food-card_order-count">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend" style="margin-left: -70px !important;">
                                        <button class="btn btn-outline-secondary minus-btn" onclick="RemItem{{$produto['id']}}()" type="button" id="target"><i class="mdi mdi-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control input-manulator" placeholder="" readonly id="tot_item{{$produto['id']}}" aria-label="Example text with button addon" maxlength="2" aria-describedby="button-addon1" value="0">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-btn" onclick="AddItem{{$produto['id']}}()" type="button" id="button-addon1"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <script>
                var item{{$produto['id']}} = 0
                var total_item = 0
                document.cookie='total_item=0';
                var fin_botao = false;
                function RemItem{{$produto['id']}}(){
                    if (item{{$produto['id']}} > 0){
                        item{{$produto['id']}}-=1;
                        if (total_item > 0)
                        {
                            total_item-=1;
                            $('item{{$produto['id']}}').last().remove()
                            $('produto{{$produto['id']}}').last().remove()

                            document.cookie='total_item='+total_item;
                            $("#total_ped").text(total_item) ;
                        }
                        if (total_item === 0)
                        {
                            desativa_botao()
                        }
                        $("#tot_item{{$produto['id']}}").val(item{{$produto['id']}}) ;
                    }
                }
                function AddItem{{$produto['id']}}(){

                    item{{$produto['id']}}+=1;
                    total_item+=1;
                    //Manda itens para o carrinho
                    $('itens_cart').append
                    ("<item{{$produto['id']}}><a class= 'dropdown-item preview-item'><div class='preview-thumbnail'><img src='{{ url('assets/images/produtos/'.$produto['nome'].'.png') }}' alt='image' class='img-sm profile-pic'></div><div class='preview-item-content flex-grow py-2'><span>{{$produto['nome']}}</span><p class='font-weight-light small-text'> {{$produto['descricao']}}</p></div></a></item{{$produto['id']}}>")

                    //adiciona inputs ao dos itens ao form
                    $('form').append
                    ("<produto{{$produto['id']}}><input hidden type='text'  name='produto[]' value='{{$produto['nome']}}'>" +
                    "<input type='text' hidden name='valor[]' value='{{$produto['valor_unitario']}}'></produto{{$produto['id']}}>")

                    document.cookie='total_item='+total_item;
                    $("#total_ped").text(total_item) ;
                    $("#tot_item{{$produto['id']}}").val(item{{$produto['id']}}) ;
                    if (total_item > 0)
                    {
                        ativa_botao()
                    }
                }
                function ativa_botao()
                {
                    document.getElementById('fin_button').style.visibility = "visible";
                }
                function desativa_botao()
                {
                    document.getElementById('fin_button').style.visibility = "hidden";
                }

            </script>

        @endforeach
            <button type="submit" form="pedidos" class="btn btn-lg btn-success fixed-bottom" id="fin_button"  style="position: fixed;visibility: hidden">FINALIZAR PEDIDO</input>

    </form>

    </div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
