# docker-lamp
This is a LAMP start point using docker which demonstrates a simple multi-service infrastructure. The mysqli php extension was used for data access and the db service has been tested with MySQL5.x, MySQL8.x and MariaDb10.x.

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

