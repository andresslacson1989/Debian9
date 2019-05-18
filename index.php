<!DOCTYPE html>
<html>
<head>
	<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" /> 
<?php } ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
	#main-content {
		margin-top:20px;
	}
	.footer {
		font-size: 14px;
		text-align: center;
	}
</style>
</head>
<body>

<div class="jumbotron">
	<h1>WifiTunnel VPN SERVER</h1>
</div>
<div class="footer">
	&copy; <?php print date("Y");?>
</div>

</body>
</html>
