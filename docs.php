<?php include "header.inc" /* -*- html -*- */ ?>
<?php include "navbar.inc" ?>

<div class="container-fluid">
  <div class="container">
    <div class="row nasm-info">
      <div class="col-md-12">
	<h2 class="centered">Documentation</h2>
	<p>The NASM documentation is auto-generated on every new
	  release (including prereleases, release candidates, and
	  developments snapshots) and accessible either online or in
	  various offline archives. Such archives provide
	  documentation in the following formats: PDF, PostScript,
	  plain text, and HTML.</p>

	<table>
	  <caption>Available documentation</caption>
	  <thead>
	    <tr>
	      <th colspan="2" class="sep">NASM version</th>
	      <th colspan="2" class="sep">Read online</th>
	      <th colspan="3">Download</th>
	    </tr>
	  </thead>
	  <tbody>
            <?php $xdoc = "nasm-$version-xdoc"; ?>
	    <?php $xdpath = "$stable_path/$xdoc"; ?>
	    <tr>
	      <th scope="row">Stable</th>
	      <td><?=$version?></td>
	      <td><a href="<?=$stable_doc?>">HTML</a></td>
	      <td><a href="<?=$stable_pdf?>">PDF</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.tar.xz">tar.xz</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.tar.gz">tar.gz</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.zip">zip</a></td>
	    </tr>

	    <?php if (isset($rc_version)): ?>
	    <?php $xdoc = "nasm-$rc_version-xdoc"; ?>
	    <?php $xdpath = "$rc_path/$xdoc"; ?>
	    <tr>
	      <th scope="row"><?=$rc_Name?></th>
	      <td><?=$rc_version?></td>
	      <td><a href="<?=$rc_doc?>">HTML</a></td>
	      <td><a href="<?=$rc_pdf?>">PDF</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.tar.xz">tar.xz</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.tar.gz">tar.gz</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.zip">zip</a></td>
	    </tr>
	    <?php endif; ?>

	    <?php $xdoc = "nasm-$snap_version-xdoc"; ?>
	    <?php $xdpath = "$snap_path/$xdoc"; ?>
	    <tr>
	      <th scope="row">Development snapshot</th>
	      <td><?=$snap_version?></td>
	      <td><a href="<?=$snap_doc?>">HTML</a></td>
	      <td><a href="<?=$snap_pdf?>">PDF</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.tar.xz">tar.xz</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.tar.gz">tar.gz</a></td>
	      <td><a class="filename" href="<?=$xdpath?>.zip">zip</a></td>
	    </tr>
	  </tbody>
	</table>
      </div>
    </div>
  </div>
</div>

<?php include "footer.inc" ?>
