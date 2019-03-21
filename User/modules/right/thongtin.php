<?php
        //Feed URLs
$feeds = array(
	"https://www.24h.com.vn/upload/rss/taichinhbatdongsan.rss" 
);

        //Read each feed's items
$entries = array();
foreach($feeds as $feed) {
	$xml = simplexml_load_file($feed);
	$entries = array_merge($entries, $xml->xpath("//item"));
}

        //Sort feed entries by pubDate
usort($entries, function ($feed1, $feed2) {
	return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
});

?>
<?php  foreach($entries as $entry){
	?> 
	<div class="col-sm-12">

		<div class="product-image-wrapper">
			<h4><a href="<?= $entry->link ?>"><?= $entry->title ?></a></h4>
			<p><?= $entry->description ?></p>
		</div>
	</div>
	<?php } ?>