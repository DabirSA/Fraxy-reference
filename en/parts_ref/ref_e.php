<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="default-style" content="../fraxy.css">
<link rel="stylesheet" type="text/css" href="../fraxy.css">
<title>FRAXY Parts list [E]</title>
</head>

<body class="contents_main">
<hr class="line_s">
<div class="blank" style="display:none"><?php include '../fraxy_exparam.html'?></div>
<div class="style_center">
<div class="categorytitle">- FRAXY Parts list [E] -</div>
<br>
[E] Effector<br>
<br>
Effectors are parts which generate visual effects, such as explosions or flashes of light.<br>
</div>
<hr class="line_s">

<table width="95%" border=0><tr><td class="style_left">

Effector type - 
<a href="#P102_EFFECTOR_EXPLOSION">Effector (explosion)</a>,
<a href="#P103_EFFECTOR_SHINE">Effector (shine)</a>,
<a href="#P104_EFFECTOR_SHOCKWAVE">Effector (shockwave)</a>,
<a href="#P200_EFFECTOR_SHOCKWAVES">Effector (shockwave-various)</a>,
<a href="#P105_EFFECTOR_SHOCKWAVE_SLOW">Effector (shockwave-slow)</a>,
<a href="#P106_EFFECTOR_SPARK">Effector (spark)</a>,
<a href="#P196_EFFECTOR_SPARK_2">Effector (spark 2)</a>,
<a href="#P204_EFFECTOR_SPARK_3">Effector (spark 3)</a>,
<a href="#P107_EFFECTOR_FLASH">Effector (flash)</a>,
<a href="#P108_EFFECTOR_THUNDER_LINE">Effector (thunder line)</a>,
<a href="#P109_EFFECTOR_THUNDER_STREAM">Effector (thunder stream)</a>,
<a href="#P197_EFFECTOR_THUNDER_GATHER">Effector (thunder gather)</a>,
<a href="#P198_EFFECTOR_THUNDER_DIFFUSE">Effector (thunder diffuse)</a>,
<a href="#P110_EFFECTOR_AURA">Effector (aura)</a>,
<a href="#P111_EFFECTOR_FLASH_RED">Effector (flash-red)</a>,
<a href="#P112_EFFECTOR_EXPLOSIVE">Effector (explosive)</a>,
<a href="#P113_EFFECTOR_CHARGE">Effector (charge)</a>,
<a href="#P259_EFFECTOR_CHARGE_2">Effector (charge 2)</a>,
<a href="#P114_EFFECTOR_CONCENTRATION">Effector (concentration)</a>,
<a href="#P157_EFFECTOR_BOOSTER">Effector (booster)</a>,
<a href="#P183_EFFECTOR_BOOSTER_2">Effector (booster 2)</a>,
<a href="#P193_EFFECTOR_SIMPLE_REDUCE">Effector (Simple-reduce)</a>,
<a href="#P194_EFFECTOR_SIMPLE_ENLARGE">Effector (Simple-enlarge)</a>,
<a href="#P261_EFFECTOR_DISTORTION">Effector (distortion)</a>,

<br>
Screen type - 
<a href="#P153_SCREEN_EFFECTOR_FLASH">Screen (Flash)</a>,
<a href="#P154_SCREEN_EFFECTOR_QUAKE">Screen (Quake)</a>,
<a href="#P155_SCREEN_EFFECTOR_SHAKE">Screen (Shake)</a>,
<a href="#P156_SCREEN_EFFECTOR_BLUR">Screen (Blur)</a>,
<a href="#P201_SCREEN_EFFECTOR_INVERT">Screen (Invert)</a>,
<a href="#P202_SCREEN_EFFECTOR_GRAYSCALE">Screen (Grayscale)</a>,
<a href="#P260_SCREEN_EFFECTOR_MOSAIC">Screen (Mosaic)</a>,

<br>
Sound type - 
<a href="#P184_SOUND_EFFECTOR">Sound effector</a>,

<br>
Player bullet type - 
<a href="#P188_PLAYER_BULLET">Player bullet</a>,

<br>
Check pointer type - 
<a href="#P191_CHECK_POINTER">Check pointer</a>,

<br>
Sword effector type - 
<a href="#P195_SWORD_EFFECTOR">Sword effector</a>,

