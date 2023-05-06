<?php
include "scripts/global.php";
$id = $_GET['id'];
$sql1 = "SELECT `source`,`user` FROM `images` WHERE `id` = :id LIMIT 1";
$sth1 = $pdocxn->prepare($sql1);
$sth1->bindParam(':id',$id);
$sth1->execute();
while ($row1 = $sth1->fetch(PDO::FETCH_ASSOC))
{
$source = $row1['source'];
$user = $row1['user'];
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="15218922.css" type="text/css">
</head>
<body>


<div id="bodyoverlay"> </div>
<div id="preheader">
	<div id="preheadernst">
		<p style="text-align: left;"><br /><br />
<style type="text/css">
.result15220309 {
	text-align: left;
  display: block;
  margin: 0px 0 0 0px;
  }
</style>
<a href="labupload.php"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
	class="result15220309"
	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,40,0"
    width="192"
	height="29"
	id="haxe"
	align="middle">
	<param name="movie" value="button2/logo19730722.swf"/>
	<param name="allowScriptAccess" value="always" />
	<param name="quality" value="high" />
	<param name="wmode" value="transparent" />
	<embed src="button2/logo19730722.swf"
		   wmode="transparent"
		   width="192"
		   height="29"
	       name="haxe"
	       quality="high"
	       allowScriptAccess="always"
	       type="application/x-shockwave-flash"
	       pluginspage="http://www.macromedia.com/go/getflashplayer"
	></embed>
</object>
</a>
</p>
	</div>
</div>
<div id="containerpre"></div>
<div id="container" class=" pie">
	<div id="header1container">
	<div id="header1containernst">
		<div id="header1" class=" pie">
			<div id="header1nst" class=" pie">
			</div>
		</div>
	</div>
</div>
	<div id="maincontainer">
	<div id="maincontainernst" class="clearfix">
		<div id="main_lcol1">
			<div id="main_lcol1nst">
				<p style="text-align: left;"><span style="font-size: 13px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- memeslab-verticle -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-2057589821822878"
     data-ad-slot="9606736844"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></span></p>
			</div>
		</div>
		<div id="main">
			<div id="mainnst">
<?php
echo "<img src=\"images/upload/".$id.".gif\" width=\"540\">";
echo "<br /> Source:".$source;
echo "<br /> User:".$user;
?>

<span style="color: #800000;"><strong>rich-text</strong></span>
			</div>
		</div>
		<div id="main_rcol1">
			<div id="main_rcol1nst">
				<p style="text-align: left;"><span style="font-size: 13px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- memeslab-verticle -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-2057589821822878"
     data-ad-slot="9606736844"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</span></p>
			</div>
		</div>
	</div>
</div>
	<div id="footer1container">
	<div id="footer1containernst">
		<div id="footer1" class=" pie">
				<div id="footer1nst" class=" pie">
				<p style="text-align: left;"><span style="font-size: 13px;"><span style="color: #800000;"><strong>copyright meme lab</strong></span></span></p>
				</div>
		</div>
	</div>
</div>
</div>

<!--[if lt IE 10]><script type="text/javascript" src="ie_compat.js"></script><![endif]-->
</body>
</html>
