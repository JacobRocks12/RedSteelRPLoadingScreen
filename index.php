<?php
$SteamAPIKey = "F63CAC09B106D4EC084C4DA4C21BF4B4";
if (!isset($_GET["steamid"])) {
	die("Woops, you don't seem to be using the correct loading URL format, please make sure it has the correct extension it should look like this: www.yourdomain.com/loading/index.php?steamid=%s");
}
$steamid64 = $_GET["steamid"];

$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $steamid64;
$json = file_get_contents($url);
$table2 = json_decode($json, true);
$table = $table2["response"]["players"][0];

?>

<!DOCTYPE HTML>
<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Welcome to Crystal Load - Crystal Blue Persuassion!" />
	<title>RedSteelRP Loading Screen</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="colour.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/cycle.js"></script>
    <script type="text/javascript"><
        $(document).ready(function() {
            $(window).resize(function(){
                  $('.core-wrapper').css({
                   position:'absolute',
                   left: ($(window).width() 
                     - $('.core-wrapper').outerWidth())/2,
                   top: ($(window).height() 
                     - $('.core-wrapper').outerHeight())/2
                  });	
            });
            $(window).resize();
            $('#background-scroll').cycle({ 
                fx: 'fade',
                pause: 0, 
                speed: 1800,
                timeout: 3500
            });
        });
    </script>
	</head>
	<body>
    <div id="background-scroll">
    	<div id="bg1"></div>
        <div id="bg2"></div>
        <div id="bg3"></div>
        <div id="bg4"></div>
   	</div>
    <div class="core-wrapper">
        <img src="images/logo.png" width="960" height="120" alt="Your Logo" />
    	<div id="left-items">
			<?php
				echo "<div id=\"profile-wrap\">";
					echo "<div id=\"profile-top\">";
						echo "<div id=\"avatarimg\">";
							echo "<img src=\"" . $table["avatarfull"] . "\" />";
						echo "</div>";
					echo "</div>";
					echo "<div id=\"profile-bottom\">";
						echo "<p>" . $table["personaname"] . "</p>";
					echo "</div>";
				echo "</div>";
            ?>
            <div class="clear"></div>
            <div class="title server">
            	<h2>RedSteelRP</h2>
           	</div>
            <ul id="server-list">
            	<li><img src="images/server-name.png" alt="Server Name" /> <span id="s-name">Server Name</span></li><!-- Dynamically adds the server name -->
                <li><img src="images/server-mode.png" alt="Game Mode" /> <span id="s-mode">Server Game Mode</span></li><!-- Dynamically adds game mode name -->
                <li><img src="images/server-map.png" alt="Map Name" /> <span id="s-map">Server Map Name</span></li><!-- Dynamically adds map name -->
           	</ul>
     	</div>
        <div id="right-items">
            <div class="title">
            	<h2>Our Rules</h2>
           	</div>
            <ul id="rules">
            	<li><span>1</span> Do not bully or harass other players.</li>
                <li><span>2</span> Do not be annoying.</li>
                <li><span>3</span> Do not propkill</li>
                <li><span>4</span> Do not RDM.</li>
                <li><span>5</span> Do not metagame.</li>
                <li><span>6</span> Do not hack or exploit.</li>
                <li><span>7</span> Do not micspam.</li>
                <li><span>8</span> Do not kill players who are AFK.</li>
                <li><span>9</span> Obey all staff orders.</li>
                <li><span>10</span> Thanks, and have fun!</li>
            </ul>
      	</div>
        <div class="clear"></div>
        <div id="bar">
        	<div id="bar-width" style="width: 0%;"></div>
       	</div>
        <div id="percentage">
        	<p></p>
       	</div>
        <div id="download-item">
        	<p>Connecting...</p>
      	</div>
    </div>
    <script type="text/javascript" src="scripts/main.js"></script>
	</body>
</html>