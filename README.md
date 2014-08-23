#Responsive Video Gallery

I recently worked on a website redesign that needed a video gallery. It was a WordPress project and would contain videos from YouTube and Vimeo. I decided a custom post type and custom fields was the best approach, and what follows is the HTML5/CSS and jQuery app, Fancybox.

The code I wrote is open source and free to be copied, used, and changed.

Fancybox is Copyright Protected by Janis Skarnelis:

+ http://www.fancyapps.com/fancybox/#license
+ https://github.com/fancyapps/fancyBox

###See <a href="http://responsivevideogallery.com" target="_blank">The Video Gallery</a>

#First write the HTML

	<article class="video">
	  <figure>
	    <a class="fancybox fancybox.iframe" href="http://www.youtube.com/embed/paG__3FBLzI">
	    <img class="videoThumb" src="http://i1.ytimg.com/vi/paG__3FBLzI/mqdefault.jpg"></a>
	  </figure>
	  <h2 class="videoTitle">Mesopotamia</h2>
	</article>

1. Use two classes: `fancybox` and `fancybox.iframe` on the `a` tag.
2. Use the URL in the iframe embed code, not the copy & paste URL.
3. Right click on the YouTube or Vimeo video thumbnail and copy the image URL for the source.
4. Use your own class names for the `article`, `img src`, and video title.

#Next write the CSS
##First the vanilla CSS:

		/* First make sure the video thumbnail images are responsive. */
		img {
			max-width: 100%;
			height: auto;
		}

	  /* 
	  This is the starting grid for each video with thumbnails 5 across for the largest screen size.
	  It's important to use percentages or there may be gaps on the right side of the page. 
	  */
	  .video {
	    background: #fff;
	    padding-bottom: 20px;
	    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
	    width: 18%; /* Thumbnails 5 across */
	    margin: 1%;
	    float: left;
	  }

	  /* These keep the height of each video consistent between YouTube and Vimeo. 
	  Each can have thumbnail sizes that vary by 1px and are likely break your layout. */
	  .video figure {
    height: 0; /* These keep the height of each video consistent between YouTube and Vimeo, which have thumbnail sizes that vary by 1px and can break your layout. */
    padding-bottom: 60%;
	  
	  /* Media Queries - This is the responsive grid. */
	  @media (max-width: 1366px) {
	    .video {
	      width: 23%; /* Thumbnails 4 across */
	    }
	  }
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

1. The media query breakpoints are videos 5 across for screen sizes greater than 1366px, 4 across for sizes greater than 1024px, 3 across for sizes greater than 600px, and 2 across for sizes greater than 360px. At 360px the videos are no longer floated, but rather `display:block` in a single column.
2. Keeping the widths and margins fluid with percentages is important for this gallery’s responsive layout. If you use `px`, `em`, or `rem`, you’re likely to have large gaps on the right side of the page.
3. It’s important to stretch the thumbnail image with `width:100%` on screen sizes that exceed the natural size of the image. When the screen size is smaller, the width of the article is smaller than the images's natural size, and `max-width:100%` takes over so the images are responsive.
4. Styling the video titles is the most important aspect of this layout. If the titles are on top of, or below, the video, and are not consistent across each video, each article height will be different and break the layout.

#Use as a mixin in Sass

	  @mixin grid {
	    width: 18%;
	    margin: 1%;
	    float: left;
	    @media (max-width: 1366px) {
	      width: 23%;
	    }
	    @media (max-width: 1024px) {
	      width: 31.333%;
	    }
	    @media (max-width: 600px) {
	      width: 48%;
	    }
	    @media (max-width: 360px) {
	      display: block;
	      width: 96%;
	      margin: 2%;
	      float: none;
	    }
	  }
	  @mixin hover {
	    opacity: 1;
	    &:hover, &:active, &:focus {
	      opacity: 0.75;
	    }
	  }

##Then include it in your video style:

	.video {
	  background: #fff;
	  padding-bottom: 20px;
	  box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	  @include grid;
	  figure {
      height: 0;
      padding-bottom: 60%;
    }
	  img {
	    width: 100%;
	    @include hover;
	  }
	}

#Using Fancybox

Fancybox comes with a style sheet you can copy and paste into your CSS. If you’re using Sass, you should create a partial file and `@import` it into your global or main style sheet.

##Calling and writing the scripts:

	// These should go in the footer.
	<script>//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js</script>
	<script>js/jquery.fancybox.min.js</script>

	// If you don't use a global js sheet, these can also go in the footer.
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

1. First call the jQuery library from the <a href="https://developers.google.com/speed/libraries/devguide#jquery" target="_blank">Google API</a>.
2. Then link to the Fancybox script.
3. There's a lot of documentation on how to use Fancybox. You can check the docs on <a href="https://github.com/fancyapps/fancyBox" target="_blank">GitHub</a>, on <a href="http://fancybox.net/" target="_blank">fancybox.net</a>, and on <a href="http://fancyapps.com/fancybox/" target="_blank">fancyapps.com</a>.