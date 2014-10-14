<?php
	include "mysql.php";
	$table = "ENTRIES";
	$sql = "SELECT * from $table WHERE ID= '$_GET[id]'";
	$result = @mysql_query($sql);
	$row = @mysql_fetch_array($result);
	//echo $_GET['id'];
	if($_GET['id'] == 0){
	$querytype = 0;
	}
	else {$querytype = 1;}
?>

<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Judul Blog">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Simple Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Simple Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Simple Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Simple Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Simple Blog | Tambah Post</title>


</head>

<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Simple<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.php?id=0">+ Tambah Post</a></li>
    </ul>
</nav>

<article class="art simple post">
    
    
    <h2 class="art-title" style="margin-bottom:40px">-</h2>

    <!--<div class="art-body">-->
        <div class="art-body-inner">
            <h2>Tambah Post</h2>

            <div id="contact-area">
                <form name="form1" method="post" onsubmit="return (validatedate(document.form1.tanggal))" action="dbinsert.php?querytype=<?php echo $querytype; ?>&id=<?php echo $_GET['id']; ?>">
                    <label for="Judul">Judul:</label>
                    <input type="text" required name="title" value=<?php echo "$row[TITLE]"; ?> >

                    <label for="Tanggal">Tanggal:</label>
                    <input type="text" required name="tanggal" value=<?php echo "$row[TANGGAL]"; ?>>
                    
                    <label for="Konten">Konten:</label><br>
                    <textarea name="content" rows="20" cols="20" id="content" required><?php echo "$row[CONTENT]"; ?></textarea>

                    <input type="submit" name="submit" value="Simpan" class="submit-button" />
                </form>
            </div>
        </div>
		<!--</div>-->
	<script type="text/javascript" src="validasitanggal1.js">	</script>

</article>

<footer class="footer">
    <div class="back-to-top"><a href="">Back to top</a></div>
    <!-- <div class="footer-nav"><p></p></div> -->
    <div class="psi">&Psi;</div>
    <aside class="offsite-links">
        <br>
        <a class="twitter-link" href="http://twitter.com/ivanaclairine">Ivana Clairine</a>
        
    </aside>
</footer>

</div>

</body>
</html>