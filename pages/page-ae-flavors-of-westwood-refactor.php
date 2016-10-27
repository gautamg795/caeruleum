<?php/*
Template Name: A&E Flavors of Westwood 2
*/ ?>

<?php get_header(); ?>
</div>
</div>
<script src="//maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
<script src="/js/vendor/maplace.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<link href="//fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">

<style>
    article#fow {
        max-width: 1150px;
        margin: 0 auto;
    }
    article#fow .background {
        position: absolute;
        z-index: -1;
        margin-top: -280px;
        opacity: 0.3;
    }
    article#fow .gm-style div, .gm-style span, .gm-style label {
      width:300px;
      padding:0px;
    }
    article#fow h1 {
      text-align: center;
      font: 400 100px/1.3 'Lobster Two', Helvetica, sans-serif;
      color: #2685bb;
      text-shadow: 2px 4px 0px rgba(255, 255, 255, 0.7);
      text-transform: none;
    }
    article#fow h3 {
      font: 100 30px/1.3 'Lobster Two', Helvetica, sans-serif;
      color: #2685bb !important;
      text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.1);
      text-transform: none;
    }
    article#fow p {
      font-family: 'Cabin', Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 25px;
    }
    article#fow .lead {
        font-size: 1.2em;
        max-width: 600px;
        text-align: center;
        margin: 20px auto;
        text-shadow: 1px 1px 6px white;
    }
    article#fow .gmap {
      height: 400px;
      padding: 3px;
      border: 5px solid #dddddd;
      font-size: 90%;
    }
    article#fow .tabs .ullist li.active a {
      font-weight: bold;
      color: #2584bb !important;
      background-color: white !important;
    }
    article#fow .ullist li.active a, article#fow .ullist li a:hover {
      color: #2584bb !important;
      background-color: #eeeeee !important;
    }
    article#fow .ullist li.active a {
      font-weight: bold;
    }
    article#fow .tabs .ullist li a {
      padding: 0px 23.8px !important;
    }
    article#fow .ullist {
      width: 100%;
    }
    article#fow .tab-content {
      margin: 0 0 20px;
    }
    article#fow .menu .ullist li {
      width: 49%;
      float: left;
      margin-right: 1%;
      margin-bottom: .2em;
    }
    article#fow .menu .ullist li.active a,
    article#fow .menu .ullist li a:hover {
      color: #2685BB !important;
      background-color: #eee !important;
    }
    article#fow .tabs .ullist li a {
      padding: 0px 23.8px !important;
    }
    article#fow .tabs .ullist li a:hover {
      color: #2685BB !important;
      background-color: transparent !important;
    }
    article#fow .tabs .ullist li.active a {
      font-weight: bold;
      color: #2685BB !important;
      background-color: #fff !important;
    }
    article#fow .large-4 columns {
      padding: 0px;
      margin: 0px;
    }
    article#fow .large-8 columns {
      font-family: 'Cabin', Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 25px;
    }
    article#fow .ullist li.active a {
      font-weight: bold;
    }
    article#fow .ullist li.active a,
    article#fow .ullist li a:hover {
      color: #2685BB !important;
      background-color: #eee !important;
    }
    article#fow .icons-ul {
      list-style-type: none;
    }
    article#fow .icon-ul li {
      line-height: 14px;
    }
    article#fow .photocred {
      float: right;
      color: #c0c0c0;
      font-style: italic;
    }
    article#fow #controls-tabs {
      width: 180px;
      float: left;
    }
    article#fow .photocred-inline {
      color: #707070;
      font-size: 13px;
    }
    article#fow .thumbnail.with-caption {
      display: inline-block;
      background: #f5f5f5;
      float: right;
      text-align: center;
      margin-left: 5px;
    }
    article#fow .thumbnail.with-caption p {
      margin: 0;
      padding-top: 0.5em;
    }
    article#fow .thumbnail.with-caption small:before {
      content: '\2014 \00A0';
    }
    article#fow .thumbnail.with-caption small {
      width: 100%;
      text-align: right;
      display: inline-block;
      color: #999;
    }

    article#fow dl {
      display: inline-block;
      background: #f5f5f5;
      float: right;
      text-align: center;
      margin-left: 5px;
    }
    article#fow dl {
      padding-top: 0.5em;
    }

    article#fow dd {
      display: inline;
      text-align: center;
      margin-left: 5px;
    }

    article#fow dl dt img {
      padding: 5px;
    }

    article#fow #info {
      margin-top: 10px;
    }
	@media (min-width: 480px) {
		article#fow dl {
			width: 100%;
		}
	}

	@media only screen and (min-width: 768px) {
		article#fow dl {
			width: 40%;
		}
	}

    article#fow .gmnoprint {
      display: none !important;
    }
    article#fow #page-credit {
      margin: 3em 0 2em 0;
      text-align: center;
      color: gray;
      border-top: 1px solid #2685BB;
      padding-top: 0.5em;
      font-size: 0.9em;
    }
    article#fow #page-credit a {
      color: #2685BB;
      text-decoration: none;
    }
    @media (max-width: 640px) {
        article#fow #controls-tabs {
            width: 100%;
            float: none;
        }
    }
</style>

<script id="tooltip_template" type="text/template">
	<h3><%= restaurant.restaurantname %></h3>
	<p><%= restaurant.tagline %></p>
</script>

