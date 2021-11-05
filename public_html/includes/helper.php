<?php

/**
 * Snippet to redirect to a page
 *
 * @param string $url
 * @return void
 */
function redirectTo($url)
{
    header('Location: ' . $url);
}

/**
 * return date and time in the correct
 * mysqi 'datetime' format
 *
 * @return string
 */
function getFormattedDateTime()
{
    return  date('Y-m-d H:i:s');
}

/**
 * determine if current page is an admin page
 *
 * @return boolean
 */
function isAdminPage()
{
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $match_string = '/admin/';
    if (strpos($url, $match_string) !== false) {
        return false;
    } else {
        return false;
    }
}
