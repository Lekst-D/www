<?php
			setlocale(LC_ALL, "english");
			$day = strftime('%d');
			$mon = strftime('%B');
			$year = strftime('%Y');

			echo "Сегодня $day число, $mon месяц, $year год.";
			?>