<br>
Texture effector type - 
<a href="#P258_TEXTURE_EFFECTOR">Texture effector</a>,

</td></tr></table>
<br>
<hr class="line_s">
<div class="style_center">

<a name="P102_EFFECTOR_EXPLOSION" id="P102_EFFECTOR_EXPLOSION">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(102) Effector (explosion)
</td></tr><tr><td class="partsimage" rowspan="4">
<img src="../img/102a.gif" alt="*">
<img src="../img/102b.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an explosion effect.<br>
This effect is near-identical to the effect when a part is destroyed.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_explosion").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Small explosion)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Medium explosion)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Large explosion)</span><br>
</td></tr></table><br>

<a name="P103_EFFECTOR_SHINE" id="P103_EFFECTOR_SHINE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(103) Effector (shine)
</td></tr><tr><td class="partsimage" rowspan="4">
<img src="../img/103.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a shine effect.<br>
The effect lasts for about 80 frames.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_shine").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Shine - Glow - Shrinking light)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Shine)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Glow - Shrinking light)</span><br>
</td></tr></table><br>

<a name="P104_EFFECTOR_SHOCKWAVE" id="P104_EFFECTOR_SHOCKWAVE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(104) Effector (shockwave)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/104a.gif" alt="*">
<img src="../img/104b.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a shockwave effect.<br>
Can generate an explosive shockwave (A) or a unique shockwave (B).<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_shockwave").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 50%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 50%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 200%)</span><br>
</td></tr></table><br>

<a name="P200_EFFECTOR_SHOCKWAVES" id="P200_EFFECTOR_SHOCKWAVES">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(200) Effector (shockwave-various)
</td></tr><tr><td class="partsimage" rowspan="5">
<img src="../img/200.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a shockwave effect.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_shockwave").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Shockwave type: 1) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Shockwave type: 2) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Shockwave type: 3) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Shockwave type: 4) (Size: 100%)</span><br>
</td></tr></table><br>

<a name="P105_EFFECTOR_SHOCKWAVE_SLOW" id="P105_EFFECTOR_SHOCKWAVE_SLOW">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(105) Effector (shockwave-slow)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/105a.gif" alt="*">
<img src="../img/105b.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a shockwave effect.<br>
This shockwave spreads slower than the shockwave from (104) Effector (shockwave).<br>
Can generate an explosive shockwave (A) or a unique shockwave (B).<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_shockwave").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 50%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Shockwave A) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 50%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Shockwave B) (Size: 200%)</span><br>
</td></tr></table><br>

<a name="P106_EFFECTOR_SPARK" id="P106_EFFECTOR_SPARK">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(106) Effector (spark)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/106a.gif" alt="*">
<img src="../img/106b.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a spark effect.<br>
The direction depends on the part's facing direction, and the spread width depends on the chosen action.<br>
Actions [1], [3], [5] and [7] generate large sparks.<br>
Actions [9], [11], [13] and [15] generate smaller, single-pixel sparks.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_spark").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 64 (-2.8~2.8 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 256 (-11.2~11.2 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 1024 (-45~45 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 4096 (-180~180 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 64 (-2.8~2.8 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 256 (-11.2~11.2 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 1024 (-45~45 degrees))</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 4096 (-180~180 degrees))</span><br>
</td></tr></table><br>

<a name="P196_EFFECTOR_SPARK_2" id="P196_EFFECTOR_SPARK_2">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(196) Effector (spark 2)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/196.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a spark effect.<br>
The direction depends on the part's facing direction, and the spread width depends on the chosen action.<br>
Unlike (106) Effector (spark), the sparks generated are stretched.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_spark").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 64=-2.8~2.8 degrees) (Stretch: +100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 256=-11.2~11.2 degrees) (Stretch: +100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 1024=-45~45 degrees) (Stretch: +100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 4096=-180~180 degrees) (Stretch: +100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 64=-2.8~2.8 degrees) (Stretch: +200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 256=-11.2~11.2 degrees) (Stretch: +200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 1024=-45~45 degrees) (Stretch: +200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 4096=-180~180 degrees) (Stretch: +200%)</span><br>
</td></tr></table><br>

