<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sidebar.css"/>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="resources/js/bootstrap.js"></script>
    <!-- Styles -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    @stack('styles')

</head>
<body id="page-top">

   <div>
       @include('admin.layouts.navbar')

   </div>



{{--<div id="wrapper">--}}
{{--       <div>--}}
{{--           @include('admin.layouts.sidebar')--}}

{{--       </div>--}}
    <div id="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>


@stack('scripts')

</body>
</html>











