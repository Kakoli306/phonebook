<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
</head>

<body>
<div id="app">
    <Myheader></Myheader>
    <div class="container">
        <router-view></router-view>

    </div>
    <Myfooter></Myfooter>
    
</div>

<script src="{{asset('public/js/app.js')}}"></script>
</body>
</html>