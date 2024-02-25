<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Ecommerce Project</title>
    <link  rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src ="{{ asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src ="{{ asset('jquery/jquery.min.js')}}"></script>
</head>
<body>
    <h1>Yogendra Subedi</h1>
    <!-- <script>  
        $(document).ready(function(){
            alert(1);
        });
    </script> -->
    <section id ='header'>
         <div class ='menu'>
            <a href="{{route('getHome')}}">Home</a>
            <a href="{{route('getAbout')}}">About Us</a>
            <a href="">Services</a>
            <a href="">Gallery</a>
         </div>
    </section>
    <section id ='content'>
        @yield('abc')
    </section>
    <section id ='footer'>
        <h1>Footer Section</h1>
    </section>
</body>
</html>