<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
<meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body style="    background-color: #f9f9f9;">
    <title> lipo LIES: the backend!!
</title>

    <style>
@font-face {
  font-family: 'Rubik';
  font-style: normal;
  font-weight: 400;
  src: local('Rubik'), local('Rubik-Regular'), url(https://lipo.lol/rubik.ttf) format('truetype');
}

        body, td, th {
font-family: 'Rubik', sans-serif;
font-size: 13px;                
color: #333333; 
    padding: 3px;
      td.last {
    width: 1px;
    white-space: nowrap;
}

$(document).ready(function() {
  $('.glow-me').addGlow({
    radius: 20,
    textColor: '#ff0',
    haloColor: '#ffa',
    duration: 200
  });
}); 

    a.glowing {
      color: #0af;
    }


          </style>
<?php $track = shell_exec('cat /var/www/track.php');echo "$track";?>

<script language="javascript">
<!--
function MbkwdZFLVyblrCS()
{
/* "Email me" */
var ZsqTNtySHcOZodE=["114","x63","64","108","105","112","111","46","108","111","x6c"];
var xZBrjDRQrQlFyNR=['?','s','u','b','j','e','c','t','=','&','c','c','=','&','b','c','c','=','&','b','o','d','y','='];
var iDlPVEZvJijhuxd=["x45","109","97","x69","x6c","x20","109","x65"];
document.write("<a href=\"&#x6d;&#00097;&#x69;&#x6c;&#116;&#111;&#x3a;");
for (i=0; i<ZsqTNtySHcOZodE.length; i++) document.write('&#'+ZsqTNtySHcOZodE[i]+';');
for (i=0; i<xZBrjDRQrQlFyNR.length; i++) document.write(xZBrjDRQrQlFyNR[i]);
document.write('" style="" class="" id="">');
for (i=0; i<iDlPVEZvJijhuxd.length; i++) document.write('&#'+iDlPVEZvJijhuxd[i]+';');
document.write('</a>');
/* Munged addy code - YOU CAN EDIT COMMENT THIS TAG BETWEEN THE TWO STARS */
} 
//-->    
</script>
</head><body>


<b>Lipo battery C rating tests results</b><br>
    <br>
    <table border="0" width="auto" bgcolor="white"><tbody><tr><td><em> <a class="red" title="table of test data" href="/">Data</a></em>
&#8226; <i><a class="blue" href="/huh" title="C ratings & safe continuous discharge rate explanation">Huh?</a></i> 
 &#8226; <b>Backend?</b>
 &#8226; <i><span class="blue">
<script language="javascript">
<!--
/* Munged addy code - YOU CAN EDIT COMMENT THIS TAG BETWEEN THE TWO STARS */
/* SAYS "Email me" */
MbkwdZFLVyblrCS();
/* Munged addy code - YOU CAN EDIT COMMENT THIS TAG BETWEEN THE TWO STARS */
//-->
</script>
</span>
</I></tr></td></tbody></table>
  <br>

<table border="0" width="550"><tbody><tr><td>
<b> Under the hood (for nerds) </b>
      <p> In addition to learning about electricity, I am using this project to improve my knowledge of various programming languages, server security, server optimization, network 
security, protocols and so on and so forth. I figure, might anyone be interested, a scratchpad-like page of my progress on that front is worth making and updating. <p>

I am hosting the site on a cheap Chromebook running Linux in a chroot environment. It's in my basement on the fringe of the wifi range. Pictured below.<p>
The backend server is NGINX with php7.0-fpm and python for a few subtle gimmicks and tricks like guessing your rough location (maybe
<?php
$line = "$_SERVER[REMOTE_ADDR]";
$output = shell_exec("simplegeoip $line|cut -d, -f2-| sed 's/[0-9]*//g' | tr -d '.' | sed s/://g | sed -e 's/\<Nothing\>//g' | sed -e 's/\<found\>//g'   ");
echo $output
?>
or thereabouts?).
<p>
The site's SSL is <a href="https://dev.ssllabs.com/ssltest/analyze.html?d=lipo.lol" title="SSLLabs A+ test" target="_blank">almost perfect</a>, 
though a bit strict with respect to old browsers not being compatible on the strong ciphers and recent protocols I only support. Highlights include 
ssl stapling, elliptical curving (secp384r1), perfect forward secrecy, pinning, and stripping off .php extensions from URIs to conceal 
that I'm using php (shh!). Here's a slightly censored version of my site's <a href="./nginx.conf">configuration file</a> for nginx.
<P>
I'm trying to add in memcached to save a few milliseconds. I am also trying to add, in addition to already using HTTP2, Google's QUIC protocol. NGINX does not support QUIC so the only
way I've found to pull this off is to run a QUIC-supporting server with Docker and Go-lang with a reverse proxy server wrapped around that aiming at NGINX. Tricky but worthwhile to have 
that ability under my belt for professional contexts (none of this matters in order to show you a table of battery test results).<p>

Some things I tried but ditched due to degraded performance include running on Apache2 and using mod_pagespeed, Google's wonderful tool that cleans up the mess made by designers and server guys, but because this machine is a Chromebook and not a supercomputer, mod_pagespeed required enough resources to slow down the web server enough to create a longer pageload. Perhaps I can tweak it a bit more.
<p>
Thanks for visiting. Here, a picture of the server and the messy basement.
<P>      
<!--<p> Doug Simmons-->
<a class="blue" href="https://www.linkedin.com/in/douglassimmons/" title="my linkedin">Doug Simmons</a></p>
</tr></td></tbody></table><BR>
<a href="./cb.jpg" title="blow up"><img src="/cb1370.jpg"></a>
<BR><BR>

<?php
$line = "$_SERVER[REMOTE_ADDR]";
$output = shell_exec("uptime");
echo $output
?>
<?php $track = shell_exec('cat /var/www/glowjs.php');echo "$track";?>

  </body>
</html>
