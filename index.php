<?php
require_once ('./info/comhead.php');
?>
<!-- Navigation-->
<?php
require_once ('./info/topmenu.php');
?>


<style>
.sns_login {
list-style:none;
margin:0;
margin-top: 40px;
padding: 0;
}
.sns_login li {
  margin-top: 15px;
}
.sns_login .loginBtn {
    display: inline-block;
    /* background: #2596E9; */
    color: white;
    width: 200px;
    border-radius: 5px;
    text-align: left;
}

#sns_google .loginBtn {
    background: #e74b37;
}

#sns_kakao .loginBtn {
    background: #ffeb00;
}
#sns_naver .loginBtn {
    background: #1ec800;
}

.sns_login span.icon {
    display: inline-block;
    vertical-align: middle;
    width: 40px;
    height: 40px;
}

#sns_google span.icon {
    background: url(/kang39/img/btn_google.png) transparent 10px 50% no-repeat;
    display: inline-block;
    vertical-align: middle;
    width: 40px;
    height: 40px;
}

#sns_kakao span.icon {
    background: url(/kang39/img/btn_kakao.png) transparent 10px 50% no-repeat;
    display: inline-block;
    vertical-align: middle;
    width: 40px;
    height: 40px;
}

#sns_naver span.icon {
    background: url(/kang39/img/btn_naver.png) transparent 10px 50% no-repeat;
    display: inline-block;
    vertical-align: middle;
    width: 40px;
    height: 40px;
}

.sns_login span.buttonText {
    display: inline-block;
    vertical-align: middle;
    padding-left: 20px;
}
</style>


        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase" style="letter-spacing: 0.3rem;">당신을치료합니다</h1>
                    <pre class="text-white mx-auto mt-2 mb-5" style="max-width:20rem;font-size:1rem;font-weight: 500;
    line-height: 1.2;margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;display: block;">안녕하세요 닥터강입니다
이제부터 여러분들의 당구속 
아픈 포지션들을 구석구석 말끔히 
치료해 드리겠습니다
지금 바로 '진료접수'~!
</pre>
                    <a class="btn btn-primary js-scroll-trigger" href="/kang39/info/sgauth.php?p=wb.php" style="font-size:150%;">진료 접수</a>



<?php if($is_gu == false){?>

                    <ul class="sns_login">
                      <li>
                        <div id="sns_google">
                <?php 
                $client_id = '221981222817-5grkmv8bor9jgon9j5ks3jm56n4ngde5.apps.googleusercontent.com';
                $client_secret = 'knnGEnzB9ZVdFvqUksLwB_j2';
                $redirect_uri = 'http://kang39.co.kr/kang39/info/oauth.php'; 


                require_once ('./../libraries/Google/autoload.php');

                $client = new Google_Client(); // 객체 생성
                $client->setClientId($client_id);
                $client->setClientSecret($client_secret);
                $client->setRedirectUri($redirect_uri);
                $client->addScope("email");
                $client->addScope("profile");

                $authUrl = $client->createAuthUrl();
                ?>
                          <a href="<?=$authUrl?>" class="loginBtn">
                            <span class="icon" ></span>
                            <span class="buttonText">Google Login</span>
                          </a>
                        </div>
                      </li>
                      
                            <li>
                              <div id="sns_naver">
                              <?php 
                          $naver_client_id = 'zx_3Kv9oldVwyLIBZ_O1'; 
                          $naver_redirect_uri = urlencode("http://kang39.co.kr/kang39/info/ncallback.php"); 
                          $naver_state = "12343565677";//urlencode(get_token()); // state
                          $naver_api_url= "https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id={$naver_client_id}&redirect_uri={$naver_redirect_uri}&state={$naver_state}";
                      ?>
                                <a href="<?=$naver_api_url?>" class="loginBtn">
                                  <span class="icon"></span>
                                  <span class="buttonText">Naver Login</span>
                                </a>
                              </div>
                            </li>
                      
                      
                      <li>
                        <div id="sns_kakao">

                        <?php 


                  $client_id = "ff1a0db037b1add8b3cb2809fdc36dfa";
                  $kakao_redirect_uri = urlencode("http://kang39.co.kr/kang39/info/kcallback.php");
                  $url = "https://kauth.kakao.com/oauth/authorize?client_id=". $client_id ."&redirect_uri=". $kakao_redirect_uri ."&response_type=code&state=bbbbbb";


                ?>

                          <a href="<?=$url?>" class="loginBtn">
                            <span class="icon"></span>
                            <span class="buttonText">Kakao Login</span>
                          </a>
                        </div>
                      </li>		
                    </ul>





                    <?php }?>













                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- h2 class="text-white mb-4">고민없이 쉽게 ...</h2 -->
                        <pre class="text-white-50" style="overflow:hidden;font-size:1.5rem;">
