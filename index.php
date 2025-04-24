<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include "header.inc" ?>

<body>
	<?php include "navbar.inc" ?>

<?php if ($domain !== 'nasm.us'): ?>
	<div class="container-fluid">
	<div class="container">
	<div class="row nasm-info">
	<div class="col-md-12">
	<h2 class="centered">Temporary Backup Domain</h2>
	<p><em><?=$domain?></em>: This is a (hopefully)
	temporary domain, pending restoration of our normal
	domain,	<em>nasm.us</em>. Some of the features may be
	broken.</p>
	</div>
	</div>
	</div>
	</div>
<?php endif; ?>

      <div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-6">
					<h2>Welcome</h2>
					<p>This is the project webpage
		for the Netwide Assembler (NASM), an assembler for
		the x86 CPU architecture portable to nearly every
		modern platform, and with code generation for many
		platforms old and new.</p>
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

<div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-6">
					<h2>Welcome</h2>
					<p>This is the project webpage
		for the Netwide Assembler (NASM), an assembler for
		the x86 CPU architecture portable to nearly every
		modern platform, and with code generation for many
		platforms old and new.</p>
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
					<p>
					<table class="table table-hover table-responsive">
					<tbody>
					<tr>
						<th scope="row">Stable</th>
						<td><a href="/pub/nasm/releasebuilds/<?php echo $version; ?>/"><?php echo $version; ?></a></td>
						<td><a href="/doc/nasmdocc.html">History</a></td>
					</tr>
					<?php
					if ($rc_version) {
						echo "<tr>";
						echo "<th scope=\"row\">RC</th>";
						echo "<td><a href=\"/pub/nasm/releasebuilds/$rc_version/\">$rc_version</a></td>";
						echo "<td><a href=\"/xdoc/$rc_version/html/nasmdocc.html\">History</a></td>";
						echo "</tr>";
					}
					?>
					<tr>
						<th scope="row">Builds</th>
						<td><a href="/pub/nasm/releasebuilds/?C=M;O=D">List</a></td>
						<td></td>
					</tr>
					<tr>
						<th scope="row">Snapshots</th>
						<td><a href="/pub/nasm/snapshots/latest/">Latest</a>,
						<a href="/pub/nasm/snapshots/?C=M;O=D">List</a></td>
						<td></td>
					</tr>
					</tbody>
					</table>
					</p>
					<p>For users of RPM-based Linux distributions (e.g. Fedora, Red Hat, SUSE, ...),
					you can download the official NASM builds using <code>dnf</code> or <code>yum</code>
					by installing <a href="nasm.repo">nasm.repo</a> in your <code>/etc/yum/yum.repos.d</code>
					directory.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row nasm-info">
				<div class="col-md-12">
					<h2 class="centered">Infrastructure Change</h2>
					<p>On July 1, 2020, the
					      official NASM git repository moved to
					      <a href="https://github.com/netwide-assembler/nasm.git">github</a>.</p>
					<p>The previous repository on <em>repo.or.cz</em> is no longer maintained.</p>
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
					<a href="https://lists.<?=$domain?>/nasm-devel/">mailing list</a>,
					or file a <a href="http://bugzilla.<?=$domain?>">bug report</a>.</p>
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
