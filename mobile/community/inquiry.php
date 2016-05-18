<?
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/top.php";
?>

<div id="container">

	<?
	include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/path_community.php";
	?>

	<!--content-->
	<div class="content">

		<h1>온라인 상담</h1>

		<!--리스트 노출영역:게시글 10개 노출-->
		<div class="inquiry">
			<ul>
				<li>
					<a href="javascript:;">
						<p>안녕하세요~! 치아교정에 대해 궁금한것이 있습니다. 제목 노출 영역</p>
						<u>(1)</u>
						<span>테스트  |  2016-04-22</span>
					</a>
					<i><img src="../images/board/icon_rip_ready.gif" alt="답변대기"/></i>
				</li>
				<!--li>
					<a href="javascript:;">
						<span>온라인 상담 제목 노출 영역<img src="../images/board/icon_lock.gif" alt=""/></span>
						<p>테스트  |  2016-04-22</p>
					</a>
					<i><img src="../images/board/icon_rip_ok.gif" alt="답변완료"/></i>
				</li-->
			</ul>
		</div>

	</div>
</div>


<?
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/footer.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/tail.php";
?>