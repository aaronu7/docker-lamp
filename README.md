# docker-lamp
This is a LAMP start point using docker which demonstrates a simple multi-service infrastructure. The mysqli php extension was used for data access and the db service has been tested with MySQL5.x, MySQL8.x and MariaDb10.x

1.) Install Docker
2.) Clone repo
3.) Command prompt to the repo directory

#### 3a.) To build the project:
```sh
> docker-compose up --build -d
```

3b.) To view the project open browser to http://localhost/ on host machine
3c.) To unload the project: docker-compose down -v

