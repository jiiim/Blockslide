<!DOCTYPE html>
<html>
        <head>
                <title>BlockSlide</title>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='../jquery.mobile-1.3.2.min.css' />
                <script src='../jquery-1.9.1.min.js'></script>
                <script src='../jquery.mobile-1.3.2.min-custom.js'></script>

                <link rel="stylesheet" type="text/css" href="../spectrum.css">
                <script type='text/javascript' src="../spectrum.js"></script>

                <style>
                        .ui-header .ui-title { margin-left: 1em; margin-right: 1em; text-overflow: clip; }
                </style>
        </head>
		<body>
<div data-role="page" id="page1">
    <div id="head" data-theme="a" data-role="header" data-position="fixed" data-tap-toggle="false">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <input id="cancel" type="submit" data-theme="c" data-icon="delete" data-iconpos="left"
                value="Cancel" data-mini="true">
            </div>
            <div class="ui-block-b">
                <input id="save" type="submit" data-theme="b" data-icon="check" data-iconpos="right"
                value="Save" data-mini="true">
            </div>
        </div>
    </div>

    <div data-role="content">
<div class="ui-grid-a">
  <div class="ui-block-a">
    <div id="dateorder" data-role="fieldcontain" class="ui-bar">
			<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
        <legend>Date format</legend>
<?php
	if (!isset($_GET['dateorder'])) {
		$dateorder = 1;
	} else {
		$dateorder = $_GET['dateorder'];
	}
	
	if ($dateorder == 0) {
		$s1 = " checked";
		$s2 = "";
	} else {
		$s1 = "";
		$s2 = " checked";
	}
	
	echo '<input id="format1" name="dateorder" value="0" data-theme="" type="radio"' . $s1 . '><label for="format1">dd mm</label>';
	echo '<input id="format2" name="dateorder" value="1" data-theme="" type="radio"' . $s2 . '><label for="format2">mm dd</label>';
?>
			</fieldset>
		</div>
  </div>
  <div class="ui-block-b">
    <div data-role="fieldcontain" class="ui-bar">
          <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <legend>Show day of week</legend>
<?php
	if (!isset($_GET['weekday'])) {
		$weekday = 0;
	} else {
		$weekday = $_GET['weekday'];
	}
	
	if ($weekday == 0) {
		$s1 = " checked";
		$s2 = "";
	} else {
		$s1 = "";
		$s2 = " checked";
	}

	echo '<input id="weekday1" name="weekday" value="0" data-theme="" type="radio"' . $s1 . '><label for="weekday1">Off</label>';
	echo '<input id="weekday2" name="weekday" value="1" data-theme="" type="radio"' . $s2 . '><label for="weekday2">On</label>';
?>
        </fieldset>
        </div>
  </div>
  <div class="ui-block-a">
    <div id="battery" data-role="fieldcontain" class="ui-bar">
			<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
        <legend>Tap to show battery</legend>
<?php
	if (!isset($_GET['battery'])) {
		$battery = 1;
	} else {
		$battery = $_GET['battery'];
	}
	
	if ($battery == 0) {
		$s1 = " checked";
		$s2 = "";
	} else {
		$s1 = "";
		$s2 = " checked";
	}
	
	echo '<input id="battery1" name="battery" value="0" data-theme="" type="radio"' . $s1 . '><label for="battery1">Off</label>';
	echo '<input id="battery2" name="battery" value="1" data-theme="" type="radio"' . $s2 . '><label for="battery2">On</label>';
?>
			</fieldset>
		</div>
  </div>
  <div class="ui-block-b">
    <div id="bluetooth" data-role="fieldcontain" class="ui-bar">
      <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
        <legend>Vibrate on BT disconnect</legend>
<?php
	if (!isset($_GET['bluetooth'])) {
		$bluetooth = 1;
	} else {
		$bluetooth = $_GET['bluetooth'];
	}
	
	if ($bluetooth == 0) {
		$s1 = " checked";
		$s2 = "";
	} else {
		$s1 = "";
		$s2 = " checked";
	}

	echo '<input id="bluetooth1" name="bluetooth" value="0" data-theme="" type="radio"' . $s1 . '><label for="bluetooth1">Off</label>';
	echo '<input id="bluetooth2" name="bluetooth" value="1" data-theme="" type="radio"' . $s2 . '><label for="bluetooth2">On</label>';
