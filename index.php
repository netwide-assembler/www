<?php include "header.inc" /* -*- html -*- */ ?>
<?php include "navbar.inc" ?>
<?php if (!isset($domain)): ?>
<strong>Something is wrong on the server. Please excuse any formatting
  or other errors you may see.</strong>
<?php elseif ($domain !== 'nasm.us'): ?>
<div class="problem">
  <h2>Temporary Backup Domain</h2>
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
<?php endif; ?>

<h1>NASM &mdash; The Netwide Assembler</h1>
<p>This is the project webpage
  for the Netwide Assembler (NASM), an assembler for
  the x86 CPU architecture portable to nearly every
  modern platform, and with code generation for many
  platforms old and new.</p>
<table>
  <caption>Latest versions</caption>
  <tbody>
    <tr>
      <th scope="row">Stable</th>
      <td><a href="<?=$stable_path?>"><?=$version?></a></td>
      <td><?=mydate($rel_time)?></td>
      <td><a href="<?=$stable_notes?>">Release notes</a></td>
      <td><a href="<?=$stable_doc?>">Documentation</a></td>
    </tr>
    <?php if (isset($rc_version)): ?>
    <tr>
      <th scope="row"><?=$rc_Name?></th>
      <td><a href="<?=$rc_path?>"><?=$rc_version?></a></td>
      <td><?=mydate($rc_time)?></td>
      <td><a href="<?=$rc_notes?>">Release notes</a></td>
      <td><a href="<?=$rc_doc?>">Documentation</a></td>
    </tr>
    <?php endif; ?>
    <tr>
      <th scope="row">Development snapshot</th>
      <td><a href="<?=$snap_path?>"><?=$snap_version?></a></td>
      <td><?=mydate($snap_time)?></td>
      <td><a href="<?=$snap_notes?>">Release notes</a></td>
      <td><a href="<?=$snap_doc?>">Documentation</a></td>
    </tr>
  </tbody>
</table>

<table>
  <caption>All versions</caption>
  <tbody>
    <tr>
      <td><a href="<?=$release_root?>/">Stable, release
	  candidates, prereleases</a></td>
      <td><a href="<?=$snap_root?>/">Development snapshots</a></td>
    </tr>
  </tbody>
</table>

<div class="boxes">
  <div class="box">
    <h2>Development Team</h2>
    <p>NASM was originally developed by Simon Tatham and Julian Hall, and is
      now maintained by a team led by H. Peter Anvin of Intel Corporation.</p>
    <p>Currently active team members are:</p>
    <ul>
      <li>H. Peter Anvin</li>
      <li>Cyrill Gorcunov</li>
      <li>Sheng Yongjie</li>
      <li>Maciej Wieczor-Retman</li>
    </ul>
    <p>... with support from many others, and we are always looking for more developers.</p>
  </div>

  <div class="box">
    <h2>Moving more services to github</h2>
    <p>We will be moving more services to github in the near
      future. The github Issues are now open and preferred over
      bugzilla. The forums are intended to be replaced by github
      discussions and wiki when they are set up in the near
      future.</p>
  </div>

  <div class="box">
    <h2>License</h2>
    <p>As of version 2.07, NASM is now under the
      <a href="http://opensource.org/licenses/BSD-2-Clause">Simplified (2-clause) BSD license</a>.
      The details of the license are available in the documentation.</p>
  </div>

  <div class="box">
    <h2>Bug reports</h2>
    <p>Please report bugs to our
      <a href="https://bugzilla.nasm.us/">bug
      tracker</a>. Unfortunately we are often unable to address things
      immediately, but we will look at them as soon as we can.</p>
  </div>
</div>

<?php include "footer.inc" ?>
