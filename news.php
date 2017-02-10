<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Myintro</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/news.css">
	<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/colorbox.css">
	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="title">Pickup news</span>
			<span class="tagline">ピックアップ ニュース</span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<?php require('layout/nav.php'); ?>

		</div>	
	</nav>
</header>

<main style="height: 1950px;">
	<section class="banner-sec">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-3">
	        <div class="card"> <img class="img-fluid" src="assets/images/class_pro.jpg" alt="">
	                <div class="card-img-overlay"> <span class="tag tag-pill tag-danger">News</span> </div>
	                <div class="card-block">
	            <div class="news-title">
	                    <h2 class=" title-small"><a href="#">『英語×IT』をコンセプトとしたNexseed（セブ島）に入学</a></h2>
	                  </div>
	            <p class="card-text"><small class="text-time"><em>September, 2016</em></small></p>
	          </div>
	              </div>
	        <div class="card"> <img class="img-fluid" src="assets/images/line.jpg" alt="">
	                <div class="card-img-overlay"><span class="tag tag-pill tag-info">Career</span> </div>
	                <div class="card-block">
	            <div class="news-title">
	                    <h2 class=" title-small"><a href="#">数々のサマーインターンで自分の無力さを実感</a></h2>
	                  </div>
	            <p class="card-text"><small class="text-time"><em>August, 2016</em></small></p>
	          </div>
	              </div>
	             </div>
	            <div class="col-md-3">
	        <div class="card"> <img class="img-fluid" src="assets/images/will.jpg" alt="">
	                <div class="card-img-overlay"> <span class="tag tag-pill tag-success">Life</span> </div>
	                <div class="card-block">
	            <div class="news-title">
	                    <h2 class=" title-small"><a href="#">留学のきっかけになったシェアハウスを卒業</a></h2>
	                  </div>
	            <p class="card-text"><small class="text-time"><em>September, 2016</em></small></p>
	          </div>
	        </div>
	        <div class="card"> <img class="img-fluid" src="assets/images/pitch.JPG" alt="">
	                <div class="card-img-overlay"> <span class="tag tag-pill tag-danger">News</span></div>
	                <div class="card-block">
	            <div class="news-title">
	                    <h2 class=" title-small"><a href="#">Start Venture Festival 100人ピッチにてプレゼン</a></h2>
	                  </div>
	            <p class="card-text"><small class="text-time"><em>May, 2016</em></small></p>
	          </div>
	         </div>
	      </div>



	    <div class="col-md-6">
	      <div class="swiper-container">
	      <div class="swiper-wrapper">

	      	<div class="swiper-slide"> 
	      		<!-- Slide-01　コンテンツを挿入する -->
	      		<div class="news-block">
	      		                <div class="news-media"><img class="img-fluid" src="assets/images/tenju.jpg" alt=""></div>
	      		                <div class="news-title">
	      		                        <h2 class=" title-large"><a href="#">日本の商品、サービスの質の高さを実感</a></h2>
	      		                </div>
	      		                <div class="news-des">人口が減って、日本国内の内需も減る中で日本が海外に出ていかなければならないことは自明です。セブに来て、日本の商品、サービスの質が高いと身に染みて感じました。クールジャパンという言葉がありますが、日本のクールさとはこうしたある種、職人的な丁寧さだと思っています。</div>
	      		                <div class="time-text"><strong>November, 2016</strong></div>
	      		  </div>
	      		</div>
	      	

	      	<div class="swiper-slide">
	      		<!-- Slide-02　コンテンツを挿入する -->
	      		<div class="news-block">
	      		                <div class="news-media"><img class="img-fluid" src="assets/images/colomn.JPG" alt=""></div>
	      		                <div class="news-title">
	      		                        <h2 class=" title-large"><a href="#">エンターテイメントとは？<br>フィリピンの貧富の差を目の当たりにして気付いたこと</a></h2>
	      		                </div>
	      		                <div class="news-des">フィリピンは貧富の差が激しい国で、貧しい暮らしをしている人たちを間近で見る機会が多くありました。私が今まで考えていたエンタメとは「ライブ」「映画」など比較的、お金と時間に余裕があるような人のためのものだったのですが、貧しい人の人生の支えになるようなエンタメもあることを再確認しました。例えば、ナイトマーケット。みんなで串やスナック菓子を食べながら、そして小さな舞台にはハープを弾く男性やフリーシンガーがいる。これも立派なエンタメだと感じました。</div>
	      		                <div class="time-text"><strong>November, 2016</strong></div>
	      		  </div>
	      		</div>
	      	

	      	<div class="swiper-slide"> 
	      		<!-- Slide-03 コンテンツを挿入する -->
	      		<div class="news-block">
	      		                <div class="news-media"><img class="img-fluid" src="assets/images/debate.jpg" alt=""></div>
	      		                <div class="news-title">
	      		                        <h2 class=" title-large"><a href="#">マーケティングゼミ対抗ディベート大会に出場し、総合優勝しました。</a></h2>
	      		                      </div>
	      		                <div class="news-des">私が所属しているゼミはディベートに力を入れていて、毎年2回開催されるディベート大会に出場しています。私たちの班は「オウンドメディアは他のメディアより費用対効果の面で有効か否か」という議題で議論をしました。</div>
	      		                <div class="time-text"><strong>July, 2016</strong></div>
	      		</div>
	      	</div>