?>
        </fieldset>
        </div>
  </div>
</div>


		<div data-role="fieldcontain">
			<label for="lang">
				Language
			</label>
			<select id="lang" data-native-menu="true" name="lang">
<?php
	$langs = array(
		0 => 'Dutch',
		1 => 'English',
		2 => 'French',
		3 => 'German',
		5 => 'Italian',
		4 => 'Spanish'
	);
	
	if (!isset($_GET['lang'])) {
		$lang = 1;
	} else {
		$lang = $_GET['lang'];
	}
	
	foreach ($langs as $v => $n) {
		if ($lang == $v) {
			$s = " selected";
		} else {
			$s = "";
		}
		echo '<option value="' . $v . '" ' . $s . '>' . $n . '</option>';
	}
	?>
			</select>
		</div>

      <div id="stripes" data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal">
          <legend>Stripes</legend>

<?php
	if (!isset($_GET['stripes'])) {
		$stripes = 1;
	} else {
		$stripes = $_GET['stripes'];
	}

	$s = array( "", "");
	$s[$stripes] = " checked";

	echo '<input id="stripes1" name="stripes" value="0" data-theme="" type="radio"' . $s[0] . '><label for="stripes1"><img src="digitsPlain.png" width="72" height="72"><br/>Plain</label>';
	echo '<input id="stripes2" name="stripes" value="1" data-theme="" type="radio"' . $s[1] . '><label for="stripes2"><img src="digits1.png" width="72" height="72"><br/>Striped</label>';
?>
        </fieldset>
      </div>

      <div id="roundcorners" data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal">
          <legend>Corners</legend>

<?php
	if (!isset($_GET['roundcorners'])) {
		$roundcorners = 1;
	} else {
		$roundcorners = $_GET['roundcorners'];
	}

	$s = array( "", "");
	$s[$roundcorners] = " checked";

	echo '<input id="corners1" name="roundcorners" value="0" data-theme="" type="radio"' . $s[0] . '><label for="corners1"><img src="digitsFlatCorners.png" width="72" height="72"><br/>Flat</label>';
	echo '<input id="corners2" name="roundcorners" value="1" data-theme="" type="radio"' . $s[1] . '><label for="corners2"><img src="digitsRoundCorners.png" width="72" height="72"><br/>Round</label>';
?>
        </fieldset>
      </div>


      <div id="fulldigits" data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal">
          <legend>Digits Shape</legend>

<?php
	if (!isset($_GET['fulldigits'])) {
		$fulldigits = 0;
	} else {
		$fulldigits = $_GET['fulldigits'];
	}

	$s = array( "", "");
	$s[$fulldigits] = " checked";

	echo '<input id="format1" name="fulldigits" value="0" data-theme="" type="radio"' . $s[0] . '><label for="format1"><img src="digits1.png" width="72" height="72"><br/>Original</label>';
	echo '<input id="format2" name="fulldigits" value="1" data-theme="" type="radio"' . $s[1] . '><label for="format2"><img src="digits2.png" width="72" height="72"><br/>Regular</label>';
?>
        </fieldset>
      </div>

<?php
  if (isset($_GET['colorCapable'])) {
    $colorCapable = $_GET['colorCapable'];
  } else {
    $colorCapable = 0;
  }

  if (($colorCapable == "true") || ($colorCapable == 1)) {
    $colorCapable = 1;
  } else {
    $colorCapable = 0;
  }
 
  $showDiv = "";

  if (!$colorCapable) {
    $showDiv = " style=\"display: none;\"";
  }
?>

<?php
    echo "<div id=\"colortheme\" data-role=\"fieldcontain\"" . $showDiv . ">\n";

    if (isset($_GET['colortheme'])) {
      $colortheme = $_GET['colortheme'];
    } else {
      $colortheme = 0;
    }
