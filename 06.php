#!/bin/sh
## PHP5
# date.timezone = America/Edmonton
sudo apt-get install -y php5 php5-cli php5-curl php5-fpm php5-imap php5-intl php5-mcrypt php5-mysqlnd php5-pspell \
&& sudo sed -i.knc_bak 's|;date.timezone =|date.timezone = America/Edmonton|' /etc/php5/fpm/php.ini \
&& sudo service php5-fpm restart 
