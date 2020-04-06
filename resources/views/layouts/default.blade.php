<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container-fluid">

        <header class="row">
            @include('includes.header')
        </header>

        <div id="main" class="row">
            @yield('content')
        </div>

        <footer class="row pb-3 foot-sec">
            @include('includes.footer')
        </footer>

    </div>
</body>

</html>