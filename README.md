![build](https://github.com/YannPl/yannpl-me/actions/workflows/build.yml/badge.svg)

# [YannPl.me](https://yannpl.me)

This is the source code for my personal website (Not live yet). It is built using Laravel, Livewire, and Tailwind CSS.

## Installation

1. Clone the repository
2. Init .env file `cp .env.example .env`
2. Run `make init`
3. Run `make up` or `npm run dev` to watch assets

## Development

- Use Laravel Herd or php.new to quickly setup a local development environment.
- The default database is SQLite to provide a quick setup. You can change it in the `.env` file.
- Husky is automatically installed with `make init` to run static analysis tools before each commit.

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
