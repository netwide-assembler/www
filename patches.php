<!-- <?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?> -->

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

        <h1>Patches for the NASM</h1>
        <p>The NASM uses the <a href="http://git-scm.com/">GIT</a> version control system.
        So we prefer to obtain well formatted patches which would be simply merged into the
        repo without much efforts.</p>

        <h1>Signing your work</h1>

        <p>To improve tracking of who did what we've introduced a "sign-off" procedure
        on patches that are being emailed around.</p>

        <p>The sign-off is a simple line at the end of the explanation for the
        patch, which certifies that you wrote it or otherwise have the right to
        pass it on as a open-source patch.  The rules are pretty simple - if you
        can certify the below...</p>

        <h1>Developer's Certificate of Origin 1.1</h1>

        <p>By making a contribution to this project, I certify that:</p>

        <p>(a) The contribution was created in whole or in part by me and I
            have the right to submit it under the open source license
            indicated in the file; or</p>

        <p>(b) The contribution is based upon previous work that, to the best
            of my knowledge, is covered under an appropriate open source
            license and I have the right under that license to submit that
            work with modifications, whether created in whole or in part
            by me, under the same open source license (unless I am
            permitted to submit under a different license), as indicated
            in the file; or</p>

        <p>(c) The contribution was provided directly to me by some other
            person who certified (a), (b) or (c) and I have not modified
            it.</p>

        <p>(d) I understand and agree that this project and the contribution
            are public and that a record of the contribution (including all
            personal information I submit with it, including my sign-off) is
            maintained indefinitely and may be redistributed consistent with
            this project or the open source license(s) involved.</p>

        <p>then you just add a line saying</p>

        <p><div class="code">Signed-off-by: Random J Developer
        &ltrandom@developer.example.org&gt</div></p>

        <p>using your real name (please, no pseudonyms or anonymous contributions if
        possible).<p>

        <h1>Example of a patch message</h1>

        <p>
        <div class="code">
        From: Random J Developer &ltrandom@developer.example.org&gt<br />
        Subject: [PATCH] Short patch description<br /><br />

        Long patch description (could be skipped if the patch<br />
        is trivial enough)<br /><br />

        Signed-off-by: Random J Developer &ltrandom@developer.example.org&gt
        </div></p>
    </div> <!-- content -->
    </div> <!-- outer -->
</body>
</html>
