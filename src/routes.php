<?php

Route::get(
    'events/{type}',
    'Hjmsw\SendGridEventApi\SendGridEventController@events'
);

Route::post(
    'events/',
    'Hjmsw\SendGridEventApi\SendGridEventController@processEvents'
);