#!/Applications/XAMPP/xamppfiles/bin/perl
##!/bin/perl

use CGI;

$form=new CGI;

$f_fname=CGI::escapeHTML($form->param("f_fname"));
$f_sname=CGI::escapeHTML($form->param("f_sname"));
$f_email=CGI::escapeHTML($form->param("f_email"));
$f_icucode=CGI::escapeHTML($form->param("f_icucode"));
$f_rating=CGI::escapeHTML($form->param("f_rating"));
$f_email=CGI::escapeHTML($form->param("f_email"));
$f_text=CGI::escapeHTML($form->param("f_text"));

print "Content-Type: text/html\n\n";

if($f_fname)
{
	open (FILE, ">>players.dat") or die ("Cannot open players file");
	print FILE localtime()."\n";
	print FILE "$f_fname\n";
	print FILE "$f_sname\n";
	print FILE "$f_email\n";
	print FILE "$f_icucode\n";
	print FILE "$f_rating\n";
	print FILE "$f_text\n";
	print FILE "·\n";
	close(FILE);
}

print '<html>';
print '<head>';
print '<meta name="author" content="Conor Gilmer">';
print '<title>Register for a Chess Competition</title>';
print '<link href="css/chess.css" rel="stylesheet" type="text/css">';
print '</head>';

print '<body>';
print '&nbsp;<p>';

print "<h1>Register for a Chess Competition</h1>";

print "Record players details!";

open (FILE, "<players.dat") or die ("Cannot open players file");

while(!eof(FILE)){
	chomp($date=<FILE>);
	chomp($email=<FILE>);
	chomp($fname=<FILE>);
	chomp($sname=<FILE>);
	chomp($icuccode=<FILE>);
	chomp($rating=<FILE>);

	print "<p class=small>$date";
	print "<table border=0 cellpadding=4 cellspacing=1>";	
	print "<tr><td class=h>";
	print "<img src=img/blank.gif width=250 height=1><br>";
	print "Name: $fname $sname";
	print "</td><td class=h>";
	print "<img src=img/blank.gif width=250 height=1><br>";
	print "E-Mail: $email";
	print "</td></tr>";
	print "<tr><td class=d colspan=2>";
	while(1==1){
		chomp($line=<FILE>);
		if($line eq '·' || eof(FILE)) {
			last;
		}
		print "$line<br>";
	}
	print "</td></tr>";
	print "</table>";	
} 
close (FILE);

print "<p>Add entry:";

print "<form action=reg.pl method=get>";
print "<table border=0 cellpadding=0 cellspacing=0>";
print "<tr><td>E-Mail:</td><td> <input type=text size=30 name=f_email></td></tr>";
print "<tr><td>Firstname:</td><td><input type=text size=30 name=f_fname></td></tr>";
print "<tr><td>Surname:</td><td><input type=text size=30 name=f_sname></td></tr>";
print "<tr><td>ICU Code:</td><td><input type=text size=30 name=f_icucode></td></tr>";
print "<tr><td>Rating:</td><td><input type=text size=30 name=f_rating></td></tr>";
#print "<tr><td>Text:</td><td> <textarea type=text rows=3 cols=30 name=f_text></textarea></td></tr>";
print "<tr><td></td><td><input type=submit border=0 value=\"WRITE\"></td></tr>";
print "</table>";
print "</form>";


print "<center>Copyright &copy; Blah Blah</center>";
print "</body>";
print "</html>";
