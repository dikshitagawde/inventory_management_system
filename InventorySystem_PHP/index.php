- [ ] Goto lightsail :- https://lightsail.aws.amazon.com/
- [ ] Create an instance
- [ ] Check newly created instance at https://lightsail.aws.amazon.com/ls/webapp/home/instances
- [ ] Press that icon to connect via SSH
- [ ] To restart server :-  
sudo apachectl restart
- [ ] Main DocumentRoot: /opt/bitnami/apache/htdocs
cd /opt/bitnami/apache/htdocs
- [ ] Run 
git clone https://github.com/dikshitagawde/inventory-management.git .
- [ ] Check sudo cat ~/bitnami_credentials  for password
- [ ] Then run sudo nano /opt/bitnami/apache/conf/bitnami/phpmyadmin.conf
`sudo nano /opt/bitnami/apache/conf/bitnami/phpmyadmin.conf `
- [ ] Replace Require local to Require all granted