<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="default-style" content="fraxy.css">
		<link rel="stylesheet" type="text/css" href="fraxy.css">
		<title>FRAXY Reference Manual</title>
	</head>
	
	<body class="contents_main">
		<hr class="hr_s">
		<div class="blank" style="display:none"><?php include '../fraxy_exparam.html'?></div>
		<div class="style_center">
		<div class="categorytitle">FRAXY Reference Manual</div>
		<br>
		</div>
		
		<div class="style_center">
		<table class="messagetable"><tr align="left"><td>
		This is a reference guide for all things FRAXY.<br>
		<br>
		<!-- To access our tutorials, click <a href="">here</a><br>
		<br>
		-->
		To access information on how to use events, click <a href="fraxy_event.html">here</a>.<br>
		<br>
		For a list of extra parameters for all parts, click <a href="fraxy_exparam.html">here</a>.<br>
		<br>
		</td></tr></table>
		
		<hr class="line_s">
		<div class="style_center">- FRAXY Basic Information -</div>
		<hr class="line_s">
		
		<table class="messagetable"><tr align="left"><td>
		In FRAXY, time is measured in frames.<br>
		FRAXY normally runs at 40 frames per second, but high processing load may cause it to slow down.<br>
		<br>
		In FRAXY, angles are measured in angle units.<br>
		One circle is divided into 4096 angle units.<br>
		Angles are measured clockwise from the top. As an example, an angle of 1024 points 90 degrees to the right.<br>
		</td></tr></table>
		
		<hr class="line_s">
		<div class="style_center">- Parts Description Legend -</div>
		<hr class="line_s">
		
		<br><table class="partstable"><tr><td class="partsname" colspan="2">
		(039) Vulcan-Aim player
		</td></tr><tr><td class="partsimage" rowspan="3">
		<img src="img/039.gif" alt="*">
		</td><td class="partsinfo">
		A part that fires vulcan shots in the direction of the player.<br>
		<br>
		<details><summary class="params">Extra parameters</summary>
		<script>
		document.write('<div class="exparams">');
		document.write(document.getElementById("params_vulcan").innerHTML);
		document.write('</div>');
		</script>
		</details>
		</td></tr><tr><td class="partsmove">
		<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
		<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60~60 frames)</span><br>
		</td></tr><tr><td class="partsattack">
		<span class="partspattern">Attack action [1]</span> (Total: 100~100 frames)<br>
		<span class="partsaction">Vulcan (2x1~14x1) (Duration: 10~70 frames)</span><br>
		</td></tr></table><br>
		
		<br><table class="partstable"><tr><td class="partsname" colspan="2">
		(013) Big core 2
		</td></tr><tr><td class="partsimage" rowspan="3">
		<img src="img/013.gif" alt="*">
		</td><td class="partsinfo">
		A core part that strafes around the player while facing towards them.<br>
		</td></tr><tr><td class="partsspecial">
		On destruction: Generates item
		</td></tr><tr><td class="partsmove">
		<span class="partspattern">Movement action [1]</span> (Total: 1196~800 frames)<br>
		<span class="partsaction">Change direction (face player) (Rotation speed: 12~24) (Constant)</span><br>
		<span class="partsaction">Move (facing direction +1024) (Movement speed: 101~200) (Duration: 1196~800 frames)</span><br>
		<span class="partspattern">Movement action [2]</span> (Total: 1196~800 frames)<br>
		<span class="partsaction">Change direction (face player) (Rotation speed: 12~24) (Constant)</span><br>
		<span class="partsaction">Move (facing direction +3072) (Movement speed: 101~200) (Duration: 1196~800 frames)</span><br>
		</td></tr></table><br>
		
		<br><table class="messagetable"><tr align="left"><td>
		Movement actions are described in <font class="partsmove">green boxes</font>, while attack actions are described in <font class="partsattack">red boxes</font>.<br>
		<br>
		If a part has special features, they are described in a <font class="partsspecial">yellow box</font>.<br>
		<br>
		Undefined actions and settings are not described.<br>
		</td></tr></table><br>
		
		<br><table class="partstable"><tr><td class="partsname" colspan="2">
		(008) Laser S
		</td></tr><tr><td class="partsimage" rowspan="5">
		<img src="img/008.gif" alt="*">
		</td><td class="partsinfo">
		A part that fires a laser beam.<br>
		Each attack action makes the laser fire for a different duration.<br>
		</td></tr><tr><td class="partsattack">
		<span class="partspattern">Attack action [1]</span> (Total: 400~400 frames)<br>
		<span class="partsaction">Laser (Size: 100%) (Duration: 101~200 frames)</span><br>
		</td></tr><tr><td class="partsattack">
		<span class="partspattern">Attack action [3]</span> (Total: 500~500 frames)<br>
		<span class="partsaction">Laser (Size: 100%) (Duration: 201~300 frames)</span><br>
		</td></tr><tr><td class="partsattack">
		<span class="partspattern">Attack action [5]</span> (Total: 600~600 frames)<br>
		<span class="partsaction">Laser (Size: 100%) (Duration: 301~400 frames)</span><br>
		</td></tr><tr><td class="partsattack">
		<span class="partspattern">Attack action [7]</span> (Constant)<br>
		<span class="partsaction">Laser (Size: 100%)</span><br>
		</td></tr></table><br>
		
		<br><table class="messagetable"><tr align="left"><td>
		If an action is defined multiple times, it will be described multiple times.<br>
		Unless otherwise specified, the actions contained within each box form a loop.<br>
		<br>
		If the numbers assigned to an action are described as a range, like this: (Duration: 101~200 frames),<br>
		then those are the numbers for the part at Rank 1 and Rank 100.<br>
		If a number is not described as a range, then it does not change based on Rank.<br>
		<br>
		(Duration: frames) describes the number of frames it takes the part to perform its action.<br>
		(Total: frames) describes the number of frames until the action ends.<br>
		If multiple behaviors are described within the same action, the total frames value is taken from the behaviour that takes the longest.<br>
		<br>
		Although they are not specifically described in the tables, each action has some amount of wait frames after it is performed.<br>
		You can calculate an action's wait frames by subtracting its duration frames from its total frames.<br>
		This is illustrated in the diagram below.<br>
		</td></tr></table>
		<br>
		<table border="0" width="80%"><tr align="center">
		<td class="partsetc1" width="15%" rowspan="2">Start of action<br>Frame 0</td>
		<td class="partsetc0" width="70%" colspan="2">Total frames</td>
		<td class="partsetc1" width="15%" rowspan="2">End of action<br>Jump to next action</td>
		</tr>
		<tr align="center">
		<td class="partsetc2" width="45%">Duration frames</td>
		<td class="partsetc3" width="25%">Wait frames</td>
		</tr>
		</table>
		<hr class="hr_s">
	</body>
</html>