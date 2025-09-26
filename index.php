<?php include "header.inc" /* -*- html -*- */ ?>
<?php include "navbar.inc" ?>
<?php if (!isset($domain)): ?>
<strong>Something is wrong on the server. Please excuse any formatting
  or other errors you may see.</strong>
<?php elseif ($domain !== 'nasm.us'): ?>
<div class="container-fluid">
  <div class="container">
    <div class="row nasm-info">
      <div class="col-md-12">
	<h2 class="centered">Temporary Backup Domain</h2>
	<p><b><?=$domain?></b>: This is a backup domain,
	  set up due to a temporary problem with our primary domain,
	  <a href="https://www.nasm.us/">nasm.us</a>. That domain has
	  now been restored; this remains active in order to provide
	  redundancy for any future or remaining problems.</p>

	<p>Not all features may be functional yet at this domain.</p>

	<p>We are, however, considering migrating to
	  <b>nasm.dev</b> as our primary domain in the future, as
	  it really reflects the international nature of our project
	  better.</p>
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

<div class="container-fluid nasm-info">
  <div class="container">
    <div class="row nasm-info">
      <div class="col-md-12">
	<h2>Latest version</h2>
	<table class="table table-hover table-responsive">
	  <tbody>
	    <tr>
	      <th scope="row">Stable</th>
	      <td><a href="<?=$stable_path?>"><?=$version?></td>
	      <td><a href="<?=$stable_notes?>">Release notes</a></td>
	      <td><a href="<?=$stable_doc?>">Documentation</a></td>
	    </tr>
	    <?php if (isset($rc_version)): ?>
	    <tr>
	      <th scope="row"><?=$rc_Name?></th>
	      <td><a href="<?=$rc_path?>"><?=$rc_version?></a></td>
	      <td><a href="<?=$rc_notes?>">Release notes</a></td>
	      <td><a href="<?=$rc_doc?>">Documentation</a></td>
	    </tr>
	    <?php endif; ?>
	    <tr>
	      <th scope="row">Development snapshot</th>
	      <td><a href="<?=$snap_path?>"><?=$snap_version?></a></td>
	      <td><a href="<?=$snap_notes?>">Release notes</a></td>
	      <td><a href="<?=$snap_doc?>">Documentation</a></td>
	    </tr>
	    <tr>
	      <th scope="row">Older versions</th>
	      <td><a href="<?=$release_root?>/">Stable/RC/prerelease</a></td>
	      <td><a href="<?=$snap_root?>/">Snapshots</a></td>
	    </tr>
	  </tbody>
	</table>
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
	<p>The previous repository at <b>repo.or.cz</b> is no longer maintained.</p>
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
	    <li>Sheng Yongjie</li>
	    <li>Maciej Wieczor-Retman</li>
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
