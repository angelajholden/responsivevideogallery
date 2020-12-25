<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="author" href="//plus.google.com/u/0/+AngelaHoldenDesign/posts">
    <meta name="description" content="Learn to build a simple, responsive grid for displaying and playing videos using CSS and jQuery.">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Responsive Video Gallery</title>
    <script
  		src="http://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous"></script>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="first">
      <header>
        <h1>Simple Responsive Video Gallery</h1>
      </header>
        <p>With a simple CSS grid and the jQuery app “Fancybox”, it’s easy to make a responsive video gallery with videos from YouTube and Vimeo.</p>
        <ul class="buttons">
          <li><a href="//github.com/angelajholden/responsivevideogallery" target="_blank">Download on GitHub</a></li>
          <li><a href="//github.com/fancyapps/fancyBox" target="_blank">Fancybox on GitHub</a></li>
        </ul>
    </section>
    <section class="second clearfix">
      <header>
        <h1>The Video Gallery</h1>
      </header>
      <article class="video">
        <?php 
            function youtube_title($id) {
            // $id = 'YOUTUBE_ID';
            // returns a single line of JSON that contains the video title. Not a giant request.
            $videoTitle = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=".$id."&key=YOUR_API_KEY&fields=items(id,snippet(title),statistics)&part=snippet,statistics");
            // despite @ suppress, it will be false if it fails
            if ($videoTitle) {
            $json = json_decode($videoTitle, true);

            return $json['items'][0]['snippet']['title'];
            } else {
            return false;
            }
            }
        ?>
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/zH3ZohGnjcg"><img class="videoThumb" src="//i1.ytimg.com/vi/zH3ZohGnjcg/mqdefault.jpg"></a>
        </figure>
        <!-- <h2 class="videoTitle">Kumru Ballad</h2> -->
        <h2 class="videoTitle"><?php echo youtube_title('yourvideoId'); ?></h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//player.vimeo.com/video/26890275"><img class="videoThumb" src="//secure-b.vimeocdn.com/ts/178/010/178010767_295.jpg"></a>
        </figure>
        <h2 class="videoTitle">Kumru Orchestral</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/paG__3FBLzI"><img class="videoThumb" src="//i1.ytimg.com/vi/paG__3FBLzI/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Mesopotamia</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/OF9fneQ50Us"><img class="videoThumb" src="//i1.ytimg.com/vi/OF9fneQ50Us/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Kreutzer</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/1swsXJuclGM"><img class="videoThumb" src="//i1.ytimg.com/vi/1swsXJuclGM/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Bodrum</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/WQ3Gf9PLUO8"><img class="videoThumb" src="//i1.ytimg.com/vi/WQ3Gf9PLUO8/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Mesopotamia</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//player.vimeo.com/video/7533229"><img class="videoThumb" src="//secure-b.vimeocdn.com/ts/326/392/32639200_295.jpg"></a>
        </figure>
        <h2 class="videoTitle">Symhpony in Red</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/bYy1yKqspYs"><img class="videoThumb" src="//i1.ytimg.com/vi/bYy1yKqspYs/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Paganini Jazz</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/Vx3GkAzwVWM"><img class="videoThumb" src="//i1.ytimg.com/vi/Vx3GkAzwVWM/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Say Plays Say</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/r2jkR_rUaMY"><img class="videoThumb" src="//i1.ytimg.com/vi/r2jkR_rUaMY/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Say in Switzerland</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/rw7bkVPtYmY"><img class="videoThumb" src="//i1.ytimg.com/vi/rw7bkVPtYmY/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Serenad Bağcan</h2>
      </article>
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/njnuqtPAWDw"><img class="videoThumb" src="//i1.ytimg.com/vi/njnuqtPAWDw/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Mozart Maratonu</h2>
      </article>
    </section>
    <section class="third">
  <header>
    <h1>First write the HTML</h1>
  </header>

<pre>
  &lt;article class="video">
    &lt;figure>
      &lt;a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/paG__3FBLzI">
      &lt;img class="videoThumb" src="//i1.ytimg.com/vi/paG__3FBLzI/mqdefault.jpg">&lt;/a>
    &lt;/figure>
    &lt;h2 class="videoTitle">Mesopotamia&lt;/h2>
  &lt;/article>