<script id="content_template" type="text/template">
  <div class="row">
	<h3><%= restaurant.restaurantname %></h3>
		<div class="large-8 columns">
		<img src="<%= restaurant.image %>" class="img-responsive" alt="<%=restaurant.restaurantname%>">
		<br />
		<br />

		<span class="photocred">
			<%= restaurant["photo-credit"] %>
		</span>
		<br />
		<br />
		<h2>
			BY <%= restaurant.author %>
		</h2>
		<p><%= restaurant.content %></p>
		</div>
		<div class="large-4 columns">
		<ul class="icons-ul">
			<li><i class="fa fa-fw fa-map-marker"></i><%= restaurant.address %></li>         
			<li><i class="fa fa-fw fa-phone"></i> <%= restaurant.phone %></li>
			<li><i class="fa fa-fw fa-calendar"></i> <%= restaurant.hours %></li>  
			<li><i class="fa fa-fw fa-briefcase"></i> Delivery: <%= restaurant.delivery %></li>        
			<li><i class="fa fa-fw fa-tag"></i> <%= restaurant.cost %></li>         
			<li><i class="fa fa-fw fa-info"></i> <%= restaurant.info %></li> 
			<li><i class="fa fa-fw fa-globe"></i> <a href="<%= restaurant.website %>" target="_blank"><%= restaurant.website %></a></li>
		</ul>
		</div>
	</div>
</script>

<div class="section-container auto">
<article id="fow">

<img class="background" src="//dailybruin.com/images/2014/01/bg7_2.png"/>

<h1>Flavors of Westwood</h1>
<p class="lead">Throughout this past year, A&amp;E reporters have been venturing into the world of Westwood dining to dig up the stories behind the creation and the flavor of each eatery. Explore the flavors of Westwood through our interactive map.</p>

<div id="controls-tabs" style="height: 400px; overflow-y: scroll;"></div>
<div id="gmap-tabs" class="gmap" style="position: relative; overflow: hidden;"></div>
<div id="info"></div>

<div id="page-credit">Page created by <a href="//aeiny.com">Aein Hope</a> and <a href="mailto:afarhangi@media.ucla.edu">Arman Farhangi</a></div>

</article>
</div>


<script>

</script>

<script type="text/javascript">
$(document).ready(function(){
    unresponsivize();
});

<?php
$args = array('tag' => 'flavors-of-westwood');

$posts = get_posts( $args );
$data = array();

// removed in article picture, was causing problems.
$pattern = '/\[caption [^\[]*\[\/caption]/';
$replace = '';
foreach ($posts as $post) : setup_postdata($post);
  $post_data = array();
  $post_id = get_the_ID();
  $post_data['author'] = get_the_author();
  $content = get_the_content();
  $realcontent = preg_replace($pattern, $replace, $content);
  $post_data['content'] = wpautop($realcontent);
  $post_data['featured'] = wp_get_attachment_url( get_post_thumbnail_id() );
  $post_data['photo-credit'] = get_post(get_post_thumbnail_id())->post_excerpt; 
  $data[$post_id] = $post_data;
endforeach;

echo "var post_json = ". json_encode($data);
wp_reset_postdata(); 
?>

var url = "https://spreadsheets.google.com/feeds/list/1yuMJRF0CisMIAsO20eaLM5Pn5pI_6kuj7tdwF5R30p0/od6/public/values?alt=json";
$(document).ready(function(){
	$.getJSON(url, function(data){
		var json = googleSheetToJSON(data);
		console.log(json);
		var LocsB = toMapJSON(json);
		console.log(LocsB);
	    $(function() {
	        new Maplace({
	        locations: LocsB,
	        map_div: '#gmap-tabs',
	        controls_div: '#controls-tabs',
	        controls_type: 'list',
	        controls_on_map: false,
	        show_infowindow: false,
	        afterShow: function(index, location, marker) {
	            $('#info').html(location.fulldesc);
	    },
	            map_options: {
	            set_center: [34.059646, -118.443498],
	            zoom: 15
	            },
	            controls_on_map: false
	        }).Load();
	    });
	});
})
</script>


<script type="text/javascript">

	function to_tooltip_html(data_element){
		var tooltip_template = _.template($('#tooltip_template').html());
		return tooltip_template({
			'restaurant': data_element
		});
	}

	function to_content_html(data_element){
		var content_template = _.template($('#content_template').html());
		return content_template({
			'restaurant': data_element
		});
	}


function toMapJSON(json) {
	var result = [];
	var elem = {};
	_.each(json, function(data){
		elem = {};
		elem['html'] = to_tooltip_html(data);
		elem['fulldesc'] = to_content_html(data);
		elem['lat'] = parseFloat(data.latitude);
		elem['lon'] = parseFloat(data.longitude);
		elem['icon'] = '//maps.google.com/mapfiles/marker' + data.marker + '.png';
		elem['zoom'] = 17;
		elem['title'] = data.restaurantname;
		elem['website'] = data.website;
		result.push(elem);
	});

	return result;
}

// takes in JSON object from google sheets and turns into a json formatted 
// this way based on the original google Doc
// [
// 	{
// 		'column1': info1,
// 		'column2': info2,
// 	}
// ]
function googleSheetToJSON(data){
	var formatted_json = [];
	var elem = {};
	var real_keyname = '';

	$.each(data.feed.entry, function(i, entry) {
		elem = {};
		$.each(entry, function(key, value){
			// fields that were in the spreadsheet start with gsx$
			if (key.indexOf("gsx$") == 0) 
			{
				// get everything after gsx$
				real_keyname = key.substring(4); 
				elem[real_keyname] = value['$t'];
			}
		});
		var postid = elem['postid'];
		if (_.has(post_json, postid)){
			elem['author'] = post_json[postid]['author'].toUpperCase();
			elem['image'] = post_json[postid]['featured'];
			elem['content'] = post_json[postid]['content'];
			elem['photo-credit'] = post_json[postid]['photo-credit'];
		}
		formatted_json.push(elem);

	});
	return formatted_json;
}
</script>


<div class="db-wrapper db-content">
<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>
<?php get_footer(); ?>
