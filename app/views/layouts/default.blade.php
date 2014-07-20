<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>psyao.ch : Curriculum  vitae en ligne de Steve Aguet</title>
<!--    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"/>-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,700">
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body data-spy="scroll" data-target=".navbar-default">

@include('layouts.partials.nav')
@include('layouts.partials.message')
<div class="wrapper">
    @yield('content')
</div>

@include('layouts.partials.footer')

<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
