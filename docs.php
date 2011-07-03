<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
  <title>The Netwide Assembler: NASM</title>  
</head>

<body id="wrap">

    <?php include "navbar.inc" ?>

    <div id="outer">
    <div id="content">

        <h1>NASM Documenation</h1>
        <p>The NASM documentation is auto-generated on every new release (including
        release candidates) and accessible either online or in various offline
        archives. Such archives provide documentation in the following formats:
        PDF, PostScript, plain text, HTML, and info.</p>

        <?php
            $onl_path = "http://www.nasm.us/xdoc";
            if ($version) {
                echo "<h1>Online Documenation for NASM $version (stable version)</h1>\n";
                echo "<ul>\n";
                echo "<li><a href=\"$onl_path/$version/html/nasmdoc0.html\">HTML format</a></li>\n";
                echo "<li><a href=\"$onl_path/$version/nasmdoc.pdf\">PDF format</a></li>\n";
                echo "</ul>\n";
            }
            if ($rc_version) {
                echo "<h1>Online Documenation for NASM $rc_version (release candidate)</h1>\n";
                echo "<ul>\n";
                echo "<li><a href=\"$onl_path/$rc_version/html/nasmdoc0.html\">HTML format</a></li>\n";
                echo "<li><a href=\"$onl_path/$rc_version/nasmdoc.pdf\">PDF format</a></li>\n";
                echo "</ul>\n";
            }
        ?>

        <?php
            $pkg_path = "http://www.nasm.us/pub/nasm/releasebuilds";
            if ($version) {
                $pkg_name = "nasm-$version-xdoc";
                echo "<h1>Download Documenation for NASM $version (stable version)</h1>\n";
                echo "<ul>\n";
                echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.bz2\">$pkg_name.tar.bz2</a></li>\n";
                echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.gz\">$pkg_name.tar.gz</a></li>\n";
                echo "<li><a href=\"$pkg_path/$version/$pkg_name.zip\">$pkg_name.zip</a></li>\n";
                echo "</ul>\n";
            }
            if ($rc_version) {
                $pkg_name = "nasm-$rc_version-xdoc";
                echo "<h1>Download Documenation for NASM $rc_version (release candidate)</h1>\n";
                echo "<ul>\n";
                echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.bz2\">$pkg_name.tar.bz2</a></li>\n";
                echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.gz\">$pkg_name.tar.gz</a></li>\n";
                echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.zip\">$pkg_name.zip</a></li>\n";
                echo "</ul>\n";
            }
        ?>

    </div> <!-- content -->
    </div> <!-- outer -->
</body>
</html>
