<?php

require "include/connect.inc.php";

/*

 PLIST in Datei schreiben so dass sie NSDictionary lesen kann
 
 arguments:
	since="2005-12-12"		filter entries older than date
	rom=xxx					filter by ROM
	appid=xxx				specified app only
 
 result is an NSArray filled with NSDictionaries where database columns are the keys
 
*/
header("Content-Encoding: text/xml");
header("Cachecontrol: no-transform", false);
?><?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//GNUstep//DTD plist 0.9//EN" "http://www.gnustep.org/plist-0_9.xml">
<plist version="0.9">
<array>
<?php // make propertly list of requested (new) applications in database
$query="select *, DATE_FORMAT(updated, '%e %b %Y') as upd from ${DB_TABLE}";
$query.=" where approved=1";
if($_GET['rom'])
	$query.=" and rom=".quote($_GET['rom']);
if($_GET['appid'])
	$query.=" and id=".quote($_GET['appid']);
if($_GET['since'])
	$query.=" and updated >= ".quote($_GET['since']);
$query.=" order by updated desc";
$query.=" limit 100";
// echo $query;
$result=query($query);

	$translate=array(
					 "name" => "CFBundleName",
					 "version" => "CFBundleShortVersion",
					 "description" => "IFPkgDescriptionDescription",
					 "downloadurl" => "IFPkgFlagPackageLocation",
					 /* map
	 
	 added = "2006-12-19 19:12:43";
	 approved = 1;
	 author = "A. Junghans, H. N. Schaller";
	 category1 = Runtime;
	 downloadurl = "http://www.dsitri.de/download/AJZaurusUSB-0.5.3.tgz";
	 homepageurl = "http://www.dsitri.de/wiki.php?page=AJZaurusUSB";
	 id = 4436;
	 license = GPL;
	 maturity = alpha;
	 model = "PowerPC and Intel Macs";
	 price = "0.00";
	 rom = "MacOS X";
	 screen0 = 1;
	 sourceurl = "http://www.dsitri.de/download/AJZaurusUSB-0.5.3-src.tgz";
	 summary = "MacOS X Ethernet over USB Driver for Zaurus and other handheld devices";
	 upd = "12 Oct 2007";
	 updated = "2007-10-12 13:22:08";
	 views = 630;

					to

					 NSString *IFMajorVersion=@"IFMajorVersion";
					 NSString *IFMinorVersion=@"IFMinorVersion";
					 NSString *IFPkgBuildDate=@"IFPkgBuildDate";
					 NSString *IFPkgBuildVersion=@"IFPkgBuildVersion";
					 NSString *IFPkgFlagAuthorizationAction=@"IFPkgFlagAuthorizationAction";
					 NSString *IFPkgFlagBackgroundAlignment=@"IFPkgFlagBackgroundAlignment";
					 NSString *IFPkgFlagBackgroundScaling=@"IFPkgFlagBackgroundScaling";
					 NSString *IFPkgFlagComponentDirectory=@"IFPkgFlagComponentDirectory";
					 NSString *IFPkgFlagDefaultLocation=@"IFPkgFlagDefaultLocation";
					 NSString *IFPkgFlagFollowLinks=@"IFPkgFlagFollowLinks";
					 NSString *IFPkgFlagInstalledSize=@"IFPkgFlagInstalledSize";
					 NSString *IFPkgFlagInstallFat=@"IFPkgFlagInstallFat";
					 NSString *IFPkgFlagIsRequired=@"IFPkgFlagIsRequired";
					 NSString *IFPkgFlagOverwritePermissions=@"IFPkgFlagOverwritePermissions";
					 NSString *IFPkgFlagRootVolumeOnly=@"IFPkgFlagRootVolumeOnly";
					 NSString *IFPkgFlagPackageList=@"IFPkgFlagPackageList";
					 NSString *IFPkgFlagPackageLocation=@"IFPkgFlagPackageLocation";		// subdict in IFPkgFlagPackageList array
					 NSString *IFPkgFlagPackageSelection=@"IFPkgFlagPackageSelection";	// subdict in IFPkgFlagPackageList array
					 NSString *IFPkgFormatVersion=@"IFPkgFormatVersion";
					 NSString *IFPkgHideSubpackages=@"IFPkgHideSubpackages";
					 NSString *IFPkgPayloadFileCount=@"IFPkgPayloadFileCount";
					 NSString *IFPkgRequiredSLA=@"requiredSLA";
					 NSString *IFPkgDescriptionDescription=@"IFPkgDescriptionDescription";
					 NSString *IFPkgDescriptionTitle=@"IFPkgDescriptionTitle";
					 NSString *IFPkgDescriptionVersion=@"IFPkgDescriptionVersion";
					 */
					 );

while($row=mysql_fetch_array($result))
{
	echo "<dict>\n";
	reset($row);
	while(list($key, $value) = each($row)) 
		{
		if(is_numeric($key))
			continue;	// skip 1,2,3 etc.
		if(!$value)
			continue;	// omit empty fields
		if($translate[$key])
			$key=$translate[$key];
		echo "<key>".htmlspecialchars($key, ENT_NOQUOTES)."</key>\n";
		echo "<string>".htmlspecialchars($value, ENT_NOQUOTES)."</string>\n";
		} 
	echo "</dict>\n";
}
mysql_free_result($result);

?>
</array>
</plist>