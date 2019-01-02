<?php
include("blocks/db.php"); // Соединяемся с базой данных
if (isset($_GET['id'])) {$id=$_GET['id'];}
$result = mysqli_query($db,"SELECT * FROM articles WHERE id='$id'");//Обращаемся к таблице в БД
$myrow=mysqli_fetch_array($result); 
?>
<!doctype html>
<html lang="ru">

<head>
<meta charset="utf-8">
<meta name="description" content="<?php echo $myrow['meta_d']?>">
<meta name="keywords" content="<?php echo $myrow['meta_k']?>">

<title><?php echo $myrow['title'] ?></title>

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
			<td  valign="top">
<!--	  		 Выводим статью полностью-->
		  		<p class="title_text_lesson"><?php echo($myrow['title']); ?> </p> 
			 	<p class="title_date"><?php echo("Дата добавления: ".$myrow['date']); ?> </p> 
			  	<p class="title_date"><?php echo("Автор: ".$myrow['author']); ?> </p>
			  	<p><?php echo($myrow['text']); ?> </p> 
			  
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