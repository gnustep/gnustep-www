<?php

require "include/connect.inc.php";		// connect to database
require "include/login.inc.php";		// login manager

/*
FIXME:
 - remember login: dologin(..., ..., 999999)
 */


if($_GET['cmd'] == "logout")
{
	dologout();
	include "include/header2.inc.php";
	echo "<b>Good bye.</b>";
	include "include/footer.inc.php";
	exit;
}

if($_GET['cmd'] == "approve" && $_GET['email'] && $_GET['code'])
{
	$email=$_GET['email'];
	$code=$_GET['code'];
	// this one either works or fails...
	enableuser($email, $code);
	include "include/header2.inc.php";
	echo "<b>Your account has been enabled. You can login now.</b>";
	$_POST['email']=$email;
//	include "include/footer.inc.php";
//	exit;
}

if($_GET['cmd'] == "create")
{
	$dest=$_POST['email'];
	// look if already defined!!! - or we can overwrite an existing record
	$passwd=$_POST['passcode'];
	include "include/header2.inc.php";
	// should check that dest has one @ and at least one . in it
	if($dest && $passwd)
		{
		$code=createuser($dest, $passwd);
		$subject="$TITLE - Account approval";
		$body="Thank you very much for registering the account $dest for access to $TITLE.\n\n";
		$body.="To finally enable your account, please follow this link: ";
		$body.="$URL/login.php?cmd=approve&email=".htmlentities($dest)."&code=".htmlentities($code)."\n\n";
		$body.="If you did not want to register (again), please ignore and delete this mail.";
		sendmail($dest, $subject, $body);
		echo "<b>You have been registered and an email has been sent to your e-mail address.<br/>Please follow the link in the mail to finally enable your account.</b>";
		include "include/footer.inc.php";
		exit;
		}
	else
		{ // allow to retype
		echo "<b>You must enter an email address and choose a password.</b>";
		$_GET['cmd']="reregister";
		}	
}

if($_GET['cmd'] == "login" && $_POST['email'] && $_POST['passcode'])
{
	if(dologin($_POST['email'], $_POST['passcode']))
		{
		include "include/header2.inc.php";
		echo "<b>Successsfully logged in for approx. 1 hour.</b>";
		include "include/footer.inc.php";
		exit;
		}
}
	if($_GET['cmd'] == "approve")
		;
	else if($_GET['cmd'] == "reregister")
		$_GET['cmd']="register";
	else if($_GET['cmd'] == "register")
		{
		include "include/header2.inc.php";
		echo "<b>Please use your e-mail address as the account name and choose a (new) password.</b>";
		}
	else
		{
		include "include/header2.inc.php";
		echo "<b>Please log in with your e-mail address and password. To change the password, simply re-register.</b>";
		}
	?>
	<form method="POST" action="<?php
	if($_GET['cmd'] == "register")
		echo "login.php?cmd=create";
	else
		echo "login.php?cmd=login";
	?>" accept-charset="iso-8859-1">
	<table align=left>
	<tbody>
	<tr>
	<td><B>E-Mail:</B></TD>
	<td><INPUT size="30" value="<?echo htmlentities($_POST['email']);?>" name="email"></td>
	</tr>
	<tr>
	<td><B>Password:</B></TD>
	<td><INPUT type="password" size="15" value="" name="passcode"> 
	</td>
	</tr>
	<tr>
<td colSpan=2><INPUT type="submit" value="<?php
if($_GET['cmd'] == "register")
	echo "Register";
else
	echo "Login";
?>" name="submit">  </td>
	</tr>
	</form>
<?php
if($_GET['cmd'] != "register")
{
	?>
<tr>
<td colspan=2>
	<br/>
	<br/>
	If you are not yet registered, you are invited to do so: 
		<a href="login.php?cmd=register">[Register]</a>
	<br/>
	<br/>The benfits are:
		<ul>
		<li>you can add subscriptions and get notified for changes
		<li>you can write comments
		<li>you can apply to become assistant database manager
		</ul>
	To change your password, simply re-register with the same e-mail and a new password.
</td>
</tr>
	<?php
}
?>

<?php
include "include/footer.inc.php";
?>
