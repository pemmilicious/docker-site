# Getting Started

## Prerequisites

- [VirtualBox](https://www.virtualbox.org)
- [Vagrant](https://www.vagrantup.com)
- [Git](https://git-scm.com)
- [Docker](https://www.docker.com)

## Recommended

[Github Desktop](https://desktop.github.com)

It is recommended that you use Github Desktop to manage local repositories for Development. Github is used to retrieve the latest live version of the theme as well as the local development environment **'Docker'**.

## Installation

Once Prerequisites are installed, Git bash into the docker-site and run:
- `docker-machine start default` will start the virtualbox (Make sure VirtualBox is running).
- `docker-compose up -d` will start the docker site, which can be found on http://192.168.99.100:8000. If there is an issue with the compose: Run `docker-compose up` and retrieve the error log.
- to kill the server Run `docker-compose down`.


# Plugins

The development environment and live site rely on the wordpress custom theme **[advanced-custom-fields](https://www.advancedcustomfields.com/)**.

# Usage

**Upon site changes please push docker-site and updated theme to Git hub**

Using the built in WordPress export function, export the theme and pages. Using the advanced-custom-fields tool, export the custom fields. Both exported items need to be imported onto the live website.


# Server Account Information

## MySQL Information
Hostname - localhost

Username - wordpress

Password - password

Database - wordpress

## development Wordpress Settings
Username - admin

Password - PF&N1C)i@y0CuGPy5j

## Deployment Wordpress Settings
Username - admin

Password - password

# Servers

Local Development Server http://192.168.99.100:8000

Staging Environment: [WP-Staging](https://wordpress.org/plugins/wp-staging/)

Deployment Server: http://149.28.177.221

