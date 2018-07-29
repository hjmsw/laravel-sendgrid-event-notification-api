# SendGrid Event API

## Description

A Laravel package that consumes [SendGrid webhook events](https://sendgrid.com/docs/API_Reference/Event_Webhook/event.html)
and makes them available via an API interface.

Access via REST API (disabled by default) or access package classes directly.

## Installation

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require hjmsw/sendgrid-event-api
```

Database migrations are included in ```database/migrations```. To run them, execute:

```bash
$ php artisan migrate
```

### REST API

REST API access is disabled by default. If you need access to this, first publish the package config file:

```bash
$ php artisan vendor:publish
```

Select the ```Provider: Hjmsw\SendGridEventApi\Providers\SendGridEventProvider``` option. You should now have a file named ```sendgrid_event_api.php``` in your app's ```config``` directory.

Change the value of ```enable_rest_access``` to ```true``` to enable.
 
You should now be able to access event data by making calls to (get) /events

## License

This package is licensed under [The MIT License (MIT)](LICENSE).