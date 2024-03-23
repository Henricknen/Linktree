<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>{{$title}}</title>

    <style type = "text/css">

    </style>
</head>
<body>
    <div class = "profileImage">
        <img src = "{{ $profile_image }}">
    </div>

    <div class = "profileTitle">{{ $title }}</div>

    <div class = "profileDescription">{{ $description }}</div>

    <div class = "linkArea">

    </div>

    <div class = "banner">
        Feito com ♥ por <a href = "">Luis Henrique S F</a>
    </div>

    @if(!empty($fb_pixel))
        
    @endif
</body>
</html>