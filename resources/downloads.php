<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>GNUstep Downloads</title>

<STYLE TYPE="text/css">

BODY      {background-color:#6C6C80; color:white; padding-bottom:1em;
           font-family: Arial, Geneva, Helvetica, sans-serif}

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

</STYLE>

<!-- The following PHP generates a 'base href="url/of/server" ' tag, -->
<!-- declaring the base that will be prefixed to all *relative* URLS -->
<!-- in this page. Any URLS that are not meant to be relative to the -->
<!-- download server should be declared as *absolute*. -->


<?php

echo("\n<base href=\"");
echo($HTTP_GET_VARS["site"]);
echo("/\">\n");

?>

</head>

<body>

<h1>GNUstep Downloads</h1>

<p>We recommend that you check the software versions currently installed on your system by using the procedure in the <a href="http://documents.made-it.com/GNUstep/buildguide.html"><i>GNUstep Build Guide.</i></a> Then consult the following tables to determine which items need installing or updating. Please refer to the <i>Stable</i> or <i>Unstable</i> column, according to whether you wish to build from the stable or unstable GNUstep sources. To download the recommended version of any item of software, click on the version number in the appropriate column.</p>

<p>For further information on any particular item, click on the name of the item in the <i>Sources</i> column.</p>

<h2>Pre-requisites <small>(see <a href="http://documents.made-it.com/GNUstep/buildguide.html#CHECK.YOUR.SYSTEM"><i>Check your system</i></a> in Build Guide)</small></h2>

<p>Please ensure you have at least the <i>Minimum version req'd</i> of each of the following (where needed) on you system, before you install GNUstep. If you need to obtain the software, we suggest that you download the <i>Recommended version.</i></p>

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
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#MAKE">make</a></td>
<td class="req">Required</td>
<td class="stab">3.75</td>
<td class="unst"><a href="ftp://ftp.gnu.org/gnu/make/make-3.79.1.tar.gz">3.79.1</a></td>
<td>GNU make</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BINUTILS">binutils</a></td>
<td class="req">Usually required</td>
<td class="stab">2.9.6</td>
<td class="unst"><a href="ftp://ftp.gnu.org/gnu/binutils/binutils-2.13.tar.gz">2.13</a></td>
<td>GNU binutils</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#GICONV">iconv</a></td>
<td class="req">If no glibc</td>
<td class="stab">1.7</td>
<td class="unst"><a href="ftp://ftp.ilog.fr/pub/Users/haible/gnu/libiconv-1.7.tar.gz">1.7</a></td>
<td>Convert file encoding</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#THE.OBJECTIVE-C.COMPILER">gcc</a></td>
<td class="req">Required</td>
<td class="stab"><a href="ftp://ftp.gnu.org/pub/gnu/gcc/gcc-3.3.1.tar.gz">3.3.1</a></td>
<td class="unst">-</td>
<td>GNU C &amp; Objective-C Compiler</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#FOREIGN.FUNCTION.INTERFACES">ffcall</a></td>
<td class="req">Recommended</td>
<td class="stab">1.8d</td>
<td class="unst"><a href="libs/ffcall-1.8d.tar.gz">1.8d</a></td>
<td>Message forwarding</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#FOREIGN.FUNCTION.INTERFACES">libffi</a></td>
<td class="req">Optional</td>
<td class="stab">gcc 3.3.1</td>
<td class="unst"><div class="cent">-</div></td>
<td>Alternative to ffcall</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#GNUMP">gmp</a></td>
<td class="req">Optional</td>
<td class="stab">3.1.1</td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/gmp/gmp-4.1.tar.gz">4.1</a></td>
<td>Arbitrary precision arithmetic</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.EXTENSIONS">guile</a></td>
<td class="req">For guile scripting</td>
<td class="stab">1.4</td>
<td class="unst"><a href="ftp://ftp.gnu.org/pub/gnu/guile/guile-1.6.0.tar.gz">1.6</a></td>
<td><i>Scheme</i> language interpreter</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#SSL">openssl</a></td>
<td class="req">Recommended</td>
<td class="stab">0.9.6b</td>
<td class="unst"><a href="http://www.openssl.org/source/openssl-0.9.6j.tar.gz">0.9.6j</a></td>
<td>SSL and TSL support</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#TIFF">libtiff</a></td>
<td class="req">Required</td>
<td class="stab">3.4036</td>
<td class="unst"><a href="ftp://ftp.remotesensing.org/pub/libtiff/tiff-v3.5.7.tar.gz">3.5.7</a></td>
<td>TIFF image support</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#XML">libxml</a></td>
<td class="req">Required</td>
<td class="stab">2.3.0</td>
<td class="unst"><a href="ftp://ftp.gnome.org/pub/GNOME/sources/libxml2/2.4/libxml2-2.4.24.tar.bz2">2.4.24</a></td>
<td>For XML property lists and docs</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#SOUND">audiofile</a></td>
<td class="req">Recommended</td>
<td class="stab">0.2.3</td>
<td class="unst"><a href="ftp://oss.sgi.com/projects/audiofile/download/audiofile-0.2.3.tar.gz">0.2.3</a></td>
<td>Program interface to digital audio formats</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#WINDOWMANAGER">WindowMaker</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="http://windowmaker.org/pub/source/release/WindowMaker-0.80.2.tar.bz2">0.80.2</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Window manager &amp; desktop</td>
</tr>

