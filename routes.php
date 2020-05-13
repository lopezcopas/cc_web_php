<?php

    Route::set('index.php', function(){
        Index::CreateView('index');
    });

    Route::set('about-us', function(){
        AboutUs::CreateView('about-us');
    });

    Route::set('test', function(){
        echo 'Test';
    });
?>