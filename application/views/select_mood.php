<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select mood</title>
</head>
	<style>
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
		body{
			background: #f4e6d4;
			margin: 0;
			font-family: "sans-serif";
			direction: rtl;
		}
		.mood-section{
			padding: 70px 20px;
			text-align: center;
		}
		.mood-section h2{
			font-size: 2rem;
			margin-bottom: 50px;
			color: #222;
		}
		
		.mood-container{
			max-width: 500px;
			margin: 40px auto;
			display: flex;
			flex-direction: column;
			gap: 20px;
		}
		.mood-card{
			display: block;
			padding: 22px;
			background: #a3c7dd;
			border-radius: 14px;
			text-decoration: none;
			box-shadow: 0 8px 8px #94b6cc;
			transition: 0.3s ease;

		}
		.mood-name{
			font-size: 1.2rem;
			font-weight: bold;
			color: #334155;
			z-index: 2;
		}
		.mood-card:hover{
			color: #c4e4f9;
			transform: translateY(-6px);
			box-shadow: 0 18px 35px #94b6cc;
			background: #c4e4f9;
		}
	
	</style>

<body>
	
	<header class="site-header">
		<nav>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/index/">بازگشت به صفحه اصلی</a>
<!--
			<a href="<?php echo base_url()?>index.php/Main_cntrl/contactme">ارتباط با من</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/aboutme">درباره من</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/musicFacts">دانستنی‌ها</a>
-->
		</nav>

	</header>
	
	<section class="mood-section">
		<h2> حال و هوای الان خودت رو انتحاب کن 🎧</h2>
		<div class="mood-container">
			
			<?php foreach($moods as $mood): ?>

			<a class="mood-card" href="<?php echo  base_url();?>index.php/Main_cntrl/showMusic/<?php echo $mood->mood;?>">
				<span class="mood-name">
				<?php echo $mood->mood; ?>
				</span>
			</a>
		<?php endforeach;?>
		</div>
	
	</section>

</body>
</html>