<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>{{$title}}</title>

    {{-- css da página --}}
    <style type = "text/css">
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
        padding: 20px;
        font-family: Helvetica, Arial;
        color: {{$font_color}};
        background: linear-gradient(90deg, #FFFFFF, #000000);
    }

    .profileImage img {
        width: auto;
        height: 100px;
    }

    .profileTitle {
        font-size: 17px;
        font-weight: bold;
        margin-top: 10px;
    }

    .profileDescription {
        font-size: 15px;
        margin-top: 5px;
    }

    .linkArea {
        width: 100%;
        margin: 50px 0;
    }

    .banner a {
        color: {{ $font_color }};
    }

    </style>
</head>
<body>
    <div class = "profileImage">
        <img src = "{{ $profile_image }}">
    </div>

    <div class = "profileTitle">{{ $title }}</div>

    <div class = "profileDescription">{{ $description }}</div>

    <div class = "linkArea">
        @foreach ($links as $link)
            <a
                href = "{{$link-> href}}"
            >{{ $link-> title }}</a>
            
        @endforeach
    </div>

    <div class = "banner">
        Feito com ♥ por <a href = "">Luis Henrique S F</a>
    </div>

    @if(!empty($fb_pixel))
        
    @endif
</body>
</html>