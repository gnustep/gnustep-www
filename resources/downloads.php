<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 1st August 2003), see www.w3.org" />
<title>GNUstep: about GNUstep</title>
<link type="text/css" rel="stylesheet" href=
"../gnustep-main.css" />
<style type="text/css" media="screen">
/*<![CDATA[*/
                @import "../gnustep-main-2.css";
/*]]>*/
TABLE     {margin-top:1em}

COL.src   {width:20%}
COL.req   {width:20%}
COL.ver   {width:10%}
COL.note  {width:40%}

TH        {background-color:black; color:white; text-align:left}
TD        {background-color:#b0b0b0; color:white; vertical-align:top}

TD.src,TD.stab,TD.unst {font-weight:bold}
TD.req                 {font-style:italic}

A                 {color:#e0e0ff}
TD.stab A:link    {color:#ddffdd}
TD.stab A:visited {color:#99ff99}
TD.unst A:link    {color:#ffdddd}
TD.unst A:visited {color:#ff9999}

DIV.cent  {text-align:center}

P.cont    {margin-top:3em}

SPAN.cont {border-top:thin white solid; padding-top:0.5em;
           font-size:0.83em}

</style>
<meta http-equiv="Content-type" content=
"text/html; charset=utf-8" />
</head>
<body>
<div class="header"><a href="/"><img width="560" src=
"../gnustep-header14.jpg" height="74" border="0" alt=
"GNUstep.org" /></a></div>
<div class="container">
<div class="content">
<div id="main">

<!-- base href trickery doesn't work, please use PHP download() function -->


<?php

// This will need fixing if some PHP 5 options aren't set to make HTTP_GET_VARS
$site = $HTTP_GET_VARS["site"];

function download($link) {
  global $site; // Why do I have to even declare this? Stupid language.
  echo($site.$link);
}

?>

</head>

<body>

<h1>GNUstep Downloads</h1>

<p>We recommend that you check the software versions currently installed on your 
system by using the procedure in the 
<a href="http://gnustep.made-it.com/BuildGuide/index.html"><i>GNUstep Build Guide.</i></a> 
Then consult the following tables to determine which items need installing or updating. 
To download the 
recommended version of any item of software, click on the version number in 
the appropriate column.</p>

<p>For further information on any particular package, click on its name.</p>

<ul>
<li><a href="#pre">Pre-requisites</a></li>
<li><a href="#core">GNUstep Core</a></li>
<li><a href="#libs">Extra Libraries/Tools</a></li>
<li><a href="#dev">Development Tools</a></li>
<li><a href="#user">User Environment</a></li>
</ul>

<h2 id="pre">Pre-requisites</h2>

<p>Please ensure you have at least the <i>Minimum version req'd</i> of each of the following (where needed) on you system, before you install GNUstep. If you need to obtain the software, we suggest that you download the <i>Recommended version.</i>
<small>(see <a href="http://gnustep.made-it.com/BuildGuide/index.html#CHECK.YOUR.SYSTEM"><i>Check your system</i></a> in Build Guide)</small>
</p>

<table border=0 width="100%" cellpadding=3 cellspacing=0>

<col class="src">
<col class="req">
<col class="ver">
<col class="ver">
<col class="note">

<thead>
<tr>
<th>Sources</th>
<th>Required?</th>
<th>Minimum<br>version<br>req'd</th>
<th>Recom-<br>mended<br>version</th>
<th>Notes</th>
</tr>
</thead>

<tbody>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#MAKE">make</a></td>
<td class="req">Required</td>
<td class="stab">3.75</td>
<td class="unst"><a href="ftp://ftp.gnu.org/gnu/make/make-3.79.1.tar.gz">3.79.1</a></td>
<td>GNU make</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BINUTILS">binutils</a></td>
<td class="req">Depends on OS</td>
<td class="stab">2.9.6</td>
<td class="unst"><a href="ftp://ftp.gnu.org/gnu/binutils/binutils-2.13.tar.gz">2.13</a></td>
<td>GNU binutils</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#GICONV">iconv</a></td>
<td class="req">If no glibc</td>
<td class="stab">1.7</td>
<td class="unst"><a href="ftp://ftp.ilog.fr/pub/Users/haible/gnu/libiconv-1.7.tar.gz">1.7</a></td>
<td>Convert file encoding</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#THE.OBJECTIVE-C.COMPILER">gcc</a></td>
<td class="req">Required</td>
<td class="stab"><a href="ftp://ftp.gnu.org/pub/gnu/gcc/gcc-2.95.3.tar.gz">2.95.3</a></td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/gcc/gcc-3.3.1.tar.gz">3.3.1</a></td>
<td>GNU C &amp; Objective-C Compiler</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#FOREIGN.FUNCTION.INTERFACES">ffcall</a></td>
<td class="req">Required</td>
<td class="stab">1.8</td>
<td class="unst"><a href="ftp://ftp.santafe.edu/pub/gnu/ffcall-1.10.tar.gz">1.10</a></td>
<td>Message forwarding</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#FOREIGN.FUNCTION.INTERFACES">libffi</a></td>
<td class="req">Optional</td>
<td class="stab">gcc 3.3.1</td>
<td class="unst"><div class="cent">-</div></td>
<td>Alternative to ffcall (part of gcc)</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#GNUMP">gmp</a></td>
<td class="req">Optional</td>
<td class="stab">3.1.1</td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/gmp/gmp-4.1.tar.gz">4.1</a></td>
<td>Arbitrary precision arithmetic</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.EXTENSIONS">guile</a></td>
<td class="req">For guile scripting</td>
<td class="stab">1.4</td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/guile/guile-1.6.0.tar.gz">1.6</a></td>
<td><i>Scheme</i> language interpreter</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#SSL">openssl</a></td>
<td class="req">Recommended</td>
<td class="stab">0.9.6b</td>
<td class="unst"><a href="http://www.openssl.org/source/openssl-0.9.6j.tar.gz">0.9.6j</a></td>
<td>SSL and TSL support</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#TIFF">libtiff</a></td>
<td class="req">Required</td>
<td class="stab">3.4036</td>
<td class="unst"><a href="ftp://ftp.remotesensing.org/pub/libtiff/tiff-v3.5.7.tar.gz">3.5.7</a></td>
<td>TIFF image support</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#XML">libxml</a></td>
<td class="req">Required</td>
<td class="stab">2.3.0</td>
<td class="unst"><a href="ftp://ftp.gnome.org/pub/GNOME/sources/libxml2/2.4/libxml2-2.4.24.tar.bz2">2.4.24</a></td>
<td>For XML property lists and docs</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#SOUND">audiofile</a></td>
<td class="req">Recommended</td>
<td class="stab">0.2.3</td>
<td class="unst"><a href="ftp://oss.sgi.com/projects/audiofile/download/audiofile-0.2.3.tar.gz">0.2.3</a></td>
<td>Program interface to digital audio formats</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#WINDOWMANAGER">WindowMaker</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="http://windowmaker.org/pub/source/release/WindowMaker-0.80.2.tar.bz2">0.80.2</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Window manager &amp; desktop</td>
</tr>

<tr>
<td class="src">libobjc</a></td>
<td class="req">ONLY with MinGW or gcc2</td>
<td class="stab"><a href="<?php download("libs/gnustep-objc-1.3.0.tar.gz")?>">1.3.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Updated libobjc for some systems.</td>
</tr>

</tbody>

</table>


<h2 id="core">GNUstep Core</h2>

<p>All GNUstep users should install the following items. Choose either the
GNUstep Startup package, which combines all four core packages (plus ffcall) 
or download and install the four core packages separately.
<small>(see <i><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.GNUSTEP">Building GNUstep</a></i> in Build Guide)</small></p>

<table border=0 width="100%" cellpadding=3 cellspacing=0>

<col class="src">
<col class="req">
<col class="ver">
<col class="ver">
<col class="note">

<thead>
<tr>
<th>Sources</th>
<th>Required?</th>
<th>Stable</th>
<th>Unstable</th>
<th>Notes</th>
</tr>
</thead>

<tbody>

<tr>
<td class="src">GNUstep Startup</td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-startup-0.9.2.tar.gz")?>">0.9.2</a></td>
<td class="unst">-</td>
<td>Easy Install Core Packages</td>
</tr>

<tr>
<td class="src"></td>
<td class="req"></td>
<td class="stab"</td>
<td class="unst"></td>
<td></td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.GNUSTEP">GNUstep Make</a></td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-make-1.10.0.tar.gz")?>">1.10.0</a></td>
<td class="unst">-</td>
<td>Makefile Package</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.GNUSTEP">GNUstep Base</a></td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-base-1.10.1.tar.gz")?>">1.10.1</a></td>
<td class="unst">-</td>
<td>Foundation</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.GNUSTEP">GNUstep GUI</a></td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-gui-0.9.4.tar.gz")?>">0.9.4</a></td>
<td class="unst">-</td>
<td>Graphical user interface class library</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.GNUSTEP">GNUstep Backend</a></td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-back-0.9.4.tar.gz")?>">0.9.4</a></td>
<td class="unst">-</td>
<td>Generic back-end</td>
</tr>

</tbody>

</table>

<h2 id="libs">Extra Libraries/Tools</h2>

<p>These libraries and tools offer additional capabilities. Some
packages and applications may require you to install these libraries
<small>(see <i><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.EXTENSIONS">Building Extensions</a></i> in Build Guide)</small>
</p>

<table border=0 width="100%" cellpadding=3 cellspacing=0>

<col class="src">
<col class="req">
<col class="ver">
<col class="ver">
<col class="note">

<thead>
<tr>
<th>Sources</th>
<th>Required?</th>
<th>Stable</th>
<th>Unstable</th>
<th>Notes</th>
</tr>
</thead>

<tbody>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.EXTENSIONS">Renaissance</a></td>
<td class="req">Optional</td>
<td class="stab"><div class="cent">-</div></td>
<td class="unst"><a href="http://www.gnustep.it/Renaissance/Download/Renaissance-0.7.0.tar.gz">0.7.0</a></td>
<td>Multi-platform UI layout</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.EXTENSIONS">GNUstep Guile</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/gnustep-guile-1.1.4.tar.gz")?>">1.1.4</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Interactive development system</td>
</tr>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.EXTENSIONS">StepTalk</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://steptalk.agentfarms.net/download.html">0.8.1</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Scripting language support</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.it/jigs/">JIGS</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnustep.it/jigs/Download/">1.5.5
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Java bridge</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.org/experience/RIGS.html">RIGS</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/rigs-0.2.2.tar.gz")?>">0.2.2</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Ruby bridge</td>
</tr>

<tr>
<td class="src">gdl2</td>
<td class="req">Optional</td>
<td class="stab"><div class="cent">-</div></td>
<td class="unst"><a href="<?php download("libs/gdl2-0.9.1.tar.gz")?>">0.9.1</a></td>
<td>Database Support Library</td>
</tr>

<tr>
<td class="src">SQLClient</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/SQLClient-1.1.0.tar.gz")?>">1.1.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Simple OO Interface to SQL databases</td>
</tr>

<tr>
<td class="src"><a href="http://www.stupid-design.com/martin/GNUstep/GNUMail.app/GNUMail.app-Installation.html">Pantomime</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.collaboration-world.com/cgi-bin/collaboration-world/project/download.cgi/Pantomime-1.1.0.tar.gz?rid=77">1.1.0</a></td>
<td class="unst">-</td>
<td>GNUMail framework - see also <a href="http://www.collaboration-world.com/pantomime">description</a></td>
</tr>

<tr>
<td class="src">PPDs</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/gnustep-ppd-1.0.0.tar.gz")?>">1.0.0</a></td>
<td class="unst">-</td>
<td>Printer PPDs formerly in gnustep-gui</td>
</tr>

</tbody>

</table>

<h2 id="dev">GNUstep Development Tools</h2>

<p>If you intend to develop software for GNUstep, or to port software to GNUstep from another environment, you should install the development tools that are relevant to you from the following list:</p>

<table border=0 width="100%" cellpadding=3 cellspacing=0>

<col class="src">
<col class="req">
<col class="ver">
<col class="ver">
<col class="note">

<thead>
<tr>
<th>Sources</th>
<th>Required?</th>
<th>Stable</th>
<th>Unstable</th>
<th>Notes</th>
</tr>
</thead>

<tbody>

<tr>
<td class="src"><a href="http://www.gnustep.org/experience/Gorm.html">Gorm</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="<?php download("dev-apps/Gorm-0.9.0.tar.gz")?>">0.9.0
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Graphical interface builder</td>
</tr>

<tr>
<td class="src"><a href="ihttp://www.gnustep.org/experience/ProjectCenter.html">Project Center</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="<?php download("dev-apps/ProjectCenter-0.4.2.tar.gz")?>">0.4.2
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Project developer</td>
</tr>

<tr>
<td class="src">nib2gmodel</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("dev-apps/nib2gmodel-0.9.0.tar.gz")?>">0.9.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Converts nibs to gmodel</td>
</tr>

<tr>
<td class="src">OpenStep 2GNU Converter</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("contrib/Openstep2GNUConverter-20000717.tar.gz")?>">20000717</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>PB Project to GNUstep Makefile converter</td>
</tr>

<tr>
<td class="src"><a href="http://karl.nfox.com/Downloads/nfmake/">nfmake</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://karl.nfox.com/Downloads/nfmake/nfmake.tar.gz">nfmake</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Compiles apps from PB Project on GNUstep</td>
</tr>

<tr>
<td class="src">Testsuite</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("test/gnustep-tests-1.7.0.tar.gz")?>">1.7.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Regression tests</td>
</tr>

<tr>
<td class="src">Examples</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("core/gnustep-examples-1.0.0.tar.gz")?>">1.0.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>GUI examples</td>
</tr>

<tr>
<td class="src">Foundation Extensions</td>
<td class="req">Not recommended</td>
<td class="stab"><a href="<?php download("libs/extensions-0.8.6.tar.gz")?>">0.8.6</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Additional base classes</td>
</tr>

</tbody>

</table>

<h2 id="user">GNUstep User Environment</h2>

<p>If you intend to use GNUstep to manage files, run applications and so on, please install the items you require from the following list:<small>(see <i><a href="http://gnustep.made-it.com/BuildGuide/index.html#GNUSTEP.WORKSPACE">GNUstep environment</a></i> in Build Guide)</small>
</p>

<table border=0 width="100%" cellpadding=3 cellspacing=0>

<col class="src">
<col class="req">
<col class="ver">
<col class="ver">
<col class="note">

<thead>
<tr>
<th>Sources</th>
<th>Required?</th>
<th>Stable</th>
<th>Unstable</th>
<th>Notes</th>
</tr>
</thead>

<tbody>

<tr>
<td class="src"><a href="http://gnustep.made-it.com/BuildGuide/index.html#GNUSTEP.WORKSPACE">GWorkspace</a></td>
<td class="req">Recommended</td>
<td class="stab">-</td>
<td class="unst"><a href="http://www.gnustep.it/enrico/gworkspace/gworkspace-0.6.5.tar.gz">0.6.5</a></td>
<td>File manager for GNUstep</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.it/enrico/gworkspace/">RPM Inspector</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnustep.it/enrico/gworkspace/RpmViewer.tar.gz">RPM Viewer</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>GWorkspace inspector for RPM packages</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.it/enrico/gworkspace/">Localization</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnustep.it/enrico/gworkspace/">Various</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Language translations for GWorkspace</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.it/enrico/gworkspace/">App Wrappers</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnustep.it/enrico/gworkspace/wrappers.tar.gz">Wrappers</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Additional GWorkspace wrappers</td>
</tr>

<tr>
<td class="src"><a href="http://www.stupid-design.com/martin/GNUstep/GNUMail.app/GNUMail.app-Installation.html">GNUMail</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.collaboration-world.com/cgi-bin/collaboration-world/project/download.cgi/GNUMail-1.1.0pre2.tar.gz?rid=75">1.1.0pre2</a></td>
<td class="unst">-</td>
<td>GNU Mail - see also <a href="http://www.collaboration-world.com/gnumail">description</a></td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.org/experience/apps.html">GNUstep Apps</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("usr-apps/")?>">Various</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Other User Applications</td>
</tr>

</tbody>

</table>

<p class="cont"><span class="cont">Contact: <a href="mailto:webmasters@gnustep.org">webmasters@gnustep.org</a></span></p>

</div></div>

</div>


<div class="sidebar">
	
	<b>General</b><br />
	  <a href="../">Home page</a><br />
	  <a href="../information/aboutGNUstep.html">Introduction</a><br />
	  <a href="../experience/documentation.html">Getting Started</a><br />
	  <a href="../resources/sources.html">Download</a><br />
	  <a href="../experience/apps.html">Applications</a><br />
	  <a href="../resources/documentation/User/GNUstep/userfaq_toc.html">User FAQ</a><br />
	  <a href="../resources/documentation/User/GNUstep/machines_toc.html">Supported Platforms</a><br />
	  <a href="../information/donate.html">Donations</a><br />
	  <br />
          <a href="../developers/bugs.html">Report Bugs</a><br /> 
	<br />
	<b>Developers</b><br />
	  <a href="../resources/docs-web.html">Documentation</a><br />
	  <a href="../experience/DeveloperTools.html">Developer Tools</a><br />
	  <a href="http://wiki.gnustep.org/">Wiki Docs</a><br />
	  <a href="../resources/documentation/User/GNUstep/faq_toc.html">Developer FAQ</a><br />
	  <a href="../developers/map.html">Libraries</a><br />
	  <a href="../developers/whoiswho.html">Who's Who</a>?<br />
	  <a href="../information/mission.html">Mission</a><br />
	 <br />
	<b>External</b><br />
	  <a href="http://savannah.gnu.org/projects/gnustep/">Project Page</a><br />
	  <a href="../resources/resources.html">Related Links</a><br />
	  <a href="../information/gethelp.html">Mailing Lists</a><br />
	
	<br />

        <b><a href="../resources/sites.html">Related Sites...</a></b><br />
	
	<br />

	<b><a href="../resources/mirrors.html">Mirrors...</a></b><br />
	<br />
	Site by <a href="mailto:webmasters@gnustep.org">webmasters@gnustep.org</a>
  
</div>



</body>
</html>
