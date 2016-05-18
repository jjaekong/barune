<?
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/top.php";
?>

<div id="container">

	<?
	include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/path_about.php";
	?>

	<!--content-->
	<div class="content">

		<h1>진료안내 &amp; 오시는 길</h1>
		<p class="mt20"><img src="../images/about/time_img01.jpg" width="100%" alt=""/></p>

		<h2 class="mt50">오시는 길</h2>
		<div class="map">구글지도 노출영역 100%*200 (지도 api 적용 시 배경 색 및 해당 영역 텍스트 삭제)</div>

		<div class="mapInfo mt20">
			<p><img src="../images/about/icon_bus.gif" alt=""/></p>
			<dl>
				<dt><span>버스로</span> 오시는 경우</dt>
				<dd>정류장 – (구)안성 터미널<br />1, 1-2, 1-3 ,2, 2-1, 2-5, 2-6, 2-8 , 7, 7-1, 7-2, 7-3, 15, 15-1, 15-2 , 15-3, 15-4, 22-1, 35, 37, 38-1, 50, 60, 60-3, 70, 100, 100-2, 370, 380, 700</dd>
			</dl>
		</div>

		<div class="mapInfo mt30">
			<p><img src="../images/about/icon_parking.gif" alt=""/></p>
			<dl>
				<dt><span>주차장</span> 오시는 경우</dt>
				<dd>병원 건물 뒤 1층 주차장 이용, 또는 석정동 공영주차장 이용 가능 (병원 옆 도로 일방통행 길 주의)</dd>
			</dl>
		</div>

		<h2 class="mt50">병원 둘러보기</h2>
		<div class="around">
			<p class="bigImg"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_XUtE1wg3_1.jpg" alt=""/></p>
			<div class="thumb">
				<a href="#" class="btnPrev"><img src="../images/about/btn_prev.gif" alt="이전"/></a>
				<ul>
					<li class="active"><a href="#"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_XUtE1wg3_1.jpg" alt=""/></a><span></span></li>
                    <li><a href="#"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_BNpmF5JT_2.jpg" alt=""/></a><span></span></li>
                    <li><a href="#"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_lAvbUn67_8.jpg" alt=""/></a><span></span></li>
                    <li><a href="#"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_OU5KD4Lg_7.jpg" alt=""/></a><span></span></li>
                    <li><a href="#"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_Y6INpMr8_6.jpg" alt=""/></a><span></span></li>
                    <li><a href="#"><img src="http://barune.mv-web.co.kr/board/upload/banner/1893233314_PvcQqGyb_5.jpg" alt=""/></a><span></span></li>
				</ul>
				<a href="#" class="btnNext"><img src="../images/about/btn_next.gif" alt="다음"/></a>
			</div>
		</div>

	</div>
</div>
<script src="../js/jquery-1.12.3.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script>
(function($) {
    var aroundSlider = $('.around .thumb ul').bxSlider({
        minSlides: 4,
        maxSlides: 4,
        moveSlides: 4,
        slideWidth: 55,
        slideMargin: 6,
        pager: false,
        controls: false
    });
    $(document).on('click', '.around .thumb .btnNext', function(e) {
        aroundSlider.goToNextSlide();
        e.preventDefault();
    });
    $(document).on('click', '.around .thumb .btnPrev', function(e) {
        aroundSlider.goToPrevSlide();
        e.preventDefault();
    });
    $(document).on('click', '.around .thumb ul li a', function(e) {
        var bigImage = $('.around .bigImg img');
        $(this).parent().siblings('.active').removeClass('active');
        $(this).parent().addClass('active');
        bigImage.attr('src', $(this).find('img').attr('src'));
        e.preventDefault();
    });
})(jQuery);
</script>
<?
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/footer.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/tail.php";
?>