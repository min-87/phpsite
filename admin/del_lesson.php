<!--Скрипт удаление урока из базы данных-->
<?php
include("blocks/db.php");
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Удаление урока</title>
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
					 <p>Выберите урок для удаления</p>
		 <form action="drop_lesson.php"	method="post">
		 <?php 

//	Запрос к таблице "уроки" базы данных
	$result=mysqli_query($db, "SELECT id,title FROM lessons");
	$myrow=mysqli_fetch_array($result);
			do 
//		Отрисовка в цикле группы радиокнопок с названиями уроков
		{
		printf("<p><input name='id' type='radio' value='%s'> <label> %s </label></p>", $myrow["id"], $myrow ["title"]);
		}
	while($myrow=mysqli_fetch_array($result));
			?>	
	   <p><input type="submit" value="Удалить урок!!!"></p>
		</form>

														 
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