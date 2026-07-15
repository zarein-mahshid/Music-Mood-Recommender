<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About me</title>
</head>
	<style>
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial;
}

body{
	background: linear-gradient(135deg, #f7f3ee, #ebe2d8);
	color: #2f2f2f;
	direction: rtl;
	line-height: 1.8;
}

.site-header{
	background: rgba(255,255,255,0.85);
	background-filter: blur(6px);
    border-bottom: 1px solid #eee;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
    padding: 18px 40px;
    background-color: white;
}

header nav{
	display: flex;
	justify-content: center;
	gap:18px;
	flex-wrap: wrap;
	
}
header nav a{
	text-decoration: none;
	color: #5b4636;
	font-weight: 700;
	padding: 10px 18px;
	border-radius: 10px;
	transition: all 0.3s ease;
	border: 1px solid transparent;
}
header nav a:hover{
	transform: translateY(-3px);
}
.about-text .placeholder-text {
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
	margin-top: 110px;
	font-size: 17px;
	color: #777;
	line-height: 1.8;
}
</style>

<body>
		<header class="site-header">
		<nav>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/index/">صفحه اصلی</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/contactme">ارتباط با من</a>
<!--			<a href="<?php echo base_url()?>index.php/Main_cntrl/aboutme">درباره من</a>-->
			<a href="<?php echo base_url()?>index.php/Main_cntrl/musicFacts">دانستنی‌ها</a>
		</nav>
	</header>
	
	<div class="about-text">
		<p class="placeholder-text">
			این بخش درحال تکمیل است، به زودی اطلاعات بیشتر "درباره من" اینجا قرار خواهد گرفت.
			<br>
			برای اطلاعات بیشتر یا همکاری، لطفا از بخش ارتباط با من اقدام کنید.
		</p>

	</div>

</body>
</html>