</div>	      	

	      	<div class="swiper-pagination"></div>
	      	<div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
	      	<br>
	      	<br>
	      	<div class="swiper-scrollbar"></div>

</div>
</div>


	</section>
	
	<section class="section-01" style="border-bottom: none !important;">
	        <div class="container">
	          <div class="row">
	            <div class="col-lg-8 col-md-12">
				        <h3 class="heading-large">Portfolio</h3>
				        <div class="row">
	                <div class="col-lg-6">

	        
	            <div class="card">
	            		<!-- ビデオのモーダル挿入 -->
	            		<img src="assets/images/travel_img.png" style="height: 210px;">
	            		            <a class='inline' href="#inline_content" style="outline: none;">
	            									
	            									<i class="fa fa-play-circle-o fa-4x" aria-hidden="true" style="position: relative;
                                  top: -135px;
                                  left: 135px;
                                  opacity: 0.9;"></i>
	            								</a>

	            								<div style='display:none'>
	            								<div id='inline_content'>
	            								<video wwidth="640" height="480" controls preload>
	            								<source src="video/travelhouse_nikko.mp4"" type="video/mp4">
	            								<source src="sample.ogg" type="video/ogg">
	            								<source src="sample.webm" type="video/webm">
	            								<p>ご利用のブラウザはvideo タグによる動画の再生に対応していません。</p>
	            								</video>
	            								</div>   
	            								</div>
	            		<!-- ビデオモーダルここまで -->
	                <div class="card-block" style="margin-top: -55px;">
	                <div class="news-title"><a href="#">
	                  <h2 class="title-small">テラスハウスのパロディ『TRAVEL HOUSE』製作</h2>
	                  </a></div>
	                <p class="card-text">栃木の日光に行った時の動画をまとめてテラスハウス風に仕上げました。</p>
	                <p class="card-text"><small class="text-time"><em>March, 2015</em></small></p>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-6">
	            <div class="card">
	            		<!-- ビデオのモーダル挿入 -->
	            			            		<img src="assets/images/perfecthuman.png" style="height: 210px;">
	            			            		            <a class='inline2' href="#inline_content2" style="outline: none;"">
	            			            									
	            			            									<i class="fa fa-play-circle-o fa-4x" aria-hidden="true" style="position: relative;
	            		                                  top: -135px;
	            		                                  left: 135px;
	            		                                  opacity: 0.9;"></i>
	            			            								</a>

	            			            								<div style='display:none'>
	            			            								<div id='inline_content2'>
	            			            								<video wwidth="640" height="480" controls preload>
	            			            								<source src="video/perfecthuman.mp4"" type="video/mp4">
	            			            								<source src="sample.ogg" type="video/ogg">
	            			            								<source src="sample.webm" type="video/webm">
	            			            								<p>ご利用のブラウザはvideo タグによる動画の再生に対応していません。</p>
	            			            								</video>
	            			            								</div>   
	            			            								</div>
	            			            		<!-- ビデオモーダルここまで -->
	            			                <div class="card-block" style="margin-top: -55px;">
	            			                <div class="news-title"><a href="#">
	            			                  <h2 class=" title-small">インターン先の旅行で『perfect human』披露</h2>
	            			                  </a></div>
	            			                <p class="card-text">完全にノリきれてないのが私です。大衆を楽しませるスキルを伸ばしていきたいです。</p>
	            			                <p class="card-text"><small class="text-time"><em>April, 2016</em></small></p>
	            			              </div>
	            			            </div>
	            			          </div>
	           <div class="col-lg-6">
	            <div class="card">
	            	<!-- ビデオのモーダル挿入 -->
	            	            <a class='inline' href="#inline_content">
	            								<img src="assets/images/samurai.jpg" style="height: 210px; width: 330px;">
	            							</a>

	            							<div style='display:none'>
	            							<div id='inline_content'>
	            							<video wwidth="640" height="480" controls preload>
	            							<source src="video/perfecthuman.MP4" type="video/mp4">
	            							<source src="sample.ogg" type="video/ogg">
	            							<source src="sample.webm" type="video/webm">
	            							<p>ご利用のブラウザはvideo タグによる動画の再生に対応していません。</p>
	            							</video>
	            							</div>   
	            							</div>
	            		<!-- モーダルここまで -->
	                <div class="card-block">
	                <div class="news-title"><a href="#">
	                  <h2 class=" title-small">クールジャパンを推進するSNSサイト『<a href="http://entertain-experience.com/Samurai/index.php">SAMURAI</a>』を自力で開発</h2>
	                  </a></div>
	                <p class="card-text">日本のクールさとは何か考えた結果、辿り着いたのは『今ではない感』でした。日本の人口が減っていく中で海外に目を向けることは自明です。その中で海外の方が日本に対してどのような印象を抱いているのか知るために制作しました。<br>
	                URL: <a href="http://entertain-experience.com/Samurai/">http://entertain-experience.com/Samurai/</a></p>
	                <p class="card-text"><small class="text-time"><em>January, 2017</em></small></p>
	              </div>
	             </div>
	           </div>
	           <div class="col-lg-6">
	             <div class="card">
	             		<!-- スライドのモーダル挿入 -->
	             			            		<img src="assets/images/cebu_log/thumnail.png" style="height: 210px;">
	             			            		            <a class='inline3' href="#inline_content3" style="outline: none;"">
	             			            									
	             			            									<i class="fa fa-play-circle-o fa-4x" aria-hidden="true" style="position: relative;
	             		                                  top: -135px;
	             		                                  left: 135px;
	             		                                  opacity: 0.9;"></i>
	             			            								</a>

	             			            								<div style='display:none'>
	             			            								<div id='inline_content3'>
	             			            								<a class="gallery" href="assets/images/cebu_log/cebu_log1.png" title="画像グループタイトル1">
	             			            								    <img src="assets/images/cebu_log/cebu_log1.png" alt="" />
	             			            								</a>

	             			            								<a class="gallery" href="assets/images/cebu_log/cebu_log2.png" title="画像グループタイトル2">
	             			            								  <img src="assets/images/cebu_log/cebu_log2.png" alt="" />
	             			            								</a>

	             			            								<a class="gallery" href="assets/images/cebu_log/cebu_log1.png" title="画像グループタイトル1">
	             			            								    <img src="assets/images/cebu_log/cebu_log1.png" alt="" />
	             			            								</a>
	             			            								<a class="gallery" href="assets/images/cebu_log/cebu_log4.png" title="画像グループタイトル2">
	             			            								  <img src="assets/images/cebu_log/cebu_log4.png" alt="" />
	             			            								</a>
	             			            								<a class="gallery" href="assets/images/cebu_log/cebu_log5.png" title="画像グループタイトル1">
	             			            								    <img src="assets/images/cebu_log/cebu_log5.png" alt="" />
	             			            								</a>
	             			            								<a class="gallery" href="assets/images/cebu_log/cebu_log6.png" title="画像グループタイトル2">
	             			            								  <img src="assets/images/cebu_log/cebu_log6.png" alt="" />
	             			            								</a>
	             			            								
	             			            								</div>   
	             			            								</div>
	             			            		<!-- ビデオモーダルここまで -->
	             			                <div class="card-block" style="margin-top: -55px;">
	             			                <div class="news-title"><a href="#">
	             			                  <h2 class=" title-small">セブ限定のグルメサイト『<a href="http://nexseed.net/portfolio/cebu_log/">セブログ</a>』をチームで製作</h2>
	             			                  </a></div>
	             			                <p class="card-text">Nexseedのチーム開発でセブのグルメサイトを制作しました。コンセプトは『まだ知らない行きたいお店、食べ物を写真から見つけられるグルメSNS』です。<br>URL:
	             			                <a href="http://entertain-experience.com/cebu_log/">http://entertain-experience.com/cebu_log/</a>
	             			                </p>
	             			                <p class="card-text"><small class="text-time"><em>December, 2016</em></small></p>
	             			              </div>
	             			            </div>
	             			          </div>
	         </div>
	      </div>
	       
	       <aside class="col-lg-4 side-bar col-md-12">
	        <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Latest</a> </li>
	                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Top</a> </li>
	                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Featured</a> </li>
	         </ul>
	        
	        <!-- Tab panes -->
	        <div class="tab-content sidebar-tabing">
	                <div class="tab-pane active" id="home" role="tabpanel">
	            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="assets/images/class_pro.jpg" alt=""> </a>
	                    <div class="media-body">
	                <div class="news-title">
	                        <h2 class="title-small"><a href="#">『英語×IT』をコンセプトとしたNexseed（セブ島）に入学</a></h2>
	                      </div>
	                <div class="news-auther"><span class="time">1h ago</span></div>
	              </div>
	                  </div>
	            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="assets/images/colomn.JPG" alt=""> </a>
	                    <div class="media-body">
	                <div class="news-title">
	                        <h2 class="title-small"><a href="#">エンターテイメントとは？フィリピンの貧富の差を目の当たりにして気付いたこと</a></h2>
	                      </div>
	                <div class="news-auther"><span class="time">1h ago</span></div>
	              </div>
	                  </div>
	            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="assets/images/will.jpg" alt=""> </a>
	                    <div class="media-body">
	                <div class="news-title">
	                        <h2 class="title-small"><a href="#">留学のきっかけになったシェアハウスを卒業</a></h2>
	                      </div>
	                <div class="news-auther"><span class="time">1h ago</span></div>
	              </div>
	            </div>
	          </div>
	                <div class="tab-pane" id="profile" role="tabpanel">
	            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="http://grafreez.com/wp-content/temp_demos/river/img/media-4.jpg" alt=""> </a>
	                    <div class="media-body">
	                <div class="news-title">
	                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
	                      </div>
	                <div class="news-auther"><span class="time">1h ago</span></div>
	              </div>
	                  </div>
	            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="http://grafreez.com/wp-content/temp_demos/river/img/media-3.jpg" alt=""> </a>
	                    <div class="media-body">
	                <div class="news-title">
	                        <h2 class="title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></h2>
	                      </div>
	                <div class="news-auther"><span class="time">1h ago</span></div>
	              </div>
	                  </div>
	            <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="http://grafreez.com/wp-content/temp_demos/river/img/media-2.jpg" alt=""> </a>
	                    <div class="media-body">
	                <div class="news-title">
	                        <h2 class="title-small"><a href="#">Obamacare Appears to Be Making People Healthier</a></h2>
	                      </div>
	                <div class="news-auther"><span class="time">1h ago</span></div>
	              </div>
	                  </div>
	          </div>
	                <div class="tab-pane" id="messages" role="tabpanel">
	                 <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="http://grafreez.com/wp-content/temp_demos/river/img/media-2.jpg" alt=""></a>
	                   <div class="media-body">
	                     <div class="news-title">
	                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
	                      </div>
	                     <div class="news-auther"><span class="time">1h ago</span></div>
	                   </div>
	                  </div>
	            			<div class="media"> <a class="media-left" href="#"> <img class="media-object" src="http://grafreez.com/wp-content/temp_demos/river/img/media-3.jpg" alt=""> </a>
	                    <div class="media-body">
				                <div class="news-title">
				                        <h2 class="title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></h2>
				                      </div>
				                <div class="news-auther"><span class="time">1h ago</span></div>
	                    </div>
	                  </div>
	                <div class="media"> <a class="media-left" href="#"> <img class="media-object" src="http://grafreez.com/wp-content/temp_demos/river/img/media-1.jpg" alt=""> </a>
	                    <div class="media-body">
	                       <div class="news-title">
	                        <h2 class="title-small"><a href="#">Key Republicans sign letter warning against candidate</a></h2>
	                      </div>
	                       <div class="news-auther"><span class="time">1h ago</span></div>
	                    </div>
	                 </div>
	               </div>
	            </div>
	            <div class="video-sec">
	                <h4 class="heading-small">Featured Video</h4>
	                <div class="video-block">
				            <div class="embed-responsive embed-responsive-4by3">
				                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
				             </div>
	                 </div>
	            </div>
	      </aside>
	     </div>
	   </div>
	 </section>	      
	</div>
</main>

<?php require('layout/footer.html'); ?>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/js/news.js"></script>
<!-- <script src="assets/js/template.js"></script> -->
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.colorbox-min.js"></script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	parallax: true,
	speed: 600,
	autoplay: 8000,
	nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
});
</script>

<script>
$(document).ready(function(){
$(".inline").colorbox({inline:true});
$("#click").click(function(){
$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
return false;
});
});

$(document).ready(function(){
$(".inline2").colorbox({inline:true});
$("#click").click(function(){
$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
return false;
});
});

$(document).ready(function(){
$(".inline3").colorbox({inline:true});
$("#click").click(function(){
$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
return false;
});
});

$(function() {
    $(".gallery").colorbox({
    rel:'slideshow',
    maxWidth:"90%",
    maxHeight:"90%",
    opacity: 0.7
  });
});

</script>
</body>
</html>
