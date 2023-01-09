

//import _ from 'lodash';
//window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

//import axios from 'axios';
//window.axios = axios;

//window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

$(function () {

  var isScrolling = 0 ;
  var timeoutId ;
  var h =   $('html').get(0).scrollHeight;
  let state = 'paused';

  $('.start').off('click');
  $('.start').on('click',function(){
    $(this).hide();
    $('.stop').show();
    
    var speed = $('input[name="speed"]:checked').val();
    speed = Number(speed);

      $("html,body").animate({scrollTop:h},speed);
      $('.stop').off('click');
      $(".stop").on('click' , function(){
        $(this).hide();
        $('.start').show();
        $("html,body").stop(false,false);
       
      });

  })

  $('.hidden_btn').hide();
  $('.view_btn').on('click',function(){
      $('.view_btn').hide();
      $('.hidden_btn').show();
      $(this).removeClass('return_move_btn')
      $('.hidden_btn').removeClass('return_move_btn')
      $(this).addClass('move_btn');
      $('.hidden_btn').addClass('move_btn');
      $('.scorefile_stop ').toggleClass('fileshow');
  });
  $('.hidden_btn').on('click',function(){
    $('.view_btn').show();
    $('.hidden_btn').hide();
    $(this).removeClass('move_btn')
    $('.hidden_btn').removeClass('move_btn')
    $(this).addClass('return_move_btn');
    $('.view_btn').addClass('return_move_btn');
    $('.scorefile_stop ').toggleClass('fileshow');
  });

 

  //mylist用/*
  var like = $('.js-like-toggle');
  var likePostId;
  like.on('click', function () {
    var $this = $(this);
    likePostId = $this.data('postid');

    $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
            url: '/ajaxlike',  //routeの記述
            type: 'POST', //受け取り方法の記述（GETもある）
            data: {
                'post_id': likePostId //コントローラーに渡すパラメーター
            },
    })

    // Ajaxリクエストが成功した場合
      .done(function (data) {
      //lovedクラスを追加
                  $this.toggleClass('loved'); 
        })
        // Ajaxリクエストが失敗した場合
       .fail(function(XMLHttpRequest, textStatus, errorThrown){
//ここの処理はエラーが出た時にエラー内容をわかるようにしておく。
//とりあえず下記のように記述しておけばエラー内容が詳しくわかります。笑
        alert('error!!!');
        console.log("XMLHttpRequest : " + XMLHttpRequest.status);
        console.log("textStatus     : " + textStatus);
        console.log("errorThrown    : " + errorThrown.message);
      /*      console.log('エラー');
            console.log(err);
            console.log(xhr);*/
        });
    
    return false;
  });

})



  /*

  $('.release').on('click',function(){
        var res = confirm('公開にしますか')
        if (res == true ){
          var $this = $(this);
          releasePostId = $this.data('postid');
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
                  url: '/ajaxrelease',  //routeの記述
                  type: 'POST', //受け取り方法の記述（GETもある）
                  data: {
                      'post_id': releasePostId //コントローラーに渡すパラメーター
                  },
          })
      
          // Ajaxリクエストが成功した場合
            .done(function (data) {
            //lovedクラスを追加
                        $this.toggleClass('loved'); 
      
              })
              // Ajaxリクエストが失敗した場合
             .fail(function(XMLHttpRequest, textStatus, errorThrown){
              alert('error!!!');
              console.log("XMLHttpRequest : " + XMLHttpRequest.status);
              console.log("textStatus     : " + textStatus);
              console.log("errorThrown    : " + errorThrown.message);
              });
            
              $(".release").prop('disabled',true);
              $(".norelease").prop('disabled',false);
        }

    })*/
/*
    $('.norelease').on('click',function(){
      var res = confirm('非公開にしますか')
      if (res == true ){
        var $this = $(this);
        releasePostId = $this.data('postid');
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
                url: '/ajaxnorelease',  //routeの記述
                type: 'POST', //受け取り方法の記述（GETもある）
                data: {
                    'post_id': releasePostId //コントローラーに渡すパラメーター
                },
        })
    
        // Ajaxリクエストが成功した場合
          .done(function (data) {
          //lovedクラスを追加
                      $this.toggleClass('loved'); 
    
            })
            // Ajaxリクエストが失敗した場合
           .fail(function(XMLHttpRequest, textStatus, errorThrown){
            alert('error!!!');
            console.log("XMLHttpRequest : " + XMLHttpRequest.status);
            console.log("textStatus     : " + textStatus);
            console.log("errorThrown    : " + errorThrown.message);

            });
            $(this).prop('disabled',true);
            $(".release").prop('disabled',false);
    }
*
  })*/
     // return false;
    /*
  $('.release').on('click',function(){
      var res = confirm('公開にしますか')
      if (res == true ){
        $('.norelease').addClass('not');
        $('.release').addClass('not')
      }

      return false;
    });
  $('.norelease').on('click',function(){
          var res = confirm('非公開しますか');
          if (res == true ){
              $('.norelease').removeClass('not');
              $('.release').addClass('not');
              
            }
            return false;
        });*/
   /*
  setTimeout(function() {
    $('.register').on('click',function(){
      $('.uplodecomp').fadeIn(2000);
    })
  }, 5000);

  $(".uplodecomp").fadeIn("slow",function(){
    $(this).delay(5000).fadeOut("slow");
  });

  $('.heart').on('click',function(){
    preventDefault();
    $.ajax({
        url: 'mail.php',
        dataType:'json',
        data
      });
    $(this).addClass('.heart_hidden');

  });*/