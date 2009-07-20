<?= '<?xml version="1.0" encoding="utf-8"?>' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
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
  <h1>; Welcome to The NASM Home Page!</h1>
  <p>We're back at SourceForge - check out
  <a href="https://sourceforge.net/projects/nasm">https://sourceforge.net/projects/nasm</a></p>
  </div>

  <div class="item">
  <h1>; Latest Version</h1>
  <p>The latest stable version of NASM is
    <a href="http://www.nasm.us/pub/nasm/releasebuilds/<?= $version ?>/"><?= $version ?></a>
    (<a href="/doc/nasmdocc.html">revision history</a>).<br />
    <?php
      if ($rc_version) {
        echo "The latest release candidate of NASM is ";
        echo "<a href=\"http://www.nasm.us/pub/nasm/releasebuilds/$rc_version/\">$rc_version</a>.<br />";
      }
    ?>
    Release candidate builds are available <a href="http://www.nasm.us/pub/nasm/releasebuilds/?C=M;O=D">here</a>.<br />
    Daily development snapshots are available <a href="http://www.nasm.us/pub/nasm/snapshots/?C=M;O=D">here</a>
(<a href="http://www.nasm.us/pub/nasm/snapshots/latest/">latest</a>).</p>
  </div>

  <div class="item">
   <h1>; Historic Versions</h1>
   <p>Historical releases from version 0.99.05 onwards are available
   <a href="http://www.nasm.us/pub/nasm/releasebuilds/?C=M;O=D">here</a>.<br />
   Older releases are available from
   <a href="http://sourceforge.net/projects/nasm/files/">Sourceforge</a>.</p>

  <div class="item">
   <h1>; NASM is now under the Simplified BSD License</h1>
   <p>As of version 2.07, NASM is now under the Simplified (2-clause)
   BSD license.  The details of the license are available
   <a href="/doc/nasmdoc1.html#section-1.1.2">in the documentation</a>.</p>

  <div class="item">
   <h1>; R.I.P. Charles A. Crayne</h1>
   <p>The NASM team was saddened by the recent news of the passing of
   our friend, team member and computer industry veteran
   <a href="http://www.pacificsites.com/~ccrayne/charles.html">Charles A. Crayne</a>,
   also moderator of the newsgroup <em>comp.lang.asm.x86</em> and author of the
   book <em>Serious Assembler</em>.
   Charles passed away extremely suddenly on February 16, 2009 after just
   having been diagnosed with spinal cancer.  He will be sorely missed.</p>
  </div>

  <div class="item">
    <h1>; Development Team</h1>
    <p>NASM was originally developed by Simon Tatham and Julian Hall, and is now maintained by a
    team led by H. Peter Anvin.<br />
    Currently active team members are:</p>
    <ul>
      <li><a href="http://www.zytor.com/~hpa/">H. Peter Anvin</a></li>
      <li>Frank B. Kotler</li>
      <li>Victor van den Elzen</li>
      <li><a href="http://www.kanios.net">Keith Kanios</a></li>
      <li>Cyrill Gorcunov</li>
    </ul>
    <p>... with support from many others, and we are actively looking for more developers.
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
    <a href="https://sourceforge.net/mail/?group_id=6208">mailing
    list</a>, or file a
    <a href="https://sourceforge.net/tracker/?atid=106208&amp;group_id=6208&amp;func=browse">bug
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
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" style="border: none;" />
 </a>
</p>
</div>

</body>
</html>
