<?php
include 'header.php';
require_once('mysql_login.php');
require_once('ranking.php');

$lang_row = get_language_row(get_type_or_else('language'));

if (!$lang_row) {
    echo "<p>Invalid Language</p>";
} else {
    $language_name = htmlentities($lang_row['name']);
    echo "<h2><span>$language_name's User Rankings</span><div class=\"divider\" /></h2>";

    $page = get_type_or_else("page", FILTER_VALIDATE_INT, 1);
    echo get_language_ranking($lang_row['language_id'], $page);
}

include 'footer.php';
?>