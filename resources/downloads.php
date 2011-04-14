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
if (isset($HTTP_GET_VARS["site"])) {
  $site = $HTTP_GET_VARS["site"];
} else {
  $site = "http://ftpmain.gnustep.org/pub/gnustep/";
}

function download($link) {
  global $site; // Why do I have to even declare this? Stupid language.
  echo($site.$link);
}

?>

</head>

<body>

<h1>GNUstep Downloads</h1>

<p>We recommend that you check the software versions currently
installed on your system. The <a href="#core">GNUstep Startup</a>
package will do this for you automatically.  Then consult the
following tables to determine which items need installing or updating.
To download the recommended version of any item of software, click on
the version number in the appropriate column.</p>

<p>For further information on any particular package, click on its name.</p>

<ul>
<li><a href="#pre">Pre-requisites</a></li>
<li><a href="#core">GNUstep Core</a></li>
<li><a href="#libs">Extra Libraries/Tools</a></li>
<li><a href="#dev">Development Tools</a></li>
<li><a href="#user">User Environment</a></li>
</ul>




<h2 id="core">GNUstep Core</h2>

<p>All GNUstep users should install the following items. Choose either the
GNUstep Startup package, which combines all four core packages (plus ffcall) 
or download and install the four core packages separately.
<small>(see <a href="../experience/documentation.html">Installation Docs</a>
or the somewhat out-of-date <i><a href="http://gnustep.made-it.com/BuildGuide/index.html#BUILDING.GNUSTEP">Building GNUstep</a></i> in Build Guide)</small></p>

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
<td class="stab">none</td>
<td class="unst"><a href="<?php download("core/gnustep-startup-0.25.0.tar.gz")?>">0.25.0</a></td>
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
<td class="src">GNUstep Make</td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-make-2.6.0.tar.gz")?>">2.6.0</a></td>
<td class="unst">-</td>
<td>Makefile Package</td>
</tr>

<tr>
<td class="src">GNUstep Base</td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-base-1.22.0.tar.gz")?>">1.22.0</a></td>
<td class="unst">-</a></td>
<td>Foundation</td>
</tr>

<tr>
<td class="src">GNUstep GUI</td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-gui-0.20.0.tar.gz")?>">0.20.0</a></td>
<td class="unst">-</a></td>
<td>Graphical user interface class library</td>
</tr>

<tr>
<td class="src">GNUstep Backend</td>
<td class="req">Required</td>
<td class="stab"><a href="<?php download("core/gnustep-back-0.20.0.tar.gz")?>">0.20.0</a></td>
<td class="unst">-</a></td>
<td>Generic back-end</td>
</tr>

</tbody>

</table>

<h2 id="libs">Extra Libraries/Tools</h2>

<p>These libraries and tools offer additional capabilities. Some
packages and applications may require you to install these libraries
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
<td class="src"><a href="http://www.gnustep.it/Renaissance/index.html">Renaissance</a></td>
<td class="req">Optional</td>
<td class="stab"><div class="cent">-</div></td>
<td class="unst"><div class="cent">from svn</div></td>
<td>Multi-platform UI layout</td>
</tr>

<tr>
<td class="src">GNUstep Guile</td>
<td class="req">Unsupported</td>
<td class="stab"><a href="<?php download("libs/gnustep-guile-1.1.4.tar.gz")?>">1.1.4</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Requires OLD versions of GNUstep and Guile to build/run</td>
</tr>

<tr>
<td class="src">StepTalk</td>
<td class="req">Unsupported</td>
<td class="stab"><a href="<?php download("libs/StepTalk-0.10.0.tar.gz")?>">0.10.0</a></td>
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
<td class="req">Unsupported</td>
<td class="stab"><a href="<?php download("libs/rigs-0.2.2.tar.gz")?>">0.2.2</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Ruby bridge</td>
</tr>

<tr>
<td class="src">gdl2</td>
<td class="req">Optional</td>
<td class="stab"><div class="cent">-</div></td>
<td class="unst"><a href="<?php download("libs/gnustep-dl2-0.10.1.tar.gz")?>">0.10.1</a></td>
<td>Database Support Library</td>
</tr>

<tr>
<td class="src">SQLClient</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/SQLClient-1.5.1.tar.gz")?>">1.5.1</a></td>
<td class="unst"><a href="http://svn.gna.org/viewcvs/gnustep/libs/sqlclient/trunk/">from svn</a></td>
<td>Simple OO Interface to SQL databases</td>
</tr>

