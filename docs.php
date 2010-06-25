<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <title>The Netwide Assembler: NASM</title>

</head>
<body id="canvas">

<h2 style="text-align: right;">The Netwide Assembler&nbsp;</h2>

<?php include "navbar.inc" ?>

<div id="content">
<p>&nbsp;</p>

<div>

  <b class="cnr"><b class="cnr1"><b></b></b><b class="cnr2"><b></b></b>
  <b class="cnr3"></b><b class="cnr4"></b><b class="cnr5"></b></b>

  <div class="cbody">

  <div class="item">
  <h1>NASM Documenation</h1>
    <p>The NASM documentation is auto-generated every new release (including
       release candidates) and accessible either online or various offline
       archives.<br />
       Offline documentation is packed into archive which consists of
       documentation in the following formats: pdf, ps, txt, html, info. 
    </p>
  </div>

  <div class="item">
  <h1>Online Documenation</h1>
    <p>NASM online documentation is <a href="/doc/">here</a></p>
  </div>

  <?php
    /*
     * When xdoc become available change this variable to
     * $pkg_path = http://www.nasm.us/xdoc/
     */
    $path = "http://www.nasm.us/pub/nasm/releasebuilds";
    if ($version) {
        $pkg_name = "nasm-$version-xdoc";
        echo "<div class=\"item\">\n";
        echo "<h1>Download Documenation for NASM-$version (stable version)</h1>\n";
        echo "<ul>\n";
        echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.gz\">$pkg_name.tar.bz2</a></li>\n";
        echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.gz\">$pkg_name.tar.gz</a></li>\n";
        echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.gz\">$pkg_name.tar.zip</a></li>\n";
        echo "</ul>\n";
        echo "</div>\n";
    }
    if ($rc_version) {
        $pkg_name = "nasm-$rc_version-xdoc";
        echo "<div class=\"item\">\n";
        echo "<h1>Download Documenation for NASM-$rc_version (release candidate)</h1>\n";
        echo "<ul>\n";
        echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.gz\">$pkg_name.tar.bz2</a></li>\n";
        echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.gz\">$pkg_name.tar.gz</a></li>\n";
        echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.gz\">$pkg_name.tar.zip</a></li>\n";
        echo "</ul>\n";
        echo "</div>\n";
    }
  ?>

  </div>
  <b class="cnr"><b class="cnr5"></b><b class="cnr4"></b>
  <b class="cnr3"></b><b class="cnr2"><b></b></b><b class="cnr1">
  <b></b></b></b>

</div>

<p style="text-align: right;"><br />
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" style="border: none;" />
 </a>
</p>
</div>

</body>
</html>
