# docker-lamp
This is a LAMP start point using docker which demonstrates a simple multi-service infrastructure. The mysqli php extension was used for data access and the db service has been tested with MySQL5.x, MySQL8.x and MariaDb10.x

#### 1.) Install Docker.
#### 2.) Clone repo and cd the command prompt there.

#### 3.) Build the project:
```sh
> docker-compose up --build -d
```

#### 4.) To view the project open browser to http://localhost/ on host machine

#### 5.) To unload the project
```sh
> docker-compose down -v
```

