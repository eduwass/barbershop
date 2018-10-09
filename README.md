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
- mount the **[/wp-content](./wp-content)** folder (containing necessary plugins/themes/uploads) inside it.


### Access
Give the containers a couple mins to start up and you'll have:

- WordPress install @ http://localhost (u/pw: same as in live site )
- PhpMyAdmin @ http://localhost:8080 (u/pw: wordpress / wordpress )


### Deploy

- Code changes can be pushed/pulled to the server directly via Git using: [WP Engines Git push deployment](https://wpengine.com/git)
- For database changes you can use: [wp-sync-db](https://github.com/wp-sync-db/wp-sync-db)