?>

<div id="colorthemeaccordion" data-role="collapsible-set" data-theme="b" data-content-theme="b" data-icon-pos="left" data-inset="false">
    <div id="predefinedcolorthemes" data-role="collapsible">
      <h3>Predefined Color Themes</h3>
      <fieldset data-role="controlgroup" data-type="vertical">
<?php
        for ($i=1; $i<5; $i++) {
          $s = "";
          if ($i == $colortheme) {
            $s = " checked";
          }
          echo '<input id="colortheme' . $i . '" name="colortheme" value="' . $i . '" data-theme="a" type="radio"' . $s . '><label for="colortheme' . $i . '">';

          echo '<img id="img_' . $i . '" src="theme_' . $i . '.png" width="45" height="44"><br/>';
          echo '</label>';
        }
?>
      </fieldset>
    </div>
    <div id="customcolortheme" data-role="collapsible" data-theme="a">
        <h3>Custom Color Theme</h3>

<?php
  $s = "";
  if ($colortheme == 0) {
    $s = " checked";
  }
  echo '<input id="colortheme0" name="colortheme" value="0" type="radio"' . $s . '><label for="colortheme0">';
?>
      <div style="width: 45px; background-color: black; height: 44px; padding: 1px;" id="img_0">
        <div id="line_0" style="width: 43px; background-color: white; height: 8px; border-top-left-radius: 5px; border-top-right-radius: 5px; margin: 0px 1px 0px 1px;"></div>
        <div id="line_1" style="width: 43px; background-color: white; height: 7px; margin: 1px 1px 0px 1px; float: left;">
          <div id="line_12" style="width: 13px; background-color: black; height: 7px; margin: 0px 0px 0px 15px; float: left;"></div>
        </div>
        <div id="line_2" style="width: 43px; background-color: white; height: 7px; margin: 1px 1px 0px 1px; float: left;">
          <div id="line_22" style="width: 13px; background-color: black; height: 7px; margin: 0px 0px 0px 15px; float: left;"></div>
        </div>
        <div id="line_3" style="width: 43px; background-color: white; height: 7px; margin: 1px; float: left;">
          <div id="line_32" style="width: 13px; background-color: black; height: 7px; margin: 0px 0px 0px 15px; float: left;"></div>
        </div>
        <div id="line_4" style="width: 43px; background-color: white; height: 8px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; clear: both; margin: 1px 1px 0px 1px;"></div>
      </div>
    </label>
  <div class="ui-grid-a">
    <div class="ui-block-a">
      <legend>Background</legend>
    </div>
    <div class="ui-block-b">
      <input id="bgcolorpicker" name="bgcolorpicker">
    </div>
    <div class="ui-block-a">
      <legend>Digits Lines</legend>
    </div>
    <div class="ui-block-b">
      <fieldset data-role="controlgroup" data-type="vertical">
        <input id="fgcolorpicker0" name="fgcolorpicker0">
        <input id="fgcolorpicker1" name="fgcolorpicker1">
        <input id="fgcolorpicker2" name="fgcolorpicker2">
        <input id="fgcolorpicker3" name="fgcolorpicker3">
        <input id="fgcolorpicker4" name="fgcolorpicker4">
      </fieldset>
    </div>
    <div class="ui-block-a">
      <input type="text" id="themecode" name="themecode" data-clear-btn="true">
    </div>
    <div class="ui-block-b">
      <input id="parseTheme" type="button" data-theme="a" data-icon="edit" data-iconpos="left" value="Use Code" data-mini="true">
    </div>
  </div>


    </div>
</div>

      </div>


  <script>
