<style>img[alt*="www.000webhost.com"] {
    display: none;}
code made by Titanumnetwork,
img[alt="www.000webhost.com"]{display:none;}
</style>
<html>
<script>print("document.URL;");</script>
<!DOCTYPE html>
<html>
<head>
<body>
<title>MikeLime Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;


	border:1px solid #ffffff;

	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

<style>
.js-loading *,
.js-loading *:before,
.js-loading *:after {
  animation-play-state: paused !important;
}
</style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script>
document.body.classList.add('js-loading');

window.addEventListener("load", showPage);

function showPage() {
  document.body.classList.remove('js-loading');
}
</script>



</head>

<body>


<div id="container" class="w3-animate-zoom">

	<div style="text-align:center;">
		<h1 style="color:#ffffff;">MikeLime's Web Proxy</h1>
		<h3 style="color:#ffffff;">With MikeLime's free web proxy, you can browse the internet freely without your school being able to see what you're doing! This web proxy will even unblock websites, and we have a wide selection of unblocked games.</h3>
	</div>

	<?php if(isset($error_msg)){ ?>

	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>

	<?php } ?>

	<div id="frm">

	<!-- I wouldn't touch this part -->

		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>

		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>

	<!-- [END] -->

	</div>

</div>
	<div style="text-align:center;">
		<h2 style="color:#ffffff;">Just type a website in the bar above and click go!</h2>
</div>



</body>
</html>
