<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include "header.inc" ?>

<body>
	<?php include "navbar.inc" ?>

	<div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-6">
					<h2>Welcome</h2>
					<p>We are gradually moving services away from Sourceforge to this page.
					For our remaining Sourceforge services see
					<a href="https://sourceforge.net/projects/nasm">here</a>.</p>
				</div>
				<div class="col-md-6">
					<h2>License</h2>
					<p>As of version 2.07, NASM is now under the
					<a href="http://opensource.org/licenses/BSD-2-Clause">Simplified (2-clause) BSD license</a>.
					The details of the license are available in the documentation.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid nasm-info">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-12">
					<h2>Latest version</h2>
					<p><ul>
						<li>The latest stable version of NASM is
						<a href="http://www.nasm.us/pub/nasm/releasebuilds/<?php echo $version; ?>/"><?php echo $version; ?></a>
						(<a href="/doc/nasmdocc.html">revision history</a>).</li>
						<?php
							if ($rc_version) {
								echo "<li>The latest release candidate of NASM is ";
								echo "<a href=\"http://www.nasm.us/pub/nasm/releasebuilds/$rc_version/\">$rc_version</a>\n";
								echo "(<a href=\"/xdoc/$rc_version/html/nasmdocc.html\">revision history</a>).</li>\n";
							}
						?>
						<li>Release candidate builds are available
						<a href="http://www.nasm.us/pub/nasm/releasebuilds/?C=M;O=D">here</a>.</li>
						<li>Daily development snapshots are available
						<a href="http://www.nasm.us/pub/nasm/snapshots/?C=M;O=D">here</a>
						(<a href="http://www.nasm.us/pub/nasm/snapshots/latest/">latest</a>).</li>
					</ul></p>
					<p>For users of RPM-based Linux distributions (e.g. Fedora, Red Hat, SUSE, ...),
					  you can download the official NASM builds using
					  <code>dnf</code> or <code>yum</code> by installing <a href="nasm.repo">nasm.repo</a> in your
					  <code>/etc/yum/yum.repos.d</code> directory.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-12">
					<h2 class="centered">Development Team</h2>
					<p>NASM was originally developed by Simon Tatham and Julian Hall, and is
					now maintained by a team led by H. Peter Anvin.</p>
					<p>Currently active team members are:
					<ul>
						<li>H. Peter Anvin</li>
						<li>Cyrill Gorcunov</li>
						<li>Chang Seok Bae</li>
						<li>Jim Kukunas</li>
						<li>Frank B. Kotler</li>
					</ul>
					</p>
					<p>... with support from many others, and we are always looking for more developers.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-12">
					<h2 class="centered">Your reports aren't going to <code>/dev/null</code></h2>
					<p>We're looking for your comments, suggestions and, of course, bug-reports.
					Report any suspicious behavior you encounter to help us improve the NASM
					for everyone!</p>

					<p>Please post your messages to the
					<a href="https://sourceforge.net/mail/?group_id=6208">mailing list</a>,
					or file a <a href="http://bugzilla.nasm.us">bug report</a>.</p>
					<p>Don't worry if your report is not immediately addressed, even within the
					first few days, as this is usual for us. Your report will, however, be recorded
					and dealt with, of course, as time permits.</p>
				</div>
			</div>
		</div>
	</div>

	<?php include "footer.inc" ?>
</body>
</html>
