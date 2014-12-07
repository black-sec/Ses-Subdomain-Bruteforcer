<!--
Code By Black-sec

Site : www.net-line.ir & Iranhack.org
-->
<!DOCTYPE html>
<html>
 <head>
 <title>SES Subdomain Bruteforcer</title>
 <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
 </head>
<body><br />
<center><img src="logo.png"></center>
<form name="SubDomain" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table class="table">
<tr>
	<td colspan="2" align="center">
	Subdomain Bruteforcer
	</td>
</tr>
<tr>
	<td width="45%" align="center">
	Domain
	</td>
	<td>
	<input type="text" name="Domain" value="test.com" size="15" />
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" name="Scan" value="Scan" />
	</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['Scan']))
{
	$Domain = $_POST['Domain'];
$Subdomains = array(
"about","access","accounting","accounts","admin","administrator","articles","auth","authorize","authorized","backend","backup","backups","beta","billing","blog","catalog","chat","connect","controller","cpanel","customers","data","db","dbs","dc","demo","demostration","dev","developers","development","dir","directory","dmz","docs","domain","domaincontroller","domain-controller","download","downloads","edu","email","events","example","examples","exchange","extranet","files","finance","firewall","forum","forums","ftp","ftpd","gallery","gateway","groups","groupwise","guest","help","helpdesk","home","hotspot","images","imail","imap","imap3","imap3d","imapd","imaps","imgs","internal","intranet","irc","ircd","isa","it","jabber","lab","laboratories","laboratory","labs","library","linux","localhost","log","logs","login","logon","logs","mail","mailgate","manager","marketing","media","member","members","mercury","mobile","mssql","music","mysql","net","netmail","news","novell","online","oracle","partners","pcanywhere","pdf","personal","photo","photos","pic","pics","picture","pictures","pix","pop","pop3","p0rn","porn","p0rn0","porno","portal","postgresql","postman","postmaster","private","pr0n","pron","project","projects","proxy","pub","public","remote","reports","research","restricted","r00t","root","router","sales","sample","samples","sandbox","search","secure","secret","server","services","sex","sh3ll","shell","sms","smtp","solaris","sql","squirrel","squirrelmail","ssh","staff","staging","stats","status","su","sun","support","sys","system","test","text","texts","tftp","trade","tunnel","txt","unix","upload","uploads","virtual","vnc","vp","vpn","vpn1","vpn2","vpn3","web","web0","web01","web02","web03","web1","web2","web3","webadmin","weblog","webmail","webmaster","webmin","win","windows","www","www0","www01","www02","www03","www1","www2","www3","wwwdev","xxx"
);
	foreach($Subdomains as $Subdomain) 
	{
		$Check = @fsockopen("$Subdomain.$Domain", 80);
		
		if($Check)
		{
			echo "<font color='red'>$Subdomain.$Domain Found!</font><br />";
		}
	}
}
?>
</body>
</html>