<a name="P204_EFFECTOR_SPARK_3" id="P204_EFFECTOR_SPARK_3">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(204) Effector (spark 3)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/204.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a spark effect.<br>
The direction depends on the part's facing direction, and the spread width depends on the chosen action.<br>
Unlike (196) Effector (spark 2), the sparks generated stretch and then shrink.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_spark").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 64=-2.8~2.8 degrees) (Speed: 100~1100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 256=-11.2~11.2 degrees) (Speed: 100~1100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 1024=-45~45 degrees) (Speed: 100~1100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 4096=-180~180 degrees) (Speed: 100~1100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 64=-2.8~2.8 degrees) (Speed: 800~1200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 256=-11.2~11.2 degrees) (Speed: 800~1200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 1024=-45~45 degrees) (Speed: 800~1200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Sparks) (Angle range: 4096=-180~180 degrees) (Speed: 800~1200%)</span><br>
</td></tr></table><br>

<a name="P107_EFFECTOR_FLASH" id="P107_EFFECTOR_FLASH">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(107) Effector (flash)
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/107.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a flash effect.<br>
Different actions generate different sizes of flash, and some lack the glowing ring effect.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_flash").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Flash - ring) (Size: 60%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Flash - ring) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Flash - ring) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Flash) (Size: 60%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Flash) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Flash) (Size: 150%)</span><br>
</td></tr></table><br>

<a name="P108_EFFECTOR_THUNDER_LINE" id="P108_EFFECTOR_THUNDER_LINE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(108) Effector (thunder line)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/108.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an effect of lightning travelling in a line.<br>
The lightning's direction is affected by the effector's Parts Angle.<br>
Actions [1], [3], [5] and [7] generate blue lightning.<br>
Actions [9], [11], [13] and [15] generate enemy bullet-colored lightning.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_thunder").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 70%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 70%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (thunder line) (Size: 200%)</span><br>
</td></tr></table><br>

<a name="P109_EFFECTOR_THUNDER_STREAM" id="P109_EFFECTOR_THUNDER_STREAM">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(109) Effector (thunder stream)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/109.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an effect of lightning wrapping around nearby parts.<br>
Actions [1], [3], [5] and [7] generate blue lightning.<br>
Actions [9], [11], [13] and [15] generate enemy bullet-colored lightning.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_thunder").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 70%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 70%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (thunder stream) (Size: 200%)</span><br>
</td></tr></table><br>

<a name="P197_EFFECTOR_THUNDER_GATHER" id="P197_EFFECTOR_THUNDER_GATHER">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(197) Effector (thunder gather)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/197.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an effect of lightning bolts gathering to a single point.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_thunder").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (thunder gather) (Number generated: 1) (Length: 12)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (thunder gather) (Number generated: 4) (Length: 4)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (thunder gather) (Number generated: 8) (Length: 8)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (thunder gather) (Number generated: 12) (Length: 16)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (thunder gather) (Number generated: 16) (Length: 32)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (thunder gather) (Constant) (Number generated: 1) (Length: 8)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (thunder gather) (Constant) (Number generated: 1) (Length: 12)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (thunder gather) (Constant) (Number generated: 1) (Length: 24)</span><br>
</td></tr></table><br>

<a name="P198_EFFECTOR_THUNDER_DIFFUSE" id="P198_EFFECTOR_THUNDER_DIFFUSE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(198) Effector (thunder diffuse)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/198.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an effect of lightning bolts scattering from a single point.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_thunder").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Number generated: 1) (Length: 12)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Number generated: 4) (Length: 4)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Number generated: 8) (Length: 8)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Number generated: 12) (Length: 16)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Number generated: 16) (Length: 32)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Constant) (Number generated: 1) (Length: 8)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Constant) (Number generated: 1) (Length: 12)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (thunder diffuse) (Constant) (Number generated: 1) (Length: 24)</span><br>
</td></tr></table><br>

<a name="P110_EFFECTOR_AURA" id="P110_EFFECTOR_AURA">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(110) Effector (aura)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/110.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an aura effect.<br>
Actions [1], [3], [5] and [7] generate a blueish-white aura.<br>
Actions [9], [11], [13] and [15] generate an enemy bullet-colored aura.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_aura").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 250%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Aura) (Size: 250%)</span><br>
</td></tr></table><br>

<a name="P111_EFFECTOR_FLASH_RED" id="P111_EFFECTOR_FLASH_RED">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(111) Effector (flash-red)
</td></tr><tr><td class="partsimage" rowspan="5">
<img src="../img/111.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a red flash effect.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_flashred").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Flash-red) (Size: 75%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Flash-red) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Flash-red) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Flash-red) (Size: 200%)</span><br>
</td></tr></table><br>

