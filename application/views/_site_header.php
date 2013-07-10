<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<title><?php
		if(isset($pageTitle)){
			if(empty($selector) || $selector != "home"){
				echo $pageTitle."- 台灣非官方 Ingress 教學與資料收集中心(Ingress.tw)" ; //透過變數設定
			}else{
				echo $pageTitle; //透過變數設定
			}
		} else{
			echo "Ingress TW Info" ; //預設標題
		}
	?></title>
    <link rel="stylesheet" href="<?=base_url("/css/bootstrap.min.css")?>">
    <link REL="SHORTCUT ICON" HREF="<?=base_url("favicon.ico")?>">
    <link rel="stylesheet" href="<?=base_url("/css/bootstrap-responsive.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("/css/site.css?css=".date("YmdH"))?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(function_exists("css_section")){
    	css_section();
     }?>
</head>
<body class="jf-notload">