<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Gambar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #111;
        }
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container-img {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        img {
            max-width: 98vw;
            max-height: 98vh;
            width: auto;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 4px 32px rgba(0,0,0,0.2);
            background: #fff;
            object-fit: contain;
            display: block;
        }
        @media (max-width: 600px) {
            img {
                max-width: 100vw;
                max-height: 100vh;
                border-radius: 0;
                box-shadow: none;
            }
            .container-img {
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container-img">
        @if($gambar)
            <img src="{{ asset('gambar/'.$gambar->filename) }}" alt="Random Gambar">
        @else
            <p style="color:white;">Tidak ada gambar.</p>
        @endif
    </div>
</body>
</html>
