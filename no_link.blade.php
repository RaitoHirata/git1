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
        @include('header')
        <!--メイン-->
        @if($errors->has('email'))
            @foreach($errors->get('email') as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        @if($errors->has('password'))
            {{($errors->first('password'))}}
        @endif
        <div class="login color">
            <div class="background_color">
                <div class="login_wrapper">
                    <p class = "logintitle">リンク切れ</p>
                    <p>URLの有効時間を過ぎました。再度パスワード再登録画面よりお手続きをお願いします。</p>
                    <a class = "pw_reset_info" href="{{ route('user_pw') }}">パスワードを忘れた方はこちら</a>
                </div>
            </div>
        </div>
  
<!--
            @include('footer')
-->

    </body>
</html>