<a name="P112_EFFECTOR_EXPLOSIVE" id="P112_EFFECTOR_EXPLOSIVE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(112) Effector (explosive)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/112a.gif" alt="*">
<img src="../img/112b.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an explosion effect.<br>
Actions [1], [3], [5] and [7] generate explosions randomly within a radius.<br>
Actions [9], [11], [13] and [15] generate explosions at a single point.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_explosive").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 100%) (Generation radius: 16)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 100%) (Generation radius: 32)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 100%) (Generation radius: 48)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 100%) (Generation radius: 80)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 37%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 50%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 75%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Explosion) (Size: 100%)</span><br>
</td></tr></table><br>

<a name="P113_EFFECTOR_CHARGE" id="P113_EFFECTOR_CHARGE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(113) Effector (charge)
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/113a.gif" alt="*">
<img src="../img/113b.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a charging-up effect.<br>
Actions [1]~[7] generate a blue effect.<br>
Actions [9]~[15] generate an enemy bullet-colored effect.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_charge").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Charging up) (Size: 100%)</span><br>
<span class="partspattern">Movement action [2]</span><br>
<span class="partsaction">Create effect (Fully charged) (Size: 100%)</span><br>
<span class="partsaction">Jumps to movement action [2] after finishing</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span><br>
<span class="partsaction">Create effect (Charging up) (Size: 200%)</span><br>
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Fully charged) (Size: 200%)</span><br>
<span class="partsaction">Jumps to movement action [5] after finishing</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Charge) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Charging up) (Size: 100%)</span><br>
<span class="partspattern">Movement action [10]</span><br>
<span class="partsaction">Create effect (Fully charged) (Size: 100%)</span><br>
<span class="partsaction">Jumps to movement action [10] after finishing</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [12]</span><br>
<span class="partsaction">Create effect (Charging up) (Size: 200%)</span><br>
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Fully charged) (Size: 200%)</span><br>
<span class="partsaction">Jumps to movement action [13] after finishing</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Charge) (Size: 200%)</span><br>
</td></tr></table><br>

<a name="P259_EFFECTOR_CHARGE_2" id="P259_EFFECTOR_CHARGE_2">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(259) Effector (charge 2)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/259.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a charging-up effect.<br>
Each action stretches the sprites it uses in different ways.<br>
The extra parameters available to it also differ from (113) Effector (charge).<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_charge2").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:1.0 1.0 1.0) (Y:1.0 1.0 1.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [2]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:1.0 1.0 1.0) (Y:0.0 0.5 1.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:1.0 1.0 1.0) (Y:0.0 1.0 0.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:1.0 1.0 1.0) (Y:1.0 0.5 0.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:0.0 0.5 1.0) (Y:0.0 0.5 1.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [6]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:1.0 0.5 0.0) (Y:1.0 0.5 0.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:0.0 1.0 0.0) (Y:0.0 1.0 0.0)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [8]</span><br>
<span class="partsaction">Create effect (Charge 2) (X:0.0 0.5 1.0) (Y:0.0 1.0 0.0)</span><br>
</td></tr></table><br>

<a name="P114_EFFECTOR_CONCENTRATION" id="P114_EFFECTOR_CONCENTRATION">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(114) Effector (concentration)
</td></tr><tr><td class="partsimage" rowspan="5">
<img src="../img/114.gif" alt="*">
</td><td class="partsinfo">
An effector that generates an effect of sprites gathering to a point.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_concentration").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Concentration) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Concentration) (Size: 150%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Concentration) (Size: 200%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Concentration) (Size: 250%)</span><br>
</td></tr></table><br>