<?php
  if (isset($_GET['return_to'])) {
    echo "var closeURL = \"" . $_GET['return_to'] . "\";\n";
  } else {
    echo "var closeURL = \"pebblejs://close#\";\n";
  }

  if (isset($_GET['themecode'])) {
    echo "var passedTheme = \"" . $_GET['themecode'] . "\";\n";
  } else {
    echo "var passedTheme = \"ffffffffffc0\";\n";
  }

  echo "var colorThemeAtStart = " . $colortheme . ";\n";
  echo "var curBGColor = \"#000000\";\n";
  echo "var curFGColor = [ \"#ffffff\", \"#ffffff\", \"#ffffff\", \"#ffffff\", \"#ffffff\" ];\n";
?>

  var encodedTheme = "";
  var pebblePalette = [
    [ '000', '005', '00a', '00f', '050', '055', '05a', '05f' ],
    [ '500', '505', '50a', '50f', '550', '555', '55a', '55f' ],
    [ 'a00', 'a05', 'a0a', 'a0f', 'a50', 'a55', 'a5a', 'a5f' ],
    [ 'f00', 'f05', 'f0a', 'f0f', 'f50', 'f55', 'f5a', 'f5f' ],
    [ '0a0', '0a5', '0aa', '0af', '0f0', '0f5', '0fa', '0ff' ],
    [ '5a0', '5a5', '5aa', '5af', '5f0', '5f5', '5fa', '5ff' ],
    [ 'aa0', 'aa5', 'aaa', 'aaf', 'af0', 'af5', 'afa', 'aff' ],
    [ 'fa0', 'fa5', 'faa', 'faf', 'ff0', 'ff5', 'ffa', 'fff' ]
  ];

  function color8to24bit(color8bit) {
    var c = parseInt(color8bit, 16) - 192;
    var r = 0x55 * ((c & 0x30) >> 4);
    var g = 0x55 * ((c & 0xc) >> 2);
    var b = 0x55 * (c & 0x3);
    var rgb = (r << 16) + (g << 8) + (b);
    var result = "#" + ("000000" + rgb.toString(16)).slice(-6);

    return result;
  }

  function charIsValidHexa(c) {
    return ( ( (c >= "0".charCodeAt(0)) && (c <= "9".charCodeAt(0)) ) || ( (c >= "a".charCodeAt(0)) && (c <= "f".charCodeAt(0)) ) );
  }

  function decodeTheme(themeString) {
    var fallbackTheme = "f4e2f0cccbfc";
    var validCode = true;
    var i = 0;

    themeString = themeString.toLowerCase();

    if (themeString == "undefined") {
      themeString = fallbackTheme;
    }

    var len = themeString.length;
    if (len != 12) {
      alert("Invalid Theme Code: must be 12 characters long.");
      validCode = false;
    }

    invalidChars = false;
    for (i=0; i<len; i++) {
      curChar = themeString.charCodeAt(i);
      if (!charIsValidHexa(themeString.charCodeAt(i))) {
        invalidChars = true;
        break;
      }
    }

    if (invalidChars && validCode) {
      alert("Invalid Theme Code: must only contain chars from 0 to 9 or a to f");
    }

    if (validCode) {
      for (i=0; i<5; i++) {
        curFGColor[i] = color8to24bit(themeString.substr(2*i, 2));
      }
      curBGColor = color8to24bit(themeString.substr(10, 2));
    }
  }

  function color24to8bit(color) {
    var r = parseInt(color.substr(1, 2), 16) >> 6;
    var g = parseInt(color.substr(3, 2), 16) >> 6;
    var b = parseInt(color.substr(5, 2), 16) >> 6;

    var result = (192+(r*16)+(g*4)+b).toString(16);
    return ("00" + result).slice(-2);
  }

  function encodeColors() {
    var i = 0;
    encodedTheme = "";

    for (i=0; i<5; i++) {
      encodedTheme += color24to8bit(curFGColor[i]);
    }
    encodedTheme += color24to8bit(curBGColor);
  }

  function setColors() {
    var i = 0;
    document.getElementById("img_0").style.backgroundColor = curBGColor;
    document.getElementById("line_12").style.backgroundColor = curBGColor;
    document.getElementById("line_22").style.backgroundColor = curBGColor;
    document.getElementById("line_32").style.backgroundColor = curBGColor;
 
    for (i=0; i<5; i++) {
      document.getElementById("line_"+i).style.backgroundColor = curFGColor[i];
    }

    encodeColors();

    $('#themecode').val(encodedTheme);
  }

  function selectCustomTheme() {
    $("input:radio[name=colortheme][value=0]").trigger('click');
    $("input:radio[name=colortheme]").checkboxradio("refresh");
  }

  function setBGColor(color) {
    curBGColor = color.toHexString();
    setColors();
    selectCustomTheme();
    setColorPickers();
  }

  function setFGColor(i, color) {
    curFGColor[i] = color.toHexString();
    setColors();
    selectCustomTheme();
    setColorPickers();
  }

  function setColorPickers() {
    var i = 0;
    $("#bgcolorpicker").spectrum("set", curBGColor);

    for (i=0; i<5; i++) {
      $("#fgcolorpicker"+i).spectrum("set", curFGColor[i]);
    }
  }

  function saveOptions() {
    var options = {
      'dateorder': parseInt($("input[name=dateorder]:checked").val(), 10),
      'weekday': parseInt($("input[name=weekday]:checked").val(), 10),
      'battery': parseInt($("input[name=battery]:checked").val(), 10),
      'bluetooth': parseInt($("input[name=bluetooth]:checked").val(), 10),
      'lang': parseInt($("#lang").val(), 10),
      'stripes': parseInt($("input[name=stripes]:checked").val(), 10),
      'roundcorners': parseInt($("input[name=roundcorners]:checked").val(), 10),
      'fulldigits': parseInt($("input[name=fulldigits]:checked").val(), 10),
      'colortheme': parseInt($("input[name=colortheme]:checked").val(), 10),
      'themecode': $("#themecode").val()
    }
    return options;
  }

  $().ready(function() {

    decodeTheme(passedTheme);

    $("#bgcolorpicker").spectrum({
        color: curBGColor,
        showPaletteOnly: true,
        hideAfterPaletteSelect:true,
        change: function(color) {
          setBGColor(color);
        },
        palette: pebblePalette
      });

    $("#fgcolorpicker0").spectrum({
        color: curFGColor[0],
        showPaletteOnly: true,
        hideAfterPaletteSelect:true,
        change: function(color) {
          setFGColor(0, color);
        },
        palette: pebblePalette
    });

    $("#fgcolorpicker1").spectrum({
        color: curFGColor[1],
        showPaletteOnly: true,
        hideAfterPaletteSelect:true,
        change: function(color) {
          setFGColor(1, color);
        },
        palette: pebblePalette
    });

    $("#fgcolorpicker2").spectrum({
        color: curFGColor[2],
        showPaletteOnly: true,
        hideAfterPaletteSelect:true,
        change: function(color) {
          setFGColor(2, color);
        },
        palette: pebblePalette
    });

    $("#fgcolorpicker3").spectrum({
        color: curFGColor[3],
        showPaletteOnly: true,
        hideAfterPaletteSelect:true,
        change: function(color) {
          setFGColor(3, color);
        },
        palette: pebblePalette
    });

    $("#fgcolorpicker4").spectrum({
        color: curFGColor[4],
        showPaletteOnly: true,
        hideAfterPaletteSelect:true,
        change: function(color) {
          setFGColor(4, color);
        },
        palette: pebblePalette
    });

    $("#cancel").click(function() {
      console.log("Cancel");
      document.location = closeURL;
    });

    $("#save").click(function() {
      console.log("Submit");
      
      var location = closeURL + encodeURIComponent(JSON.stringify(saveOptions()));
      console.log("Close: " + location);
      console.log(location);
      document.location = location;
    });

    $("#parseTheme").click(function() {
      decodeTheme($("#themecode").val());
      setColors();
      setColorPickers();
      selectCustomTheme();
    });

    $('.sp-replacer').unwrap();

    setColors();

    if (colorThemeAtStart == 0) {
      $( "#customcolortheme").trigger( "expand" );
    } else {
      $( "#predefinedcolorthemes").trigger( "expand" );
    }
  });
  </script>
</body>
</html>
