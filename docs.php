<?php include "header.inc" /* -*- html -*- */ ?>
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

	<h3>Online for NASM <?=$version?> (stable)</h3>
	<p><ul>
	    <li><a href="<?=$stable_doc?>">HTML format</a></li>
	    <li><a href="<?=$stable_pdf?>">PDF format</a></li>\n";
	</ul></p>

	<?php if ($rc_version): ?>
	<h3>Online for NASM $<?=$rc_version?> (prerelease)</h3>
	<p><ul>
	    <li><a href="<?=$rc_doc?>">HTML format</a></li>
	    <li><a href="<?=$rc_pdf?">PDF format</a></li>
	</ul></p>
	<?php endif; ?>

	<?php $xdoc = "nasm-$version-xdoc"; ?>
	<?php $xdpath = "$stable_path/$xdoc"; ?>
	<h3>Downloadable for NASM $version (stable)</h3>
	<p><ul>
	    <li><a href="<?=$xdpath?>.tar.xz"><?=$xdoc?>.tar.xz</a></li>
	    <li><a href="<?=$xdpath?>.tar.gz"><?=$xdoc?>.tar.gz</a></li>
	    <li><a href="<?=$xdpath?>.zip"><?=$xdoc?>.zip</a></li>
	</ul></p>

	<?php if ($rc_version): ?>
	<?php $xdoc = "nasm-$rc_version-xdoc"; ?>
	<?php $xdpath = "$rc_path/$xdoc"; ?>
	<h3>Downloadable for NASM $rc_version (prerelease)</h3>
	<p><ul>
	    <li><a href="<?=$xdpath?>.tar.xz"><?=$xdoc?>.tar.xz</a></li>
	    <li><a href="<?=$xdpath?>.tar.gz"><?=$xdoc?>.tar.gz</a></li>
	    <li><a href="<?=$xdpath?>.zip"><?=$xdoc?>.zip</a></li>
	</ul></p>
	<?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php include "footer.inc" ?>
