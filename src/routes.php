<?php

Route::get(
    'events/',
    'Hjmsw\SendGridEventApi\SendGridEventController@events'
);

Route::post(
    'events/',
    'Hjmsw\SendGridEventApi\SendGridEventController@processEvents'
);