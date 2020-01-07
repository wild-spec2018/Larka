<VirtualHost *:80>

	ServerAdmin admin@larka.com
    ServerName larka.loc
    ServerAlias www.larka.loc
	DocumentRoot /var/www/larka.loc/public
	<Directory /var/www/larka.loc/public>
            Options Indexes FollowSymlinks
            AllowOverride All
            Require all granted
    </Directory>
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>



# new project from Serega
# https://github.com/speresypkin/laraveltest