<a name="P157_EFFECTOR_BOOSTER" id="P157_EFFECTOR_BOOSTER">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(157) Effector (booster)
</td></tr><tr><td class="partsimage" rowspan="8">
<img src="../img/157.gif" alt="*">
</td><td class="partsinfo">
An effector that generates the effect of a booster flame.<br>
Actions [1]~[2] are a normal booster effect.<br>
Actions [4]~[5] are a different booster effect.<br>
Actions [7] and on generate separate parts of the booster effect.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_booster").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Booster activation) (Size: 100%)</span><br>
<span class="partspattern">Movement action [2]</span><br>
<span class="partsaction">Create effect (Booster) (Size: 100%)</span><br>
<span class="partsaction">Jumps to movement action [2] after finishing</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [4]</span><br>
<span class="partsaction">Create effect (Booster activation) (Size: 100%)</span><br>
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Booster) (Size: 100%)</span><br>
<span class="partsaction">Jumps to movement action [5] after finishing</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Particle emission) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Shockwave) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Booster) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Haze 1) (Size: 100%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Haze 2) (Size: 100%)</span><br>
</td></tr></table><br>

<a name="P183_EFFECTOR_BOOSTER_2" id="P183_EFFECTOR_BOOSTER_2">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(183) Effector (booster 2)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/183.gif" alt="*">
</td><td class="partsinfo">
An effector that generates the effect of an unusual booster flame.<br>
A lightweight version that generates fewer objects than (157) Effector (booster).<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_booster").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Booster activation) (Size: 100%)</span><br>
<span class="partspattern">Movement action [2]</span><br>
<span class="partsaction">Create effect (Booster) (Size: 100%)</span><br>
<span class="partsaction">Jumps to movement action [2] after finishing</span><br>
</td></tr></table><br>

<a name="P193_EFFECTOR_SIMPLE_REDUCE" id="P193_EFFECTOR_SIMPLE_REDUCE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(193) Effector (Simple-reduce)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/193.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a single sprite and makes it shrink.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_simple").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +-0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -12.5%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -25.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -37.5%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -50.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -75.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -87.5%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: -100.0%)</span><br>
</td></tr></table><br>

<a name="P194_EFFECTOR_SIMPLE_ENLARGE" id="P194_EFFECTOR_SIMPLE_ENLARGE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(194) Effector (Simple-enlarge)
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/194.gif" alt="*">
</td><td class="partsinfo">
An effector that generates a single effect and makes it grow.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effector_simple").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Initial size: 0%) (Stretch: +100.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +12.5%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +25.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +50.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +100.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +200.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +300.0%)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Create effect (Initial size: 100%) (Stretch: +600.0%)</span><br>
</td></tr></table><br>

<a name="P153_SCREEN_EFFECTOR_FLASH" id="P153_SCREEN_EFFECTOR_FLASH">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(153) Screen (Flash)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/153b.gif" alt="*">
</td><td class="partsinfo">
A screen effector that can apply fade-in, fade-out or flash effects to the entire screen.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screenflash").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Flash)</span><br>
</td></tr></table><br>

<a name="P154_SCREEN_EFFECTOR_QUAKE" id="P154_SCREEN_EFFECTOR_QUAKE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(154) Screen (Quake)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/154b.gif" alt="*">
</td><td class="partsinfo">
A screen effector that makes the entire screen shake.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screenquake").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Quake)</span><br>
</td></tr></table><br>

<a name="P155_SCREEN_EFFECTOR_SHAKE" id="P155_SCREEN_EFFECTOR_SHAKE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(155) Screen (Shake)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/155b.gif" alt="*">
</td><td class="partsinfo">
A screen effector that makes the entire screen vibrate.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screenshake").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Shake)</span><br>
</td></tr></table><br>

<a name="P156_SCREEN_EFFECTOR_BLUR" id="P156_SCREEN_EFFECTOR_BLUR">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(156) Screen (Blur)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/156b.gif" alt="*">
</td><td class="partsinfo">
A screen effector that applies a blur effect to the entire screen.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screenblur").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Blur)</span><br>
</td></tr></table><br>

<a name="P201_SCREEN_EFFECTOR_INVERT" id="P201_SCREEN_EFFECTOR_INVERT">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(201) Screen (Invert)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/201b.gif" alt="*">
</td><td class="partsinfo">
A screen effector that inverts the colors of the entire screen.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screeninvert").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Invert)</span><br>
</td></tr></table><br>

<a name="P202_SCREEN_EFFECTOR_GRAYSCALE" id="P202_SCREEN_EFFECTOR_GRAYSCALE">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(202) Screen (Grayscale)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/202b.gif" alt="*">
</td><td class="partsinfo">
A screen effector that changes the colors of the entire screen to grayscale.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screengrayscale").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Grayscale)</span><br>
</td></tr></table><br>