</pre>

      <ol>
        <li>Use two classes: <code>fancybox</code> and <code>fancybox.iframe</code> on the <code>a</code> tag.</li>
        <li>Use the URL in the <code>iframe</code> embed code, not the copy & paste URL.</li>
        <li>Right click on the YouTube or Vimeo video thumbnail and copy the image URL for the source.</li>
        <li>Use your own class names for the <code>article</code>, <code>img src</code>, and video title.</li>
      </ol>
    </section>
    <section class="fourth">
      <header>
        <h1>Next write the CSS</h1>
      </header>

<pre>
  /* First make sure the video thumbnail images are responsive. */

  img {
    max-width: 100%;
    height: auto;
  }
  
  /* 
  This is the starting grid for each video with thumbnails 4 across for the largest screen size.
  It's important to use percentages or there may be gaps on the right side of the page. 
  */

  .video {
    background: #fff;
    padding-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    width: 23%; /* Thumbnails 4 across */
    margin: 1%;
    float: left;
  }

   /* 
   These keep the height of each video thumbnail consistent between YouTube and Vimeo.
   Each can have thumbnail sizes that vary by 1px and are likely break your layout. 
   */

  .video figure {
    height: 0;
    padding-bottom: 56.25%;
    overflow: hidden;

  .video figure a {
    display: block;
    margin: 0;
    padding: 0;
    border: none;
    line-height: 0;
  }

  /* Media Queries - This is the responsive grid. */

  @media (max-width: 1024px) {
    .video {
      width: 31.333%; /* Thumbnails 3 across */
    }
  }

  @media (max-width: 600px) {
    .video {
      width: 48%; /* Thumbnails 2 across */
    }
  }

  @media (max-width: 360px) {
    .video {
      display: block;
      width: 96%; /* Single column view. */
      margin: 2%; /* The smaller the screen, the smaller the percentage actually is. */
      float: none;
    }
  }

  /* These are my preferred rollover styles. */

  .video img {
    width: 100%;
    opacity: 1;
  }

  .video img:hover, .video img:active, .video img:focus {
    opacity: 0.75;
  }
</pre>

	<ol>
	  <li>The media query breakpoints are videos 4 across for sizes greater than 1024px, 3 across for sizes greater than 600px, and 2 across for sizes greater than 360px. At 360px the videos are no longer floated, but rather <code>display:block</code> in a single column.</li>
		<li>I like the widths and margins to be fluid with percentages for the responsive layout.</li>
		<li>It’s important to stretch the thumbnail image with <code>width:100%</code> on screen sizes that exceed the natural size of the image. When the screen size is smaller, the width of the article is smaller than the images's natural size, and <code>max-width:100%</code> takes over so the images are responsive.</li>
		<li>Styling the video titles are also important – if the titles are on top of, or below, the video, and are not consistent across each video, each article height will be different and break the layout.</li>
	</ol>
    </section>

<section class="fifth">
	<header>
		<h1>Using Fancybox</h1>
	</header>

<pre>
  // These should go in the footer.
  &lt;script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">&lt;/script>

  &lt;script src="js/jquery.fancybox.min.js">&lt;/script>

  &lt;script>
    $(document).ready(function() {
      $('.fancybox').fancybox({
        padding   : 0,
        maxWidth  : '100%',
        maxHeight : '100%',
        width   : 560,
        height    : 315,
        autoSize  : true,
        closeClick  : true,
        openEffect  : 'elastic',
        closeEffect : 'elastic'
      });
    });
  &lt;/script></pre>

		<ol>
			<li>Fancybox also includes a style sheet you need to copy and paste into your CSS.</li>
		  <li>Next link to the jQuery library from the <a href="http://code.jquery.com/" target="_blank">jQuery CDN</a>.</li>
		  <li>Then initialize Fancybox.</li>
		  <li>There's a lot of documentation on how to use Fancybox. You can check the docs on <a href="//github.com/fancyapps/fancyBox" target="_blank">GitHub</a>, on <a href="//fancybox.net/" target="_blank">fancybox.net</a>, and on <a href="//fancyapps.com/fancybox/" target="_blank">fancyapps.com</a>.</li>
		</ol>
	</section>

			<footer>
			  <p>Simple Responsive Video Gallery by <a href="//angelajholden.com" target="_blank">Angela J. Holden</a><p>
			  <p>Use it • Change it • Make something cool with it</p>
			  <a href="#" class="scroll-top">↑</a>
			</footer>
		<script src="compiled/base.min.js"></script>
  </body>
</html>
