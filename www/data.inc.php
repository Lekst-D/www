<?php
			$leftMenu = [
			['link'=>'Домой', 'href'=>'index.php'],
			['link'=>'О нас', 'href'=>'index.php?id=about'],
			['link'=>'Контакты', 'href'=>'index.php?id=contact'],
			['link'=>'Таблица', 'href'=>'index.php?id=table'],
			['link'=>'Задания с 1 по 10', 'href'=>'index.php?id=question1_10']
			];

            foreach($leftMenu as $var)
			{
				$link_=$var['link'] ;
				$href_=$var['href'] ;
				echo "<li><a href=$href_>$link_</a></li>";//"<li><a href='$var['href']'></a></li>";
			}
?>