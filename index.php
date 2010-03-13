<?php
$DEBUG = 0;

// Calculate how many straps to use
// $Id: index.php,v 1.1 2010-03-13 16:34:45 turbo Exp $

$VERSION = "$Revision: 1.1 $";

// {{{ printr(string)
function printr($string) {
  echo "<pre>\n";
  
  if(is_array($string))
	print_r($string);
  else
	echo "$string<br>";
  
  echo "</pre><p>\n";
}
// }}}

if(!$_REQUEST["action"]) {
  // {{{ Input form
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="tooltip.css">
  </head>
  <body>
    <table>
      <form method="post" name="berakning":
    </table>
  </body>
</html>
<?php
// }}}
} else {
  // {{{ If DEBUG - print keys / values from form
  if($DEBUG) {
	foreach($_REQUEST as $key => $val) {
	  echo "$key => $val<br>";
	}
	echo "--------------<p>";
  }
  // }}}
}

// {{{ Copyleft etc
echo "<p><p><font size=\"-1\">Lasts&auml;krningsprogram, Copyleft<br>Turbo Fredriksson &lt;turbo@bayour.com&gt;<br>";
echo "Version".preg_replace("/.*sion: ([0-9].*[0-9]) \$/", "\1", $VERSION);
echo "</font>";

/*
 * Local variables:
 * mode: php
 * mode: font-lock
 * tab-width: 4
 * End:
 */
// }}}
?>
