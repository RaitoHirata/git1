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
        @if(isset($login_error))
                <p>{{ '登録したメールアドレスが違います。' }}</p>
        @endif
        <div class="login color">
            <div class="background_color">
                <div class="login_wrapper">
                    @if(isset($send_complete))
                            <p class = "logintitle">{{ '送信が完了しました。' }}</p>
                    @endif
                    @if(isset($send_false))
                            <p class = "logintitle">{{ '送信失敗。' }}</p>
                            <p>お手数をおかけしますが再度メール送信頂きますよう宜しくお願い致します。</p>
                    @endif
                </div>
            </div>
        </div>
  
<!--
            @include('footer')
-->

    </body>
</html>
