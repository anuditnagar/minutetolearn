<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Minute To Code</title>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
  <style>
	body {
	  margin-top: 180px;
	  background-color: #112;
	  background-color: #0c2d41;
	  font-family: Roboto, 'helvetica neue', Helvetica, Arial, sans-serif;
	}
	.container {
	  width: 800px;
	  margin: auto;
	}
	.row {
	  position: relative;
	  height: 50px;
	  z-index: 1;
	  clear: both;
	  margin-bottom: 30px;
	  text-align: center;
	}
	.row--intro {
	  padding-top: 20px;
	  font-size: 16px;
	  line-height: 28px;
	  font-weight: 300;
	  color: #fff;
	  opacity: 0.4;
	}
	.row--intro span {
	  font-size: 11px;
	}
	.skew-title {
	  font-size: 25px;
	}
	.skew-title span {
	  position: relative;
	  display: inline-block;
	  width: 40px;
	  height: 50px;
	  margin: auto;
	  z-index: 2;
	  text-align: center;
	  color: #fff;
	  font-family: 'roboto condensed';
	  font-weight: 700;
	  font-size: 35.714285714285715px;
	  line-height: 50px;
	  -webkit-transform: skewY(-15deg);
			  transform: skewY(-15deg);
	  -webkit-transform-origin: 0 100%;
			  transform-origin: 0 100%;
	  -webkit-transition: all 0.2s;
	  transition: all 0.2s;
	  cursor: default;
	}
	.skew-title span:after,
	.skew-title span:before {
	  display: block;
	  top: 0;
	  left: 0;
	  width: 40px;
	  height: 50px;
	  position: absolute;
	  background: #185a81;
	  content: ' ';
	  z-index: -1;
	  -webkit-transition: all 0.2s;
	  transition: all 0.2s;
	}
	.skew-title span:before {
	  background: rgba(0,0,0,0.1);
	  -webkit-transform: skewY(15deg);
			  transform: skewY(15deg);
	  -webkit-transform-origin: 0 0;
			  transform-origin: 0 0;
	}
	.skew-title span:nth-child(even) {
	  background-color: #144c6e;
	  -webkit-transform: skewY(15deg);
			  transform: skewY(15deg);
	  -webkit-transform-origin: 100% 100%;
			  transform-origin: 100% 100%;
	  color: #d9d9d9;
	}
	.skew-title span:nth-child(even):after {
	  background-color: #144c6e;
	}
	.skew-title span:nth-child(even):before {
	  -webkit-transform-origin: 100% 0;
			  transform-origin: 100% 0;
	  -webkit-transform: skewY(-15deg);
			  transform: skewY(-15deg);
	}
	.skew-title span.flat {
	  -webkit-transform: skewY(0);
			  transform: skewY(0);
	  color: #fff;
	}
	.skew-title span.flat:before {
	  -webkit-transform: skewY(0);
			  transform: skewY(0);
	}
	.skew-title span.flat:nth-child(even):after {
	  background-color: #185a81;
	}
	.skew-title span.alt:after {
	  background-color: #b94a2c;
	}
	.skew-title span.alt:nth-child(even):after {
	  background-color: #9d3f25;
	}
	.skew-title span.alt.flat:nth-child(even):after {
	  background-color: #b94a2c;
	}

  </style>
</head>

<body>
  <div class="container">
  <h1 class="row skew-title">  
    <span>M</span><span>I</span><span>N</span><span>U</span><span>T</span><span class="last">E</span>
    &nbsp; 
    <span>T</span><span class="last">O</span>
    &nbsp;
    <span class="alt">C</span><span class="alt">O</span><span class="alt">D</span><span class="alt last">E</span>
  </h1>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>
	(function() {
	  $('.skew-title').children('span').hover((function() {
		var $el, n;
		$el = $(this);
		n = $el.index() + 1;
		$el.addClass('flat');
		if (n % 2 === 0) {
		  return $el.prev().addClass('flat');
		} else {
		  if (!$el.hasClass('last')) {
			return $el.next().addClass('flat');
		  }
		}
	  }), function() {
		return $('.flat').removeClass('flat');
	  });

	}).call(this);
</script>

</body>
</html>
