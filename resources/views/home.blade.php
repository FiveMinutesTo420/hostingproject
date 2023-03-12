@extends('layouts.layout')
@section('title')ZooYakutsk @endsection
@section('content')
<div class="mt-4 hidden lg:block relative">
    <ul id="slider">
        <li class="h-[50vh] relative">
            <img src="{{url('images\site\slider\fundogbanner2-1140x380.png')}}" class="w-full h-full object-cover" alt="">
        </li>
        <li class="h-[50vh] relative hidden">
            <img src="{{url('images/site/slider/proplanbanner2-1140x380.png')}}" class="w-full h-full object-cover" alt="">

        </li>
       <li class="h-[50vh] relative hidden">
        <img src="{{url('images/site/slider/decor-1140x380.jpg')}}" class="w-full h-full object-cover" alt="">

        </li>
       <li class="h-[50vh] relative hidden">
        <img src="{{url('images/site/slider/bannersushennie-1140x380.png')}}" class="w-full h-full object-cover" alt="">

        </li>
        
    </ul>
    <div class="absolute px-5 flex h-full w-full top-0 left-0">
        <div class="my-auto w-full flex justify-between">
            <button onclick="prev()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                &#10094
            </button>
            <button onclick="next()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                &#10095
            </button>
        </div>

    </div>
