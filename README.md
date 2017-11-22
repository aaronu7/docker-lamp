# docker-lamp
This is a LAMP start point using docker which demonstrates a simple multi-service infrastructure.

The mysqli php extension was used for data access and the db service has been tested with MySQL5.x, MySQL8.x and MariaDb10.x.

docker-compose.yml references the following assets:
 - DockerfileWeb is used to build the "web" service.
 - DockerfileDb is used to build the "db" service.
 - init.sql is used by the "db" service to seed the initial database.
 - /www/ is volume mapped by the "web" service for the hosted web app.

During the build process seed data is auto populated using the init.sql file. If data persistance if enabled using volume mapping (commented out by default in the compose file) then the data is ONLY seeded  during the first build process.

#### 1.) Install Docker.
#### 2.) Clone repo and cd the command prompt there.

#### 3.) Build the project and launch in background mode:
```sh
> docker-compose up --build -d
```

#### 4.) To view the project open browser to http://localhost/ on host machine

#### 5.) To unload the project
```sh
> docker-compose down -v
```

