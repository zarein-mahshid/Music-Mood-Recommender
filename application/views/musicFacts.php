<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Music Facts</title>
</head>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial;
         }
		body{
			background-color:  #f4e6d4;
			direction: rtl
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
		.music-section{
			padding: 60px 20px;
			text-align: center;
			direction: rtl;
		}
		.music-section h3{
			font-size: 1.5rem;
			margin-bottom: 40px;
			color: #222;
		}
		.music-cards{
			display: flex;
			justify-content: center;
			gap: 25px;
			flex-wrap: wrap;
		}
		.music-card{
			background: #a3c7dd;
			width: 320px;
			padding: 25px 20px;
			border-radius: 16px;
			box-shadow: 0 8px 20px rgba(0,0,0,0.06);
			transition: all 0.3s ease;
			text-align: right;
		}
		.music-card p{
			font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial;
			margin: 0;
			line-height: 2;
			font-size: 1rem;
			color: #334155;
		}
		.music-card:hover{
			transform: translateY(-8px);
			box-shadow: 0 16px 30px #789ab1;
			background: #ffffff;
		}
	
	</style>

<body>
		<header class="site-header">
		<nav>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/index/">صفحه اصلی</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/contactme">ارتباط با من</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/aboutme">درباره من</a>
		</nav>

	</header>
	<div class="music-section">
		<h3>🎵دانستنی‌های موسیقی</h3>
		<div class="music-cards">
			
			<div class="music-card">
				<p> <strong>موسیقی و مغز انسان</strong>
				<br>
				آیا می‌دونستی موسیقی تنها هنریه که همزمان تمام بخش‌های مغز رو فعال می‌کنه؟ وقتی به موزیک گوش می‌دیم، نه تنها بخش شنوایی، بلکه بخش‌های مربوط به احساسات (آمیگدال)، حافظه (هیپوکمپ)، حرکت (قشر حرکتی) و حتی تصمیم‌گیری (قشر پیش‌پیشانی) هم همزمان کار می‌کنن. به همین دلیله که موسیقی می‌تونه خاطرات قدیمی رو زنده کنه یا حال ما رو سریعاً عوض کنه! 🧠✨
		        </p>
			</div>
			
			<div class="music-card">
				<p> <strong> قدیمی‌ترین ساز جهان</strong>
			    <br>
			    قدیمی‌ترین ساز موسیقی کشف شده در جهان، یک فلوت استخوانی متعلق به حدود ۴۰,۰۰۰ سال پیشه که در غارهای آلمان پیدا شده. این فلوت از استخوان پرندگان و عاج ماموت ساخته شده و نشون میده که انسان‌ها از هزاران سال پیش، حتی قبل از اختراع خط و نوشتن، برای بیان احساسات و ارتباط با هم از موسیقی استفاده می‌کردن. 🦴🎶
		       </p>			
			</div>
			
			<div class="music-card">		
				<p> <strong> موسیقی و رشد گیاهان</strong>
			   <br>
			   تحقیقات جالبی نشون داده که موسیقی می‌تونه روی رشد گیاهان هم تأثیر بذاره! گیاهانی که به موسیقی کلاسیک یا ملودی‌های آرام گوش می‌دن، معمولاً سریع‌تر رشد می‌کنن و برگ‌های سالم‌تری دارن. برعکس، موسیقی‌های پر سروصدا و بی‌ریتم (مثل هوی متال) می‌تونه باعث خشک شدن و رشد ضعیف‌تر گیاهان بشه. پس شاید گیاهان هم سلیقه‌ی موسیقیایی داشته باشن! 🌱🎼
		      </p>		
			</div>

		</div>
	
	</div>
	
</body>
</html>