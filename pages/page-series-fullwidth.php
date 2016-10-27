<?php/*
Template Name: Full-width series
*/ ?>
<?php get_header(); ?>
<!--<link rel="stylesheet" type="text/css" href="/css/sports-gymnastics.css">-->
<link href="//fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
<style type="text/css">

  /* -------------------------------------------------------

    Description: Gymnastics Feature for Daily Bruin
    Version: 1.0
    Author: Aein Hope and Christina Yang
    Author URI: //aeiny.com

  ------------------------------------------------------- */
  body {
    font-family: 'Droid Sans',sans-serif;
  }

  article p {
    font-family: 'Droid Sans',sans-serif;
	font-size: 0.85rem !important;
  }

  article h1 {
    font-family: 'Raleway',Helvetica,Arial,sans-serif;
    font-size: 80px;
    line-height: 90px;
    text-shadow: 0 2px 2px rgba(0,0,0,0.2);
    text-align:center;
  }
  article h2 {
    font-family: 'Raleway',Helvetica,Arial,sans-serif;
    font-size: 60px;
    line-height: 70px;
    text-shadow: 0 2px 2px rgba(0,0,0,0.2);
  }

  article .pq-wrap-2 {
      width: 200px;
      margin: 5px 10px 10px 10px auto;
      padding: 5px 20px 20px 50px;
      position: relative;
      float:right;
      display:inline-block;
      height: 215px;
	  margin-bottom: 7% !important;
  }

  article .pq-wrap-2 p{
      margin: 0;
      padding: 0;
  }
   
  article .pq-wrap-2 blockquote {
      margin: 0;
      padding: 0;
      position: relative;
      border-left: none !important;
  }
  
  blockquote {
	  width: 100% !important;
  }
   
  article .pq-wrap-2 cite {
      font-style: normal;
  }

  article .pq-style-2 blockquote{
      padding-top: 57px;
  }
  article .pq-style-2 blockquote:after {
      font-family: 'icons';
      background: rgba(0,0,0,0.9);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      content: '\275e';
      position: absolute;
      font-size: 40px;
      line-height: 60px;
      text-align: center;
      top: 0px;
      left: 50%;
      margin-left: -65px;
      color: rgba(255,255,255,0.5);
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
  article .pq-style-2 blockquote:before{
      content: '';
      width: 200px;
      height: 220px;
      border-radius: 50%;
      border-left: 5px solid rgba(0,0,0,0.1);
      position: absolute;
      top: 0px;
      left: -35px;
      z-index: -1;
  }
  article .pq-style-2 blockquote p {
      font-family: 'Droid Serif', Helvetica, Arial, sans-serif;
      font-size: 16px;
      font-style: italic;
      background: rgba(255,255,255,0.5);
      display: inline;
      color: rgba(0,0,0,0.7);
      text-shadow: 0 1px 1px rgba(255,255,255,0.5);
      line-height: 23px;
  }
  article .pq-style-2 .pq-attribution {
      text-align: right;
  }
   
  article .pq-style-2 .pq-author{
      text-transform: uppercase;
      font-size: 15px;
      padding-top: 10px;
      font-weight: bold;
      color: gray;
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
   
  article .pq-style-2 cite a{
      color: #d7aa94;
      font-style: italic;
  }
   
  article .pq-style-2 cite a:hover{
      color: #d48158;
  }

  article .pq-wrap-1 {
      width: 250px;
      margin: 20px 10px;
      padding: 5px 20px 20px 50px;
      position: relative;
      float:right;
      display:inline-block;
      height: 350px;
  }

  article .pq-wrap-1 p{
      margin: 0;
      padding: 0;
  }
   
  article .pq-wrap-1 blockquote {
      margin: 0;
      padding: 0;
      position: relative;
      border-left: none !important;
  }
   
  article .pq-wrap-1 cite {
      font-style: normal;
  }

  article .pq-style-1 blockquote{
      padding-top: 57px;
  }
  article .pq-style-1 blockquote:after {
      font-family: 'icons';
      background: rgba(0,0,0,0.9);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      content: '\275e';
      position: absolute;
      font-size: 40px;
      line-height: 60px;
      text-align: center;
      top: 0px;
      left: 50%;
      margin-left: -65px;
      color: rgba(255,255,255,0.5);
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
  article .pq-style-1 blockquote:before{
      content: '';
      width: 250px;
      height: 300px;
      border-radius: 50%;
      border-left: 5px solid rgba(0,0,0,0.1);
      position: absolute;
      top: 0px;
      left: -35px;
      z-index: -1;
  }
  article .pq-style-1 blockquote p {
      font-family: 'Droid Serif', Helvetica, Arial, sans-serif;
      font-size: 15px;
      font-style: italic;
      background: rgba(255,255,255,0.5);
      display: inline;
      color: rgba(0,0,0,0.7);
      text-shadow: 0 1px 1px rgba(255,255,255,0.5);
      line-height: 25px;
  }
  article .pq-style-1 .pq-attribution {
      text-align: right;
  }
   
  article .pq-style-1 .pq-author{
      text-transform: uppercase;
      font-size: 15px;
      padding-top: 10px;
      font-weight: bold;
      color: gray;
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
   
  article .pq-style-1 cite a{
      color: #d7aa94;
      font-style: italic;
  }
   
  article .pq-style-1 cite a:hover{
      color: #d48158;
  }

  article .photocred {
    float: right;
    color: #c0c0c0;
    font-style: italic;
  }
  article .photocred-inline {
    color: #707070;
    font-size: 13px;
    margin:0px;
    padding:0px;
  }
  article .thumbnail.with-caption-left {
    display: inline-block;
    background: rgba(200,200,200,0.1);
    float: left;
    text-align: center;
    margin: 5px 15px 5px 0px;
    border:none;
    font-style: italic;
  }

  article .thumbnail.with-caption-left p {
    margin: 0;
    padding:0;
  }
  article.thumbnail.with-caption-left small:before {
    content: '\2014 \00A0';
  }
  article.thumbnail.with-caption-left small {
    width: 100%;
    display: inline-block;
    color: #999;
  }
  article .thumbnail.with-caption-right {
    display: inline-block;
    background: rgba(200,200,200,0.1);
    float: right;
    text-align: center;
    margin: 5px 0px 5px 15px;
    border:none;
    font-style: italic;
  }

  article .thumbnail.with-caption-right p {
    margin: 0;
    padding:0;
  }
  article .thumbnail.with-caption-right small:before {
    content: '\2014 \00A0';
  }
  article .thumbnail.with-caption-right small {
    width: 100%;
    display: inline-block;
    color: #999;
  }
  article #page-credit {
    margin: 3em 0 2em 0;
    text-align: center;
    color: gray;
    border-top: 1px solid #bebebe;
    padding-top: 0.5em;
    font-size: 0.9em;
  }
  article #page-credit a {
    color: #000;
    text-decoration: none;
  }
  .img-vert {
    width: auto; 
    max-height: 400px;}

  .img-hori {
  max-width:auto;
  height:250px;}

  .gym-sm {
      float: right;
      margin: 1.5em 0;
  }

  .previous {
    text-align: left;
  }

  .next {
    text-align: right;
  }

  aside.audio {
    max-width: 400px;
    float: right;
    background-color: rgba(0,0,0, 0.05);
    padding: 0 1em;
    margin-left: 1em;
  }

    aside.audio .credit {
        font-style: italic;
        float: right;
    }

  @media screen and (max-width: 1200px) {
  .img-vert{
    width: auto; 
    max-height: 300px;}
  .img-hori {
  max-width:auto;
  height:200px;}
  }

  .full-series {
    max-width: 940px;
    margin-right: auto;
    margin-left: auto;
  }
</style>

<!--css -->

<article>
  <div class= "full-series">
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			} // end while
		} // end if
	?>
</div>
</article> 

<?php get_footer(); ?>
