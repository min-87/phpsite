<?php
//test #2 github
include("blocks/db.php"); // Соединяемся с базой данных
$db->query( "SET CHARSET utf8" ); //устанавливает кодировку общения с БД
$result = mysqli_query($db,"SELECT title,meta_d,meta_k,text FROM settings WHERE page='articles'");//Обращаемся к таблице в БД
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
			<td valign="top">
			  <?php echo $myrow['text']?>
	      
		      <?php
	$result = mysqli_query($db,"SELECT *  FROM articles");//Обращаемся к таблице в БД
	$myrow=mysqli_fetch_array($result); 
				
	do{			
	printf ("
		<table  align='center' class='lesson_table'>
		        <tbody>
		          <tr>
		            <td class='lesson_title'><p class='lesson_name'>
					<a href='view_articles.php?id=%s'>%s</a></p>
					<p>Автор Статьи: %s </p>
					<p>Дата добавления статьи: %s </p>
					</td>
		            </tr>
		          <tr>
		            <td >%s</td>
		            </tr>
		          </tbody>
		  </table>",$myrow['id'],$myrow['title'],$myrow['author'],$myrow['date'],$myrow['description']);
	}
				
	while ($myrow=mysqli_fetch_array($result));
				
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