<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show music</title>
</head>
	<style>
		body{
			margin: 0;
			font-family: "sans-serif";
			background: #a3c7dd;
			direction: rtl;
		}
		.songs-section{
			max-width: 600px;
			margin: 5px auto;
			padding: 0 20px;
		}
		.song-card{
			margin-top: 45px;
			background: #f4e6d4;
			border-radius: 16px;
			padding: 20px 25px;
			margin-bottom: 20px;
			box-shadow: 0 8px 20px rgba(0,0,0,0.08);
			transition: 0.3s ease;
			border-right: 6px solid #3b82f6;
		}
		.song-card:hover{
			transform: translateY(-5px);
			box-shadow: 0 8px 18px #efd0a8;
		}
		.song-title{
			margin: 0 0 8px 0;
			font-size: 1.2rem;
			color: #111;
		}
		.song-artist{
			margin: 0;
			font-size: 1rem;
			color: #666;
		}
		
	
	</style>

<body>
	
	<div class="songs-section">
		<?php if(!empty($songs)): ?>
			<?php foreach($songs as $song): ?>
				<div class="song-card">
					<h3 class="song-title"><?php echo $song->title;?></h3>
					<p class="song-artist"><?php echo $song->artist;?></p>
		
				</div>
		<?php endforeach; ?>
		
		<?php else: ?>
		<p class="no-song">آهنگی یافت نشد!</p>
		<?php endif;?>
		
	</div>

</body>
</html>