참피온보다 더 노력하지 않고서 
참피온이 되려함은
욕심이다
</pre>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
						<br />
						<br />
						<br />
                    </div>
                </div>
				

            </div>
        </section>
		
        <!-- Projects-->
        <section class="projects-section bg-light" >
            <div class="container" id="projects">
            </div>
        </section>

        <!-- Signup-->
        <!-- 
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">혼자서 고민 말자! 보면 딱 답 나옴!!</h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputSearch" type="email" placeholder="진료검색..." />
                            <button class="btn btn-primary mx-auto" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="social d-flex justify-content-center">
                    <!-- <a class="mx-2" href="https://www.youtube.com/channel/UCSdH9AT_hz88Sp7Gz0cnCVw"><i class="fab fa-twitter"></i></a> -->
                    <a class="mx-2" href="https://m.facebook.com/profile.php?id=100004945508962"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.youtube.com/channel/UCSdH9AT_hz88Sp7Gz0cnCVw"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </section>


<script type="text/javascript">

var isKakao = (/kakaotalk/i.test(navigator.userAgent.toLowerCase()));

if( isKakao ){


var mobile = (/iphone|ipad|ipod|android/i.test(navigator.userAgent.toLowerCase()));

if (mobile) { 
  //모바일 처리
  var mobiletype = checkMobile();

  if( mobiletype == 'android' ){
    location.href='intent://kang39.co.kr/kang39/index.php#Intent;scheme=http;package=com.android.chrome;end';
    location.href='kakaotalk://inappbrowser/close';
  }
  else if( mobiletype == 'ios' ){
    location.href='ftp://kang39.co.kr/kang39/bridge.html';
    location.href='kakaotalk://inappbrowser/close';
  }
}

}

















