<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SALÓN DE CLASES MARUCHAN</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/icons/icon.png') }}" />
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        body {
            background: #161616;
        }

        .content {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .img {
            width: 140px;
        }

        .txt {
            padding-top: 1rem;
            font-size: 0.8em;
            font-family: sans-serif;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="content">
        <img src="{{ url('assets/icons/Layer_1.png') }}" class="img" alt="">
        <p class="txt">Nos estamos actualizando......</p>
    </div>
</body>

</html>
