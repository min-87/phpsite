﻿<?php
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
if (isset($_POST['meta_d'])) { $meta_d=$_POST['meta_d'];	
							 if ($meta_d=="") {unset($meta_d);}}
if (isset($_POST['meta_k'])) { $meta_k=$_POST['meta_k'];
							 if ($meta_k=="")	{unset($meta_k);}}
if (isset($_POST['text'])) {	$text=$_POST['text'];
						   if ($text=="")	{unset($text);	}}
if (isset($_POST['id']))   {$id=$_POST['id'];}

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
	if (isset($title) && isset($meta_d) && isset($meta_k) && isset($text)  && isset($id))
	{ 	
//Если "да", то ..
//Записываем значения переменных в базу данных
//Ключ $db
//Запомнить форму запроса к базе данных на вставку!
$result=mysqli_query($db, "UPDATE settings SET title='$title', meta_d='$meta_d', meta_k='$meta_k', text='$text' WHERE id='$id'");						
												
											 
//	Выводим сообщение о результате операции записи урока в базу
		if ($result==true)
		{
			echo "<p> Страница успешно обновлена</p>";
		}
		else {
			echo "<p> Страница не обновлена</p>";
		 }
	}
			else {
				echo "Вы ввели не все данные поэтому страница не может быть обновлена";
			}
	
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