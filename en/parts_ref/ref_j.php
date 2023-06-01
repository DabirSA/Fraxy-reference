<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="default-style" content="../fraxy.css">
<link rel="stylesheet" type="text/css" href="../fraxy.css">
<title>FRAXY Parts list [J]</title>
</head>

<body class="contents_main">
<hr class="line_s">
<div class="blank" style="display:none"><?php include '../fraxy_exparam.html'?></div>
<div class="style_center">
<div class="categorytitle">- FRAXY Parts list [J] -</div>
<br>
[J] Joint<br>
<br>
Joints are mostly parts which enable complex enemy movement behavior.<br>
</div>
<hr class="line_s">

<table width="95%" border=0><tr><td class="style_left">

Joint-Turn type - 
<a href="#P014_TURN_15-30_JOINT_S">Joint-Turn 15-30</a>,
<a href="#P093_TURN_JOINT_15">Joint-Turn 015</a>,
<a href="#P094_TURN_JOINT_30">Joint-Turn 030</a>,
<a href="#P095_TURN_JOINT_45">Joint-Turn 045</a>,
<a href="#P096_TURN_JOINT_60">Joint-Turn 060</a>,
<a href="#P097_TURN_JOINT_90">Joint-Turn 090</a>,
<a href="#P098_TURN_JOINT_120">Joint-Turn 120</a>,
<a href="#P099_TURN_JOINT_150">Joint-Turn 150</a>,
<a href="#P100_TURN_JOINT_180">Joint-Turn 180</a>,
<a href="#P002_AIM_PLAYER_JOINT_S">Joint-Aim player S</a>,
<a href="#P007_AIM_PLAYER_JOINT_M">Joint-Aim player M</a>,
<a href="#P048_AIM_PLAYER_JOINT_L">Joint-Aim player L</a>,

<br>
Rolling panel type - 
<a href="#P077_SMALL_ROLLING_PANEL">Panel-Rolling S</a>,
<a href="#P078_SMALL_ROLLING_PANEL_2">Panel-Rolling S 2</a>,
<a href="#P015_ROLLING_PANEL">Panel-Rolling M</a>,
<a href="#P076_ROLLING_PANEL_2">Panel-Rolling M 2</a>,
<a href="#P182_SPECIFY_ROLLING_PANEL">Specify rolling panel</a>,

<br>
Special panel type - 
<a href="#P059_AIM_PLAYER_PANEL">Panel-aim player</a>,
<a href="#P142_AIM_PLAYER_PANEL_15">Panel-Aim player 015</a>,
<a href="#P143_AIM_PLAYER_PANEL_30">Panel-Aim player 030</a>,
<a href="#P144_AIM_PLAYER_PANEL_45">Panel-Aim player 045</a>,
<a href="#P145_AIM_PLAYER_PANEL_60">Panel-Aim player 060</a>,
<a href="#P146_AIM_PLAYER_PANEL_90">Panel-Aim player 090</a>,
<a href="#P147_AIM_PLAYER_PANEL_120">Panel-Aim player 120</a>,
<a href="#P148_AIM_PLAYER_PANEL_150">Panel-Aim player 150</a>,
<a href="#P149_AIM_PLAYER_PANEL_180">Panel-Aim player 180</a>,
<a href="#P061_AIM_INIT_DIRECTION_PANEL">Panel-Aim init angle</a>,
<a href="#P151_AIM_FIXED_DIRECTION_PANEL">Panel-Aim fixed angle</a>,
<a href="#P189_AIM_PLAYER_ANGLE_PANEL">Panel-Player angle</a>,
<a href="#P190_AIM_PAIR_PARTS_PANEL">Panel-Aim pair parts</a>,
<a href="#P192_AIM_PLAYER_MOVE_ANGLE_PANEL">Panel-Player move angle</a>,

<br>
Move joint type - 
<a href="#P083_MOVE_JOINT_S_HSPD">Move joint S (H-spd)</a>,
<a href="#P084_MOVE_JOINT_S_MSPD">Move joint S (M-spd)</a>,
<a href="#P085_MOVE_JOINT_S_LSPD">Move joint S (L-spd)</a>,

<br>
Others - 
<a href="#P060_SUICIDE_DEVICE">Suicide device</a>,
<a href="#P045_DETACH_JOINT">Joint-detach</a>,

</td></tr></table><br>
<hr class="line_s">
<div class="style_center">

