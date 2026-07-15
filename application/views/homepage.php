<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HomePage</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
</head>
	

<body>
	<header class="site-header">
		<nav>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/index/">صفحه اصلی</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/contactme">ارتباط با من</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/aboutme">درباره من</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/musicFacts">دانستنی‌ها</a>
		</nav>

	</header>
	
	<main>
		<div class="container">
			<div class="welcome"><h2>به دنیای موسیقی و گفتگو خوش آمدید🎶</h2></div>
			<div>
				<p class="text">برای دریافت موزیک متناسب با حال و هوایتان روی لینک زیر کلیک کنید</p>
				<a href="<?php echo base_url()?>index.php/Main_cntrl/selectMood">کلیک کنید</a>
			</div>
		</div>
	</main>
	
	<footer>
		<p>تمامی حقوق این وبسایت محفوظ است.</p>
		<p>هر حال و هوایی موسیقی مخصوص خودش رو داره  😉</p>
	
	</footer>
</body>
</html>