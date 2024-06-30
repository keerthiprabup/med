service mysql start 
sleep 2
mysql < /root/db.sql 
apache2ctl -D FOREGROUND
sleep infinity