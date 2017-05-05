<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Minute To Code</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Raleway:900|Shadows+Into+Light+Two'>

      <style>
        * { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
		*:before, *:after { -webkit-box-sizing: inherit; -moz-box-sizing: inherit; box-sizing: inherit; }

		html { background: #000; font: normal 1em/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif; color: #fff; text-align: center; height: 100%; }
		body { height: 100%; }

		#video-viewport { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -1; }
		video { display: block; width: 100%; height: auto; }

		.fullsize-video-bg { height: 100%; overflow: hidden; }

		.fullsize-video-bg:before { content: ""; background: rgba(0,45,114,.35); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; }
		.fullsize-video-bg:after { content: ""; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAYAAABWKLW/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI4RkZBQTgzNzg1NzExRTU4NTQyODc3OUM4MTZGMUREIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI4RkZBQTg0Nzg1NzExRTU4NTQyODc3OUM4MTZGMUREIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjhGRkFBODE3ODU3MTFFNTg1NDI4Nzc5QzgxNkYxREQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjhGRkFBODI3ODU3MTFFNTg1NDI4Nzc5QzgxNkYxREQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz66uHInAAAAIUlEQVR42mL5//8/AyMj42YGIGBigABfEMEIkoEBgAADAKvuBwVS8BAjAAAAAElFTkSuQmCC); background-size: 3px 3px; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; }

		.fullsize-video-bg .inner { display: table; width: 100%; max-width: 45em; height: 100%; margin: 0 auto; padding: 0; position: relative; z-index: 2; text-shadow: 0 1px 5px rgba(0,0,0,.5); }
		.fullsize-video-bg .inner > div { text-align: center; display: table-cell; vertical-align: middle; padding: 0 2em; }

		h1 { font-family: "Raleway", sans-serif; font-size: 5em; line-height: .9; font-weight: 500; letter-spacing: -.025em; text-transform: uppercase; margin-bottom: .5em; }
		h1 + p { font-family: "Shadows Into Light Two", cursive; font-size: 1.5em;  }
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <section class="fullsize-video-bg">
	<div class="inner">
		<div>
			<h1>Minute To Code</h1>
      <p>For everyone, anytime, anywhere.
		  <br />
		  <button id ="begin" style="margin-top: 3em;background-color: rgba(255, 255, 255, 0);padding: 0.75em;font-size: x-large;/* border-radius: 90px; */border: none;font-family: &quot;Raleway&quot;, sans-serif;color: rgb(0, 0, 0);font-weight: 100;background-color: white;border-color: #ffffff;">
			  BEGIN
		  </button>
		</div>
	</div>


	<div id="video-viewport">
		<video id="vid" width="1920" height="1280" autoplay muted loop>
			<source src="http://res.cloudinary.com/anudit/video/upload/v1493911547/code_dpvrog.mp4" type="video/mp4" />
			<source src="code.mp4" type="video/mp4" />
		</video>
	</div>

	  <script>
	var vid = document.getElementById("vid");
		vid.playbackRate = 300;
    document.getElementById("begin").onclick = function () {
        location.href = "learn/index.php";
    };
	</script>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
