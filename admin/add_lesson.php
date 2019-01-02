<?php
include("blocks/db.php");// Соединяемся с БД
// Если переменная существует в массиве POST, то она
// присваивается простой переменной, 
//а если она пустая, то она уничтожается
if (isset($_POST['title']))
{
	$title=$_POST['title'];
	if ($title=="")
	{
		unset($title);
	}
}
if (isset($_POST['meta_d'])){ $meta_d=$_POST['meta_d'];	
							 if ($meta_d=="") {unset($meta_d);}}
if (isset($_POST['meta_k'])){ $meta_k=$_POST['meta_k'];
							 if ($meta_k=="")	{unset($meta_k);}}
if (isset($_POST['date'])){	$date=$_POST['date'];
						   if ($date=="")	{unset($date);	}}
if (isset($_POST['description'])){$description=$_POST['description'];						if ($description==""){unset($description);}}
if (isset($_POST['text'])){	$text=$_POST['text'];
						   if ($text=="")	{unset($text);	}}
if (isset($_POST['author'])){$author=$_POST['author'];
							 if ($author=="")	{unset($author);}}

?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Обработчик</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>	
	<table width="694"  align="center" cellpadding="0" cellspacing="0" class="main_border">
			  <tbody>
			  <?php include ("blocks/header.php"); ?>
			  <tr bgcolor="#FFFFFF">
			  <td>
				<table width="690" cellpadding="0" cellspacing="0" >
				  <tbody>
					<tr >
					<?php include ("blocks/lefttd.php"); ?>        
					<td valign="top">
				 		<?php 

//					Проверяем заполнены ли были поля формы
	if (isset($title) && isset($meta_d) && isset($meta_k) && isset($description) && isset($date) && isset($text) && isset($author))
	{ 	
//Если "да", то ..
//Записываем значения переменных в базу данных
//Ключ $db
//Запомнить форму запроса к базе данных на вставку!
$result=mysqli_query($db, "INSERT INTO lessons (title, meta_d, meta_k, description, text, author, date)   VALUES ('$title', '$meta_d', '$meta_k', '$description', '$text', '$author', '$date')");
						
						}								
											 
//	Выводим сообщение о результате операции записи урока в базу
						if ($result==true)
						{
							echo "<p> Урок успешно добавлен в базу данных!</p>";
						}
						else echo "<p> Урок не добавлен в базу, потому что вы ввели не все данные.</p>";
						?>					 			 
				  </td>
				</tr>
				</tbody>
			  </table>
			  </td>
			  <?php include("blocks/footer.php"); ?>
			 </tbody>
	 </table>
</body>

</html>