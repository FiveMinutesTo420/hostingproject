@extends('layouts.layout')
@section('title')
    {{$category->name}}
@endsection
@section('content')
    <div class="flex flex-col space-y-4">
        <div class="text-2xl mt-4 text-center border-b pb-4">
            {{$category->name}}
        </div>


    @if($category->subcategories->count()>0)
    <div class="text-center font-semibold text-lg">Выберите подкатегорию</div>
    <div class="flex justify-start flex-wrap">
        @foreach($category->subcategories as $subcategory)
        <div class="flex mt-2  2xl:mt-0 flex-col bg-white border text-center rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[48%]">
            <img src="{{url("images/site/sub_categories/".$subcategory->image)}}" class="w-36 " alt="">
            <a href="{{route('subcategory',[$category->id,$subcategory->id])}}" class="text-red">{{$subcategory->name}}</a>
        </div>
        @endforeach
        

    </div>
        
    @else
    @if($category->products->count() == 0)
    <div class="text-center">
    Нет товаров

    </div>
    @endif
    <div class="flex flex-wrap justify-between">
        @foreach($category->products as $product)
        <div class="flex flex-col mt-1.5 lg:text-sm lg:w-56 text-xs w-[48%] border items-center justify-between text-center space-y-2 p-2">
            <img src="{{url('images/products/'.$product->image)}}" class="w-5/6 h-40" alt="">
            <a href="{{route('item',$product->id)}}" class="hover:text-red-500 text-sm">{{$product->name}}</a>
            <p class="font-semibold">{{$product->price}}руб.</p>
            <div class="flex w-4/5  mb-2 text-xs font-semibold ">
                <button class="flex bg-white border drop-shadow-sm w-full text-gray-900 items-center justify-center space-x-1 p-2 rounded">
     
                    Купить
                </button>
    
            </div>
        </div>
        @endforeach
    </div>
    @endif
    </div>

@endsection