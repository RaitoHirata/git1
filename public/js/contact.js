
$(function () {
  //header用のjs始まり//
  $(document).ready(function(){
    $('.header2').addClass('active1');
    $('.back_color').addClass('active100_contact');
    $('.header').addClass('active99_contact');
  });

  $("#homebutton").click(function() {
    window.location.href = 'home.php';
  });

  $('.signin_a').on('click',function(){
    $('.signwrap').addClass('active3');
    $('.signcontents').addClass('active4');
    return false 
  });

  $('.signcontents').on('click',function(e){
    if (!$(e.target).closest('.signwrap').length){
      $('.signwrap').removeClass('active3');
      $('.signcontents').removeClass('active4');
      $('.min-header').removeClass('active5');
      return false 
    }
  }) ;       

  $('#start,#experience,.signin_a').on('click',function(){
    $('.min-header').removeClass('active5');
    return false 
  });

  $('.hamburger').on('click',function(){
    $('.min-header').toggleClass('active5');
    return false 
  });

 //header用のjsおわり//*/
 //アラート//

  $('#submit_btn').on('click', function() {

    var namelength = $('#name_text').val().length;
    var furiganalength = $('#furigana_text').val().length;
    var pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
    var phone = $('#phonenumber_text').val();
    var mail = $('#mail_text').val();
    var array = [];
    const tel = /[^0-9]/g;

    if ($('#name_text').val()==='' || (10 < namelength)) {
      array.push('氏名は必須入力です。10文字以内でご入力ください');
    } 
    
    if ($('#furigana_text').val()==='' || (10 < furiganalength)) {
      array.push('フリガナは必須入力です。10文字以内でご入力ください');
    } 
    
    if (phone != '' && !/[0-9]/.test(phone) ) {
      array.push('電話番号は0-9の数字のみでご入力ください');
    }
    
    if ($('#mail_text').val()===''  || !pattern.test(mail)) {
      array.push('メールアドレスは必須入力です。メールアドレスは正しく入力ください');
    }
    
    if ($('#content_text').val()==='') {
      array.push('お問い合わせ内容は必須入力です');
    }
    
    if (array.length>0) {
      alert(array.join('\n'));
    }

  });

  //DELETE処理確認
  $('.delete').on('click',function(){
      if (!confirm('削除してもよろしいですか?')){
        return false;
      } 
  });
}) 