<?php

function launchSession() {
    ini_set('session.use_only_cookies', 1); 
    ini_set('session.use_strict_mode', 1); // only used session ID created by the server

    session_set_cookie_params(1800, '/', 'e-pharm.test', false, true); // set the params for the cookie

    session_start();

    function refreshSessionId() {
        session_regenerate_id(true);
        $_SESSION['last_refresh_time'] = time();
    }

    //refresh session ID after a certain interval
    if(!isset($_SESSION['last_refresh_time'])) {
        refreshSessionId();
    } else {
        $interval = 60 * 30;

        if(time() - $_SESSION['last_refresh_time'] >= $interval) {
            refreshSessionId();
        };
    };
};



