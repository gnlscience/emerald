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
3. php bin/console doctrine:migrations:migrate (will create item table)
4. cd ~/Desktop && php bin/console server:start
5. Browse localhost/item
6. Keep fingers crossed
7. If this fails try the docker installation

If 3 fails try creating the table in the db with the below sql

CREATE TABLE item (
    id INT AUTO_INCREMENT NOT NULL, 
    name VARCHAR(255) NOT NULL, 
    quantity INT NOT NULL, 
    PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB')



