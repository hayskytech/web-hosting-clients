<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/table.min.css">
<?php
global $wpdb;
// $rows = $wpdb->get_results("SELECT portfolio,domain,info,end_date FROM hostings WHERE portfolio != 'None'");
$args = array(
		'post_type'	  => 'website',
		'post_status'	=> 'publish',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'ASC',
	);
$webs = get_posts($args);
echo '<div class="website-portfolio">';
foreach ($webs as $web) {
	// if($row->end_date < date('Y-m-d')){
		// continue;
	// }
	echo '
		<div class="item">
			<div class="link">'.++$i.') <a href="'.$web->post_title.'" title="'.$web->post_title.'" target="blank">'.end(explode('//',$web->post_title)).'</a> <i class="right floated external icon"></i>
			</div>
		</div>';
}
echo '</div>';
echo '<div style="clear:both"></div>';
echo '<pre style="clear:both">';
// print_r($webs[0]);
echo '</pre>';
?>
<style type="text/css">
	#maintable td{
		font-family: Arial !important;
	}
	#maintable td a{
		text-decoration: none !important;
		color: blue !important;
	}
	.website-portfolio{
		background: skyblue;
		overflow: auto;
		padding: 10px;
		border-radius: 20px;
	}
	.website-portfolio > .item{
		display: inline-block;
		width: 25%;
		float: left;
	}
	.website-portfolio .link{
		background: pink;
		margin: 5px;
		padding: 10px;
		color: blue;
		border: 1px solid;
		border-radius: 10px;
		font-family: Poppins;
		font-weight: 400;
		overflow: hidden;
		white-space: nowrap;
	}
	.website-portfolio .link a{
		color: blue;
		text-decoration: none;
	}
	@media(max-width:1200px){
		.website-portfolio > .item{
			width: 33.33%;
		}
	}
	@media(max-width:720px){
		.website-portfolio > .item{
			width: 50%;
		}
	}
	@media(max-width:480px){
		.website-portfolio > .item{
			width: 100%;
		}
	}
</style>