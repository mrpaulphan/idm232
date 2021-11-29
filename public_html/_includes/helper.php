<?php
/**
 * Output the full site url dynamically instead of statically
 *
 * @param string $path
 * @return string
 */
function siteUrl($path = '')
{
    $url = 'http://' . $_SERVER['SERVER_NAME'] ;
    echo $url . $path;
}

/**
 * Snippet to redirect to a page
 *
 * @param string $url
 * @return void
 */
function redirectTo($path)
{
    header('Location: ' . $path);
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
    // Getting Slug
    $uri = $_SERVER['REQUEST_URI'];
    $string_to_check_for = '/admin';
    if (strpos($uri, $string_to_check_for) === false) {
        return false;
    } else {
        return true;
    }
}

/**
 * Take string and make it slug friendly
 *
 * @param string $text
 * @param string $divider
 * @return string
 */
function slugify($text, $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}
