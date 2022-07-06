# docker/mysql/Dockerfile
FROM mysql:8.0.27

COPY my.cnf /etc/mysql/conf.d/my.cnf

#RUN echo "Include /etc/mysql/conf.d/my.cnf" \
#    >> /etc/mysql/conf.d/mysql.cnf

RUN mkdir /var/lib/mysql/log && chmod 777 /var/lib/mysql/log
COPY umspsdb.sql /regdb.sql
RUN chmod -R 777 /regdb.sql
