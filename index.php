<?php
include("blocks/db.php"); // Соединяемся с базой данных
$db->query( "SET CHARSET utf8" ); //устанавливает кодировку общения с БД
$result = mysqli_query($db,"SELECT title,meta_d,meta_k,text FROM settings WHERE page='index'");//Обращаемся к таблице в БД
$myrow=mysqli_fetch_array($result); 
?>
<!doctype html>
<html lang="ru">

<head>
<meta charset="utf-8">
<meta name="description" content="<?php echo $myrow['meta_d']?>">
<meta name="keywords" content="<?php echo $myrow['meta_k']?>">

<title><?php echo $myrow['title'] ?></title>

<link href="admin/style.css" rel="stylesheet" type="text/css">
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
			<td>
			  <?php echo $myrow['text']?>
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