</div>
    <div class="w-full flex flex-col lg:flex-row space-y-4 mt-4 lg:space-y-0 justify-between">
        <div class="flex text-center p-4 border w-full lg:w-[49%] bg-white rounded">
            <div class="flex items-start  mr-4">
                <img src="{{url('images/site/vk50.png')}}" class="w-16" alt="">
            </div>
            <div class="flex flex-col">
                <p class="border-b font-semibold  pb-2">Наш ВКонтакте</p>
                <p class="pt-2 font-light">подписывайтесь на нашу группу Vkontakte чтобы узнавать новости первыми</p>
            </div>
        </div>
        <div class="flex text-center p-4 border w-full lg:w-[49%] bg-white rounded">
            <div class="flex items-start mr-4">
                <img src="{{url('images/site/tg50.png')}}" class="w-20" alt="">
            </div>
            <div class="flex flex-col">
                <p class="border-b font-semibold pb-2">Наш Telegram</p>
                <p class="pt-2 font-light">подписывайтесь на наш Telegram чтобы быть в курсе всего первыми, получить консультацию</p>
            </div>

        </div>
    </div>

    <div class="flex  flex-wrap justify-start lg:justify-between text-center font-semibold text-sm w-full">
        <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center lg:text-sm lg:w-56 text-xs w-[45%]">
            <img src="{{url("images/site/vetkorm150.png")}}" class="w-36 " alt="">
            <p>Ветеринарная диета</p>
        </div>
        <div class="flex m-2 2xl:m-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]" >
            <img src="{{url("images/site/ruletki150.jpg")}}" class="w-36" alt="">

            <p>Рулетки</p>

        </div>
        <div class="flex m-2 2xl:m-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
            <img src="{{url("images/site/perenoski150.jpg")}}" class="w-36" alt="">

            <p>Переноски для животных</p>

        </div>
        <div class="flex m-2 2xl:m-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
            <img src="{{url("images/site/vlajka150.png")}}" class="w-36" alt="">

            <p>Влажные корма для кошек</p>
            
        </div>
        <div class="flex m-2 2xl:m-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
            <img src="{{url("images/site/akvadekor150.jpg")}}" class="w-36" alt="">

            <p>Декорации</p>
            
        </div>
    </div>
    <div class="flex flex-col text-center space-y-4 ">
        <p class="font-semibold text-xl mt-4">Корма для кошек под брендом: </p>
        <div class="flex  flex-wrap justify-start lg:justify-between text-center font-semibold text-sm">
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/royalcanin200.png")}}" class="w-36 " alt="">
                <p>Royal Canin для кошек</p>
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]" >
                <img src="{{url("images/site/purina200x200.png")}}" class="w-36" alt="">
    
                <p>PURINA</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/farmina200.png")}}" class="w-36" alt="">
    
                <p>Farmina</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/boreal200.png")}}" class="w-36" alt="">
    
                <p>Boreal для кошек</p>
                
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/derlaklogo200.png")}}" class="w-36" alt="">
    
                <p>Деревенские лакомства</p>
                
            </div>
        </div>
    </div>
    <div class="flex flex-col text-center space-y-4">
        <p class="font-semibold text-xl  mt-4">Корма для собак под брендом: </p>
        <div class="flex  flex-wrap justify-start lg:justify-between text-center font-semibold text-sm">
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/royalcanin200.png")}}" class="w-36 " alt="">
                <p>Royal Canin для собак</p>
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]" >
                <img src="{{url("images/site/purina200x200.png")}}" class="w-36" alt="">
    
                <p>PURINA</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/farmina200.png")}}" class="w-36" alt="">
    
                <p>Farmina</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/territoriyalogo200.png")}}" class="w-36" alt="">
    
                <p>ТерриториЯ™</p>
                
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/fundoglogo200.png")}}" class="w-36" alt="">
    
                <p>Fun Dog</p>
                
            </div>
        </div>
    </div>
    <div class="flex flex-col text-center space-y-4">
        <p class="font-semibold text-xl  mt-4">другие категории товаров: </p>
        <div class="flex  flex-wrap justify-start lg:justify-between text-center font-semibold text-sm">
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/birds170.jpg")}}" class="w-36 " alt="">
                <p>Товары для птиц</p>
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]" >
                <img src="{{url("images/site/kak_chasto_kormit_cherepah170.jpg")}}" class="w-36" alt="">
    
                <p>Корма для рептилий и черепах</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/hamsterhome170.jpg")}}" class="w-36" alt="">
    
                <p>Товары для грызунов</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/section170.jpg")}}" class="w-36" alt="">
    
                <p>Витамины</p>
                
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/grumingcare170.jpg")}}" class="w-36" alt="">
    
                <p>Груминг и уход</p>
                
            </div>
        </div>
        <div class="flex  flex-wrap justify-start   lg:justify-between text-center font-semibold text-sm">
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/dogtoys170.jpg")}}" class="w-36 " alt="">
                <p>Игрушки для собак</p>
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]" >
                <img src="{{url("images/site/domiki170.jpg")}}" class="w-36" alt="">
    
                <p>Лежаки, домики, когеточки</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/napolniteli170.jpeg")}}" class="w-36" alt="">
    
                <p>Наполнители для кошачьего туалета</p>
    
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/miski170.jpeg")}}" class="w-36" alt="">
    
                <p>Миски, бутылочки</p>
                
            </div>
            <div class="flex m-2 2xl:m-0 mt-2 2xl:mt-0 flex-col bg-white border rounded p-4 items-center justify-between lg:text-sm lg:w-56 text-xs w-[45%]">
                <img src="{{url("images/site/akvarium170.jpg")}}" class="w-36" alt="">
    
                <p>Аквариумы</p>
                
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-between">
        <div class="text-center p-2 rounded-tl rounded-tr bg-[#F7F7F7] border border-b-0">
            <p>Рекомендуемые</p>
        </div>
        <div class="rounded-br  rounded-bl border border-t-0 bg-white ">
            <div class="flex justify-between flex-wrap">
                @foreach($recomm_products as $product)
                <div class="flex flex-col justify-between lg:text-sm lg:w-56 text-xs w-[45%]  items-center align-super text-center space-y-2 p-2">
                    <img src="{{url('images/products/'.$product->image)}}"  class="w-5/6 h-40 " alt="">
                    <a href="{{route('item',$product->id)}}" class="text-sm hover:text-red-500">{{$product->name}}</a>
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
            </div>
        </div>

    

@endsection