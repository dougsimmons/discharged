# discharged
Project to expose battery vendor exaggeration of safe continuous discharge ratings.
Hosting site on Chromebook. :)

https://lipo.lol

![Alt text](https://lipo.lol/temp-github.jpg "testing equipment")

For a rundown of the backend: https://lipo.lol/backend

Censored nginx.conf here: https://lipo.lol/nginx.conf

SSL scores 390/400 A+ on ssllabs: https://dev.ssllabs.com/ssltest/analyze.html?d=lipo.lol

Experimenting with both Varnish and Memcached (presently Varnish)

Converted images to WebP with fallback to jpegs

Added USED battery testing section to front page https://lipo.lol/#used

Sept 25th 17: 

Installed Debian on my main machine (fairly powerful), it's now hosting the site.

Compiled NGINX with Brotli for improved and secure compression as well as ngx_pagespeed, now running with memcached. 

Site scores 100/100 on desktop and mobile with Pagespeed Insights.

Now attempting to get Varnish to drag the site through another NGINX server, and have the NGINX HTTPS server use that as the proxy pass. Not expecting any speed gains but I want to learn Varnish.


To do: 
Add QUIC protocol using Go/docker reverse proxy

Fix memcached

Hobbyist discussions of project:

https://wattflyer.com/forums/showthread.php?t=78891 & https://www.rcgroups.com/forums/showthread.php?2957311-Project-to-expose-C-rating-deceit-w-Wayne-Giles-meter
