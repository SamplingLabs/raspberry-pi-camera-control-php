<html>
<head>
</head>
<body>
<form action="still.php" method="get">
Width <input type="text" name="width"><br>
height <input type="text" name="height"><br>
quality (1-100)<input type="text" name="quality"><br>
timeout (ms)<input type="text" name="timeout"><br>
encoding <select name="encoding">
		<option selected value="jpg">jpg</option>
                <option value="bmp">bmp</option>
                <option value="gif">gif</option>
                <option value="png">png</option>
	</select><br>
timelapse (ms)<input type="text" name="timelapse"><br>
sharpness (-100-100 )<input type="text" name="sharpness"><br>
contrast (-100-100)<input type="text" name="contrast"><br>
brightness (0-100) <input type="text" name="brightness"><br>
saturation (-100-100) <input type="text" name="saturation"><br>
ISO <input type="text" name="ISO"><br>
exposure <select name="exposure">
                <option selected value="off">off</option>
                <option value="auto">auto</option>
                <option value="night">night</option>
                <option value="nightpreview">nightpreview</option>
                <option value="backlight">backlight</option>
                <option value="spotlight">spotlight</option>
                <option value="sports">sports</option>
                <option value="snow">snow</option>
                <option value="beach">beach</option>
                <option value="verylong">verylong</option>
                <option value="fixed">fixed</option>
                <option value="fps">fps</option>
                <option value="antishake">antishake</option>
                <option value="fireworks">fireworks</option>
        </select><br>
AWB <select name="awb">
                <option selected value="off">off</option>
                <option value="auto">auto</option>
                <option value="sun">sun</option>
                <option value="cloud">cloud</option>
                <option value="shade">shade</option>
                <option value="tungsten">tungsten</option>
                <option value="fluorescent">fluorescent</option>
                <option value="incandescent">incandescent</option>
                <option value="flash">flash</option>
                <option value="horizon">horizon</option>
        </select><br>
rotation (0-359) <input type="text" name="rotation"><br>
metering <select name="metering">
                <option selected value="average">average</option>
                <option value="spot">spot</option>
                <option value="backlit">backlit</option>
                <option value="matrix">matrix</option>
        </select><br>
 <select name="imxfx">
                <option selected value="none">none</option>
                <option value="negative">negative</option>
                <option value="solarise">solarise</option>
                <option value="sketch">sketch</option>
                <option value="denoise">denoise</option>
                <option value="emboss">emboss</option>
                <option value="oilpaint">oilpaint</option>
                <option value="hatch">hatch</option>
                <option value="gpen">gpen</option>
                <option value="pastel">pastel</option>
                <option value="watercolour">watercolour</option>
                <option value="film">film</option>
                <option value="blur">blur</option>
                <option value="saturation">saturation</option>
                <option value="colourswap">colourswap</option>
                <option value="washedout">washedout</option>
                <option value="solourpoint">colourpoint</option>
                <option value="colourbalance">colourbalance</option>
                <option value="cartoon">cartoon</option>

        </select><br>



<input type="checkbox" name="verbose" value="1">Verbose<br>
<input type="checkbox" name="vstab" value="1">Video stabilization<br>
<input type="checkbox" name="ev" value="1">EV compensation<br>
<input type="checkbox" name="hflip" value="1">horizontal flip<br>
<input type="checkbox" name="vflip" value="1">vertical flip<br>

<input type="submit" value="submit" >
</form>
</body>
</html>
