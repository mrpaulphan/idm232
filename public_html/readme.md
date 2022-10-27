# Booking Web App

## Overview

## Getting Started

- Copy `config.example.php` to `config.production.php`
- Create a database on your server
- Import the backup database

### Server Requirements

- PHP 7.4
- mysql
- apache

### Installation

## Local

- Run `make up`

## Git Branching/Workflow

Each task should have a ticket, the branch name should be `issue-{issue#}`

### Master Branch

The `master` branch contains production ready code. Do not commit/merge onto `master` unless the code is ready for production.

### Environment Branches

The `staging` server always has the `staging` branch checked out.

This is an integration branch, which has had any number of feature branches merged in. This branch will **never** be merged into `master`, and should never be committed to directly (only merge commits are allowed).

Periodically, all feature branches will have been merged into `master`, and qa will not have any code that is not on `master`. At this time, the qa branch should be deleted, and a new qa branch should be created from `master`.

## Workflow

- A github issue is create, and development is ready to begin.
- Create a new feature branch off `master`

```
git checkout master
git checkout -b issue-#247
```

- Commit early and often on the feature branch, with descriptive commit messages:

```
git commit -m "issue-#123 update widgets to render on page load"
```

## Deploy

Pushing to `master` will deploy our application to `teamtrestle.org` server. We are using CircleCi to run very complex pipelines efficiently with sophisticated caching, docker layer caching, resource classes for running on faster machines, and performance pricing

### Workflow

1. See Git [Branching/Workflow]() for a full accounting of how features are handled in version control.
2. When the client approves work to go live, create a PR from your feature branch to the `master` branch. Assign an appropriate reviewer.
3. Once approved, do not merge into `master` until you are ready to deploy.
4. When ready to deploy (see note about launch windows above), merge your feature branch into production and deploy.

5. Always perform "smoke tests" on production to ensure that what you deployed 1) didn't bring down the site, and 2) your feature changes are working as expected.

### Production

- Get an approval from client from `staging`
- Set Deployment date
- Submit a PR -> `master` branch
- CircleCI will automatically deploy to production, create a backup to our s3 bucket, and bundle/compile our code.

---

<!--
# junk
### Backend
- TODO: Move to script
- Deploy passport `php artisan passport:keys`



### Frontend
## Shortcuts

### Creating a migration
`docker-compose exec backend php artisan make:migration create_roles_table --create=roles`

**Refresh and Seed**
`docker-compose exec backend php artisan migrate:refresh --seed`
**Reset and Seed**
`docker-compose exec backend php artisan migrate:fresh --seed`

Create personal token
`docker-compose exec backend php artisan passport:client --personal`
Copy keys into .env PASSPORT_PERSONAL_ACCESS_CLIENT_ID PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET

## Clear Cache
docker-compose exec backend php artisan config:cache
docker-compose exec backend php artisan route:clear
docker-compose exec backend php artisan config:clear
docker-compose exec backend php artisan cache:clear -->

<!--
Encryption keys generated successfully.
Personal access client created successfully.
Here is your new client secret. This is the only time it will be shown so don't lose it!

Client ID: 93f76cf9-1085-4302-ba05-cb5bfab0f626
Client secret: iG4k3jXNkAY3cADYLqHM5h0RXk6HnX6i25TVBYKT
Password grant client created successfully.
Here is your new client secret. This is the only time it will be shown so don't lose it!

Client ID: 93f76cf9-30c7-4641-b7e6-75a1ac81b202
Client secret: GGsr5QlwnMRE7GEK9L3JCdp2RbF3SqevxwauMZQO -->
