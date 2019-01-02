<!--Скрипт удаление статьи из базы данных-->
<?php
include("blocks/db.php");
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Удаление статьи</title>
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
					 <p>Выберите статью для удаления</p>
		 <form action="drop_article.php"	method="post">
		 <?php 

//	Запрос к таблице "статьи" базы данных
	$result=mysqli_query($db, "SELECT id,title FROM articles");
	$myrow=mysqli_fetch_array($result);
			do 
//		Отрисовка в цикле группы радиокнопок с названиями статей
		{
		printf("<p><input name='id' type='radio' value='%s'> <label> %s </label></p>", $myrow["id"], $myrow ["title"]);
		}
	while($myrow=mysqli_fetch_array($result));
			?>	
	   <p><input type="submit" value="Удалить статью!!!"></p>
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