![build](https://github.com/YannPl/yannpl-me/actions/workflows/build.yml/badge.svg)

# [YannPl.me](https://yannpl.me)

This is the source code for my personal website (Not live yet). It is built using Laravel, Livewire, and Tailwind CSS.

## Installation

- Clone the repository
- Init .env file `cp .env.dev .env`
- Make sure you have **Docker** installed locally
- Make sure you have a recent version of **node** and **npm** installed locally (>20.0)

### Setup Using Docker
- Configure the `sail` alias in your `.bashrc` or `.zshrc` file
```bash
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
- Run `sail up` or `sail up -d` to build the docker containers
- Then, to init everything needed for the app, run `make init`


## Development

- The default database is mysql, because we have a docker-compose file that runs a mysql container.
- Husky is automatically installed with `make init` to run static analysis tools before each commit.

### Start and stop the development server
    
```bash
make up # Start the server & watch assets build
make down # Stop the server
```

### Reset the database and seed

```bash
make reset
```

### Run tests

```bash
make test
```

### Run static analysis

- Run all static analysis tools:
```bash
make analyse
```

- Or run separately:
```bash
make phpstan
make pint
```
