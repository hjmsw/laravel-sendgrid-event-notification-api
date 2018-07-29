<?php

if (config('sendgrid_event_api.enable_rest_access') === true) {
    Route::get(
        'events/',
        'Hjmsw\SendGridEventApi\Controllers\SendGridEventController@events'
    );
}

Route::post(
    'events/',
    'Hjmsw\SendGridEventApi\Controllers\SendGridEventController@processEvents'
);