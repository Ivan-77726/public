<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP — Задание 4</title>
	<style>
		body { font-family: Arial, sans-serif; margin: 20px; color: #333; }
		
		/* Блок персональных данных (Красная рамка) */
		.person-block { border: 2px solid red; padding: 15px; margin-bottom: 20px; width: 85%; }
		.person-title { font-size: 24px; font-weight: bold; margin: 0 0 10px 0; }
		.person-meta { font-size: 16px; font-weight: bold; }
		
		/* Блок образования (Синяя рамка) */
		.edu-block { border: 2px solid #0056b3; padding: 15px; margin-bottom: 20px; width: 85%; }
		.block-header { font-size: 18px; font-weight: bold; margin-bottom: 10px; }
		
		/* Блок курсов (Зеленая рамка) */
		.cours-block { border: 2px solid #28a745; padding: 15px; width: 85%; }
		
		/* Общие стили для таблиц (Рис. 2) */
		table { border-collapse: collapse; width: 100%; margin-top: 10px; font-size: 14px; }
		th, td { border: 1px solid #777; padding: 8px 10px; text-align: left; vertical-align: top; }
		th { background-color: #f2f2f2; font-weight: bold; }
	</style>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	
	<?php
		// === 1. ВСТРОЕННАЯ ФУНКЦИЯ ПОЛУЧЕНИЯ ДАННЫХ fnGetData() ===
		// Заменяет внешнее подключение папки dump и файлов внутри нее
		function fnGetData() {
			// Данные преподавателя (из dump/personnel.php)
			$personnel = array(
				'id_personnel' => 5, 
				'surname' => 'Бородина', 
				'name' => 'Ксения', 
				'patronymic' => 'Алексеевна', 
				'category' => 'Соответствие занимаемой должности'
			);

			// Данные об образовании (из dump/educations.php)
			$educations = array(
				array(
					'years' => '2005 - 2010',
					'inst' => 'Московский государственный институт электронной техники (технический университет)',
					'qual' => 'Факультет инфокоммуникационных технологий',
					'spec' => 'Программное обеспечение радиоэлектронных систем'
				),
				array(
					'years' => '1993 - 1998',
					'inst' => 'Санкт-Петербургский государственный университет (СПбГУ)',
					'qual' => 'Информационные системы и технологии',
					'spec' => 'Безопасность киберфизических систем'
				)
			);

			// Данные о курсах (из dump/courses.php)
			$courses = array (
				array('name' => 'Fullstack разработчик на Python', 'duration' => 220, 'price' => '110.000'), 
				array('name' => 'Профессия веб-разработчик', 'duration' => 100, 'price' => '90.000'), 	
				array('name' => 'Профессия Android-разработчик', 'duration' => 150, 'price' => '135.000')
			);
			
			// Возвращаем упакованный ассоциативный массив
			return array(
				'personnel' => $personnel,
				'courses' => $courses,
				'educations' => $educations
			);
		}

		// === 2. ПОЛУЧЕНИЕ И РАСПРЕДЕЛЕНИЕ МАССИВОВ (Строго по Рис. 1) ===
		$data = fnGetData();
		
		$person = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		// === 3. ОПРЕДЕЛЕНИЕ ФУНКЦИЙ ВЫВОДА (Задание 4) ===
		
		// Функция вывода персональных данных (Красная рамка)
		function getPersonData($data) {
			$out = "<div class='person-block'>
						<div class='person-title'>{$data['surname']} {$data['name']} {$data['patronymic']}</div>
						<div class='person-meta'>Категория: {$data['category']}</div>
					</div>";
			return $out;
		}
		
		// Функция вывода образования (Синяя рамка)
		function getPersonEdu($data) {
			$out = "<div class='edu-block'>
						<div class='block-header'>Образование:</div>
						<table>
							<thead>
								<tr>
									<th>Обучение</th>
									<th>Институт</th>
									<th>Квалификация</th>
									<th>Специализация</th>
								</tr>
							</thead>
							<tbody>";
			foreach ($data as $item) {
				$out .= "<tr>
							<td>{$item['years']}</td>
							<td>{$item['inst']}</td>
							<td>{$item['qual']}</td>
							<td>{$item['spec']}</td>
						 </tr>";
			}
			$out .= "</tbody></table></div>";
			return $out;
		}
		
		// Функция вывода курсов (Зеленая рамка)
		function getPersonCours($data) {
			$out = "<div class='cours-block'>
						<div class='block-header'>Курсы:</div>
						<table>
							<thead>
								<tr>
									<th>Наименование</th>
									<th>Продолжительность</th>
									<th>Цена</th>
								</tr>
							</thead>
							<tbody>";
			foreach ($data as $item) {
				$out .= "<tr>
							<td>{$item['name']}</td>
							<td>{$item['duration']}</td>
							<td>{$item['price']}</td>
						 </tr>";
			}
			$out .= "</tbody></table></div>";
			return $out;
		}
		
		// === 4. ВЫВОД ДАННЫХ В БРАУЗЕР СТРОГО ПО ШАБЛОНУ СЦЕНАРИЯ (Рис. 1) ===
		
		// выводим персональные данные
		echo getPersonData($person);
		
		// выводим данные об образовании
		echo getPersonEdu($educations);
		
		// выводим данные о курсах
		echo getPersonCours($courses);
	?>

</body>
</html>