<tr>
<td class="src">WebServer</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/WebServer-1.4.0.tar.gz")?>">1.4.0</a></td>
<td class="unst"><a href="http://svn.gna.org/viewcvs/gnustep/libs/webserver/trunk/">from svn</a></td>
<td>Simple web server for applications</td>
</tr>

<tr>
<td class="src">WebServices</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/WebServices-0.4.0.tar.gz")?>">0.4.0</a></td>
<td class="unst"><a href="http://svn.gna.org/viewcvs/gnustep/libs/webservices/trunk/">from svn</a></td>
<td>Classes for building web services (partial)</td>
</tr>

<tr>
<td class="src">Performance</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("libs/Performance-0.3.0.tar.gz")?>">0.3.0</a></td>
<td class="unst"><a href="http://svn.gna.org/viewcvs/gnustep/libs/performance/trunk/">from svn</a></td>
<td>Performance improvement and measuring classes</td>
</tr>

<tr>
<td class="src">Pantomime</td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.collaboration-world.com/cgi-bin/collaboration-world/project/download.cgi/Pantomime-1.1.0.tar.gz?rid=77">1.1.0</a></td>
<td class="unst"><a href="http://www.collaboration-world.com/cgi-bin/collaboration-world/project/download.cgi/Pantomime-1.2.0pre3.tar.gz?rid=77">1.2.0pre3</a></td>
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
<td class="stab"><a href="<?php download("dev-apps/gorm-1.2.12.tar.gz")?>">1.2.12</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Graphical interface builder</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.org/experience/ProjectCenter.html">Project Center</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="<?php download("dev-apps/ProjectCenter-0.6.0.tar.gz")?>">0.6.0
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Project developer</td>
</tr>

<tr>
<td class="src">nib2gmodel</td>
<td class="req">Obsolete</td>
<td class="stab"><a href="<?php download("dev-apps/nib2gmodel-0.11.0.tar.gz")?>">0.11.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Converts older (pre-10.2 nibs) </td>
</tr>

<tr>
<td class="src">OpenStep 2GNU Converter</td>
<td class="req">Obsolete</td>
<td class="stab"><a href="<?php download("contrib/Openstep2GNUConverter-20000717.tar.gz")?>">20000717</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Older PB Project converter</td>
</tr>

<tr>
<td class="src">Examples</td>
<td class="req">Optional</td>
<td class="stab"><a href="<?php download("core/gnustep-examples-1.3.0.tar.gz")?>">1.3.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>GUI examples</td>
</tr>

</tbody>

</table>

<h2 id="user">GNUstep User Environment</h2>

<p>If you intend to use GNUstep to manage files, run applications and so on, please install the items you require from the following list:
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
<td class="src"><a href="../experience/GWorkspace.html">GWorkspace</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="<?php download("usr-apps/gworkspace-0.8.8.tar.gz")?>">0.8.8</a></td>
<td class="unst">-</td>
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
<td class="src"><a href="http://www.gnustep.it/enrico/gworkspace/">App Wrappers</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnustep.it/enrico/gworkspace/wrappers.tar.gz">Wrappers</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Additional GWorkspace wrappers</td>
</tr>

<tr>
<td class="src">GNUMail</td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.collaboration-world.com/cgi-bin/project/release.cgi?pid=2">1.1.0pre2</a></td>
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

<h2 id="pre">Pre-requisites</h2>

<p>Please ensure you have at least the <i>Minimum version req'd</i> of
each of the following (where needed) on you system, before you install
GNUstep. If you need to obtain the software, we suggest that you
download the <i>Recommended version</i>.</p>

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
<td class="src">make</td>
<td class="req">Required</td>
<td class="stab">3.75</td>
<td class="unst"><a href="ftp://ftp.gnu.org/gnu/make/"><i>current</i></a></td>
<td>GNU make</td>
</tr>

<tr>
<td class="src">binutils</td>
<td class="req">Depends on OS</td>
<td class="stab">2.9.6</td>
<td class="unst"><a href="ftp://ftp.gnu.org/gnu/binutils/"><i>current</i></a></td>
<td>GNU binutils</td>
</tr>

<tr>
<td class="src">iconv</td>
<td class="req">If no glibc</td>
<td class="stab">1.7</td>
<td class="unst"><a href="ftp://ftp.ilog.fr/pub/Users/haible/gnu"><i>current</i></a></td>
<td>Convert file encoding</td>
</tr>

<tr>
<td class="src">gcc</td>
<td class="req">Required</td>
<td class="stab"><a href="ftp://ftp.gnu.org/pub/gnu/gcc/gcc-2.95.3.tar.gz">2.95.3</a></td>
<td class="unst"><a href="http://gcc.gnu.org"><i>current</i></a></td>
<td>GNU C &amp; Objective-C Compiler</td>
</tr>

