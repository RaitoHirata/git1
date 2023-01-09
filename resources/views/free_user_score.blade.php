<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>Slow-High</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content=Type" content="text/html; charset=UTF-8"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/base.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
        <script src="{{ asset('/js/layout.js') }}"></script>
        
        
    </head>

    <body>
        <!--ヘッダ-->
        @include('header')
        <!--メイン-->
        <div class="wrapper">
            
         
            <table class ="score">
                <tr>
                    <th class ="score_title">アーティスト名</th>
                    <th > {{ $scorelink->artist_name }}</th>
                </tr>
                <tr>
                    <th class ="score_title">曲名</th>
                    <th>{{ $scorelink->song_name }}</th>
                </tr>
            </table>
            <li>スクロール速度調整  遅い << 
            <input type="radio" name="speed" value="50000" id="speed1" >
            <input type="radio" name="speed" value="40000" id="speed2">
            <input type="radio" name="speed" value="30000" id="speed3" checked>
            <input type="radio" name="speed" value="20000" id="speed4">
            <input type="radio" name="speed" value="10000" id="speed5">
            >> 速い
        </div>
        <div class ="score_body">
    
         <pre> <a class = "scorefile">
                <?php 
                $fp = fopen("$scorelink->path", "r");
                while (!feof($fp)) {
                echo fgets($fp).'<br>';
                }
                fclose($fp);
                ?></a> </pre>
        <div class = 'start scrollbtn' >スクロール開始</div>
        <div class = 'stop scrollbtn' >スクロール停止</div>
      <!--      <pre> <a class = "scorefile_stop">{{ readfile($scorelink->path) }}</a> </pre> -->
        </div>
        <?php $role = session('role'); ?> 
 
        <a class = 'return_login_search' href="
            {{ route('index') }}
        ">HOME画面へ</a>
<!--
            @include('footer')
        -->
    </body>
</html>
