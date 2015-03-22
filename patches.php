<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include "header.inc" ?>

<body>
	<?php include "navbar.inc" ?>

	<div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-12">
					<h2 class="centered">Patches for NASM</h2>
					<p>The NASM uses the <a href="http://git-scm.com/">GIT</a> version
					control system. So we prefer to obtain well formatted patches which
					would be simply merged into the repo without much efforts.</p>

					<h3>Signing your work</h3>
					<p>To improve tracking of who did what we've introduced a sign-off procedure on patches
					that are being emailed around. The sign-off is a simple line at the end of the explanation
					for the patch, which certifies that you wrote it or otherwise have the right to pass it on as
					open-source patch.</p>

					<p>The rules are pretty simple - if you can certify the below...</p>

					<h3>Developer's Certificate of Origin 1.1</h3>
					<p>By making a contribution to this project, I certify that:</p>

					<p class="shaded-code">(a) The contribution was created in whole or in part by me and I have the
					right to submit it under the open source license indicated in the file; or<br/><br/>

					(b) The contribution is based upon previous work that, to the best of my knowledge,
					is covered under an appropriate open source license and I have the right under that
					license to submit that work with modifications, whether created in whole or in part by
					me, under the same open source license (unless I am permitted to submit under a different
					license), as indicated in the file; or<br/><br/>

					(c) The contribution was provided directly to me by some other person who certified (a),
					(b) or (c) and I have not modified it.<br/><br/>

					(d) I understand and agree that this project and the contribution are public and
					that a record of the contribution (including all personal information I submit
					with it, including my sign-off) is maintained indefinitely and may be
					redistributed consistent with this project or the open source license(s)
					involved.</p>

					<p>then you just add a line saying</p>
					<p class="shaded-code">Signed-off-by: Random J Developer &lt;random@developer.example.org&gt;</p>
					<p>using your real name (please, no pseudonyms or anonymous contributions if possible).</p>

					<h3>Example of a patch message</h3>
					<p class="shaded-code">From: Random J Developer &lt;random@developer.example.org&gt;<br/>
					Subject: [PATCH] Short patch description<br/>
					<br/>
					Long patch description (could be skipped if the patch is trivial enough)<br/>
					<br/>
					Signed-off-by: Random J Developer &lt;random@developer.example.org&gt;</p>
				</div>
			</div>
		</div>
	</div>

	<?php include "footer.inc" ?>
</body>
</html>
