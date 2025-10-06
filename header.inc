<?php /* -*- html -*- */ ?><!DOCTYPE html>
<html lang="en">
  <!-- <?php
        // This php block must be inside an html comment, as
        // version.inc emits some garbage due to the polyglot hack
	$top = __DIR__;
	$year = date('Y');
	include("$top/version.inc");
	$domain = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);

	$release_root = '/pub/nasm/releasebuilds';
	$snap_root    = '/pub/nasm/snapshots';
	$docs_root    = '/docs';
	$xdoc_root    = '/xdoc';
	$changes      = 'nasmdocc.html';

	$stable_path  = "$release_root/$version";
	$stable_doc   = "$docs_root/$version/";
	$stable_pdf   = "$xdoc_root/$version/nasmdoc.pdf";
	$stable_notes = "${stable_doc}$changes";

	if (isset($rc_version)) {
	    if (str_contains($rc_version,'rc')) {
                $rc_name = 'release candidate';
            } else {
                $rc_name = 'prerelease';
	    }
	    $rc_Name  = ucfirst($rc_name);
	    $rc_path  = "$release_root/$rc_version";
            $rc_doc   = "$docs_root/$rc_version/";
	    $rc_pdf   = "$xdoc_root/$rc_version/nasmdoc.pdf";
	    $rc_notes = "${rc_doc}$changes";
        }

	if (!isset($snap_version)) {
	    $snap_version = trim(file_get_contents("$snap_root/latest/version.id"));
	}
	$snap_date    = preg_replace('/^.*-/', '', $snap_version);
	$snap_path    = "$snap_root/$snap_date";
	$snap_doc     = "$snap_path/doc/html/";
	$snap_pdf     = "$snap_path/doc/nasmdoc.pdf";
	$snap_notes   = "${snap_doc}$changes";

	function mydate($time) {
	    return $time ? date('Y-m-d', $time) : '&nbsp;';
	}
  ?> -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="The Netwide Assembler (NASM) is an assembler and disassembler for the Intel x86 architecture, used by developers worldwide">
    <meta name="author" content="Netwide Assembler (NASM) Team">
    <meta name="keywords" content="NASM, assembler, assembly language">

    <?php if (!isset($title)) { $title = 'NASM'; } ?>
    <title><?=$title?></title>

    <link href="css/web-fonts.css" rel="stylesheet">
    <link href="css/nasm.css" rel="stylesheet">
  </head>
  <body>
