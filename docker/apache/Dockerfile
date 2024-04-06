# docker/apache/Dockerfile
FROM httpd:2.4.51

USER root

COPY web-server-mysql-3.apache.conf /usr/local/apache2/conf/web-server-mysql-3.apache.conf
COPY auditStart.sh /usr/local/apache2/auditStart.sh
RUN chmod -R 777 /usr/local/apache2/auditStart.sh

RUN echo "Include /usr/local/apache2/conf/web-server-mysql-3.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

RUN apt-get update
#RUN apt install auditd -y

#RUN chmod -R 777 /etc/audit
#RUN chmod -R 777 /sbin/auditd
#RUN service auditd start
#RUN ufw allow 'Apache'

RUN mkdir /usr/local/apache2/log
RUN chmod -R 777 /usr/local/apache2/log

