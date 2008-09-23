<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <title>The Netwide Assembler: NASM</title>
</head>
<body id="canvas">

<h2 style="text-align: right;">The Netwide Assembler&nbsp;</h2>

<?php include "navbar.inc" ?>

<div id="content">
<p>&nbsp;</p>

<?php
if (file_exists('./version')) {
  $ver = rtrim(file_get_contents('./version'));
}
if (file_exists('./rc-version')) {
  $rcv = rtrim(file_get_contents('./rc-version'));
}
?>

<div>

  <b class="cnr"><b class="cnr1"><b></b></b><b class="cnr2"><b></b></b>
  <b class="cnr3"></b><b class="cnr4"></b><b class="cnr5"></b></b>
  <div class="cbody">

  <div class="item">
  <h1>; Welcome to The NASM Home Page!</h1>
  <p>We're back at SourceForge - check out
  <a href="http://sourceforge.net/projects/nasm">http://sourceforge.net/projects/nasm</a></p>
  </div>

  <div class="item">
  <h1>; Latest Version</h1>
  <p>The latest stable version of NASM is
    <a href="http://sourceforge.net/project/showfiles.php?group_id=6208"><?= $ver ?></a>.<br />
    <?php
      if ($rcv) {
        echo "The latest release candidate of NASM is ";
        echo "<a href=\"ftp://ftp.zytor.com/pub/nasm/releasebuilds/$rcv/\">$rcv</a>.<br />";
      }
    ?>
    Release candidate builds are available <a href="ftp://ftp.zytor.com/pub/nasm/releasebuilds/">here</a>.<br />
    Daily development snapshots are available <a href="ftp://ftp.zytor.com/pub/nasm/snapshots/">here</a>.</p>
  </div>

  <div class="item">
    <h1>; Development Team</h1>
    <p>NASM was originally developed by Simon Tatham and Julian Hall, and is now maintained by a
    team led by H. Peter Anvin.<br />
    Currently active team members are:</p>
    <ul>
      <li><a href="http://www.zytor.com/~hpa/">H. Peter Anvin</a>, <a href="http://www.rpath.com">rPath, Inc.</a></li>
      <li><a href="http://www.pacificsites.com/~ccrayne/charles.html">Charles Crayne</a></li>
      <li>Frank B. Kotler</li>
      <li><a href="http://www.kanios.net">Keith Kanios</a></li>
    </ul>
    <p>... and we are actively looking for more developers.  <strong>In particular,</strong> we really
    need a maintainer for the <strong>MacOS X</strong> (Mach-O) backend!</p>
  </div>

  <div class="item">
    <h1>; New Development Repository</h1>
    <p>NASM has moved from using CVS to using
    <a href="http://git.or.cz/">Git</a>. All further
    development will be coordinated through the
    <a id="VersionLink" href="http://repo.or.cz/w/nasm.git">Git Repository</a>.</p>
  </div>

  <div class="item">
    <h1>; 64-bit (x86-64/x64/AMD64/Intel 64) Support Is Here!!!</h1>
    <p>NASM has been updated to support the full x86-64 architecture
    extension, and is fully supported since NASM 2.00.</p>
  </div>

  <div class="item">
    <h1>; Your Reports Aren't Going to /dev/null</h1>

    <p>We're looking for your comments, suggestions and, of course,
    bug-reports. Report any suspicious behavior you encounter to help us
    improve the NASM for everyone!</p>

    <p>Please post your messages to the
    <a href="http://sourceforge.net/mail/?group_id=6208">mailing
    list</a>, or file a
    <a href="http://sourceforge.net/tracker/?atid=106208&amp;group_id=6208&amp;func=browse">bug
    report</a>.</p>

    <p>Don't worry if your report is not immediately addressed, even
    within the first few days, as this is usual for us =)
    Your report will, however, be recorded and dealt with, of course, as
    time permits.</p>
  </div>

  <div class="item">
    <h1>; New Website Design</h1>

    <p>Many thanks to <a href="http://asm.codegurus.org/">Bryant Keller</a> 
for this outstanding website design!!!</p>
  </div>

  </div>
  <b class="cnr"><b class="cnr5"></b><b class="cnr4"></b>
  <b class="cnr3"></b><b class="cnr2"><b></b></b><b class="cnr1">
  <b></b></b></b>

</div>

<p style="text-align: right;"><br />
 <a href="http://sourceforge.net">
  <img src="http://sourceforge.net/sflogo.php?group_id=6208&amp;type=1" width="88" height="31" alt="SourceForge.net Logo" style="border: none;" />
 </a>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" style="border: none;" />
 </a>
</p>
</div>

</body>
</html>
