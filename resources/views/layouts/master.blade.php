<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>UBIMOV - @yield('title')</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png" />
    @yield('css')

</head>
<body>
    @section('navbar')

        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>

    @yield('javascript')

    @section('footer')
</body>
</html>