<?
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/top.php";
?>


<div id="navi">

	<!--gnb-->
	<div class="gnb">
		<!--login_before-->
		<ul>
			<li class="w33">
				<a href="../member/login.php" class="quick01">
					<img src="../images/common/icon_login.gif" alt=""/>
					<p>로그인</p>
				</a>
			</li>
			<li class="w34">
				<a href="../member/join.php" class="quick02">
					<img src="../images/common/icon_join.gif" alt=""/>
					<p>회원가입</p>
				</a>
			</li>
			<li class="w33">
				<a href="../community/inquiry.php" class="quick03">
					<img src="../images/common/icon_qna.gif" alt=""/>
					<p>상담문의</p>
				</a>
			</li>
		</ul>
		<!--login_after
		<ul>
			<li class="w33">
				<a href="javascript:;" class="quick01">
					<img src="../images/common/icon_logout.gif" alt=""/>
					<p>로그아웃</p>
				</a>
			</li>
			<li class="w34">
				<a href="../member/profile.php" class="quick02">
					<img src="../images/common/icon_profile.gif" alt=""/>
					<p>회원정보 수정</p>
				</a>
			</li>
			<li class="w33">
				<a href="../community/inquiry.php" class="quick03">
					<img src="../images/common/icon_qna.gif" alt=""/>
					<p>상담문의</p>
				</a>
			</li>
		</ul>
		-->
	</div>
	<!--//gnb-->


	<!--lnb-->
	<div class="lnb">
		<ul>
			<li>
				<p class="depth01 naviOpen"><a href="javascript:;">안성바른이 소개</a></p>
				<div class="depth02">
					<ul>
						<li><a href="../about/greeting.php">인사말</a></li>
						<li><a href="../about/doctor.php">의료진 소개</a></li>
						<li><a href="../about/guide.php">진료안내 &amp; 오시는 길</a></li>
					</ul>
				</div>
			</li>
			<li>
				<p class="depth01 naviClose"><a href="javascript:;">안성바른이 특별함</a></p>
				<div class="depth02 dnone">
					<ul>
						<li><a href="javascript:;">교정전문치과</a></li>
						<li><a href="javascript:;">환자중심의 진료</a></li>
						<li><a href="javascript:;">3D입체진단</a></li>
					</ul>
				</div>
			</li>
			<li>
				<p class="depth01 naviClose"><a href="javascript:;">안성맞춤 교정 프로그램</a></p>
				<div class="depth02 dnone">
					<ul>
						<li><a href="javascript:;">연령별 교정</a></li>
						<li><a href="javascript:;">증상별 교정</a></li>
					</ul>
				</div>
			</li>
			<li>
				<p class="depth01 naviClose"><a href="javascript:;">안성바른이 커뮤니티</a></p>
				<div class="depth02 dnone">
					<ul>
						<li><a href="javascript:;">온라인상담</a></li>
						<li><a href="javascript:;">진료후기</a></li>
						<li><a href="javascript:;">교정일기</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!--//lnb-->
	
</div>


<?
include_once $_SERVER['DOCUMENT_ROOT']."/mobile/_inc/tail.php";
?>