<a name="P014_TURN_15-30_JOINT_S" id="P014_TURN_15-30_JOINT_S">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(014) Joint-Turn 15-30
</td></tr><tr><td class="partsimage" rowspan="6">
<img src="../img/014.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 15~30 degrees.<br>
<br>
Action [1] loops as follows: 15 degrees -> -15 degrees -> 30 degrees -> -30 degrees -> 15 degrees...<br>
Action [6] loops as follows: 30 degrees -> 0 degrees -> 30 degrees...<br>
Action [9] loops as follows: -30 degrees -> 0 degrees -> -30 degrees...<br>
Action [12] Constantly rotates to reach 30 degrees from center<br>
Action [14] Constantly rotates to reach -30 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Change direction (initial direction +170) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Change direction (initial direction +3925) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Change direction (initial direction +341) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Change direction (initial direction +3755) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 1000 frames)<br>
<span class="partsaction">Change direction (initial direction +341) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 1000 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 1000 frames)<br>
<span class="partsaction">Change direction (initial direction +3755) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 1000 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Total: 2000 frames)<br>
<span class="partsaction">Change direction (initial direction +341) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Total: 2000 frames)<br>
<span class="partsaction">Change direction (initial direction +3755) (Rotation speed: 8~12) (Duration: 599~500 frames)</span><br>
</td></tr></table><br>


<a name="P093_TURN_JOINT_15" id="P093_TURN_JOINT_15">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(093) Joint-Turn 015
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/093.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 15 degrees.<br>
<br>
Action [1] loops as follows: 15 degrees -> 0 degrees -> -15 degrees -> 0 degrees -> 15 degrees...<br>
Action [6] loops as follows: 15 degrees -> 0 degrees -> 15 degrees...<br>
Action [9] loops as follows: -15 degrees -> 0 degrees -> -15 degrees...<br>
Action [12] Constantly rotates to reach 15 degrees from center<br>
Action [13] Constantly rotates to reach -15 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +170) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3926) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +170) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3926) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +170) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +3926) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P094_TURN_JOINT_30" id="P094_TURN_JOINT_30">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(094) Joint-Turn 030
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/094.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 30 degrees.<br>
<br>
Action [1] loops as follows: 30 degrees -> 0 degrees -> -30 degrees -> 0 degrees -> 30 degrees...<br>
Action [6] loops as follows: 30 degrees -> 0 degrees -> 30 degrees...<br>
Action [9] loops as follows: -30 degrees -> 0 degrees -> -30 degrees...<br>
Action [12] Constantly rotates to reach 30 degrees from center<br>
Action [13] Constantly rotates to reach -30 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +341) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3755) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +341) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3755) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +341) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +3755) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P095_TURN_JOINT_45" id="P095_TURN_JOINT_45">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(095) Joint-Turn 045
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/095.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 45 degrees.<br>
<br>
Action [1] loops as follows: 45 degrees -> 0 degrees -> -45 degrees -> 0 degrees -> 45 degrees...<br>
Action [6] loops as follows: 45 degrees -> 0 degrees -> 45 degrees...<br>
Action [9] loops as follows: -45 degrees -> 0 degrees -> -45 degrees...<br>
Action [12] Constantly rotates to reach 45 degrees from center<br>
Action [13] Constantly rotates to reach -45 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +512) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3584) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +512) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3584) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +512) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +3584) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P096_TURN_JOINT_60" id="P096_TURN_JOINT_60">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(096) Joint-Turn 060
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/096.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 60 degrees.<br>
<br>
Action [1] loops as follows: 60 degrees -> 0 degrees -> -60 degrees -> 0 degrees -> 60 degrees...<br>
Action [6] loops as follows: 60 degrees -> 0 degrees -> 60 degrees...<br>
Action [9] loops as follows: -60 degrees -> 0 degrees -> -60 degrees...<br>
Action [12] Constantly rotates to reach 60 degrees from center<br>
Action [13] Constantly rotates to reach -60 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +682) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3414) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +682) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3414) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +682) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +3414) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P097_TURN_JOINT_90" id="P097_TURN_JOINT_90">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(097) Joint-Turn 090
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/094.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 90 degrees.<br>
<br>
Action [1] loops as follows: 90 degrees -> 0 degrees -> -90 degrees -> 0 degrees -> 90 degrees...<br>
Action [6] loops as follows: 90 degrees -> 0 degrees -> 90 degrees...<br>
Action [9] loops as follows: -90 degrees -> 0 degrees -> -90 degrees...<br>
Action [12] Constantly rotates to reach 90 degrees from center<br>
Action [13] Constantly rotates to reach -90 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +1024) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3072) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +1024) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +3072) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +1024) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +3072) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P098_TURN_JOINT_120" id="P098_TURN_JOINT_120">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(098) Joint-Turn 120
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/094.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 120 degrees.<br>
<br>
Action [1] loops as follows: 120 degrees -> 0 degrees -> -120 degrees -> 0 degrees -> 120 degrees...<br>
Action [6] loops as follows: 120 degrees -> 0 degrees -> 120 degrees...<br>
Action [9] loops as follows: -120 degrees -> 0 degrees -> -120 degrees...<br>
Action [12] Constantly rotates to reach 120 degrees from center<br>
Action [13] Constantly rotates to reach -120 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +1365) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2731) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +1365) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2731) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +1365) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +2731) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P099_TURN_JOINT_150" id="P099_TURN_JOINT_150">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(099) Joint-Turn 150
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/094.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 150 degrees.<br>
<br>
Action [1] loops as follows: 150 degrees -> 0 degrees -> -150 degrees -> 0 degrees -> 150 degrees...<br>
Action [6] loops as follows: 150 degrees -> 0 degrees -> 150 degrees...<br>
Action [9] loops as follows: -150 degrees -> 0 degrees -> -150 degrees...<br>
Action [12] Constantly rotates to reach 150 degrees from center<br>
Action [13] Constantly rotates to reach -150 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +1706) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2390) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +1706) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2390) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +1706) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +2390) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>

