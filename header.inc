<?php /* -*- html -*- */ ?><!DOCTYPE html>
<html lang="en">
  <!-- <?php
        // This php block must be inside an html comment, or
        // version.inc will produce crap
	$top = __DIR__;
	include("$top/version.inc");
	$domain = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);

	$release_root = '/pub/nasm/releasebuilds';
	$snap_root    = '/pub/nasm/snapshots';
	$doc_root     = '/docs';
	$changes      = 'nasmdocc.html';

	$stable_path  = "$release_root/$version";
	$stable_docs  = "$doc_root/$version";
	$stable_doc   = "$stable_docs/html/";
	$stable_pdf   = "$stable_docs/nasmdoc.pdf";
	$stable_notes = "${stable_doc}$changes";

	if (isset($rc_version)) {
	    $rc_path  = "$release_root/$version";
            $rc_docs  = "$doc_root/$rc_version";
            $rc_doc   = "$rc_docs/html/";
	    $rc_pdf   = "$rc_docs/nasmdoc.pdf";
	    $rc_notes = "${rc_doc}$changes";
        }

	$snap_path    = "$snap_root/latest";
	$snap_version = trim(file_get_contents("$snap_path/version.id"));
	$snap_docs    = "$snap_path/doc";
	$snap_doc     = "$snap_docs/html/";
	$snap_pdf     = "$snap_docs/nasmdoc.pdf";
	$snap_notes   = "${snap_doc}$changes";
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

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/web-fonts.css" rel="stylesheet">
    <link href="/css/nasm.css" rel="stylesheet">
  </head>
  <body>
