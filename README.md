# Suzy
Suzy is a php framework using object-oriented programming and the MVC architectural pattern

#Apache configuration
In the vhost file :
```
<VirtualHost *:80>
        DocumentRoot "/srv/http/Suzy/public"
        ServerName suzy.dev

        <Directory /srv/http/Suzy>
                Options FollowSymLinks
                AllowOverride all
        </Directory>

        ErrorLog "/var/log/httpd/suzy-error.log
</VirtualHost>
```
