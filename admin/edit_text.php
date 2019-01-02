<?php
include("blocks/db.php");
if (isset($_GET['id'])) { $id=$_GET['id'];}//Передаем переменную айди из массива ГЕТ - простой переменной
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование страницы</title>
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
					
<!--Подключаемся к таблице settings и делаем запрос на выборку полей айди и тайтла страницы-->
					 <?php 


if (!isset($id))
{
//	Запрос к таблице settings базы данных
	$result=mysqli_query($db, "SELECT id,title FROM settings");
	$myrow=mysqli_fetch_array($result);

//	Выводим тайтлы уроков в цикле
		echo "<p><strong>Выберите страницу для редактирования</strong></p>";
		do 
		{
		printf("<p><a href='edit_text.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
		}
	while($myrow=mysqli_fetch_array($result));
}
else
{
//	Запрос к таблице  settings базы данных
$result=mysqli_query($db, "SELECT * FROM  settings WHERE id=$id");
$myrow=mysqli_fetch_array($result);
//	Отрисовываем табличку редактирования страницы синтаксисом хередок
print <<<HERE
 <form name="form" action="update_text.php" method="post" >
 <p> <label>Введите название страницы: <br><input name="title" type="text" id="title" value='$myrow[title]'></label></p>
 <p> <label>Ключевые поля: <br><input name="meta_d" type="text" id="meta_d" value='$myrow[meta_d]'></label></p>
 <p><label> Краткое описание страницы: <br><input name="meta_k" type="text" id="meta_k" value='$myrow[meta_k]'></label></p>
 </textarea></label></p>
 <p><label>Введите текст страницы <br><textarea name="text" cols="40" rows="20" id="text">$myrow[text]</textarea></label></p>
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