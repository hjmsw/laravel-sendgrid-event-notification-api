# SendGrid Event API

## Description

Consumes [SendGrid webhook events](https://sendgrid.com/docs/API_Reference/Event_Webhook/event.html)
and makes them available via an API interface.

## Installation

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require hjmsw/sendgrid-event-api
```

Database migrations are included in ```database/migrations```, to run them, execute:

```bash
$ php artisan migrate
```

## License

This package is licensed under [The MIT License (MIT)](LICENSE).