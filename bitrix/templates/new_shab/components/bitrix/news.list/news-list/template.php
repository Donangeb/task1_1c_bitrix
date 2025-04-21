<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .news-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .news-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .news-header h1 {
            font-size: 2.5rem;
            color: #222;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        
        .news-header h1::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
            bottom: -10px;
            left: 25%;
        }
        
        .news-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .news-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .news-content {
            padding: 20px;
        }
        
        .news-date {
            display: inline-block;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        
        .news-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #222;
        }
        
        .news-excerpt {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        
        .read-more {
            display: inline-block;
            color: #4ecdc4;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .read-more:hover {
            color: #ff6b6b;
        }
        
        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
            
            .news-header h1 {
                font-size: 2rem;
            }
        }
    </style>


<div class="news-container">
        <div class="news-header">
            <h1>Последние новости</h1>
            <p>Будьте в курсе самых свежих событий</p>
        </div>
        <div class="news-grid">
		<?$count = 1 ?>
		<? foreach( $arResult['ITEMS'] as $asItem): ?>
				<div class="news-card">
					<img src="<?=$asItem['PREVIEW_PICTURE']['SRC'] ?>" alt="Новость <?=$count?>" class="news-image">
					<div class="news-content">
                    <span class="news-date"><?=$asItem['TIMESTAMP_X'] ?></span>
                    <h3 class="news-title"> <?=$asItem['NAME'] ?> </h3>
                    <p class="news-excerpt">  <?=$asItem['DETAIL_TEXT'] ?> </p>
                    <a href="#" class="read-more">Читать далее →</a>	
					</div>
				</div>
		<? $count += 1 ?>
		<? endforeach ?>
        </div>
</div>
