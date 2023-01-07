# Inception

The Inception project is a system administration exercise that involves setting up a small infrastructure using Docker. The infrastructure consists of various services, such as NGINX, WordPress, and MariaDB, which must be run in dedicated Docker containers.

## Requirements

To complete the Inception project, you must meet the following requirements:

- Set up the infrastructure in a virtual machine using docker compose.
- Build the Docker images for each service using the provided Dockerfiles. It is forbidden to pull ready-made Docker images or use services like DockerHub, with the exception of Alpine and Debian.
- Set up a Docker container for NGINX with TLSv1.2 or TLSv1.3 only.
- Set up a Docker container for WordPress + php-fpm, installed and configured without nginx.
- Set up a Docker container for MariaDB only without nginx.
- Set up volumes to store the WordPress database and website files.
- Set up a docker network to connect the containers.
- Set up the containers to restart in case of a crash.
