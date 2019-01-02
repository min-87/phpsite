	
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Добавление новой статьи</title>
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
					 <form name="form" action="add_article.php" method="post" >
					 <p> Введите название статьи: <br><input name="title" type="text" id="title"></p>
					 <p> Ключевые поля: <br><input name="meta_d" type="text" id="meta_d"></p>
					 <p> Краткое описание статьи: <br><input name="meta_k" type="text" id="meta_k"></p>
					 <p> Дату статьи: <br><input name="date" type="date" id="date" value="2017-09-26"></p>
					 <p>Введите описание статьи: <br><textarea name="description" cols="40" rows="5" id="description">
					 	
					 </textarea></p>
					 <p>Введите текст статьи <br><textarea name="text" cols="40" rows="20" id="text">
					 	
					 </textarea></p>					 
					 <p> Автор статьи: <br><input name="author" type="text" id="author"></p>
					  <p> <input name="submit" type="submit" id="submit" formmethod="POST" value="Записать новую статью в базу"></p>
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