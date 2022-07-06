```
binary
├── apache
└── mysql
docker
├── apache
│   ├── auditStart.sh
│   ├── Dockerfile
│   └── web-server-mysql-3.apache.conf
├── mysql
│   ├── Dockerfile
│   ├── my.cnf
│   └── umspsdb.sql
└── php
    ├── auditStart.sh
    ├── Dockerfile
    └── myphpSettings.conf

3 directories, 9 files
```

1. To Build the image: 
`sudo docker-compose build`
1. To Run containers:
`sudo docker-compose up`
1. To Run a container
`sudo docker exec -it containername bash`
1. To Stop the containers:
`sudo docker-compose down`
    
### To Test the Application:
## Once the containers are up and running
    * Browse in browser: [http://localhost/login/login.php](http://localhost/login/login.php) or `wget http://localhost/login/login.php`
    * Mysql phpmyadmin: [http://localhost:8085/index.php](http://localhost:8085/index.php)

    
    
 
