<?php
$choosecolor = get_option('wikivb_birth_choosecolor');
$choosecolor2 = "$choosecolor";
switch ($choosecolor2) {
case "Green":
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'red-theme\', 60)"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'blue-theme\', 60)"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'yellow-theme\', 60)"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'grayblue-theme\', 60)"><span class="selectgrayblue"></span></a>
<a href="javascript:chooseStyle(\'pink-theme\', 60)"><span class="selectpink"></span></a>';
break;
case "Red":
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'green-theme\', 60)"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'blue-theme\', 60)"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'yellow-theme\', 60)"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'grayblue-theme\', 60)"><span class="selectgrayblue"></span></a>
<a href="javascript:chooseStyle(\'pink-theme\', 60)"><span class="selectpink"></span></a>';
break;
case "Blue":
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'green-theme\', 60)"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'red-theme\', 60)"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'yellow-theme\', 60)"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'grayblue-theme\', 60)"><span class="selectgrayblue"></span></a>
<a href="javascript:chooseStyle(\'pink-theme\', 60)"><span class="selectpink"></span></a>';
break;
case "Yellow":
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'green-theme\', 60)"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'red-theme\', 60)"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'blue-theme\', 60)"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'grayblue-theme\', 60)"><span class="selectgrayblue"></span></a>
<a href="javascript:chooseStyle(\'pink-theme\', 60)"><span class="selectpink"></span></a>';
break;
case "Grayblue":
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectgrayblue"></span></a>
<a href="javascript:chooseStyle(\'green-theme\', 60)"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'red-theme\', 60)"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'blue-theme\', 60)"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'yellow-theme\', 60)"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'pink-theme\', 60)"><span class="selectpink"></span></a>';
break;
case "Pink":
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectpink"></span></a>
<a href="javascript:chooseStyle(\'green-theme\', 60)"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'red-theme\', 60)"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'blue-theme\', 60)"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'yellow-theme\', 60)"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'grayblue-theme\', 60)"><span class="selectgrayblue"></span></a>';
break;
default:
echo '<a href="javascript:chooseStyle(\'none\', 60)" checked="checked" class="default-checked"><span class="selectgreen"></span></a>
<a href="javascript:chooseStyle(\'red-theme\', 60)"><span class="selectred"></span></a>
<a href="javascript:chooseStyle(\'blue-theme\', 60)"><span class="selectblue"></span></a>
<a href="javascript:chooseStyle(\'yellow-theme\', 60)"><span class="selectyellow"></span></a>
<a href="javascript:chooseStyle(\'grayblue-theme\', 60)"><span class="selectgrayblue"></span></a>
<a href="javascript:chooseStyle(\'pink-theme\', 60)"><span class="selectpink"></span></a>';
}
?>