<a name="P100_TURN_JOINT_180" id="P100_TURN_JOINT_180">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(100) Joint-Turn 180
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/094.gif" alt="*">
</td><td class="partsinfo">
A part that changes its direction by 180 degrees.<br>
<br>
Action [1] loops as follows: 180 degrees -> 0 degrees -> -180 degrees -> 0 degrees -> 180 degrees...<br>
Action [6] loops as follows: 180 degrees -> 0 degrees -> 180 degrees...<br>
Action [9] loops as follows: -180 degrees -> 0 degrees -> -180 degrees...<br>
Action [12] Constantly rotates to reach 180 degrees from center<br>
Action [13] Constantly rotates to reach -180 degrees from center<br>
Action [14] Constantly rotates to reach 0 degrees from center<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2047) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [3]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2049) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [4]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2047) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [7]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction +2049) (Rotation speed: 16) (Duration: 500 frames)</span><br>
<span class="partspattern">Movement action [10]</span> (Total: 500 frames)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16) (Duration: 500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +2047) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction +2049) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Constant)<br>
<span class="partsaction">Change direction (initial direction) (Rotation speed: 16)</span><br>
</td></tr></table><br>



<a name="P002_AIM_PLAYER_JOINT_S" id="P002_AIM_PLAYER_JOINT_S">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(002) Joint-Aim player S
</td></tr><tr><td class="partsimage" rowspan="6">
<img src="../img/002.gif" alt="*">
</td><td class="partsinfo">
A small part that changes direction to point towards the player.<br>
Can adjust its angle by up to 45 degrees from center.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 150~100 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16) (Duration: 150~100 frames)</span><br>
</td></tr></table><br>

<a name="P007_AIM_PLAYER_JOINT_M" id="P007_AIM_PLAYER_JOINT_M">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(007) Joint-Aim player M
</td></tr><tr><td class="partsimage" rowspan="6">
<img src="../img/007.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 45 degrees from center.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 150~100 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16) (Duration: 150~100 frames)</span><br>
</td></tr></table><br>

<a name="P048_AIM_PLAYER_JOINT_L" id="P048_AIM_PLAYER_JOINT_L">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(048) Joint-Aim player L
</td></tr><tr><td class="partsimage" rowspan="6">
<img src="../img/048.gif" alt="*">
</td><td class="partsinfo">
A large part that changes direction to point towards the player.<br>
Can adjust its angle by up to 45 degrees from center.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 150~100 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16) (Duration: 150~100 frames)</span><br>
</td></tr></table><br>


