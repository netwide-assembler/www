<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="globalsign-domain-verification" content="rnHLlAfdI6izlAhGis3b5oEthJxvokH5i9F5hZgUpO" />

<?php include "header.inc" ?>

<body id="wrap">

    <?php include "navbar.inc" ?>

    <div id="outer">
    <div id="content">
        <h1>Welcome to the NASM home page!</h1>
        <p>We are gradually moving services away from Sourceforge to this page.
        For our remaining Sourceforge services see
        <a href="https://sourceforge.net/projects/nasm">https://sourceforge.net/projects/nasm</a>.</p>

        <h1>Latest version</h1>
        <p>
        <ul>
            <li>The latest stable version of NASM is
                <a href="http://www.nasm.us/pub/nasm/releasebuilds/<?php echo $version; ?>/"><?php echo $version; ?></a>
                (<a href="/doc/nasmdocc.html">revision history</a>).
            </li>

            <?php
                if ($rc_version) {
                    echo "<li>The latest release candidate of NASM is ";
                    echo "<a href=\"http://www.nasm.us/pub/nasm/releasebuilds/$rc_version/\">$rc_version</a>\n";
                    echo "(<a href=\"/xdoc/$rc_version/html/nasmdocc.html\">revision history</a>).</li>\n";
                }
            ?>

            <li>Release candidate builds are available
                <a href="http://www.nasm.us/pub/nasm/releasebuilds/?C=M;O=D">here</a>.
            </li>

            <li>Daily development snapshots are available
                <a href="http://www.nasm.us/pub/nasm/snapshots/?C=M;O=D">here</a>
                (<a href="http://www.nasm.us/pub/nasm/snapshots/latest/">latest</a>).
            </li>
        </ul>
        </p>

        <h1>NASM is under the Simplified BSD License</h1>
        <p>As of version 2.07, NASM is now under the Simplified (2-clause) BSD license.
        The details of the license are available in the documentation.</p>

        <h1>Development Team</h1>
        <p>NASM was originally developed by Simon Tatham and Julian Hall, and is now maintained by a
        team led by H. Peter Anvin.</p>

        <p>Currently active team members are:</p>
        <ul>
            <li><a href="http://www.zytor.com/~hpa/">H. Peter Anvin</a></li>
            <li>Frank B. Kotler</li>
            <li>Jin Kyu Song</li>
            <li>Cyrill Gorcunov</li>
        </ul>
        <p>... with support from many others, and we are actively looking for more developers.</p>

        <h1>Your reports aren't going to /dev/null</h1>
        <p>We're looking for your comments, suggestions and, of course,
        bug-reports. Report any suspicious behavior you encounter to help us
        improve the NASM for everyone!</p>

        <p>Please post your messages to the
        <a href="https://sourceforge.net/mail/?group_id=6208">mailing list</a>, or file a
        <a href="http://bugzilla.nasm.us/">bug report</a>.</p>

        <p>Don't worry if your report is not immediately addressed, even
        within the first few days, as this is usual for us. Your report will,
        however, be recorded and dealt with, of course, as time permits.
        </p>
    </div> <!-- content -->
    </div> <!-- outer -->

    <?php include "footer.inc" ?>

</body>
</html>
