<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex w-full justify-center mt-4 mb-4 flex-col items-center">
        <div class="text-2xl">Hello on my website!</div>
        <div class="text-lg">You're IP address is: <span class="text-red-500">{{request()->ip()}}</span></div>
    </div>

    <div class="flex w-full justify-around items-center p-3">
        <input type="button" value="Please, click me" id="button" class="transition-all cursor-pointer hover:bg-green-500 p-3 px-4 text-white bg-green-400 rounded">
    </div>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>