</tbody>

</table>


<h2>GNUstep Core <small>(see <i><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.GNUSTEP">Building GNUstep</a></i> in Build Guide)</small></h2>

<p>All GNUstep users should install the following items:</p>

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
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.GNUSTEP">GNUstep Make</a></td>
<td class="req">Required</td>
<td class="stab"><a href="core/gnustep-make-1.6.0.tar.gz">1.6.0</a></td>
<td class="unst"><a href="core/gnustep-make-1.7.3.tar.gz">1.7.3</a></td>
<td>Makefile Package</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.GNUSTEP">GNUstep Base</a></td>
<td class="req">Required</td>
<td class="stab"><a href="core/gnustep-base-1.6.0.tar.gz">1.6.0</a></td>
<td class="unst"><a href="core/gnustep-base-1.7.3.tar.gz">1.7.3</a></td>
<td>Foundation</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.GNUSTEP">GNUstep GUI</a></td>
<td class="req">Required</td>
<td class="stab"><a href="core/gnustep-gui-0.8.5.tar.gz">0.8.5</a></td>
<td class="unst"><a href="core/gnustep-gui-0.8.9.tar.gz">0.8.9</a></td>
<td>Graphical user interface class library</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.GNUSTEP">GNUstep Backend</a></td>
<td class="req">Required</td>
<td class="stab"><a href="core/gnustep-back-0.8.5.tar.gz">0.8.5</a></td>
<td class="unst"><a href="core/gnustep-back-0.8.9.tar.gz">0.8.9</a></td>
<td>Generic back-end</td>
</tr>

</tbody>

</table>

<h2>Additional Libraries/Tools <small>(see <i><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.EXTENSIONS">Building Extensions</a></i> in Build Guide)</small></h2>

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
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.EXTENSIONS">Renaissance</a></td>
<td class="req">Optional</td>
<td class="stab"><div class="cent">-</div></td>
<td class="unst"><a href="http://www.gnustep.it/Renaissance/Download/Renaissance-0.6.0.tar.gz">0.6.0</a></td>
<td>Multi-platform UI layout</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.EXTENSIONS">GNUstep Guile</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="libs/gnustep-guile-1.1.2.tar.gz">1.1.2</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Interactive development system</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#BUILDING.EXTENSIONS">StepTalk</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="libs/StepTalk-0.5.3.tar.gz">0.5.3</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Scripting language support</td>
</tr>

<tr>
<td class="src"><a href="http://www.gnustep.it/jigs/">JIGS</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnustep.it/jigs/Download/jigs-1.5.4.tar.gz">1.5.4
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Java bridge</td>
</tr>

<tr>
<td class="src"><a href="http://www.fsf.org/software/gnu3dkit/gnu3dkit.html">Geometry Kit</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.gnu.org/software/gnu3dkit/GeometryKit-0.7.5.src.tar.gz">0.7.5</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Part of 3D Kit</td>
</tr>

<tr>
<td class="src">gdl2</td>
<td class="req">Optional</td>
<td class="stab"><div class="cent">-</div></td>
<td class="unst"><div class="cent">-</div></td>
<td>Database Library</td>
</tr>

<tr>
<td class="src"><a href="http://www.stupid-design.com/martin/GNUstep/GNUMail.app/GNUMail.app-Installation.html">Pantomime</a></td>
<td class="req">Optional</td>
<td class="stab"><a href="http://www.collaboration-world.com/cgi-bin/collaboration-world/project/download.cgi/Pantomime-1.1.0pre2.tar.gz?rid=77">1.1.0pre2</a></td>
<td class="unst">-</td>
<td>GNUMail framework - see also <a href="http://www.collaboration-world.com/pantomime">description</a></td>
</tr>
</tbody>

</table>

<h2>GNUstep Developer Tools</h2>

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
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#GNUSTEP.WORKSPACE">Gorm</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="dev-apps/Gorm-0.3.0.tar.gz">0.3.0
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Graphical interface builder</td>
</tr>

<tr>
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#GNUSTEP.WORKSPACE">Project Center</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="dev-apps/ProjectCenter-0.3.0.tar.gz">0.3.0
</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Project developer</td>
</tr>

<tr>
<td class="src">nib2gmodel</td>
<td class="req">Optional</td>
<td class="stab"><a href="dev-apps/nib2gmodel-0.8.6.tar.gz">0.8.6</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Converts nibs to gmodel</td>
</tr>

<tr>
<td class="src">OpenStep 2GNU Converter</td>
<td class="req">Optional</td>
<td class="stab"><a href="contrib/Openstep2GNUConverter-20000717.tar.gz">20000717</a></td>
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
<td class="stab"><a href="test/gnustep-tests-1.7.0.tar.gz">1.7.0</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Regression tests</td>
</tr>

<tr>
<td class="src">Examples</td>
<td class="req">Optional</td>
<td class="stab"><a href="core/gnustep-examples-0.9.7.tar.gz">0.9.7</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>GUI examples</td>
</tr>

<tr>
<td class="src">Foundation Extensions</td>
<td class="req">Not recommended</td>
<td class="stab"><a href="libs/extensions-0.8.6.tar.gz">0.8.6</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Additional base classes</td>
</tr>

</tbody>

</table>

<h2>GNUstep Environment <small>(see <i><a href="http://documents.made-it.com/GNUstep/buildguide.html#GNUSTEP.WORKSPACE">GNUstep environment</a></i> in Build Guide)</small></h2>

<p>If you are an end-user who intends to use GNUstep to manage files, run applications etc., please install the items you require from the following list:</p>

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
<td class="src"><a href="http://documents.made-it.com/GNUstep/buildguide.html#GNUSTEP.WORKSPACE">GWorkspace</a></td>
<td class="req">Recommended</td>
<td class="stab"><a href="http://www.gnustep.it/enrico/gworkspace/gworkspace-0.4.1.tar.gz">0.4.1</a></td>
<td class="unst"><a href="http://www.gnustep.it/enrico/gworkspace/gworkspace-0.5.2.tar.gz">0.5.2</a></td>
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
<td class="stab"><a href="usr-apps/">Various</a></td>
<td class="unst"><div class="cent">-</div></td>
<td>Other User Applications</td>
</tr>

</tbody>

</table>

<p class="cont"><span class="cont">Contact: <a href="mailto:webmasters@gnustep.org">webmasters@gnustep.org</a></span></p>

</body>

</html>
