<?php
function json_error_message($json_str)
{
    $json[] = $json_str;
    echo "<pre>";
    print_r($json);
    foreach ($json as $string) {
        // echo 'Decoding: ' . $string . "\n";
        $test = json_decode($string,true);
        // echo 'Decoding: ' . $test . "\n";
        print_r($test);

        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                echo ' - No errors' . "\n";
                break;
            case JSON_ERROR_DEPTH:
                echo ' - Maximum stack depth exceeded' . "\n";
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - Underflow or the modes mismatch' . "\n";
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' - Unexpected control character found' . "\n";
                break;
            case JSON_ERROR_SYNTAX:
                echo ' - Syntax error, malformed JSON' . "\n";
                break;
            case JSON_ERROR_UTF8:
                echo ' - Malformed UTF-8 characters, possibly incorrectly encoded' . "\n";
                break;
            default:
                echo ' - Unknown error' . "\n";
                break;
        }
    }
}
json_error_message('{"color1": "Red Color"}');
json_error_message('{"color2": "green Color"}');
json_error_message('{"color3": "Yellow Color"}');
