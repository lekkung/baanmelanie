<?php
session_start();

$strLang = $_GET["lang"];
$strPage = $_GET["page"];

$lang = "";

if($strLang == "th")
{
	$lang = "th.php";
}
else if($strLang == "en")
{
	$lang = "en.php";
}
else
{
	$lang = "th.php";
}

// include($lang);

?>
<html>
<head>
<title><?php echo $strTitle;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
Language = <?php echo $strLang;?><br>
Page = <?php echo $strPage;?><br>

<table width="452" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td><?php echo $strHome;?></td>
    <td><?php echo $strService;?></td>
    <td><?php echo $strAbout;?></td>
    <td><?php echo $strContact;?></td>
  </tr>
</table>
<br>
<br>
<?php echo $strDetail;?>
<br>
<br>
<br> 
<strong>Language</strong><br>
<a href="/th/<?php echo $strPage;?>/">TH</a> , <a href="/en/<?php echo $strPage;?>/">EN</a>
</body>
</html>