<td class="src">libffi</td>
<td class="req">Required</td>
<td class="stab"><a href="ftp://sourceware.org/pub/libffi/libffi-3.0.9.tar.gz">3.0.9</a></td>
<td class="unst"><a href="ftp://sourceware.org/pub/libffi/libffi-3.0.9.tar.gz">3.0.9</a></td>
<td>Message forwarding</td>
</tr>

<tr>
<td class="src">ffcall</td>
<td class="req">Optional</td>
<td class="stab">1.8</td>
<td class="unst"><a href="ftp://ftp.santafe.edu/pub/gnu/ffcall-1.10.tar.gz">1.10</a></td>
<td>Possible alternative to libffi</td>
</tr>

<tr>
<tr>
<td class="src">gmp</td>
<td class="req">Optional</td>
<td class="stab">3.1.1</td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/gmp"><i>current</i></a></td>
<td>Arbitrary precision arithmetic</td>
</tr>

<tr>
<td class="src">guile</td>
<td class="req">For guile scripting</td>
<td class="stab">1.4</td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/guile"><i>current</i></a></td>
<td><i>Scheme</i> language interpreter</td>
</tr>

<tr>
<td class="src">openssl</td>
<td class="req">Recommended</td>
<td class="stab">0.9.6b</td>
<td class="unst"><a href="http://www.openssl.org/source"><i>current</i></a></td>
<td>SSL and TSL support</td>
</tr>

<tr>
<td class="src">libtiff</td>
<td class="req">Required</td>
<td class="stab">3.4036</td>
<td class="unst"><a href="ftp://ftp.remotesensing.org/pub/libtiff"><i>current</i></a></td>
<td>TIFF image support</td>
</tr>

<tr>
<td class="src">libpng</td>
<td class="req">Recommended</td>
<td class="stab">-</td>
<td class="unst">-</td>
<td>PNG image support</td>
</tr>

<tr>
<td class="src">libjpeg</td>
<td class="req">Recommended</td>
<td class="stab">-</td>
<td class="unst">-</td>
<td>JPEG image support</td>
</tr>

<tr>
<td class="src">libxml</td>
<td class="req">Required</td>
<td class="stab">2.3.0</td>
<td class="unst"><a href="ftp://ftp.gnome.org/pub/GNOME/sources/libxml2"><i>current</i></a></td>
<td>For XML property lists and docs</td>
</tr>

<tr>
<td class="src"><a href="http://68k.org/~michael/audiofile/">audiofile</a></td>
<td class="req">Recommended</td>
<td class="stab">0.2.3</td>
<td class="unst"><a href="http://www.68k.org/~michael/audiofile/audiofile-0.2.6.tar.gz"><i>current</i></a></td>
<td>Program interface to digital audio formats</td>
</tr>

<tr>
<td class="src">WindowMaker</td>
<td class="req">Recommended</td>
<td class="stab"><a href="http://windowmaker.info/pub/source/release/WindowMaker-0.92.0.tar.bz2">0.92.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Window manager &amp; desktop</td>
</tr>

<tr>
<td class="src">libobjc</td>
<td class="req">ONLY MinGW/Cygwin or gcc2</td>
<td class="stab"><a href="<?php download("libs/gnustep-objc-1.6.0.tar.gz")?>">1.6.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Updated libobjc for some systems.</td>
</tr>

</tbody>

</table>

<p class="cont"><span class="cont">Contact: <a href="mailto:webmasters@gnustep.org">webmasters@gnustep.org</a></span></p>

</div></div>

</div>


<div class="sidebar">
	
  <a href="../">Home page</a><br />
  <a href="../information/aboutGNUstep.html">Introduction</a><br />
  <a href="../experience/apps.html">Applications</a><br />
  <a href="../resources/sources.html">Download</a><br />
  <a href="http://wiki.gnustep.org/index.php/User_Guides">User Guides</a><br />
  <a href="../developers">Developers</a><br />
  <a href="http://wiki.gnustep.org/index.php/GNUstepWiki:Site_support">Donations</a><br />
  <a href="http://wiki.gnustep.org/index.php/Get_Help">Get Help</a><br />
  <br />
  <a href="http://wiki.gnustep.org/index.php/Report_Bugs">Report Bugs</a><br />
  <a href="http://wiki.gnustep.org/">Project Wiki</a><br />
  <br />
  Site by <a href="mailto:webmasters@gnustep.org">webmasters@gnustep.org</a>
  
</div>



</body>
</html>
