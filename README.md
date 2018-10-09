# Description and requirements

Repo contains codebase for [Barbershop](#) WordPress website.

Also serves as a ready to use development environment (start-up and use).

Only requirements are:

- [Docker](https://docs.docker.com/install/)
- [Docker Compose](https://docs.docker.com/compose/install/)

# Usage

### Start

From within the base folder of the repo run the command:

```
docker-compose up
```

This will:

- start a fresh WordPress install (latest [WordPress](https://hub.docker.com/_/wordpress/) version)
- mount the **[/wp-content](./wp-content)** folder (containing necessary plugins/themes) inside it.


### Access
Give the containers a couple mins to start up and you'll have:

- WordPress install @ http://localhost
- MySQL server @ http://localhost:3306

# Development
Main custom development should be done within the local WordPress theme directory, which sits at:

**[/wp-content/themes/barbershop](./wp-content/themes/barbershop)**

The theme is based on [Sage](https://roots.io/sage/) starter theme and you can see its documentation and 
development instructions in the [README](https://github.com/eduwass/barbershop/blob/master/wp-content/themes/barbershop/README.md)


# Deployment

- I have a copy of this repo hosted on a [Vultr](http://vultr.com) VPS as a staging environment
- Code changes can be pushed/pulled to the server directly via SSH Git
- For database changes I'm using: [wp-sync-db](https://github.com/wp-sync-db/wp-sync-db)