$(document).ready(function(){
  getDataLoad( 'sgsys_indexmain', 'A', function (jobj){  
    $.each(jobj.data, function(i){



/*

                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5" id="load_A"></div>

                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0" id="load_Y"></div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters" id="load_P"></div>
*/



  var projects = $('#projects');
  projects.html('');


  var appendDiv ;
  var ccnt = 0;
  $.each(jobj.data, function(i){
    var tmp = '';
    if( this.index_main == 'Y' ){
      appendDiv = $('<div class="row align-items-center no-gutters mb-4 mb-lg-5" ></div>');
    }
    else{
      ccnt++;
      if( ccnt % 2 != 0 ){
        appendDiv = $('<div class="row justify-content-center no-gutters mb-5 mb-lg-0" ></div>');
      }
      else{
        appendDiv = $('<div class="row justify-content-center no-gutters" ></div>');
      }
    }



/*

<!-- Featured Project Row-->
<div class="row align-items-center no-gutters mb-4 mb-lg-5">
  <div class="col-xl-8 col-lg-7" >
    <iframe class="w-100 mb-3 mb-lg-0 youtube" height="315" src="https://www.youtube.com/embed/l9QIlLmeP2E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="col-xl-4 col-lg-5">
      <div class="featured-text text-center text-lg-left">
          <h4>닥터강상구 선택</h4>
          <p class="text-black-50 mb-0">이 배치에서 당점을 착각으로 힘들었을것 입니다. 영상으로 해결 하십시오.!</p>
      </div>
  </div>
</div>


<div class="col-lg-6" >
  <div class="bo_notice bbbbb w-100 h-100" mp="83">
    <span style="position:absolute;margin-left:40px;top:6px;">앞돌리기 꺽겨서 내려와요</span>
    <img src="https://lh3.googleusercontent.com/a-/AOh14GgoLyEICaqSifjJIQs1zcyyoq86xCbKSvHr1Y6-vw=s96-c" class="qprofile2" alt="quristyle@gmail.com" style="position:absolute;left:5px;top:5px;">
    <img src="" class=" w-100 h-100">
  </div>
</div>
<div class="col-lg-6 order-lg-first">
  <div class="bg-black text-center h-100 project">
    <div class="d-flex h-100">
      <div class="project-text w-100 my-auto text-center text-lg-right">
      <h4 class="text-white">인기 배치</h4>
      <p class="mb-0 text-white-50">놀랍도록 아름다운 레고 밀어 치기 시범!</p>
      <hr class="d-none d-lg-block mb-0 mr-0">
      </div>
    </div>
  </div>
</div>

*/


    if( this.index_main == 'Y' ){

      appendDiv.html('<div class="row align-items-center no-gutters mb-4 mb-lg-5">'+
'  <div class="col-xl-8 col-lg-7" >'+
'    <iframe class="w-100 mb-3 mb-lg-0 youtube" height="315" src="https://www.youtube.com/embed/'+this.qa_main_pub+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
'  </div>'+
'  <div class="col-xl-4 col-lg-5 bo_notice"  mp="'+this.uid+'" style="cursor:pointer;">'+
'      <div class="featured-text text-center text-lg-left">'+
'          <h4>'+this.qa_title+'</h4>'+
'          <p class="text-black-50 mb-0">'+this.sg_title+'</p>'+
'      </div>'+
'  </div>'+
'</div>');

    }
    else{

      tmp = '<div class="col-lg-6" style="background-color:black;">'; 
      tmp += '<iframe class="w-100 mb-3 mb-lg-0 youtube" height="310" src="https://www.youtube.com/embed/'+this.qa_main_pub+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
      tmp += '</div>';
      
      tmp += '<div class="col-lg-6 '+(( ccnt % 2 != 0 )?'order-lg-first':'')+' bo_notice"  mp="'+this.uid+'" style="cursor:pointer;" >';
        tmp += '<div class="bo_notice w-100 h-100" mp="'+this.uid+'" style="cursor:pointer;" >';
          tmp += '<span style="position:absolute;margin-left:40px;top:6px;color:white;">'+this.qa_title+'</span>';
          tmp += '<img src="'+this.uimg+'" class="qprofile2"  alt="'+this.gu_email+'" style="position:absolute;left:5px;top:5px;" />';  
          tmp += '<div class="bg-black text-center h-100 project">';
              tmp += '<div class="d-flex h-100">';
                  tmp += '<div class="project-text w-100 my-auto text-center text-lg-left">';
                      tmp += '<h4 class=" text-white" >'+this.sg_title+'</h4>'; //white-space: nowrap;
                      //tmp += '<p class="mb-0 text-white-50">fff</p>';
                      tmp += '<hr class="d-none d-lg-block mb-0 ml-0" />';
                  tmp += '</div>';
              tmp += '</div>';
          tmp += '</div>';
        tmp += '</div>';
      tmp += '</div>';
    
      appendDiv.html(tmp);
    }


    projects.append(appendDiv);

/*
    tmp = '<div  class="col-lg-6">';  
    if(this.list_opentype=='Y'){
      if( ttt == 'A' ){
        tmp += '<iframe class="w-100 mb-3 mb-lg-0 youtube" height="315" src="https://www.youtube.com/embed/'+this.qa_main_pub+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
      }
      else{
        tmp += '<img src="https://img.youtube.com/vi/'+this.qa_main_pub+'/sddefault.jpg" class=" w-100 h-100" />';
      }
    }
    else{
      tmp += '<img src="'+this.qa_main_pub+'" class=" w-100 h-100" />';
    }
    tmp += '</div>';
    tmp += '</div>';
    

    var removeHtml = $('<div></div>').html(this.qa_cont);
    var removeStr = removeHtml.text();

                    tmp += '<div class="col-lg-6 bo_notice"  mp="'+this.uid+'" style="cursor:pointer;" >';
    tmp += '<div class="bo_notice w-100 h-100" mp="'+this.uid+'" style="cursor:pointer;" >';
    tmp += '<span style="position:absolute;margin-left:40px;top:6px;color:white;">'+this.qa_title+'</span>';
    tmp += '<img src="'+this.uimg+'" class="qprofile2"  alt="'+this.gu_email+'" style="position:absolute;left:5px;top:5px;" />';  
                        tmp += '<div class="bg-black text-center h-100 project">';
                            tmp += '<div class="d-flex h-100">';
                                tmp += '<div class="project-text w-100 my-auto text-center text-lg-left">';
                                    tmp += '<h4 class=" text-white">'+this.qa_title+'</h4>';
                                    tmp += '<p class="mb-0 text-white-50">'+removeStr+'</p>';
                                    tmp += '<hr class="d-none d-lg-block mb-0 ml-0" />';
                                tmp += '</div>';
                            tmp += '</div>';
                        tmp += '</div>';
                    tmp += '</div>';


    */

  });

















    });
  }); 
});

$(document).on('click', '.bo_notice', function(){
  mp = $(this).attr('mp');
  document.location = '/kang39/info/sgauth.php?p=wb_cont.php?id='+mp;
});




</script>







<?php  require_once ('./info/comfooter.php');?>