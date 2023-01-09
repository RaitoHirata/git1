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
        <h1 class = 'mngtitle'>楽譜新規登録</h1>
        <!--メイン-->
        <div class="wrapper">
            <table class = "scoretable">
                <tr>
                    <th>アーティスト名</th>
                    <th>曲名</th>
                    <th>楽譜ファイル</th>
                </tr>
                <tr>
                    <form method="post" action="{{ route('uplode') }}" enctype="multipart/form-data">
                    @csrf
                    <th><input type="text" name="artist_name" placeholder="アーティスト名を入力してください" value="{{ Session::get('artist_name') }}"> </th>
                    <th><input type="text" name="song_name" placeholder="曲名を入力してください" value="{{ Session::get('song_name') }}"> </th>
                    <th><input type="file" name="file" class="form-control"  value="{{ Session::get('file') }}"></th>
                    </tr>
            </table>
                @if($errors->all())
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                @endif
                @if(isset($uplode_error)) 
                    <div class ='uplodecomp'>{{ '登録が完了しました。' ;}} </div>
                @endif
            <input type="submit" name="register" value="登録" class = 'register'>
            </form>
                

        </div>
        <a class = return href="{{ route('scoredata') }}">楽譜データ編集画面へ</a>

<!--
            @include('footer')
-->

    </body>
</html>