<a name="P077_SMALL_ROLLING_PANEL" id="P077_SMALL_ROLLING_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(077) Panel-Rolling S
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/077.gif" alt="*">
</td><td class="partsinfo">
A small part that rotates.<br>
Its rotation angle and speed change depending on the selected action.<br>
<br>
Action [1] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [4] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [7] rotates counterclockwise indefinitely.<br>
Action [8] rotates clockwise indefinitely.<br>
Action [9] rotates counterclockwise indefinitely.<br>
Action [10] rotates clockwise indefinitely.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -24~-48) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 24~48) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -48~-72) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [5]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 48~72) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -24~-48)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 24~48)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -48~-72)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [10]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 48~72)</span><br>
</td></tr></table><br>

<a name="P078_SMALL_ROLLING_PANEL_2" id="P078_SMALL_ROLLING_PANEL_2">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(078) Panel-Rolling S 2
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/078.gif" alt="*">
</td><td class="partsinfo">
A small part that rotates.<br>
Rotates more slowly than (077) Panel-Rolling S.<br>
Its rotation angle and speed change depending on the selected action.<br>
<br>
Action [1] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [4] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [7] rotates counterclockwise indefinitely.<br>
Action [8] rotates clockwise indefinitely.<br>
Action [9] rotates counterclockwise indefinitely.<br>
Action [10] rotates clockwise indefinitely.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -8~-16) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 8~16) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -16~-24) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [5]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 16~24) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -8~-16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -16~-24)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [10]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 16~24)</span><br>
</td></tr></table><br>

<a name="P015_ROLLING_PANEL" id="P015_ROLLING_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(015) Panel-Rolling M
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/015.gif" alt="*">
</td><td class="partsinfo">
A part that rotates.<br>
Its rotation angle and speed change depending on the selected action.<br>
<br>
Action [1] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [4] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [7] rotates counterclockwise indefinitely.<br>
Action [8] rotates clockwise indefinitely.<br>
Action [9] rotates counterclockwise indefinitely.<br>
Action [10] rotates clockwise indefinitely.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -24~-48) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 24~48) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -48~-72) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [5]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 48~72) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -24~-48)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 24~48)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -48~-72)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [10]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 48~72)</span><br>
</td></tr></table><br>

<a name="P076_ROLLING_PANEL_2" id="P076_ROLLING_PANEL_2">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(076) Panel-Rolling M 2
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/076.gif" alt="*">
</td><td class="partsinfo">
A part that rotates.<br>
Rotates more slowly than (015) Panel-Rolling M.<br>
Its rotation angle and speed change depending on the selected action.<br>
<br>
Action [1] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [4] loops as follows: Counterclockwise -> Clockwise -> Counterclockwise...<br>
Action [7] rotates counterclockwise indefinitely.<br>
Action [8] rotates clockwise indefinitely.<br>
Action [9] rotates counterclockwise indefinitely.<br>
Action [10] rotates clockwise indefinitely.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -8~-16) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [2]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 8~16) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: -16~-24) (Duration: 599~500 frames)</span><br>
<span class="partspattern">Movement action [5]</span> (Total: 599~500 frames)<br>
<span class="partsaction">Rotate (Rotation speed: 16~24) (Duration: 599~500 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -8~-16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: -16~-24)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [10]</span> (Constant)<br>
<span class="partsaction">Rotate (Rotation speed: 16~24)</span><br>
</td></tr></table><br>


<a name="P182_SPECIFY_ROLLING_PANEL" id="P182_SPECIFY_ROLLING_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(182) Specify rolling panel
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/182.gif" alt="*">
</td><td class="partsinfo">
A panel that rotates by the specified angle, starting from the angle it was at when its action began.<br>
<br>
Actions [1]~[4] stop precisely on the angle you specify.<br>
Actions [5]~[8] carry some momentum and take a little time to slow down.<br>
<br>
Use extra parameters to set the angle and rotation speed you want.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_turnpanel").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: 512) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [2]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: 1024) (Rotation speed: 64)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: -512) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: -1024) (Rotation speed: 64)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: 512) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: 1024) (Rotation speed: 64)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: -512) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Constant)<br>
<span class="partsaction">Rotate by specified angle (Rotation distance: -1024) (Rotation speed: 64)</span><br>
</td></tr></table><br>


