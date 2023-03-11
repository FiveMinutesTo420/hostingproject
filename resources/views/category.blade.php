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
        <div class="flex flex-col mt-1.5 lg:text-sm lg:w-56 text-xs w-[48%] border items-center text-center space-y-2 p-2">
            <img src="{{url('images/products/'.$product->image)}}" class="w-5/6 h-40" alt="">
            <a href="{{route('item',$product->id)}}" class="hover:text-red-500 text-sm">{{$product->name}}</a>
            <p class="font-semibold">{{$product->price}}руб.</p>
            <div class="flex w-4/5  mb-2 text-xs font-semibold ">
                <button class="flex hover:bg-red-600 hover:text-white items-center space-x-1 bg-[#F8F9FA] px-2 py-1 rounded-l">
                    <span>
                        <svg width="20" fill="#bbb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                        </svg>
                    </span>
                    <p>Купить </p>
                </button>
                <button class="flex flex-1 hover:bg-red-600 hover:text-white bg-[#F8F9FA]  justify-center items-center">
                    <svg width="20" fill="#bbb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 1H9v2h6V1zm-4 13h2V8h-2v6zm8.03-6.61l1.42-1.42c-.43-.51-.9-.99-1.41-1.41l-1.42 1.42C16.07 4.74 14.12 4 12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9 9-4.03 9-9c0-2.12-.74-4.07-1.97-5.61zM12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/>
                    </svg>
                </button>
                <button class="flex flex-1 hover:bg-red-600 hover:text-white bg-[#F8F9FA]  justify-center  items-center">
                    <svg width="20" fill="#bbb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z"></path><path d="M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z"></path>
                    </svg>
                </button>
                <button class="flex flex-1  hover:bg-red-600 hover:text-white bg-[#F8F9FA] justify-center rounded-r items-center">
                    <svg fill="#bbb" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    </div>

@endsection