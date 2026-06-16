<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание 5 — Карточка преподавателя по ID</title>
	<style>
		body { font-family: Arial, sans-serif; margin: 20px; color: #333; }
		
		/* Панель для быстрого переключения (для проверки) */
		.nav-panel { margin-bottom: 20px; padding: 12px; background-color: #f5f5f5; border: 1px solid #ddd; border-radius: 4px; }
		.nav-panel a { margin-right: 15px; text-decoration: none; color: #0056b3; font-weight: bold; }
		.nav-panel a:hover { text-decoration: underline; }

		/* Блок персональных данных (Красная рамка) */
		.person-block { border: 2px solid red; padding: 15px; margin-bottom: 20px; width: 85%; }
		.person-title { font-size: 24px; font-weight: bold; margin: 0 0 10px 0; }
		.person-meta { font-size: 16px; font-weight: bold; }
		
		/* Блок образования (Синяя рамка) */
		.edu-block { border: 2px solid #0056b3; padding: 15px; margin-bottom: 20px; width: 85%; }
		.block-header { font-size: 18px; font-weight: bold; margin-bottom: 10px; }
		
		/* Блок курсов (Зеленая рамка) */
		.cours-block { border: 2px solid #28a745; padding: 15px; width: 85%; }
		
		/* Общие стили для таблиц */
		table { border-collapse: collapse; width: 100%; margin-top: 10px; font-size: 14px; }
		th, td { border: 1px solid #777; padding: 8px 10px; text-align: left; vertical-align: top; }
		th { background-color: #f2f2f2; font-weight: bold; }
	</style>
</head>
<body>
	
	<h1>Управляющие конструкции</h1>
	<h2>Задание 5 — Фильтрация данных по GET-параметру id</h2>

	<!-- Панель навигации для быстрого тестирования переключения ?id=... -->
	<div class="nav-panel">
		<strong>Выберите преподавателя:</strong>
		<a href="?id=1">ID 1 (Бородина)</a>
		<a href="?id=2">ID 2 (Кошкина)</a>
		<a href="?id=3">ID 3 (Рыбкина)</a>
		<a href="?id=4">ID 4 (Маркова)</a>
		<a href="?id=5">ID 5 (Ильчук)</a>
	</div>
	<hr>
	
	<?php
		// === 1. ВХОДНЫЕ ДАННЫЕ (ИМИТАЦИЯ БАЗЫ ДАННЫХ) ===

		// Ваш полный массив преподавателей
		$personnel = array (
			array('id_personnel' => 1, 'surname' => 'Бородина', 'name' => 'Ксения', 'patronymic' => 'Алексеевна', 'post' => 'Преподаватель', 'main_post' => '', 'category' => 'Соответствие занимаемой должности', 'level_edu' => 'Высшее профессиональное', 'experience_total' => 21.3, 'experience_college' => 14.5, 'email' => '', 'site' => '', 'unit' => 'Преподаватели', 'note' => '', 'actual' => 1, 'hidden' => 0),
			array('id_personnel' => 2, 'surname' => 'Кошкина', 'name' => 'Вера', 'patronymic' => 'Николаевна', 'post' => 'Преподаватель', 'main_post' => '', 'category' => 'Соответствие занимаемой должности', 'level_edu' => 'Высшее профессиональное', 'experience_total' => 29.1, 'experience_college' => 29.1, 'email' => 'koshkova_v_n@mail.ru', 'site' => '', 'unit' => 'Преподаватели', 'note' => '', 'actual' => 1, 'hidden' => 0),
			array('id_personnel' => 3, 'surname' => 'Рыбкина', 'name' => 'Ольга', 'patronymic' => 'Витальевна', 'post' => 'Преподаватель', 'main_post' => '', 'category' => 'Соответствие занимаемой должности', 'level_edu' => 'Высшее профессиональное', 'experience_total' => 21.3, 'experience_college' => 14.5, 'email' => 'RubkinaOlga1234@mail.ru', 'site' => '', 'unit' => 'Преподаватели', 'note' => '', 'actual' => 1, 'hidden' => 0),		
			array('id_personnel' => 4, 'surname' => 'Маркова', 'name' => 'Елизавета', 'patronymic' => 'Андреевна', 'post' => 'Преподаватель', 'main_post' => '', 'category' => 'Первая', 'level_edu' => 'Высшее профессиональное', 'experience_total' => 19.11, 'experience_college' => 16.5, 'email' => 'markovaaa.el@gmail.com', 'site' => '', 'unit' => 'Преподаватели', 'note' => '', 'actual' => 1, 'hidden' => 0),
			array('id_personnel' => 5, 'surname' => 'Ильчук', 'name' => 'Виталина', 'patronymic' => 'Георгиевна', 'post' => 'Преподаватель', 'main_post' => 'Заведующий по профессиям', 'category' => 'Высшая', 'level_edu' => 'Высшее Professionals', 'experience_total' => 36.1, 'experience_college' => 19, 'email' => 'il4uk.v@mail.ru', 'site' => 'iamil4uk.ru', 'unit' => 'Преподаватели', 'note' => '', 'actual' => 1, 'hidden' => 0)				
		);

		// Ваша структура образования (синтаксические ошибки исправлены на '')
		$educations_all = array (
			array ('id_education' => 1, 'id_personnel' => 5, 'institution' => 'Московский государственный институт электронной техники (технический университет) ', 'qualification' => 'Факультет инфокоммуникационных технологий', 'specialty' => 'Программное обеспечение радиоэлектронных систем', 'year_receipts' => 2005, 'year_release' => 2010, 'note' => ''),
			array ('id_education' => 2, 'id_personnel' => 5, 'institution' => 'Санкт-Петербургский государственный университет (СПбГУ)', 'qualification' => 'Информационные системы и технологии', 'specialty' => 'Безопасность киберфизических систем', 'year_receipts' => 1993, 'year_release' => 1998, 'note' => ''),
			array ('id_education' => 3, 'id_personnel' => 4, 'institution' => 'Московский государственный университет имени М.В.Ломоносова', 'qualification' => 'Факультет вычислительной математики и кибернетики', 'specialty' => 'Прикладная математика и информатика', 'year_receipts' => 1990, 'year_release' => 2001, 'note' => ''),
			array ('id_education' => 4, 'id_personnel' => 4, 'institution' => 'Московский физико-технический институт', 'qualification' => 'Информатика и вычислительная техника', 'specialty' => 'Информатика и вычислительная техника', 'year_receipts' => '', 'year_release' => '', 'note' => ''),
			array ('id_education' => 5, 'id_personnel' => 3, 'institution' => 'Московский физико-технический институт', 'qualification' => 'Компьютерная безопасность', 'specialty' => 'Компьютерная безопасность', 'year_receipts' => '', 'year_release' => '', 'note' => ''),
			array ('id_education' => 6, 'id_personnel' => 2, 'institution' => 'Ярославский государственный технический университет', 'qualification' => 'Информационные системы и технологии', 'specialty' => 'Системы искусственного интелекта', 'year_receipts' => 2000, 'year_release' => 2007, 'note' => ''),
			array ('id_education' => 7, 'id_personnel' => 1, 'institution' => 'Ярославский государственный технический университет', 'qualification' => 'Программная инженерия', 'specialty' => 'Программная инженерия', 'year_receipts' => 1985, 'year_release' => 1991, 'note' => '')
		);

		// Структура курсов повышения квалификации
		$courses_all = array (
			array('id_personnel' => 5, 'name' => 'Fullstack разработчик на Python', 'duration' => 220, 'price' => '110.000'), 
			array('id_personnel' => 5, 'name' => 'Профессия веб-разработчик', 'duration' => 100, 'price' => '90.000'), 	
			array('id_personnel' => 5, 'name' => 'Профессия Android-разработчик', 'duration' => 150, 'price' => '135.000')
		);

		// === 2. ОБРАБОТКА GET-ПАРАМЕТРА (ЛОГИКА ПОИСКА) ===
		$search_id = 1; // Значение по умолчанию из условий лабораторной
		if (isset($_GET['id']) && $_GET['id'] !== '') {
			$search_id = intval($_GET['id']);
		}

		// Поиск преподавателя по ключу id_personnel
		$current_person = null;
		foreach ($personnel as $p) {
			if ($p['id_personnel'] == $search_id) {
				$current_person = $p;
				break;
			}
		}

		// Если передан некорректный ID, откатываемся на первого по списку
		if (!$current_person) {
			$current_person = $personnel[0];
			$search_id = $current_person['id_personnel'];
		}

		// Выбираем только связанные записи образования (по внешнему ключу id_personnel)
		$current_educations = array();
		foreach ($educations_all as $edu) {
			if ($edu['id_personnel'] == $search_id) {
				$current_educations[] = $edu;
			}
		}

		// Выбираем только связанные записи курсов
		$current_courses = array();
		foreach ($courses_all as $cours) {
			if ($cours['id_personnel'] == $search_id) {
				$current_courses[] = $cours;
			}
		}

		// === 3. ОПРЕДЕЛЕНИЕ ФУНКЦИЙ ВЫВОДА (ИЗ ЗАДАНИЯ 4) ===
		
		function getPersonData($data) {
			$out = "<div class='person-block'>
						<div class='person-title'>{$data['surname']} {$data['name']} {$data['patronymic']}</div>
						<div class='person-meta'>Категория: {$data['category']}</div>
					</div>";
			return $out;
		}
		
		function getPersonEdu($data) {
			$out = "<div class='edu-block'>
						<div class='block-header'>Образование:</div>";
			if (empty($data)) {
				$out .= "<p>Сведения об образовании не внесены в базу данных.</p>";
			} else {
				$out .= "<table>
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
					$range = ($item['year_receipts'] && $item['year_release']) ? "{$item['year_receipts']} - {$item['year_release']}" : "Не указано";
					$out .= "<tr>
								<td>{$range}</td>
								<td>{$item['institution']}</td>
								<td>{$item['qualification']}</td>
								<td>{$item['specialty']}</td>
							 </tr>";
				}
				$out .= "</tbody></table>";
			}
			$out .= "</div>";
			return $out;
		}
		
		function getPersonCours($data) {
			$out = "<div class='cours-block'>
						<div class='block-header'>Курсы:</div>";
			if (empty($data)) {
				$out .= "<p>Данные о прохождении дополнительных курсов отсутствуют.</p>";
			} else {
				$out .= "<table style='width: auto;'>
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
								<td>{$item['duration']} ч.</td>
								<td>{$item['price']} руб.</td>
							 </tr>";
				}
				$out .= "</tbody></table>";
			}
			$out .= "</div>";
			return $out;
		}

		// === 4. ВЫВОД СФОРМИРОВАННЫХ КАРТОЧЕК В БРАУЗЕР ===
		echo getPersonData($current_person);
		echo getPersonEdu($current_educations);
		echo getPersonCours($current_courses);
	?>

</body>
</html>

