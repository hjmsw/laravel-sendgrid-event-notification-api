<?php

Route::get(
    'events/',
    'Hjmsw\SendGridEventApi\Controllers\SendGridEventController@events'
);

Route::post(
    'events/',
    'Hjmsw\SendGridEventApi\Controllers\SendGridEventController@processEvents'
);