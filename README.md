# TiniAPI - An example of an API to be documented

TiniAPI is a basic non-finished REST API to be used to receive and send messages.

## Installation

**Prerequisites:**

- PHP 8.2
- PHP-FPM
- PHP MySQL extension
- MySQL
- Nginx

Clone the present repo into your webroot and set up correct rights

```shell
git clone https://github.com/st0omp/TinyAPI.git /var/www/html/tinyapi
sudo chown -R www-data:www-data /var/www/html/tinyapi
```

Run composer install

```shell
cd /var/www/html/tinyapi && sudo -u www-data composer install
```

You can now set up nginx

```
server {
         listen       80;
         root         /var/www/html/tinyapi;

         access_log /var/log/nginx/access.log;
         error_log  /var/log/nginx/error.log error;
         index index.html index.htm index.php;

         location / {
                      try_files $uri $uri/ /index.php$is_args$args;
         }

         location ~ \.php$ {
            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            fastcgi_pass unix:/var/run/php8.2-fpm-wordpress-site.sock;
            fastcgi_index index.php;
            include fastcgi.conf;
    }
}
```

Relaunch daemon and you're good to go

```shell
# On debian
systemctl restart nginx
systemctl restart php8.2-fpm
```

#### Troubleshooting

If you experience any problem concerning rights on files, be sure tinyapi files owner is www-data. For MySQL, more information will come when it's implemented.

# Licence

All the files in these repositories are MIT Licensed.
