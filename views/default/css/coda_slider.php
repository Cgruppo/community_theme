/*
jQuery Coda-Slider v2.0 - http://www.ndoherty.biz/coda-slider
Copyright (c) 2009 Niall Doherty
This plugin available for use in all personal or commercial projects under both MIT and GPL licenses.
*/

/* Most common stuff you'll need to change */

.coda-slider-wrapper { 
	padding: 0;
}
.coda-slider { 
	background: transparent;
}

/* Use this to keep the slider content contained in a box even when JavaScript is disabled */
.coda-slider-no-js .coda-slider { 
	height: 200px;
	overflow: auto !important;
	padding-right: 20px
}

/* Change the width of the entire slider (without dynamic arrows) */
.coda-slider, .coda-slider .panel {
	width: 950px;
}

/* Change margin and width of the slider (with dynamic arrows) */
.coda-slider-wrapper.arrows .coda-slider, .coda-slider-wrapper.arrows .coda-slider .panel {
	width: 600px;
}
.coda-slider-wrapper.arrows .coda-slider {
	margin: 0 10px;
}

/* Arrow styling */
.coda-nav-left a, .coda-nav-right a { background: #000; color: #fff; padding: 5px; width: 100px }

/* Tab nav */
.coda-nav ul li a.current { background: #39c }

/* Panel padding */
.coda-slider .panel-wrapper {
	padding: 0;
}

/* Preloader */
.coda-slider p.loading { padding: 20px; text-align: center }

/* Don't change anything below here unless you know what you're doing */

/* Tabbed nav */
.coda-nav ul { clear: both; display: block; margin: auto; overflow: hidden }
.coda-nav ul li { display: inline }
.coda-nav ul li a { background: #000; color: #fff; display: block; float: left; margin-right: 1px; padding: 3px 6px; text-decoration: none }

/* Miscellaneous */
.coda-slider-wrapper { clear: both; overflow: auto }
.coda-slider { float: left; overflow: hidden; position: relative }
.coda-slider .panel { display: block; float: left }
.coda-slider .panel-container { position: relative }
.coda-nav-left, .coda-nav-right { float: left }
.coda-nav-left a, .coda-nav-right a { display: block; text-align: center; text-decoration: none }
