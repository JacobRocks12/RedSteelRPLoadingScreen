<?php 

error_reporting(0);
$APIKey = "F63CAC09B106D4EC084C4DA4C21BF4B4";
include ('includes/errorcheck.php');
$steamid64 = $_GET["steamid"];
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $APIKey . "&steamids=" . $steamid64;
$json = file_get_contents($url);
$table2 = json_decode($json, true);
$table = $table2["response"]["players"][0];
$authserver = bcsub($steamid64, '76561197960265728') & 1;
$authid = (bcsub($steamid64, '76561197960265728')-$authserver)/2;
$steamid32 = "STEAM_0:$authserver:$authid";
echo "<audio autoplay loop id=\"music\">";
echo "<source type='audio/ogg' src='music/song.ogg'>";
echo "</audio>"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<head>
<title>RedSteelRP</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="includes/jquery.js"></script>
<script type="text/javascript" src="includes/slider.js"></script>
<script type="text/javascript">-
$('#background').cycle({ 
fx: 'fade', // You can change the FX way the pictures changes with, an example scrollDown. Check out http://jquery.malsup.com/cycle/ for more about that matter
speed: 2000, 
timeout: 4000 
});
</script>
</head>
<body>
<div id="background">
<div id="bg1"> </div>
<div id="bg2"> </div>
<div id="bg3"> </div>
<div id="bg4"> </div>
<div id="bg5"> </div>
<div id="bg6"> </div>
</div>
<div class="content">
<div class="top-box">
<img src="images/logo.png" class="logo" style="margin-top: 10px; margin-left: -90px;"> 
</div>
<div class="left-side">
<div class="top-left-box"></div>
<div class="middle-left-box">
						<!--Want more quotes? Just copy paste the p. div and it will appear in the order it is shown in this document-->
						<p class="middle-left-box-text">
							Welcome to this server. We here at this server look forward to roleplay and assist you if needed. To call an admin, use the @ command and an admin will arrive to you shortly.
						</p>
						
						<p class="middle-left-box-text">
							If you are getting in trouble by admins, please check out the rules on how to roleplay like a professional.
						</p>
						
						<p class="middle-left-box-text">
							The server was made in the start of 2015 and was originally hosted on the Owners PC, Since then it has grown into a vast community.
						</p>
						
					</div>
					
					<!--Where the third picture is put in to display -->
					<div class="bottom-left-box"></div>
				</div>
			
				<!--The rule list is here. Edit it as you wish! -->
				<div class="middle-box">
					<p class="box-title">Server Rules</p>
					<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">1.</div>
						</td>
						<td style="width:85%">
							Do not RDM (random deathmatch).
						</td>
					</table>
					<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">2.</div>
						</td>
						<td style="width:85%">
							Do not RDA (random arrest).
						</td>
					</table>
					<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">3.</div>
						</td>
						<td style="width:85%">
							Do not metagame.
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">4.</div>
						</td>
						<td style="width:85%">
							Do not argue with staff, their word is final.
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">5.</div>
						</td>
						<td style="width:85%">
							Do not proclimb onto top of buildings or while raiding to get inside.
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">6.</div>
						</td>
						<td style="width:85%">
							Do not annoy other players on purpose, they can kill you after 3 warnings to tell you to leave.
						</td>
					</table>
						<hr class="blue-line2">
					<table class="server-info-table" style="width:100%">
						<td style="width:15%">
							<div class="server-rule-number">7.</div>
						</td>
						<td style="width:85%">
							Please respect everyone and do not argue. Staff may RP unless they are in a SOD job. Visit <a href="http://rsrp.enjin.com/">rsrp.enjin.com</a> to see our website.
						</td>
					</table>
					
				</div>
				
				<!--Information about the server and the connecting user is displayed here. I advise you not to touch any of the codes here as it may cause faults -->
				<div class="right-side">
					<!--The connecting users information is displayed here -->
					<div class="top-right-box">
						<div class="avatar">
						<?php	echo "<img class='avatar-img' src=\"" . $table["avatarfull"] . "\" />";
						?> </div>
						<?php	echo "<p class=\"persona-name\">" . $table["personaname"] . "</p>"; 
						?>
						
						<p class="steam-id"><?php echo $steamid32 ?></p>
					</div>
					<!--The servers information such as gamemode, map and server name is displayed here-->
					<div class="bottom-right-box">
						<p class="box-title">Server Information</p>
						<hr class="blue-line">
						<table class="server-info-table" style="width:100%">
							<td style="width:25%">
								<div class="server-info-icon"><i class="fa fa-inbox"></i></div>
							</td>
							<td style="width:85%">
							<div id="server">Server Name</div>
							</td>
						</table>
						<hr class="blue-line">
						<table class="server-info-table" style="width:100%">
							<td style="width:25%">
								<div class="server-info-icon"><i class="fa fa-gamepad"></i></div>
							</td>
							<td style="width:85%">
							<div id="gamemode">Server Gamemode</div>
							</td>
						</table>
						<hr class="blue-line">
						<table class="server-info-table" style="width:100%">
							<td style="width:25%">
								<div class="server-info-icon"><i class="fa fa-map-marker"></i></div>
							</td>
							<td style="width:85%">
							<div id="map">Server Map</div>
							</td>
						</table>
					</div>
				</div>
			

	</div> 
	<!--Closes our content div-->
	
	<!--We put scripts at the bottom to load the HTML faster -->
	<script type="text/javascript" src="includes/progress-bar.js"></script> <!--The script so we can have a progress bar! -->
	<script type="text/javascript" charset="utf-8">
	// Fetch information about the server, do not touch this or modify this as it tends to break otherwise
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) { 
	document.getElementById("gamemode").innerHTML = gamemode;
	document.getElementById("server").innerHTML = servername;
	document.getElementById("map").innerHTML = mapname;
	}
	
	//Delete this function if you do not want the text to change and delete the p.divs (except one) and remove the "display: none;" in the middle-left-box-text style line in css/styles.css
	(function() {

    var quotes = $(".middle-left-box-text");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(1000)//How long it will take to fade the message in
            .delay(5000) //For how long the message will show
            .fadeOut(1000, showNextQuote); //How long it will take for the message to fade out and then the next quote showing.
    }
    
    showNextQuote();
    
})();

var music = document.getElementById("music");
music.volume = 0.1;
</script>
</body>