<a name="P260_SCREEN_EFFECTOR_MOSAIC" id="P260_SCREEN_EFFECTOR_MOSAIC">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(260) Screen (Mosaic)
</td></tr><tr><td class="partsimage" rowspan="2">
<img src="../img/260.gif" alt="*">
</td><td class="partsinfo">
A screen effector that applies a mosaic effect to the entire screen.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_screenmosaic").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create screen effect (Mosaic)</span><br>
</td></tr></table><br>

<a name="P184_SOUND_EFFECTOR" id="P184_SOUND_EFFECTOR">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(184) Sound effector
</td></tr><tr><td class="partsimage" rowspan="3">
<img src="../img/184.gif" alt="*">
</td><td class="partsinfo">
An effector that plays sound effects.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_soundeffector").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Sound effect (Stop)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Sound effect (Play)</span><br>
</td></tr></table><br>

<a name="P188_PLAYER_BULLET" id="P188_PLAYER_BULLET">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(188) Player bullet
</td></tr><tr><td class="partsimage" rowspan="4">
<img src="../img/188.gif" alt="*">
</td><td class="partsinfo">
A special effector that fires player bullets.<br>
Action [5] fires a single shot, then continues increasing its action frame count while doing nothing, allowing you to use events to set a custom fire rate.<br>
By default, fires regular bullets.<br>
<br>
This part's extra parameters mean different things depending on the type of player weapon it is replicating.<br>
See below for details.<br>
<br>
<details><summary class="params">General</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_playerbullet").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Bullet/Stun bullet</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_bullet").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Blaster/Stun blaster</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_blaster").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Blur decoy</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_blurdecoy").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Soll diffuser</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_solldiffuser").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Absolute shield</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_absoluteshield").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Flash bullet</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_flashbullet").innerHTML);
document.write('</div>');
</script>
</details>
<details><summary class="params">Laser</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_player_laser").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span> (Total: 4~4 frames)<br>
<span class="partsaction">Player bullet (Duration: 1~1 frames)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span> (1 shot only)<br>
<span class="partsaction">Player bullet (Duration: 1~1 frames)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span> (1 shot only) (Constant)<br>
<span class="partsaction">Player bullet (Duration: 1~1 frames)</span><br>
</td></tr></table><br>

