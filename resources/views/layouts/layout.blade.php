<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="{{url('images/site/miniLogo.jpg')}}" rel="icon">
    @yield('head')
    <meta name="csrf-token" id="ctoken" content="{{ csrf_token() }}">
</head>
<body>
    <header class="bg-white p-1 drop-shadow-md">
        <div class="container lg:w-9/12 w-[95%]   mx-auto flex font-normal ">
            <div class="flex flex-1  justify-center">
                <a href="" id="top-links" class="space-x-2 flex bg-gray-50 items-center hover:bg-gray-200 px-3 rounded-sm transition-all duration-200">
                    <span>
                        <svg viewBox="0 0 24 24" class="w-5" xmlns="http://www.w3.org/2000/svg" >
                            <path id="svg" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
                        </svg>
                    </span>
                    <span class="lg:block hidden"> Закладки (0)</span></a>
                <a href="" id="top-links" class="space-x-2 flex bg-gray-50  items-center hover:bg-gray-200 px-3 rounded-sm transition-all duration-200">
                    <span>
                        <svg class="w-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                            <path id="svg" d="M10 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h5v2h2V1h-2v2zm0 15H5l5-6v6zm9-15h-5v2h5v13l-5-6v9h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                        </svg>
                    </span>
                    <span class="lg:block hidden"> Сравнение (0)</span></a>
            </div>
            <div class="flex  text-md ">
                <button id="help-btn" class="flex space-x-2 bg-gray-50  items-center hover:bg-gray-200 px-3 rounded-sm transition-all duration-200">
                    <span>
                        <svg class="w-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                            <path id="svg" d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                        </svg>
                    </span>
                    <span class="lg:block hidden">Помощь</span>
                </button>

                <button id="log-btn" class="flex space-x-2 bg-gray-50  items-center hover:bg-gray-200 px-3 py-1 rounded-sm transition-all duration-200">
                    <span>
                        <svg class="w-5"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                            <path id="svg" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </span>
                    <span class="lg:block hidden">
                        @if(auth()->check())
                            {{auth()->user()->name}}
                        @else
                        Личный кабинет
                        @endif
                    </span>
                </button>
       
            </div>
            
        </div>
        <div class="lg:w-4/5 w-full mx-auto">
            <div class="flex w-full justify-end ">
                <div id="help-menu" class="h-20 hidden w-50 lg:mr-32  text-sm bg-white border absolute flex flex-col justify-center items-center">
                    <a href="" class="w-full hover:bg-gray-100 p-1 px-4">Условия доставки</a>
                    <a href="" class="w-full hover:bg-gray-100 p-1 px-4">Контакты</a>
                    
                </div>
                <div id="log-menu" class="h-max rounded hidden w-54 text-sm lg:mr-5   bg-white border absolute flex flex-col justify-center items-center">
                    @if(auth()->check())
                    <a href="{{route('reg_p')}}" class="w-full hover:bg-gray-100 p-1 px-4 ">Личный кабинет</a>
                    <a href="{{route('log_p')}}" class="w-full hover:bg-gray-100 p-1 px-4">История заказов</a>
                    <a href="{{route('reg_p')}}" class="w-full hover:bg-gray-100 p-1 px-4 ">Корзина</a>
                    <form action="{{route('logout')}}" method="POST" class="w-full cursor-pointer">
                        @csrf
                        <input type="submit" value="Выход" class="w-full text-left hover:bg-gray-100 p-1 px-4">
                    </form>
        
                    @else
                    <a href="{{route('reg_p')}}" class="w-full hover:bg-gray-100 p-1 px-4 ">Регистрация</a>
                    <a href="{{route('log_p')}}" class="w-full hover:bg-gray-100 p-1 px-4">Авторизация</a>
                    @endif
                    
                </div>
            </div>

        </div>
            
        
        
    </header>

    <div class="container lg:w-9/12 w-[95%] mx-auto space-y-4  ">
        <div class="flex items-center mt-5 lg:flex-row flex-col ">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="249.972" height="150.56" viewBox="0 0 953 574">
                <metadata>
                                                                                                                  
                                                                                                                  
                                                                                                                  
                                                                                                                  
                                                                                          
                                                                                                                  
                                         
              </metadata>
              <image id="Слой_2" data-name="Слой 2" x="34" y="96" width="178" height="276" xlink:href="data:img/png;base64,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"/>
                <image id="Слой_1" data-name="Слой 1" x="68" y="96" width="736" height="440" xlink:href="data:img/png;base64,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"/>
                <image id="Слой_3" data-name="Слой 3" x="631" y="161" width="208" height="192" xlink:href="data:img/png;base64,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"/>
              </svg>
                        
            
                <div class="lg:border-t-0 lg:border-b-0 lg:w-auto lg:p-0 border-t-2 border-b-2 w-full text-center flex items-center flex-col p-4">
                    <div class="flex">
                        <svg class="d-block position-absolute" fill="#00ff00" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span class="font-semibold text-lg">74112 21-28-27</span> 
                    </div>

                    <p class="text-xs text-gray-500 ">+7 (914)278-26-29</p>
                </div>

            </div>
        <div class="mt-4   flex xl:flex-row xl:space-x-5 space-x-0 space-y-4 xl:space-y-0 flex-col">
            <div class="flex flex-col">
                <button class="bg-[#F79400] flex text-white p-3 w-full xl:w-[249px] rounded font-semibold" id="category_button">
                    <span>
                        <svg height="24" fill="#fff" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                        </svg>
                    </span>
                    <span class="flex-1">Категории</span>
                    <span>
                        <svg height="24" width="24" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                        </svg>
                    </span>
                </button>
                <div class="absolute z-20 hidden flex-col  rounded-br-lg rounded-bl-lg border bg-white w-2/3 xl:w-[249px] mt-12" id="category_menu">
                    @foreach($categories as $category)
                    <div class="flex p-3 border-t items-center justify-between hover:text-red-500 " @if($category->subcategories->count() > 0) onmouseover="show(this)" onmouseout="hide(this)" onclick="show(this)" @endif  >
                        <div class="flex">
                            <img src="{{url('images/site/categories/'.$category->image)}}" alt="" class="">
                            @if($category->subcategories->count() > 0)
                            <p href="{{route('category',$category->id)}}" class="cursor-pointer text-sm ml-4 font-semibold " >
                                {{$category->name}}
                            </p>
                            @else
                            <a href="{{route('category',$category->id)}}" class="cursor-pointer text-sm ml-4 font-semibold " >
                                {{$category->name}}
                            </a>
                            @endif
                        </div>

                        @if($category->subcategories->count() > 0)
                        <svg fill="#aaa" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                        </svg>
                        <div class="absolute flex flex-col hidden lg:ml-[237px] p-3 px-4 space-y-4 ml-[210px] items-center bg-white border rounded-lg  w-[150px]" id="sub_cats">
                            @foreach($category->subcategories as $sub_category)
                            <a href="{{route('subcategory',[$category->id,$sub_category->id])}}" class="text-xs lg:text-sm    text-black font-semibold  hover:text-red-500 w-full ">
                                {{$sub_category->name}} 
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    @endforeach
                 
                </div>
            </div>
          
            <div class="flex flex-col w-full">
            
            <input placeholder="Поиск в каталоге" id="search-input" oninput="search(this,'{{route('search')}}','{{url('images/products')}}','{{url('item')}}')   " type="text" class="flex-1 rounded py-3 border px-4">
                <div id="search-results" class="hidden absolute z-20 mt-14 w-[95%] md:w-[80%] lg:w-[40%] bg-white border rounded  drop-shadow  flex flex-col">
                    <div id="search-items-results" class="w-full">
                        
                    </div>
                    <a href="" class="flex justify-center p-2 text-xs">
                        Все результаты ( <span id="amount_search"></span> )
                    </a>
                    
                </div>
    
            </div>
            <button class="flex py-3 text-white justify-between  items-center py-1 xl:py-0 bg-[#007BFF] w-full xl:w-auto text-sm px-4 rounded space-x-4" onclick="showCartModal()">
                <span class="flex">
                    <svg width="24" class=""  fill="#fff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                    </svg>
                </span>
                <span class="">
                    @if(Auth::check())
                    Корзина ({{auth()->user()->cart->count()}})
                    @else
                    <p>Войдите</p>
                    @endif
                </span>
                <span class="flex">
                    <svg width="24" fill="#fff" class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
					</svg>
                </span>
            </button>
            
        </div>
     

        @if(Session::has('success'))
        <div class="p-3 px-4 flex items-center justify-center rounded bg-green-400 text-white text-lg">
            {{Session::get('success')}}
        </div>
        @endif
     
    </div>
    
    <div class="container lg:w-9/12 w-[95%] mx-auto space-y-6  ">
        @yield('content')
    </div>
    <div class="container lg:w-9/12 w-[95%] border rounded mx-auto space-y-6 mt-4 mb-4 ">
       <div class="bg-white w-full p-4">
        <div class="flex text-center flex-col  lg:flex-row justify-between items-center lg:items-start space-y-5 lg:space-y-0">
            <div class="flex flex-col w-full border-b b justify-center  lg:border-b-0 py-3 space-y-4">
                <div class="flex w-full justify-between cursor-pointer items-center" onclick="showfooter(this)">
                    <p class="font-semibold lg:text-lg text-base flex w-full justify-center">Информация</p>
                    <svg fill="#000000" width="11" class="lg:hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"></path> </g></svg>
                </div>
                <div class="text-sm space-y-2 mt-2 lg:flex flex-col hidden  items-center ">
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    О компании</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>Политика конфиденциальности </p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Пользовательское соглашение</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Условия доставки</p>

                </div>
               
            </div>
            <div class="flex flex-col w-full border-b lg:border-b-0 py-3 space-y-4">
                <div class="flex w-full justify-between cursor-pointer items-center" onclick="showfooter(this)">
                    <p class="font-semibold lg:text-lg text-base flex w-full justify-center">Служба поддержки</p>
                    <svg fill="#000000" height="11px" width="11px" class="lg:hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"></path> </g></svg>
                </div>
                <div class="text-sm space-y-2 mt-2 lg:flex flex-col hidden  items-center ">
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Контакты</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>Возврат товара </p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Карта сайта</p>
               

                </div>
               
            </div>
            <div class="flex flex-col w-full border-b lg:border-b-0 py-3 space-y-4">
                <div class="flex w-full justify-between cursor-pointer items-center" onclick="showfooter(this)">
                    <p class="font-semibold lg:text-lg text-base flex w-full justify-center">Дополнительно</p>
                    <svg fill="#000000" height="11px" width="11px" class="lg:hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"></path> </g></svg>
                </div>
                <div class="text-sm space-y-2 mt-2 lg:flex flex-col hidden  items-center ">
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Производители</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>Подарочные сертификаты </p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Партнерская программа</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Акции</p>

                </div>
               
            </div>
            <div class="flex flex-col w-full border-b lg:border-b-0 py-3 space-y-4">
                <div class="flex w-full justify-between cursor-pointer items-center" onclick="showfooter(this)">
                    <p class="font-semibold lg:text-lg text-base flex w-full justify-center">Личный кабинет</p>
                    <svg fill="#000000" height="11px" width="11px" class="lg:hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"></path> </g></svg>
                </div>
                <div class="text-sm space-y-2 mt-2 lg:flex flex-col hidden  items-center ">
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Личный кабинет</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>История заказов </p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Закладки</p>
                    <p class="flex text-start lg:text-center">
                        <svg fill="#aaa" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                    </svg>
                    Рассылка</p>

                </div>
               
            </div>
        </div>
       </div>
    </div>
    <div class="relative z-10 hidden" id="cart_modal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.
      
          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <!--
              Modal panel, show/hide based on modal state.
      
              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class=" ">
   
                  <div class="mt-3  text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Корзина покупок</h3>
                    <div class="mt-4 text-sm space-y-4 text-gray-500 ">
                    @if(Auth::check())
                        @if(auth()->user()->cart->count() == 0)
                            <p> Вы не добавили ни одного товара </p>
                        @else
                            @foreach(auth()->user()->cart as $cart_item)
                            <div class="flex justify-between items-center text-xs lg:text-sm space-x-2  py-3">
                                <img width="60" src="{{url('images/products/'.$cart_item->item->image)}}" alt="">
                                <a href="{{route('item',$cart_item->item->id)}}" class="text-center  hover:border-b text-blue-500">{{$cart_item->item->name}}</a>
                                <div class="flex flex-col">
                                    <p><b class="text-black">{{$cart_item->item->price * $cart_item->count}}</b> руб.</p>
                                    <p class="text-center text-xs text-black">x{{$cart_item->count}}</p>
                                </div>
                            </div>
                            @endforeach
                            <?php $sum_total = 0?>
                            <div class="w-full flex items-center border-t border-b p-4 justify-center">
                            @foreach(auth()->user()->cart as $cart_item)
                                <?php $sum_total += $cart_item->item->price * $cart_item->count ?>
                                
                            @endforeach
                               <p> {{auth()->user()->cart->count()}} товар(ов), на сумму  <b class="text-black">{{$sum_total}} рублей</b></p>
                            </div>
                        @endif
                      @else
                      <p><a href="{{route("log_p")}}" class="text-blue-500 border-b">Войдите</a>, чтобы добавлять товары в корзину</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 ">
                @if(Auth::check())
                @if(auth()->user()->cart->count() != 0)
                <button type="submit" class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 sm:ml-3 sm:w-auto">Оформить заказ</button>
                @endif
                 
                  <a href="{{route('cart')}}" class="mt-3 lg:mt-0 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold shadow-sm text-gray-900 sm:ml-3 sm:w-auto ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Перейти в корзину</a>
               
                @else
                <a href="{{route('log_p')}}" class="cursor-pointer inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 sm:ml-3 sm:w-auto">Войти</a>
                @endif
                <button type="button" id="back_cart_modal_btn" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Вернуться</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="{{url('js/layout.js')}}"></script>
    @yield('scripts')
</body>
</html>