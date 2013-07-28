<table>
<tr>
<td width=40%>
<a class="twitter-timeline"  href="https://twitter.com/boris_sathya/euro-sec"  data-widget-id="361185157551644672">Tweets from @boris_sathya/euro-sec</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td>
<td width=60% style="background: url(http://2.bp.blogspot.com/_UdH8rcs3s1Q/TGdcZB6sO3I/AAAAAAAAAKU/KrPuD_wmBC4/s320/iPadBackgroundTexture-grey.png) repeat center">
<font color="white">
<?php
require 'reddit-api-client/vendor/autoload.php';
$reddit = new RedditApiClient\Reddit;
$links = $reddit->getLinksBySubreddit('netsec');
foreach ($links as $link){
    echo "\t";
    ?><a href=<? echo $link->getUrl(); ?>><? echo $link->getTitle(); ?></a><?
    echo "<br />";
}
?>
</font>
</td>
</tr>
</table>
