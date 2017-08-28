<?php

Route::get('chat', 'Ifranco88\LaravelSupportChat\SupportChatController@index')->middleware(['web','auth']);