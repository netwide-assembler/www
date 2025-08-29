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
					<h2 class="centered">Documentation</h2>
					<p>The NASM documentation is auto-generated on every new release
					(including release candidates, that named -rc) and accessible either online
					or in various offline archives. Such archives provide documentation in the
					following formats: PDF, PostScript, plain text, HTML and info.</p>

					<?php
					$onl_path = "https://www.$domain/xdoc";
					if ($version) {
						echo "<h3>Online for NASM $version (stable)</h3>\n";
						echo "<p><ul>\n";
						echo "<li><a href=\"$onl_path/$version/html/nasmdoc0.html\">HTML format</a></li>\n";
						echo "<li><a href=\"$onl_path/$version/nasmdoc.pdf\">PDF format</a></li>\n";
						echo "</ul></p>\n";
					}
					if ($rc_version) {
						echo "<h3>Online for NASM $rc_version (-rc)</h3>\n";
						echo "<p><ul>\n";
						echo "<li><a href=\"$onl_path/$rc_version/html/nasmdoc0.html\">HTML format</a></li>\n";
						echo "<li><a href=\"$onl_path/$rc_version/nasmdoc.pdf\">PDF format</a></li>\n";
						echo "</ul></p>\n";
					}
					?>

					<?php
					$pkg_path = "https://www.$domain/pub/nasm/releasebuilds";
					if ($version) {
						$pkg_name = "nasm-$version-xdoc";
						echo "<h3>Downloadable for NASM $version (stable)</h3>\n";
						echo "<p><ul>\n";
						echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.bz2\">$pkg_name.tar.bz2</a></li>\n";
						echo "<li><a href=\"$pkg_path/$version/$pkg_name.tar.gz\">$pkg_name.tar.gz</a></li>\n";
						echo "<li><a href=\"$pkg_path/$version/$pkg_name.zip\">$pkg_name.zip</a></li>\n";
						echo "</ul></p>\n";
					}
					if ($rc_version) {
						$pkg_name = "nasm-$rc_version-xdoc";
						echo "<h3>Downloadable for NASM $rc_version (-rc)</h3>\n";
						echo "<p><ul>\n";
						echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.bz2\">$pkg_name.tar.bz2</a></li>\n";
						echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.tar.gz\">$pkg_name.tar.gz</a></li>\n";
						echo "<li><a href=\"$pkg_path/$rc_version/$pkg_name.zip\">$pkg_name.zip</a></li>\n";
						echo "</ul></p>\n";
					}
				?>

				</div>
			</div>
		</div>
	</div>

	<?php include "footer.inc" ?>
</body>
</html>
