@extends('layouts.layout')
@section('title')
    {{$sub_category->name}}
@endsection
@section('content')
<div class="flex flex-col space-y-4">
    <div class="text-2xl mt-4 text-center border-b pb-4">
        {{$sub_category->name}}
    </div>
    @if($sub_category->products->count() == 0)
    <div class="text-center">
    Нет товаров

    </div>
    @endif
    <div class="flex flex-wrap justify-between">

        @foreach($sub_category->products as $product)
        <div class="flex flex-col mt-1.5 lg:text-sm lg:w-56 text-xs w-[48%] border items-center justify-between text-center space-y-2 p-2">
            <img src="{{url('images/products/'.$product->image)}}" class="w-5/6 h-40" alt="">
            <a href="{{route('item',$product->id)}}" class="hover:text-red-500 text-sm ">{{$product->name}}</a>
            <p class="font-semibold">{{$product->price}}руб.</p>
            <div class="flex w-4/5  mb-2 text-xs font-semibold ">
                <button class="flex bg-white border drop-shadow-sm w-full text-gray-900 items-center justify-center space-x-1 p-2 rounded">
     
                    В корзину
                </button>
    
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection