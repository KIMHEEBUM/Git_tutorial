<!DOCTYPE html>
<html lang = "ko">
<head>
   <meta charset="UTF-8">
   <title>Bread Menu</title>
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style>
      h1{
         display:inline;  
         font-family: 'Nanum Barun Gothic', sans-serif;
         font-weight : 700;
         font-size: large;
         text-align:center;
         line-height:5px;
         font-size:40px;
         color: white;
         width: 230px; 
         padding:30px;
         background-color: rgba(0,0,0,0.6);
         position: relative;
         margin-left: -480px;
         top: 20px;
      }
      @keyframes zoomin{ 
         0%{transform:scale(1); } 
         25%{transform:scale(1.4);} 
         50%{transform:scale(1.4);}
         100%{transform:scale(1);} 
      }
      .sidebar{position: fixed; width: 250px; height: 100%; left: 0; background: #2D2BAB;}
      .sidebar .text{color:white; font-size: 30px; font-weight: 600; line-height: 65px; text-align: center; background: #2343CE; letter-spacing: 1px;}
nav ul{background: #2D2BAB; height: 100%; width: 250px; list-style: none;}
nav ul li{ line-height: 60px; border-bottom: 1px solid white;}
nav ul li a{color: white;text-decoration: none; font-size: 18px; padding-left: 40px; font-weight: 500; display: block; width: 100%; border-left: 3px solid transparent; position: relative;}
nav ul li a:hover{color:cyan; background: #ffffcc; border-left-color: cyan;}
nav ul ul {position: static; display: none;}
nav ul .feat-show.show{display: block;}
nav ul ul li{line-height: 42px; border-bottom: none;}
nav ul ul li a{font-size: 17px; color: white; padding-left: 60px;}
nav ul li a span{position: absolute; top: 25%; right: 20px; transform: translate(-50%); font-size: 22px; transition: transform 0.4s}
nav ul li a span.rotate{transform: translatey(-0%) rotate(-180deg);}
 nav ul li a span{position: absolute; top: 25%; right: 20px; transform: translate(-50%); font-size: 22px; transition: transform 0.4s}
nav ul li a span.rotate{transform: translatey(-0%) rotate(-180deg);}
      html, body{width:100%; height:150%; font-family:'Noto Sans Korean';}
      * {margin: 0; padding: 0; user-select: none; box-sizing: border-box; font-family: 'Poppins', serif;} 
      div.bg{width:100%; height:100%; position:fixed; top:0; left:0; z-index:-2; background:url(Menubackground.jpg) no-repeat 50% 50% / cover; animation:zoomin 100s infinite linear; opacity:0.5;}
      div.intro_wrap{position:absolute; top:60%; left:40%; margin-top:-500px; margin-left:-590px; text-align:center; z-index:0;}
      div.intro_wrap ul.link_list{display:inline-block; z-index:0;}
      div.intro_wrap ul.link_list li{display:table; width:200px; height:200px; float:left; margin-left:80px; z-index:0;}
      div.intro_wrap ul.link_list li div.location2{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:200px; left:150px; color:blue; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.location4{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:710px; left:150px; color:blue; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.location6{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1210px; left:150px; color:blue; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition1{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:580px; left:240px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition2{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:580px; left:810px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition3{position:relative; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif;  top:547px; left:1230px; font-size:30px; padding:-30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition4{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1080px; left:240px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition5{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1080px; left:810px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition6{position:relative; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1047px; left:950px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition7{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1590px; left:190px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition8{position:absolute; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1590px; left:750px; font-size:30px; z-index:0;}
      div.intro_wrap ul.link_list li div.priceposition9{position:relative; font-weight:bold; font-family: 'Nanum barun Gothic', sans-serif; top:1590px; left:675px; font-size:30px; margin:-40px;  z-index:0;}
   </style>
</head>
<body>
   <div class="bg"></div>

        <nav class="sidebar">
            <div class="text">사이드 메뉴</div>
            <ul>
                <li><a href="#" class="feat-btn">메뉴
                    <span class="fas fa-caret-down first"></span>
                </a>
                  <ul class="feat-show">
                      <li><a href="#">빵</a></li>
                      <li><a href="#">빵</a></li>
                      <li><a href="#">빵</a></li>
                      </ul>
                      </li>
                      <li><a href="#">장바구니</a></li>
                      <li><a href="#">주문내역</a></li>
                      <li><a href="#">마일리지</a></li>
                      <li><a href="#">자유게시판</a></li>
                </ul>
                <script>
                $('.feat-btn').click(function(){
                  $('nav ul .feat-show').toggleClass("show");
                  $('nav ul .first').toggleClass("rotate");
                });
                </script>
            </nav>
<div class="intro_wrap">
<ul class="link_list">

<h1>빵 주문 메뉴</h1>

<li>
<I><div class="location2">빵</div></I>
<hr width="900%"color="blue" size="2" style="top:230px; position:relative;">
<img src="Plainbread.jpg" width="400px" height="250px" style="position:absolute; top:280px; left:150px;">
<div class="priceposition1">식빵<br>가격 : 2,800 원</div>
<img src="sweetmongblang.jpg" width="400px" height="250px" style="position:absolute; top:280px; left:700px;">
<div class="priceposition2">스위트 몽블랑<br>가격 : 4,600 원</div>
<img src="CAstella.jpg" width="400px" height="250px" style="position:absolute; top:280px; left:1250px;">
<div class="priceposition3">카스테라<br>가격 : 7,000 원</div>
</li>



<li>
<I><div class="location4">케이크</div></I>
<hr width="900%" color="blue" size="2"style="top:740px; margin-left: -272px; position:relative;">
<img src="Chococake.jpg" width="400px" height="250px" style=" position:absolute; top:790px; left:150px;">
<div class="priceposition4">초코 케이크<br>가격 : 24,000 원</div>
<img src="Strawberrycake.jpg" width="400px" height="250px" style="position:absolute; top:790px; left:700px;">
<div class="priceposition5">딸기 키이크<br>가격 : 19,000 원</div>
<img src="Whitecake.jpg" width="400px" height="250px" style="position:absolute; top:790px; left:1250px;">
<div class="priceposition6">화이트 케이크<br>가격 : 25,000 원</div>
</li>

<li>
<I><div class="location6">샌드위치-샐러드</div></I>   
<hr width="900%" color="blue" size="2" style="top:1240px; margin-left: -554px; position:relative;">
<img src="Camembert cheese sandwich.jpg" width="400px" height="250px" style="position:absolute; top:1290px; left:150px;">
<div class="priceposition7">카망베르 치즈 샌드위치<br>가격 : 6,500 원</div>
<img src="Italian Chicken Salad.jpg" width="400px" height="250px" style="position:absolute; top:1290px; left:700px;">
<div class="priceposition8">이탈리아 치킨 샐러드<br>가격 : 6,000 원</div>
<img src="Egg Shrimp Salad.jpg" width="400px" height="250px" style="position:absolute; top:1290px; left:1250px;">
<div class="priceposition9">달걀 새우 샐러드<br>가격 : 10,900 원</div>
</li>

<li>
<a href="https://www.naver.com">
<button style="position:absolute; padding:20px; font-size:50px; border-bottom:40px; left:750px; top:1800px; background-color:rgba(225,164,86,0.7); color:white;  background-color: rgba(244,128,0,0.7); border:2px solid; border-color:black;">주문하기</button>
</a>
</li>

</ul>
</div>
</body>

</html>