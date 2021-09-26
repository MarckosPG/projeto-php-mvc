<?php

    function dd ($params = [], $die = true) {
        echo "<prre>";
        print_r($params);
        echo "</pre>";

        if($die)die();
    }