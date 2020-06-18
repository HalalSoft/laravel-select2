<?php

if (! function_exists('select2')) {

    function select2($message = null, $title = '')
    {
        $notifier = app('dyaskur.select2');

        if (! is_null($message)) {
            return $notifier->message($message, $title);
        }

        return $notifier;
    }
}