<a name="P191_CHECK_POINTER" id="P191_CHECK_POINTER">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(191) Check pointer
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/191.gif" alt="*">
</td><td class="partsinfo">
A special effector that generates a checkpoint.<br>
Checkpoints are used as respawn points for players.<br>
When a player touches a checkpoint, that checkpoint becomes active and all others become inactive.<br>
Players are invincible while touching a checkpoint.<br>
This invincibility ends the moment they leave the checkpoint. (Also removes the normal invincibility from dying and continuing.<br>
<br>
Sets &amp;2 in its notify status while a player is in contact with the checkpoint.<br>
Sets &amp;4 in its notify status on the frame that the checkpoint becomes active.<br>
Sets &amp;8 in its notify status while the checkpoint is active.<br>
Sets &amp;16 in its notify status on the frame that the checkpoint becomes inactive.<br>
Sets &amp;32 in its notify status while the checkpoint is inactive.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_checkpointer").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Checkpoint (Size: 20)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Checkpoint (Size: 40)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Checkpoint (Size: 60)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Checkpoint (Size: 80)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [9]</span><br>
<span class="partsaction">Checkpoint (Size: 20) (Active)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [11]</span><br>
<span class="partsaction">Checkpoint (Size: 40) (Active)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [13]</span><br>
<span class="partsaction">Checkpoint (Size: 60) (Active)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [15]</span><br>
<span class="partsaction">Checkpoint (Size: 80) (Active)</span><br>
</td></tr></table><br>

<a name="P195_SWORD_EFFECTOR" id="P195_SWORD_EFFECTOR">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(195) Sword effector
</td></tr><tr><td class="partsimage" rowspan="7">
<img src="../img/195.gif" alt="*">
</td><td class="partsinfo">
A special effector that creates a blade with an afterimage.<br>
While this is classed as an effector, please note that its actions are attack actions.<br>
<br>
Sets &amp;2 in its notify status when the player is in contact with the first frame of the afterimage.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_swordeffector").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [1]</span> (Total: 450 frames)<br>
<span class="partsaction">Sword effect (Size: 2.0) (Duration: 201~300 frames)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [3]</span> (Total: 450 frames)<br>
<span class="partsaction">Sword effect (Size: 4.0) (Duration: 201~300 frames)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [5]</span> (Total: 450 frames)<br>
<span class="partsaction">Sword effect (Size: 8.0) (Duration: 201~300 frames)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [7]</span> (Constant)<br>
<span class="partsaction">Sword effect (Size: 2.0)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [9]</span> (Constant)<br>
<span class="partsaction">Sword effect (Size: 4.0)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [11]</span> (Constant)<br>
<span class="partsaction">Sword effect (Size: 8.0)</span><br>
</td></tr></table><br>

<a name="P258_TEXTURE_EFFECTOR" id="P258_TEXTURE_EFFECTOR">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(258) Texture effector
</td></tr><tr><td class="partsimage" rowspan="9">
<img src="../img/258.gif" alt="*">
</td><td class="partsinfo">
An effector that uses pair parts to draw a sprite as a texture.<br>
While this is classed as an effector, please note that its actions are attack actions.<br>
<br>
If extra parameter 12 is set, the effector will generate afterimages.<br>
The different attack actions set the different speeds that the afterimages will travel.<br>
<br>
There are two ways to define the area of the texture.<br>
<br>
- Four-point texture (Texture type: 0)<br>
A four-point texture is drawn over an area, defined by the locations of the texture effector's four pair parts.<br>
Essentially, the rectangle is made of four line segments: Pair part 1 to pair part 2, pair 2 to pair 3, pair 3 to pair 4 and pair 4 to pair 1.<br>
If any of the pair parts is not set, the coordinates of the effector are used in its place.<br>
If the line segments cross over each other, it may cause drawing errors depending on their position and orientation. (This is an issue with the HSP engine.)<br>
<br>
- Pair part texture (Texture type: 1~8)<br>
For a pair part texture, each of the texture effector's pair parts has the texture drawn on top of it separately, with the hitbox of the pair part being used to set its baseline X and Y sizes.<br>
You can specify up to four pair parts, but only the texture connected to pair part 1 will be used for collision detection.<br>
Each of the 8 types has the texture rotated a different way relative to its part. This mostly matters for parts with non-square hitboxes.<br>
Types 1-4 are clockwise of each other, and types 5-8 are flipped versions of 1-4.<br>
<br>
Collision detection can be set using extra parameters.<br>
Sets &amp;2 in its notify status if the player is within the collision area.<br>
Afterimages generated when parameter 12 is set do not detect collision.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_textureeffector").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [1]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 0)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [3]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: +0)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [5]</span> (Total: 450 frames)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: +8)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [7]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: +32)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [9]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: +64)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [11]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: -8)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [13]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: -32)</span><br>
</td></tr><tr><td class="partsattack">
<span class="partspattern">Attack action [15]</span> (Constant)<br>
<span class="partsaction">Texture effect (Basic speed: 512) (Acceleration: -64)</span><br>
</td></tr></table><br>

<a name="P261_EFFECTOR_DISTORTION" id="P261_EFFECTOR_DISTORTION">
</a><br><table class="partstable"><tr><td class="partsname" colspan="2">
(261) Effector (distortion)
</td></tr><tr><td class="partsimage" rowspan="5">
<img src="../img/261.gif" alt="*">
</td><td class="partsinfo">
An effector that creates a distorted ripple effect with a given radius.<br>
Its extra parameters are very different from those of other effectors.<br>
<br>
<details><summary class="params">Extra parameters</summary>
<script>
document.write('<div class="exparams">');
document.write(document.getElementById("params_effectordistortion").innerHTML);
document.write('</div>');
</script>
</details>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [1]</span><br>
<span class="partsaction">Create effect (Distortion) (Size: 32)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [3]</span><br>
<span class="partsaction">Create effect (Distortion) (Size: 64)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [5]</span><br>
<span class="partsaction">Create effect (Distortion) (Size: 128)</span><br>
</td></tr><tr><td class="partsmove">
<span class="partspattern">Movement action [7]</span><br>
<span class="partsaction">Create effect (Distortion) (Size: 256)</span><br>
</td></tr></table><br>

</div>
<div class="blank"></div>
</script>
</body>
</html>
