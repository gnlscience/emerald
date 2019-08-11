#emerald
## Installation Steps Using docker
1. Clone repository
2. cd emerald
3. docker-compose build
4. docker-compose up -d
5. docker exec -it sf4_php bash
6. cd sf4
7. uncomment the docker db config and comment out emerald's config in .env
8. composer install
9. php bin/console doctrine:migrations:migrate
10. exit docker container
11. mkdir public/uploads
12. chmod -R 755 public/uploads


## Hopefully the below will work with emerald's enviroment as per test spec
1. Clone repository
2. Copy source files to /home/user/Desktop
3. cd ~/Desktop && php bin/console server:start
4. Browse localhost/item
5. Keep fingers crossed
6. If this fails try the docker installation





