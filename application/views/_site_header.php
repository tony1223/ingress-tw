<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<title><?php
		if(isset($pageTitle)){
			echo $pageTitle ; //透過變數設定
		} else{
			echo "Ingress TW Info" ; //預設標題
		}
	?></title>
    <link rel="stylesheet" href="<?=base_url("/css/bootstrap.min.css")?>">
    <link REL="SHORTCUT ICON" HREF="http://yoursitedotcom.here/yourdir/favicon.ico">
    <link rel="stylesheet" href="<?=base_url("/css/bootstrap-responsive.min.css")?>">
</head>
<body>