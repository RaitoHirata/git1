<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>Slow-High</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/base.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
        <script src="{{ asset('/js/layout.js') }}"></script>
        
    </head>

    <body>
        <!--ヘッダ-->
        @include('login_header')
        <h1 class = 'mngtitle'>管理者ページ</h1>
        <!--メイン-->
        <div class="wrapper">
            @include('login_search_view')
            <div class='manager_contents'>
                <p>[管理者用専用操作]</p>
                    <ul>
                        <li><a href="{{ route('scoredata') }}">楽譜アップロード/編集</a></li>
                        <li><a href="">管理者データ</a></li>
                        <li><a href="{{ route('mngregister') }}">新規管理者登録</a></li>
                    </ul>
            </div>
        </div>

  
<!--
            @include('footer')-->

        
            

    </body>
</html>
