<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>APホテル</title>
    <style>
        body {
            color: #333333;
            background-color: #ffffff;
            font-size: 100%;
            line-height: 1.7;
            margin: 10px auto;
            width:90%;
            -webkit-text-size-adjust: 100%;
        }

        a {
            text-decoration: none;
        }

        .main-nav {
            display: flex;
            font-size:1.25rem;
            text-transform:uppercase;
            list-style:none;
        }

        .main-nav li{
            margin-left:36px;
        }
        table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }
    </style>
</head>
<body>
    <header>
        <h1>APホテル</h1>
        <nav>
            <ul class="main-nav">
                <li><a href="/guest">利用者一覧</a></li>
                <li><a href="/reserve">予約一覧</a></li>
                <li><a href="/room_type">部屋種一覧</a></li>
                <li><a href="/room">部屋一覧</a></li>
            </ul>
            <ul class="main-nav">
                <li><a href="/guest/add">利用者追加</a></li>
                <li><a href="/reserve/add">予約追加</a></li>
            </ul>
        </nav>
    </header>
    <body>
        @yield('body')
    </body>
</body>
</html>