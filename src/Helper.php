<?php

use Illuminate\Support\Carbon;


/**
 * A description of the entire PHP function.
 *
 * @return string
 */
function myHelperFunction()
{
    return 'This is my helper function!';
}

/**
 * Returns the current date in the format 'd-m-Y'.
 *
 * @return string The formatted date string.
 */
function dateFormat($date)
{
    $dateformat = Carbon::parse($date)->format('d-m-Y');

    return $dateformat;
}

/**
 * Get the current time in the Asia/Kolkata timezone.
 *
 * @return string
 */
function currentTime()
{
    $time = Carbon::now()->timezone('Asia/Kolkata')->format('H:i a');

    return $time;
}

/**
 * Retrieves the IP address of the client making the request.
 *
 * @return string The IP address of the client.
 */
function getIPAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

/**
 * Get the current day.
 *
 * @return string
 */
function currentDay()
{
    $day = Carbon::now()->format('l');

    return $day;
}

/**
 * Returns the time of the day as 'Morning' if it is between 9:00 and 17:00, otherwise returns 'Evening'.
 *
 * @return string
 */
function getDay()
{
    $now = Carbon::now()->timezone('Asia/Kolkata');
    $morningStart = Carbon::createFromTime(9, 0, 0);
    $morningEnd = Carbon::createFromTime(17, 0, 0);

    $morning = 'Morning';
    $evening = 'Evening';

    if (($morningStart >= $now) && ($now <= $morningEnd)) {
        return $morning;
    } else {
        return $evening;
    }
}


/**
 * Convert an array to a string by joining its elements with a hyphen.
 *
 * @param array $data The input array to be converted to a string
 * @return string The string representation of the input array
 */
function arrayToString(array $data)
{
    $string = collect($data)->implode('-');
    return $string;
}

/**
 * Converts a string to an array.
 *
 * @param string $string The string to be converted.
 * @return array The resulting array.
 */
function stringToArray($string)
{
    $array = explode(' ', $string);
    return $array;
}
