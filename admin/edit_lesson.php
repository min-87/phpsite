<?php
include("blocks/db.php");
if (isset($_GET['id'])) { $id=$_GET['id'];}
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование урока</title>
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
					
<!--					Подключаемся к таблице уроков и делаем запрос на выборку полей айди и тайтла урока-->
					 <?php 
//Передаем переменную айди из массива ГЕТ

if (!isset($id))
{
//	Запрос к таблице "уроки" базы данных
	$result=mysqli_query($db, "SELECT id,title FROM lessons");
	$myrow=mysqli_fetch_array($result);

//	Выводим тайтлы уроков в цикле
		echo "<p>Выберите урок для редактирования</p>";
		do 
		{
		printf("<p><a href='edit_lesson.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
		}
	while($myrow=mysqli_fetch_array($result));
}
else
{
//	Запрос к таблице "уроки" базы данных
$result=mysqli_query($db, "SELECT * FROM lessons WHERE id=$id");
$myrow=mysqli_fetch_array($result);
//	Отрисовываем табличку редактирования урока синтаксисом хередок
print <<<HERE
 <form name="form" action="update_lesson.php" method="post" >
 <p> <label>Введите название урока: <br><input name="title" type="text" id="title" value='$myrow[title]'></label></p>
 <p> <label>Ключевые поля: <br><input name="meta_d" type="text" id="meta_d" value='$myrow[meta_d]'></label></p>
 <p><label> Краткое описание урока: <br><input name="meta_k" type="text" id="meta_k" value='$myrow[meta_k]'></label></p>
 <p><label> Дату урока: <br><input name="date" type="text" id="date" value="2017-25-09" value='$myrow[data]'"></label></p>
 <p><label>Введите описание урока: <br><textarea name="description" cols="40" rows="5" id="description" >$myrow[description]

 </textarea></label></p>
 <p><label>Введите текст урока <br><textarea name="text" cols="40" rows="20" id="text">$myrow[text]

 </textarea></label></p>					 
 <p><label> Автор урока: <br><input name="author" type="text" id="author" value='$myrow[author]'></label></p>
 
 <p><input name="id" type="hidden" id="id" value='$myrow[id]'></label></p>
 
 <input name="submit" type="submit" id="submit" value="Сохранить изменения">

 </form> 
HERE;
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