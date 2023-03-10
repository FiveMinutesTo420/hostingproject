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
    <div class="flex w-full justify-around mt-4 items-center p-3">
        <div class="text-red-500">1</div>
        <input type="button" value="Please, click me" id="button" class="p-3 px-4 text-white bg-green-400 rounded-sm">
        <div class="text-green-500">2</div>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>