<a name="P059_AIM_PLAYER_PANEL" id="P059_AIM_PLAYER_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(059) Panel-aim player
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/059.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P142_AIM_PLAYER_PANEL_15" id="P142_AIM_PLAYER_PANEL_15">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(142) Panel-Aim player 015
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/142.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 15 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P143_AIM_PLAYER_PANEL_30" id="P143_AIM_PLAYER_PANEL_30">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(143) Panel-Aim player 030
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/143.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 30 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P144_AIM_PLAYER_PANEL_45" id="P144_AIM_PLAYER_PANEL_45">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(144) Panel-Aim player 045
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/144.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 45 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P145_AIM_PLAYER_PANEL_60" id="P145_AIM_PLAYER_PANEL_60">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(145) Panel-Aim player 060
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/145.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 60 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P146_AIM_PLAYER_PANEL_90" id="P146_AIM_PLAYER_PANEL_90">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(146) Panel-Aim player 090
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/146.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 90 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P147_AIM_PLAYER_PANEL_120" id="P147_AIM_PLAYER_PANEL_120">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(147) Panel-Aim player 120
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/147.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 120 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P148_AIM_PLAYER_PANEL_150" id="P148_AIM_PLAYER_PANEL_150">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(148) Panel-Aim player 150
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/148.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 150 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P149_AIM_PLAYER_PANEL_180" id="P149_AIM_PLAYER_PANEL_180">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(149) Panel-Aim player 180
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/149.gif" alt="*">
</td><td class="partsinfo">
A part that changes direction to point towards the player.<br>
Can adjust its angle by up to 180 degrees from center.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Change direction (face player) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P061_AIM_INIT_DIRECTION_PANEL" id="P061_AIM_INIT_DIRECTION_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(061) Panel-Aim init angle
</td></tr><tr><td class="partsimage" rowspan="8">
<img src="../img/061.gif" alt="*">
</td><td class="partsinfo">
A part that rotates to face its core's initial facing direction.<br>
Rotation speed and time between movements change depending on the selected action.<br>
If action [13] is used, the panel will always face the core's initial direction.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 64)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 256)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Turn (Match initial core angle) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P151_AIM_FIXED_DIRECTION_PANEL" id="P151_AIM_FIXED_DIRECTION_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(151) Panel-Aim fixed angle
</td></tr><tr><td class="partsimage" rowspan="8">
<img src="../img/151.gif" alt="*">
</td><td class="partsinfo">
A part that rotates to face upwards, regardless of the position or angle of the core.<br>
Rotation speed and time between movements change depending on the selected action.<br>
If action [13] is used, the panel will always face upwards.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 64)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 256)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Turn (Target direction: 0) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P189_AIM_PLAYER_ANGLE_PANEL" id="P189_AIM_PLAYER_ANGLE_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(189) Panel-Player angle
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/189.gif" alt="*">
</td><td class="partsinfo">
A part that rotates to face the same direction as the player.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Turn (Match player's angle)) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P190_AIM_PAIR_PARTS_PANEL" id="P190_AIM_PAIR_PARTS_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(190) Panel-Aim pair parts
</td></tr><tr><td class="partsimage" rowspan="8">
<img src="../img/190.gif" alt="*">
</td><td class="partsinfo">
A part that rotates to face its pair part.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 64)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 256)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Turn (Face pair part) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P192_AIM_PLAYER_MOVE_ANGLE_PANEL" id="P192_AIM_PLAYER_MOVE_ANGLE_PANEL">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(192) Panel-Player move angle
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/192.gif" alt="*">
</td><td class="partsinfo">
A part that rotates to follow the player's movement vector.<br>
Rotation speed and time between movements change depending on the selected action.<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_spin").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 100~80 frames)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 24~32) (Duration: 60 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 200 frames)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 32~48) (Duration: 80~100 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 180 frames)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 48~72) (Duration: 100~140 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span> (Constant)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 8~16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span> (Constant)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 16)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Constant)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 32)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span> (Constant)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 128)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span> (Constant)<br>
<span class="partsaction">Turn (Match player movement vector) (Rotation speed: 4096)</span><br>
</td></tr></table><br>


