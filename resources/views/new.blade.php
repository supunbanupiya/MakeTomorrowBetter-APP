<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larav</title>

        <!-- Fonts -->
        
       

        <link rel="stylesheet" href="{{asset('css/new.css')}}">
<script src="{{asset('js/new.js')}}"></script>
       
       
    </head>
    <body>
        
    <h1>3D Cube Image Gallery</h1>

<div class="cube-container">

    <div class="cube initial-position">

        <img class="cube-face-image image-1" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=300&h=300&fit=crop">
        
        <img class="cube-face-image image-2" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=300&h=300&fit=crop">
        
        <img class="cube-face-image image-3" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=300&h=300&fit=crop">
        
        <img class="cube-face-image image-4" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=300&h=300&fit=crop">
        
        <img class="cube-face-image image-5" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=300&h=300&fit=crop">
        
        <img class="cube-face-image image-6" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=300&h=300&fit=crop">

    </div>

</div>

<h2>Click the images below to rotate the cube</h2>

<div class="image-buttons">

    <input type="image" class="show-image-1" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=100&h=100&fit=crop"></input>

    <input type="image" class="show-image-2" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=100&h=100&fit=crop"></input>

    <input type="image" class="show-image-3" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=100&h=100&fit=crop"></input>

    <input type="image" class="show-image-4" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=100&h=100&fit=crop"></input>

    <input type="image" class="show-image-5" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=100&h=100&fit=crop"></input>

    <input type="image" class="show-image-6" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=100&h=100&fit=crop"></input>

</div>
    </body>
</html>
