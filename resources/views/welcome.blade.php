<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dummy Dashboard</title>
</head>
<body>
    <nav class="">
        <div class="flex justify-between bg-red-500 p-5">
            <ul class="flex text-white">
                <li class="mr-5 ml-5">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="mr-5 ml-5">
                    <a href="{{ route('api.data') }}">Data API</a>
                </li>
            </ul>
            <ul class="flex text-white">
                <li class="ml-5 mr-5">
                    Dashboard
                </li>
                <li class="ml-5 mr-5">
                    PT Test 
                </li>
            </ul>
        </div>
        @yield('content')
    </nav>
</body>
@yield('script')
</html>