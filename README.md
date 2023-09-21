# Docker Compose Development Environment

## Introduction
This repository contains a `docker-compose.yml` configuration file for setting up a local development environment with MySQL, Apache, and PHP services. This environment is suitable for web application development and provides a complete stack for running PHP-based applications.

## Prerequisites
Before using this configuration, ensure that you have the following prerequisites installed on your system:
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Usage
1. Clone or download this repository to your local machine.

2. Customize Environment Variables:
   - Modify the environment variables in the `docker-compose.yml` file to suit your specific project requirements. Here's what you can customize:
     - `MYSQL_VERSION`: Specify the MySQL image version you want to use. By default, it uses the latest version.
     - `DB_ROOT_PASSWORD`: Set the root password for the MySQL service.
     - `DB_NAME`: Set the name of the MySQL database.
     - `DB_USERNAME`: Set the MySQL username.
     - `DB_PASSWORD`: Set the MySQL user's password.
     - `APACHE_VERSION`: Specify the Apache image version you want to use.
     - `PHP_VERSION`: Specify the PHP image version you want to use.
     - `${PROJECT_ROOT}`: Update this volume path to point to the root of your PHP application code.

3. Start the Services:
   - Open a terminal and navigate to the directory containing the `docker-compose.yml` file.
   - Run the following command to start the services:
     ```
     docker-compose up -d
     ```

4. Access Your Application:
   - After starting the services, you can access your web application in a web browser at `http://localhost:8000`. This will route requests through the Apache web server.

5. Database Access:
   - You can access the MySQL database using the following credentials:
     - Host: `localhost`
     - Port: `3306`
     - Username: `${DB_USERNAME}`
     - Password: `${DB_PASSWORD}`
     - Database: `${DB_NAME}`

6. Stopping the Services:
   - To stop the services and remove the containers, run the following command:
     ```
     docker-compose down
     ```

## Additional Information
- The `docker-compose.yml` file defines three services: `mysql`, `apache`, and `php`, which together provide a local development environment.
- The MySQL service uses the specified version (or the latest version if not specified), creates a database, and sets the root password and other user credentials.
- The Apache service is built using a specified version of the Apache image and depends on both the MySQL and PHP services. It serves web content from the `/var/www/html` directory, which can be customized by updating `${PROJECT_ROOT}`.
- The PHP service is also built using a specified version of the PHP image and shares the same `${PROJECT_ROOT}` volume with the Apache service.
- Two Docker networks, `frontend` and `backend`, are defined to isolate the services based on their roles.

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). See the [LICENSE](licence.txt) file for details.