<a name="P083_MOVE_JOINT_S_HSPD" id="P083_MOVE_JOINT_S_HSPD">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(083) Move joint S (H-spd)
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/083.gif" alt="*">
</td><td class="partsinfo">
A part that quickly moves over a small vertical distance.<br>
<br>
Action [1] moves vertically.<br>
Action [3] moves back to its original position.<br>
Action [5] moves back and forth<br>
Action [8] moves back and forth (wait time+200)<br>
Action [11] moves back and forth (wait time+400)<br>
Action [14] moves back and forth (wait time+800)<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_movejoint").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 40 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 40 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 40 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 40 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 40 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 40 frames)</span><br>
<span class="partspattern">Movement action [6]</span> (Total: 40 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 40 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Total: 200 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 40 frames)</span><br>
<span class="partspattern">Movement action [9]</span> (Total: 200 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 40 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Total: 400 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 40 frames)</span><br>
<span class="partspattern">Movement action [12]</span> (Total: 400 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 40 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Total: 800 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 40 frames)</span><br>
<span class="partspattern">Movement action [15]</span> (Total: 800 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 40 frames)</span><br>
</td></tr></table><br>


<a name="P084_MOVE_JOINT_S_MSPD" id="P084_MOVE_JOINT_S_MSPD">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(084) Move joint S (M-spd)
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/084.gif" alt="*">
</td><td class="partsinfo">
A part that moves over a small vertical distance.<br>
<br>
Action [1] moves vertically.<br>
Action [3] moves back to its original position.<br>
Action [5] moves back and forth<br>
Action [8] moves back and forth (wait time+200)<br>
Action [11] moves back and forth (wait time+400)<br>
Action [14] moves back and forth (wait time+800)<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_movejoint").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 80 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 80 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 80 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 80 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 80 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 80 frames)</span><br>
<span class="partspattern">Movement action [6]</span> (Total: 80 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 80 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Total: 200 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 80 frames)</span><br>
<span class="partspattern">Movement action [9]</span> (Total: 200 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 80 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Total: 400 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 80 frames)</span><br>
<span class="partspattern">Movement action [12]</span> (Total: 400 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 80 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Total: 800 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 80 frames)</span><br>
<span class="partspattern">Movement action [15]</span> (Total: 800 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 80 frames)</span><br>
</td></tr></table><br>


<a name="P085_MOVE_JOINT_S_LSPD" id="P085_MOVE_JOINT_S_LSPD">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(085) Move joint S (L-spd)
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/085.gif" alt="*">
</td><td class="partsinfo">
A part that slowly moves over a small vertical distance.<br>
<br>
Action [1] moves vertically.<br>
Action [3] moves back to its original position.<br>
Action [5] moves back and forth<br>
Action [8] moves back and forth (wait time+200)<br>
Action [11] moves back and forth (wait time+400)<br>
Action [14] moves back and forth (wait time+800)<br>
<br>
<details><summary class="params" class=params>Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_movejoint").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 160 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 160 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (Total: 160 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 160 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (Total: 160 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 160 frames)</span><br>
<span class="partspattern">Movement action [6]</span> (Total: 160 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 160 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span> (Total: 200 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 160 frames)</span><br>
<span class="partspattern">Movement action [9]</span> (Total: 200 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 160 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span> (Total: 400 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 160 frames)</span><br>
<span class="partspattern">Movement action [12]</span> (Total: 400 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 160 frames)</span><br>

</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [14]</span> (Total: 800 frames)<br>
<span class="partsaction">Move vertically (Target distance: 16) (Duration: 160 frames)</span><br>
<span class="partspattern">Movement action [15]</span> (Total: 800 frames)<br>
<span class="partsaction">Move vertically (Target distance: 0) (Duration: 160 frames)</span><br>
</td></tr></table><br>


<a name="P060_SUICIDE_DEVICE" id="P060_SUICIDE_DEVICE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(060) Suicide device
</td></tr><tr><td class="partsimage" rowspan="3">
<img src="../img/060.gif" alt="*">
</td><td class="partsinfo">
A part that makes its parent part self-destruct.<br>
You can delay self-destruction by inputting a negative value for its starting movement frame.<br>
<br>
Action [1] destroys this part's child parts as well.<br>
Action [3] separates this part's child parts without damaging them.<br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Self-destruct</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Self-destruct</span><br>
<span class="partsaction">Separate</span><br>
</td></tr></table><br>


<a name="P045_DETACH_JOINT" id="P045_DETACH_JOINT">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(045) Joint-detach
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/045.gif" alt="*">
</td><td class="partsinfo">
A part that disappears, causing its children to separate from it.<br>
You can delay separation by inputting a negative value for its starting movement frame.<br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Separate</span><br>
</td></tr></table><br>

</div>
<div class="blank"></div>
</body>
</html>
