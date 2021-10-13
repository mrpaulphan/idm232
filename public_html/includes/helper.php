<?php


/**
 * Snippet to redirect to a page
 *
 * @param string $url
 * @return void
 */
function redirectTo($url) {
  header('Location: ' . $url);
}

?>