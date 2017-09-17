<title>lipo LIES: my nginx.conf</title>
<?php $track = shell_exec('cat /var/www/track.php');echo "$track";?>      
<pre>
#HTTP 301 PERMANENT REDIRECT TO HTTPS, SUBSEQUENTLY SEALED WITH PINNING
	listen 80 default_server;
	listen [::]:80 default_server;
	server_name lipo.lol;
	return 301 https://$host$request_uri;
}

# HTTPS server (%%% = censored)

server {
	listen 443 ssl http2 default_server;
	listen [::]:443 ssl http2 default_server;
        server_name lipo.lol;
        root /%%%%%%%;
	index index.html index.php index.nginx-debian.html;
	gzip off;  # you don't want to use gzip over tls/ssl

	###Encryption/security related###
	ssl on;
	ssl_stapling on;
	ssl_stapling_verify on;
	resolver 8.8.8.8;
        ssl_trusted_certificate /%%%%%%%%%%%%%%%%%%%%%%%.crt;
        ssl_certificate /%%%%%%%%%%%%%%%%%%%%%.crt;
        ssl_certificate_key /%%%%%%%%%%%%%%%.key; 
	ssl_prefer_server_ciphers on;
	ssl_ciphers AES256+EECDH:AES256+EDH:!aNULL;
	ssl_dhparam  /%%%%%%%%%%%%%%%%%.pem; ###4096 bit###	
	ssl_protocols       TLSv1.2;
	ssl_ecdh_curve secp384r1;
	ssl_session_cache shared:SSL:5m;
	ssl_session_timeout 1h;
	add_header Strict-Transport-Security 'max-age=31536000; includeSubDomains';
	add_header X-Frame-Options DENY;
	add_header X-Content-Type-Options nosniff;

### CONCEALING THAT I AM USING PHP BY STRIPPING THE EXTENSIONS OFF URIs ###
location / {
    try_files $uri $uri.html $uri/ @extensionless-php;
    index index.html index.htm index.php;
}

location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
}

location @extensionless-php {
    rewrite ^(.*)$ $1.php last;
}

    location ~ /\.ht {
        deny all;
    }


### MEMCACHED WORK IN PROGRESS
#    location / {
#        set            $memcached_key "$uri?$args";
#        memcached_pass localhost:11211;
#        error_page     404 502 504 = @fallback;
#    }
#    location @fallback {
#        proxy_pass     https://lipo.lol;
#    }


}
