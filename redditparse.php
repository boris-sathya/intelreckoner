<?php
require 'reddit-api-client/vendor/autoload.php';

$reddit = new RedditApiClient\Reddit;
$links = $reddit->getLinksBySubreddit('netsec');

foreach ($links as $link){
    echo $link->getTitle(), "\n";
}
?>
