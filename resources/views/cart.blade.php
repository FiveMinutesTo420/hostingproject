@extends('layouts.layout')
@section('head')
    <meta name="csrf-token" content="{{csrf_token()}}" id="ctoken">
    <style>
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>
@endsection
@section('title')
    Корзина покупок
@endsection
@section('content') 
    <div class="ifhaserror">
        @if($not_in_stock == true)
        <div class="flex w-full p-4 text-xs bg-[#F8D7DA] mt-4 rounded text-center justify-center drop-shadow" id="error">
            Товары отмеченные *** отсутствуют в нужном количестве или их нет на складе!
        </div>
    @endif
    </div>

    <div class="text-2xl lg:text-3xl text-center mt-4">Корзина покупок</div>
    <div class="lg:flex justify-between mt-4">
        <div class="flex flex-col border drop-shadow rounded w-full space-y-2 lg:w-[65%] p-3">
            <div class="flex text-[9px] lg:text-xs text-center  border-b pb-2 drop-shadow-sm items-center justify-between">
                <p class="w-[65px] lg:w-[80px]">Изображение</p>
                <p class="w-[150px] lg:w-[250px]  ">Название товара</p>
                <p class="w-[100px] ">Кол-во</p>
                <p class="w-[60px]">Цена за штуку</p>
                <p class="w-[60px]">Всего</p>
            </div>
            @foreach($user_cart_items as $cart)
            <div class="flex text-[9px] lg:text-sm text-center space-x-4  border-b pb-2 drop-shadow-sm items-center justify-between">
                <img src="{{url('images/products/'.$cart->item->image)}}" class="rounded w-[65px] lg:w-[80px]" alt="">
                <a href="{{route('item',$cart->item->id)}}" class="w-[150px] lg:w-[250px] " id="cart{{$cart->id}}">
                    {{$cart->item->name}}
                    <div id="error">
                        @if($cart->count > $cart->item->in_stock)
                        <div class="text-red-500" id="error{{$cart->id}}">***</div>
                    @endif
                    </div>

                </a>
                <p class="w-[100px]"><input type="number" onchange="changeAmount(this,'{{$cart->id}}','{{route('change_amount')}}')" value="{{$cart->count}}" class="w-1/2 text-center"></p>
                <p class="w-[60px]">{{ number_format($cart->item->price)}} руб.</p>
                <p class="w-[60px]">{{number_format($cart->count * $cart->item->price)}} руб.</p>
            </div>
            @endforeach
        </div>
        <div class="flex bg-green-100 w-full lg:w-1/3 p-4">
  
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{url('js/cart.js')}}"></script>
@endsection