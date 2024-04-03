# Laradock(Laravel)

This is a laravel project that runs by laradock.


## Getting Started

-------------------------

Follow the instructions below to set up and run **Laradock** on your machine.

### Prerequisites

- **Docker Version 19.03.0 or above.** [Docker Setup](https://docs.docker.com/engine/install/ubuntu/)

- **Git** [Git Setup](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

## Setting the stage

-------------------------

1. Clone the **Laradock(Laravel)** repository.


2. Open the **Laradock** directory inside the **Laradock(Laravel)** project.

    ```bash
    cd laradock
    ```


3. Open your **terminal** and enter the following command run the project:
    
    ```bash
    docker-compose up -d nginx workspace php-fpm mysql phpmyadmin
    ```
4. The project is running on **Localhost:90**


-------------------------

## Setting the Port

-------------------------
**If there are any port issue**

1. After running the project if you are facing any prot issues then you will need to address for which perticular service the issue is being raised for. <br>For Example: If you want to use nginx and you can not connect the 80 port then you have to go to the nginx diretory which is on the laradock directory and you have to **Expose 90** instead of 80.


2. Then on yml file you have check if the port of the particular service is forwarded or not. <br>For Example: nginx is forwarded to: "${GITLAB_HOST_HTTP_PORT}" vairable.

3. If forwarded then go to the .env file and search for the variable and update the value of the variable by the exposed value. <br>For Example: NGINX_HOST_HTTP_PORT=90

-------------------------



