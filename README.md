# Dockerfiles & images

## PHP
**Step1:** `docker build -t php:8.2 .` <br>
**Step2:** `docker run -d -p 8000:80 php:8.2` <br>
 (or) <br>
**Step1:** `docker pull karthimkk/php:8.2` <br>
**Step2:** `docker run -d -p 8000:80 karthimkk/php:8.2` <br>

## MYSQL

**Step1:** `docker build -t mysql:8.4 .` <br>
**Step2:** `docker run --name mysql -d -e MYSQL_ROOT_PASSWORD=P@sssw0rd mysql:8.4` <br>
**Step3:** `docker exec -it mysql bash` <br>
**Step4:** `mysql -u root -p` <br>
 (or) <br>
**Step1:** `docker pull karthimkk/mysql:8.4` <br>
**Step2:** `docker run -d -p 8000:80 karthimkk/mysql:8.4` <br>

## React

### 1. React
**Step1:** `docker build -t react:18 .` <br>
**Step2:** `docker run --name=react -d -p 8000:3000 react:18` <br>

### 2. React with nginx
**Step1:** `docker build -f BuildDockerfile -t react-nginx:18 .` <br>
**Step2:** `docker run --name=react-nginx -d -p 8000:80 react-nginx:18` <br>

## Vue
**Step1:** `docker build -t vue:3.0 .` <br>
**Step2:** `docker run -d -p 8000:80 vue:3.0` <br>

# Compose files

**Step1:** `docker compose build` <br>
**Step2:** `docker compose up` <br>

## Files:
 - PHP-MYSQL
 - PHPMyAdmin
 - Laravel