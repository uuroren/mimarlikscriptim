<?php
header('Content-Type: text/html');
header('Content-Disposition: attachment; filename=style.css');

$primary_color = $_POST['primary_color'];
$primary_color = ltrim($primary_color, '#');

$secondary_color = $_POST['secondary_color'];
$secondary_color = ltrim($secondary_color, '#');

$full_content =
"


/*
Main color:                     $primary_color
Alt color:                      $secondary_color
Body text color:                666666

Grey background color:          f9f9f9
Mid Grey background color:      f5f5f5
Border color:                   efefef

Black color:                    212121
Black background color:         212121
*/


/*
1. General Styles
2. Typography
3. Page preLoader
4. Main Wrapper
5. Page Variations
5.1 Left / Right Sidebar
5.2 Center
5.3 Columns
6. Page Title
6.1 Wide
6.2 Minimal
7. General Sections
8. Section Title
9. Header Section
10. Top Header
11. Header Menu
12. Sub Menu
13. Mega Menu
13.1 Default
14. Secondary Menu
15. Header Buttons
16. Header Cart
17. Header Language Menu
18. Header Variations
18.1 Left Header Menu
18.2 Center Header Menu
18.3 Fixed Header
18.4 Sidebar Header
18.5 Fixed Sidebar Header
18.6 Transparent Header
19. Buttons
20. Blog
20.1 Blog item Types
20.1.1 Blog item Link Type
20.1.2 Blog item Quote Type
20.2 Blog columns
20.2.1 col 1
20.2.2 col 2
20.2.3 col 3
20.3 Blog Small images
20.4 Blog Timeline
20.5 Blog Timeline Minimal
20.6 Blog Minimal
20.7 Blog Single item
20.8 Related Blog Posts
21. Widgets
21.1 Shop Products Widget Block
21.2 instagram Widget Block
21.3 Twitter Widget Block
21.4 Blog Posts Widget Block
21.5 Categories Widget Block
21.6 Advertisement Widget Block
21.7 Subscribe Widget Block
21.8 Tags Widget Block
21.9 Projects Widget Block
21.10 Link Widget Block
21.11 Events Widget Block
22. Portfolio
22.1 isotope Filter
22.2 Portfolio Columns
22.2.1 col 1
22.2.2 col 2
22.2.3 col 3
22.2.4 col 4
22.2.5 col 5
22.2.6 Wide
22.3 Title overlay
22.4 No Margin
22.5 Fullwidth Section
22.6 Portfolio Single item
22.7 Related Portfolio Projects
23. Shop
23.1 Shop Columns
23.1.1 col 2
23.1.2 col 3
23.1.3 col 4
23.1.4 col 5
23.2 Shop Single item
23.3 Related Shop Products
23.4 Payment
23.5 Place Order btn
24. Navigation Block
24.1 Button
24.2 Normal
24.3 Pager
24.4 Pager Prev / Next
24.4.1 Pager Prev / Next (Style 1)
24.4.2 Pager Prev / Next (Style 2)
24.4.3 Pager Prev / Next (Style 3)
24.4.4 Pager Prev / Next (Style 4)
25. Tags Block
26. Share Block
27. Author Block
28. Comments Block
28.1 Disqus Comments
28.2 Normal Comments
29. Forms
29.1 Header Search Form Block
29.2 Quantity Form Block
29.3 Shipping Calculator Form Block
29.4 Checkout Login Form Block
29.5 Checkout coupon Form Block
29.6 Checkout Form Block
29.7 Subscribe Form Block
29.8 Account Form Block
29.9 Search Form Block
29.10 Domain Form Block
30. Sliders
30.1 OWL Slider
30.2 OWL Slider Thumbs
30.3 Slider Revolution
30.4 Featured Blog Posts
31. info Block
32. ADS Block
33. Social icons Block
34. Social Feeds Blocks
34.1 instagram Feed Block
34.2 Twitter Feed Block
34.2.1 Twitter Feed Block Side By Side
34.2.2 Twitter Feed Block Style 1
35. Bootstrap Elements
35.1 Badge
35.3 Tooltip
35.4 Label (Forms)
35.5 Form Group
35.6 Form Control
35.7 input (Type Number)
35.8 textarea
35.9 Select
35.10 Blockquote
35.11 Tabs
35.12 Tables
35.13 Alerts
35.14 Mark
35.15 hr Line
35.16 Accordion
35.17 Radio / Checkbox
35.18 Modal
35.19 Panels
36. Rate Block
37. Quantity (input Number Counter)
38. Address Block
39. Navigation Block
40. Elements
40.1 gfort Block
40.1.1 gfort Block (Text)
40.1.2 gfort Block (icon)
40.1.3 gfort Block (image)
40.1.4 gfort Block (Media)
40.1.5 gfort Block (Multimedia)
40.1.6 gfort Block (Process)
40.1.7 gfort Block (Contact)
40.2 Dashed List
40.3 Dividers
40.4 gap
40.5 Video
40.5.1 Background
40.5.2 Normal
40.6 Audio
40.7 Clients
40.7.1 col 2
40.7.2 col 3
40.7.3 col 4
40.7.4 col 5
40.7.5 col 6
40.8 Counter Block
40.9 downTime Block
40.10 Progress Block
40.11 PIE Block
40.12 Skill Block
40.13 Process Block
40.14 Google Maps Block
40.15 Pricing Tables Block
40.16 call to Action Block
40.17 Testimonials
40.17.1 col 2
40.17.2 col 3
40.17.3 col 4
40.18 Timeline Block
40.19 Team Block
40.20 Gallery
40.20.1 col 2
40.20.2 col 3
40.20.3 col 4
40.20.4 col 5
40.21 PRE
40.22 Notifications
40.22.1 Style 1
40.22.2 Style 2
40.22.3 Style 3
40.22.4 Style 4
40.23 Triangle Block
40.24 Ribbon Block
41. Events
41.1 Events columns
41.1.1 col 1
41.1.2 col 2
41.1.3 col 3
41.2 Events Single item
41.3 Related Events Blocks
42. Search
42. SiteMap
44. To top button
45. Footer
45.1 Footer Top
45.2 Footer Copyright
46. Helper Classes
47. v1.2
47.1 Account Form Block
*/




/* =============================================================================
1. General Styles
============================================================================= */
/* Body
============================================================================= */
body {
	margin: 0;
	padding: 0;
	color: #666666;
	font-weight: 400;
	overflow-x: hidden;
	background-color: #ffffff;
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	font: 16px/26px 'Poppins', sans-serif;
}
body.stopScroll {
	height: 100%;
	overflow-y: hidden;
}



/* Link
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
a {
	color: #$primary_color;
	outline: none !important;
	text-decoration: none !important;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
a.no-transition {
	-webkit-transition: all 0s ease-in-out;
	transition: all 0s ease-in-out;
}

a:hover,
a:focus {
	color: #$secondary_color;
}



/* image
============================================================================= */
img { max-width: 100%; }



/* iframe
============================================================================= */
iframe { border: 0 !important; }



/* Colors
============================================================================= */
/* Selection Color
----------------------------------------------------------------------------- */
::selection {
	color: #ffffff;
	text-shadow: none;
	background-color: #$secondary_color;
}
::-webkit-selection {
	color: #ffffff;
	text-shadow: none;
	background-color: #$secondary_color;
}
::-moz-selection {
	color: #ffffff;
	text-shadow: none;
	background-color: #$secondary_color;
}


/* Background Colors
----------------------------------------------------------------------------- */
.main-background-color { background-color: #$primary_color; }
.alt-background-color { background-color: #$secondary_color; }
.grey-background-color { background-color: #f9f9f9; }
.white-background-color { background-color: #ffffff; }
.black-background-color { background-color: #212121; }



/* Misc
============================================================================= */
/* clearfix
----------------------------------------------------------------------------- */
.clearfix {
	width: 100%;
	display: block;
	overflow: hidden;
}


/* No Border Radius
----------------------------------------------------------------------------- */
.no-border-radius { border-radius: 0 !important; }


/* Strong
----------------------------------------------------------------------------- */
b, strong { font-weight: 600; }


/* ul / ol
----------------------------------------------------------------------------- */
ol,
ul {
	padding: 0 0 0 30px;
	margin: 0 auto 15px;
}
ol ol,
ol ul,
ul ol,
ul ul,
ol:last-child,
ul:last-child {
	margin-bottom: 0;
}

ol li,
ul li {
	margin-top: 4px;
}
ol li:first-child,
ul li:first-child {
	margin-top: 0;
}
ol ol li:first-child,
ol ul li:first-child,
ul ol li:first-child,
ul ul li:first-child {
	margin-top: 4px;
}

.icon-list {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
	margin: 0 auto 15px;
}
.icon-list li { width: 100%; }
.icon-list-half li {
	width: 50%;
	float: left;
}
.icon-list li i:first-child { margin-right: 5px; }


.sbs-list {
	padding: 0;
	width: 100%;
	display: block;
	list-style: none;
	margin: 0 auto 15px;
}

.sbs-list li {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 0 22px;
	padding: 0 0 17px;
	position: relative;
	border-bottom: 1px solid #efefef;
}
.sbs-list li:last-child {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}

.sbs-list .gfort-list-head { float: right; }
.sbs-list .gfort-list-head h5 {
	color: #212121;
	line-height: 20px;
}

.sbs-list .gfort-list-body { overflow: hidden; }
.sbs-list .gfort-list-body .gfort-list-title {
	width: 100%;
	display: block;
	margin: 0 auto;
}
.sbs-list .gfort-list-body .gfort-list-title h4 {
	color: #212121;
	font-size: 16px;
	font-weight: 700;
}
.sbs-list .gfort-list-body .gfort-list-desc {
	width: 100%;
	display: block;
	padding-top: 2px;
}


/* Display None
----------------------------------------------------------------------------- */
.displaynone > a { display: none !important; }


/* Align Right
----------------------------------------------------------------------------- */
.alignright {
	float: right;
	margin: 5px 0 15px 20px;
}


/* Align Left
----------------------------------------------------------------------------- */
.alignleft {
	float: left;
	margin: 5px 20px 15px 0;
}


/* Align Center
----------------------------------------------------------------------------- */
.aligncenter {
	display: block;
	margin: 0 auto 30px;
}


/* Padding Top in px
----------------------------------------------------------------------------- */
.pt-0 { padding-top: 0 !important; }
.pt-20 { padding-top: 20px !important; }
.pt-26 { padding-top: 26px !important; }
.pt-50 { padding-top: 50px !important; }


/* Padding Bottom in px
----------------------------------------------------------------------------- */
.pb-0 { padding-bottom: 0 !important; }
.pb-20 { padding-bottom: 20px !important; }
.pb-26 { padding-bottom: 26px !important; }
.pb-50 { padding-bottom: 50px !important; }


/* Margin Top in px
----------------------------------------------------------------------------- */
.mt-0 { margin-top: 0 !important; }
.mt-10 { margin-top: 10px !important; }
.mt-15 { margin-top: 15px !important; }
.mt-30 { margin-top: 30px !important; }
.mt-60 { margin-top: 60px !important; }


/* Margin Bottom in px
----------------------------------------------------------------------------- */
.mb-0 { margin-bottom: 0 !important; }
.mb-10 { margin-bottom: 10px !important; }
.mb-15 { margin-bottom: 15px !important; }
.mb-30 { margin-bottom: 30px !important; }
.mb-60 { margin-bottom: 60px !important; }


/* Opacity Hide
----------------------------------------------------------------------------- */
.opacityHide {
	opacity: 0;
	visibility: hidden;
}


/* Expand Button (Fancybox)
----------------------------------------------------------------------------- */
.btn-expand {
	margin: 0;
	padding: 0;
	top: -16px;
	left: -16px;
	width: 30px;
	height: 30px;
	z-index: 8050;
	display: block;
	font-size: 14px;
	line-height: 25px;
	position: absolute;
	border-radius: 50%;
	text-align: center;
	color: #ffffff !important;
	background-color: #000000;
	border: 2px solid #ffffff;
}
.btn-compress i::before { content: '\\f066'; }


/* Fancybox Title
----------------------------------------------------------------------------- */
.fancybox-skin { border-radius: 2px; }
.fancybox-title { font-weight: 500; }
.fancybox-title span {
	font-size: 12px;
	font-weight: 700;
	line-height: 20px;
}


/* Scale Hover
----------------------------------------------------------------------------- */
.scale-hover,
.scale-hover-2x {
	z-index: 10;
	overflow: hidden;
	display: inline-block;
}

.scale-hover img,
.scale-hover-2x img {
	width: 100%;
	display: inline-block !important;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.4s linear;
	transition: all 0.4s linear;
}

.scale-hover:hover img {
	-webkit-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
}
.scale-hover-2x:hover img {
	-webkit-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1);
}


/* overlay Hover
----------------------------------------------------------------------------- */
.overlay-hover,
.overlay-hover-2x {
	overflow: hidden;
	position: relative;
	display: inline-block;
}

.overlay-hover::after,
.overlay-hover::before,
.overlay-hover-2x::after,
.overlay-hover-2x::before {
	opacity: 0;
	width: 100%;
	display: block;
	text-align: center;
	position: absolute;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.overlay-hover::after,
.overlay-hover-2x::after {
	top: 0;
	left: 0;
	z-index: 2;
	content: '';
	height: 100%;
	background-color: #$primary_color;
}
.overlay-hover:hover::after,
.overlay-hover-2x:hover::after {
	opacity: 0.80;
}

.overlay-hover::before {
	left: 0;
	top: 50%;
	z-index: 3;
	line-height: 1;
	color: #ffffff;
	font-size: 16px;
	content: '\\f0c1';
	margin-top: -8px;
	font-family: 'FontAwesome';
}
.overlay-hover-2x::before {
	top: 50%;
	left: 50%;
	z-index: 3;
	width: 40px;
	height: 40px;
	color: #$primary_color;
	font-size: 16px;
	content: '\\f0c1';
	line-height: 40px;
	text-align: center;
	border-radius: 50%;
	margin: -20px 0 0 -20px;
	background-color: #ffffff;
	font-family: 'FontAwesome';
}
.overlay-hover[data-gfort-lightbox]::before,
.overlay-hover-2x[data-gfort-lightbox]::before,
.overlay-hover[href*=\"soundcloud\"][data-gfort-iframe]::before,
.overlay-hover-2x[href*=\"soundcloud\"][data-gfort-iframe]::before {
	content: '\\f002';
}

.overlay-hover:hover::before,
.overlay-hover-2x:hover::before {
	opacity: 1;

	-webkit-animation: overlayMoveIcon 0.6s ease forwards;
	animation: overlayMoveIcon 0.6s ease forwards;
}
@keyframes overlayMoveIcon { from { transform: translateY(50%); } }
@-webkit-keyframes overlayMoveIcon { from { -webkit-transform: translateY(50%); } }



/* Typed Cursor
----------------------------------------------------------------------------- */
.typed-cursor {
	opacity: 1;
	font-weight: 100;

	-webkit-animation: typedCursorBlink 0.7s infinite;
	animation: typedCursorBlink 0.7s infinite;
}
@keyframes typedCursorBlink {
	0% { opacity:1; }
	50% { opacity:0; }
	100% { opacity:1; }
}
@-webkit-keyframes typedCursorBlink {
	0% { opacity:1; }
	50% { opacity:0; }
	100% { opacity:1; }
}



/* Light Color
============================================================================= */
.light-color :-moz-placeholder { color: rgba(255, 255, 255, 0.90); }
.light-color ::-moz-placeholder { color: rgba(255, 255, 255, 0.90); }
.light-color :-ms-input-placeholder { color: rgba(255, 255, 255, 0.90); }
.light-color ::-webkit-input-placeholder { color: rgba(255, 255, 255, 0.90); }

.light-color.hr-divider,
.light-color .hr-divider {
	color: rgba(255, 255, 255, 0.10);
}

.light-color,
.light-color a:not(.btn):hover,
.light-color button:not(.btn):hover,
ul.blog-posts.light-color li a.blog-item-small-title:hover,
.light-color ul.blog-posts li a.blog-item-small-title:hover,
.light-color.widget-block a:not(.btn):hover,
.light-color .author-block-body .author-block-title a:hover,
.light-color.gfort-navigation-block .pagination > .disabled > a,
.light-color.gfort-navigation-block .pagination > .disabled > a:focus,
.light-color.gfort-navigation-block .pagination > .disabled > a:hover,
.light-color.gfort-navigation-block .pagination > .disabled > span,
.light-color.gfort-navigation-block .pagination > .disabled > span:focus,
.light-color.gfort-navigation-block .pagination > .disabled > span:hover,
.light-color .gfort-navigation-block .pagination > .disabled > a,
.light-color .gfort-navigation-block .pagination > .disabled > a:focus,
.light-color .gfort-navigation-block .pagination > .disabled > a:hover,
.light-color .gfort-navigation-block .pagination > .disabled > span,
.light-color .gfort-navigation-block .pagination > .disabled > span:focus,
.light-color .gfort-navigation-block .pagination > .disabled > span:hover,
.light-color.gfort-navigation-block ul.gfort-pager li a:hover i,
.light-color .gfort-navigation-block ul.gfort-pager li a:hover i,
.light-color.gfort-navigation-block ul.gfort-pager li a:hover .gfort-pager-title h6,
.light-color .gfort-navigation-block ul.gfort-pager li a:hover .gfort-pager-title h6,
.light-color.social-icons-block ul li a:nth-child(2) span,
.light-color .social-icons-block ul li a:nth-child(2) span,
.light-color.gfort-accordion .panel-heading .panel-title a.collapsed,
.light-color.gfort-accordion-style-1.gfort-accordion .panel-heading .panel-title a::before,
.light-color.icon-block.gfort-block-style-1:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-1:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-1:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-3:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-3:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-3:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-6:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-6:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-6:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-9:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-9:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-9:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-10:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-10:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-10:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-11:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-11:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-11:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-12:hover .gfort-block-head i,
.light-color.icon-block.icon-block-alt.gfort-block-style-12:hover .gfort-block-head i,
.light-color.icon-block.icon-block-main.gfort-block-style-12:hover .gfort-block-head i,
.light-color.breadcrumb-block .breadcrumb a:hover,
.light-color.breadcrumb-block .breadcrumb > li + li:before,
.light-color .shop-item-body .shop-item-meta span a:hover,
.light-color.gfort-tabs .tab-content .shop-tab-title span,
.light-color ul.events-blocks li a.event-item-small-title:hover,
.light-color .events-blocks .event-item a.event-item-small-title:hover,
.light-color .related-portfolio-projects ul.portfolio-projects li a.portfolio-item-small-title:hover,
.light-color.twitter-feed-block .twitter-date-btns a,
.light-color .twitter-feed-block .twitter-date-btns a,
.light-color.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-username a,
.light-color .twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-username a,
.light-color.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-screen-name a,
.light-color .twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-screen-name a {
	color: rgba(255, 255, 255, 0.85);
}

.light-color.social-icons-block ul li a:nth-child(2) span:last-child,
.light-color .social-icons-block ul li a:nth-child(2) span:last-child {
	color: rgba(255, 255, 255, 0.90);
}

.light-color.prettyprint,
.light-color.prettyprint .com,
.light-color.prettyprint .lit,
.light-color.prettyprint .pun,
.light-color.prettyprint .opn,
.light-color.prettyprint .clo,
.light-color.prettyprint .fun,
.light-color.prettyprint .str,
.light-color.prettyprint .atv,
.light-color.prettyprint .kwd,
.light-color.prettyprint .tag,
.light-color.prettyprint .typ,
.light-color.prettyprint .atn,
.light-color.prettyprint .dec,
.light-color.prettyprint .var,
.light-color.prettyprint .pln,
.light-color.gfort-panel .panel-default > .panel-heading,
.light-color h1, .light-color .h1,
.light-color h2, .light-color .h2,
.light-color h3, .light-color .h3,
.light-color h4, .light-color .h4,
.light-color h5, .light-color .h5,
.light-color h6, .light-color .h6,
.light-color.form-block-title *:not(.btn),
.section-title.light-color .hr-divider,
.section-title.light-color .light-color.hr-divider,
.section-title.light-color .light-color .hr-divider,
.light-color a:not(.btn),
.light-color button:not(.btn),
.light-color .form-control,
.light-color.social-icons-block ul li a i,
.light-color .social-icons-block ul li a i,
.light-color.section-title .section-main-title,
.light-color .gfort-block-body .gfort-block-title,
.light-color .comment-block-head *:not(a),
.light-color label.error,
.light-color .form-group label.error,
.light-color .gfort-radio,
.light-color .gfort-checkbox,
.light-color .form-block-title,
.light-color .downtime-col span,
.light-color.breadcrumb-title .breadcrumb-main-title,
.light-color.gfort-navigation-block,
.light-color.gfort-navigation-block .pagination > li > a,
.light-color .gfort-navigation-block .pagination > li > a,
.light-color.gfort-navigation-block .pagination > li > span,
.light-color .gfort-navigation-block .pagination > li > span,
.light-color.gfort-navigation-block .pager li > a,
.light-color .gfort-navigation-block .pager li > a,
.light-color.gfort-navigation-block .pager li > span,
.light-color .gfort-navigation-block .pager li > span,
.light-color.gfort-navigation-block ul.gfort-pager li a .gfort-pager-title h6,
.light-color .gfort-navigation-block ul.gfort-pager li a .gfort-pager-title h6,
blockquote.light-color,
.light-color blockquote,
blockquote.light-color small,
blockquote.light-color footer,
blockquote.light-color .small,
.light-color blockquote small,
.light-color blockquote footer,
.light-color blockquote .small,
blockquote.light-color::before,
.light-color blockquote::before,
.light-color.widget-block a:not(.btn),
.light-color .widget-block-container .widget-block-title *,
.light-color .blog-item-body .blog-item-title,
.light-color.blog-timeline .blog-item .blog-item-body .blog-item-title::before,
.light-color.blog-col-2.blog-timeline .blog-item .blog-item-body .blog-item-title::after,
.light-color.blog-timeline .blog-item .blog-item-container:hover .blog-item-body .blog-item-title::after,
.light-color.blog-timeline .blog-item .blog-item-container:hover .blog-item-body .blog-item-title::before,
.light-color.breadcrumb-block .breadcrumb a,
.light-color .pie-block-container h4,
.light-color .skill-block-container h4,
.light-color .team-block-title .team-block-name,
.light-color .team-block-title .team-block-subtitle,
.light-color.gfort-tabs .nav-tabs > li > a,
.light-color.gfort-tabs .nav > li > a:focus,
.light-color.gfort-tabs .nav > li > a:hover,
.light-color.gfort-tabs .nav-tabs > li.active > a,
.light-color.gfort-tabs .nav-tabs > li.active > a:focus,
.light-color.gfort-tabs .nav-tabs > li.active > a:hover,
ul.blog-posts.light-color li a.blog-item-small-title,
.light-color ul.blog-posts li a.blog-item-small-title,
.light-color.counter-block span[data-to],
.light-color .counter-block span[data-to],
.light-color .progress-block-container h6,
.light-color .progress-block-container .counter-block,
.light-color .timeline-block-body .timeline-block-title,
.light-color .timeline-block-head .timeline-block-date-year,
.light-color .timeline-block-head .timeline-block-date-from::after,
.light-color .timeline-block-body .timeline-block-title::after,
.light-color .timeline-block-body .timeline-block-title::before,
.light-color .timeline-block-container .timeline-block-item:hover .timeline-block-title::after,
.light-color .timeline-block-container .timeline-block-item:hover .timeline-block-title::before,
.light-color.gfort-accordion .panel-heading .panel-title a,
.light-color.gfort-accordion .panel-heading .panel-title a:hover,
.light-color.gfort-accordion .panel-heading .panel-title a:focus,
.light-color.gfort-accordion-style-1.gfort-accordion .panel-heading .panel-title a:hover::before,
.light-color .pricing-table-block-head .pricing-table-block-title h3,
.light-color .pricing-table-block-head .pricing-table-block-price h2,
.light-color .address-block-title h4,
.light-color.sbs-list .gfort-list-head h5,
.light-color .sbs-list .gfort-list-head h5,
.light-color.sbs-list .gfort-list-body .gfort-list-title h4,
.light-color .sbs-list .gfort-list-body .gfort-list-title h4,
.light-color .testimonials-item-footer .testimonials-item-meta-container h5,
.light-color .testimonials-item-style-3 .testimonials-item-container::before,
.light-color[data-slider-arrows-type=\"arrow\"] .owl-nav div,
.light-color [data-slider-arrows-type=\"arrow\"] .owl-nav div,
.light-color[data-slider-arrows-type=\"arrow\"].gfort-owl-slider.owl-theme .owl-nav div,
.light-color [data-slider-arrows-type=\"arrow\"].gfort-owl-slider.owl-theme .owl-nav div,
.light-color[data-slider-arrows-type=\"arrow\"] .gfort-owl-slider.owl-theme .owl-nav div,
.light-color [data-slider-arrows-type=\"arrow\"] .gfort-owl-slider.owl-theme .owl-nav div,
.light-color.icon-block.gfort-block .gfort-block-head,
.light-color.icon-block.gfort-block-style-2 .gfort-block-title i,
.light-color.icon-block.gfort-block-style-8 .gfort-block-title i,
.light-color.icon-block.gfort-block.icon-block-alt .gfort-block-head,
.light-color.icon-block.gfort-block.icon-block-main .gfort-block-head,
.light-color.process-block.gfort-block-style-4 .gfort-block-head i,
.light-color.process-block.gfort-block-style-5 .gfort-block-head i,
.light-color.process-block.gfort-block-style-6 .gfort-block-head i,
.light-color .shop-item-body .shop-item-meta span a,
.light-color.gfort-tabs .tab-content .shop-tab-title,
.light-color .sitemap-block-container .sitemap-list-title,
.light-color ul.portfolio-item-info li span,
.light-color .portfolio-item-body .portfolio-item-title,
.light-color .event-item-meta span i,
.light-color .related-portfolio-projects ul.portfolio-projects li a.portfolio-item-small-title,
.light-color .event-item-body .event-item-title,
.light-color ul.events-blocks li a.event-item-small-title,
.light-color .events-blocks .event-item a.event-item-small-title,
.light-color .downtime-counter-block-container .downtime-title,
.light-color.twitter-feed-block .twitter-date-btns a:hover,
.light-color .twitter-feed-block .twitter-date-btns a:hover,
.light-color.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-username a:hover,
.light-color .twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-username a:hover,
.light-color.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-screen-name a:hover,
.light-color .twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-screen-name a:hover {
	color: #ffffff;
}

.light-color ul.gfort-pager-style-1 li a * { color: #212121 !important; }


.light-color .form-control,
.light-color .blog-item-container,
.light-color.gfort-accordion .panel,
.light-color.gfort-panel .panel,
.light-color.gfort-panel .panel-default > .panel-heading,
.light-color.gfort-panel .panel-primary > .panel-heading,
.light-color.gfort-panel .panel-success > .panel-heading,
.light-color.gfort-panel .panel-info > .panel-heading,
.light-color.gfort-panel .panel-warning > .panel-heading,
.light-color.gfort-panel .panel-danger > .panel-heading,
.light-color .pricing-table-block-container,
.light-color.pricing-table-block-style-1 .pricing-table-block-body,
.light-color .testimonials-item-container .testimonials-item-body,
.light-color.image-block.gfort-block-style-1 .gfort-block-body,
.light-color.image-block.gfort-block-style-4 .gfort-block-container,
.light-color.text-block.gfort-block-style-2 .gfort-block-content,
.light-color.text-block.gfort-block-style-1 .gfort-block-container,
.light-color div.quantity span.add,
.light-color div.quantity span.sub,
.light-color .testimonials-item-style-3 .testimonials-item-container,
.light-color .timeline-block-container .timeline-block-body-container,
.light-color.account-form-block,
.light-color .search-item-container,
.light-color.icon-block.gfort-block:hover .gfort-block-head i,
.light-color.icon-block.gfort-block-style-8 .gfort-block-container,
.light-color.icon-block.gfort-block-style-9 .gfort-block-container,
.light-color.icon-block.gfort-block-style-10 .gfort-block-container,
.light-color.icon-block.gfort-block-style-11 .gfort-block-container,
.light-color.icon-block.gfort-block-style-12 .gfort-block-container,
.light-color.icon-block.gfort-block.icon-block-alt:hover .gfort-block-head i,
.light-color.icon-block.gfort-block.icon-block-main:hover .gfort-block-head i,
.light-color.contact-block.gfort-block:not(.gfort-block-style-1):not(.gfort-block-style-2),
.light-color.twitter-feed-block-sbs.twitter-feed-block .gfort-twitter-item .gfort-twitter-item-container,
.light-color .twitter-feed-block-sbs.twitter-feed-block .gfort-twitter-item .gfort-twitter-item-container {
	background-color: transparent;
}

.light-color.prettyprint,
.light-color.social-icons-block ul li a i,
.light-color .social-icons-block ul li a i,
.light-color.gfort-tabs-vertical.gfort-tabs .nav-tabs > li > a,
.light-color.gfort-accordion-style-1.gfort-accordion .panel-body,
.light-color.icon-block.gfort-block .gfort-block-head,
.light-color.icon-block.gfort-block.icon-block-alt .gfort-block-head,
.light-color.icon-block.gfort-block.icon-block-main .gfort-block-head,
nav.navigation-block.light-color ul li a:hover,
nav.navigation-block.light-color ul li.active a,
.light-color.process-block.gfort-block-style-4 .gfort-block-head i,
.light-color.process-block.gfort-block-style-5 .gfort-block-head i,
.light-color.process-block.gfort-block-style-6 .gfort-block-head i,
.light-color.process-block.gfort-block-style-4 .gfort-block-head:hover i,
.light-color.process-block.gfort-block-style-5 .gfort-block-head:hover i,
.light-color.process-block.gfort-block-style-6 .gfort-block-head:hover i,
.light-color .event-item-container .event-item-date,
.light-color.table-hover > tbody > tr:hover,
.light-color .table-hover > tbody > tr:hover,
.light-color.table-striped > tbody > tr:nth-of-type(odd),
.light-color .table-striped > tbody > tr:nth-of-type(odd),
.light-color.gfort-navigation-block .pager li > a:hover,
.light-color .gfort-navigation-block .pager li > a:hover {
	background-color: rgba(255, 255, 255, 0.05);
}

.light-color .progress-block-container .progress,
.light-color .widget-block-container .widget-block-title::after,
.light-color .widget-block-container .widget-block-title h6::after,
.light-color.gfort-navigation-block .pagination > li > a:hover,
.light-color .gfort-navigation-block .pagination > li > a:hover,
.light-color.gfort-navigation-block .pagination > .active > a,
.light-color.gfort-navigation-block .pagination > .active > a:focus,
.light-color.gfort-navigation-block .pagination > .active > a:hover,
.light-color.gfort-navigation-block .pagination > .active > span,
.light-color.gfort-navigation-block .pagination > .active > span:focus,
.light-color.gfort-navigation-block .pagination > .active > span:hover,
.light-color .gfort-navigation-block .pagination > .active > a,
.light-color .gfort-navigation-block .pagination > .active > a:focus,
.light-color .gfort-navigation-block .pagination > .active > a:hover,
.light-color .gfort-navigation-block .pagination > .active > span,
.light-color .gfort-navigation-block .pagination > .active > span:focus,
.light-color .gfort-navigation-block .pagination > .active > span:hover,
.light-color.gfort-navigation-block .pager li > a,
.light-color .gfort-navigation-block .pager li > a,
.light-color.gfort-navigation-block .pager li > span,
.light-color .gfort-navigation-block .pager li > span,
.light-color.gfort-navigation-block .pager li > a,
.light-color.gfort-navigation-block ul.gfort-pager-style-2 li a:hover,
.light-color .gfort-navigation-block ul.gfort-pager-style-2 li a:hover,
nav.navigation-block.light-color ul li a,
ul#payment.light-color li div:not(.radio),
.light-color ul#payment li div:not(.radio),
.light-color.pricing-table-block-style-1 .pricing-table-block-head,
.light-color .search-item-meta span.item-meta-format i,
.light-color .blog-item-meta span.item-meta-format a i,
.light-color.blog-single-item .blog-item .blog-item-format-content,
.light-color .timeline-block-container .timeline-block-body::after,
.light-color .timeline-block-container .timeline-block-body::before,
.light-color.gfort-tabs-vertical.gfort-tabs .nav-tabs > li > a:hover,
.light-color.gfort-tabs-vertical.gfort-tabs .nav-tabs > li.active > a,
.light-color.gfort-tabs-vertical.gfort-tabs .nav-tabs > li.active > a:focus,
.light-color .pricing-table-block-container .pricing-table-block-body::before {
	background-color: rgba(255, 255, 255, 0.10);
}

.light-color .timeline-date h4,
.light-color ul.links-block li a::before,
.light-color ul.categories-block li a::before,
.light-color.gfort-tabs .nav-tabs > li > a::after,
.light-color ul.gfort-pager-style-1 li a::after,
.light-color .sitemap-block-container ul li::after,
.light-color .sitemap-block-container ul li::before,
.light-color .progress-block-container .progress-bar,
.light-color.blog-col-1.blog-timeline .timeline-date::after,
.light-color.shop-single-item article.shop-item .shop-item-body .onsale,
.light-color .portfolio-col-1 .portfolio-item ul.portfolio-item-info::before,
.light-color.portfolio-single-item.portfolio-single-item-sbs .portfolio-item ul.portfolio-item-info::before,
.light-color.gfort-owl-slider.owl-theme .owl-dots .owl-dot:hover span,
.light-color .gfort-owl-slider.owl-theme .owl-dots .owl-dot:hover span,
.light-color.gfort-owl-slider.owl-theme .owl-dots .owl-dot.active span,
.light-color .gfort-owl-slider.owl-theme .owl-dots .owl-dot.active span {
	background-color: #ffffff;
}


.light-color.prettyprint { border-color: transparent; }

.light-color.sbs-list li,
.light-color .sbs-list li,
blockquote.light-color,
.light-color blockquote,
.light-color.share-block,
.light-color .share-block,
.light-color .form-control,
.light-color ul.blog-posts li,
.light-color.blog-items-small-thumbs .blog-item,
.light-color .widget-block-container .widget-block-body,
.light-color.gfort-navigation-block ul.gfort-pager,
.light-color .gfort-navigation-block ul.gfort-pager,
.light-color.gfort-navigation-block ul.gfort-pager-style-2 li a,
.light-color .gfort-navigation-block ul.gfort-pager-style-2 li a,
.light-color.author-block-container,
.light-color .author-block-container,
.light-color.related-blog-posts-container,
.light-color .related-blog-posts-container,
ul.comments-block-list.light-color,
.light-color ul.comments-block-list,
.light-color.gfort-tabs .nav-tabs,
.light-color.gfort-tabs-bordered.gfort-tabs .nav-tabs,
.light-color.gfort-tabs-bordered.gfort-tabs .tab-content,
.light-color.gfort-accordion .panel-body,
.light-color.gfort-accordion .panel-heading,
.light-color.gfort-accordion-style-1.gfort-accordion .panel-group .panel + .panel,
.light-color.breadcrumb-title,
.light-color.page-title-section,
.light-color.page-title-section.page-title-section-wide,
.light-color ul.shop-products li,
.light-color .address-block-container,
.light-color.table,
.light-color .table-orders tfoot,
.light-color.table-responsive > .table,
.light-color.table > tbody > tr > td,
.light-color.table > tbody > tr > th,
.light-color.table > tfoot > tr > td,
.light-color.table > tfoot > tr > th,
.light-color.table > thead > tr > td,
.light-color.table > thead > tr > th,
.light-color .table > tbody > tr > td,
.light-color .table > tbody > tr > th,
.light-color .table > tfoot > tr > td,
.light-color .table > tfoot > tr > th,
.light-color .table > thead > tr > td,
.light-color .table > thead > tr > th,
.light-color.account-form-block,
.light-color.gfort-panel .panel-default,
.light-color.gfort-panel .panel-primary,
.light-color.gfort-panel .panel-success,
.light-color.gfort-panel .panel-info,
.light-color.gfort-panel .panel-warning,
.light-color.gfort-panel .panel-danger,
.light-color.gfort-panel .panel-default > .panel-heading,
.light-color.gfort-panel .panel-primary > .panel-heading,
.light-color.gfort-panel .panel-success > .panel-heading,
.light-color.gfort-panel .panel-info > .panel-heading,
.light-color.gfort-panel .panel-warning > .panel-heading,
.light-color.gfort-panel .panel-danger > .panel-heading,
.light-color .blog-item-container .blog-item-body,
.light-color .blog-item-container .blog-item-footer,
.light-color .chosen-container-single .chosen-single,
.light-color .pricing-table-block-container,
.light-color.pricing-table-block-style-1 .pricing-table-block-body,
.light-color .testimonials-item-container .testimonials-item-body,
.light-color .testimonials-item-style-3 .testimonials-item-container,
.light-color.image-block.gfort-block-style-1 .gfort-block-body,
.light-color.image-block.gfort-block-style-4 .gfort-block-container,
.light-color .timeline-block-container .timeline-block-body-container,
.light-color.text-block.gfort-block-style-2 .gfort-block-content,
.light-color.text-block.gfort-block-style-1 .gfort-block-container,
.light-color.icon-block.gfort-block-style-8 .gfort-block-container,
.light-color.icon-block.gfort-block-style-9 .gfort-block-container,
.light-color.icon-block.gfort-block-style-10 .gfort-block-container,
.light-color.icon-block.gfort-block-style-11 .gfort-block-container,
.light-color.icon-block.gfort-block-style-12 .gfort-block-container,
.light-color.contact-block.gfort-block:not(.gfort-block-style-1):not(.gfort-block-style-2),
.light-color.featured-pricing-table-block::after,
.light-color .search-item-container .search-item-body,
.light-color div.quantity span.add,
.light-color div.quantity span.sub,
ul.dashed.light-color li,
.light-color ul.dashed li,
.light-color.breadcrumb-block,
.light-color .portfolio-col-1 .portfolio-item,
.light-color.portfolio-single-item .portfolio-item ul.portfolio-item-info,
.light-color.events-col-1 .event-item,
.light-color .related-events-blocks-container,
.light-color.events-single-item .downtime-counter-block-container,
.light-color.twitter-feed-block .twitter-head .twitter-avatar,
.light-color .twitter-feed-block .twitter-head .twitter-avatar,
.light-color.twitter-feed-block li.gfort-twitter-item .gfort-twitter-item-container,
.light-color .twitter-feed-block li.gfort-twitter-item .gfort-twitter-item-container,
.light-color.twitter-feed-block-sbs.twitter-feed-block .gfort-twitter-item .gfort-twitter-item-container,
.light-color .twitter-feed-block-sbs.twitter-feed-block .gfort-twitter-item .gfort-twitter-item-container {
	border-color: rgba(255, 255, 255, 0.10);
}

.light-color.gfort-accordion-style-1.gfort-accordion .panel-heading .panel-title a::before {
	border-color: rgba(255, 255, 255, 0.85);
}

.light-color .gfort-radio,
.light-color .gfort-checkbox,
.light-color .form-control:focus,
.light-color .timeline-date h4,
.light-color.gfort-owl-slider.owl-theme .owl-dots .owl-dot span,
.light-color .gfort-owl-slider.owl-theme .owl-dots .owl-dot span,
.light-color.gfort-owl-slider.owl-theme .owl-dots .owl-dot:hover span,
.light-color .gfort-owl-slider.owl-theme .owl-dots .owl-dot:hover span,
.light-color.gfort-owl-slider.owl-theme .owl-dots .owl-dot.active span,
.light-color .gfort-owl-slider.owl-theme .owl-dots .owl-dot.active span,
.shop-single-item.light-color article.shop-item .shop-item-body .onsale,
.light-color.gfort-accordion-style-1.gfort-accordion .panel-heading .panel-title a:hover::before {
	border-color: #ffffff;
}

.light-color .form-control.error { border-color: #ffffff !important; }

.light-color .testimonials-item-container .testimonials-item-body::after {
	left: 30px;
	bottom: -17px;
	border-bottom: 0;
	border-left: 16px solid transparent;
	border-right: 16px solid transparent;
	border-top: 16px solid rgba(255, 255, 255, 0.10);

	-webkit-transform: rotate(0deg);
	transform: rotate(0deg);
}

.light-color.prettyprint.linenums::before {
	-webkit-box-shadow: inset 41px 0 0 rgba(255, 255, 255, 0.10);
	-moz-box-shadow: inset 41px 0 0 rgba(255, 255, 255, 0.10);
	box-shadow: inset 41px 0 0 rgba(255, 255, 255, 0.10);
}

.light-color.blog-timeline::before {
	background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 30px, #ffffff 30px, #ffffff 100%);
	background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0) 30px, #ffffff 30px, #ffffff 100%);
	background: -o-linear-gradient(bottom, rgba(255, 255, 255, 0) 30px, #ffffff 30px, #ffffff 100%);
	background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 30px, #ffffff 30px, #ffffff 100%);
}

.light-color.blog-col-1.blog-timeline::before {
	background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 50px, #ffffff 50px, #ffffff 100%);
	background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0) 50px, #ffffff 50px, #ffffff 100%);
	background: -o-linear-gradient(bottom, rgba(255, 255, 255, 0) 50px, #ffffff 50px, #ffffff 100%);
	background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 50px, #ffffff 50px, #ffffff 100%);
}



/* Mobile Devices
============================================================================= */
.gfort-mobile-play-button,
.gfort-mobile-device .btn-expand,
.gfort-mobile-device .gfort-desktop-play-button,
.gfort-mobile-device .background-video-block .vjs-big-play-button,
.gfort-mobile-device .show-gfort-control-btns .gfort-control-btns,
.gfort-mobile-device div[data-youtube-video-url][data-youtube-video-autoplay=\"true\"] .gfort-control-btns {
	display: none;
}

.gfort-mobile-device .gfort-mobile-play-button { display: block; }

.gfort-mobile-device .overlay-section,
.gfort-mobile-device .parallax-section {
	background-attachment: scroll !important;
	background-position: center top !important;

	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
}

.gfort-mobile-device .background-video-block .vjs-control-bar,
.gfort-mobile-device .background-video-block .vjs-play-control,
.gfort-mobile-device .background-video-block .vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
	opacity: 1;
	display: block;
	visibility: visible;
}

.gfort-mobile-device .background-video-block .vjs-using-native-controls .vjs-control-bar {
	display: block !important;
}




/* =============================================================================
2. Typography
============================================================================= */
/* Heading
============================================================================= */
h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
	padding: 0;
	color: #212121;
	letter-spacing: 0;
	margin: 0 auto 15px;
}

h1:last-child, .h1:last-child,
h2:last-child, .h2:last-child,
h3:last-child, .h3:last-child,
h4:last-child, .h4:last-child,
h5:last-child, .h5:last-child,
h6:last-child, .h6:last-child {
	margin-bottom: 0;
}

h1, .h1 { font-size: 36px; line-height: 1.1; font-weight: 700; }
h2, .h2 { font-size: 30px; line-height: 1.2; font-weight: 700; }
h3, .h3 { font-size: 24px; line-height: 1.3; font-weight: 400; }
h4, .h4 { font-size: 20px; line-height: 1.3; font-weight: 400; }
h5, .h5 { font-size: 18px; line-height: 1.3; font-weight: 400; }
h6, .h6 { font-size: 16px; line-height: 1.3; font-weight: 700; }



/* Paragraph
============================================================================= */
p { margin: 0 0 15px 0; }
p:last-child { margin-bottom: 0; }



/* Poppins Font
============================================================================= */
.rs-subtitle,
.tooltip-inner {
	font-family: 'Poppins', sans-serif;
}



/* Montserrat Font
============================================================================= */
.btn,
.badge,
.label,
.onsale,
h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6,
.ribbon-block,
.navbar-brand,
.navbar-toggle,
.rs-heading-title,
span.number-block,
.downtime-col span,
ul.navbar-nav li a,
ul.shop-products li a,
ul.header-btns > li > a,
.secondary-menu ul li a,
.gfort-navigation-block,
.isotope-filter-container,
nav.navigation-block ul li a,
.header-language-menu ul li a,
.gfort-tabs .nav-tabs > li > a,
.gfort-page-preloader-container,
.shop-item-body .shop-item-button,
.gfort-block-body .gfort-block-btn,
.blog-item-body .blog-item-read-btn,
.event-item-body .event-item-read-btn,
.event-item-container .event-item-date,
ul.blog-posts li a.blog-item-small-title,
.pricing-table-block-head .price-duration,
ul.events-blocks li a.event-item-small-title,
.process-block.gfort-block .process-block-number,
.events-blocks .event-item a.event-item-small-title,
ul.portfolio-projects li a.portfolio-item-small-title,
.social-icons-block ul li a:nth-child(2) span:last-child,
.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-username a {
	font-family: 'Montserrat', sans-serif;
}




/* =============================================================================
3. Page preLoader
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.pace {
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 9999;
	display: block;
	position: fixed;
	background-color: #ffffff;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.no-js .pace,
.pace-done .pace {
	opacity: 0;
	visibility: hidden;
}


/* Progress Bar
----------------------------------------------------------------------------- */
.pace .pace-progress {
	top: 0;
	height: 4px;
	width: 100%;
	right: 100%;
	z-index: 9999;
	position: fixed;
	background-color: #$primary_color;
}


/* Text / Percent
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.pace-preloader-text-percent {
	left: 0;
	top: 50%;
	width: 100%;
	text-align: center;
	position: absolute;

	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

/* Container
--------------------------------------------------------- */
.gfort-page-preloader-container {
	line-height: 0;
	margin: 0 auto 5px;
	position: relative;
}

/* Divs Container
--------------------------------------------------------- */
.gfort-page-preloader-divs-container {
	position: relative;
	margin: 0 auto 5px;
	display: inline-block;
}
.gfort-page-preloader-divs-container div {
	float: left;
	background-color: #$primary_color;
}

/* Text
--------------------------------------------------------- */
.gfort-page-preloader-text {
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	line-height: 26px;
	position: relative;
}
.gfort-page-preloader-text::after {
	width: 100%;
	display: block;
	color: #212121;
	font-size: 18px;
	margin: 5px auto;
	position: relative;
	content: attr(data-progress-text);
}

/* Percentage
--------------------------------------------------------- */
.pace-preloader-text-percent::after {
	width: 100%;
	height: 26px;
	display: block;
	font-size: 24px;
	line-height: 26px;
	content: attr(data-progress-text);
}


/* Style 1
----------------------------------------------------------------------------- */
.page-preloader-style-1 .gfort-page-preloader-divs-container {
	height: 32px;
	padding-right: 3px;
}

.page-preloader-style-1 .gfort-page-preloader-divs-container div {
	width: 6px;
	height: 32px;
	margin-left: 3px;

	-webkit-animation: gfortLoaderAnimationOne 1.2s infinite ease-in-out;
	animation: gfortLoaderAnimationOne 1.2s infinite ease-in-out;
}
.page-preloader-style-1 .gfort-page-preloader-divs-container div.gfort-page-preloader-2 {
	-webkit-animation-delay: -1.1s;
	animation-delay: -1.1s;
}
.page-preloader-style-1 .gfort-page-preloader-divs-container div.gfort-page-preloader-3 {
	-webkit-animation-delay: -1.0s;
	animation-delay: -1.0s;
}
.page-preloader-style-1 .gfort-page-preloader-divs-container div.gfort-page-preloader-4 {
	-webkit-animation-delay: -0.9s;
	animation-delay: -0.9s;
}
.page-preloader-style-1 .gfort-page-preloader-divs-container div.gfort-page-preloader-5 {
	-webkit-animation-delay: -0.8s;
	animation-delay: -0.8s;
}


/* Style 2
----------------------------------------------------------------------------- */
.page-preloader-style-2 .gfort-page-preloader-divs-container {
	width: 56px;
	height: 56px;
	border-radius: 50%;
	margin: 0 auto 10px;
	border: 4px solid transparent;
	border-top-color: #$primary_color;

	-webkit-animation: gfortLoaderAnimationTwo 1s infinite ease-in-out alternate;
	animation: gfortLoaderAnimationTwo 1s infinite ease-in-out alternate;
}

.page-preloader-style-2 .gfort-page-preloader-divs-container::after {
	top: -4px;
	left: -4px;
	content: '';
	width: inherit;
	height: inherit;
	border: inherit;
	position: absolute;
	border-radius: inherit;

	-webkit-animation: gfortLoaderAnimationTwo 1.5s infinite ease-in-out alternate;
	animation: gfortLoaderAnimationTwo 1.5s infinite ease-in-out alternate;
}

.page-preloader-style-2 .gfort-page-preloader-divs-container div { display: none; }


/* Style 3
----------------------------------------------------------------------------- */
.page-preloader-style-3 .gfort-page-preloader-divs-container {
	width: 56px;
	height: 56px;
	border-radius: 50%;
	margin: 0 auto 10px;
	border: 4px solid transparent;
	border-top-color: #$primary_color;

	-webkit-animation: gfortLoaderAnimationTwo 1s infinite ease;
	animation: gfortLoaderAnimationTwo 1s infinite ease;
}
.page-preloader-style-3 .gfort-page-preloader-divs-container::after {
	top: -4px;
	left: -4px;
	content: '';
	width: inherit;
	height: inherit;
	border: inherit;
	position: absolute;
	border-radius: inherit;

	-webkit-animation: gfortLoaderAnimationTwo 1.5s infinite ease;
	animation: gfortLoaderAnimationTwo 1.5s infinite ease;
}

.page-preloader-style-3 .gfort-page-preloader-divs-container div { display: none; }


/* Style 4
----------------------------------------------------------------------------- */
.page-preloader-style-4 .gfort-page-preloader-divs-container { margin: 0 auto 10px; }

.page-preloader-style-4 .gfort-page-preloader-divs-container div {
	width: 16px;
	height: 16px;
	margin: 0 5px;
	border-radius: 50%;

	-webkit-transform: scale(0);
	transform: scale(0);

	-webkit-animation: gfortLoaderAnimationFour 1.4s infinite ease-in-out;
	animation: gfortLoaderAnimationFour 1.4s infinite ease-in-out;
}
.page-preloader-style-4 .gfort-page-preloader-divs-container div.gfort-page-preloader-2 {
	-webkit-animation-delay: 0.15s;
	animation-delay: 0.15s;
}
.page-preloader-style-4 .gfort-page-preloader-divs-container div.gfort-page-preloader-3 {
	-webkit-animation-delay: 0.30s;
	animation-delay: 0.30s;
}
.page-preloader-style-4 .gfort-page-preloader-divs-container div.gfort-page-preloader-4,
.page-preloader-style-4 .gfort-page-preloader-divs-container div.gfort-page-preloader-5 {
	display: none;
}


/* Style 5
----------------------------------------------------------------------------- */
.page-preloader-style-5 .gfort-page-preloader-divs-container div {
	width: 32px;
	height: 32px;
	margin: 0 5px;
	border-radius: 50%;

	-webkit-animation: gfortLoaderAnimationFive 0.75s infinite linear;
	animation: gfortLoaderAnimationFive 0.75s infinite linear;
}
.page-preloader-style-5 .gfort-page-preloader-divs-container div.gfort-page-preloader-2,
.page-preloader-style-5 .gfort-page-preloader-divs-container div.gfort-page-preloader-3,
.page-preloader-style-5 .gfort-page-preloader-divs-container div.gfort-page-preloader-4,
.page-preloader-style-5 .gfort-page-preloader-divs-container div.gfort-page-preloader-5 {
	display: none;
}


/* Style 6
----------------------------------------------------------------------------- */
.page-preloader-style-6 .gfort-page-preloader-divs-container div {
	width: 16px;
	height: 16px;
	margin: 0 5px;
	border-radius: 50%;

	-webkit-animation: gfortLoaderAnimationFive 0.75s infinite linear;
	animation: gfortLoaderAnimationFive 0.75s infinite linear;
}
.page-preloader-style-6 .gfort-page-preloader-divs-container div.gfort-page-preloader-1 {
	-webkit-animation-delay: -1.1s;
	animation-delay: -1.1s;
}
.page-preloader-style-6 .gfort-page-preloader-divs-container div.gfort-page-preloader-2 {
	-webkit-animation-delay: -1.2s;
	animation-delay: -1.2s;
}
.page-preloader-style-6 .gfort-page-preloader-divs-container div.gfort-page-preloader-3 {
	-webkit-animation-delay: -1.3s;
	animation-delay: -1.3s;
}
.page-preloader-style-6 .gfort-page-preloader-divs-container div.gfort-page-preloader-4,
.page-preloader-style-6 .gfort-page-preloader-divs-container div.gfort-page-preloader-5 {
	display: none;
}


/* Animation
----------------------------------------------------------------------------- */
/* Style 1
--------------------------------------------------------- */
@-webkit-keyframes gfortLoaderAnimationOne {
	0%,
	40%,
	100% {
		-webkit-transform: scaleY(0.4);
	}
	20% {
		-webkit-transform: scaleY(1);
	}
}
@keyframes gfortLoaderAnimationOne {
	0%,
	40%,
	100% {
		transform: scaleY(0.4);
	}
	20% {
		transform: scaleY(1);
	}
}

/* Style 2 / 3
--------------------------------------------------------- */
@-webkit-keyframes gfortLoaderAnimationTwo {
	from { -webkit-transform: rotate(0deg); }
	to { -webkit-transform: rotate(360deg); }
}
@keyframes gfortLoaderAnimationTwo {
	from { transform: rotate(0deg); }
	to { transform: rotate(360deg); }
}

/* Style 4
--------------------------------------------------------- */
@-webkit-keyframes gfortLoaderAnimationFour {
	0%,
	100%,
	80% {
		-webkit-transform: scale(0);
	}
	40% {
		-webkit-transform: scale(1);
	}
}
@keyframes gfortLoaderAnimationFour {
	0%,
	100%,
	80% {
		transform: scale(0);
	}
	40% {
		transform: scale(1);
	}
}

/* Style 5 / 6
--------------------------------------------------------- */
@-webkit-keyframes gfortLoaderAnimationFive {
	0% { -webkit-transform: translate(0, 0%) scale(1, 0.8); }
	30% { -webkit-transform: translate(0, -50%) scale(0.8, 0.8); }
	60% { -webkit-transform: translate(0, -100%) scale(0.8, 1); }
	85% { -webkit-transform: translate(0, -50%) scale(0.8, 1); }
	90% { -webkit-transform: translate(0, -50%) scale(0.8, 1); }
	100% { -webkit-transform: translate(0, 0%) scale(1, 0.8); }
}
@keyframes gfortLoaderAnimationFive {
	0% { transform: translate(0, 0%) scale(1, 0.8); }
	30% { transform: translate(0, -50%) scale(0.8, 0.8); }
	60% { transform: translate(0, -100%) scale(0.8, 1); }
	85% { transform: translate(0, -50%) scale(0.8, 1); }
	90% { transform: translate(0, -50%) scale(0.8, 1); }
	100% { transform: translate(0, 0%) scale(1, 0.8); }
}




/* =============================================================================
4. Main Wrapper
============================================================================= */
#main-wrapper {
opacity: 0;
padding: 0;
z-index: 2;
width: 100%;
display: block;
margin: 0 auto;
position: relative;
background-color: #ffffff;

-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}
.no-js #main-wrapper { opacity: 1; }




/* =============================================================================
5. Page Variations
============================================================================= */
/* Boxed
============================================================================= */
.page-boxed {
	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.page-boxed #main-wrapper {
	-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.10);
	-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.10);
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.10);
}

.page-boxed #main-wrapper,
.page-boxed .header-section,
.page-boxed .fixed-header .header-menu-stuck {
	max-width: 1200px;
}

.page-boxed.page-boxed-style-1 #main-wrapper { margin: 30px auto; }


/* Page Body
============================================================================= */
.page-body {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}



/* Main Content
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.main-content {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.main-content-container {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}



/* Main Sidebar
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.main-sidebar {
	padding: 0;
	width: 100%;
	display: none;
	margin: 0 auto;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.main-sidebar-container {
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	padding: 0 15px 40px;
}



/* 5.1 Left / Right Sidebar
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.page-left-sidebar .main-sidebar,
.page-right-sidebar .main-sidebar {
	display: block;
}


/* Responsive (>= 320px)
----------------------------------------------------------------------------- */
@media (min-width: 479px) {

	.page-left-sidebar,
	.page-right-sidebar {
		width: 310px;
	}

	.page-left-sidebar .main-content .container,
	.page-right-sidebar .main-content .container {
		width: 100%;
	}

}


/* Responsive (>= 480px)
----------------------------------------------------------------------------- */
@media (min-width: 480px) {

	.page-left-sidebar,
	.page-right-sidebar {
		width: 470px;
	}

	.page-left-sidebar .main-content .container,
	.page-right-sidebar .main-content .container {
		width: 100%;
	}

}


/* Responsive (>= 768px)
----------------------------------------------------------------------------- */
@media (min-width: 768px) {

	.page-left-sidebar,
	.page-right-sidebar {
		width: 750px;
	}

	.page-left-sidebar .main-content .container,
	.page-right-sidebar .main-content .container {
		width: 100%;
	}

}


/* Responsive (>= 992px)
----------------------------------------------------------------------------- */
@media (min-width: 992px) {

	.page-left-sidebar,
	.page-right-sidebar {
		width: 970px;
	}

	.page-left-sidebar .main-content,
	.page-right-sidebar .main-content {
		width: 690px;
	}

	.main-sidebar { width: 280px; }

	.page-left-sidebar .main-sidebar,
	.page-right-sidebar .main-content {
		float: left;
	}

	.page-left-sidebar .main-content,
	.page-right-sidebar .main-sidebar {
		float: right;
	}

	.main-sidebar-container { padding-top: 80px; }

}


/* Responsive (>= 1200px)
----------------------------------------------------------------------------- */
@media (min-width: 1200px) {

	.page-left-sidebar,
	.page-right-sidebar {
		width: 1170px;
	}

	.page-left-sidebar .main-content,
	.page-right-sidebar .main-content {
		width: 840px;
	}

	.main-sidebar { width: 330px; }

}



/* 5.2 Center
============================================================================= */
@media (min-width: 1200px) { .page-center .main-content .container { width: 990px; } }



/* 5.3 Columns
============================================================================= */
/* 25%
----------------------------------------------------------------------------- */
.col-w-25 { width: 25% !important; }


/* 75%
----------------------------------------------------------------------------- */
.col-w-75 { width: 75% !important; }




/* =============================================================================
6. Page Title
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.page-title-section {
	padding: 0;
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}



/* Title
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.breadcrumb-title {
	z-index: 9;
	width: 100%;
	margin: 0 auto;
	display: block;
	padding: 60px 0;
	overflow: hidden;
	position: relative;
	border-bottom: 1px solid #efefef;
}
.page-title-section[style*=\"url\"] .breadcrumb-title { padding: 80px 0; }


/* Main Title
----------------------------------------------------------------------------- */
.breadcrumb-title .breadcrumb-main-title {
	line-height: 1;
	margin: 0 auto;
	color: #212121;
	font-size: 28px;
	text-transform: uppercase;
}


/* Subtitle
----------------------------------------------------------------------------- */
.breadcrumb-title .breadcrumb-subtitle {
	font-weight: 500;
	margin: 8px auto 0;
}



/* Breadcrumb
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.breadcrumb-block {
	z-index: 9;
	padding: 0;
	width: 100%;
	line-height: 0;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	position: relative;
	background-color: #ffffff;
	border-bottom: 1px solid #efefef;
}


/* Breadcrumb List
----------------------------------------------------------------------------- */
.breadcrumb-block .breadcrumb {
	width: auto;
	margin: 0 auto;
	padding: 13px 0;
	font-size: 15px;
	font-weight: 500;
	text-align: left;
	overflow: hidden;
	border-radius: 0;
	line-height: 24px;
	position: relative;
	display: inline-block;
	letter-spacing: 0.30px;
	background-color: transparent;
}


/* items
----------------------------------------------------------------------------- */
.breadcrumb-block .breadcrumb > li {
	margin: 0;
	float: left;
}


/* Link
----------------------------------------------------------------------------- */
.breadcrumb-block .breadcrumb a {
	color: #212121;
	display: inline-block;
}


/* icon
----------------------------------------------------------------------------- */
.breadcrumb-block .breadcrumb i {
	line-height: 16px;
	display: inline-block;
	vertical-align: middle;
}


/* Separator
----------------------------------------------------------------------------- */
.breadcrumb-block .breadcrumb > li + li:before {
	padding: 0 7px;
	color: #666666;
	font-size: 18px;
	content: '\\f105';
	line-height: 24px;
	display: inline-block;
	vertical-align: middle;
	font-family: 'FontAwesome';
}


/* Hover / Active
----------------------------------------------------------------------------- */
.breadcrumb-block .breadcrumb a:hover { color: #$primary_color; }
.breadcrumb-block .breadcrumb > .active { color: inherit; }



/* 6.1 Wide
============================================================================= */
/* Wrapper / Container
----------------------------------------------------------------------------- */
.page-title-section.page-title-section-wide { border-bottom: 1px solid #efefef; }
@media (min-width: 768px) { .page-title-section.page-title-section-wide .section-container { width: 750px; } }
@media (min-width: 992px) { .page-title-section.page-title-section-wide .section-container { width: 970px; } }
@media (min-width: 1200px) { .page-title-section.page-title-section-wide .section-container { width: 1170px; } }
.page-title-section.page-title-section-wide .container { width: 100%; }


/* Title
----------------------------------------------------------------------------- */
.page-title-section.page-title-section-wide .breadcrumb-title {
	float: left;
	width: auto;
	padding: 28px 0;
	border-bottom: 0;
}
.page-title-section.page-title-section-wide .breadcrumb-title .breadcrumb-main-title { font-size: 24px; }
.page-title-section.page-title-section-wide .breadcrumb-title .breadcrumb-subtitle { display: none; }


/* Breadcrumb
----------------------------------------------------------------------------- */
.page-title-section.page-title-section-wide .breadcrumb-block {
	width: auto;
	float: right;
	border-bottom: 0;
	background-color: transparent;
}
.page-title-section.page-title-section-wide .breadcrumb-block .breadcrumb { padding: 28px 0; }



/* 6.2 Minimal
============================================================================= */
/* Title
----------------------------------------------------------------------------- */
.page-title-section.page-title-section-minimal .breadcrumb-title { display: none; }


/* Breadcrumb
----------------------------------------------------------------------------- */
.page-title-section.page-title-section-minimal .breadcrumb-block { background-color: transparent; }
.page-title-section.page-title-section-minimal .breadcrumb-block .breadcrumb { padding: 20px 0 16px; }




/* =============================================================================
7. General Sections
============================================================================= */
/* gfort Section
----------------------------------------------------------------------------- */
.gfort-section {
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	padding: 80px 0 50px;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}


/* Triangle Section
----------------------------------------------------------------------------- */
.triangle-section {
	z-index: 4;
	padding: 0;
}
.triangle-section * { min-height: 0; }


/* Half Section
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.half-section.left-side-media { padding-left: 50%; }
.half-section.right-side-media { padding-right: 50%; }

/* Media
--------------------------------------------------------- */
.half-section .half-section-media {
	top: 0;
	width: 50%;
	z-index: 10;
	height: 100%;
	overflow: hidden;
	position: absolute;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.half-section.left-side-media .half-section-media { left: 0; }
.half-section.right-side-media .half-section-media { right: 0; }

/* Section Container
--------------------------------------------------------- */
.half-section .section-container { max-width: 585px; }
.half-section.left-side-media .section-container {
	margin-left: 0;
	padding-left: 15px;
}
.half-section.right-side-media .section-container {
	margin-right: 0;
	padding-right: 15px;
}

/* Container
--------------------------------------------------------- */
.half-section .container { width: 100%; }

/* image
--------------------------------------------------------- */
.half-section .half-section-media img.small-screen-image {
	width: 100%;
	display: none;
}
.half-section .half-section-media img:not(.small-screen-image) {
	bottom: 0;
	width: auto;
	height: 90%;
	max-width: none;
	position: absolute;
}
.half-section.left-side-media .half-section-media img:not(.small-screen-image) { right: 0; }
.half-section.right-side-media .half-section-media img:not(.small-screen-image) { left: 0; }


/* overlay Section
----------------------------------------------------------------------------- */
.overlay-section {
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.overlay-section::after {
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	content: '';
	opacity: 0.60;
	position: absolute;
	background-color: #$primary_color;
}


/* Parallax Section
----------------------------------------------------------------------------- */
.parallax-section {
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: 125%;
	-moz-background-size: 125%;
	-o-background-size: 125%;
	background-size: 125%;
}
.parallax-section-effect { background-attachment: fixed; }


/* Full Width
----------------------------------------------------------------------------- */
.fullwidth-section .container,
.page-center .fullwidth-section .container {
	padding: 0;
	width: 100%;
	max-width: none;
}


/* Portfolio Section
----------------------------------------------------------------------------- */
.portfolio-section {
	padding: 0;
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Shop Section
----------------------------------------------------------------------------- */
.shop-section {
	padding: 0;
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Video Section
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.video-section {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}

/* Container
--------------------------------------------------------- */
.video-section .section-container { padding: 255px 0 225px; }
@media (min-width: 1920px) { .video-section .section-container { padding: 380px 0 350px; } }

/* Section Title
--------------------------------------------------------- */
/* Wrapper */
.video-section .section-title {
	overflow: visible;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.video-section.video-is-playing .section-title[data-hide-on-play=\"true\"] {
	opacity: 0;
	visibility: hidden;
}

/* Main Title */
.video-section .section-title .section-main-title {
	font-size: 35px;
	margin-top: -2px;
	min-height: 42px;
	position: relative;
}

/* Full Height
--------------------------------------------------------- */
.video-section.full-height { height: 100vh; }
.video-section.full-height .section-container {
	padding: 0;
	height: 100%;
}
.video-section.full-height .section-container .col-md-12 {
	left: 0;
	top: 50%;
	position: absolute;

	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}


/* Container
----------------------------------------------------------------------------- */
.section-container {
	padding: 0;
	z-index: 9;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}
.section-container::after {
	content: '';
	clear: both;
	display: table;
}




/* =============================================================================
8. Section Title
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.section-title {
	z-index: 9;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 25px;
}
.intro-section-title { margin-bottom: 30px; }


/* Main Title
----------------------------------------------------------------------------- */
.section-title .section-main-title {
	padding: 0;
	color: #$secondary_color;
	margin: 0 auto;
	font-size: 28px;
}
.section-title .section-main-title-lg { font-size: 150px; }
.intro-section-title .section-main-title { font-size: 45px; }


/* Subtitle
----------------------------------------------------------------------------- */
.section-title .section-subtitle { margin: 10px auto 0; }
.text-center.section-title .section-subtitle {
	max-width: 750px;
	margin-top: 15px;
}
.intro-section-title .section-subtitle {
	font-size: 20px;
	margin-top: 15px;
	line-height: 30px;
}


/* Button
----------------------------------------------------------------------------- */
.section-title .section-button {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	padding: 10px 0 0;
}
.section-title .section-button a.btn { margin-top: 15px; }
.section-title.text-center .section-button a.btn {
	margin-left: 7px;
	margin-right: 7px;
}


/* Divider
----------------------------------------------------------------------------- */
.section-title .hr-divider { margin: 15px auto 0; }
.section-title.text-center .hr-divider { margin: 25px auto 20px; }



/* Section Title Medium
============================================================================= */
.section-title-md .section-main-title { font-size: 22px; }
.section-title-md .section-subtitle { margin-top: 2px; }



/* Section Title Small
============================================================================= */
.section-title-sm .section-main-title {
	font-size: 20px;
	font-weight: 400;
}
.section-title-sm .section-subtitle { margin-top: 10px; }




/* =============================================================================
9. Header Section
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.header-section {
	padding: 0;
	width: 100%;
	z-index: 100;
	display: block;
	margin: 0 auto;
	position: relative;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}


/* Container
----------------------------------------------------------------------------- */
.header-section-container {
	padding: 0;
	width: 100%;
	z-index: 100;
	display: block;
	margin: 0 auto;
	position: relative;
}




/* =============================================================================
10. Top Header
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.top-header {
	z-index: 5;
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	text-align: center;
	background-color: #ffffff;
	border-bottom: 1px solid #efefef;
}


/* Link
----------------------------------------------------------------------------- */
.top-header a { color: #212121; }
.top-header a:hover { color: #$primary_color; }


/* Logo
----------------------------------------------------------------------------- */
.col-w-25 .top-header-widget-container .navbar-brand {
	margin: 0 auto;
	line-height: 90px;
}
.col-w-25 .top-header-widget-container .navbar-brand > img { max-height: 90px; }



/* Top Header Widget
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.top-header-widget {
	z-index: 5;
	width: 100%;
	display: block;
	margin: 0 auto;
	line-height: 0;
	position: relative;
	padding: 10px 15px;
}


/* Container
----------------------------------------------------------------------------- */
.top-header-widget-container {
	padding: 0;
	position: relative;
	display: inline-block;
}
.top-header-widget-container::after {
	content: '';
	clear: both;
	display: table;
}




/* =============================================================================
11. Header Menu
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.header-menu {
	z-index: 4;
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.header-menu-container {
	z-index: 4;
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	background-color: #ffffff;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;

	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	-moz-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
}


/* Navbar
----------------------------------------------------------------------------- */
.navbar {
	border: 0;
	margin: 0;
	min-height: 1px;
	border-radius: 0;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}



/* Logo
============================================================================= */
/* Link
----------------------------------------------------------------------------- */
.navbar-brand {
	padding: 0;
	height: auto;
	color: #212121;
	font-size: 30px;
	font-weight: 700;
	line-height: 50px;
	margin: 15px auto;
	text-transform: uppercase;
}

.navbar > .container .navbar-brand,
.navbar > .container-fluid .navbar-brand {
	margin-left: auto;
}

/* image
----------------------------------------------------------------------------- */
.navbar-brand > img {
	margin: 0 auto;
	max-width: 100%;
	max-height: 50px;
}
.navbar-brand > img.transparent-header-logo { display: none; }



/* Menu Button
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.navbar-toggle {
	border: 0;
	padding: 0;
	height: 16px;
	font-size: 0;
	line-height: 0;
	margin: 32px 0;
	color: #212121;
	border-radius: 0;
	font-weight: 400;
	overflow: hidden;
	text-transform: uppercase;
}
.header-menu-left-side .navbar-toggle {
	float: left;
	margin: 22px 0;
}


/* Normal
----------------------------------------------------------------------------- */
/* span
--------------------------------------------------------- */
.navbar-toggle span {
	font-size: 14px;
	overflow: hidden;
	line-height: 16px;
	position: relative;
	display: inline-block;
	vertical-align: middle;
}
.navbar-toggle span.menu-wd { padding-right: 5px; }
.navbar-toggle span.lines-wrapper {
	width: 16px;
	height: 16px;
	font-size: 16px;
	line-height: 16px;

	-webkit-transform-origin: center;
	-ms-transform-origin: center;
	transform-origin: center;

	-webkit-transition: transform 0.30s ease-in-out;
	transition: transform 0.30s ease-in-out;

	-webkit-animation: gfortMenuButton 1s forwards;
	animation: gfortMenuButton 1s forwards;
}

/* Lines
--------------------------------------------------------- */
.navbar-toggle span.lines-wrapper i {
	width: 100%;
	height: 2px;
	margin: 7px 0;
	display: block;
	position: relative;
	background-color: #212121;

	-webkit-animation: gfortMenuButtonLines 1s forwards;
	animation: gfortMenuButtonLines 1s forwards;
}
.navbar-toggle span.lines-wrapper i::after,
.navbar-toggle span.lines-wrapper i::before {
	left: 0;
	height: 2px;
	width: 100%;
	content: '';
	display: block;
	position: absolute;
	background-color: #212121;

	-webkit-transform-origin: center;
	-ms-transform-origin: center;
	transform-origin: center;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.navbar-toggle span.lines-wrapper i::after {
	-webkit-animation: gfortMenuButtonLinesBottom 1.5s forwards;
	animation: gfortMenuButtonLinesBottom 1.5s forwards;
}
.navbar-toggle span.lines-wrapper i::before {
	-webkit-animation: gfortMenuButtonLinesTop 1.5s forwards;
	animation: gfortMenuButtonLinesTop 1.5s forwards;
}


/* Toggle
----------------------------------------------------------------------------- */
/* span
--------------------------------------------------------- */
.gfort-menuButton-toggle.navbar-toggle span.lines-wrapper {
	-webkit-animation: gfortMenuButtonToggle 1s forwards;
	animation: gfortMenuButtonToggle 1s forwards;
}

/* Lines
--------------------------------------------------------- */
.gfort-menuButton-toggle.navbar-toggle span.lines-wrapper i {
	-webkit-animation: gfortMenuButtonLinesToggle 1s forwards;
	animation: gfortMenuButtonLinesToggle 1s forwards;
}
.gfort-menuButton-toggle.navbar-toggle span.lines-wrapper i::after {
	-webkit-animation: gfortMenuButtonLinesBottomToggle 1.5s forwards;
	animation: gfortMenuButtonLinesBottomToggle 1.5s forwards;
}
.gfort-menuButton-toggle.navbar-toggle span.lines-wrapper i::before {
	-webkit-animation: gfortMenuButtonLinesTopToggle 1.5s forwards;
	animation: gfortMenuButtonLinesTopToggle 1.5s forwards;
}


/* Animation
----------------------------------------------------------------------------- */
/* Normal
--------------------------------------------------------- */
/* Wrapper */
@-webkit-keyframes gfortMenuButton {
	50% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(180deg); }
}
@keyframes gfortMenuButton {
	50% { transform: rotate(0deg); }
	100% { transform: rotate(180deg); }
}

/* Lines (Middle) */
@-webkit-keyframes gfortMenuButtonLines {
	0%, 50% { background-color: transparent; }
	100% { background-color: #212121; }
}
@keyframes gfortMenuButtonLines {
	0%, 50% { background-color: transparent; }
	100% { background-color: #212121; }
}

/* Lines (Bottom) */
@-webkit-keyframes gfortMenuButtonLinesBottom {
	0% {
		bottom: 0;
		-webkit-transform: rotate(45deg);
	}
	50% {
		bottom: 0;
		-webkit-transform: rotate(0);
	}
	100% {
		bottom: -5px;
	}
}
@keyframes gfortMenuButtonLinesBottom {
	0% {
		bottom: 0;
		transform: rotate(45deg);
	}
	50% {
		bottom: 0;
		transform: rotate(0);
	}
	100% {
		bottom: -5px;
	}
}

/* Lines (Top) */
@-webkit-keyframes gfortMenuButtonLinesTop {
	0% {
		top: 0;
		-webkit-transform: rotate(-45deg);
	}
	50% {
		top: 0;
		-webkit-transform: rotate(0);
	}
	100% {
		top: -5px;
	}
}
@keyframes gfortMenuButtonLinesTop {
	0% {
		top: 0;
		transform: rotate(-45deg);
	}
	50% {
		top: 0;
		transform: rotate(0);
	}
	100% {
		top: -5px;
	}
}


/* Toggle
--------------------------------------------------------- */
/* Wrapper */
@-webkit-keyframes gfortMenuButtonToggle {
	50% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(-180deg); }
}
@keyframes gfortMenuButtonToggle {
	50% { transform: rotate(0deg); }
	100% { transform: rotate(-180deg); }
}

/* Lines (Middle) */
@-webkit-keyframes gfortMenuButtonLinesToggle {
	0%, 50% { background-color: #212121; }
	51%, 100% { background-color: transparent; }
}
@keyframes gfortMenuButtonLinesToggle {
	0%, 50% { background-color: #212121; }
	51%, 100% { background-color: transparent; }
}

/* Lines (Bottom) */
@-webkit-keyframes gfortMenuButtonLinesBottomToggle {
	0% {
		bottom: -5px;
	}
	50% {
		bottom: 0;
		-webkit-transform: rotate(0);
	}
	100% {
		-webkit-transform: rotate(45deg);
	}
}
@keyframes gfortMenuButtonLinesBottomToggle {
	0% {
		bottom: -5px;
	}
	50% {
		bottom: 0;
		transform: rotate(0);
	}
	100% {
		transform: rotate(45deg);
	}
}

/* Lines (Top) */
@-webkit-keyframes gfortMenuButtonLinesTopToggle {
	0% {
		top: -5px;
	}
	50% {
		top: 0;
		-webkit-transform: rotate(0);
	}
	100% {
		-webkit-transform: rotate(-45deg);
	}
}
@keyframes gfortMenuButtonLinesTopToggle {
	0% {
		top: -5px;
	}
	50% {
		top: 0;
		transform: rotate(0);
	}
	100% {
		transform: rotate(-45deg);
	}
}



/* Menu
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.navbar-collapse.collapse {
	margin: 0;
	border: 0;
	padding: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
@media (min-width: 768px) { .navbar-collapse.collapse { float: right; } }


/* List
----------------------------------------------------------------------------- */
ul.navbar-nav {
	padding: 0;
	width: auto;
	margin: 0 -15px;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
ul.navbar-nav > li { margin: 0 15px; }


/* Link
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.navbar-nav > li > a {
	color: #212121;
	padding: 30px 0;
	font-size: 13px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	letter-spacing: 0.30px;
	text-transform: uppercase;
}

/* Line
--------------------------------------------------------- */
ul.navbar-nav > li > a::after {
	top: 0;
	width: 0;
	left: 50%;
	content: '';
	height: 2px;
	z-index: 10;
	position: absolute;
	background-color: #$primary_color;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

/* Hover / Focus / Current
--------------------------------------------------------- */
ul.navbar-nav > li > a:hover,
ul.navbar-nav > li > a:focus,
ul.navbar-nav > li.current_page_item > a {
	background-color: transparent;
}

ul.navbar-nav > li > a:hover::after,
ul.navbar-nav > li.current_page_item > a::after,
[data-spy=\"scroll\"] ul.navbar-nav > li.active > a::after {
	left: 0;
	width: 100%;
}

/* Active
--------------------------------------------------------- */
ul.navbar-nav li ul li.active-menu-item > a { opacity: 0.90; }




/* =============================================================================
12. Sub Menu
============================================================================= */
/* Arrow
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.menu-arrow {
	float: right;
	color: #666666;
	font-size: 16px;
	overflow: hidden;
	margin-left: 5px;
	text-align: right;
	position: relative;
	line-height: inherit;
}


/* icon
----------------------------------------------------------------------------- */
.menu-arrow i {
	line-height: inherit;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}



/* List
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
ul.navbar-nav li ul {
	left: 0;
	top: 100%;
	margin: 0;
	opacity: 0;
	z-index: 16;
	width: 210px;
	display: block;
	padding: 10px 0;
	list-style: none;
	position: absolute;
	visibility: hidden;
	background-color: #ffffff;
	border-top: 2px solid #$primary_color;

	-webkit-transform: translate(0, 10px);
	-ms-transform: translate(0, 10px);
	transform: translate(0, 10px);

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;

	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	-moz-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
}


/* Child SubMenu
----------------------------------------------------------------------------- */
ul.navbar-nav li ul ul {
	top: -12px;
	left: 100%;

	-webkit-transform: translate(0, 0);
	-ms-transform: translate(0, 0);
	transform: translate(0, 0);
}


/* items
----------------------------------------------------------------------------- */
ul.navbar-nav li ul li {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Link
----------------------------------------------------------------------------- */
ul.navbar-nav li ul li a {
	width: 100%;
	opacity: 0.70;
	display: block;
	color: #212121;
	font-size: 12px;
	font-weight: 700;
	overflow: hidden;
	text-align: left;
	line-height: 20px;
	padding: 9px 20px;
	position: relative;
	letter-spacing: 0.30px;
	text-transform: uppercase;
}


/* Hover
----------------------------------------------------------------------------- */
ul.navbar-nav li:hover > ul {
	opacity: 1;
	visibility: visible;

	-webkit-transform: translate(0, 0) !important;
	-ms-transform: translate(0, 0) !important;
	transform: translate(0, 0) !important;
}

.current_page_item > a .menu-arrow,
ul.navbar-nav li:hover > a .menu-arrow,
ul.navbar-nav > li > a:hover .menu-arrow,
ul.navbar-nav > li.active-menu-item > a .menu-arrow,
ul.navbar-nav li ul li.active-menu-item > a .menu-arrow {
	color: #$primary_color;
}

ul.navbar-nav li ul li a:hover,
ul.navbar-nav li ul li:hover > a,
ul.navbar-nav li ul li.current_page_item > a {
	opacity: 0.90;
	background-color: #f5f5f5;
}

ul.navbar-nav li:hover > a::after {
	left: 0;
	width: 100%;
}



/* Submenu CorrectPosition
============================================================================= */
ul.navbar-nav li.subMenu_correctPosition ul {
	right: 0;
	left: auto;
}
ul.navbar-nav li.subMenu_correctPosition ul ul {
	left: auto;
	right: 100%;
}

ul.navbar-nav li.subMenu_correctPosition ul li a { text-align: right; }
ul.navbar-nav li.subMenu_correctPosition ul li a .menu-arrow {
	float: left;
	margin-left: 0;
	margin-right: 5px;
}




/* =============================================================================
13. Mega Menu
============================================================================= */
/* Parent li
----------------------------------------------------------------------------- */
ul.navbar-nav li.megamenu { position: static; }


/* Arrow
----------------------------------------------------------------------------- */
ul.navbar-nav li.megamenu > ul .menu-arrow { display: none; }


/* List
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.navbar-nav li.megamenu > ul {
	padding: 0;
	width: auto;
	margin-left: 15px;
	margin-right: 15px;
	left: 0 !important;
	right: 0 !important;
}

/* Child SubMenu
--------------------------------------------------------- */
ul.navbar-nav li.megamenu > ul ul {
	border: 0;
	padding: 0;
	width: 100%;
	top: 0 !important;
	left: 0 !important;
	position: relative;
	right: 0 !important;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}


/* items
----------------------------------------------------------------------------- */
ul.navbar-nav li.megamenu > ul > li {
	float: left;
	padding: 15px 0;
	border-right: 1px solid #efefef;
}


/* Main Link (Title)
----------------------------------------------------------------------------- */
ul.navbar-nav li.megamenu > ul > li > a {
	opacity: 1;
	font-size: 13px;
	background-color: transparent !important;
}


/* Link (items) Child SubMenu
----------------------------------------------------------------------------- */
ul.navbar-nav li.megamenu > ul > li > ul ul a { padding-left: 30px; }


/* Hover
----------------------------------------------------------------------------- */
ul.navbar-nav li.megamenu:hover ul {
	opacity: 1;
	visibility: visible;
}



/* 13.1 Default
============================================================================= */
ul.navbar-nav li.megamenu > ul > li { width: 25%; }
ul.navbar-nav li.megamenu > ul > li:nth-child(4n) { border-right: 0; }
ul.navbar-nav li.megamenu > ul > li:nth-child(4n+1) { clear: left; }
ul.navbar-nav li.megamenu > ul > li:nth-child(n+5) {
	padding-top: 0;
	margin-top: -10px;
}




/* =============================================================================
14. Secondary Menu
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.secondary-menu {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	line-height: 0;
	overflow: hidden;
}


/* List
----------------------------------------------------------------------------- */
.secondary-menu ul {
	margin: -5px;
	padding: 4px 0;
	list-style: none;
	display: inline-block;
}


/* items
----------------------------------------------------------------------------- */
.secondary-menu ul li {
	padding: 0;
	margin: 5px;
	display: inline-block;
}


/* Link
----------------------------------------------------------------------------- */
.secondary-menu ul li a {
	color: #212121;
	display: block;
	font-size: 13px;
	line-height: 20px;
	letter-spacing: 0.30px;
	text-transform: uppercase;
	font-weight: 700 !important;
}

.secondary-menu ul li a:hover,
.secondary-menu ul li.current_page_item a {
	color: #$primary_color;
}




/* =============================================================================
15. Header Buttons
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
ul.header-btns {
	float: right;
	display: block;
	list-style: none;
	position: relative;
	margin: 0 0 0 25px;
	padding: 0 0 0 10px;
	border-left: 1px solid #efefef;
}


/* items
----------------------------------------------------------------------------- */
ul.header-btns > li {
	padding: 0;
	float: left;
	margin: 0 0 0 15px;
	position: relative;
}


/* Link
----------------------------------------------------------------------------- */
ul.header-btns > li > a {
	color: #212121;
	display: block;
	padding: 30px 0;
	min-width: 14px;
	font-size: 13px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	position: relative;
	text-align: center;
	text-transform: uppercase;
}

ul.header-btns > li > a:hover,
ul.header-btns > li:hover > a {
	color: #$primary_color;
}


/* icon
----------------------------------------------------------------------------- */
ul.header-btns > li > a i {
	font-size: 14px;
	vertical-align: top;
	line-height: inherit;
}


/* Badge
----------------------------------------------------------------------------- */
ul.header-btns > li > a span.badge {
	float: right;
	font-size: 11px;
	line-height: 14px;
	margin: 0 0 0 2px;
}




/* =============================================================================
16. Header Cart
============================================================================= */
/* Main Button
----------------------------------------------------------------------------- */
ul.header-btns > li.header-cart-btn { position: static; }


/* Wrapper
----------------------------------------------------------------------------- */
.header-cart {
	right: 0;
	top: 100%;
	margin: 0;
	opacity: 0;
	z-index: 10;
	width: 290px;
	padding: 20px;
	display: block;
	overflow: hidden;
	position: absolute;
	visibility: hidden;
	background-color: #ffffff;
	border-top: 2px solid #$primary_color;

	-webkit-transform: translate(0, 10px);
	-ms-transform: translate(0, 10px);
	transform: translate(0, 10px);

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;

	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	-moz-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);

}


/* Container
----------------------------------------------------------------------------- */
.header-cart .header-cart-container {
	width: 100%;
	display: block;
}


/* Hover
----------------------------------------------------------------------------- */
ul.header-btns > li.header-cart-btn:hover .header-cart {
	opacity: 1;
	visibility: visible;

	-webkit-transform: translate(0, 0);
	-ms-transform: translate(0, 0);
	transform: translate(0, 0);
}


/* Shop Products
----------------------------------------------------------------------------- */
ul.header-btns > li.header-cart-btn ul.shop-products li.cart-empty { padding: 0; }




/* =============================================================================
17. Header Language Menu
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.header-language-menu {
	right: 0;
	top: 100%;
	margin: 0;
	opacity: 0;
	z-index: 10;
	display: block;
	padding: 10px 0;
	overflow: hidden;
	position: absolute;
	visibility: hidden;
	background-color: #ffffff;
	border-top: 2px solid #$primary_color;

	-webkit-transform: translate(50%, 10px);
	-ms-transform: translate(50%, 10px);
	transform: translate(50%, 10px);

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;

	-webkit-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	-moz-box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.10);
}


/* List
----------------------------------------------------------------------------- */
.header-language-menu ul {
	margin: 0;
	padding: 0;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
.header-language-menu ul li {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
}


/* Link
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.header-language-menu ul li a {
	width: 100%;
	display: block;
	color: #212121;
	font-size: 12px;
	text-align: left;
	font-weight: 700;
	overflow: hidden;
	line-height: 20px;
	position: relative;
	text-transform: uppercase;
	padding: 9px 20px 9px 45px;
}
.header-language-menu ul li a:hover { color: #$primary_color; }

/* image
--------------------------------------------------------- */
.header-language-menu ul li a img {
	top: 13px;
	left: 20px;
	position: absolute;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}


/* Hover
----------------------------------------------------------------------------- */
ul.header-btns > li.header-lang-btn:hover .header-language-menu {
	opacity: 1;
	visibility: visible;

	-webkit-transform: translate(50%, 0);
	-ms-transform: translate(50%, 0);
	transform: translate(50%, 0);
}




/* =============================================================================
18. Header Variations
============================================================================= */
/* 18.1 Left Header Menu
============================================================================= */
/* Menu
----------------------------------------------------------------------------- */
@media (min-width: 768px) { .header-menu-left-side .navbar-collapse.collapse { float: left; } }


/* Logo
----------------------------------------------------------------------------- */
.header-menu-left-side .navbar-header { display: none; }


/* Link
----------------------------------------------------------------------------- */
.header-menu-left-side ul.navbar-nav > li > a { padding: 20px 0; }


/* Header Buttons
----------------------------------------------------------------------------- */
.header-menu-left-side ul.header-btns {
	margin: 0;
	padding-left: 5px;
}
.header-menu-left-side ul.header-btns > li > a { padding: 20px 0; }



/* 18.2 Center Header Menu
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.header-menu-center-side {
	line-height: 0;
	text-align: center;
}


/* Menu
----------------------------------------------------------------------------- */
@media (min-width: 768px) {
	.header-menu-center-side .navbar-collapse.collapse {
		float: none;
		display: inline-block !important;
	}
}


/* Logo
----------------------------------------------------------------------------- */
.header-menu-center-side .navbar-header { display: none; }


/* Link
----------------------------------------------------------------------------- */
.header-menu-center-side ul.navbar-nav > li > a { padding: 20px 0; }


/* Header Buttons
----------------------------------------------------------------------------- */
.header-menu-center-side ul.header-btns { display: none; }



/* 18.3 Fixed Header
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.fixed-header .header-menu-stuck {
	top: 0;
	left: 0;
	right: 0;
	position: fixed;
}



/* 18.4 Sidebar Header
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.sidebar-header {
	top: 0;
	left: -260px;
	width: 260px;
	height: 100%;
	z-index: 9997;
	position: fixed;
	background-color: #ffffff;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;

	-webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.10);
	-moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.10);
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.10);
}


/* Container
----------------------------------------------------------------------------- */
.sidebar-header .header-section-container {
	height: 100%;
	z-index: 9997;
	overflow: hidden;
}
.sidebar-header .container { width: 100% !important; }


/* Overlay
----------------------------------------------------------------------------- */
.sidebar-overlay {
	top: 0;
	left: 0;
	opacity: 0;
	width: 100%;
	height: 100%;
	display: none;
	z-index: 9996;
	position: fixed;
	background-color: #000000;
}


/* Sidebar Header Button
----------------------------------------------------------------------------- */
.sidebar-header-btn,
.sidebar-header-btn:hover,
.sidebar-header-btn:focus,
.sidebar-header-btn.focus,
.sidebar-header-btn:active,
.sidebar-header-btn.active {
	top: 20px;
	left: 20px;
	width: 32px;
	height: 32px;
	z-index: 9998;
	display: block;
	color: #ffffff;
	position: fixed;
	font-size: 16px;
	line-height: 32px;
	text-align: center;
	border-radius: 2px;
	background-color: #$primary_color;
}


/* Top Header
----------------------------------------------------------------------------- */
.sidebar-header .top-header { display: none !important; }


/* Header Buttons
----------------------------------------------------------------------------- */
.sidebar-header .header-btns { display: none !important; }


/* Menu
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.sidebar-header .header-menu {
	width: 290px;
	height: 100%;
	overflow-y: scroll;
	padding-right: 30px;
}
.sidebar-header .navbar-collapse { display: block !important; }

/* Container
--------------------------------------------------------- */
.sidebar-header .header-menu-container {
	padding: 52px 0 15px;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

/* Logo
--------------------------------------------------------- */
.sidebar-header .header-menu-container .navbar-header {
	float: none;
	display: block;
	padding: 10px 0;
	text-align: center;
}
.sidebar-header .header-menu-container .navbar-brand { width: 100%; }

/* List
--------------------------------------------------------- */
.sidebar-header ul.navbar-nav { margin: 0 auto !important; }
.sidebar-header ul.navbar-nav li ul {
	top: 0;
	left: 0;
	right: 0;
	border: 0;
	opacity: 1;
	padding: 0;
	width: 100%;
	margin: 0 auto;
	position: relative;
	visibility: visible;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;

	-webkit-transition: all 0s ease-in-out;
	transition: all 0s ease-in-out;

	-webkit-transform: translate(0, 0) !important;
	-ms-transform: translate(0, 0) !important;
	transform: translate(0, 0) !important;
}
.sidebar-header ul.navbar-nav li ul { padding-left: 10px !important; }

/* items
--------------------------------------------------------- */
.sidebar-header ul.navbar-nav > li {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 0 5px;
}
.sidebar-header ul.navbar-nav li.megamenu > ul > li {
	border: 0;
	padding: 0;
	width: 100%;
}

/* Links
--------------------------------------------------------- */
.sidebar-header ul.navbar-nav > li > a { padding: 9px 0; }
.sidebar-header ul.navbar-nav > li > a::after { display: none; }

.sidebar-header ul.navbar-nav li ul li a {
	padding-left: 0;
	padding-right: 0;
}

.sidebar-header ul.navbar-nav li ul li a:hover,
.sidebar-header ul.navbar-nav li ul li:hover > a,
.sidebar-header ul.navbar-nav li ul li.current_page_item > a {
	opacity: 1;
	color: #$primary_color;
	background-color: transparent;
}

/* Arrow
--------------------------------------------------------- */
.sidebar-header ul.navbar-nav li.megamenu > ul .menu-arrow { display: block; }

/* Toggle Button
--------------------------------------------------------- */
.sidebar-header .navbar-toggle { display: none !important; }


/* open / close Sidebar Header
----------------------------------------------------------------------------- */
.sidebar_header_correctPosition.sidebar-header { left: 0; }
.sidebar_header_correctPosition.sidebar-header .sidebar-header-btn .fa-bars:before { content: '\\f00d'; }
.sidebar_header_correctPosition.sidebar-header .sidebar-overlay { display: block; }



/* 18.5 Fixed Sidebar Header
============================================================================= */
@media (min-width: 1200px) {


	/* Wrapper
	------------------------------------------------------------------------- */
	.fixed-sidebar-header { padding-left: 260px; }
	.fixed-header.sidebar-header {
		top: 0;
		left: 0;
	}


	/* Overlay
	------------------------------------------------------------------------- */
	.fixed-sidebar-header .sidebar-overlay { display: none !important; }


	/* Sidebar Header Button
	------------------------------------------------------------------------- */
	.fixed-sidebar-header .sidebar-header-btn { display: none; }


	/* Menu
	------------------------------------------------------------------------- */
	.fixed-sidebar-header .header-menu-container { padding: 15px 0; }


	/* Container
	------------------------------------------------------------------------- */
	.fixed-sidebar-header #main-wrapper .container,
	.fixed-sidebar-header .page-title-section.page-title-section-wide .section-container {
		width: 100%;
		max-width: 1170px;
	}
	.fixed-sidebar-header #main-wrapper .container { padding: 0 30px; }
	.fixed-sidebar-header .header-section .row { margin: 0 -30px; }


	/* Full Width Section
	------------------------------------------------------------------------- */
	.fixed-sidebar-header #main-wrapper .fullwidth-section .container {
		padding: 0;
		width: 100%;
		max-width: none;
	}


	/* isotope Filter
	------------------------------------------------------------------------- */
	.fixed-sidebar-header .fullwidth-section .isotope-filter { padding: 0 30px; }


}



/* 18.6 Transparent Header
============================================================================= */
@media (min-width: 991px) {

	.transparent-header { position: absolute; }

	.transparent-header .top-header,
	.transparent-header .header-menu-container:not(.tiny-header) {
		background-color: transparent;
	}

	.transparent-header .top-header,
	.transparent-header .header-menu-container:not(.tiny-header) {
		border-bottom: 1px solid rgba(255, 255, 255, 0.25);
	}
	.transparent-header .header-menu-container:not(.tiny-header) ul.header-btns {
		border-left: 1px solid rgba(255, 255, 255, 0.25);
	}

	.transparent-header .header-menu-container:not(.tiny-header) {
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
	}

	.transparent-header .top-header,
	.transparent-header .top-header a,
	.transparent-header .top-header .info-block-container i,
	.transparent-header .top-header .info-block-container a i,
	.transparent-header .top-header .social-icons-block ul li a i,
	.transparent-header .header-menu-container:not(.tiny-header) .form-control,
	.transparent-header .header-menu-container:not(.tiny-header) ul.navbar-nav > li > a,
	.transparent-header .header-menu-container:not(.tiny-header) ul.header-btns > li > a,
	.transparent-header .header-menu-container:not(.tiny-header) ul.navbar-nav > li > a .menu-arrow,
	.transparent-header .header-menu-container:not(.tiny-header) .header-search-form-block .form-close-btn {
		color: #ffffff;
	}
	.transparent-header .header-menu-container:not(.tiny-header) :-moz-placeholder { color: #ffffff; }
	.transparent-header .header-menu-container:not(.tiny-header) ::-moz-placeholder { color: #ffffff; }
	.transparent-header .header-menu-container:not(.tiny-header) :-ms-input-placeholder { color: #ffffff; }
	.transparent-header .header-menu-container:not(.tiny-header) ::-webkit-input-placeholder { color: #ffffff; }

	.transparent-header .top-header a:hover { opacity: 0.80; }
	.transparent-header .top-header .social-icons-block ul li a:hover { opacity: 1; }

	.transparent-header .header-menu-container .navbar-brand > img { display: none; }
	.transparent-header .header-menu-container.tiny-header .navbar-brand > img:not(.transparent-header-logo),
	.transparent-header .header-menu-container:not(.tiny-header) .navbar-brand > img.transparent-header-logo {
		display: block;
	}

}




/* =============================================================================
19. Buttons
============================================================================= */
/* Button
============================================================================= */
button {
	outline: none !important;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}



/* Special Buttons
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.btn-gfort,
.btn-gfort-o,
.btn-gfort-grey,
.btn-gfort-grey-o,
.btn-gfort-white,
.btn-gfort-white-o,
.btn-gfort-alt,
.btn-gfort-alt-o {
	border: 0;
	z-index: 15;
	font-size: 13px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	position: relative;
	padding: 11px 25px;
	border-radius: 2px;
	margin: 0 15px 0 0;
	letter-spacing: 0.30px;
	outline: none !important;
	text-transform: uppercase;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.btn-gfort,
.btn-gfort-o {
	color: #ffffff;
	background-color: #$primary_color;
}
.btn-gfort-grey,
.btn-gfort-grey-o {
	color: #666666;
	background-color: #f5f5f5;
}
.btn-gfort-white,
.btn-gfort-white-o {
	color: #666666;
	background-color: #ffffff;
}
.btn-gfort-alt,
.btn-gfort-alt-o {
	color: #ffffff;
	background-color: #$secondary_color;
}

.btn-gfort:last-child,
.btn-gfort-o:last-child,
.btn-gfort-grey:last-child,
.btn-gfort-grey-o:last-child,
.btn-gfort-white:last-child,
.btn-gfort-white-o:last-child,
.btn-gfort-alt:last-child,
.btn-gfort-alt-o:last-child {
	margin: 0;
}


/* Hover / Focus / Active
----------------------------------------------------------------------------- */
.btn-gfort:hover,
.btn-gfort:focus,
.btn-gfort.focus,
.btn-gfort.active,
.btn-gfort:active,
.btn-gfort-grey:hover,
.btn-gfort-grey:focus,
.btn-gfort-grey.focus,
.btn-gfort-grey.active,
.btn-gfort-grey:active,
.btn-gfort-white:hover,
.btn-gfort-white:focus,
.btn-gfort-white.focus,
.btn-gfort-white.active,
.btn-gfort-white:active,
button.btn-gfort:focus,
button.btn-gfort.focus,
button.btn-gfort-grey:focus,
button.btn-gfort-grey.focus,
button.btn-gfort-white:focus,
button.btn-gfort-white.focus {
	color: #ffffff;
	background-color: #$secondary_color;
}

.btn-gfort-o:hover,
.btn-gfort-o:focus,
.btn-gfort-o.focus,
.btn-gfort-o.active,
.btn-gfort-o:active,
button.btn-gfort-o:focus,
button.btn-gfort-o.focus,
.btn-gfort-alt-o:hover,
.btn-gfort-alt-o:focus,
.btn-gfort-alt-o.focus,
.btn-gfort-alt-o.active,
.btn-gfort-alt-o:active,
button.btn-gfort-alt-o:focus,
button.btn-gfort-alt-o.focus {
	color: #666666;
	background-color: #ffffff;
}

.btn-gfort-alt:hover,
.btn-gfort-alt:focus,
.btn-gfort-alt.focus,
.btn-gfort-alt.active,
.btn-gfort-alt:active,
button.btn-gfort-alt:focus,
button.btn-gfort-alt.focus,
.btn-gfort-white-o:hover,
.btn-gfort-white-o:focus,
.btn-gfort-white-o.focus,
.btn-gfort-white-o.active,
.btn-gfort-white-o:active,
button.btn-gfort-white-o:focus,
button.btn-gfort-white-o.focus,
.btn-gfort-grey-o:hover,
.btn-gfort-grey-o:focus,
.btn-gfort-grey-o.focus,
.btn-gfort-grey-o.active,
.btn-gfort-grey-o:active,
button.btn-gfort-grey-o:focus,
button.btn-gfort-grey-o.focus {
	color: #ffffff;
	background-color: #$primary_color;
}


/* Medium Button
----------------------------------------------------------------------------- */
.btn-gfort-md {
	font-size: 12px;
	padding: 7px 20px;
}


/* Small Button
----------------------------------------------------------------------------- */
.btn-gfort-sm {
	font-size: 11px;
	padding: 3px 10px;
}



/* Header Menu Button
============================================================================= */
ul.navbar-nav > li.btn-header-menu > a {
	border: 0;
	z-index: 15;
	color: #ffffff;
	font-size: 13px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	margin: 19px auto;
	position: relative;
	padding: 11px 25px;
	border-radius: 2px;
	letter-spacing: 0.30px;
	outline: none !important;
	text-transform: uppercase;
	background-color: #$primary_color;
	text-align: center !important;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
ul.navbar-nav > li.btn-header-menu > a:hover {
	color: #ffffff;
	background-color: #$secondary_color;
}
ul.navbar-nav > li.btn-header-menu > a::after { display: none; }



/* Image Button
============================================================================= */
.btn-image {
	border: 0;
	z-index: 15;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	margin: 0 15px 0 0;
	display: inline-block;
	outline: none !important;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.btn-image:last-child { margin-right: 0; }

.btn-image img {
	width: 100%;
	display: block;
	max-width: 170px;
}



/* Circle Button
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.btn-gfort-circle,
.btn-gfort-circle-alt,
.btn-gfort-circle-grey,
.btn-gfort-circle-white,
.btn-gfort-circle-white-o {
	padding: 0;
	width: 48px;
	height: 48px;
	margin: 10px;
	font-size: 18px;
	line-height: 44px;
	text-align: center;
	border-width: 2px;
	border-radius: 50%;
	border-style: solid;
	border-color: inherit;
	display: inline-block;
}

.btn-gfort-circle { color: #$primary_color; }
.btn-gfort-circle-alt { color: #$secondary_color; }
.btn-gfort-circle-grey { color: #666666; }
.btn-gfort-circle-white { color: #ffffff; }
.btn-gfort-circle-white-o { color: #ffffff; }


/* icon
----------------------------------------------------------------------------- */
.btn-gfort-circle i,
.btn-gfort-circle-alt i,
.btn-gfort-circle-grey i,
.btn-gfort-circle-white i,
.btn-gfort-circle-white-o i {
	display: block;
	line-height: 44px;
}
.btn-gfort-circle i.fa-play,
.btn-gfort-circle-alt i.fa-play,
.btn-gfort-circle-grey i.fa-play,
.btn-gfort-circle-white i.fa-play,
.btn-gfort-circle-white-o i.fa-play {
	padding-left: 5px;
}


/* Hover / Focus / Active
----------------------------------------------------------------------------- */
.btn-gfort-circle:hover,
.btn-gfort-circle:focus,
.btn-gfort-circle.focus,
.btn-gfort-circle.active,
.btn-gfort-circle:active,
.btn-gfort-circle-grey:hover,
.btn-gfort-circle-grey:focus,
.btn-gfort-circle-grey.focus,
.btn-gfort-circle-grey.active,
.btn-gfort-circle-grey:active,
.btn-gfort-circle-white:hover,
.btn-gfort-circle-white:focus,
.btn-gfort-circle-white.focus,
.btn-gfort-circle-white.active,
.btn-gfort-circle-white:active {
	color: #$secondary_color;
}

.btn-gfort-circle-alt:hover,
.btn-gfort-circle-alt:focus,
.btn-gfort-circle-alt.focus,
.btn-gfort-circle-alt.active,
.btn-gfort-circle-alt:active,
.btn-gfort-circle-white-o:hover,
.btn-gfort-circle-white-o:focus,
.btn-gfort-circle-white-o.focus,
.btn-gfort-circle-white-o.active,
.btn-gfort-circle-white-o:active {
	color: #$primary_color;
}



/* Special Bootstrap Buttons
============================================================================= */
/* Default
----------------------------------------------------------------------------- */
.btn.btn-gfort.btn-default {
	color: #333333;
	border: 1px solid #cccccc;
	background-color: #ffffff;
}
.btn.btn-gfort.btn-default:hover {
	color: #333333;
	border-color: #adadad;
	background-color: #e6e6e6;
}


/* Primary
----------------------------------------------------------------------------- */
.btn.btn-gfort.btn-primary {
	color: #ffffff;
	border: 1px solid #2e6da4;
	background-color: #337ab7;
}
.btn.btn-gfort.btn-primary:hover {
	color: #ffffff;
	border-color: #204d74;
	background-color: #286090;
}


/* Success
----------------------------------------------------------------------------- */
.btn.btn-gfort.btn-success {
	color: #ffffff;
	border: 1px solid #4cae4c;
	background-color: #5cb85c;
}
.btn.btn-gfort.btn-success:hover {
	color: #ffffff;
	border-color: #398439;
	background-color: #449d44;
}


/* info
----------------------------------------------------------------------------- */
.btn.btn-gfort.btn-info {
	color: #ffffff;
	border: 1px solid #46b8da;
	background-color: #5bc0de;
}
.btn.btn-gfort.btn-info:hover {
	color: #ffffff;
	border-color: #269abc;
	background-color: #31b0d5;
}


/* Warning
----------------------------------------------------------------------------- */
.btn.btn-gfort.btn-warning {
	color: #ffffff;
	border: 1px solid #eea236;
	background-color: #f0ad4e;
}
.btn.btn-gfort.btn-warning:hover {
	color: #ffffff;
	border-color: #d58512;
	background-color: #ec971f;
}


/* Danger
----------------------------------------------------------------------------- */
.btn.btn-gfort.btn-danger {
	color: #ffffff;
	border: 1px solid #d43f3a;
	background-color: #d9534f;
}
.btn.btn-gfort.btn-danger:hover {
	color: #ffffff;
	border-color: #ac2925;
	background-color: #c9302c;
}


/* Size
----------------------------------------------------------------------------- */
/* Default
--------------------------------------------------------- */
.btn.btn-gfort.btn-info,
.btn.btn-gfort.btn-danger,
.btn.btn-gfort.btn-default,
.btn.btn-gfort.btn-primary,
.btn.btn-gfort.btn-success,
.btn.btn-gfort.btn-warning {
	padding-top: 10px;
	padding-bottom: 10px;
}

/* Medium
--------------------------------------------------------- */
.btn.btn-gfort.btn-info.btn-gfort-md,
.btn.btn-gfort.btn-danger.btn-gfort-md,
.btn.btn-gfort.btn-default.btn-gfort-md,
.btn.btn-gfort.btn-primary.btn-gfort-md,
.btn.btn-gfort.btn-success.btn-gfort-md,
.btn.btn-gfort.btn-warning.btn-gfort-md {
	padding-top: 6px;
	padding-bottom: 6px;
}

/* Small
--------------------------------------------------------- */
.btn.btn-gfort.btn-info.btn-gfort-sm,
.btn.btn-gfort.btn-danger.btn-gfort-sm,
.btn.btn-gfort.btn-default.btn-gfort-sm,
.btn.btn-gfort.btn-primary.btn-gfort-sm,
.btn.btn-gfort.btn-success.btn-gfort-sm,
.btn.btn-gfort.btn-warning.btn-gfort-sm {
	padding-top: 2px;
	padding-bottom: 2px;
}




/* =============================================================================
20. Blog
============================================================================= */
/* Blog items Wrapper
============================================================================= */
.blog-items-wrapper {
	width: 100%;
	display: block;
	position: relative;
}
.blog-items-wrapper::after {
	content: '';
	clear: both;
	display: table;
}



/* Blog item
============================================================================= */
/* Blog item Wrapper
============================================================================= */
.blog-item {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 0 0 30px;
	position: relative;
}
.gfort-owl-slider .blog-item { padding-bottom: 0; }



/* Blog item Container
============================================================================= */
.blog-item-container {
	width: 100%;
	display: block;
	position: relative;
	border-radius: 2px;
	background-color: #ffffff;
}
.blog-item-container::after {
	content: '';
	clear: both;
	display: table;
}



/* Blog item Media
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.blog-item-container .blog-item-media {
	padding: 0;
	z-index: 10;
	width: 100%;
	display: block;
	line-height: 0;
	overflow: hidden;
	position: relative;
	margin: 0 auto -1px;
	border-radius: 2px 2px 0 0;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}


/* Link
----------------------------------------------------------------------------- */
.blog-item-container .blog-item-media a {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* image
----------------------------------------------------------------------------- */
.blog-item-container .blog-item-media img {
	width: 100%;
	display: inline-block;
}



/* Blog item Body
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.blog-item-container .blog-item-body {
	z-index: 9;
	width: 100%;
	display: block;
	position: relative;
	border-radius: 2px;
	padding: 0 25px 25px;
	border: 1px solid #efefef;
}


/* Blog item Meta
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-item-meta {
	padding: 0;
	width: 100%;
	font-size: 0;
	line-height: 0;
	display: block;
	overflow: hidden;
	font-weight: 700;
	margin: -1px auto 0;
	text-transform: uppercase;
}

/* Span
--------------------------------------------------------- */
.blog-item-meta span {
	padding: 0;
	font-size: 13px;
	margin: 10px 0 0;
	line-height: 13px;
	position: relative;
	display: inline-block;
	vertical-align: bottom;
	letter-spacing: 0.30px;
}
.blog-item-meta span span {
	margin: 0 !important;
	padding: 0 !important;
}

/* Dot
--------------------------------------------------------- */
.blog-item-meta span::after {
	float: right;
	padding: 0 8px;
	font-size: 4px;
	content: '\\f111';
	line-height: inherit;
	font-family: 'FontAwesome';
}
.blog-item-meta span:last-child::after { display: none; }

/* Link
--------------------------------------------------------- */
.blog-item-meta span a {
	color: #212121;
	display: inline-block;
}
.blog-item-meta span a:hover { color: #$primary_color; }

/* Time
--------------------------------------------------------- */
.blog-item-meta span time { display: inline-block; }

/* icon
--------------------------------------------------------- */
.blog-item-meta span:not(.item-meta-format) i {
	float: left;
	margin-right: 3px;
	line-height: 12px;
}

/* Format
--------------------------------------------------------- */
/* Wrapper */
.blog-item-meta span.item-meta-format { margin: 0 12px 0 0; }

/* Dot */
.blog-item-meta span.item-meta-format::after { display: none; }

/* Link */
.blog-item-meta span.item-meta-format a {
	float: left;
	width: 40px;
	height: 40px;
	display: block;
	margin: 0 auto;
	font-size: 14px;
	overflow: hidden;
	position: relative;
	border-radius: 0 0 2px 2px;
}

/* icon */
.blog-item-meta span.item-meta-format a i {
	float: left;
	width: 40px;
	height: 40px;
	display: block;
	color: #ffffff;
	line-height: 40px;
	text-align: center;
	background-color: #$primary_color;

	-webkit-transition: margin 0.30s ease-in-out;
	transition: margin 0.30s ease-in-out;
}

/* Hover */
.blog-item-meta span.item-meta-format a:hover i:nth-last-child(2) { margin-top: -40px; }

/* Author
--------------------------------------------------------- */
.blog-item-meta span.item-meta-author img {
	width: 24px;
	float: left;
	margin-top: -2px;
	margin-right: 5px;
	border-radius: 50%;
}


/* Blog item Title
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-item-body .blog-item-title {
	padding: 0;
	width: 100%;
	color: #212121;
	display: block;
	font-size: 20px;
	font-weight: 400;
	line-height: 26px;
	position: relative;
	margin: 17px auto 0;
}

/* Link
--------------------------------------------------------- */
.blog-item-title a {
	color: inherit;
	position: relative;
}
.blog-item-title a:hover { color: #$primary_color; }


/* Blog item Description
----------------------------------------------------------------------------- */
.blog-item-body .blog-item-description {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 12px auto 0;
}


/* Blog item Read More Button
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-item-body .blog-item-read-btn {
	width: 100%;
	display: block;
	line-height: 1;
	font-size: 14px;
	font-weight: 700;
	overflow: hidden;
	margin: 17px auto 3px;
	text-transform: uppercase;
}

/* Link
--------------------------------------------------------- */
.blog-item-read-btn a { display: inline-block; }

/* icon
--------------------------------------------------------- */
.blog-item-read-btn a i {
	height: 14px;
	line-height: 14px;
	vertical-align: top;
	display: inline-block;

	-webkit-transition: margin 0.30s ease-in-out;
	transition: margin 0.30s ease-in-out;
}

/* Hover
--------------------------------------------------------- */
.blog-item-read-btn a:hover i { margin-left: 3px; }


/* item Format Content
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-item-body .blog-item-format-content {
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}

/* Description
--------------------------------------------------------- */
.blog-item-body .blog-item-format-desc {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 5px 0 0;
}
.blog-item-body .blog-item-format-desc i {
	height: 25px;
	font-size: 10px;
	line-height: 25px;
	margin: 0 7px 0 0;
	vertical-align: top;
	display: inline-block;
}



/* Blog item Footer
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.blog-item-container .blog-item-footer {
	width: 100%;
	z-index: 10;
	display: none;
	margin: 0 auto;
	font-size: 14px;
	font-weight: 700;
	overflow: hidden;
	line-height: 32px;
	padding: 15px 25px;
	position: relative;
	border: 1px solid #efefef;
	border-top: 0;
	border-radius: 0 0 2px 2px;
}


/* Link
----------------------------------------------------------------------------- */
.blog-item-footer a { color: #212121; }
.blog-item-footer a:hover { color: #$primary_color; }


/* Blog item Author
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-item-footer .blog-item-author {
	float: left;
	line-height: 0;
	overflow: hidden;
	position: relative;
	text-align: center;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}


/* Link
--------------------------------------------------------- */
.blog-item-author a {
	overflow: hidden;
	position: relative;
	display: inline-block;
}

/* image
--------------------------------------------------------- */
.blog-item-author a img {
	width: 32px;
	float: left;
	border-radius: 50%;
}

/* span
--------------------------------------------------------- */
.blog-item-author a span {
	float: left;
	line-height: 32px;
	margin: 0 0 0 6px;
}


/* Blog item Buttons
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-item-footer .blog-item-btns { float: right; }

/* List
--------------------------------------------------------- */
.blog-item-btns ul.blog-item-btns-list {
	padding: 0;
	margin: 0 -6px;
	list-style: none;
	overflow: hidden;
}

/* items
--------------------------------------------------------- */
.blog-item-btns ul.blog-item-btns-list > li {
	float: left;
	margin: 0 6px;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

/* Link
--------------------------------------------------------- */
.blog-item-btns ul.blog-item-btns-list > li > a,
.blog-item-btns ul.blog-item-btns-list > li > p {
	z-index: 10;
	display: block;
	position: relative;
}

/* icon
--------------------------------------------------------- */
.blog-item-btns ul.blog-item-btns-list > li > p i,
.blog-item-btns ul.blog-item-btns-list > li > a i {
	margin-right: 4px;
	padding-left: 1px;
	padding-right: 1px;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.blog-item-btns ul.blog-item-btns-list > li.blog-item-share > a i { margin-right: 0; }

/* Social icons
--------------------------------------------------------- */
.blog-item-btns .social-icons-block {
	top: 0;
	left: 0;
	margin: 0;
	opacity: 0;
	z-index: 1;
	width: 100%;
	padding: 15px;
	overflow: hidden;
	text-align: center;
	visibility: hidden;
	position: absolute;
}

.blog-item-btns .social-icons-block li {
	-webkit-transform: translateY(150%);
	-ms-transform: translateY(150%);
	transform: translateY(150%);

	-webkit-transition: all 0.40s ease-in-out;
	transition: all 0.40s ease-in-out;
}
.blog-item-btns .social-icons-block li:nth-child(1) {
	-webkit-transition-delay: 0.10s;
	transition-delay: 0.10s;
}
.blog-item-btns .social-icons-block li:nth-child(2) {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}
.blog-item-btns .social-icons-block li:nth-child(3) {
	-webkit-transition-delay: 0.20s;
	transition-delay: 0.20s;
}
.blog-item-btns .social-icons-block li:nth-child(4) {
	-webkit-transition-delay: 0.25s;
	transition-delay: 0.25s;
}

/* Hover
--------------------------------------------------------- */
.blog-item-btns li.blog-item-share:hover .social-icons-block {
	opacity: 1;
	visibility: visible;
}
.blog-item-btns li.blog-item-share:hover .social-icons-block li {
	-webkit-transform: translateY(0%);
	-ms-transform: translateY(0%);
	transform: translateY(0%);
}



/* 20.1 Blog item Types
============================================================================= */
/* 20.1.1 Blog item Link Type
----------------------------------------------------------------------------- */
.format-link .blog-item-media { display: none; }
.format-link .blog-item-body { border-radius: 2px !important; }
.format-link .blog-item-footer { display: none; }


/* 20.1.2 Blog item Quote Type
----------------------------------------------------------------------------- */
.format-quote .blog-item-media { display: none; }
.format-quote .blog-item-body { border-radius: 2px !important; }
.format-quote .blog-item-footer { display: none; }



/* 20.2 Blog columns
============================================================================= */
/* 20.2.1 col 1
----------------------------------------------------------------------------- */
/* Blog item
--------------------------------------------------------- */
/* Wrapper */
.blog-col-1 .blog-item { padding-bottom: 50px; }
.blog-col-1 .blog-item:last-child { padding-bottom: 30px; }

/* soundcloud Embed */
.blog-col-1 .blog-item .blog-item-media iframe:not([height])[src*=\"soundcloud\"] { height: 405px; }

/* Body */
.blog-col-1 .blog-item .blog-item-body { border-radius: 2px 2px 0 0; }

/* Title */
.blog-col-1 .blog-item .blog-item-body .blog-item-title {
	font-size: 24px;
	line-height: 28px;
}

/* Footer */
.blog-col-1 .blog-item .blog-item-footer { display: block; }


/* 20.2.2 col 2
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-col-2 {
	width: auto;
	margin: 0 -15px;
}

/* Blog item
--------------------------------------------------------- */
/* Wrapper */
.blog-col-2 .blog-item {
	width: 50%;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.blog-col-2 .blog-item:nth-child(2n+1) { clear: left; }

/* soundcloud Embed */
.blog-col-2 .blog-item .blog-item-media iframe:not([height])[src*=\"soundcloud\"] { height: 243px; }


/* 20.2.3 col 3
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-col-3 {
	width: auto;
	margin: 0 -15px;
}

/* Blog item
--------------------------------------------------------- */
/* Wrapper */
.blog-col-3 .blog-item {
	float: left;
	padding-left: 15px;
	padding-right: 15px;
	width: 33.33333333%;
}
.blog-col-3 .blog-item:nth-child(3n+1) { clear: left; }

/* soundcloud Embed */
.blog-col-3 .blog-item .blog-item-media iframe:not([height])[src*=\"soundcloud\"] { height: 224px; }



/* 20.3 Blog Small images
============================================================================= */
/* Blog item Wrapper
----------------------------------------------------------------------------- */
.blog-items-small-thumbs { margin-bottom: -20px; }


/* Blog item Wrapper
----------------------------------------------------------------------------- */
.blog-items-small-thumbs .blog-item {
	margin-bottom: 50px;
	border-bottom: 1px solid #efefef;
}
.blog-items-small-thumbs .blog-item:last-child { padding-bottom: 50px; }


/* Blog item Media
----------------------------------------------------------------------------- */
@media (min-width: 768px) {

	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-media {
		float: left;
		width: 320px;
		border-radius: 2px;
		margin: 0 25px 0 0;
	}


	/* Blog item Body
	------------------------------------------------------------------------- */
	/* Wrapper
	----------------------------------------------------- */
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-body {
		padding: 0;
		width: auto;
		border-width: 0;
		border-radius: 0;
		overflow: hidden;
	}

	/* soundcloud Embed
	----------------------------------------------------- */
	.blog-items-small-thumbs .blog-item .blog-item-media iframe:not([height])[src*=\"soundcloud\"] { height: 240px; }

	/* Blog item Meta
	----------------------------------------------------- */
	/* Wrapper */
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-meta { margin: 0 auto 8px; }

	/* span */
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-meta span {
		margin: 0 0 10px;
	}

	/* Format */
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-meta span.item-meta-format a {
		width: auto;
		height: auto;
		font-size: 13px;
		border-radius: 0;
		display: inline-block;
	}
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-meta span.item-meta-format a i {
		width: auto;
		height: auto;
		color: inherit;
		font-size: 13px;
		line-height: 13px;
		background-color: transparent;
	}
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-meta span.item-meta-format a i:nth-last-child(2) {
		display: none;
	}
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-meta span.item-meta-format::after {
		display: block;
	}

	/* Blog item Title
	----------------------------------------------------- */
	.blog-items-small-thumbs .blog-item:not(.format-link):not(.format-quote) .blog-item-title { margin: 0 auto; }

	/* Blog item Footer
	------------------------------------------------------------------------- */
	.blog-items-small-thumbs .blog-item .blog-item-footer { display: none; }

}



/* 20.4 Blog Timeline
============================================================================= */
/* Line
----------------------------------------------------------------------------- */
.blog-timeline::before {
	left: 50%;
	top: -30px;
	width: 1px;
	content: '';
	z-index: -1;
	height: 100%;
	margin-left: -1px;
	position: absolute;

	background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 30px, #efefef 30px, #efefef 100%);
	background:    -moz-linear-gradient(bottom, rgba(255, 255, 255, 0) 30px, #efefef 30px, #efefef 100%);
	background:      -o-linear-gradient(bottom, rgba(255, 255, 255, 0) 30px, #efefef 30px, #efefef 100%);
	background:         linear-gradient(to bottom, rgba(255, 255, 255, 0) 30px, #efefef 30px, #efefef 100%);
}


/* Blog Timeline Date
----------------------------------------------------------------------------- */
.timeline-date {
	width: 100%;
	display: block;
	line-height: 0;
	overflow: hidden;
	position: relative;
	text-align: center;
	margin: 0 auto 50px;
}
.timeline-date h4 {
	color: #212121;
	font-size: 14px;
	font-weight: 700;
	min-width: 150px;
	line-height: 20px;
	position: relative;
	text-align: center;
	padding: 11px 25px;
	border-radius: 2px;
	display: inline-block;
	letter-spacing: 0.30px;
	text-transform: uppercase;
	border: 1px solid #efefef;
	background-color: #ffffff;
}


/* Blog Timeline Month items
----------------------------------------------------------------------------- */
.timeline-month-items {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 10px;
}
.blog-col-2.blog-timeline .timeline-month-items:last-child { margin-bottom: -10px; }


/* Blog Timeline item
----------------------------------------------------------------------------- */
/* Blog item Wrapper
--------------------------------------------------------- */
.blog-col-2.blog-timeline .blog-item {
	float: right;
	clear: right;
	padding-left: 40px;
	padding-right: 15px;
	padding-bottom: 40px;
}
.blog-col-2.blog-timeline .blog-item:nth-child(2n+1) {
	float: left;
	clear: left;
	padding-left: 15px;
	padding-right: 40px;
}

/* Arrow
--------------------------------------------------------- */
.blog-col-2.blog-timeline .blog-item .blog-item-body .blog-item-title::after {
	top: 7px;
	left: -56px;
	color: #efefef;
	font-size: 20px;
	content: '\\f177';
	line-height: 14px;
	position: absolute;
	font-family: 'FontAwesome';

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.blog-col-2.blog-timeline .blog-item:nth-child(2n+1) .blog-item-body .blog-item-title::after {
	left: auto;
	right: -55px;
	content: '\\f178';
}

/* Dot
--------------------------------------------------------- */
.blog-timeline .blog-item .blog-item-body .blog-item-title::before {
	top: 7px;
	left: -71px;
	width: 10px;
	color: #efefef;
	font-size: 10px;
	content: '\\f111';
	line-height: 14px;
	position: absolute;
	font-family: 'FontAwesome';

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.blog-col-2.blog-timeline .blog-item:nth-child(2n+1) .blog-item-body .blog-item-title::before {
	left: auto;
	right: -71px;
}

/* Hover
--------------------------------------------------------- */
.blog-timeline .blog-item:hover { z-index: 15; }
.blog-timeline .blog-item .blog-item-container:hover .blog-item-body .blog-item-title::after {
	left: -61px;
	color: #$primary_color;
}
.blog-timeline .blog-item:nth-child(2n+1) .blog-item-container:hover .blog-item-body .blog-item-title::after {
	left: auto;
	right: -61px;
}
.blog-timeline .blog-item .blog-item-container:hover .blog-item-body .blog-item-title::before { color: #$primary_color; }



/* 20.5 Blog Timeline Minimal
============================================================================= */
/* Line
----------------------------------------------------------------------------- */
.blog-col-1.blog-timeline::before {
	left: 4px;
	margin-left: 0;

	background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 50px, #efefef 50px, #efefef 100%);
	background:    -moz-linear-gradient(bottom, rgba(255, 255, 255, 0) 50px, #efefef 50px, #efefef 100%);
	background:      -o-linear-gradient(bottom, rgba(255, 255, 255, 0) 50px, #efefef 50px, #efefef 100%);
	background:         linear-gradient(to bottom, rgba(255, 255, 255, 0) 50px, #efefef 50px, #efefef 100%);
}


/* Blog Timeline Date
----------------------------------------------------------------------------- */
.blog-col-1.blog-timeline .timeline-date { margin-bottom: 30px; }
.blog-col-1.blog-timeline .timeline-date::after {
	left: 4px;
	top: 20px;
	width: 50%;
	content: '';
	height: 1px;
	z-index: -1;
	position: absolute;
	background-color: #efefef;
}


/* Blog Timeline Month items
----------------------------------------------------------------------------- */
.blog-col-1.blog-timeline .timeline-month-items { margin: 0 auto; }


/* Blog Timeline item
----------------------------------------------------------------------------- */
/* Blog item Wrapper
--------------------------------------------------------- */
.blog-col-1.blog-timeline .blog-item {
	padding-left: 30px;
	padding-bottom: 30px;
}

/* Blog item Media
--------------------------------------------------------- */
.blog-col-1.blog-timeline .blog-item .blog-item-media { display: none; }

/* Blog item Body
--------------------------------------------------------- */
/* Wrapper */
.blog-col-1.blog-timeline .blog-item .blog-item-body {
	border: 0;
	padding: 0;
	border-radius: 0;
}

/* Meta */
.blog-col-1.blog-timeline .blog-item .blog-item-meta { margin: 0 auto; }
.blog-col-1.blog-timeline .blog-item .blog-item-meta span { margin: 0 0 10px; }
.blog-col-1.blog-timeline .blog-item .blog-item-meta span.item-meta-format a {
	width: auto;
	height: auto;
	font-size: 13px;
	border-radius: 0;
	display: inline-block;
}
.blog-col-1.blog-timeline .blog-item .blog-item-meta span.item-meta-format a i {
	width: auto;
	height: auto;
	color: inherit;
	font-size: 13px;
	line-height: 13px;
	background-color: transparent;
}
.blog-col-1.blog-timeline .blog-item .blog-item-meta span.item-meta-format a i:nth-last-child(2) { display: none; }
.blog-col-1.blog-timeline .blog-item .blog-item-meta span.item-meta-format::after { display: block; }

/* Title */
.blog-col-1.blog-timeline .blog-item .blog-item-title {
	margin: 0 auto;
	font-size: 18px;
	line-height: 26px;
}
.blog-col-1.blog-timeline .blog-item .blog-item-title::before { left: -30px; }

/* Read More Button / Description / Footer
--------------------------------------------------------- */
.blog-col-1.blog-timeline .blog-item .blog-item-read-btn,
.blog-col-1.blog-timeline .blog-item .blog-item-description {
	display: none;
}



/* 20.6 Blog Minimal
============================================================================= */
/* Blog item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-minimal .blog-item { text-align: center; }

/* Blog item Media
--------------------------------------------------------- */
.blog-minimal .blog-item .blog-item-media { display: none; }

/* Blog item Body
--------------------------------------------------------- */
/* Wrapper */
.blog-minimal .blog-item .blog-item-container .blog-item-body {
	padding: 0 30px 20px;
	border-bottom-width: 0;
	border-radius: 2px 2px 0 0;
}

/* Blog item Meta */
.blog-minimal .blog-item .blog-item-meta span { margin-top: 15px; }
.blog-minimal .blog-item .blog-item-meta span.item-meta-format {
	margin: 0;
	width: 100%;
	display: block;
}
.blog-minimal .blog-item .blog-item-meta span.item-meta-format a { float: none; }

/* Read More Button / Description */
.blog-minimal .blog-item .blog-item-read-btn,
.blog-minimal .blog-item .blog-item-description {
	display: none;
}

/* Blog item Footer
--------------------------------------------------------- */
/* Wrapper */
.blog-minimal .blog-item .blog-item-footer {
	padding-top: 0;
	display: block;
	padding-bottom: 30px;
}

/* Blog item Author */
.blog-minimal .blog-item .blog-item-footer .blog-item-author {
	float: none;
	width: 100%;
}
.blog-minimal .blog-item .blog-item-footer .blog-item-author a img { width: 40px; }
.blog-minimal .blog-item .blog-item-footer .blog-item-author a span { display: none; }

/* Blog item Buttons */
.blog-minimal .blog-item .blog-item-footer .blog-item-btns { display: none; }



/* 20.7 Blog Single item
============================================================================= */
/* Blog item Media
----------------------------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-media {
	border-radius: 2px;
	margin: 0 auto 30px;
}

/* soundcloud Embed */
.blog-single-item .blog-item .blog-item-media iframe:not([height])[src*=\"soundcloud\"] { height: 405px; }


/* Blog item Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-body {
	border: 0;
	padding: 0;
	border-radius: 0;
}

/* Blog item Title
--------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-title {
	margin: 0 auto;
	font-size: 24px;
	line-height: 28px;
}

/* item Format Content
--------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-format-content {
	border-radius: 2px;
	padding: 30px 35px;
	margin-bottom: 10px;
	background-color: #f5f5f5;
}
.blog-single-item .blog-item .blog-item-media + .blog-item-body .blog-item-format-content {
	padding: 0;
	margin: 0 auto;
	border-radius: 0;
	background-color: transparent;
}

/* Blog item Meta
--------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-meta { margin: 0 auto; }
.blog-single-item .blog-item .blog-item-meta span { line-height: 22px; }
.blog-single-item .blog-item .blog-item-meta span.item-meta-format { margin: 10px 0 0; }
.blog-single-item .blog-item .blog-item-meta span.item-meta-format::after { display: block; }
.blog-single-item .blog-item .blog-item-meta span i { line-height: 20px; }

/* Blog item Description
--------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-description { margin-top: 20px; }
.blog-single-item .blog-item .blog-item-description p { margin: 0 0 25px 0; }
.blog-single-item .blog-item .blog-item-description p:last-child { margin-bottom: 0; }

/* Footer / Read More Button
--------------------------------------------------------- */
.blog-single-item .blog-item .blog-item-footer,
.blog-single-item .blog-item .blog-item-read-btn {
	display: none;
}



/* 20.8 Related Blog Posts
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.related-blog-posts {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.related-blog-posts-container {
	width: 100%;
	overflow: hidden;
	padding: 0 0 15px;
	position: relative;
	margin: 15px auto 30px;
	border-bottom: 1px solid #efefef;
}
.related-blog-posts:last-child .related-blog-posts-container {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Blog Posts item
----------------------------------------------------------------------------- */
/* List
--------------------------------------------------------- */
.related-blog-posts-container ul.blog-posts {
	width: auto;
	margin: 0 -15px;
}


/* items
--------------------------------------------------------- */
.related-blog-posts-container ul.blog-posts li {
	border: 0;
	float: left;
	padding: 0 15px;
	width: 33.33333333%;
	margin: 0 auto 30px;
}
.related-blog-posts-container ul.blog-posts li:last-child { margin-bottom: 30px; }

.related-blog-posts-container ul.blog-posts li:nth-child(3n+1) { clear: left; }

.page-left-sidebar .related-blog-posts-container ul.blog-posts li,
.page-right-sidebar .related-blog-posts-container ul.blog-posts li {
	width: 50%;
}
.page-left-sidebar .related-blog-posts-container ul.blog-posts li:nth-child(2n+1),
.page-right-sidebar .related-blog-posts-container ul.blog-posts li:nth-child(2n+1) {
	clear: left;
}
.page-left-sidebar .related-blog-posts-container ul.blog-posts li:nth-child(3n+1),
.page-right-sidebar .related-blog-posts-container ul.blog-posts li:nth-child(3n+1) {
	clear: none;
}

/* image
--------------------------------------------------------- */
.related-blog-posts-container ul.blog-posts li a.item-image {
	width: 100%;
	float: none;
	display: block;
	margin: 0 auto 25px;
}

/* Blog item Link (Title)
--------------------------------------------------------- */
.related-blog-posts-container ul.blog-posts li a.blog-item-small-title {
	font-size: 18px;
	line-height: 24px;
}




/* =============================================================================
21. Widgets
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.widget-block {
	padding: 0;
	width: 100%;
	z-index: 10;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	position: relative;
}

.widget-block a:not(.btn) { color: #212121; }
.widget-block a:not(.btn):hover { color: #$primary_color; }


/* Left
----------------------------------------------------------------------------- */
.widget-left-side {
	width: 50%;
	float: left;
	clear: left;
	text-align: left;
}


/* Right
----------------------------------------------------------------------------- */
.widget-right-side {
	width: 50%;
	float: right;
	clear: right;
	text-align: right;
}


/* Container
----------------------------------------------------------------------------- */
.widget-block-container {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 40px;
}


/* Title
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.widget-block-container .widget-block-title {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	line-height: 0;
	color: #212121;
	position: relative;
	text-transform: uppercase;
}
.widget-block-container .widget-block-title * { color: inherit; }

.widget-block-container .widget-block-title::after {
	top: 0;
	right: 0;
	width: 1px;
	content: '';
	height: 100%;
	margin-top: 8px;
	position: absolute;
	background-color: #efefef;
}

/* Head
--------------------------------------------------------- */
.widget-block-container .widget-block-title h6 {
	margin: 0;
	padding: 0;
	position: relative;
	padding-right: 30px;
	display: inline-block;
}
.widget-block-container .widget-block-title h6::after {
	top: 8px;
	left: 100%;
	height: 1px;
	content: '';
	width: 1000%;
	margin-left: -20px;
	position: absolute;
	background-color: #efefef;
}


/* Widget Body
----------------------------------------------------------------------------- */
.widget-block-container .widget-block-body {
	width: 100%;
	z-index: 11;
	display: block;
	margin: 8px auto 0;
	position: relative;
	padding: 7px 20px 20px;
	border: 1px solid #efefef;
	border-top: 0;
	border-radius: 0 0 2px 2px;
}



/* 21.1 Shop Products Widget Block
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.shop-products {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
	margin: 0 auto 30px;
}
.header-cart-container ul.shop-products,
.widget-block-products ul.shop-products {
	margin-bottom: 0;
}


/* items
----------------------------------------------------------------------------- */
ul.shop-products li {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 0 17px;
	padding: 0 0 20px;
	position: relative;
	border-bottom: 1px solid #efefef;
}
ul.shop-products li:last-child {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Shop item Remove Button
----------------------------------------------------------------------------- */
ul.shop-products li .remove-btn {
	padding: 0;
	float: right;
	color: #ff0000;
	line-height: 1;
	font-size: 14px;
	font-weight: 700;
	position: relative;
	margin: 3px 0 0 15px;
	font-family: sans-serif;
}
ul.shop-products li .remove-btn:hover { color: #212121; }


/* Shop item image
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.shop-products li a.item-image {
	padding: 0;
	width: 65px;
	float: left;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	margin: 2px 13px 0 0;
}
ul.shop-products li a.item-image::after { border-radius: 2px; }

/* image
--------------------------------------------------------- */
ul.shop-products li a.item-image img {
	width: 100%;
	display: inline-block;
}


/* Shop item Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.shop-products li .shop-item-body {
	line-height: 0;
	overflow: hidden;
}

/* Shop item Link (Title)
--------------------------------------------------------- */
ul.shop-products li a {
	margin: 0;
	padding: 0;
	color: #212121;
	font-size: 15px;
	font-weight: 400;
	line-height: 21px;
}
ul.shop-products li a:hover { color: #$primary_color; }

/* Shop item Quantity
--------------------------------------------------------- */
ul.shop-products li span.price,
ul.shop-products li span.quantity {
	margin: 0;
	width: 100%;
	display: block;
	font-size: 14px;
	overflow: hidden;
	font-weight: 500;
	padding: 12px 0 0;
	line-height: 14px;
}
ul.shop-products li span.price span.amount {
	margin: 0;
	font-size: 14px;
	line-height: 14px;
}

/* Rate Block
--------------------------------------------------------- */
ul.shop-products li .rate-block { margin-top: 7px; }


/* Shop item Total Price
----------------------------------------------------------------------------- */
.header-cart-container .total-price {
	width: 100%;
	color: #212121;
	display: block;
	padding: 15px 0;
	font-weight: 500;
	overflow: hidden;
	line-height: 20px;
	position: relative;
	margin: 20px auto 0;
	border-top: 1px solid #efefef;
}

.header-cart-container .total-price span,
.header-cart-container .total-price strong {
	display: inline-block;
}
.header-cart-container .total-price span.amount { float: right; }


/* Shop item Buttons
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.header-cart-container .buttons {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}

/* Link
--------------------------------------------------------- */
.header-cart-container .buttons a {
	width: 100%;
	display: block;
	margin: 0 auto 10px;
}
.header-cart-container .buttons a:last-child { margin-bottom: 0; }



/* 21.2 instagram Widget Block
============================================================================= */
/* Container
----------------------------------------------------------------------------- */
.widget-block-instagram .instagram-feed-block-container ul {
	width: auto;
	margin: -2px;
	text-align: left;
}


/* items
----------------------------------------------------------------------------- */
.widget-block-instagram .instagram-feed-block-container li {
	padding: 2px;
	width: 33.33333333%;
}


/* Link
----------------------------------------------------------------------------- */
.widget-block-instagram .instagram-feed-block-container a,
.widget-block-instagram .instagram-feed-block-container a::after {
	border-radius: 2px;
}


/* Title
----------------------------------------------------------------------------- */
.widget-block-instagram .instagram-feed-block h6 { display: none; }



/* 21.3 Twitter Widget Block
============================================================================= */
.widget-block-twitter .twitter-feed-block li.gfort-twitter-item .gfort-twitter-item-container {
	margin: 0 0 20px;
	padding: 0 0 20px;
}
.widget-block-twitter .twitter-feed-block li.gfort-twitter-item:last-child .gfort-twitter-item-container {
	margin-bottom: 0;
	padding-bottom: 0;
}



/* 21.4 Blog Posts Widget Block
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.blog-posts {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
ul.blog-posts li {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 0 17px;
	padding: 0 0 20px;
	position: relative;
	border-bottom: 1px solid #efefef;
}
ul.blog-posts li:last-child {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Blog item image
----------------------------------------------------------------------------- */
ul.blog-posts li a.item-image {
	padding: 0;
	width: 65px;
	float: left;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	margin: 3px 13px 0 0;
}
ul.blog-posts li a.item-image::after { border-radius: 2px; }

ul.blog-posts li a.item-image img {
	width: 100%;
	display: inline-block;
}


/* Blog item Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.blog-posts li .blog-item-body {
	line-height: 0;
	overflow: hidden;
}

/* Blog item Link (Title)
--------------------------------------------------------- */
ul.blog-posts li a.blog-item-small-title {
	margin: 0;
	padding: 0;
	color: #212121;
	font-size: 15px;
	font-weight: 400;
	line-height: 21px;
}
ul.blog-posts li a:hover { color: #$primary_color; }

/* Blog item Meta
--------------------------------------------------------- */
/* Wrapper */
ul.blog-posts li .blog-item-meta {
	font-weight: 500;
	margin: 3px auto 0;
	text-transform: none;
}

/* Date */
ul.blog-posts li .blog-item-meta span.item-meta-date { float: left; }

/* Comments */
ul.blog-posts li .blog-item-meta span.item-meta-comments { float: right; }

/* Dot */
ul.blog-posts li .blog-item-meta span::after { display: none; }



/* 21.5 Categories Widget Block
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.categories-block {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
ul.categories-block li {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 5px;
}
ul.categories-block li:last-child { margin-bottom: 0; }


/* Link
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.categories-block li a {
	margin: 0;
	padding: 0;
	width: 100%;
	color: #212121;
	display: block;
	font-size: 15px;
	font-weight: 500;
	line-height: 26px;
	position: relative;
}
ul.categories-block li a:hover { color: #$primary_color; }

/* Dot
--------------------------------------------------------- */
ul.categories-block li a::before {
	width: 4px;
	height: 4px;
	content: '';
	margin: 0 8px 0 0;
	border-radius: 50%;
	display: inline-block;
	vertical-align: middle;
	background-color: #212121;
}

/* span
--------------------------------------------------------- */
ul.categories-block li a span {
	float: right;
	font-size: 13px;
	line-height: inherit;
}



/* 21.6 Advertisement Widget Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.widget-block-advertisement { text-align: center; }


/* Border
----------------------------------------------------------------------------- */
.widget-block-advertisement .widget-block-container .widget-block-title::after,
.widget-block-advertisement .widget-block-container .widget-block-title::before,
.widget-block-advertisement .widget-block-container .widget-block-title h6::after {
	display: none;
}


/* Head
----------------------------------------------------------------------------- */
.widget-block-advertisement .widget-block-container .widget-block-title h6 {
	padding: 0;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: -10px;
	text-transform: none;
}

/* Body
----------------------------------------------------------------------------- */
.widget-block-advertisement .widget-block-container .widget-block-body {
	border: 0;
	padding: 0;
	text-align: center;
}



/* 21.7 Subscribe Widget Block
============================================================================= */
/* col-md-12
----------------------------------------------------------------------------- */
.widget-block-subscribe .subscribe-form-block .col-md-12:first-child,
.widget-block-subscribe .subscribe-form-block .col-md-12:nth-child(2) {
	width: 100%;
	display: block;
}


/* Form Group
----------------------------------------------------------------------------- */
.widget-block-subscribe .form-group { margin-bottom: 0; }


/* Button
----------------------------------------------------------------------------- */
.widget-block-subscribe .subscribe-form-block .col-md-12 button { margin-top: 15px; }


/* Text
----------------------------------------------------------------------------- */
.widget-block-subscribe p { margin-top: 15px; }



/* 21.8 Tags Widget Block
============================================================================= */
.widget-block-tags .tags-block { padding: 0; }



/* 21.9 Projects Widget Block
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.portfolio-projects {
	padding: 0;
	width: auto;
	margin: -2px;
	font-size: 0;
	line-height: 0;
	display: block;
	overflow: hidden;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
ul.portfolio-projects li {
	margin: 0;
	padding: 2px;
	overflow: hidden;
	position: relative;
	width: 33.33333333%;
	display: inline-block;
}


/* Portfolio item image
----------------------------------------------------------------------------- */
ul.portfolio-projects li a.item-image {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
}
ul.portfolio-projects li a.item-image::after { border-radius: 2px; }

ul.portfolio-projects li a.item-image img {
	width: 100%;
	display: inline-block;
}



/* 21.10 Link Widget Block
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.links-block {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
}


/* Items
----------------------------------------------------------------------------- */
ul.links-block li {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 5px;
}
ul.links-block li:last-child { margin-bottom: 0; }


/* Link
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.links-block li a {
	margin: 0;
	padding: 0;
	color: #212121;
	font-size: 15px;
	font-weight: 500;
	line-height: 27px;
	position: relative;
}
ul.links-block li a:hover { color: #$primary_color; }

/* Dot
--------------------------------------------------------- */
ul.links-block li a::before {
	width: 4px;
	height: 4px;
	content: '';
	margin: 0 8px 0 0;
	border-radius: 50%;
	display: inline-block;
	vertical-align: middle;
	background-color: #212121;
}



/* 21.11 Events Widget Block
============================================================================= */
/* List
----------------------------------------------------------------------------- */
.events-blocks,
ul.events-blocks {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
}
.gfort-owl-slider.events-blocks { margin-bottom: 0; }
.widget-block-events .gfort-owl-slider.events-blocks.owl-theme .owl-dots { padding-top: 10px; }


/* items
----------------------------------------------------------------------------- */
ul.events-blocks li,
.events-blocks .event-item {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 0 20px;
	padding: 0 0 20px;
	position: relative;
	border-bottom: 1px solid #efefef;
}
ul.events-blocks li:last-child,
.events-blocks .event-item:last-child {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Event item image
----------------------------------------------------------------------------- */
ul.events-blocks li a.item-image,
.events-blocks .event-item a.item-image {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	margin: 0 auto 15px;
}
ul.events-blocks li a.item-image img,
.events-blocks .event-item a.item-image img {
	width: 100%;
	display: inline-block;
}


/* Event item Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.events-blocks li .event-item-body,
.events-blocks .event-item .event-item-body {
	width: 100%;
	line-height: 0;
}

/* Event item Meta
--------------------------------------------------------- */
/* Wrapper */
ul.events-blocks li .event-item-meta,
.events-blocks .event-item .event-item-meta {
	padding: 0;
	font-weight: 500;
	margin: 0 auto 5px;
	text-transform: none;
}

/* Span
--------------------------------------------------------- */
ul.events-blocks li .event-item-meta span,
.events-blocks .event-item .event-item-meta span {
	margin-bottom: 0;
}

/* Event item Link (Title)
--------------------------------------------------------- */
ul.events-blocks li a.event-item-small-title,
.events-blocks .event-item a.event-item-small-title {
	margin: 0;
	padding: 0;
	color: #212121;
	font-size: 15px;
	font-weight: 400;
	line-height: 21px;
}
ul.events-blocks li a:hover,
.events-blocks .event-item a:hover {
	color: #$primary_color;
}




/* =============================================================================
22. Portfolio
============================================================================= */
/* 22.1 isotope Filter
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.isotope-filter {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	max-width: 1140px;
	position: relative;
}

.fullwidth-section .isotope-filter { padding: 0 15px; }
@media (min-width: 320px) { .fullwidth-section .isotope-filter { max-width: 310px; } }
@media (min-width: 480px) { .fullwidth-section .isotope-filter { max-width: 470px; } }
@media (min-width: 768px) { .fullwidth-section .isotope-filter { max-width: 750px; } }
@media (min-width: 992px) { .fullwidth-section .isotope-filter { max-width: 970px; } }
@media (min-width: 1200px) { .fullwidth-section .isotope-filter { max-width: 1170px; } }


/* Container
----------------------------------------------------------------------------- */
.isotope-filter-container {
	width: auto;
	font-size: 0;
	margin: -10px;
	line-height: 0;
	display: block;
	padding: 0 0 30px;
	position: relative;
}


/* items
----------------------------------------------------------------------------- */
.isotope-filter-container a {
	padding: 0;
	margin: 10px;
	color: #212121;
	font-size: 13px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	position: relative;
	display: inline-block;
	text-transform: uppercase;
}
.isotope-filter-container a:hover,
.isotope-filter-container a.active-item {
	color: #$primary_color;
}


/* items Count
----------------------------------------------------------------------------- */
.isotope-filter-container a span.items-count { margin-left: 5px; }



/* Portfolio items Wrapper
============================================================================= */
.portfolio-items-wrapper {
	width: 100%;
	display: block;
	position: relative;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}



/* Portfolio item
============================================================================= */
/* Portfolio item Wrapper
============================================================================= */
.portfolio-item {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 0 0 30px;
	position: relative;

	-webkit-transition: all 0s ease-in-out;
	transition: all 0s ease-in-out;
}
.gfort-owl-slider .portfolio-item { padding-bottom: 0; }



/* Portfolio item Container
============================================================================= */
.portfolio-item-container {
	width: 100%;
	display: block;
	position: relative;
}
.portfolio-item-container::after {
	content: '';
	clear: both;
	display: table;
}



/* Portfolio item Media
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.portfolio-item-container .portfolio-item-media {
	padding: 0;
	z-index: 10;
	width: 100%;
	margin: 0 auto;
	line-height: 0;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
[data-slider-items-space=\"0\"] .portfolio-item-media { border-radius: 0; }


/* Link
----------------------------------------------------------------------------- */
.portfolio-item-container .portfolio-item-media a {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
}
[data-slider-items-space=\"0\"] .portfolio-item-media a { border-radius: 0; }


/* image
----------------------------------------------------------------------------- */
.portfolio-item-container .portfolio-item-media img {
	width: 100%;
	display: inline-block;
}



/* Portfolio item Body
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.portfolio-item-container .portfolio-item-body {
	padding: 0;
	z-index: 11;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}
[data-slider-items-space=\"0\"] .portfolio-item-body { padding-right: 20px; }
.fullwidth-section [data-slider-items-space=\"0\"] .portfolio-item-body { padding-left: 20px; }


/* Portfolio item Title
----------------------------------------------------------------------------- */
.portfolio-item-body .portfolio-item-title {
	padding: 0;
	width: 100%;
	color: #212121;
	display: block;
	font-size: 20px;
	font-weight: 400;
	line-height: 26px;
	position: relative;
	margin: 17px auto 0;
}
.portfolio-item-title a { color: inherit; }
.portfolio-item-title a:hover { color: #$primary_color; }


/* Portfolio item Meta
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-item-meta {
	padding: 0;
	width: 100%;
	font-size: 0;
	margin: 0 auto;
	line-height: 0;
	display: block;
	overflow: hidden;
	font-weight: 700;
	text-transform: uppercase;
}

/* Span
--------------------------------------------------------- */
.portfolio-item-meta span {
	padding: 0;
	font-size: 13px;
	margin: 7px 0 0;
	line-height: 13px;
	position: relative;
	display: inline-block;
	vertical-align: bottom;
	letter-spacing: 0.30px;
}

/* Link
--------------------------------------------------------- */
.portfolio-item-meta span a {
	color: inherit;
	display: inline-block;
}
.portfolio-item-meta span a:hover { color: #$primary_color; }


/* Portfolio item info
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-item-body ul.portfolio-item-info {
	padding: 0;
	list-style: none;
	position: relative;
	margin: 0 auto 30px;
}

/* items
--------------------------------------------------------- */
/* Wrapper */
ul.portfolio-item-info li {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto 5px;
}
ul.portfolio-item-info li:last-child { margin-bottom: 0; }

/* span */
ul.portfolio-item-info li span {
	color: #212121;
	font-weight: 500;
	margin-right: 10px;
	display: inline-block;
}

/* Button */
ul.portfolio-item-info li a.btn { margin-top: 20px; }


/* Portfolio item Description
----------------------------------------------------------------------------- */
.portfolio-item-description {
	padding: 0;
	display: block;
	overflow: hidden;
	margin: 25px auto 0;
}



/* 22.2 Portfolio Columns
============================================================================= */
/* 22.2.1 col 1
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-col-1 { margin-bottom: -20px; }

/* Portfolio item
--------------------------------------------------------- */
/* Wrapper */
.portfolio-col-1 .portfolio-item {
	margin-bottom: 50px;
	padding-bottom: 50px;
	border-bottom: 1px solid #efefef;
}

/* Portfolio item Media
--------------------------------------------------------- */
.portfolio-col-1 .portfolio-item .portfolio-item-media {
	width: 75%;
	float: left;
}
.page-left-sidebar .portfolio-col-1 .portfolio-item .portfolio-item-media,
.page-right-sidebar .portfolio-col-1 .portfolio-item .portfolio-item-media {
	width: 65%;
}

/* Portfolio item Body
--------------------------------------------------------- */
/* Wrapper */
.portfolio-col-1 .portfolio-item .portfolio-item-body {
	width: auto;
	padding-left: 25px;
}

/* Title */
.portfolio-col-1 .portfolio-item .portfolio-item-title {
	margin: 0 auto;
	font-size: 24px;
	line-height: 28px;
}

/* info */
.portfolio-col-1 .portfolio-item ul.portfolio-item-info {
	padding: 0;
	margin: 0 auto;
}
.portfolio-col-1 .portfolio-item ul.portfolio-item-info::before {
	width: 30px;
	height: 2px;
	content: '';
	display: block;
	text-align: left;
	margin: 29px 0 26px;
	background-color: #212121;
}


/* 22.2.2 col 2
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-col-2 {
	width: auto;
	margin: 0 -15px;
}

/* Portfolio item
--------------------------------------------------------- */
/* Wrapper */
.portfolio-col-2 .portfolio-item {
	width: 50%;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.portfolio-col-2 .portfolio-item:nth-child(2n+1) { clear: left; }

/* Portfolio item info
--------------------------------------------------------- */
.portfolio-col-2 .portfolio-item ul.portfolio-item-info { display: none; }


/* 22.2.3 col 3
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-col-3 {
	width: auto;
	margin: 0 -15px;
}

/* Portfolio item
--------------------------------------------------------- */
/* Wrapper */
.portfolio-col-3 .portfolio-item {
	float: left;
	padding-left: 15px;
	padding-right: 15px;
	width: 33.33333333%;
}
.portfolio-col-3 .portfolio-item:nth-child(3n+1) { clear: left; }

/* Portfolio item info
--------------------------------------------------------- */
.portfolio-col-3 .portfolio-item ul.portfolio-item-info { display: none; }


/* 22.2.4 col 4
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-col-4 {
	width: auto;
	margin: 0 -15px;
}

/* Portfolio item
--------------------------------------------------------- */
/* Wrapper */
.portfolio-col-4 .portfolio-item {
	width: 25%;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.portfolio-col-4 .portfolio-item:nth-child(4n+1) { clear: left; }

/* Portfolio item title */
.portfolio-col-4 .portfolio-item .portfolio-item-title {
	font-size: 18px;
	line-height: 24px;
}

/* Portfolio item info
--------------------------------------------------------- */
.portfolio-col-4 .portfolio-item ul.portfolio-item-info { display: none; }


/* 22.2.5 col 5
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-col-5 {
	width: auto;
	margin: 0 -7px;
}

/* Portfolio item
--------------------------------------------------------- */
/* Wrapper */
.portfolio-col-5 .portfolio-item {
	width: 20%;
	float: left;
	padding-left: 7px;
	padding-right: 7px;
}
.portfolio-col-5 .portfolio-item:nth-child(5n+1) { clear: left; }

/* Portfolio item title */
.portfolio-col-5 .portfolio-item .portfolio-item-title {
	font-size: 16px;
	line-height: 24px;
}

/* Portfolio item info
--------------------------------------------------------- */
.portfolio-col-5 .portfolio-item ul.portfolio-item-info { display: none; }

/* Portfolio item Meta
--------------------------------------------------------- */
.portfolio-col-5 .portfolio-item .portfolio-item-meta span { margin-top: 5px; }


/* 22.2.6 Wide
----------------------------------------------------------------------------- */
.portfolio-col-2 .isotope-wide-col { width: 100% !important; }
.portfolio-col-3 .isotope-wide-col { width: 66.66666666% !important; }
.portfolio-col-4 .isotope-wide-col { width: 50% !important; }
.portfolio-col-5 .isotope-wide-col { width: 40% !important; }



/* 22.3 Title overlay
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.portfolio-col-5.portfolio-title-overlay { margin-bottom: 16px; }


/* Portfolio item Wrapper
----------------------------------------------------------------------------- */
.portfolio-col-1.portfolio-title-overlay { padding-bottom: 20px; }
.portfolio-col-1.portfolio-title-overlay .portfolio-item {
	margin-bottom: 0;
	border-bottom: 0;
	padding-bottom: 30px;
}

.portfolio-col-5.portfolio-title-overlay .portfolio-item { padding-bottom: 14px; }


/* Portfolio item Container
----------------------------------------------------------------------------- */
.portfolio-title-overlay .portfolio-item .portfolio-item-container { overflow: hidden; }


/* Portfolio item Media
----------------------------------------------------------------------------- */
/* Wrapper */
.portfolio-title-overlay .portfolio-item .portfolio-item-media {
	float: none;
	width: 100% !important;
}

/* Link */
.portfolio-title-overlay .portfolio-item .portfolio-item-media a.overlay-hover::before,
.portfolio-title-overlay .portfolio-item .portfolio-item-media a.overlay-hover-2x::before {
	top: auto;
	left: 30px;
	z-index: 12;
	bottom: 14px;
	color: #ffffff;
	background-color: transparent;
}

/* OWL Slider */
.portfolio-title-overlay .portfolio-item .portfolio-item-media .gfort-owl-slider.owl-theme .owl-nav,
.portfolio-title-overlay .portfolio-item .portfolio-item-media .gfort-owl-slider.owl-theme[data-slider-dots-position=inside] .owl-dots {
	display: none;
}

/* Title */
.portfolio-title-overlay .portfolio-item .portfolio-item-title { margin: 0; }
.portfolio-title-overlay .portfolio-item .portfolio-item-title a { color: #ffffff; }

/* Meta */
.portfolio-title-overlay .portfolio-item .portfolio-item-meta span a { color: rgba(255, 255, 255, 0.90); }
.portfolio-title-overlay .portfolio-item .portfolio-item-meta span a:hover { color: #ffffff; }

/* info */
.portfolio-title-overlay .portfolio-item ul.portfolio-item-info { display: none; }


/* Portfolio item Body
----------------------------------------------------------------------------- */
/* Wrapper */
.portfolio-title-overlay .portfolio-item .portfolio-item-body {
	left: 0;
	opacity: 0;
	width: 100%;
	height: 100%;
	bottom: 40px;
	overflow: visible;
	position: absolute;
	padding: 60px 20px 20px;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.portfolio-title-overlay .portfolio-item .portfolio-item-body::after {
	left: 40px;
	width: 100%;
	content: '';
	z-index: 12;
	height: 40px;
	bottom: -40px;
	position: absolute;
}


/* Hover
----------------------------------------------------------------------------- */
.portfolio-title-overlay .portfolio-item-container:hover .portfolio-item-body {
	opacity: 1;
	visibility: visible;
}

.portfolio-title-overlay .portfolio-item-container:hover .portfolio-item-media a.overlay-hover::after,
.portfolio-title-overlay .portfolio-item-container:hover .portfolio-item-media a.overlay-hover-2x::after {
	opacity: 0.80;
}

.portfolio-title-overlay .portfolio-item-container:hover .portfolio-item-media .scale-hover img {
	-webkit-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
}

.portfolio-title-overlay .portfolio-item-container:hover .portfolio-item-media a.overlay-hover::before,
.portfolio-title-overlay .portfolio-item-container:hover .portfolio-item-media a.overlay-hover-2x::before {
	opacity: 1;

	-webkit-animation: overlayMoveIcon 0.6s ease forwards;
	animation: overlayMoveIcon 0.6s ease forwards;
}



/* 22.4 No Margin
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.portfolio-no-margin {
	margin-bottom: 0;
	margin-left: 0 !important;
	margin-right: 0 !important;
}
.portfolio-no-margin.portfolio-title-overlay { margin: 0 auto 30px !important; }
.portfolio-section.mb-0 .portfolio-no-margin.portfolio-title-overlay { margin-bottom: 0 !important; }


/* Portfolio item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.portfolio-no-margin .portfolio-item {
	padding-left: 0 !important;
	padding-right: 0 !important;
}
.portfolio-no-margin.portfolio-title-overlay .portfolio-item { padding-bottom: 0 !important; }

/* Portfolio item Media / Link / image / overlay
--------------------------------------------------------- */
.portfolio-no-margin .portfolio-item .portfolio-item-media,
.portfolio-no-margin .portfolio-item .portfolio-item-media a,
.portfolio-no-margin .portfolio-item .portfolio-item-media a img,
.portfolio-no-margin .portfolio-item .portfolio-item-media a.overlay-hover::after,
.portfolio-no-margin .portfolio-item .portfolio-item-media a.overlay-hover-2x::after {
	border-radius: 0;
}

/* Portfolio item Body
--------------------------------------------------------- */
.portfolio-no-margin .portfolio-item .portfolio-item-body { padding-right: 20px; }
.fullwidth-section .portfolio-no-margin .portfolio-item .portfolio-item-body { padding-left: 20px; }



/* 22.5 Fullwidth Section
============================================================================= */
/* Portfolio
----------------------------------------------------------------------------- */
.fullwidth-section .portfolio-col-2,
.fullwidth-section .portfolio-col-3,
.fullwidth-section .portfolio-col-4 {
	margin: 0 15px;
}
.fullwidth-section .portfolio-col-5 { margin: 0 7px; }


/* Gallery
----------------------------------------------------------------------------- */
.fullwidth-section .gallery-col-2,
.fullwidth-section .gallery-col-3,
.fullwidth-section .gallery-col-4,
.fullwidth-section .gallery-col-5 {
	margin-left: 2px;
	margin-right: 2px;
}
.fullwidth-section .gallery-gap-0 {
	margin-left: 0;
	margin-right: 0;
}
.fullwidth-section .gallery-gap-10 {
	margin-left: 5px;
	margin-right: 5px;
}
.fullwidth-section .gallery-gap-30 {
	margin-left: 15px;
	margin-right: 15px;
}



/* 22.6 Portfolio Single item
============================================================================= */
/* Portfolio item Media Content
----------------------------------------------------------------------------- */
.portfolio-single-item .portfolio-item .portfolio-item-media .portfolio-item-media-content {
	padding: 0;
	z-index: 11;
	width: 100%;
	line-height: 0;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	margin: 0 auto 30px;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

/* soundcloud Embed */
.portfolio-single-item .portfolio-item .portfolio-item-media iframe:not([height])[src*=\"soundcloud\"] {
	height: 405px;
}


/* Portfolio item Title
----------------------------------------------------------------------------- */
.portfolio-single-item .portfolio-item .portfolio-item-title {
	margin: 0 auto;
	font-size: 24px;
	line-height: 28px;
}


/* Portfolio item info
----------------------------------------------------------------------------- */
.portfolio-single-item .portfolio-item ul.portfolio-item-info {
	width: 280px;
	float: right;
	clear: right;
	overflow: hidden;
	padding: 15px 20px 25px;
	margin: 30px auto 0 25px;
	border: 2px solid #efefef;
}
.portfolio-single-item .portfolio-item ul.portfolio-item-info li { margin-bottom: 15px; }
.portfolio-single-item .portfolio-item ul.portfolio-item-info li:last-child { margin-bottom: 0; }
.portfolio-single-item .portfolio-item ul.portfolio-item-info li span {
	width: 100%;
	display: block;
	margin: 0 auto;
}
.portfolio-single-item .portfolio-item ul.portfolio-item-info li a.btn { margin-top: 5px }


/* Side By Side
----------------------------------------------------------------------------- */
/* Portfolio item
--------------------------------------------------------- */
.portfolio-single-item.portfolio-single-item-sbs .portfolio-item { padding-bottom: 0; }

/* Portfolio item Media
--------------------------------------------------------- */
.portfolio-single-item.portfolio-single-item-sbs .portfolio-item .portfolio-item-media {
	width: 63%;
	float: left;
	clear: left;
	margin: 0 auto;
	padding: 0 15px 0 0;
}

/* Portfolio item Body
--------------------------------------------------------- */
/* Wrapper */
.portfolio-single-item.portfolio-single-item-sbs .portfolio-item .portfolio-item-body {
	width: auto;
	margin: 0 auto 30px;
	padding: 0 0 0 15px;
}

/* Portfolio item info */
.portfolio-single-item.portfolio-single-item-sbs .portfolio-item ul.portfolio-item-info {
	border: 0;
	padding: 0;
	width: 100%;
	float: none;
	clear: none;
	margin: 0 auto;
}
.portfolio-single-item.portfolio-single-item-sbs .portfolio-item ul.portfolio-item-info::before {
	width: 30px;
	height: 2px;
	content: '';
	display: block;
	text-align: left;
	margin: 29px 0 26px;
	background-color: #212121;
}



/* 22.7 Related Portfolio Projects
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.related-portfolio-projects {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.related-portfolio-projects-container {
	width: 100%;
	overflow: hidden;
	padding: 0 0 15px;
	position: relative;
	margin: 15px auto 30px;
	border-bottom: 1px solid #efefef;
}
.related-portfolio-projects:last-child .related-portfolio-projects-container {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Portfolio Project item
----------------------------------------------------------------------------- */
/* List
--------------------------------------------------------- */
.related-portfolio-projects ul.portfolio-projects { margin: 0 -15px; }


/* items
--------------------------------------------------------- */
.related-portfolio-projects ul.portfolio-projects li {
	float: left;
	padding: 0 15px;
	width: 33.33333333%;
	margin: 0 auto 30px;
	display: inline-block;
}
.related-portfolio-projects ul.portfolio-projects li:nth-child(3n+1) { clear: left; }

.page-left-sidebar .related-portfolio-projects ul.portfolio-projects li,
.page-right-sidebar .related-portfolio-projects ul.portfolio-projects li {
	width: 50%;
}
.page-left-sidebar .related-portfolio-projects ul.portfolio-projects li:nth-child(2n+1),
.page-right-sidebar .related-portfolio-projects ul.portfolio-projects li:nth-child(2n+1) {
	clear: left;
}
.page-left-sidebar .related-portfolio-projects ul.portfolio-projects li:nth-child(3n+1),
.page-right-sidebar .related-portfolio-projects ul.portfolio-projects li:nth-child(3n+1) {
	clear: none;
}


/* image
--------------------------------------------------------- */
.related-portfolio-projects ul.portfolio-projects li a.item-image {
	width: 100%;
	margin: 0 auto 20px;
}

/* Portfolio item Link (Title)
--------------------------------------------------------- */
.related-portfolio-projects ul.portfolio-projects li a.portfolio-item-small-title {
	padding: 0;
	margin: 0 auto;
	color: #212121;
	font-size: 20px;
	font-weight: 400;
	line-height: 26px;
}
.related-portfolio-projects ul.portfolio-projects li a.portfolio-item-small-title:hover { color: #$primary_color; }




/* =============================================================================
23. Shop
============================================================================= */
/* Shop items info
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.shop-items-info {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}
.shop-items-info::after {
	content: '';
	clear: both;
	display: table;
}


/* Result
----------------------------------------------------------------------------- */
.shop-items-info p {
	float: left;
	clear: left;
	line-height: 42px;
	margin: 0 auto 30px;
}


/* Form
----------------------------------------------------------------------------- */
.shop-items-info form {
	float: right;
	clear: right;
	margin: 0 auto 30px;
}



/* Shop items Wrapper
============================================================================= */
.shop-items-wrapper {
	width: 100%;
	display: block;
	position: relative;
}



/* Products
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.products {
	margin: 0;
	padding: 0;
	list-style: none;
	overflow: hidden;
	position: relative;
}


/* Shop item
----------------------------------------------------------------------------- */
.shop-item,
ul.products li {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 0 0 30px;
	position: relative;
}
.gfort-owl-slider .shop-item,
.gfort-owl-slider ul.products li {
	padding-bottom: 0;
}


/* Shop item Container
----------------------------------------------------------------------------- */
.shop-item-container {
	width: 100%;
	display: block;
	position: relative;
}
.shop-item-container::after {
	content: '';
	clear: both;
	display: table;
}


/* Shop item Media
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-item-container .shop-item-media {
	padding: 0;
	z-index: 10;
	width: 100%;
	margin: 0 auto;
	line-height: 0;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

/* Link
--------------------------------------------------------- */
.shop-item-container .shop-item-media a {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
}


/* onSale
--------------------------------------------------------- */
.onsale {
	color: #212121;
	font-size: 12px;
	font-weight: 700;
	line-height: 20px;
	padding: 7px 20px;
	letter-spacing: 0.30px;
	text-transform: uppercase;
}
.shop-item-container .shop-item-media a .onsale {
	top: 15px;
	left: 15px;
	z-index: 20;
	display: block;
	overflow: hidden;
	position: absolute;
	border-radius: 2px;
	background-color: #ffffff;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

/* image
--------------------------------------------------------- */
.shop-item-container .shop-item-media img {
	width: 100%;
	display: inline-block;
}


/* Shop item Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-item-container .shop-item-body {
	padding: 0;
	z-index: 11;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}

/* Shop item Title
--------------------------------------------------------- */
.shop-item-body .shop-item-title {
	padding: 0;
	width: 100%;
	color: #212121;
	display: block;
	font-size: 20px;
	font-weight: 400;
	line-height: 26px;
	position: relative;
	margin: 20px auto 0;
}
.shop-item-title a { color: inherit; }
.shop-item-title a:hover { color: #$primary_color; }

/* Shop item Price
--------------------------------------------------------- */
.shop-item-body span.price {
	padding: 0;
	width: 100%;
	font-size: 0;
	margin: 0 auto;
	line-height: 0;
	display: block;
	overflow: hidden;
	font-weight: 500;
}
.shop-item-body span.price span.amount {
	font-size: 17px;
	margin: 10px 0 0;
	line-height: 17px;
	position: relative;
	display: inline-block;
}

.shop-item-body span.price del .amount {
	font-size: 15px;
	margin-right: 10px;
	text-decoration: line-through;
}

/* Shop item Description
--------------------------------------------------------- */
.shop-item-body .shop-item-description {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 25px auto 0;
}

/* Shop item Meta
--------------------------------------------------------- */
/* Wrapper */
.shop-item-body .shop-item-meta {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 25px auto 0;
}

/* span */
.shop-item-body .shop-item-meta span {
	width: 100%;
	display: block;
	margin: 0 auto 5px;
}
.shop-item-body .shop-item-meta span:last-child { margin-bottom: 0; }

/* Link */
.shop-item-body .shop-item-meta span a { color: #212121; }
.shop-item-body .shop-item-meta span a:hover { color: #$primary_color; }

/* Shop item Add to Cart Button
--------------------------------------------------------- */
.shop-item-body .shop-item-button {
	width: 100%;
	display: block;
	line-height: 1;
	font-size: 13px;
	font-weight: 700;
	overflow: hidden;
	margin: 18px auto 0;
	text-transform: uppercase;
}
.shop-item-button a { display: inline-block; }
.shop-item-button a i {
	height: 13px;
	font-size: 10px;
	line-height: 14px;
	vertical-align: top;
	display: inline-block;
}



/* 23.1 Shop Columns
============================================================================= */
/* 23.1.1 col 2
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-col-2 {
	width: auto;
	margin: 0 -15px;
}

/* Shop item
--------------------------------------------------------- */
.shop-col-2 .shop-item {
	width: 50%;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.shop-col-2 .shop-item:nth-child(2n+1) { clear: left; }


/* 23.1.2 col 3
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-col-3 {
	width: auto;
	margin: 0 -15px;
}

/* Shop item
--------------------------------------------------------- */
.shop-col-3 .shop-item {
	float: left;
	padding-left: 15px;
	padding-right: 15px;
	width: 33.33333333%;
}
.shop-col-3 .shop-item:nth-child(3n+1) { clear: left; }


/* 23.1.3 col 4
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-col-4 {
	width: auto;
	margin: 0 -15px;
}

/* Shop item
--------------------------------------------------------- */
/* Wrapper */
.shop-col-4 .shop-item {
	width: 25%;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.shop-col-4 .shop-item:nth-child(4n+1) { clear: left; }

/* Shop item title */
.shop-col-4 .shop-item .shop-item-title {
	font-size: 18px;
	line-height: 24px;
}


/* 23.1.4 col 5
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-col-5 {
	width: auto;
	margin: 0 -7px;
}

/* Shop item
--------------------------------------------------------- */
/* Wrapper */
.shop-col-5 .shop-item {
	width: 20%;
	float: left;
	padding-left: 7px;
	padding-right: 7px;
}
.shop-col-5 .shop-item:nth-child(5n+1) { clear: left; }

/* Shop item title */
.shop-col-5 .shop-item .shop-item-title {
	font-size: 16px;
	line-height: 24px;
}



/* 23.2 Shop Single item
============================================================================= */
/* Shop item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.shop-single-item article.shop-item { padding-bottom: 0; }

/* Shop item Media
--------------------------------------------------------- */
.shop-single-item article.shop-item .shop-item-media {
	width: 33%;
	float: left;
	clear: left;
	margin: 0 auto;
	padding: 0 15px 0 0;
}
.page-left-sidebar .shop-single-item article.shop-item .shop-item-media,
.page-right-sidebar .shop-single-item article.shop-item .shop-item-media {
	width: 48%;
}

/* Shop item Body
--------------------------------------------------------- */
/* Wrapper */
.shop-single-item article.shop-item .shop-item-body {
	width: auto;
	margin: 0 auto 30px;
	padding: 0 0 0 15px;
}

/* on Sale */
.shop-single-item article.shop-item .shop-item-body .onsale {
	margin: 0 auto 20px;
	display: inline-block;
	border: 2px solid #efefef;
}

/* Title */
.shop-single-item article.shop-item .shop-item-body .shop-item-title {
	margin: 0 auto;
	font-size: 24px;
	line-height: 28px;
}

.shop-single-item article.shop-item .shop-item-body .shop-item-title a.btn-wishlist {
	float: left;
	font-size: 20px;
	margin-right: 10px;
}

/* Price */
.shop-single-item article.shop-item .shop-item-body span.price { padding-top: 10px; }

/* Shop item Tabs
--------------------------------------------------------- */
.shop-single-item article.shop-item .gfort-tabs { margin-top: 20px; }
.shop-single-item article.shop-item .gfort-tabs table { margin-top: 10px; }
.shop-single-item article.shop-item .gfort-tabs .comment-block { padding-bottom: 20px; }
.shop-single-item article.shop-item .gfort-tabs ul.comments-block-list { margin-bottom: 35px; }



/* 23.3 Related Shop Products
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.related-shop-products {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.related-shop-products-container {
	width: 100%;
	overflow: hidden;
	padding: 0 0 15px;
	position: relative;
	margin: 15px auto 30px;
	border-bottom: 1px solid #efefef;
}
.related-shop-products:last-child .related-shop-products-container {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Shop Product item
----------------------------------------------------------------------------- */
/* List
--------------------------------------------------------- */
.related-shop-products-container ul.products {
	width: auto;
	margin: 0 -15px;
}

/* items
--------------------------------------------------------- */
.related-shop-products-container ul.products li {
	width: 25%;
	float: left;
	padding: 0 15px;
	margin: 0 auto 30px;
}
.related-shop-products-container ul.products li:nth-child(4n+1) { clear: left; }

.page-left-sidebar .related-shop-products-container ul.products li,
.page-right-sidebar .related-shop-products-container ul.products li {
	width: 33.33333333%;
}
.page-left-sidebar .related-shop-products-container ul.products li:nth-child(3n+1),
.page-right-sidebar .related-shop-products-container ul.products li:nth-child(3n+1) {
	clear: left;
}
.page-left-sidebar .related-shop-products-container ul.products li:nth-child(4n+1),
.page-right-sidebar .related-shop-products-container ul.products li:nth-child(4n+1) {
	clear: none;
}



/* 23.4 Payment
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
ul#payment {
	padding: 0;
	width: 100%;
	display: block;
	list-style: none;
	overflow: hidden;
	margin: 0 auto 20px;
}


/* items
----------------------------------------------------------------------------- */
ul#payment li {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 10px;
}


/* input
----------------------------------------------------------------------------- */
ul#payment li .radio,
ul#payment li .checkbox,
ul#payment li .radio-inline,
ul#payment li .checkbox-inline {
	margin: 0 auto;
}


/* image
----------------------------------------------------------------------------- */
ul#payment li label img { height: 26px; }


/* Link
----------------------------------------------------------------------------- */
ul#payment li label a {
	color: #212121;
	font-weight: 500;
}
ul#payment li label a:hover { color: #$primary_color; }


/* Content
----------------------------------------------------------------------------- */
ul#payment li div:not(.radio) {
	width: 100%;
	display: none;
	padding: 25px;
	border-radius: 2px;
	margin: 10px auto 0;
	background-color: #f5f5f5;
}



/* 23.5 Place Order btn
============================================================================= */
.place-order-btn {
	width: 100%;
	display: block;
	overflow: hidden;
	text-align: right;
	margin: 0 auto 30px;
}




/* =============================================================================
24. Navigation Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gfort-navigation-block {
	padding: 0;
	width: 100%;
	display: block;
	line-height: 0;
	overflow: hidden;
	text-align: center;
	position: relative;
}



/* 24.1 Button
============================================================================= */
.gfort-navigation-block a.btn { margin: 20px auto 30px; }



/* 24.2 Normal
============================================================================= */
/* List
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination {
	margin: -5px;
	padding: 20px 0 30px;
}


/* items
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination > li {
	margin: 5px;
	float: left;
}


/* Link / span
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination > li > a,
.gfort-navigation-block .pagination > li > span {
	border: 0;
	margin: 0;
	display: block;
	color: #212121;
	font-size: 14px;
	min-width: 32px;
	min-height: 32px;
	font-weight: 700;
	line-height: 20px;
	padding: 6px 10px;
	border-radius: 2px;
	text-transform: uppercase;
	background-color: transparent;
}
.gfort-navigation-block .pagination > li span { display: block; }
.gfort-navigation-block .pagination > li:not(.active) span {
	font-size: 12px;
	letter-spacing: 0.30px;
}


/* icon
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination i {
	display: block;
	font-size: 20px;
	letter-spacing: 0;
	line-height: 18px;
}


/* Hover
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination > li > a:hover { background-color: #f5f5f5; }


/* Disabled
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination > .disabled > a,
.gfort-navigation-block .pagination > .disabled > a:focus,
.gfort-navigation-block .pagination > .disabled > a:hover,
.gfort-navigation-block .pagination > .disabled > span,
.gfort-navigation-block .pagination > .disabled > span:focus,
.gfort-navigation-block .pagination > .disabled > span:hover {
	color: #666666;
	cursor: default;
	background-color: transparent;
}
.gfort-navigation-block .pagination > .disabled i { opacity: 0.50; }


/* Active
----------------------------------------------------------------------------- */
.gfort-navigation-block .pagination > .active > a,
.gfort-navigation-block .pagination > .active > a:focus,
.gfort-navigation-block .pagination > .active > a:hover,
.gfort-navigation-block .pagination > .active > span,
.gfort-navigation-block .pagination > .active > span:focus,
.gfort-navigation-block .pagination > .active > span:hover {
	color: #ffffff;
	background-color: #$primary_color;
}



/* 24.3 Pager
============================================================================= */
/* List
----------------------------------------------------------------------------- */
.gfort-navigation-block .pager {
	margin: 0;
	padding: 20px 0 30px;
}


/* items
----------------------------------------------------------------------------- */
.gfort-navigation-block .pager > li {
	margin: 0;
	line-height: 42px;
}
.gfort-navigation-block .pager > li.next { float: right; }
.gfort-navigation-block .pager > li.previous { float: left; }


/* Link
----------------------------------------------------------------------------- */
.gfort-navigation-block .pager li > a,
.gfort-navigation-block .pager li > span {
	border: 0;
	margin: 0;
	z-index: 15;
	color: #666666;
	font-size: 13px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	position: relative;
	padding: 11px 25px;
	border-radius: 2px;
	letter-spacing: 0.30px;
	outline: none !important;
	text-transform: uppercase;
	background-color: #f5f5f5;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.gfort-navigation-block .pager li > a:hover {
	color: #ffffff;
	background-color: #212121;
}



/* 24.4 Pager Prev / Next
============================================================================= */
/* List
----------------------------------------------------------------------------- */
ul.gfort-pager {
	display: block;
	list-style: none;
	overflow: hidden;
	padding: 0 0 15px;
	margin: 15px -15px 30px;
	border-bottom: 1px solid #efefef;
}
.gfort-navigation-block:last-child ul.gfort-pager {
	margin-bottom: 0;
	border-bottom: 0;
	padding-bottom: 0;
}


/* items
----------------------------------------------------------------------------- */
ul.gfort-pager li {
	width: 50%;
	float: left;
	padding: 0 15px;
	min-height: 24px;
	position: relative;
	margin: 0 auto 30px;
}
ul.gfort-pager li.next { text-align: right; }
ul.gfort-pager li.previous { text-align: left; }


/* Link
----------------------------------------------------------------------------- */
ul.gfort-pager li a {
	width: 100%;
	display: block;
	color: inherit;
	font-weight: 600;
	overflow: hidden;
	position: relative;
}

ul.gfort-pager li.next a { padding-right: 28px; }
ul.gfort-pager li.previous a { padding-left: 28px; }

ul.gfort-pager li a:hover i,
ul.gfort-pager li a:hover .gfort-pager-title h6 {
	color: #$primary_color;
}


/* icon (Arrow)
----------------------------------------------------------------------------- */
ul.gfort-pager li a i {
	top: 50%;
	z-index: 2;
	width: 24px;
	height: 24px;
	font-size: 24px;
	margin-top: -14px;
	line-height: 24px;
	position: absolute;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
ul.gfort-pager li.next a i { right: 0; }
ul.gfort-pager li.previous a i { left: 0; }


/* image
----------------------------------------------------------------------------- */
ul.gfort-pager li a img {
	width: 64px;
	border-radius: 50%;
}

ul.gfort-pager li.next a img {
	float: right;
	margin-left: 15px;
}
ul.gfort-pager li.previous a img {
	float: left;
	margin-right: 15px;
}


/* Title
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.gfort-pager li a .gfort-pager-title {
	z-index: 2;
	width: auto;
	display: block;
	overflow: hidden;
	padding: 2px 0 0;
	position: relative;
}

/* Span
--------------------------------------------------------- */
ul.gfort-pager li a .gfort-pager-title span {
	z-index: 2;
	width: 100%;
	display: block;
	line-height: 1;
	font-size: 12px;
	position: relative;
	margin-bottom: 8px;
	letter-spacing: 0.30px;
	text-transform: uppercase;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}


/* Head
--------------------------------------------------------- */
ul.gfort-pager li a .gfort-pager-title h6 {
	color: #212121;
	font-weight: 400;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}



/* 24.4.1 Pager Prev / Next (Style 1)
============================================================================= */
/* Link
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
ul.gfort-pager-style-1 li a {
	padding: 20px;
	border-radius: 2px;
}

ul.gfort-pager-style-1 li.next a { padding-right: 48px; }
ul.gfort-pager-style-1 li.previous a { padding-left: 48px; }

ul.gfort-pager-style-1 li a * { color: #ffffff !important; }

/* overlay
--------------------------------------------------------- */
ul.gfort-pager-style-1 li a::after {
	top: 0;
	left: 0;
	opacity: 1;
	z-index: 1;
	width: 100%;
	content: '';
	height: 100%;
	border-radius: 2px;
	position: absolute;
	background-color: #$primary_color;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

/* Hover
--------------------------------------------------------- */
ul.gfort-pager-style-1 li a:hover::after { opacity: 0.80; }


/* icon (Arrow)
----------------------------------------------------------------------------- */
ul.gfort-pager-style-1 li.next a i { right: 20px; }
ul.gfort-pager-style-1 li.previous a i { left: 20px; }


/* image
----------------------------------------------------------------------------- */
ul.gfort-pager-style-1 li a img {
	left: 0;
	top: 50%;
	z-index: -1;
	width: 100%;
	border-radius: 0;
	position: absolute;
	margin: 0 !important;
	float: none !important;

	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}


/* Title
----------------------------------------------------------------------------- */
ul.gfort-pager-style-1 li a .gfort-pager-title h6 {
	width: 100%;
	display: block;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}



/* 24.4.2 Pager Prev / Next (Style 2)
============================================================================= */
/* Link
----------------------------------------------------------------------------- */
ul.gfort-pager-style-2 li a {
	padding: 20px;
	border-radius: 2px;
	border: 1px solid #efefef;
}

ul.gfort-pager-style-2 li.next a { padding-right: 48px; }
ul.gfort-pager-style-2 li.previous a { padding-left: 48px; }

ul.gfort-pager-style-2 li a:hover { background-color: #f5f5f5; }
ul.gfort-pager-style-2 li a:hover i,
ul.gfort-pager-style-2 li a:hover h6 {
	color: #212121;
}


/* icon (Arrow)
----------------------------------------------------------------------------- */
ul.gfort-pager-style-2 li.next a i { right: 20px; }
ul.gfort-pager-style-2 li.previous a i { left: 20px; }


/* image
----------------------------------------------------------------------------- */
ul.gfort-pager-style-2 li a img { display: none; }


/* Title
----------------------------------------------------------------------------- */
ul.gfort-pager-style-2 li a .gfort-pager-title h6 {
	width: 100%;
	color: #212121;
	display: block;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
ul.gfort-pager-style-2 li a:hover .gfort-pager-title h6 { color: #212121; }



/* 24.4.3 Pager Prev / Next (Style 3)
============================================================================= */
ul.gfort-pager-style-3 li a img {
	width: auto;
	max-height: 64px;
	border-radius: 2px;
}

@media (min-width: 1200px) {


	/* List
	------------------------------------------------------------------------- */
	ul.gfort-pager-style-3 {
		margin: 0;
		border: 0;
		padding: 0;
	}


	/* items
	------------------------------------------------------------------------- */
	ul.gfort-pager-style-3 li {
		top: 50%;
		padding: 0;
		z-index: 20;
		width: 240px;
		position: fixed;
		margin: -82px 0 0;

		-webkit-transition: transform 0.30s 0.60s;
		transition: transform 0.30s 0.60s;
	}
	ul.gfort-pager-style-3 li.next {
		right: 0;

		-webkit-transform: translateX(200px);
		-ms-transform: translateX(200px);
		transform: translateX(200px);
	}
	ul.gfort-pager-style-3 li.previous {
		left: 0;

		-webkit-transform: translateX(-200px);
		-ms-transform: translateX(-200px);
		transform: translateX(-200px);
	}


	/* Link
	------------------------------------------------------------------------- */
	ul.gfort-pager-style-3 li a {
		width: 100%;
		color: #ffffff;
		overflow: visible;
		background-color: #212121;
	}
	ul.gfort-pager-style-3 li.next a {
		padding-right: 200px;
		border-radius: 2px 0 0 2px;
	}
	ul.gfort-pager-style-3 li.previous a {
		padding-left: 200px;
		border-radius: 0 2px 2px 0;
	}


	/* icon (Arrow)
	------------------------------------------------------------------------- */
	ul.gfort-pager-style-3 li a i {
		top: 0;
		z-index: 1;
		width: 100%;
		height: 120px;
		margin-top: 0;
		position: relative;
		text-align: center;
		line-height: 120px;

		-webkit-transition: transform 0.30s 0.30s;
		transition: transform 0.30s 0.30s;
	}


	/* image
	------------------------------------------------------------------------- */
	ul.gfort-pager-style-3 li a img {
		top: 0;
		z-index: 2;
		width: 240px;
		height: 120px;
		border-radius: 0;
		max-height: 120px;
		position: absolute;
		margin: 0 !important;

		-webkit-transition: transform 0.30s 0.60s;
		transition: transform 0.30s 0.60s;
	}
	ul.gfort-pager-style-3 li.next a img {
		right: 0;
		border-radius: 2px 0 0 0;

		-webkit-transform: translateX(40px);
		-ms-transform: translateX(40px);
		transform: translateX(40px);
	}
	ul.gfort-pager-style-3 li.previous a img {
		left: 0;
		border-radius: 0 2px 0 0;

		-webkit-transform: translateX(-40px);
		-ms-transform: translateX(-40px);
		transform: translateX(-40px);
	}


	/* Title
	------------------------------------------------------------------------- */
	/* Wrapper
	--------------------------------------------------------- */
	ul.gfort-pager-style-3 li a .gfort-pager-title {
		left: 0;
		top: 100%;
		padding: 0;
		z-index: -1;
		width: 100%;
		overflow: hidden;
		position: absolute;
	}

	/* Span
	--------------------------------------------------------- */
	ul.gfort-pager-style-3 li a .gfort-pager-title span { display: none; }

	/* Heading
	--------------------------------------------------------- */
	ul.gfort-pager-style-3 li a .gfort-pager-title h6 {
		width: 100%;
		display: block;
		color: #ffffff;
		font-size: 14px;
		font-weight: 700;
		overflow: hidden;
		text-align: left;
		line-height: 20px;
		padding: 12px 16px;
		white-space: nowrap;
		text-overflow: ellipsis;
		background-color: #212121;

		-webkit-transition-delay: 1s;
		transition-delay: 1s;

		-webkit-transform-origin: 50% 0;
		-ms-transform-origin: 50% 0;
		transform-origin: 50% 0;

		-webkit-transform: rotateX(-90deg);
		transform: rotateX(-90deg);

		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;

		-webkit-transition: transform 0.30s 0.30s;
		transition: transform 0.30s 0.30s;
	}
	ul.gfort-pager-style-3 li.next a .gfort-pager-title h6 { border-radius: 0 0 0 2px; }
	ul.gfort-pager-style-3 li.previous a .gfort-pager-title h6 { border-radius: 0 0 2px 0; }
	ul.gfort-pager-style-3 li a:hover .gfort-pager-title h6 { color: #ffffff; }


	/* Hover
	------------------------------------------------------------------------- */
	ul.gfort-pager-style-3 li:hover {
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}

	ul.gfort-pager-style-3 li.next a:hover { border-radius: 2px 0 0 0; }
	ul.gfort-pager-style-3 li.previous a:hover { border-radius: 0 2px 0 0; }

	ul.gfort-pager-style-3 li a:hover i { color: #ffffff; }

	ul.gfort-pager-style-3 li.next:hover i {
		-webkit-transform: translateX(100%);
		-ms-transform: translateX(100%);
		transform: translateX(100%);
	}
	ul.gfort-pager-style-3 li.previous a:hover i {
		-webkit-transform: translateX(-100%);
		-ms-transform: translateX(-100%);
		transform: translateX(-100%);
	}

	ul.gfort-pager-style-3 li a:hover img {
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}

	ul.gfort-pager-style-3 li a:hover .gfort-pager-title h6 {
		-webkit-transition-delay: 1s;
		transition-delay: 1s;

		-webkit-transform: rotateX(0deg);
		transform: rotateX(0deg);
	}


}


/* 24.4.4 Pager Prev / Next (Style 4)
============================================================================= */
@media (min-width: 1200px) {

	/* List
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 {
		margin: 0;
		border: 0;
		padding: 0;
	}


	/* items
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 li {
		top: 50%;
		padding: 0;
		z-index: 20;
		width: 120px;
		position: fixed;
		margin: -82px 0 0;

		-webkit-transition: transform 0.30s 0.60s;
		transition: transform 0.30s 0.60s;
	}
	ul.gfort-pager-style-4 li.next {
		right: 0;

		-webkit-transform: translateX(80px);
		-ms-transform: translateX(80px);
		transform: translateX(80px);
	}
	ul.gfort-pager-style-4 li.previous {
		left: 0;

		-webkit-transform: translateX(-80px);
		-ms-transform: translateX(-80px);
		transform: translateX(-80px);
	}


	/* Link
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 li a {
		width: 100%;
		color: #ffffff;
		overflow: visible;
		background-color: #212121;
	}
	ul.gfort-pager-style-4 li.next a {
		padding-right: 80px;
		border-radius: 2px 0 0 2px;
	}
	ul.gfort-pager-style-4 li.previous a {
		padding-left: 80px;
		border-radius: 0 2px 2px 0;
	}


	/* icon (Arrow)
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 li a i {
		top: 0;
		z-index: 1;
		width: 100%;
		height: 120px;
		margin-top: 0;
		position: relative;
		text-align: center;
		line-height: 120px;

		-webkit-transition: transform 0.30s 0.30s;
		transition: transform 0.30s 0.30s;
	}


	/* image
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 li a img {
		top: 0;
		z-index: 2;
		width: 120px;
		height: 120px;
		border-radius: 0;
		position: absolute;
		margin: 0 !important;

		-webkit-transition: transform 0.30s 0.60s;
		transition: transform 0.30s 0.60s;
	}
	ul.gfort-pager-style-4 li.next a img {
		right: 0;
		border-radius: 2px 0 0 2px;

		-webkit-transform: translateX(40px);
		-ms-transform: translateX(40px);
		transform: translateX(40px);
	}
	ul.gfort-pager-style-4 li.previous a img {
		left: 0;
		border-radius: 0 2px 2px 0;

		-webkit-transform: translateX(-40px);
		-ms-transform: translateX(-40px);
		transform: translateX(-40px);
	}

	/* Title
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 li a .gfort-pager-title { display: none; }


	/* Hover
	----------------------------------------------------------------------------- */
	ul.gfort-pager-style-4 li:hover {
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}

	ul.gfort-pager-style-4 li.next a:hover { border-radius: 2px 0 0 0; }
	ul.gfort-pager-style-4 li.previous a:hover { border-radius: 0 2px 0 0; }

	ul.gfort-pager-style-4 li a:hover i { color: #ffffff; }

	ul.gfort-pager-style-4 li.next:hover i {
		-webkit-transform: translateX(100%);
		-ms-transform: translateX(100%);
		transform: translateX(100%);
	}
	ul.gfort-pager-style-4 li.previous a:hover i {
		-webkit-transform: translateX(-100%);
		-ms-transform: translateX(-100%);
		transform: translateX(-100%);
	}

	ul.gfort-pager-style-4 li a:hover img {
		-webkit-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	}

}




/* =============================================================================
25. Tags Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.tags-block {
	width: 100%;
	margin: 0 auto;
	display: block;
	padding: 0 0 30px;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.tags-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* span
----------------------------------------------------------------------------- */
.tags-block-container span {
	width: 100%;
	display: block;
	line-height: 1;
	font-weight: 500;
	margin-bottom: 15px;
}


/* List
----------------------------------------------------------------------------- */
.tags-block-container ul {
	padding: 0;
	width: auto;
	margin: -5px;
	display: block;
	list-style: none;
	overflow: hidden;
}


/* items
----------------------------------------------------------------------------- */
.tags-block-container ul li {
	float: left;
	margin: 5px;
}




/* =============================================================================
26. Share Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.share-block {
	width: 100%;
	display: block;
	padding: 15px 0;
	overflow: hidden;
	position: relative;
	margin: 15px auto 30px;
	border-top: 1px solid #efefef;
	border-bottom: 1px solid #efefef;
}


/* span
----------------------------------------------------------------------------- */
.share-block > span {
	width: auto;
	float: left;
	display: block;
	font-weight: 500;
	line-height: 32px;
}


/* Social icons
----------------------------------------------------------------------------- */
.share-block .social-icons-block {
	width: auto;
	float: right;
}




/* =============================================================================
27. Author Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.author-block {
	padding: 0;
	width: 100%;
	margin: 0 auto;
	display: block;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.author-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	padding: 0 0 45px;
	position: relative;
	margin: 15px auto 30px;
	border-bottom: 1px solid #efefef;
}
.author-block:last-child .author-block-container {
	border-bottom: 0;
	padding-bottom: 0;
}


/* Avatar
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.author-block-avatar {
	float: left;
	width: 56px;
	overflow: hidden;
	position: relative;
	margin: 0 15px 0 0;
}

/* Link
--------------------------------------------------------- */
.author-block-avatar a {
	width: 100%;
	display: block;
	overflow: hidden;
	border-radius: 50%;
}

/* image
--------------------------------------------------------- */
.author-block-avatar a img {
	width: 100%;
	display: inline-block;
}


/* Author Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.author-block-body {
	display: block;
	overflow: hidden;
}

/* Title
--------------------------------------------------------- */
.author-block-body .author-block-title {
	width: 100%;
	color: #$primary_color;
	display: block;
	overflow: hidden;
	position: relative;
	margin: -3px auto 0;
}
.author-block-body .author-block-title * { color: inherit; }
.author-block-body .author-block-title a:hover { color: #$secondary_color; }

/* Description
--------------------------------------------------------- */
.author-block-body .author-block-description {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 10px auto 0;
}

/* Social icons
--------------------------------------------------------- */
.author-block-body .author-block-social-icons {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 15px auto 0;
}




/* =============================================================================
28. Comments Block
============================================================================= */
/* 28.1 Disqus Comments
============================================================================= */
#disqus_thread { padding: 15px 0 30px; }



/* 28.2 Normal Comments
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.comments-block {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.comments-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 15px auto 0;
}


/* Comments List
----------------------------------------------------------------------------- */
ul.comments-block-list {
	width: 100%;
	display: block;
	list-style: none;
	padding: 0 0 15px;
	margin: 0 auto 45px;
	border-bottom: 1px solid #efefef;
}
ul.comments-block-list ul {
	border-bottom: 0;
	margin-bottom: 0;
	padding: 0 0 0 63px;
}


/* Comments item
----------------------------------------------------------------------------- */
ul.comments-block-list li.comments-block-item {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
}



/* Comment Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.comment-block {
	width: 100%;
	display: block;
	position: relative;
	padding: 20px 0 30px;
}
.comments-block-container > ul.comments-block-list > li.comments-block-item:first-child > .comment-block {
	padding-top: 0;
}


/* Container
----------------------------------------------------------------------------- */
.comment-block-container {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Comment Avatar
----------------------------------------------------------------------------- */
.comment-block-container .comment-block-avatar {
	width: 48px;
	float: left;
	overflow: hidden;
	margin-right: 20px;
	border-radius: 50%;
	position: relative;
}

.comment-block-container .comment-block-avatar a,
.comment-block-container .comment-block-avatar img {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 50%;
}


/* Comment Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.comment-block-container .comment-block-body { overflow: hidden; }

/* Comment Head
--------------------------------------------------------- */
/* Wrapper */
.comment-block-body .comment-block-head {
	width: 100%;
	display: block;
	font-size: 14px;
	font-weight: 500;
	overflow: hidden;
	line-height: 20px;
	position: relative;
	margin: -3px auto 10px;
}

.comment-block-head * {
	margin: 0;
	padding: 0;
	display: inline-block;
}
.comment-block-head *:not(a) { color: #212121; }

/* Rate Block
--------------------------------------------------------- */
.comment-block-body .rate-block { margin-bottom: 10px; }

/* Comment Decsription
--------------------------------------------------------- */
.comment-block-body .comment-block-description {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}

/* Comment Reply Button
--------------------------------------------------------- */
.comment-block-body .comment-block-reply-btn {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 20px auto 0;
}




/* =============================================================================
29. Forms
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.form-block,
.form-block form {
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}
.form-block form::after {
	content: '';
	clear: both;
	display: table;
}
form { position: relative; }


/* Container
----------------------------------------------------------------------------- */
.form-block-container {
	width: auto;
	display: block;
	margin: 0 -15px;
}


/* Title
----------------------------------------------------------------------------- */
.form-block-title {
	width: 100%;
	color: #$secondary_color;
	display: block;
	margin: 0 auto 10px;
}
.form-block-title *:not(.btn) { color: inherit; }


/* Button Spin
----------------------------------------------------------------------------- */
.form-block-container button::before {
	top: 11px;
	opacity: 0;
	right: 5px;
	width: 20px;
	font-size: 12px;
	content: '\\f021';
	line-height: 20px;
	position: absolute;
	font-family: 'FontAwesome';
}
.form-block-container button.add-spin::before {
	opacity: 1;

	-webkit-animation: fa-spin 2s infinite linear;
	animation: fa-spin 2s infinite linear;
}



/* 29.1 Header Search Form Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.header-search-form-block {
	top: 0;
	left: 0;
	right: 0;
	opacity: 0;
	z-index: 10;
	padding: 0 15px;
	max-width: 1170px;
	position: absolute;
	visibility: hidden;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

.header-search-form-block,
.header-search-form-block form,
.header-search-form-block .col-md-12,
.header-search-form-block .form-group,
.header-search-form-block .form-control,
.header-search-form-block .form-block-container {
	height: 100%;
}


/* Form Group
----------------------------------------------------------------------------- */
.header-search-form-block .form-group { margin-bottom: 0; }


/* Form Control
----------------------------------------------------------------------------- */
.header-search-form-block .form-control {
	border: 0;
	line-height: 1;
	font-size: 20px;
	padding: 0 25px 0 0;
	background-color: transparent;
}


/* Close Button
----------------------------------------------------------------------------- */
.header-search-form-block .form-close-btn {
	top: 50%;
	right: 0;
	padding: 0;
	z-index: 10;
	color: #212121;
	line-height: 1;
	font-size: 18px;
	font-weight: 700;
	position: absolute;
	font-family: sans-serif;

	-webkit-transform: translateY(-50%) rotate(-45deg);
	-ms-transform: translateY(-50%) rotate(-45deg);
	transform: translateY(-50%) rotate(-45deg);
}
.header-search-form-block .form-close-btn:hover { color: #$primary_color; }


/* Open Search Form
----------------------------------------------------------------------------- */
.open-header-search-form-block .navbar {
	opacity: 0;
	visibility: hidden;
}

.open-header-search-form-block .header-search-form-block {
	opacity: 1;
	visibility: visible;
}

.open-header-search-form-block .form-close-btn {
	-webkit-transform: translateY(-50%) rotate(0);
	-ms-transform: translateY(-50%) rotate(0);
	transform: translateY(-50%) rotate(0);
}



/* 29.2 Quantity Form Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.quantity-form-block {
	padding-top: 25px;
	margin-bottom: -30px;
}


/* Form Group
----------------------------------------------------------------------------- */
.quantity-form-block .form-group { margin-bottom: 0; }


/* Quantity
----------------------------------------------------------------------------- */
.quantity-form-block .quantity {
	float: left;
	position: relative;
	margin: 0 20px 30px 0;
}


/* Button
----------------------------------------------------------------------------- */
.quantity-form-block button { margin-bottom: 30px !important; }



/* 29.3 Shipping Calculator Form Block
============================================================================= */
.shipping-calculator-form-block .form-group { margin-bottom: 0; }
.shipping-calculator-form-block .shipping-calculator-form {
	display: none;
	padding-top: 15px;
}
.shipping-calculator-form-block a.shipping-calculator-btn:focus { color: #$primary_color; }



/* 29.4 Checkout Login Form Block
============================================================================= */
.checkout-login-form-block { display: none; }



/* 29.5 Checkout coupon Form Block
============================================================================= */
.checkout-coupon-form-block { display: none; }



/* 29.6 Checkout Form Block
============================================================================= */
.checkout-form-block .address-block-container { padding: 25px 25px 0; }
.checkout-form-block .address-block-body { margin-bottom: 0; }

.checkout-form-block .ship-to-different-address-form {
	width: 100%;
	display: block;
	position: relative;
}
.checkout-form-block .ship-to-different-address-form::after {
	content: '';
	clear: both;
	display: table;
}

.checkout-form-block textarea.form-control { height: 98px; }

.checkout-form-block input[type=\"radio\"] ~ label,
.checkout-form-block input[type=\"checkbox\"] ~ label {
	margin-bottom: 0;
}



/* 29.7 Subscribe Form Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.subscribe-form-block {
	font-size: 0;
	line-height: 0;
}


/* col-md-12
----------------------------------------------------------------------------- */
.subscribe-form-block .col-md-12 {
	float: none;
	display: inline-block;
	vertical-align: bottom;
}
.subscribe-form-block .col-md-12:first-child { width: 70%; }
.subscribe-form-block .col-md-12:nth-child(2) { width: 30%; }


/* Label
----------------------------------------------------------------------------- */
.subscribe-form-block label {
	font-size: 16px;
	line-height: 26px;
}


/* Button
----------------------------------------------------------------------------- */
.subscribe-form-block .col-md-12 button {
	width: 100%;
	padding-left: 0;
	padding-right: 0;
}


/* Text
----------------------------------------------------------------------------- */
.subscribe-form-block p {
	font-size: 14px;
	line-height: 23px;
}



/* 29.8 Account Form Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.account-form-block {
	max-width: 390px;
	margin: 30px auto;
	border-radius: 2px;
	padding: 30px 30px 10px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}


/* Form Group
----------------------------------------------------------------------------- */
.account-form-block .form-group { margin-bottom: 20px; }


/* Form Title
----------------------------------------------------------------------------- */
.account-form-block h4 { margin-bottom: 10px; }
.account-form-block .form-block-title { margin-bottom: 20px; }


/* Link
----------------------------------------------------------------------------- */
.account-form-block a.form-link {
	float: right;
	margin-bottom: 6px;
}


/* Button
----------------------------------------------------------------------------- */
.account-form-block .btn {
	width: 100%;
	margin-top: 10px;
}


/* Paragraph
----------------------------------------------------------------------------- */
.account-form-block p { margin-bottom: 5px; }



/* 29.9 Search Form Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.search-form-block { margin-bottom: 30px; }


/* Form Group
----------------------------------------------------------------------------- */
.search-form-block .form-group { margin-bottom: 20px; }


/* Form Title
----------------------------------------------------------------------------- */
.search-form-block .form-block-title { margin-bottom: 20px; }
.search-form-block .form-block-title h4 { margin-bottom: 0; }


/* Button
----------------------------------------------------------------------------- */
.search-form-block button { width: 100%; }



/* 29.10 Domain Form Block
============================================================================= */
.domain-form-block button { width: 100%; }



/* 29.11 Property Form Block
============================================================================= */
.property-form-block button { width: 100%; }
@media (min-width: 992px) {
	.property-form-block button { margin-top: 32px !important; }
}




/* =============================================================================
30. Sliders
============================================================================= */
/* 30.1 OWL Slider
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gfort-owl-slider {
	width: 100%;
	z-index: 10;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 30px;
}

.blog-item-media .gfort-owl-slider { margin-bottom: 0; }
.portfolio-item-media .gfort-owl-slider { margin-bottom: 0; }
.portfolio-item-media .owl-carousel.owl-hidden { opacity: 1; }


/* item
----------------------------------------------------------------------------- */
.gfort-owl-slider .gfort-owl-slider-item {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}
.gfort-owl-slider .gfort-owl-slider-item > a {
	width: 100%;
	display: block;
}
.gfort-owl-slider .gfort-owl-slider-item > * { margin-bottom: 0 !important; }


/* Pagination
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gfort-owl-slider.owl-theme .owl-dots {
	width: auto;
	margin: 0 -4px;
	line-height: 0;
	padding-top: 30px;
}
.owl-theme .owl-nav.disabled + .owl-dots { margin-top: 0; }

/* Dots
--------------------------------------------------------- */
.gfort-owl-slider.owl-theme .owl-dots .owl-dot span {
	opacity: 1;
	width: 10px;
	height: 10px;
	margin: 0 4px;
	background: transparent;
	border: 2px solid #666666;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

/* inside
--------------------------------------------------------- */
.gfort-owl-slider.owl-theme[data-slider-dots-position=inside] .owl-dots {
	left: 50%;
	padding: 0;
	bottom: 10px;
	position: absolute;

	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	transform: translateX(-50%);
}
.gfort-owl-slider.owl-theme[data-slider-dots-position=inside] .owl-dots .owl-dot span { border-color: #ffffff; }

/* Active / Hover
--------------------------------------------------------- */
.gfort-owl-slider.owl-theme .owl-dots .owl-dot:hover span,
.gfort-owl-slider.owl-theme .owl-dots .owl-dot.active span {
	opacity: 1;
	background: #666666;
}

.gfort-owl-slider.owl-theme[data-slider-dots-position=inside] .owl-dots .owl-dot:hover span,
.gfort-owl-slider.owl-theme[data-slider-dots-position=inside] .owl-dots .owl-dot.active span {
	background: #ffffff;
	border-color: #ffffff;
}


/* Navigation
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gfort-owl-slider.owl-theme .owl-nav {
	margin: 0 auto;
	line-height: 0;
}

/* Arrows
--------------------------------------------------------- */
/* Normal */
.gfort-owl-slider.owl-theme .owl-nav div {
	top: 50%;
	margin: 0;
	padding: 0;
	opacity: 1;
	width: 40px;
	height: 60px;
	font-size: 24px;
	line-height: 60px;
	position: absolute;
	background: rgba(0, 0, 0, 0.30);

	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

.gfort-owl-slider.owl-theme[data-slider-dots=true] .owl-nav div { margin-top: -20px; }
.gfort-owl-slider.owl-theme[data-slider-dots-position=inside] .owl-nav div { margin-top: 0; }

.gfort-owl-slider.owl-theme .owl-nav div.owl-prev {
	left: 0;
	margin-left: -40px;
	border-radius: 0 2px 2px 0;
}
.gfort-owl-slider.owl-theme .owl-nav div.owl-next {
	right: 0;
	margin-right: -40px;
	border-radius: 2px 0 0 2px;
}

/* Arrow */
[data-slider-arrows-type=\"arrow\"].gfort-owl-slider,
[data-slider-arrows-type=\"arrow\"] .gfort-owl-slider {
	overflow: visible;
}

[data-slider-arrows-type=\"arrow\"] .owl-nav div,
[data-slider-arrows-type=\"arrow\"].gfort-owl-slider.owl-theme .owl-nav div,
[data-slider-arrows-type=\"arrow\"] .gfort-owl-slider.owl-theme .owl-nav div {
	width: 24px;
	height: 32px;
	opacity: 0.70;
	color: #212121;
	font-size: 32px;
	border-radius: 0;
	line-height: 32px;
	background-color: transparent !important;
}

[data-slider-arrows-type=\"arrow\"] .owl-nav div.owl-prev,
[data-slider-arrows-type=\"arrow\"].gfort-owl-slider.owl-theme .owl-nav div.owl-prev,
[data-slider-arrows-type=\"arrow\"] .gfort-owl-slider.owl-theme .owl-nav div.owl-prev {
	margin-left: -48px !important;
}
[data-slider-arrows-type=\"arrow\"] .owl-nav div.owl-next,
[data-slider-arrows-type=\"arrow\"].gfort-owl-slider.owl-theme .owl-nav div.owl-next,
[data-slider-arrows-type=\"arrow\"] .gfort-owl-slider.owl-theme .owl-nav div.owl-next {
	margin-right: -48px !important;
}

/* Hover
--------------------------------------------------------- */
.gfort-owl-slider.owl-theme .gfort-owl-slider-item:hover { cursor: move; }
.gfort-owl-slider.owl-theme.owl-grab .gfort-owl-slider-item:hover {
	cursor: -webkit-grab;
	cursor: -moz-grab;
	cursor: grab;
}

.gfort-owl-slider.owl-theme:hover .owl-nav div.owl-prev { margin-left: 0; }
.gfort-owl-slider.owl-theme:hover .owl-nav div.owl-next { margin-right: 0; }

.gfort-owl-slider.owl-theme .owl-nav div:hover {
	opacity: 1;
	background: #000000;
}



/* 30.2 OWL Slider Thumbs
============================================================================= */
.gfort-owl-thumbs-slider { margin-top: 5px; }
.gfort-thumbs-owl-slider .mb-0 + .gfort-owl-thumbs-slider { margin-bottom: 0; }
.gfort-thumbs-owl-slider .gfort-owl-slider:first-child { margin-bottom: 0; }
.gfort-owl-thumbs-slider.gfort-owl-slider .gfort-owl-slider-item img {
	opacity: 0.50;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.gfort-owl-thumbs-slider.gfort-owl-slider .gfort-owl-slider-item a:hover img,
.gfort-owl-thumbs-slider.gfort-owl-slider .gfort-owl-slider-item a.gfort-owl-slider-active-item img {
	opacity: 1;
}



/* 30.3 Slider Revolution
============================================================================= */
.rs-heading-title {
	color: #$secondary_color;
	font-weight: 700;
	z-index: 10 !important;
	letter-spacing: -1.5px;
}
.light-color.rs-heading-title { color: #ffffff; }

.rs-subtitle {
	color: #666666;
	font-weight: 400;
	z-index: 10 !important;
}
.light-color.rs-subtitle { color: rgba(255, 255, 255, 0.90); }

.rs-btn,
.rs-image {
	z-index: 10 !important;
}

.tp-static-layers {
	width: 100%;
	height: 100%;
	overflow-y: hidden;
}



/* 30.4 Featured Blog Posts
============================================================================= */
.featured-blog-posts .blog-item-container .blog-item-body {
	left: 0;
	bottom: 0;
	border: 0;
	padding: 0;
	z-index: 10;
	width: 100%;
	position: absolute;
}

.featured-blog-posts .blog-item-meta,
.featured-blog-posts .blog-item-body .blog-item-read-btn,
.featured-blog-posts .blog-item-body .blog-item-description {
	display: none;
}

.featured-blog-posts .blog-item-body .blog-item-title { margin: 0; }
.featured-blog-posts .blog-item-title a {
	width: 100%;
	padding: 20px;
	display: block;
	color: #ffffff;
	background-color: rgba(0, 0, 0, 0.60);

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.featured-blog-posts .overlay-hover::after,
.featured-blog-posts .overlay-hover-2x::after,
.featured-blog-posts .overlay-hover::before,
.featured-blog-posts .overlay-hover-2x::before {
	display: none;
}

.featured-blog-posts .blog-item-container:hover .scale-hover img {
	-webkit-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
}
.featured-blog-posts .blog-item-container:hover .scale-hover-2x img {
	-webkit-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1);
}




/* =============================================================================
31. info Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.info-block {
	width: 100%;
	display: block;
	line-height: 0;
	padding: 2px 0;
	overflow: hidden;
	position: relative;
}


/* container
----------------------------------------------------------------------------- */
.info-block-container,
.info-block-container *:not(i) {
	margin: 0;
	padding: 0;
	font-size: 15px;
	font-weight: 500;
	line-height: 24px;
	display: inline-block;
}


/* icon
----------------------------------------------------------------------------- */
.info-block-container i,
.info-block-container a i {
	top: 0;
	color: #$primary_color;
	margin-right: 1px;
	vertical-align: middle;
}




/* =============================================================================
32. ADS Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.ads-block {
	width: 100%;
	display: block;
	margin: 0 auto;
}


/* Container
----------------------------------------------------------------------------- */
.ads-block-container {
	width: 100%;
	display: block;
	margin: 0 auto;
}


/* Link
----------------------------------------------------------------------------- */
.ads-block-container a,
.ads-block-container img {
	width: auto;
	max-width: 100%;
	display: inline-block;
}




/* =============================================================================
33. Social icons Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.social-icons-block {
	width: 100%;
	z-index: 15;
	font-size: 0;
	line-height: 0;
	display: block;
	position: relative;
}


/* List
----------------------------------------------------------------------------- */
.social-icons-block ul {
	padding: 0;
	width: auto;
	margin: -5px;
	list-style: none;
	display: inline-block;
}


/* items
----------------------------------------------------------------------------- */
.social-icons-block ul li {
	margin: 5px;
	border-radius: 50%;
	display: inline-block;
}


/* Link
----------------------------------------------------------------------------- */
.social-icons-block ul li a {
	width: 32px;
	height: 32px;
	font-size: 14px;
	overflow: hidden;
	line-height: 32px;
	text-align: center;
	border-radius: 50%;
	display: inline-block;
	vertical-align: middle;
}
.social-icons-block.icons-square ul li a { vertical-align: bottom; }

/* Second Link (Text) */
.social-icons-block ul li a:nth-child(2) {
	text-align: left;
	padding-left: 6px;
	letter-spacing: 0.30px;
	width: auto !important;
	height: auto !important;
	line-height: 1 !important;
	border-radius: 0 !important;
}
.social-icons-block.icons-lg ul li a:nth-child(2) { padding-left: 10px; }

.social-icons-block ul li a:nth-child(2) span {
	width: 100%;
	color: #666666;
	display: block;
	font-size: 12px;
	font-weight: 500;
	margin-bottom: 2px;
}
.social-icons-block.icons-lg ul li a:nth-child(2) span { margin-bottom: 5px; }
.social-icons-block ul li a:nth-child(2) span:last-child {
	color: #212121;
	font-size: 13px;
	font-weight: 700;
	margin-bottom: 0;
	text-transform: uppercase;
}


/* icon
----------------------------------------------------------------------------- */
.social-icons-block ul li a i {
	width: 100%;
	display: block;
	color: #666666;
	line-height: 32px;
	background-color: #f5f5f5;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}


/* Transparent Background
----------------------------------------------------------------------------- */
.social-icons-block.icons-transparent ul li a i { background-color: transparent; }


/* Square icons
----------------------------------------------------------------------------- */
.social-icons-block.icons-square ul li,
.social-icons-block.icons-square ul li a {
	border-radius: 2px;
}


/* Social icons Block With Text
----------------------------------------------------------------------------- */
.social-icons-block.icons-text ul { margin: -15px; }
.social-icons-block.icons-text ul li { margin: 15px; }


/* Hover
----------------------------------------------------------------------------- */
.social-icons-block ul li:hover a i {
	color: #ffffff;
	background-color: #$primary_color;
}
.social-icons-block ul li:hover a i:nth-last-child(2) { margin-top: -32px; }



/* Small
============================================================================= */
.social-icons-block.icons-sm ul li a {
	width: 28px;
	height: 28px;
	font-size: 12px;
	line-height: 28px;
}
.social-icons-block.icons-sm ul li a i { line-height: 28px; }
.social-icons-block.icons-sm ul li:hover a i:nth-last-child(2) { margin-top: -28px; }



/* Large
============================================================================= */
.social-icons-block.icons-lg ul li a {
	width: 48px;
	height: 48px;
	font-size: 18px;
	line-height: 48px;
}
.social-icons-block.icons-lg ul li a i { line-height: 48px; }
.social-icons-block.icons-lg ul li:hover a i:nth-last-child(2) { margin-top: -48px; }




/* =============================================================================
34. Social Feeds Blocks
============================================================================= */
/* 34.1 instagram Feed Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.instagram-feed-block {
	padding: 0;
	width: 100%;
	margin: 0 auto;
	display: block;
	color: #212121;
	min-height: 35px;
	position: relative;
	text-align: center;
}


/* Loader
----------------------------------------------------------------------------- */
.instagram-feed-block .insta-loading {
	top: 50%;
	left: 50%;
	z-index: 12;
	position: absolute;
	text-align: center;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}


/* Container
----------------------------------------------------------------------------- */
.instagram-feed-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
}


/* List
----------------------------------------------------------------------------- */
.instagram-feed-block-container ul {
	margin: 0;
	padding: 0;
	line-height: 0;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
.instagram-feed-block-container li {
	margin: 0;
	width: 10%;
	overflow: hidden;
	position: relative;
	display: inline-block;
}


/* Link
----------------------------------------------------------------------------- */
.instagram-feed-block-container a:not(.gfort-insta-username) {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* image
----------------------------------------------------------------------------- */
.instagram-feed-block-container a img {
	width: 100%;
	display: inline-block;
}


/* Title
----------------------------------------------------------------------------- */
.instagram-feed-block h6 {
	top: 50%;
	left: 50%;
	margin: 0;
	z-index: 12;
	color: inherit;
	text-align: center;
	padding: 15px 25px;
	position: absolute;
	display: inline-block;
	text-transform: uppercase;
	background-color: rgba(255, 255, 255, 0.90);

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

.instagram-feed-block h6 span {
	width: 100%;
	display: block;
	margin: 0 auto 5px;
}

.instagram-feed-block h6 a { color: inherit; }
.instagram-feed-block h6 a:hover { color: #$primary_color; }



/* 34.2 Twitter Feed Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.twitter-feed-block {
	padding: 0;
	width: auto;
	display: block;
	margin: 0 auto;
	position: relative;
}
.twitter-feed-block::after {
	content: '';
	clear: both;
	display: table;
}


/* Loader
----------------------------------------------------------------------------- */
.twitter-feed-block > span {
	width: auto;
	display: block;
	margin: 0 15px;
	padding: 5px 0;
	text-align: center;
}


/* List
----------------------------------------------------------------------------- */
.twitter-feed-block ul.gfort-twitter-list {
	margin: 0;
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
.twitter-feed-block ul.gfort-twitter-list li {
	padding: 0;
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.twitter-feed-block .gfort-twitter-item .gfort-twitter-item-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}
.twitter-feed-block li.gfort-twitter-item .gfort-twitter-item-container {
	margin: 0 0 30px;
	padding: 0 0 30px;
	border-bottom: 1px solid #efefef;
}
.twitter-feed-block li:last-child .gfort-twitter-item-container {
	border-bottom: 0;
	padding-bottom: 0;
}


/* Head
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.twitter-feed-block .twitter-head {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 5px;
}

/* Avatar
--------------------------------------------------------- */
.twitter-feed-block .twitter-head .twitter-avatar {
	padding: 0;
	width: 44px;
	float: left;
	overflow: hidden;
	position: relative;
	margin: 0 8px 10px 0;
	border: 2px solid #efefef;
}
.twitter-feed-block .twitter-head .twitter-avatar a,
.twitter-feed-block .twitter-head .twitter-avatar img {
	width: 100%;
	display: block;
}

/* user / screen Name
--------------------------------------------------------- */
/* Wrapper */
.twitter-feed-block .twitter-head .twitter-user-screen-name {
	overflow: hidden;
	padding: 3px 0 0;
	margin: 0 auto 10px;
}

/* span */
.twitter-feed-block .twitter-head .twitter-user-screen-name span {
	width: 100%;
	display: block;
	line-height: 0;
	margin: 8px auto 0;
}
.twitter-feed-block .twitter-head .twitter-user-screen-name span span {
	width: auto;
	line-height: 1;
	margin: 0 auto;
	display: inline-block;
}
.twitter-feed-block .twitter-head .twitter-user-screen-name span:first-child { margin-top: 0; }

/* Link */
.twitter-feed-block .twitter-head .twitter-user-screen-name span a {
	line-height: 16px;
	display: inline-block;
}
.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-username a { color: #212121; }
.twitter-feed-block .twitter-head .twitter-user-screen-name span.twitter-screen-name a {
	color: #8899a6;
	font-size: 13px;
	font-weight: 500;
}
.twitter-feed-block .twitter-head .twitter-user-screen-name span a:hover { color: #$primary_color; }

/* icon */
.twitter-feed-block .twitter-head .twitter-user-screen-name span a i {
	float: left;
	display: none;
	color: #55acee;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.twitter-feed-block .twitter-head .twitter-user-screen-name span a:hover i { color: #212121; }


/* Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.twitter-feed-block .twitter-body { overflow: hidden; }

/* Tweet
--------------------------------------------------------- */
.twitter-feed-block .twitter-tweet {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
}

/* Date / Buttons
--------------------------------------------------------- */
/* Wrapper */
.twitter-feed-block .twitter-date-btns {
	width: auto;
	display: block;
	margin: 0 -5px;
	font-size: 14px;
	overflow: hidden;
	font-weight: 500;
	padding: 15px 0 0 0;
}
.twitter-feed-block .twitter-date-btns a { color: #8899a6; }
.twitter-feed-block .twitter-date-btns a:hover { color: #55acee; }

/* Date */
.twitter-feed-block .twitter-date-btns .twitter-date {
	float: left;
	line-height: 0;
}
.twitter-feed-block .twitter-date-btns .twitter-date a {
	margin: 0 5px;
	line-height: 1;
	display: inline-block;
}

/* Buttons (Reply / Retweet / Favorite) */
.twitter-feed-block .twitter-date-btns .twitter-btns {
	float: right;
	line-height: 0;
}
.twitter-feed-block .twitter-date-btns .twitter-btns a {
	margin: 0 5px;
	line-height: 0;
	display: inline-block;
}



/* 34.2.1 Twitter Feed Block Side By Side
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.twitter-feed-block-sbs.twitter-feed-block { margin: 0 -15px; }
.twitter-feed-block-sbs.twitter-feed-block.twitter-slider { margin: 0 auto; }


/* items
----------------------------------------------------------------------------- */
.twitter-feed-block-sbs.twitter-feed-block ul.gfort-twitter-list li {
	float: left;
	padding: 0 15px;
	width: 33.33333333%;
	margin: 0 auto 30px;
}
.twitter-feed-block-sbs.twitter-feed-block ul.gfort-twitter-list li:nth-child(3n+1) { clear: left; }


/* Container
----------------------------------------------------------------------------- */
.twitter-feed-block-sbs.twitter-feed-block .gfort-twitter-item .gfort-twitter-item-container {
	padding: 25px;
	margin: 0 auto;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}



/* 34.2.2 Twitter Feed Block Style 1
============================================================================= */
/* item
----------------------------------------------------------------------------- */
.twitter-feed-block-style-1 .gfort-twitter-item {
	margin: 0 auto;
	max-width: 750px;
}


/* Head
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.twitter-feed-block-style-1 .twitter-head {
	width: auto;
	float: left;
	margin: 0 15px 0 0;
}

/* Avater
--------------------------------------------------------- */
.twitter-feed-block-style-1 .twitter-head .twitter-avatar { display: none; }

/* user / screen Name
--------------------------------------------------------- */
/* Wrapper */
.twitter-feed-block-style-1 .twitter-head .twitter-user-screen-name {
	padding-top: 0;
	margin-bottom: 0;
}

/* icon */
.twitter-feed-block-style-1 .twitter-head .twitter-user-screen-name span a i {
	display: block;
	font-size: 24px;
	margin-top: 2px;
}

/* Date Buttons / span */
.twitter-feed-block-style-1 .twitter-date-btns,
.twitter-feed-block-style-1 .twitter-head .twitter-user-screen-name span.twitter-screen-name,
.twitter-feed-block-style-1 .twitter-head .twitter-user-screen-name span.twitter-username span {
	display: none;
}




/* =============================================================================
35. Bootstrap Elements
============================================================================= */
/* 35.1 Badge
============================================================================= */
.badge { background-color: #$primary_color; }


/* 35.2 label
============================================================================= */
.label {
	font-size: 11px;
	line-height: 20px;
	padding: 3px 10px;
	border-radius: 2px;
	display: inline-block;
	letter-spacing: 0.30px;
	text-transform: uppercase;
}
.label-gfort { background-color: #$primary_color; }



/* 35.3 Tooltip
============================================================================= */
[data-toggle=\"tooltip\"] { display: inline-block; }
.tooltip-inner {
	font-size: 14px;
	font-weight: 500;
	line-height: 20px;
	padding: 8px 15px;
	border-radius: 2px;
}



/* 35.4 Label (Forms)
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
label,
.form-group label {
	font-weight: 500;
	margin-bottom: 6px;
}
.form-group label { cursor: pointer; }


/* Error
----------------------------------------------------------------------------- */
label.error,
.form-group label.error {
	left: 0;
	top: 100%;
	margin: 0;
	z-index: 1;
	width: 100%;
	color: #ff0000;
	line-height: 1;
	font-size: 13px;
	font-weight: 400;
	padding-top: 7px;
	position: absolute;
}


/* Radio / Checkbox Error
----------------------------------------------------------------------------- */
input[type=\"radio\"] + label.error,
input[type=\"checkbox\"] + label.error {
	padding-top: 5px;
}



/* 35.5 Form Group
============================================================================= */
.form-group {
	padding: 0;
	width: 100%;
	display: block;
	position: relative;
	margin: 0 auto 30px;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.form-group::after {
	content: '';
	clear: both;
	display: table;
}



/* 35.6 Form Control
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.form-control {
	z-index: 2;
	width: 100%;
	height: 42px;
	display: block;
	color: #666666;
	font-size: 15px;
	border-radius: 0;
	font-weight: 400;
	line-height: 20px;
	padding: 9px 12px;
	position: relative;
	outline: none !important;
	border: 2px solid #efefef;
	background-color: #ffffff;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;

	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
	background-color: transparent;
}


/* Focus
----------------------------------------------------------------------------- */
.form-control:focus {
	outline: none;
	border-color: #$primary_color;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;

	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}


/* autofill
----------------------------------------------------------------------------- */
input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
	background-color: #ffffff !important;

	-webkit-box-shadow: 0 0 0px 1000px white inset !important;
	-moz-box-shadow: 0 0 0px 1000px white inset !important;
	box-shadow: 0 0 0px 1000px white inset !important;
}


/* Error
----------------------------------------------------------------------------- */
.form-control.error { border-color: #ff0000 !important; }



/* 35.7 input (Type Number)
============================================================================= */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	-o-appearance: none;
	appearance: none;
}



/* 35.8 textarea
============================================================================= */
textarea.form-control {
	height: 170px;
	resize: vertical;
}



/* 35.9 Select
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
select.form-control {
	padding-right: 30px !important;
	background: url(http://templates.graphicfort.com/plume/images/misc/select-arrows.png) no-repeat right 14px top 11px #ffffff !important;
}


/* Main Select Box
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
select.gfort-chosen-select {
	margin: 0;
	border: 0;
	height: 0;
	opacity: 0;
	z-index: -1;
	visibility: hidden;
	border-color: transparent;
	display: block !important;
	padding: 0 32px 0 14px !important;
}

select.gfort-chosen-select + label.error,
select.gfort-chosen-select + .form-group label.error {
	left: 0;
	top: 100%;
}
select.gfort-chosen-select.error + label.error + .chosen-container .chosen-single,
.form-group select.gfort-chosen-select.error + label.error + .chosen-container .chosen-single {
	border-color: #ff0000;
}

/* Container
--------------------------------------------------------- */
.chosen-container {
	border: 0;
	padding: 0;
	z-index: 90;
	width: 100%;
	display: block;
	position: relative;
}

/* Main Link
--------------------------------------------------------- */
.chosen-container-single .chosen-single {
	height: 42px;
	color: #666666;
	font-weight: 400;
	border-radius: 0;
	line-height: 20px;
	padding: 9px 12px;
	background: transparent;
	border: 2px solid #efefef;
	background-color: transparent;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.chosen-container-active.chosen-with-drop .chosen-single {
	border-radius: 0;
	background-image: none;
	border: 2px solid #efefef;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.chosen-container-single .chosen-single:focus {
	outline: none;
	border-color: #$primary_color;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.chosen-container-single .chosen-single span { margin-right: 18px; }

/* Arrow
--------------------------------------------------------- */
.chosen-container-single .chosen-single div { right: 12px; }
.chosen-container-single .chosen-single div b { background-position: 9px 9px; }
.chosen-container-active.chosen-with-drop .chosen-single div b { background-position: -9px 8px; }

/* Drop Down Menu
--------------------------------------------------------- */
.chosen-container.chosen-with-drop .chosen-drop { margin-top: -2px; }
.chosen-container-single .chosen-drop {
	margin-top: 0;
	border-radius: 0;
}
.chosen-container .chosen-drop {
	border: 2px solid #efefef;
	background-color: #fbfbfb;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

/* Options
--------------------------------------------------------- */
.chosen-container .chosen-results {
	margin: 0;
	padding: 8px 0;
	color: #666666;
}
.chosen-container .chosen-results li {
	margin: 0;
	padding: 8px 12px;
	line-height: 20px;
}
.chosen-container .chosen-results li.highlighted {
	color: #ffffff;
	background-image: none;
	background-color: #$primary_color;
}

/* Search
--------------------------------------------------------- */
.chosen-container-single .chosen-search {
	padding: 18px 12px 0;
	margin-bottom: 18px;
}
.chosen-container-single .chosen-search::after {
	top: 18px;
	right: 21px;
	color: #666666;
	font-size: 12px;
	content: '\\f002';
	line-height: 35px;
	position: absolute;
	font-family: 'FontAwesome';
}
.chosen-container-single .chosen-search input[type=text] {
	margin: 0;
	font-size: 15px;
	background: none;
	font-family: inherit;
	border-color: #efefef;
	background-color: #ffffff;
	padding: 4px 30px 4px 12px;
}

/* optgroup
--------------------------------------------------------- */
.chosen-container .chosen-results li.group-result {
	margin-top: 9px;
	padding-top: 18px;
	border-top: 1px solid #efefef;
}



/* 35.10 Blockquote
============================================================================= */
blockquote {
	font-size: 18px;
	margin: 0 0 30px;
	line-height: 27px;
	position: relative;
	border: 2px solid #efefef;
	padding: 20px 25px 20px 60px;
}
blockquote::before {
	top: 25px;
	left: 25px;
	line-height: 1;
	content: '\\f10d';
	position: absolute;
	font-family: 'FontAwesome';
}
blockquote p { margin-bottom: 15px !important; }
blockquote p:last-child { margin-bottom: 0 !important; }



/* 35.11 Tabs
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gfort-tabs {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}

.tab-pane > *:last-child { margin-bottom: 0; }


/* Nav Tabs
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gfort-tabs .nav-tabs {
	width: auto;
	display: block;
	margin: 0 -12px;
	border-top: 1px solid #efefef;
	border-bottom: 1px solid #efefef;
}
.gfort-tabs-center .nav-tabs { text-align: center; }

/* List
--------------------------------------------------------- */
.gfort-tabs .nav-tabs > li {
	float: none;
	margin: 0 12px;
	display: inline-block;
}

/* Link
--------------------------------------------------------- */
.gfort-tabs .nav-tabs > li > a {
	border: 0;
	color: #666666;
	padding: 15px 0;
	margin-right: 0;
	border-radius: 0;
	line-height: 20px;
	position: relative;
}
.gfort-tabs .nav-tabs > li > a::after {
	width: 0;
	left: 50%;
	content: '';
	height: 2px;
	z-index: 10;
	bottom: -1px;
	position: absolute;
	background-color: #$primary_color;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

.gfort-tabs .nav > li > a:focus,
.gfort-tabs .nav > li > a:hover,
.gfort-tabs .nav-tabs > li.active > a,
.gfort-tabs .nav-tabs > li.active > a:focus,
.gfort-tabs .nav-tabs > li.active > a:hover {
	border: 0;
	color: #212121;
	background-color: transparent;
}
.gfort-tabs .nav > li > a:focus::after,
.gfort-tabs .nav > li > a:hover::after,
.gfort-tabs .nav-tabs > li.active > a::after,
.gfort-tabs .nav-tabs > li.active > a:focus::after,
.gfort-tabs .nav-tabs > li.active > a:hover::after {
	left: 0;
	width: 100%;
}


/* Tab Panes
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gfort-tabs .tab-content {
	width: 100%;
	display: block;
	padding: 30px 0 0;
}

/* Title
--------------------------------------------------------- */
.gfort-tabs .tab-content .shop-tab-title {
	color: #212121;
	font-size: 20px;
	font-weight: 400;
}
.gfort-tabs .tab-content .shop-tab-title span { color: #$primary_color; }


/* Bordered
----------------------------------------------------------------------------- */
/* Nav Tabs
--------------------------------------------------------- */
.gfort-tabs-bordered.gfort-tabs .nav-tabs {
	margin: 0 auto;
	padding: 0 13px;
	border: 1px solid #efefef;
	border-radius: 2px 2px 0 0;
}

/* Tab Panes
--------------------------------------------------------- */
.gfort-tabs-bordered.gfort-tabs .tab-content {
	padding: 25px;
	border: 1px solid #efefef;
	border-top-width: 0;
	border-radius: 0 0 2px 2px;
}


/* Vertical
----------------------------------------------------------------------------- */
/* Nav Tabs
--------------------------------------------------------- */
/* Wrapper */
.gfort-tabs-vertical.gfort-tabs .nav-tabs {
	border: 0;
	padding: 0;
	width: 20%;
	float: left;
	overflow: hidden;
	margin: 0 30px 0 0;
}

/* List */
.gfort-tabs-vertical.gfort-tabs .nav-tabs > li {
	width: 100%;
	margin: 0 auto;
	display: block;
}

/* Link */
.gfort-tabs-vertical.gfort-tabs .nav-tabs > li > a {
	overflow: hidden;
	border-radius: 2px;
	padding: 15px 20px;
	margin: 0 auto 10px;
	background-color: #f5f5f5;
}
.gfort-tabs-vertical.gfort-tabs .nav-tabs > li:last-child > a { margin-bottom: 0; }

.gfort-tabs-vertical.gfort-tabs .nav-tabs > li > a::after { display: none; }

.gfort-tabs-vertical.gfort-tabs .nav-tabs > li > a:hover {
	color: #ffffff;
	background-color: #$secondary_color;
}
.gfort-tabs-vertical.gfort-tabs .nav-tabs > li.active > a,
.gfort-tabs-vertical.gfort-tabs .nav-tabs > li.active > a:focus {
	color: #ffffff;
	background-color: #$primary_color;
}

/* Tab Panes
--------------------------------------------------------- */
.gfort-tabs-vertical.gfort-tabs .tab-content {
	width: auto;
	padding-top: 0;
	overflow: hidden;
}


/* Bordered / Vertical
----------------------------------------------------------------------------- */
.gfort-tabs-bordered.gfort-tabs-vertical.gfort-tabs .tab-content {
	padding: 25px;
	border-radius: 2px;
	border-top-width: 1px;
}



/* 35.12 Tables
============================================================================= */
/* Basic
----------------------------------------------------------------------------- */
.table,
.table-responsive > .table {
	border-radius: 2px;
	margin-bottom: 30px;
	border: 1px solid #efefef;
}

.table > tbody > tr > td,
.table > tbody > tr > th,
.table > tfoot > tr > td,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > thead > tr > th {
	vertical-align: middle;
}

.table > tbody > tr > td,
.table > tbody > tr > th,
.table > tfoot > tr > td,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > thead > tr > th {
	border-color: #efefef;
	border-right: 1px solid #efefef;
}
.table > tbody > tr > td:last-child,
.table > tbody > tr > th:last-child,
.table > tfoot > tr > td:last-child,
.table > tfoot > tr > th:last-child,
.table > thead > tr > td:last-child,
.table > thead > tr > th:last-child {
	border-right: 0;
}
.table-no-border-right.table > tbody > tr > td,
.table-no-border-right.table > tbody > tr > th,
.table-no-border-right.table > tfoot > tr > td,
.table-no-border-right.table > tfoot > tr > th,
.table-no-border-right.table > thead > tr > td,
.table-no-border-right.table > thead > tr > th {
	border-right: 0;
}

.table > tbody > tr > td,
.table > tbody > tr > th,
.table > tfoot > tr > td,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > thead > tr > th {
	padding: 15px;
	line-height: 26px;
}

th { font-weight: 500; }

td.order-action {
	font-size: 0;
	line-height: 0;
	text-align: right;
	padding-bottom: 0 !important;
}
td.order-action a.btn { margin-bottom: 15px; }


/* hover / Striped
----------------------------------------------------------------------------- */
.table-hover > tbody > tr:hover,
.table-striped > tbody > tr:nth-of-type(odd) {
	background-color: #f5f5f5;
}


/* Condensed
----------------------------------------------------------------------------- */
.table-condensed > tbody > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > thead > tr > th {
	padding: 8px 15px;
}


/* Responsive
----------------------------------------------------------------------------- */
.table-responsive { margin-bottom: 30px; }
.table-responsive > .table { margin-bottom: 0; }
@media screen and (max-width: 767px) { .table-responsive { border: 0; } }


/* Orders
----------------------------------------------------------------------------- */
.table-orders tfoot { border-top: 1px solid #efefef; }
.table-orders tfoot * { border: 0 !important; }
.table-orders tfoot th { width: 80%; }
.table-orders tfoot th,
.table-orders tfoot td {
	text-align: right;
	padding: 15px 15px 0 !important;
}
.table-orders tfoot tr:last-child th,
.table-orders tfoot tr:last-child td {
	padding-bottom: 15px !important;
}
.table-orders th:last-child,
.table-orders td:last-child {
	text-align: right;
}


/* Cart
----------------------------------------------------------------------------- */
.table-cart th:not(.product-name),
.table-cart td:not(.product-name) {
	text-align: center;
}

.table-cart th.actions,
.table-cart td.actions,
.table-cart th.product-purchase,
.table-cart td.product-purchase {
	text-align: right;
}

.table-cart .remove-btn {
	padding: 0;
	color: #ff0000;
	line-height: 1;
	font-size: 20px;
	font-weight: 700;
	position: relative;
	font-family: sans-serif;
}
.table-cart .remove-btn:hover { color: #212121; }

.table-cart td.product-thumbnail { min-width: 110px; }
.table-cart td.product-thumbnail a,
.table-cart td.product-thumbnail img {
	max-width: 100%;
	display: inline-block;
}
.table-cart td.product-thumbnail a { border-radius: 2px; }

.table-cart div.quantity {
	display: inline-block;
	vertical-align: middle;
}


/* Subtotal
----------------------------------------------------------------------------- */
.table-subtotal th,
.table-subtotal td {
	vertical-align: top !important;
}
.table-subtotal th { width: 35%; }

.table-subtotal .chosen-container .chosen-results { max-height: 140px; }


/* Row Actions
----------------------------------------------------------------------------- */
.row-actions {
	width: 100%;
	display: block;
	font-size: 14px;
	overflow: hidden;
	line-height: 24px;
	padding: 5px 0 0;
}
.row-actions a { color: #212121; }
.row-actions a:hover { color: #$primary_color; }


/* coupon
----------------------------------------------------------------------------- */
.coupon { float: left; }
.coupon input {
	float: left;
	width: auto;
	margin-right: 15px;
}




/* 35.13 Alerts
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.alert { margin-bottom: 30px; }

.alert-gfort {
	border: 0;
	color: #ffffff;
	overflow: hidden;
	font-weight: 500;
	background-color: #$primary_color;
	border-radius: 0 2px 2px 0;
	border-left: 10px solid rgba(0, 0, 0, 0.15);
}

.alert-shop a.btn { margin-right: 5px; }


/* Link
----------------------------------------------------------------------------- */
.alert a:not(.btn) {
	color: inherit;
	font-weight: 500;
}
.alert a:not(.btn):hover { opacity: 0.80; }


/* Types
----------------------------------------------------------------------------- */
.alert-gfort.alert-gfort-black {
	background-color: #212121;
	border-color: rgba(255, 255, 255, 0.15);
}
.alert-gfort.alert-gfort-black .close { color: #ffffff; }

.alert-gfort.alert-gfort-grey {
	color: #666666;
	background-color: #f5f5f5;
}

.alert-gfort.alert-success {
	color: #ffffff;
	border-color: #4cae4c;
	background-color: #5cb85c;
}

.alert-gfort.alert-info {
	color: #ffffff;
	border-color: #46b8da;
	background-color: #5bc0de;
}

.alert-gfort.alert-warning {
	color: #ffffff;
	border-color: #eea236;
	background-color: #f0ad4e;
}

.alert-gfort.alert-danger {
	color: #ffffff;
	border-color: #d43f3a;
	background-color: #d9534f;
}


/* Close Button
----------------------------------------------------------------------------- */
.alert button.close { font-family: sans-serif; }



/* 35.14 Mark
============================================================================= */
mark {
	color: #212121;
	font-size: 14px;
}



/* 35.15 hr Line
============================================================================= */
hr {
	margin-top: 30px;
	margin-bottom: 30px;
	border-top: 1px solid #efefef;
}



/* 35.16 Accordion
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gfort-accordion {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}


/* Panel Group
----------------------------------------------------------------------------- */
.gfort-accordion .panel-group { margin-bottom: 0; }


/* Panel
----------------------------------------------------------------------------- */
.gfort-accordion .panel {
	border: 0;
	margin: 0 auto;
	overflow: hidden;
	border-radius: 2px;
	background-color: #ffffff;

	-webkit-box-shadow: none;
	box-shadow: none;
}
.gfort-accordion .panel-group .panel + .panel { margin-top: 15px; }


/* Heading
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gfort-accordion .panel-heading {
	border: 0;
	padding: 0;
	color: #212121;
	overflow: hidden;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: transparent;
}

/* Title
--------------------------------------------------------- */
.gfort-accordion .panel-heading .panel-title { font-weight: 400; }


/* Link
--------------------------------------------------------- */
.gfort-accordion .panel-heading .panel-title a {
	width: 100%;
	display: block;
	padding: 15px 20px;
	position: relative;
}
.gfort-accordion .panel-heading .panel-title a.collapsed { color: #$secondary_color; }
.gfort-accordion .panel-heading .panel-title a,
.gfort-accordion .panel-heading .panel-title a:hover,
.gfort-accordion .panel-heading .panel-title a:focus {
	color: #$primary_color;
}

.gfort-accordion .panel-heading .panel-title a::before {
	float: left;
	font-size: 10px;
	content: '\\f068';
	margin-right: 8px;
	line-height: 20px;
	font-family: 'FontAwesome';
}
.gfort-accordion .panel-heading .panel-title a.collapsed::before { content: '\\f067'; }


/* Body
----------------------------------------------------------------------------- */
.gfort-accordion .panel-body {
	padding: 25px;
	border: 1px solid #efefef;
	border-top-width: 0;
	border-radius: 0 0 2px 2px;
}
.gfort-accordion .panel-heading + .panel-collapse > .panel-body {
	margin-top: -1px;
	border-top-width: 0;
}


/* Style 1
----------------------------------------------------------------------------- */
/* Panel
--------------------------------------------------------- */
.gfort-accordion-style-1.gfort-accordion .panel { background-color: transparent; }
.gfort-accordion-style-1.gfort-accordion .panel-group .panel + .panel {
	margin-top: 0;
	border-top: 1px solid #efefef;
}

/* Heading
--------------------------------------------------------- */
/* Wrapper */
.gfort-accordion-style-1.gfort-accordion .panel-heading {
	border: 0;
	background-color: transparent;
}

/* Link  */
.gfort-accordion-style-1.gfort-accordion .panel-heading .panel-title a { padding: 0 0 20px 0; }
.gfort-accordion-style-1.gfort-accordion .panel-group .panel + .panel .panel-heading .panel-title a {
	padding-top: 20px;
}
.gfort-accordion-style-1.gfort-accordion .panel-heading .panel-title a::before {
	width: 20px;
	height: 20px;
	color: #$primary_color;
	line-height: 18px;
	text-align: center;
	border-radius: 2px;
	margin-right: 10px;
	border: 1px solid #$primary_color;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

/* Body
--------------------------------------------------------- */
.gfort-accordion-style-1.gfort-accordion .panel-body {
	border: 0;
	padding: 25px;
	border-radius: 2px;
	background-color: #f5f5f5;
}
.gfort-accordion-style-1 .panel-heading + .panel-collapse > .panel-body { margin-top: 0; }



/* 35.17 Radio / Checkbox
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.radio,
.checkbox,
.radio-inline,
.checkbox-inline {
	margin-top: 0;
	padding-left: 0;
	margin-bottom: 10px;
}

.radio:last-child,
.checkbox:last-child {
	margin-bottom: 0;
}


/* Label
----------------------------------------------------------------------------- */
.radio label,
.checkbox label,
.radio-inline label,
.checkbox-inline label,
.form-group .radio label,
.form-group .checkbox label,
.form-group .radio-inline label,
.form-group .checkbox-inline label {
	min-height: 1px;
	cursor: pointer;
	padding-left: 0;
	font-weight: 400;
	margin-bottom: 0;
}


/* input
----------------------------------------------------------------------------- */
.radio input[type=radio],
.checkbox input[type=checkbox],
.radio-inline input[type=radio],
.checkbox-inline input[type=checkbox] {
	width: 0;
	height: 0;
	border: 0;
	margin: 0;
	padding: 0;
	opacity: 0;
	visibility: hidden;
}


/* unchecked
----------------------------------------------------------------------------- */
.gfort-radio,
.gfort-checkbox {
	padding: 0;
	width: 16px;
	height: 16px;
	color: #666666;
	font-size: 14px;
	cursor: pointer;
	line-height: 12px;
	text-align: center;
	margin: -1px 0 0 0;
	display: inline-block;
	vertical-align: middle;
	border: 2px solid #666666;
}
.gfort-radio { border-radius: 50%; }

.gfort-radio::before,
.gfort-checkbox::before {
	content: '';
	display: block;
	font-family: 'FontAwesome';
}


/* checked
----------------------------------------------------------------------------- */
input[type=\"radio\"]:checked + label.gfort-radio::before,
input[type=\"radio\"]:checked + label + label.gfort-radio::before {
	font-size: 8px;
	content: '\\f111';
}
input[type=\"checkbox\"]:checked + label.gfort-checkbox::before,
input[type=\"checkbox\"]:checked + label + label.gfort-checkbox::before {
	font-size: 10px;
	content: '\\f00c';
	line-height: 11px;
}



/* 35.18 Modal
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.modal { background-color: rgba(0, 0, 0, 0.50); }

@media (min-width: 768px) {

	.modal { text-align: center; }
	.modal-sm { width: 400px; }
	.modal:before {
		content: '';
		height: 100%;
		display: inline-block;
		vertical-align: middle;
	}

	.modal-dialog {
		margin: 20px;
		text-align: left;
		display: inline-block;
		vertical-align: middle;
	}

}


/* backDrop
----------------------------------------------------------------------------- */
.modal-backdrop {
	opacity: 0;
	z-index: -1040;
	visibility: hidden;
}


/* Content
----------------------------------------------------------------------------- */
.modal-content { border-radius: 2px; }


/* Header
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.modal-header { padding: 20px 25px; }

/* Title
--------------------------------------------------------- */
.modal-title {
	color: #212121;
	font-size: 18px;
}

/* Close Button
--------------------------------------------------------- */
.modal-header .close { margin-top: 3px; }


/* Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.modal-body {
	overflow: hidden;
	position: relative;
	padding: 30px 10px 0;
}

/* fitVid
--------------------------------------------------------- */
.modal-dialog .fluid-width-video-wrapper { line-height: 0; }

.modal-dialog .fluid-width-video-wrapper iframe,
.modal-dialog .fluid-width-video-wrapper object,
.modal-dialog .fluid-width-video-wrapper embed {
	height: 274px !important;
	position: relative !important;
}

.modal-lg .fluid-width-video-wrapper iframe,
.modal-lg .fluid-width-video-wrapper object,
.modal-lg .fluid-width-video-wrapper embed {
	height: 424px !important;
}

.modal-sm .fluid-width-video-wrapper iframe,
.modal-sm .fluid-width-video-wrapper object,
.modal-sm .fluid-width-video-wrapper embed {
	height: 174px !important;
}


/* Footer
----------------------------------------------------------------------------- */
.modal-footer { padding: 25px; }


/* Store for iframe SRC
----------------------------------------------------------------------------- */
.gfort-modal-input {
	opacity: 0;
	display: none;
	visibility: hidden;
}



/* 35.19 Panels
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gfort-panel {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.gfort-panel .panel {
	margin-bottom: 0;
	border-radius: 2px;
	background-color: #ffffff;
	border: 1px solid transparent;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}


/* Heading
----------------------------------------------------------------------------- */
.gfort-panel .panel-heading {
	padding: 12px 20px;
	border-top-left-radius: 2px;
	border-top-right-radius: 2px;
	border-bottom: 1px solid transparent;
}


/* Body
----------------------------------------------------------------------------- */
.gfort-panel .panel-body { padding: 23px; }


/* Footer
----------------------------------------------------------------------------- */
.gfort-panel .panel-footer {
	padding: 12px 20px;
	border-bottom-left-radius: 2px;
	border-bottom-right-radius: 2px;
	border-top: 1px solid transparent;
}


/* Default
----------------------------------------------------------------------------- */
.gfort-panel .panel-default { border-color: #efefef; }
.gfort-panel .panel-default > .panel-heading {
	color: #212121;
	border-color: #efefef;
	background-color: #f5f5f5;
}
.gfort-panel .panel-default > .panel-footer {
	color: #212121;
	border-color: #efefef;
	background-color: #f5f5f5;
}


/* Primary
----------------------------------------------------------------------------- */
.gfort-panel .panel-primary { border-color: #$primary_color; }
.gfort-panel .panel-primary > .panel-heading {
	color: #ffffff;
	border-color: #$primary_color;
	background-color: #$primary_color;
}
.gfort-panel .panel-primary > .panel-footer {
	color: #ffffff;
	border-color: #$primary_color;
	background-color: #$primary_color;
}


/* Success
----------------------------------------------------------------------------- */
.gfort-panel .panel-success { border-color: #5cb85c; }
.gfort-panel .panel-success > .panel-heading {
	color: #ffffff;
	border-color: #5cb85c;
	background-color: #5cb85c;
}
.gfort-panel .panel-success > .panel-footer {
	color: #ffffff;
	border-color: #5cb85c;
	background-color: #5cb85c;
}


/* Info
----------------------------------------------------------------------------- */
.gfort-panel .panel-info { border-color: #5bc0de; }
.gfort-panel .panel-info > .panel-heading {
	color: #ffffff;
	border-color: #5bc0de;
	background-color: #5bc0de;
}
.gfort-panel .panel-info > .panel-footer {
	color: #ffffff;
	border-color: #5bc0de;
	background-color: #5bc0de;
}


/* Warning
----------------------------------------------------------------------------- */
.gfort-panel .panel-warning { border-color: #f0ad4e; }
.gfort-panel .panel-warning > .panel-heading {
	color: #ffffff;
	border-color: #f0ad4e;
	background-color: #f0ad4e;
}
.gfort-panel .panel-warning > .panel-footer {
	color: #ffffff;
	border-color: #f0ad4e;
	background-color: #f0ad4e;
}


/* Danger
----------------------------------------------------------------------------- */
.gfort-panel .panel-danger { border-color: #d9534f; }
.gfort-panel .panel-danger > .panel-heading {
	color: #ffffff;
	border-color: #d9534f;
	background-color: #d9534f;
}
.gfort-panel .panel-danger > .panel-footer {
	color: #ffffff;
	border-color: #d9534f;
	background-color: #d9534f;
}




/* =============================================================================
36. Rate Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.rate-block {
	width: 100%;
	height: 14px;
	display: block;
	overflow: hidden;
	position: relative;
}
.testimonials-item-container .rate-block { margin-top: 5px; }


/* Stars
----------------------------------------------------------------------------- */
.rate-block::after {
	top: 0;
	left: 0;
	width: 100%;
	color: #ffc300;
	font-size: 14px;
	line-height: 14px;
	position: absolute;
	font-family: 'FontAwesome';
}
.rate-block.rate0_5::after { content: '\\f123 \\f006 \\f006 \\f006 \\f006'; }
.rate-block.rate1::after { content: '\\f005 \\f006 \\f006 \\f006 \\f006'; }
.rate-block.rate1_5::after { content: '\\f005 \\f123 \\f006 \\f006 \\f006'; }
.rate-block.rate2::after { content: '\\f005 \\f005 \\f006 \\f006 \\f006'; }
.rate-block.rate2_5::after { content: '\\f005 \\f005 \\f123 \\f006 \\f006'; }
.rate-block.rate3::after { content: '\\f005 \\f005 \\f005 \\f006 \\f006'; }
.rate-block.rate3_5::after { content: '\\f005 \\f005 \\f005 \\f123 \\f006'; }
.rate-block.rate4::after { content: '\\f005 \\f005 \\f005 \\f005 \\f006'; }
.rate-block.rate4_5::after { content: '\\f005 \\f005 \\f005 \\f005 \\f123'; }
.rate-block.rate5::after { content: '\\f005 \\f005 \\f005 \\f005 \\f005'; }


/* Product Rating
----------------------------------------------------------------------------- */
.product-rating {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 20px auto 0;
}

.product-rating .rate-block {
	float: left;
	width: 75px;
	height: 16px;
	margin-right: 10px;
}
.product-rating .rate-block::after {
	font-size: 16px;
	line-height: 16px;
}

.product-rating a {
	float: left;
	color: #212121;
	font-size: 14px;
	line-height: 16px;
	display: inline-block;
}
.product-rating a:hover { color: #$primary_color; }




/* =============================================================================
37. Quantity (input Number Counter)
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
div.quantity {
	padding: 0;
	width: 148px;
	display: block;
	overflow: hidden;
}


/* Buttons (Add, Substract)
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
div.quantity span.add,
div.quantity span.sub {
	z-index: 15;
	float: left;
	width: 44px;
	height: 42px;
	cursor: pointer;
	font-size: 12px;
	line-height: 38px;
	position: relative;
	text-align: center;
	border: 2px solid #efefef;
	background-color: #ffffff;
}

div.quantity span.add { border-left: 0; }
div.quantity span.sub { border-right: 0; }

/* icon
--------------------------------------------------------- */
div.quantity span.add i,
div.quantity span.sub i {
	line-height: 38px;
}


/* input
----------------------------------------------------------------------------- */
div.quantity input {
	float: left;
	width: 60px;
	font-weight: 500;
	text-align: center;
	background-color: #ffffff;
}




/* =============================================================================
38. Address Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.address-block {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.address-block-container {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	border-radius: 2px;
	padding: 25px 25px 15px;
	border: 1px solid #efefef;
}


/* Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.address-block-body {
	padding: 0;
	z-index: 5;
	width: auto;
	overflow: hidden;
	position: relative;
	margin: 0 auto 10px;
}


/* Title
--------------------------------------------------------- */
/* Wrapper */
.address-block-title {
	padding: 0;
	z-index: 6;
	width: auto;
	overflow: hidden;
	position: relative;
	margin: 0 auto 10px;
}
.address-block-title:last-child { margin-bottom: 0; }

/* Heading */
.address-block-title h4 {
	color: #212121;
	font-weight: 400;
	margin-bottom: 0;
}

/* Link */
.address-block-title a {
	margin-top: 5px;
	display: inline-block;
}

/* Label */
.address-block-title h4 label { margin-bottom: 0; }

/* Address
--------------------------------------------------------- */
.address-block-body address {
	margin-bottom: 0;
	line-height: 26px;
}




/* =============================================================================
39. Navigation Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
nav.navigation-block {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}


/* List
----------------------------------------------------------------------------- */
nav.navigation-block ul {
	padding: 0;
	width: auto;
	font-size: 0;
	margin: -10px;
	line-height: 0;
	list-style: none;
}


/* items
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
nav.navigation-block ul li {
	margin: 0;
	width: 20%;
	padding: 10px;
	font-size: 16px;
	line-height: 26px;
	text-align: center;
	display: inline-block;
}
nav.navigation-block.navigation-block-col-2 ul li { width: 50%; }
nav.navigation-block.navigation-block-col-3 ul li { width: 33.33333333%; }
nav.navigation-block.navigation-block-col-4 ul li { width: 25%; }
nav.navigation-block.navigation-block-col-5 ul li { width: 20%; }

/* Link
--------------------------------------------------------- */
/* Wrapper */
nav.navigation-block ul li a {
	width: 100%;
	color: #666666;
	display: block;
	font-size: 13px;
	font-weight: 700;
	line-height: 15px;
	border-radius: 2px;
	position: relative;
	padding: 30px 15px;
	letter-spacing: 0.30px;
	background-color: #f5f5f5;
	text-transform: uppercase;
}

/* icon */
nav.navigation-block ul li a i {
	width: 100%;
	display: block;
	font-size: 18px;
	margin: 0 0 10px;
	font-style: normal;
}

/* Hover */
nav.navigation-block ul li a:hover {
	color: #ffffff;
	background-color: #$secondary_color;
}

/* Active */
nav.navigation-block ul li.active a {
	color: #ffffff;
	background-color: #$primary_color;
}




/* =============================================================================
40. Elements
============================================================================= */
/* 40.1 gfort Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gfort-block {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.gfort-block-container {
	padding: 0;
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Head
----------------------------------------------------------------------------- */
.gfort-block-head {
	padding: 0;
	z-index: 6;
	width: auto;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}


/* Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gfort-block-body {
	padding: 0;
	z-index: 5;
	width: auto;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}

/* Title
--------------------------------------------------------- */
/* Wrapper */
.gfort-block-body .gfort-block-title {
	padding: 0;
	width: 100%;
	display: block;
	color: #$secondary_color;
	overflow: hidden;
	position: relative;
	margin: 0 auto 10px;
}
.gfort-block-body .gfort-block-title:last-child { margin-bottom: 0; }
.gfort-block-body .gfort-block-title * { color: inherit; }

/* Heading */
.gfort-block-body .gfort-block-title h4 {
	font-size: 16px;
	font-weight: 700;
	margin-bottom: 0;
}

/* Content
--------------------------------------------------------- */
/* Wrapper */
.gfort-block-body .gfort-block-content {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}

/* Button */
.gfort-block-body .gfort-block-btn {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 15px auto 0;
}

/* Link */
.gfort-block-body .gfort-block-link {
	padding: 0;
	width: 100%;
	display: block;
	line-height: 1;
	font-size: 14px;
	overflow: hidden;
	font-weight: 700;
	margin: 17px auto 0;
	text-transform: uppercase;
}
.gfort-block-body .gfort-block-link a { display: inline-block; }
.gfort-block-body .gfort-block-link i {
	height: 14px;
	line-height: 14px;
	vertical-align: top;
	display: inline-block;

	-webkit-transition: margin 0.30s ease-in-out;
	transition: margin 0.30s ease-in-out;
}
.gfort-block-body .gfort-block-link a:hover i { margin-left: 3px; }


/* 40.1.1 gfort Block (Text)
----------------------------------------------------------------------------- */
/* Body
--------------------------------------------------------- */
.text-block.gfort-block .gfort-block-body {
	width: 100%;
	display: block;
}

/* Style 1
--------------------------------------------------------- */
.text-block.gfort-block-style-1 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Style 2
--------------------------------------------------------- */
/* Title */
.text-block.gfort-block-style-2 .gfort-block-title {
	margin-bottom: 0;
	padding-left: 25px;
	margin-bottom: -3px;
	text-transform: uppercase;
}
.text-block.gfort-block-style-2 .gfort-block-title h4 {
	line-height: 1;
	font-size: 18px;
}

/* Content */
.text-block.gfort-block-style-2 .gfort-block-content {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}


/* 40.1.2 gfort Block (icon)
----------------------------------------------------------------------------- */
/* Head
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block .gfort-block-head {
	float: left;
	width: 64px;
	height: 64px;
	color: #666666;
	font-size: 22px;
	line-height: 64px;
	margin-right: 18px;
	text-align: center;
	border-radius: 50%;
	background-color: #f5f5f5;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.icon-block.gfort-block.text-right .gfort-block-head {
	float: right;
	margin-right: 0;
	margin-left: 18px;
}

.icon-block.icon-block-main.gfort-block .gfort-block-head {
	color: #ffffff;
	background-color: #$primary_color;
}
.icon-block.icon-block-alt.gfort-block .gfort-block-head {
	color: #ffffff;
	background-color: #$secondary_color;
}

/* icon */
.icon-block.gfort-block .gfort-block-head i {
	width: 100%;
	display: block;
	line-height: 64px;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

/* Hover
--------------------------------------------------------- */
.icon-block.gfort-block:hover .gfort-block-head i {
	color: #ffffff;
	background-color: #$primary_color;
}
.icon-block.icon-block-main:hover .gfort-block-head i { background-color: #$secondary_color; }
.icon-block.gfort-block:hover .gfort-block-head i:nth-last-child(2) { margin-top: -64px; }

/* Style 1
--------------------------------------------------------- */
/* Head */
.icon-block.gfort-block-style-1 .gfort-block-head {
	width: auto;
	height: auto;
	line-height: 1;
	min-width: 32px;
	font-size: 32px;
	border-radius: 0;
	text-align: right;
	background-color: transparent !important;
}
.icon-block.icon-block-main.gfort-block-style-1 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-1 .gfort-block-head { color: #$secondary_color; }

.icon-block.gfort-block-style-1 .gfort-block-head i { line-height: 1; }
.icon-block.gfort-block-style-1 .gfort-block-head i:nth-last-child(2) { display: none; }

/* Hover */
.icon-block.gfort-block-style-1:hover .gfort-block-head i,
.icon-block.icon-block-alt.gfort-block-style-1:hover .gfort-block-head i {
	color: #$primary_color;
	background-color: transparent;
}
.icon-block.icon-block-main.gfort-block-style-1:hover .gfort-block-head i { color: #$secondary_color; }

/* Style 2
--------------------------------------------------------- */
/* Head */
.icon-block.gfort-block-style-2 .gfort-block-head { display: none; }

/* Body */
.icon-block.gfort-block-style-2 .gfort-block-body {
	width: 100%;
	display: block;
}

.icon-block.gfort-block-style-2 .gfort-block-title i {
	color: #$primary_color;
	margin-right: 10px;
}
.icon-block.gfort-block-style-2.text-right .gfort-block-title i {
	float: right;
	margin-right: 0;
	margin-left: 10px;
}

/* Style 3
--------------------------------------------------------- */
/* Head */
.icon-block.gfort-block-style-3 .gfort-block-head {
	width: 100%;
	height: auto;
	line-height: 1;
	font-size: 32px;
	border-radius: 0;
	text-align: left;
	margin: 0 auto 20px;
	background-color: transparent !important;
}
.icon-block.gfort-block-style-3.text-right .gfort-block-head {
	text-align: right;
	margin: 0 auto 20px;
}
.icon-block.icon-block-main.gfort-block-style-3 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-3 .gfort-block-head { color: #$secondary_color; }

/* Body */
.icon-block.gfort-block-style-3 .gfort-block-body {
	width: 100%;
	display: block;
}
.icon-block.gfort-block-style-3 .gfort-block-head i { line-height: 1; }
.icon-block.gfort-block-style-3 .gfort-block-head i:nth-last-child(2) { display: none; }

/* Hover */
.icon-block.gfort-block-style-3:hover .gfort-block-head i,
.icon-block.icon-block-alt.gfort-block-style-3:hover .gfort-block-head i {
	color: #$primary_color;
	background-color: transparent;
}
.icon-block.icon-block-main.gfort-block-style-3:hover .gfort-block-head i { color: #$secondary_color; }

/* Style 4
--------------------------------------------------------- */
/* Head */
.icon-block.gfort-block-style-4 .gfort-block-head {
	border-width: 2px;
	border-radius: 50%;
	border-style: solid;
	border-color: inherit;
	background-color: transparent !important;
}
.icon-block.icon-block-main.gfort-block-style-4 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-4 .gfort-block-head { color: #$secondary_color; }

.icon-block.gfort-block-style-4 .gfort-block-head i {
	line-height: 60px;
	color: inherit !important;
	background-color: transparent !important;
}

/* Hover */
.icon-block.gfort-block-style-4:hover .gfort-block-head i:nth-last-child(2) { margin-top: -60px; }

/* Style 5
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block-style-5 { text-align: center; }

/* Head */
.icon-block.gfort-block-style-5 .gfort-block-head,
.icon-block.gfort-block-style-5.text-right .gfort-block-head {
	float: none;
	margin: 0 auto 25px;
}

/* Body */
.icon-block.gfort-block-style-5 .gfort-block-body { width: 100%; }

/* Style 6
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block-style-6 { text-align: center; }

/* Head */
.icon-block.gfort-block-style-6 .gfort-block-head,
.icon-block.gfort-block-style-6.text-right .gfort-block-head {
	float: none;
	width: auto;
	height: auto;
	line-height: 1;
	min-width: 32px;
	font-size: 32px;
	border-radius: 0;
	text-align: center;
	margin: 0 auto 20px;
	background-color: transparent !important;
}
.icon-block.icon-block-main.gfort-block-style-6 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-6 .gfort-block-head { color: #$secondary_color; }

.icon-block.gfort-block-style-6 .gfort-block-head i { line-height: 1; }
.icon-block.gfort-block-style-6 .gfort-block-head i:nth-last-child(2) { display: none; }

/* Body */
.icon-block.gfort-block-style-6 .gfort-block-body { width: 100%; }

/* Hover */
.icon-block.gfort-block-style-6:hover .gfort-block-head i,
.icon-block.icon-block-alt.gfort-block-style-6:hover .gfort-block-head i {
	color: #$primary_color;
	background-color: transparent;
}
.icon-block.icon-block-main.gfort-block-style-6:hover .gfort-block-head i { color: #$secondary_color; }

/* Style 7
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block-style-7 { text-align: center; }

/* Head */
.icon-block.gfort-block-style-7 .gfort-block-head,
.icon-block.gfort-block-style-7.text-right .gfort-block-head {
	float: none;
	border-width: 2px;
	border-radius: 50%;
	margin: 0 auto 25px;
	border-style: solid;
	border-color: inherit;
	background-color: transparent !important;
}
.icon-block.icon-block-main.gfort-block-style-7 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-7 .gfort-block-head { color: #$secondary_color; }

.icon-block.gfort-block-style-7 .gfort-block-head i {
	line-height: 60px;
	color: inherit !important;
	background-color: transparent !important;
}

/* Hover */
.icon-block.gfort-block-style-7:hover .gfort-block-head i:nth-last-child(2) { margin-top: -60px; }

/* Style 8
--------------------------------------------------------- */
/* Container */
.icon-block.gfort-block-style-8 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Head */
.icon-block.gfort-block-style-8 .gfort-block-head { display: none; }

/* Body */
.icon-block.gfort-block-style-8 .gfort-block-body {
	width: 100%;
	display: block;
}

.icon-block.gfort-block-style-8 .gfort-block-title i {
	color: #$primary_color;
	margin-right: 10px;
}
.icon-block.gfort-block-style-8.text-right .gfort-block-title i{
	float: right;
	margin-right: 0;
	margin-left: 10px;
}

/* Style 9
--------------------------------------------------------- */
/* Container */
.icon-block.gfort-block-style-9 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Head */
.icon-block.gfort-block-style-9 .gfort-block-head {
	width: 100%;
	height: auto;
	line-height: 1;
	font-size: 32px;
	border-radius: 0;
	text-align: left;
	margin: 0 auto 20px;
	background-color: transparent !important;
}
.icon-block.gfort-block-style-9.text-right .gfort-block-head {
	text-align: right;
	margin: 0 auto 20px;
}

.icon-block.icon-block-main.gfort-block-style-9 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-9 .gfort-block-head { color: #$secondary_color; }

/* Body */
.icon-block.gfort-block-style-9 .gfort-block-body {
	width: 100%;
	display: block;
}
.icon-block.gfort-block-style-9 .gfort-block-head i { line-height: 1; }
.icon-block.gfort-block-style-9 .gfort-block-head i:nth-last-child(2) { display: none; }

/* Hover */
.icon-block.gfort-block-style-9:hover .gfort-block-head i,
.icon-block.icon-block-alt.gfort-block-style-9:hover .gfort-block-head i {
	color: #$primary_color;
	background-color: transparent;
}
.icon-block.icon-block-main.gfort-block-style-9:hover .gfort-block-head i { color: #$secondary_color; }

/* Style 10
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block-style-10 { text-align: center; }

/* Container */
.icon-block.gfort-block-style-10 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Head */
.icon-block.gfort-block-style-10 .gfort-block-head,
.icon-block.gfort-block-style-10.text-right .gfort-block-head {
	float: none;
	margin: 0 auto 25px;
}

/* Body */
.icon-block.gfort-block-style-10 .gfort-block-body { width: 100%; }

/* Style 11
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block-style-11 { text-align: center; }

/* Container */
.icon-block.gfort-block-style-11 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Head */
.icon-block.gfort-block-style-11 .gfort-block-head,
.icon-block.gfort-block-style-11.text-right .gfort-block-head {
	float: none;
	width: auto;
	height: auto;
	line-height: 1;
	min-width: 32px;
	font-size: 32px;
	border-radius: 0;
	text-align: center;
	margin: 0 auto 20px;
	background-color: transparent !important;
}
.icon-block.icon-block-main.gfort-block-style-11 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-11 .gfort-block-head { color: #$secondary_color; }

.icon-block.gfort-block-style-11 .gfort-block-head i { line-height: 1; }
.icon-block.gfort-block-style-11 .gfort-block-head i:nth-last-child(2) { display: none; }

/* Body */
.icon-block.gfort-block-style-11 .gfort-block-body { width: 100%; }

/* Hover */
.icon-block.gfort-block-style-11:hover .gfort-block-head i,
.icon-block.icon-block-alt.gfort-block-style-11:hover .gfort-block-head i {
	color: #$primary_color;
	background-color: transparent;
}
.icon-block.icon-block-main.gfort-block-style-11:hover .gfort-block-head i { color: #$secondary_color; }

/* Style 12
--------------------------------------------------------- */
/* Wrapper */
.icon-block.gfort-block-style-12 { text-align: center; }

/* Container */
.icon-block.gfort-block-style-12 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Head */
.icon-block.gfort-block-style-12 .gfort-block-head,
.icon-block.gfort-block-style-12.text-right .gfort-block-head {
	float: none;
	border-width: 2px;
	border-radius: 50%;
	margin: 0 auto 25px;
	border-style: solid;
	background-color: transparent !important;
}
.icon-block.icon-block-main.gfort-block-style-12 .gfort-block-head { color: #$primary_color; }
.icon-block.icon-block-alt.gfort-block-style-12 .gfort-block-head { color: #$secondary_color; }

.icon-block.gfort-block-style-12 .gfort-block-head i {
	line-height: 60px;
	color: inherit !important;
	background-color: transparent !important;
}

/* Hover */
.icon-block.gfort-block-style-12:hover .gfort-block-head i:nth-last-child(2) { margin-top: -60px; }


/* 40.1.3 gfort Block (image)
----------------------------------------------------------------------------- */
/* Head
--------------------------------------------------------- */
.image-block.gfort-block .gfort-block-head {
	width: 100%;
	display: block;
	line-height: 0;
	text-align: center;
	border-radius: 2px;
	margin: 0 auto 25px;
}
.br-0.image-block.gfort-block .gfort-block-head,
.br-0.image-block.gfort-block .gfort-block-head a,
.br-0.image-block.gfort-block .gfort-block-head img {
	border-radius: 0;
}

/* Link / image
--------------------------------------------------------- */
.image-block.gfort-block .gfort-block-head a,
.image-block.gfort-block .gfort-block-head img {
	width: 100%;
	display: inline-block;
}

/* Style 1
--------------------------------------------------------- */
/* Head */
.image-block.gfort-block-style-1 .gfort-block-head {
	margin-bottom: -1px;
	border-radius: 2px 2px 0 0;
}

/* Body */
.image-block.gfort-block-style-1 .gfort-block-body {
	padding: 25px;
	border: 1px solid #efefef;
	background-color: #ffffff;
	border-radius: 0 0 2px 2px;
}

/* Style 2
--------------------------------------------------------- */
/* Head */
.image-block.gfort-block-style-2 .gfort-block-head {
	float: left;
	width: 64px;
	height: 64px;
	margin-right: 18px;
	border-radius: 50%;
}
.image-block.gfort-block-style-2.text-right .gfort-block-head {
	float: right;
	margin-right: 0;
	margin-left: 18px;
}

/* Link */
.image-block.gfort-block-style-2 .gfort-block-head a {
	width: 64px;
	height: 64px;
	overflow: hidden;
	border-radius: 50%;
}

/* Style 3
--------------------------------------------------------- */
/* Wrapper */
.image-block.gfort-block-style-3 { text-align: center; }

/* Head */
.image-block.gfort-block-style-3 .gfort-block-head {
	width: 80px;
	height: 80px;
	border-radius: 50%;
}
.image-block.gfort-block-style-3 .gfort-block-head a {
	width: 80px;
	height: 80px;
	overflow: hidden;
	border-radius: 50%;
}

/* Body */
.image-block.gfort-block-style-3 .gfort-block-body {
	width: 100%;
	display: block;
}

/* Style 4
--------------------------------------------------------- */
/* Wrapper */
.image-block.gfort-block-style-4 { text-align: center; }

/* Container */
.image-block.gfort-block-style-4 .gfort-block-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Head */
.image-block.gfort-block-style-4 .gfort-block-head {
	width: 80px;
	height: 80px;
	border-radius: 50%;
}
.image-block.gfort-block-style-4 .gfort-block-head a {
	width: 80px;
	height: 80px;
	overflow: hidden;
	border-radius: 50%;
}

/* Body */
.image-block.gfort-block-style-4 .gfort-block-body {
	width: 100%;
	display: block;
}

/* Style 5
--------------------------------------------------------- */
/* Head */
.image-block.gfort-block-style-5 .gfort-block-head { margin: 0 auto; }

/* Body */
.image-block.gfort-block-style-5 .gfort-block-body {
	left: 0;
	bottom: 0;
	z-index: 10;
	margin: 20px;
	border-radius: 2px;
	padding: 15px 20px;
	position: absolute;
	background-color: #ffffff;
}
.image-block.gfort-block-style-5 .gfort-block-body .gfort-block-title {
	margin: 0;
	color: #212121;
}
.image-block.gfort-block-style-5 .gfort-block-body .gfort-block-content { display: none; }

/* Body */
.image-block.gfort-block-style-5 .overlay-hover-2x::before { margin-top: -40px; }

/* Style 6
--------------------------------------------------------- */
/* Head */
.image-block.gfort-block-style-6 .gfort-block-head { margin: 0 auto; }

/* Body */
.image-block.gfort-block-style-6 .gfort-block-body { display: none; }


/* 40.1.4 gfort Block (Media)
----------------------------------------------------------------------------- */
.media-block.gfort-block .gfort-block-head {
	width: 100%;
	display: block;
	line-height: 0;
	text-align: center;
	border-radius: 2px;
	margin: 0 auto 25px;
}


/* 40.1.5 gfort Block (Multimedia)
----------------------------------------------------------------------------- */
/* Head
--------------------------------------------------------- */
.multimedia-block.gfort-block .gfort-block-head {
	width: 100%;
	display: block;
	border-radius: 2px;
}

/* Body
--------------------------------------------------------- */
.multimedia-block.gfort-block .gfort-block-body { display: none; }


/* 40.1.6 gfort Block (Process)
----------------------------------------------------------------------------- */
/* Head
--------------------------------------------------------- */
/* Wrapper */
.process-block.gfort-block .gfort-block-head {
	width: 100%;
	display: block;
	margin: 0 auto 15px;
}

/* Number */
.process-block.gfort-block .gfort-block-head .process-block-number {
	color: #$primary_color;
	line-height: 1;
	font-size: 48px;
}
.process-block.gfort-block .gfort-block-head .process-block-number a { display: inline-block; }

/* Body
--------------------------------------------------------- */
.process-block.gfort-block .gfort-block-body {
	width: 100%;
	display: block;
}

/* Style 1
--------------------------------------------------------- */
.process-block.gfort-block-style-1 { text-align: center; }

/* Style 2
--------------------------------------------------------- */
/* Wrapper */
.process-block.gfort-block-style-2 .gfort-block-head {
	width: auto;
	float: left;
	margin: 0 15px 0 0;
}

/* Body */
.process-block.gfort-block-style-2 .gfort-block-body { width: auto; }

/* Style 3
--------------------------------------------------------- */
.process-block.gfort-block-style-3 .gfort-block-head { display: none; }

/* Style 4
--------------------------------------------------------- */
/* Wrapper */
.process-block.gfort-block-style-4 { text-align: center; }

/* Head */
.process-block.gfort-block-style-4 .gfort-block-head {
	width: 96px;
	height: 96px;
	color: #666666;
	font-size: 32px;
	line-height: 96px;
	border-radius: 50%;
	margin: 0 auto 25px;
}

.process-block.gfort-block-style-4 .gfort-block-head i {
	width: 100%;
	display: block;
	line-height: 96px;
	background-color: #f5f5f5;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

.process-block.gfort-block-style-4 .gfort-block-head a {
	width: 100%;
	height: 96px;
	color: inherit;
	display: block;
	overflow: hidden;
	border-radius: 50%;
}

.process-block.gfort-block-style-4 .gfort-block-head:hover i {
	color: #ffffff;
	background-color: #212121;
}
.process-block.gfort-block-style-4 .gfort-block-head:hover i:nth-last-child(2) { margin-top: -96px; }

/* Style 5
--------------------------------------------------------- */
/* Wrapper */
.process-block.gfort-block-style-5 { text-align: center; }

/* Head */
.process-block.gfort-block-style-5 .gfort-block-head {
	width: 96px;
	height: 96px;
	color: #666666;
	font-size: 32px;
	line-height: 96px;
	border-radius: 50%;
	margin: 0 auto 25px;
}

.process-block.gfort-block-style-5 .gfort-block-head i {
	width: 100%;
	display: block;
	line-height: 96px;
	background-color: #f5f5f5;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

.process-block.gfort-block-style-5 .gfort-block-head a {
	width: 100%;
	height: 96px;
	color: inherit;
	display: block;
	overflow: hidden;
	border-radius: 50%;
}

.process-block.gfort-block-style-5 .gfort-block-head:hover i {
	color: #ffffff;
	background-color: #212121;
}
.process-block.gfort-block-style-5 .gfort-block-head:hover i:nth-last-child(2) { margin-top: -96px; }

/* Body */
.process-block.gfort-block-style-5 .gfort-block-body { position: static; }

.process-block.gfort-block-style-5 .gfort-block-body .process-block-number {
	top: 0;
	left: 50%;
	z-index: 11;
	width: 40px;
	height: 40px;
	color: #ffffff;
	font-size: 18px;
	line-height: 40px;
	text-align: center;
	position: absolute;
	border-radius: 50%;
	margin: 28px 0 0 -66px;
	background-color: #$primary_color;
}
.process-block.gfort-block-style-5 .gfort-block-body .process-block-number a {
	color: inherit;
	display: block;
	overflow: hidden;
	border-radius: 50%;
}

/* Style 6
--------------------------------------------------------- */
/* Wrapper */
.process-block.gfort-block-style-6 { text-align: center; }

/* Head */
.process-block.gfort-block-style-6 .gfort-block-head {
	width: 96px;
	height: 96px;
	color: #666666;
	font-size: 32px;
	line-height: 96px;
	border-radius: 50%;
	margin: 0 auto 20px;
}

.process-block.gfort-block-style-6 .gfort-block-head i {
	width: 100%;
	display: block;
	line-height: 96px;
	background-color: #f5f5f5;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}

.process-block.gfort-block-style-6 .gfort-block-head a {
	width: 100%;
	height: 96px;
	color: inherit;
	display: block;
	overflow: hidden;
	border-radius: 50%;
}

.process-block.gfort-block-style-6 .gfort-block-head:hover i {
	color: #ffffff;
	background-color: #212121;
}
.process-block.gfort-block-style-6 .gfort-block-head:hover i:nth-last-child(2) { margin-top: -96px; }

/* Body */
.process-block.gfort-block-style-6 .gfort-block-body { position: static; }

.process-block.gfort-block-style-6 .gfort-block-body .process-block-number {
	top: 0;
	left: 50%;
	z-index: 11;
	width: 40px;
	height: 40px;
	color: #ffffff;
	font-size: 18px;
	line-height: 40px;
	text-align: center;
	position: absolute;
	border-radius: 50%;
	margin: 28px 0 0 -66px;
	background-color: #$primary_color;
}
.process-block.gfort-block-style-6 .gfort-block-body .process-block-number a {
	color: inherit;
	display: block;
	overflow: hidden;
	border-radius: 50%;
}

.process-block.gfort-block-style-6 .gfort-block-body .gfort-block-title { margin-bottom: 0; }

.process-block.gfort-block-style-6 .gfort-block-body .gfort-block-content { display: none; }

/* Style 7
--------------------------------------------------------- */
.process-block.gfort-block-style-7 .gfort-block-head {
	line-height: 0;
	border-radius: 2px;
	margin-bottom: 25px;
}
.process-block.gfort-block-style-7 .gfort-block-head a,
.process-block.gfort-block-style-7 .gfort-block-head img {
	max-width: 100%;
	display: inline-block;
}


/* 40.1.7 gfort Block (Contact)
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.contact-block.gfort-block {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

/* Style 1
--------------------------------------------------------- */
.contact-block.gfort-block-style-1 {
	border-color: #212121;
	background-color: #212121;
	color: rgba(255, 255, 255, 0.90);
}
.contact-block.gfort-block-style-1 a { color: #ffffff; }
.contact-block.gfort-block-style-1 a:hover { color: rgba(255, 255, 255, 0.90); }

/* Style 2
--------------------------------------------------------- */
.contact-block.gfort-block-style-2 {
	color: #ffffff;
	border-color: #$primary_color;
	background-color: #$primary_color;
}
.contact-block.gfort-block-style-2 a { color: #ffffff; }
.contact-block.gfort-block-style-2 a:hover { color: rgba(255, 255, 255, 0.90); }



/* 40.2 Dashed List
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
ul.dashed {
	padding: 0;
	width: auto;
	font-size: 0;
	display: block;
	line-height: 0;
	display: block;
	overflow: hidden;
	list-style: none;
	margin: 0 -25px 15px;
}
.gfort-block ul.dashed { margin-bottom: 0; }
.gfort-block ul.dashed:last-child { margin-bottom: -15px; }


/* List
----------------------------------------------------------------------------- */
ul.dashed li {
	padding: 0 25px;
	font-size: 16px;
	margin: 0 0 15px;
	line-height: 26px;
	display: inline-block;
	border-right: 1px dashed #efefef;
}
ul.dashed li:last-child { border-right: 0; }

ul.dashed li strong {
	width: 100%;
	display: block;
}



/* 40.3 Dividers
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.hr-divider {
	width: 100%;
	font-size: 0;
	display: block;
	line-height: 0;
	direction: ltr;
	color: #$primary_color;
	overflow: hidden;
	margin: 30px auto;
	position: relative;
}

.text-right.hr-divider,
.text-right .hr-divider {
	direction: rtl;
}


/* Lines
----------------------------------------------------------------------------- */
.hr-divider::after,
.hr-divider::before {
	content: '';
	color: inherit;
	line-height: 1;
	font-size: 16px;
	display: inline-block;
	vertical-align: middle;
}


/* icon
----------------------------------------------------------------------------- */
.hr-divider i {
	color: inherit;
	line-height: 1;
	font-size: 16px;
	vertical-align: middle;
}


/* Style 1
----------------------------------------------------------------------------- */
.hr-divider-style-1::after {
	margin-left: -1px;
	letter-spacing: -5px;
	font-family: 'FontAwesome';
	content: '\\f078 \\f078 \\f078';
}

.text-center.hr-divider-style-1::after,
.text-center .hr-divider-style-1::after {
	margin-left: -5px;
}

.text-right.hr-divider-style-1::after,
.text-right .hr-divider-style-1::after {
	margin-left: 0;
	margin-right: 4px;
}


/* Style 2
----------------------------------------------------------------------------- */
.hr-divider-style-2::after {
	font-size: 8px;
	margin-left: 0;
	letter-spacing: 10px;
	font-family: 'FontAwesome';
	content: '\\f111 \\f111 \\f111';
}

.text-center.hr-divider-style-2::after,
.text-center .hr-divider-style-2::after {
	margin-left: 10px;
}

.text-right.hr-divider-style-2::after,
.text-right .hr-divider-style-2::after {
	margin-left: 0;
	margin-right: -10px;
}


/* Style 3
----------------------------------------------------------------------------- */
.hr-divider-style-3::after {
	width: 40px;
	overflow: hidden;
	border-color: inherit;
	border-top-width: 3px;
	border-top-style: solid;
}
.hr-divider-thin.hr-divider-style-3::after { border-top-width: 1px; }


/* Style 4
----------------------------------------------------------------------------- */
.hr-divider-style-4::after,
.hr-divider-style-4::before {
	margin: 0;
	width: 80px;
	display: block;
	border-color: inherit;
	border-top-width: 2px;
	border-top-style: solid;
}
.hr-divider-style-4::after { margin-top: 10px; }
.hr-divider-style-4::before { margin-bottom: 10px; }

.hr-divider-thin.hr-divider-style-4::after,
.hr-divider-thin.hr-divider-style-4::before {
	border-top-width: 1px;
}

.text-center.hr-divider-style-4::after,
.text-center.hr-divider-style-4::before,
.text-center .hr-divider-style-4::after,
.text-center .hr-divider-style-4::before {
	margin-left: auto;
	margin-right: auto;
}


/* Style 5
----------------------------------------------------------------------------- */
/* Text Left
--------------------------------------------------------- */
.hr-divider-style-5 i { margin: 0 16px 0 0; }

.hr-divider-style-5::after,
.hr-divider-style-5::before {
	width: 25%;
	border-color: inherit;
	border-top-width: 1px;
	border-top-style: solid;
}
.hr-divider-style-5::before { display: none; }

/* Text Center
--------------------------------------------------------- */
.text-center.hr-divider-style-5 i,
.text-center .hr-divider-style-5 i {
	margin: 0 16px;
}
.text-center.hr-divider-style-5::before,
.text-center .hr-divider-style-5::before {
	display: inline-block;
}

/* Text Right
--------------------------------------------------------- */
.text-right.hr-divider-style-5 i,
.text-right .hr-divider-style-5 i {
	margin: 0 0 0 16px;
}


/* Style 6
----------------------------------------------------------------------------- */
/* Text Left
--------------------------------------------------------- */
.hr-divider-style-6 i {
	width: 48px;
	height: 48px;
	font-size: 20px;
	line-height: 46px;
	border-width: 1px;
	text-align: center;
	border-radius: 50%;
	border-style: solid;
	border-color: inherit;
}

.hr-divider-style-6::after,
.hr-divider-style-6::before {
	width: 25%;
	border-color: inherit;
	border-top-width: 1px;
	border-top-style: solid;
}
.hr-divider-style-6::before { display: none; }

/* Text Center
--------------------------------------------------------- */
.text-center.hr-divider-style-6::before,
.text-center .hr-divider-style-6::before {
	display: inline-block;
}


/* Background Colors
----------------------------------------------------------------------------- */
.hr-divider-grey-color { color: #dddddd; }
.hr-divider-white-color { color: #ffffff; }
.hr-divider-black-color { color: #212121; }


/* Wide
----------------------------------------------------------------------------- */
.hr-divider-wide::after,
.hr-divider-wide::before {
	width: 100%;
}

.hr-divider-wide.hr-divider-style-1::before,
.hr-divider-wide.hr-divider-style-2::before,
.hr-divider-wide.hr-divider-style-3::before {
	width: 0;
}

.hr-divider-wide.hr-divider-style-1::after {
	margin-left: -1px;
	content: '\\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078 \\f078';
}

.hr-divider-wide.hr-divider-style-2::after {
	margin-left: 0;
	content: '\\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111 \\f111';
}

.hr-divider-wide.hr-divider-style-5::before,
.hr-divider-wide.hr-divider-style-6::before {
	margin-left: -100%;
}
.hr-divider-wide.hr-divider-style-5::after,
.hr-divider-wide.hr-divider-style-6::after {
	margin-right: -100%;
}

.text-right.hr-divider-wide.hr-divider-style-5::after,
.text-right .hr-divider-wide.hr-divider-style-5::after,
.text-right.hr-divider-wide.hr-divider-style-6::after,
.text-right .hr-divider-wide.hr-divider-style-6::after {
	margin-right: 0;
	margin-left: -100%;
}



/* 40.4 gap
============================================================================= */
.gap {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}
.gap-5 { height: 5px; }
.gap-10 { height: 10px; }
.gap-15 { height: 15px; }
.gap-20 { height: 20px; }
.gap-25 { height: 25px; }
.gap-30 { height: 30px; }
.gap-35 { height: 35px; }
.gap-40 { height: 40px; }
.gap-45 { height: 45px; }
.gap-50 { height: 50px; }
.gap-55 { height: 55px; }
.gap-60 { height: 60px; }
.gap-65 { height: 65px; }
.gap-70 { height: 70px; }
.gap-75 { height: 75px; }
.gap-80 { height: 80px; }
.gap-85 { height: 85px; }
.gap-90 { height: 90px; }
.gap-95 { height: 95px; }
.gap-100 { height: 100px; }



/* 40.5 Video
============================================================================= */
/* 40.5.1 Background
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.background-video-block {
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: -1;
	width: 100%;
	height: 100%;
	display: block;
	overflow: hidden;
	position: absolute;
}

/* Container
--------------------------------------------------------- */
.background-video-block-container { display: block; }

/* overlay
--------------------------------------------------------- */
.background-video-block-container > div.video-js::after,
.background-video-block-container > div[data-vimeo-video-url]::after,
.background-video-block-container > div[data-youtube-video-url]::after {
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 6;
	content: '';
	width: 100%;
	height: 100%;
	opacity: 0.30;
	position: absolute;
	background-color: #000000;
}

.background-video-without-overlay .background-video-block-container > div.video-js::after,
.background-video-without-overlay .background-video-block-container > div[data-vimeo-video-url]::after,
.background-video-without-overlay .background-video-block-container > div[data-youtube-video-url]::after {
	opacity: 0;
}

.gfort-overlay-bg {
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 5;
	content: '';
	width: 100%;
	height: 100%;
	position: absolute;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

/* Play Button on Mobile
--------------------------------------------------------- */
.background-video-block .gfort-desktop-play-button {
	top: 100%;
	left: 50%;
	border: 0;
	padding: 0;
	z-index: 10;
	width: 48px;
	height: 48px;
	color: #ffffff;
	line-height: 48px;
	margin-top: -78px;
	margin-left: -24px;
	border-radius: 50%;
	position: absolute;
	text-align: center;
	background-color: #$primary_color;
}
.background-video-block .gfort-desktop-play-button i {
	width: 100%;
	display: block;
	line-height: 48px;
	padding: 0 0 0 5px;
}

.background-video-block .gfort-mobile-play-button {
	left: 0;
	bottom: 0;
	border: 0;
	margin: 0;
	padding: 0;
	z-index: 10;
	width: 40px;
	height: 40px;
	color: #ffffff;
	font-size: 10px;
	font-weight: 400;
	line-height: 40px;
	position: absolute;
	text-align: center;
	outline: none !important;
	background-color: rgba(43, 51, 63, 0.7);

}
.background-video-block .gfort-mobile-play-button i {
	width: 100%;
	display: block;
	line-height: 40px;
	padding: 0 0 0 5px;
}

/* HTML5 Video
--------------------------------------------------------- */
/* Wrapper */
.background-video-block video,
.background-video-block .video-js .vjs-tech {
	position: absolute;
}

/* Video JS */
/*----------*/
/* Wrapper */
.video-js {
	width: 100%;
	height: auto;
}
.background-video-block .video-js { position: static; }
.fancybox-inner .video-js { height: 100%; }

/* Poster */
.vjs-poster {
	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center center;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.vjs-poster:focus { outline: none !important; }

/* Video Element */
.video-js .vjs-tech {
	height: auto;
	position: relative;
}
.fancybox-inner .video-js .vjs-tech { height: 100%; }

/* Play Button */
.video-js .vjs-big-play-button {
	top: 50%;
	left: 50%;
	border: 0;
	z-index: 10;
	width: 48px;
	height: 48px;
	line-height: 48px;
	margin-top: -24px;
	margin-left: -24px;
	border-radius: 50%;
	background-color: #$primary_color;
}
.background-video-block .video-js .vjs-big-play-button {
	top: 100%;
	margin-top: -78px;
}

.video-js:hover .vjs-big-play-button,
.video-js .vjs-big-play-button:focus {
	background-color: #$primary_color;
}

/* Main Control Bar */
.video-js .vjs-control-bar { z-index: 10; }
.background-video-block .video-js .vjs-control-bar { background-color: transparent; }

/* Control Play Button / Control Volume Button */
.background-video-block .video-js .vjs-play-control,
.background-video-block .video-js .vjs-mute-control,
.background-video-block .video-js .vjs-volume-menu-button {
	background-color: rgba(43, 51, 63, 0.7);
}

/* Control Remaining Time / Control Progress Bar / Control Fullscreen Button */
.background-video-block .video-js .vjs-time-control,
.background-video-block .video-js .vjs-progress-control,
.background-video-block .video-js .vjs-fullscreen-control {
	display: none;
}

/* Control Volume Progress Bar */
.background-video-block .video-js .vjs-control { width: 40px !important; }


/* Youtube Video
--------------------------------------------------------- */
/* Loading */
[data-youtube-video-url] .loading { display: none !important; }

/* Main Play Button */
.gfort-hide-btn,
[data-youtube-video-url][data-youtube-video-autoplay=\"true\"] .gfort-overlay-bg,
[data-youtube-video-url][data-youtube-video-autoplay=\"true\"] .gfort-desktop-play-button {
	display: none;
}


/* Control Buttons
--------------------------------------------------------- */
/* Wrapper */
.gfort-control-btns {
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	width: 100%;
	height: 40px;
	display: none;
	position: absolute;
	background-color: transparent;
}

/* Button */
.gfort-control-btns button {
	top: 0;
	border: 0;
	margin: 0;
	padding: 0;
	z-index: 10;
	width: 40px;
	float: left;
	height: 40px;
	display: none;
	color: #ffffff;
	font-size: 16px;
	font-weight: 400;
	line-height: 40px;
	position: absolute;
	text-align: center;
	outline: none !important;
	background-color: rgba(43, 51, 63, 0.7);

	-webkit-transition: all 0.10s ease-in-out;
	transition: all 0.10s ease-in-out;
}
.gfort-control-btns button.gfort-pause-control-btn,
.gfort-control-btns button.gfort-pause-control-btn {
	left: 0;
}
.gfort-control-btns button.gfort-mute-control-btn,
.gfort-control-btns button.gfort-unmute-control-btn {
	left: 40px;
}

.gfort-control-btns button:hover { text-shadow: 0 0 1em #ffffff; }

.gfort-control-btns button::after {
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	position: absolute;
	font-family: VideoJS;
}
.gfort-control-btns button.gfort-play-control-btn::after { content: '\\f101'; }
.gfort-control-btns button.gfort-pause-control-btn::after { content: '\\f103'; }
.gfort-control-btns button.gfort-mute-control-btn::after { content: '\\f107'; }
.gfort-control-btns button.gfort-unmute-control-btn::after { content: '\\f104'; }

.show-gfort-control-btns .gfort-control-btns,
div[data-youtube-video-url][data-youtube-video-autoplay=\"true\"] .gfort-control-btns {
	display: block;
}

.gfort-control-btns button.gfort-mute-control-btn,
.gfort-control-btns button.gfort-pause-control-btn,
[data-youtube-video-mute=\"true\"] button.gfort-unmute-control-btn,
.gfort-control-btns.gfort-pause-btn-pressed button.gfort-play-control-btn,
.gfort-control-btns.gfort-unmute-btn-pressed button.gfort-mute-control-btn,
.gfort-control-btns.gfort-mute-btn-pressed button.gfort-unmute-control-btn {
	display: block;
}

[data-youtube-video-mute=\"true\"] button.gfort-mute-control-btn,
.gfort-control-btns.gfort-mute-btn-pressed button.gfort-mute-control-btn,
.gfort-control-btns.gfort-pause-btn-pressed button.gfort-pause-control-btn,
.gfort-control-btns.gfort-unmute-btn-pressed button.gfort-unmute-control-btn {
	display: none;
}


/* 40.5.2 Normal
----------------------------------------------------------------------------- */
video {
	z-index: 5;
	width: 100%;
	position: relative;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top !important;

	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
}



/* 40.6 Audio
============================================================================= */
audio {
	z-index: 5;
	width: 100%;
	display: block;
	position: relative;
}



/* 40.7 Clients
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.clients-items-wrapper {
	padding: 0;
	width: auto;
	font-size: 0;
	line-height: 0;
	display: block;
	margin: 0 -15px;
	overflow: hidden;
}


/* Client item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.client-item {
	padding: 0;
	width: 100%;
	line-height: 0;
	display: block;
	overflow: hidden;
	text-align: center;
	margin: 0 auto 30px;
}

.clients-items-wrapper .client-item {
	width: auto;
	padding: 0 15px;
	display: inline-block;
}

.gfort-owl-slider .client-item { margin-bottom: 0; }

/* Link / image
--------------------------------------------------------- */
.client-item a,
.client-item img {
	max-width: 100%;
	font-size: 16px;
	line-height: 26px;
	display: inline-block;
}


/* 40.7.1 col 2
----------------------------------------------------------------------------- */
.clients-col-2 .client-item { width: 50%; }


/* 40.7.2 col 3
----------------------------------------------------------------------------- */
.clients-col-3 .client-item { width: 33.33333333%; }


/* 40.7.3 col 4
----------------------------------------------------------------------------- */
.clients-col-4 .client-item { width: 25%; }


/* 40.7.4 col 5
----------------------------------------------------------------------------- */
.clients-col-5 .client-item { width: 20%; }


/* 40.7.5 col 6
----------------------------------------------------------------------------- */
.clients-col-6 .client-item { width: 16.66666667%; }



/* 40.8 Counter Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.counter-block {
	width: 100%;
	display: block;
	text-align: center;
	margin: 0 auto 20px;
}


/* Digits
----------------------------------------------------------------------------- */
.counter-block:not(.counter-inline-block) span[data-to] {
	width: 100%;
	line-height: 1;
	font-size: 40px;
	font-weight: 700;
	margin-bottom: 10px;
}
.counter-block span[data-to] {
	color: #$primary_color;
	display: block;
}


/* Paragraph
----------------------------------------------------------------------------- */
.counter-block p {
	font-weight: 500;
	margin-bottom: 10px;
}


/* inline
----------------------------------------------------------------------------- */
.counter-inline-block {
	width: auto;
	margin-bottom: 0;
	display: inline-block;
}



/* 40.9 downTime Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.downtime-counter-block {
	padding: 0;
	width: auto;
	display: block;
	margin: 0 -15px;
	overflow: hidden;
}


/* Container
----------------------------------------------------------------------------- */
.downtime-counter-block-container {
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}


/* Title
----------------------------------------------------------------------------- */
.downtime-counter-block-container .downtime-title {
	width: 100%;
	color: #212121;
	display: block;
	padding: 0 15px;
	text-align: center;
}


/* COL
----------------------------------------------------------------------------- */
.downtime-counter-block-container .downtime-col {
	width: 25%;
	float: left;
	padding: 0 15px;
	text-align: center;
	margin: 0 auto 20px;
}
.downtime-col p,
.downtime-col span {
	width: 100%;
	display: block;
	line-height: 1;
	overflow: hidden;
	margin: 0 auto 10px;
}
.downtime-col span {
	color: #212121;
	font-size: 24px;
	font-weight: 700;
}
.downtime-counter-block:not(.downtime-counter-block-sm) .downtime-col span{ font-size: 56px; }

.downtime-100-col {
	width: 100%;
	display: block;
	padding: 0 15px;
	overflow: hidden;
	margin: 0 auto 10px;
	text-align: center;
}



/* 40.10 Progress Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.progress-block {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.progress-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Title
----------------------------------------------------------------------------- */
.progress-block-container h6 {
	float: left;
	width: auto;
	color: #212121;
	font-weight: 400;
	margin-bottom: 5px;
}


/* Counter
----------------------------------------------------------------------------- */
.progress-block-container .counter-block {
	width: auto;
	float: right;
	color: #212121;
	line-height: 20px;
	margin-bottom: 5px;
}
.progress-block-container .counter-block span[data-to] {
	width: auto;;
	color: inherit;
	font-size: 16px;
	font-weight: 400;
	margin-bottom: 0;
	margin-right: 2px;
	line-height: inherit;
	display: inline-block;
}


/* Progress Bar (Background)
----------------------------------------------------------------------------- */
.progress-block-container .progress {
	clear: both;
	width: 100%;
	height: 5px;
	display: block;
	border-radius: 0;
	margin-bottom: 0;
	overflow: visible;
	background-color: #f5f5f5;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}


/* Progress Bar (Line)
----------------------------------------------------------------------------- */
.progress-block-container .progress-bar {
	position: relative;
	background-color: #$primary_color;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;

	-webkit-transition: width 2s ease;
	transition: width 2s ease;
}



/* 40.11 PIE Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.pie-block {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	text-align: center;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.pie-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Circle
----------------------------------------------------------------------------- */
.pie-block-container .pie-block-circle { position: relative; }


/* Content
----------------------------------------------------------------------------- */
.pie-block-container .pie-block-content {
	left: 0;
	top: 50%;
	z-index: 10;
	width: 100%;
	line-height: 1;
	padding: 0 15px;
	font-size: 24px;
	position: absolute;

	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}
.pie-block-container .pie-block-content * {
	padding: 0;
	margin: 0 auto;
	color: inherit !important;
}


/* Counter Block
----------------------------------------------------------------------------- */
.pie-block-content .counter-block { margin-bottom: 0; }
.pie-block-content .counter-block span[data-to] {
	width: auto;
	color: inherit;
	margin-bottom: 0;
	margin-right: 2px;
	display: inline-block;
}


/* image
----------------------------------------------------------------------------- */
.pie-block-content img {
	max-width: 50%;
	display: block;
	margin: 0 auto;
}


/* Title
----------------------------------------------------------------------------- */
.pie-block-container h4 {
	color: #212121;
	margin-top: 10px;
}



/* 40.12 Skill Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.skill-block {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	text-align: center;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.skill-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* image
----------------------------------------------------------------------------- */
.skill-block-container img {
	display: block;
	margin: 0 auto;
	max-width: 75%;
}


/* Title
----------------------------------------------------------------------------- */
.skill-block-container h4 {
	color: #212121;
	margin-top: 15px;
}



/* 40.14 Google Maps Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.google-map-block {
	padding: 0;
	width: 100%;
	height: 550px;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
	background-color: #ffffff;
}


/* Container
----------------------------------------------------------------------------- */
.google-map-block .gfort-google-map {
	padding: 0;
	width: 100%;
	margin: 0 auto;
	display: block;
	height: inherit;
	overflow: hidden;
}


/* Marker
----------------------------------------------------------------------------- */
.google-map-block .google-map-marker {
	width: 0;
	height: 0;
	display: none;
	overflow: hidden;
	position: relative;
}


/* info Window
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.infoWindow-block {
	width: 280px;
	padding-top: 12px;
}

/* Arrow
--------------------------------------------------------- */
.infoWindow-block::after {
	left: 50%;
	z-index: 1;
	content: '';
	width: 20px;
	height: 20px;
	bottom: 50px;
	margin-left: -10px;
	position: absolute;
	background-color: #ffffff;

	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
}

/* Close Button
--------------------------------------------------------- */
.infoWindow-block > img {
	top: 0;
	z-index: 15;
	width: 24px;
	right: -12px;
	height: 24px;
	padding: 6px;
	border-radius: 50%;
	background-color: #$primary_color;
	position: absolute !important;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.infoWindow-block > img:hover {
	background-color: #000000;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

/* Container
--------------------------------------------------------- */
.infoWindow-block-container {
	width: 100%;
	display: block;
	font-size: 16px;
	overflow: hidden;
	line-height: 24px;
	position: relative;
	border-radius: 2px;
	margin: 0 auto 60px;
	padding: 15px 20px 10px;
	background-color: #ffffff;
}

/* Content
--------------------------------------------------------- */
.infoWindow-block-container > * { margin: 0 auto 5px !important; }
.infoWindow-block-container h4 { color: #212121; }
.infoWindow-block-container img {
	border-radius: 2px 2px 0 0;
	max-width: 280px !important;
	margin: -15px -20px 15px !important;
}


/* Google Map Collapsed
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.google-map-block-collapsed {
	height: 100px;
	position: relative;
	background-color: #$primary_color;

	background-repeat: no-repeat;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;

	-webkit-transition: height 0.30s ease-in-out;
	transition: height 0.30s ease-in-out;
}

/* Container
--------------------------------------------------------- */
.google-map-block-collapsed .gfort-google-map { opacity: 0; }

/* open Google Map Button
--------------------------------------------------------- */
.google-map-block-collapsed .open-google-map-btn {
	top: 0;
	left: 0;
	z-index: 10;
	width: 100%;
	height: 100%;
	display: block;
	color: #ffffff;
	font-size: 48px;
	overflow: hidden;
	line-height: 100px;
	text-align: center;
	position: absolute;
}
.google-map-block-collapsed .open-google-map-btn i {
	top: 0;
	display: block;
	line-height: 100px;
}
.google-map-block-collapsed .open-google-map-btn:hover { background-color: rgba(255, 255, 255, 0.10); }

/* close Google Map Button
--------------------------------------------------------- */
.google-map-block-collapsed .close-google-map-btn {
	top: 10px;
	left: 114px;
	z-index: 10;
	width: 30px;
	height: 30px;
	display: none;
	color: #ffffff;
	font-size: 18px;
	font-weight: 700;
	overflow: hidden;
	line-height: 26px;
	border-radius: 2px;
	text-align: center;
	position: absolute;
	font-family: sans-serif;
	background-color: #$primary_color;

	-webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px;
	-moz-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px;
	box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px;
}
.google-map-block-collapsed .close-google-map-btn:hover { background-color: #000000; }

/* uncollapsed Google Map
--------------------------------------------------------- */
.google-map-block-collapsed .gfort-google-map { height: 550px; }
.google-map-block-collapsed.uncollapsed { height: 550px; }
.google-map-block-collapsed.uncollapsed .open-google-map-btn { display: none; }
.google-map-block-collapsed.uncollapsed .close-google-map-btn { display: block; }
.google-map-block-collapsed.uncollapsed .gfort-google-map { opacity: 1; }



/* 40.15 Pricing Tables Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.pricing-table-block {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.pricing-table-block-container {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	text-align: center;
	position: relative;
	border-radius: 2px;
	padding: 60px 20px 25px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}


/* Head
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.pricing-table-block-container .pricing-table-block-head {
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}

/* Title
--------------------------------------------------------- */
/* Wrapper */
.pricing-table-block-head .pricing-table-block-title {
	width: 100%;
	display: block;
	margin: 0 auto 35px;
}

/* Content */
.pricing-table-block-head .pricing-table-block-title * {
	width: 100%;
	display: block;
	margin: 0 auto;
}
.pricing-table-block-head .pricing-table-block-title h3 { color: #212121; }
.pricing-table-block-head .pricing-table-block-title p {
	margin-top: 5px;
	font-weight: 500;
	line-height: 24px;
}

/* Price
--------------------------------------------------------- */
/* Wrapper */
.pricing-table-block-head .pricing-table-block-price {
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	padding: 0 20px 35px;
}

/* Price */
.pricing-table-block-head .pricing-table-block-price h2 {
	font-size: 0;
	color: #$secondary_color;
	margin: 0 auto 10px;
}
.pricing-table-block-head .pricing-table-block-price h2 span {
	margin: 0 2px;
	line-height: 0.80;
	position: relative;
	vertical-align: top;
	display: inline-block;
}
.pricing-table-block-head .pricing-table-block-price h2 span.price-currency {
	font-size: 32px;
	font-weight: 400;
}
.pricing-table-block-head .pricing-table-block-price h2 span.price-integer-no { font-size: 70px; }
.pricing-table-block-head .pricing-table-block-price h2 span.price-decimal-no {
	font-size: 32px;
	font-weight: 400;
}

/* Duration */
.pricing-table-block-head .price-duration { font-weight: 500; }


/* Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.pricing-table-block-container .pricing-table-block-body {
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	padding: 35px 0 0;
	position: relative;
}


/* Line */
.pricing-table-block-container .pricing-table-block-body::before {
	top: 0;
	left: 10%;
	width: 80%;
	content: '';
	height: 1px;
	position: absolute;
	background-color: #efefef;
}

/* Features
--------------------------------------------------------- */
/* List */
.pricing-table-block-body ul {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	list-style: none;
	margin: 0 auto 30px;
}

/* items */
.pricing-table-block-body ul li {
	width: 100%;
	display: block;
	margin: 0 auto 5px;
}

/* Paragraph */
.pricing-table-block-body > p {
	width: 100%;
	display: block;
	padding: 0 10px;
	overflow: hidden;
	text-align: left;
}
.pricing-table-block-body > p:last-child { margin-bottom: 30px; }


/* Purchase Button
----------------------------------------------------------------------------- */
.pricing-table-block-container .pricing-table-block-btn {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 35px;
}


/* Featured Pricing Table
----------------------------------------------------------------------------- */
.featured-pricing-table-block::after {
	top: 0;
	width: 0;
	height: 0;
	z-index: 10;
	content: '';
	right: 20px;
	color: #ffffff;
	padding: 10px 0;
	line-height: 10px;
	position: absolute;
	border: 20px solid #$primary_color;
	border-bottom-color: transparent !important;
}
.featured-pricing-table-block::before {
	top: 0;
	right: 20px;
	z-index: 11;
	width: 40px;
	height: 45px;
	color: #ffffff;
	font-size: 20px;
	content: '\\f005';
	line-height: 45px;
	position: absolute;
	text-align: center;
	font-family: 'FontAwesome';
}


/* Style 1
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
.pricing-table-block-style-1 .pricing-table-block-container {
	border: 0;
	padding: 0 0 21px;
	background-color: transparent;

	display: -webkit-flex;
	display: -ms-flex;
	display: flex;
}

/* Head
--------------------------------------------------------- */
/* Wrapper */
.pricing-table-block-style-1 .pricing-table-block-head {
	width: 25%;
	float: left;
	padding: 30px 20px 5px;
	background-color: #$primary_color;
	border-radius: 2px 0 0 2px;
}
.pricing-table-block-style-1 .pricing-table-block-head *,
.pricing-table-block-style-1 .pricing-table-block-head .pricing-table-block-title * {
	color: #ffffff;
}

/* Title */
.pricing-table-block-style-1 .pricing-table-block-title { margin: 0 auto 25px; }

/* Price */
.pricing-table-block-style-1 .pricing-table-block-price {
	padding: 0;
	margin: 0 auto 25px;
}

/* Body
--------------------------------------------------------- */
/* Wrapper */
.pricing-table-block-style-1 .pricing-table-block-body {
	width: 75%;
	text-align: left;
	border: 1px solid #efefef;
	background-color: #ffffff;
	border-radius: 0 2px 2px 0;
	padding: 25px 60px 20px 10px;

	-webkit-flex: 1;
	-ms-flex: 1;
	flex: 1;
}
/* Line */
.pricing-table-block-style-1 .pricing-table-block-body::before { display: none; }

/* Features */
.pricing-table-block-style-1 .pricing-table-block-body ul { margin: 0 auto; }
.pricing-table-block-style-1 .pricing-table-block-body ul li {
	width: 50%;
	float: left;
	padding: 0 15px;
}

/* Purchase Button
--------------------------------------------------------- */
.pricing-table-block-style-1 .pricing-table-block-btn {
	right: 0;
	bottom: 0;
	margin: 0 auto;
	text-align: right;
	position: absolute;
	padding: 0 25px 0 0;
}



/* 40.16 call to Action Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.cta-block {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.cta-block-container {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	text-align: center;
	padding: 25px 20px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}
.fullwidth-section .cta-block-container {
	border: 0;
	border-radius: 0;
}


/* Body
----------------------------------------------------------------------------- */
.cta-block-container .cta-block-body {
	padding: 0;
	color: #212121;
	font-size: 20px;
	overflow: hidden;
	margin: 10px 5px;
	line-height: 32px;
	position: relative;
	display: inline-block;
	vertical-align: middle;
}


/* Button
----------------------------------------------------------------------------- */
.cta-block-container .cta-block-btn {
	padding: 0;
	margin: 10px 5px;
	overflow: hidden;
	position: relative;
	display: inline-block;
	vertical-align: middle;
}


/* Grey
----------------------------------------------------------------------------- */
.cta-block-grey .cta-block-container { background-color: #f5f5f5; }


/* Black
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
.cta-block-black .cta-block-container {
	border-color: #212121;
	background-color: #212121;
}

/* Body
--------------------------------------------------------- */
.cta-block-black .cta-block-body { color: rgba(255, 255, 255, 0.90); }
.cta-block-black .cta-block-body a,
.cta-block-black .cta-block-body h1,
.cta-block-black .cta-block-body h2,
.cta-block-black .cta-block-body h3,
.cta-block-black .cta-block-body h4,
.cta-block-black .cta-block-body h5,
.cta-block-black .cta-block-body h6,
.cta-block-black .cta-block-body .h1,
.cta-block-black .cta-block-body .h2,
.cta-block-black .cta-block-body .h3,
.cta-block-black .cta-block-body .h4,
.cta-block-black .cta-block-body .h5,
.cta-block-black .cta-block-body .h6 {
	color: #ffffff;
}
.cta-block-black .cta-block-body a:not(.btn) { color: #ffffff; }
.cta-block-black .cta-block-body a:not(.btn):hover { color: rgba(255, 255, 255, 0.90); }


/* Main
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
.cta-block-main .cta-block-container {
	border-color: #$primary_color;
	background-color: #$primary_color;
}

/* Body
--------------------------------------------------------- */
.cta-block-main .cta-block-body { color: rgba(255, 255, 255, 0.90); }
.cta-block-main .cta-block-body a,
.cta-block-main .cta-block-body h1,
.cta-block-main .cta-block-body h2,
.cta-block-main .cta-block-body h3,
.cta-block-main .cta-block-body h4,
.cta-block-main .cta-block-body h5,
.cta-block-main .cta-block-body h6,
.cta-block-main .cta-block-body .h1,
.cta-block-main .cta-block-body .h2,
.cta-block-main .cta-block-body .h3,
.cta-block-main .cta-block-body .h4,
.cta-block-main .cta-block-body .h5,
.cta-block-main .cta-block-body .h6 {
	color: #ffffff;
}
.cta-block-main .cta-block-body a:not(.btn) { color: #ffffff; }
.cta-block-main .cta-block-body a:not(.btn):hover { color: rgba(255, 255, 255, 0.90); }


/* Alt
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
.cta-block-alt .cta-block-container {
	border-color: #$secondary_color;
	background-color: #$secondary_color;
}

/* Body
--------------------------------------------------------- */
.cta-block-alt .cta-block-body { color: rgba(255, 255, 255, 0.90); }
.cta-block-alt .cta-block-body a,
.cta-block-alt .cta-block-body h1,
.cta-block-alt .cta-block-body h2,
.cta-block-alt .cta-block-body h3,
.cta-block-alt .cta-block-body h4,
.cta-block-alt .cta-block-body h5,
.cta-block-alt .cta-block-body h6,
.cta-block-alt .cta-block-body .h1,
.cta-block-alt .cta-block-body .h2,
.cta-block-alt .cta-block-body .h3,
.cta-block-alt .cta-block-body .h4,
.cta-block-alt .cta-block-body .h5,
.cta-block-alt .cta-block-body .h6 {
	color: #ffffff;
}
.cta-block-alt .cta-block-body a:not(.btn) { color: #ffffff; }
.cta-block-alt .cta-block-body a:not(.btn):hover { color: rgba(255, 255, 255, 0.90); }



/* 40.17 Testimonials
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.testimonials-items-wrapper {
	padding: 0;
	width: auto;
	display: block;
	margin: 0 -15px;
	overflow: hidden;
}


/* Testimonials item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.testimonials-item {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 0 auto 30px;
}

.testimonials-items-wrapper .testimonials-item {
	float: left;
	padding: 0 15px;
}

.gfort-owl-slider .testimonials-item { margin-bottom: 0; }

/* Container
--------------------------------------------------------- */
.testimonials-item-container {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	position: relative;
}

/* Body
--------------------------------------------------------- */
/* Wrapper */
.testimonials-item-container .testimonials-item-body {
	width: 100%;
	padding: 25px;
	display: block;
	position: relative;
	border-radius: 2px;
	margin: 0 auto 25px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}
.testimonials-item-container .testimonials-item-body > *:last-child { margin-bottom: 0; }

/* Arrow */
.testimonials-item-container .testimonials-item-body::after {
	left: 38px;
	content: '';
	width: 16px;
	height: 16px;
	bottom: -9px;
	position: absolute;
	background-color: inherit;
	border-left: 1px solid #efefef;
	border-bottom: 1px solid #efefef;

	-webkit-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

/* Footer
--------------------------------------------------------- */
/* Wrapper */
.testimonials-item-container .testimonials-item-footer {
	width: 100%;
	margin: 0 auto;
	display: block;
	overflow: hidden;
	padding: 0 0 0 15px;
}

/* Avatar */
.testimonials-item-footer .testimonials-item-avatar {
	float: left;
	width: 64px;
	height: 64px;
	line-height: 1;
	overflow: hidden;
	position: relative;
	border-radius: 50%;
	margin: 0 12px 0 0;
}
.testimonials-item-footer .testimonials-item-avatar img {
	width: 100%;
	display: block;
	border-radius: 50%;
}

/* Meta */
.testimonials-item-avatar + .testimonials-item-meta { min-height: 64px; }
.testimonials-item-footer .testimonials-item-meta {
	width: auto;
	display: table;
	line-height: 1.3;
	overflow: hidden;
}
.testimonials-item-meta .testimonials-item-meta-container {
	width: 100%;
	display: table-cell;
	vertical-align: middle;
}
.testimonials-item-footer .testimonials-item-meta-container h5 {
	color: #$secondary_color;
	margin: 0 auto 2px;
}
.testimonials-item-footer .testimonials-item-meta-container p { font-weight: 500; }


/* 40.17.1 col 2
----------------------------------------------------------------------------- */
.testimonials-col-2 .testimonials-item { width: 50%; }
.testimonials-col-2 .testimonials-item:nth-child(2n+1) { clear: left; }


/* 40.17.2 col 3
----------------------------------------------------------------------------- */
.testimonials-col-3 .testimonials-item { width: 33.33333333%; }
.testimonials-col-3 .testimonials-item:nth-child(3n+1) { clear: left; }


/* 40.17.3 col 4
----------------------------------------------------------------------------- */
.testimonials-col-4 .testimonials-item { width: 25%; }
.testimonials-col-4 .testimonials-item:nth-child(4n+1) { clear: left; }


/* Style 1
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
.testimonials-item-style-1 .testimonials-item-container {
	min-height: 80px;
	padding-left: 100px;
}

/* Body
--------------------------------------------------------- */
.testimonials-item-style-1 .testimonials-item-body {
	border: 0;
	padding: 0;
	margin: 0 auto 15px;
	background-color: transparent;
}
.testimonials-item-style-1 .testimonials-item-body::after { display: none; }

/* Footer
--------------------------------------------------------- */
.testimonials-item-style-1 .testimonials-item-footer { padding: 0; }
.testimonials-item-style-1 .testimonials-item-avatar {
	left: 0;
	top: 3px;
	margin: 0;
	float: none;
	width: 80px;
	height: 80px;
	position: absolute;
}
.testimonials-item-style-1 .testimonials-item-meta,
.testimonials-item-style-1 .testimonials-item-meta-container {
	width: 100%;
	display: block;
	min-height: 1px;
}


/* Style 2
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
.testimonials-item-style-2 .testimonials-item-container {
	max-width: 960px;
	text-align: center;
}

/* Body
--------------------------------------------------------- */
.testimonials-item-style-2 .testimonials-item-body {
	border: 0;
	padding: 0;
	background-color: transparent;
}
.testimonials-item-style-2 .testimonials-item-body::after { display: none; }

/* Footer
--------------------------------------------------------- */
.testimonials-item-style-2 .testimonials-item-footer { padding: 0; }
.testimonials-item-style-2 .testimonials-item-avatar {
	float: none;
	width: 72px;
	height: 72px;
	display: block;
	margin: 0 auto 15px;
}
.testimonials-item-style-2 .testimonials-item-meta,
.testimonials-item-style-2 .testimonials-item-meta-container {
	width: 100%;
	display: block;
	min-height: 1px;
}


/* Style 3
----------------------------------------------------------------------------- */
/* Container
--------------------------------------------------------- */
/* Wrapper */
.testimonials-item-style-3 .testimonials-item-container {
	text-align: center;
	padding: 95px 25px 45px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Symbole */
.testimonials-item-style-3 .testimonials-item-container::before {
	left: 0;
	top: 40px;
	width: 100%;
	height: 26px;
	color: #$primary_color;
	font-size: 24px;
	content: '\\f10d';
	line-height: 26px;
	position: absolute;
	font-family: 'FontAwesome';
}

/* Body
--------------------------------------------------------- */
.testimonials-item-style-3 .testimonials-item-body {
	border: 0;
	padding: 0;
	background-color: transparent;
}
.testimonials-item-style-3 .testimonials-item-body::after { display: none; }

/* Footer
--------------------------------------------------------- */
.testimonials-item-style-3 .testimonials-item-footer { padding: 0; }
.testimonials-item-style-3 .testimonials-item-avatar {
	float: none;
	width: 72px;
	height: 72px;
	display: block;
	margin: 0 auto 15px;
}
.testimonials-item-style-3 .testimonials-item-meta,
.testimonials-item-style-3 .testimonials-item-meta-container {
	width: 100%;
	display: block;
	min-height: 1px;
}



/* 40.18 Timeline Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.timeline-block {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.timeline-block-container {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
}


/* item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.timeline-block-container .timeline-block-item {
	width: 100%;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	position: relative;
	padding: 0 0 30px 40px;
}

/* Head
--------------------------------------------------------- */
/* Wrapper */
.timeline-block-container .timeline-block-head {
	width: 100%;
	font-size: 0;
	display: block;
	line-height: 0;
	position: relative;
	padding: 0 0 0 25px;
	margin: 0 auto -5px;
}

/* Container */
.timeline-block-container .timeline-block-head-container {
	width: auto;
	display: block;
	margin: 0 -15px;
}

/* From - to */
.timeline-block-head .timeline-block-date-to,
.timeline-block-head .timeline-block-date-from {
	line-height: 1;
	padding: 0 15px;
	font-size: 16px;
	text-align: center;
	position: relative;
	display: inline-block;
	vertical-align: bottom;
}

/* Dash */
.timeline-block-head .timeline-block-date-from::after {
	bottom: 0;
	width: 20px;
	right: -10px;
	content: '-';
	color: #212121;
	font-size: 20px;
	font-weight: 500;
	line-height: 26px;
	position: absolute;
	text-align: center;
}

/* Month */
.timeline-block-head .timeline-block-date-month {
	display: block;
	font-weight: 500;
	margin-bottom: 5px;
}

/* Year */
.timeline-block-head .timeline-block-date-year {
	line-height: 1;
	color: #212121;
	letter-spacing: -1px;
}

/* Body
--------------------------------------------------------- */
/* Wrapper */
.timeline-block-container .timeline-block-body {
	width: 100%;
	display: block;
	position: relative;
}

/* Line */
.timeline-block-container .timeline-block-body::after,
.timeline-block-container .timeline-block-body::before {
	top: 38px;
	width: 1px;
	content: '';
	z-index: -1;
	height: 200%;
	left: -36.5px;
	position: absolute;
	background-color: #efefef;
}
.timeline-block-container .timeline-block-body::after {
	-webkit-transform: translateY(-100%);
	-ms-transform: translateY(-100%);
	transform: translateY(-100%);
}
.timeline-block-container .timeline-block-item:first-child .timeline-block-body::after,
.timeline-block-container .timeline-block-item:last-child .timeline-block-body::before {
	display: none;
}

/* Container */
.timeline-block-container .timeline-block-body-container {
	padding: 25px;
	border-radius: 2px;
	border: 1px solid #efefef;
	background-color: #ffffff;
}

/* Title */
.timeline-block-body .timeline-block-title {
	width: 100%;
	color: #$secondary_color;
	display: block;
	margin: 0 auto;
	position: relative;
}
.timeline-block-body .timeline-block-title * { color: inherit; }

/* Dot / Arrow */
.timeline-block-body .timeline-block-title::after,
.timeline-block-body .timeline-block-title::before {
	top: 6px;
	color: #efefef;
	line-height: 14px;
	position: absolute;
	font-family: 'FontAwesome';

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.timeline-block-body .timeline-block-title::after {
	left: -53px;
	width: 20px;
	font-size: 20px;
	content: '\\f177';
}
.timeline-block-body .timeline-block-title::before {
	left: -66px;
	width: 10px;
	font-size: 10px;
	content: '\\f111';
}

/* Content */
.timeline-block-body .timeline-block-content {
	width: 100%;
	display: block;
	margin: 10px auto 0;
}

/* Hover
--------------------------------------------------------- */
.timeline-block-container .timeline-block-item:hover .timeline-block-title::after { left: -56px; }
.timeline-block-container .timeline-block-item:hover .timeline-block-title::after,
.timeline-block-container .timeline-block-item:hover .timeline-block-title::before {
	color: #$primary_color;
}


/* Style 1
----------------------------------------------------------------------------- */
/* Head
--------------------------------------------------------- */
/* Wrapper */
.timeline-block-style-1 .timeline-block-head {
	padding: 0;
	margin: 0 auto 10px;
}

/* From - to */
.timeline-block-style-1 .timeline-block-date-to,
.timeline-block-style-1 .timeline-block-date-from {
	font-size: 14px;
}
.timeline-block-style-1 .timeline-block-date-from::after { line-height: 14px; }

/* Month */
.timeline-block-style-1 .timeline-block-date-month {
	margin-bottom: 0;
	line-height: 1.1;
	display: inline-block;
	vertical-align: bottom;
}

/* Year */
.timeline-block-style-1 .timeline-block-date-year {
	font-size: 20px;
	font-weight: 400;
	display: inline-block;
	vertical-align: bottom;
}

/* Body
--------------------------------------------------------- */
/* Line */
.timeline-block-style-1 .timeline-block-body::after,
.timeline-block-style-1 .timeline-block-body::before {
	top: 13px;
}

/* Container */
.timeline-block-style-1 .timeline-block-body-container {
	border: 0;
	padding: 0;
	border-radius: 0;
	background-color: transparent;
}

/* Dot / Arrow */
.timeline-block-style-1 .timeline-block-title::after { left: -27px; }
.timeline-block-style-1 .timeline-block-title::before { left: -40px; }

/* Hover
--------------------------------------------------------- */
.timeline-block-style-1 .timeline-block-item:hover .timeline-block-title::after { left: -30px; }



/* 40.19 Team Block
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.team-block {
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.team-block-container {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Team Block Media
----------------------------------------------------------------------------- */
.team-block-container .team-block-media {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	border-radius: 2px;
	margin: 0 auto 25px;
}
.team-block-container .team-block-media img {
	width: 100%;
	display: block;
}


/* Team Block Body
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.team-block-container .team-block-body {
	width: 100%;
	display: block;
	overflow: hidden;
}

/* Title
--------------------------------------------------------- */
.team-block-body .team-block-title {
	width: 100%;
	display: block;
	overflow: hidden;
}
.team-block-title .team-block-name {
	color: #$secondary_color;
	margin: 0 auto;
}
.team-block-title .team-block-subtitle {
	color: #$primary_color;
	font-weight: 500;
}

/* Description
--------------------------------------------------------- */
.team-block-body .team-block-desc {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 10px auto 0;
}

/* Social icons
--------------------------------------------------------- */
.team-block-body .team-block-social-icons {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 18px auto 0;
}


/* Style 1
----------------------------------------------------------------------------- */
/* Team Block Media
--------------------------------------------------------- */
.team-block-style-1 .team-block-media {
	float: left;
	width: 96px;
	height: 96px;
	border-radius: 50%;
	margin: 0 20px 0 0;
}
.text-right .team-block-media {
	float: right;
	margin: 0 0 0 20px;
}

/* Team Block Body
--------------------------------------------------------- */
.team-block-style-1 .team-block-body {
	width: auto;
	display: block;
	overflow: hidden;
}


/* Style 2
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.team-block-style-2 { text-align: center; }

/* Team Block Media
--------------------------------------------------------- */
.team-block-style-2 .team-block-media {
	max-width: 190px;
	border-radius: 50%;
}



/* 40.20 Gallery
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.gallery-items-wrapper {
	width: auto;
	display: block;
	overflow: hidden;
	margin: -2px -2px 28px;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.gallery-gap-0 { margin: 0 0 30px; }
.gallery-gap-30 { margin: -15px -15px 15px; }
.gallery-gap-10 { margin: -5px -5px 25px; }

.mb-0.gallery-gap-0 { margin-bottom: 0 !important; }
.mb-0.gallery-gap-30 { margin-bottom: -15px !important; }
.mb-0.gallery-gap-10 { margin-bottom: -25px !important; }


/* item
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.gallery-item {
	width: 100%;
	padding: 2px;
	line-height: 0;
	display: block;
	margin: 0 auto;
	border-radius: 2px;
	position: relative;

	-webkit-transition: all 0s ease-in-out;
	transition: all 0s ease-in-out;
}
.gallery-gap-0 .gallery-item {
	padding: 0;
	border-radius: 0;
}
.gallery-gap-10 .gallery-item { padding: 5px; }
.gallery-gap-30 .gallery-item { padding: 15px; }

/* Link / image
--------------------------------------------------------- */
.gallery-item a,
.gallery-item img {
	width: 100%;
	border-radius: 2px;
	display: inline-block;
}
.gallery-item a::after { border-radius: 2px; }

.gallery-gap-0 .gallery-item a,
.gallery-gap-0 .gallery-item img,
.gallery-gap-0 .gallery-item a::after {
	border-radius: 0;
}


/* 40.20.1 col 2
----------------------------------------------------------------------------- */
.gallery-col-2 .gallery-item {
	width: 50%;
	float: left;
}
.gallery-col-2 .gallery-item:nth-child(2n+1) { clear: left; }


/* 40.20.2 col 3
----------------------------------------------------------------------------- */
.gallery-col-3 .gallery-item {
	float: left;
	width: 33.33333333%;
}
.gallery-col-3 .gallery-item:nth-child(3n+1) { clear: left; }


/* 40.20.3 col 4
----------------------------------------------------------------------------- */
.gallery-col-4 .gallery-item {
	width: 25%;
	float: left;
}
.gallery-col-4 .gallery-item:nth-child(4n+1) { clear: left; }


/* 40.20.4 col 5
----------------------------------------------------------------------------- */
.gallery-col-5 .gallery-item {
	width: 20%;
	float: left;
}
.gallery-col-5 .gallery-item:nth-child(5n+1) { clear: left; }


.gallery-col-2.isotope-masonry .gallery-item-2x { width: 100%; }
.gallery-col-3.isotope-masonry .gallery-item-2x { width: 66.66666666%; }
.gallery-col-4.isotope-masonry .gallery-item-2x { width: 50%; }
.gallery-col-5.isotope-masonry .gallery-item-2x { width: 40%; }



/* 40.21 PRE
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
pre {
	width: 100%;
	padding: 15px;
	color: #666666;
	display: block;
	font-size: 13px;
	border-radius: 2px;
	margin: 0 auto 30px;
	background-color: #f5f5f5;
	border: 1px solid #efefef;
}


/* Line no.
----------------------------------------------------------------------------- */
.prettyprint.linenums {
	position: relative;
	padding: 10px 5px 15px;
}
.prettyprint.linenums::before {
	top: 0;
	left: 0;
	z-index: 1;
	content: '';
	width: 40px;
	height: 100%;
	position: absolute;

	-webkit-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #efefef;
	-moz-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #efefef;
	box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #efefef;
}
ol.linenums {
	z-index: 2;
	position: relative;
	margin: 0 0 0 33px;
	padding: 0 0 0 2px;
}
ol.linenums li {
	line-height: 20px;
	margin: 5px auto 0;
	padding: 0 0 0 15px;
}

.prettyprint .com { color: #777777; }
.prettyprint .lit { color: #195f91; }
.prettyprint .pun,
.prettyprint .opn,
.prettyprint .clo {
	color: #93a1a1;
}
.prettyprint .fun { color: #dc322f; }
.prettyprint .str,
.prettyprint .atv {
	color: #D14;
}
.prettyprint .kwd,
.prettyprint .tag {
	color: #1e347b;
}
.prettyprint .typ,
.prettyprint .atn,
.prettyprint .dec,
.prettyprint .var {
	color: teal;
}
.prettyprint .pln { color: #48484c; }



/* 40.22 Notifications
============================================================================= */
/* Main Wrapper
----------------------------------------------------------------------------- */
.notification-block {
	right: 0;
	bottom: 0;
	z-index: 9997;
	margin: 0 auto;
	display: block;
	position: fixed;
	max-width: 100%;
	max-height: 100%;
	overflow: hidden;

	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}


/* overlay
----------------------------------------------------------------------------- */
.notification-block-overlay { background-color: rgba(0, 0, 0, 0.5); }


/* Wrapper
----------------------------------------------------------------------------- */
.notification-block-wrapper {
	z-index: 2;
	width: 140%;
	max-height: 100vh;
	margin-left: -20%;
	padding-left: 20%;
	position: relative;
	margin-right: -20%;
	padding-right: 20%;
	overflow-x: hidden;
	overflow-y: scroll;
	-webkit-overflow-scrolling: touch;
}
.notification-block-style-2 .notification-block-wrapper,
.notification-block-style-3 .notification-block-wrapper {
	overflow: visible;
}


/* Container
----------------------------------------------------------------------------- */
.notification-block-container {
	z-index: 2;
	width: 100%;
	padding: 25px;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Content
----------------------------------------------------------------------------- */
.notification-block-content {
	width: 100%;
	padding: 25px;
	display: block;
	margin: 0 auto;
	text-align: left;
	position: relative;
	overflow-y: hidden;
	border-radius: 2px;
	background-color: #ffffff;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center top;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;

	-webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
}
.notification-block-content.text-right { text-align: right; }
.notification-block-content.text-center { text-align: center; }


/* Close Button
----------------------------------------------------------------------------- */
.notification-block-content .notification-block-close-btn {
	border: 0;
	padding: 0;
	z-index: 10;
	float: right;
	opacity: 0.70;
	color: #212121;
	font-size: 18px;
	font-weight: 700;
	line-height: 15px;
	margin: 0 0 0 15px;
	position: relative;
	font-family: sans-serif;
	background-color: transparent;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.text-center .notification-block-close-btn {
	top: 23px;
	right: 23px;
	position: absolute;
}
.text-right .notification-block-close-btn {
	float: left;
	margin: 0 15px 0 0;
}

.notification-block-content .notification-block-close-btn span { display: block; }
.notification-block-content .notification-block-close-btn:hover { opacity: 1; }


/* elements
----------------------------------------------------------------------------- */
.notification-block-content h1,
.notification-block-content h2,
.notification-block-content h3,
.notification-block-content h4,
.notification-block-content h5,
.notification-block-content h6,
.notification-block-content .h1,
.notification-block-content .h2,
.notification-block-container .h3,
.notification-block-content .h4,
.notification-block-content .h5,
.notification-block-content .h6 {
	margin-bottom: 10px;
}

.notification-block-content > *:last-child {
	margin-bottom: 0;
	padding-bottom: 0;
}

.notification-block-content .form-block,
.notification-block-content .subscribe-form-block {
	margin-bottom: -20px;
}
.notification-block-content .form-group { margin-bottom: 20px; }
.notification-block-content .subscribe-form-block .col-md-12 { width: 100%; }


/* 40.22.1 Style 1
----------------------------------------------------------------------------- */
.notification-block-style-1 {
	max-width: 470px;

	-webkit-transform: translateX(100%);
	-ms-transform: translateX(100%);
	transform: translateX(100%);
}
.notification-block-style-1.NB_correctPosition {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0);
}


/* 40.22.2 Style 2
----------------------------------------------------------------------------- */
/* Main Wrapper
--------------------------------------------------------- */
.notification-block-style-2 {
	width: 100%;
	right: auto;
	bottom: auto;
	position: relative;

	-webkit-transition: all 0s ease-in-out;
	transition: all 0s ease-in-out;
}

/* Container
--------------------------------------------------------- */
.notification-block-style-2 .notification-block-container { padding: 0; }


/* Content
--------------------------------------------------------- */
.notification-block-style-2 .notification-block-content {
	padding: 20px;
	border-radius: 0;
	background-color: #$primary_color;
}


/* 40.22.3 Style 3
----------------------------------------------------------------------------- */
/* Main Wrapper
--------------------------------------------------------- */
.notification-block-style-3 {
	width: 100%;
	border-top: 3px solid #$primary_color;

	-webkit-transform: translateY(100%);
	-ms-transform: translateY(100%);
	transform: translateY(100%);
}
.notification-block-style-3.NB_correctPosition {
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	transform: translateY(0);
}

/* Container
--------------------------------------------------------- */
.notification-block-style-3 .notification-block-container { padding: 0; }


/* Content
--------------------------------------------------------- */
.notification-block-style-3 .notification-block-content {
	padding: 20px;
	border-radius: 0;
}


/* 40.22.4 Style 4
----------------------------------------------------------------------------- */
/* Main Wrapper
--------------------------------------------------------- */
.notification-block-style-4 {
	opacity: 0;
	width: 100%;
	height: 100%;
	visibility: hidden;
}
.notification-block-style-4.NB_correctPosition {
	opacity: 1;
	visibility: visible;
}

/* Wrapper
--------------------------------------------------------- */
.notification-block-style-4 .notification-block-wrapper {
	height: 100%;
	text-align: center;
}
@media (min-width: 768px) {
	.notification-block-style-4 .notification-block-wrapper::before {
		content: '';
		height: 100%;
		display: inline-block;
		vertical-align: middle;
	}
}

/* Container
--------------------------------------------------------- */
.notification-block-style-4 .notification-block-container {
	padding: 20px;
	max-width: 640px;
	display: inline-block;
	vertical-align: middle;

	-webkit-transform: scale(0.5);
	-ms-transform: scale(0.5);
	transform: scale(0.5);

	-webkit-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.notification-block-style-4.NB_correctPosition .notification-block-container {
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}



/* 40.23 Triangle Block
============================================================================= */
/* Main Wrapper
----------------------------------------------------------------------------- */
.triangle-block {
	top: 0;
	width: 0;
	height: 0;
	z-index: 20;
	content: '';
	position: absolute;
	border-width: 15px;
	border-style: solid;
	border-left-color: transparent !important;
	border-right-color: transparent !important;
	border-bottom-color: transparent !important;
}


/* Center
----------------------------------------------------------------------------- */
.triangle-block-center {
	left: 50%;
	margin-left: -15px;
}


/* Center Left
----------------------------------------------------------------------------- */
.triangle-block-center-left {
	left: 25%;
	margin-left: -15px;
}


/* Center Right
----------------------------------------------------------------------------- */
.triangle-block-center-right {
	right: 25%;
	margin-right: -15px;
}


/* Left
----------------------------------------------------------------------------- */
.triangle-block-left { left: 15px; }


/* Right
----------------------------------------------------------------------------- */
.triangle-block-right { right: 15px; }



/* 40.24 Ribbon Block
============================================================================= */
.ribbon-block {
	z-index: 20;
	display: block;
	color: #212121;
	font-size: 12px;
	overflow: hidden;
	font-weight: 700;
	line-height: 20px;
	padding: 7px 20px;
	position: absolute;
	border-radius: 2px;
	letter-spacing: 0.30px;
	background-color: #ffffff;
	text-transform: uppercase;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.ribbon-block.ribbon-block-top-left {
	top: 15px;
	left: 15px;
}
.ribbon-block.ribbon-block-top-right {
	top: 15px;
	right: 15px;
}
.ribbon-block.ribbon-block-bottom-left {
	left: 15px;
	bottom: 15px;
}
.ribbon-block.ribbon-block-bottom-right {
	right: 15px;
	bottom: 15px;
}




/* =============================================================================
41. Events
============================================================================= */
/* Events items Wrapper
============================================================================= */
.events-items-wrapper {
	width: 100%;
	display: block;
	position: relative;
}
.events-items-wrapper::after {
	content: '';
	clear: both;
	display: table;
}



/* Event item
============================================================================= */
/* Event item Wrapper
============================================================================= */
.event-item {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 0 0 30px;
	position: relative;
}
.gfort-owl-slider .event-item {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}



/* Event item Container
============================================================================= */
.event-item-container {
	width: 100%;
	display: block;
	position: relative;
}
.event-item-container::after {
	content: '';
	clear: both;
	display: table;
}



/* Event item Media
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.event-item-container .event-item-media {
	padding: 0;
	z-index: 10;
	width: 100%;
	display: block;
	line-height: 0;
	overflow: hidden;
	position: relative;
	margin: 0 auto -1px;
	border-radius: 2px 2px 2px 0;

	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}


/* Link
----------------------------------------------------------------------------- */
.event-item-container .event-item-media a {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* image
----------------------------------------------------------------------------- */
.event-item-container .event-item-media img {
	width: 100%;
	display: inline-block;
}



/* Event item Date
============================================================================= */
.event-item-container .event-item-date {
	width: 50px;
	float: left;
	color: #ffffff;
	line-height: 1;
	font-size: 20px;
	margin: 0 20px 0 0;
	position: relative;
	text-align: center;
	padding: 10px 0 0 0;
	background-color: #$primary_color;
	text-transform: uppercase;
	border-radius: 0 0 2px 2px;
}
.event-item-container .event-item-date::after {
	top: 0;
	left: 100%;
	width: 100%;
	content: '';
	height: 1px;
	position: absolute;
	background-color: #efefef;
}
.event-item-container .event-item-date span {
	width: 100%;
	display: block;
	font-size: 12px;
	margin: 7px 0 0;
	font-weight: 700;
	padding: 10px 0 8px;
	background-color: rgba(0, 0, 0, 0.30);
}



/* Event item Body
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.event-item-container .event-item-body {
	padding: 0;
	z-index: 9;
	width: auto;
	display: block;
	overflow: hidden;
	position: relative;
}
.event-item-container .event-item-body::after {
	top: 0;
	left: 0;
	width: 100%;
	content: '';
	height: 1px;
	position: absolute;
	background-color: #efefef;
}


/* Event item Meta
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.event-item-meta {
	width: 100%;
	font-size: 0;
	line-height: 0;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	font-weight: 700;
	padding: 22px 0 0;
	text-transform: uppercase;
}

/* Span
--------------------------------------------------------- */
.event-item-meta span {
	padding: 0;
	font-size: 13px;
	line-height: 13px;
	margin: 0 auto 8px;
	position: relative;
	display: inline-block;
	vertical-align: bottom;
	letter-spacing: 0.30px;
}

/* icon
--------------------------------------------------------- */
.event-item-meta span i {
	color: #212121;
	margin-right: 5px;
}

/* Dot
--------------------------------------------------------- */
.event-item-meta span::after {
	float: right;
	padding: 0 8px;
	font-size: 4px;
	content: '\\f111';
	line-height: inherit;
	font-family: 'FontAwesome';
}
.event-item-meta span:last-child::after { display: none; }


/* Event item Title
----------------------------------------------------------------------------- */
.event-item-body .event-item-title {
	padding: 0;
	width: 100%;
	color: #212121;
	display: block;
	margin: 0 auto;
	font-size: 20px;
	font-weight: 400;
	line-height: 26px;
	position: relative;
}
.event-item-title a { color: inherit; }
.event-item-title a:hover { color: #$primary_color; }


/* Event item Description
----------------------------------------------------------------------------- */
.event-item-body .event-item-description {
	padding: 0;
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 15px auto 0;
}


/* Event Speakers
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.event-item-speakers {
	width: auto;
	display: block;
	overflow: hidden;
	margin: 0 -15px -15px;
}

/* Container
--------------------------------------------------------- */
.event-item-speakers-container {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 15px auto 0;
}


/* Event item Read More Button
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.event-item-body .event-item-read-btn {
	width: 100%;
	display: block;
	line-height: 1;
	font-size: 14px;
	font-weight: 700;
	overflow: hidden;
	margin: 23px auto 0;
	text-transform: uppercase;
}

/* Link
--------------------------------------------------------- */
.event-item-read-btn a { display: inline-block; }

/* icon
--------------------------------------------------------- */
.event-item-read-btn a i {
	height: 14px;
	line-height: 14px;
	vertical-align: top;
	display: inline-block;

	-webkit-transition: margin 0.30s ease-in-out;
	transition: margin 0.30s ease-in-out;
}

/* Hover
--------------------------------------------------------- */
.event-item-read-btn a:hover i { margin-left: 3px; }



/* 41.1 Events columns
============================================================================= */
/* 41.1.1 col 1
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.events-col-1 { margin-bottom: -20px; }

/* Blog item
--------------------------------------------------------- */
/* Wrapper */
.events-col-1 .event-item {
	margin-bottom: 50px;
	padding-bottom: 50px;
	border-bottom: 1px solid #efefef;
}

/* Title */
.events-col-1 .event-item .event-item-body .event-item-title {
	font-size: 24px;
	line-height: 28px;
}


/* 41.1.2 col 2
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.events-col-2 {
	width: auto;
	margin: 0 -15px;
}

/* Event item
--------------------------------------------------------- */
/* Wrapper */
.events-col-2 .event-item {
	width: 50%;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.events-col-2 .event-item:nth-child(2n+1) { clear: left; }


/* 41.1.3 col 3
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.events-col-3 {
	width: auto;
	margin: 0 -15px;
}

/* Blog item
--------------------------------------------------------- */
/* Wrapper */
.events-col-3 .event-item {
	float: left;
	padding-left: 15px;
	padding-right: 15px;
	width: 33.33333333%;
}
.events-col-3 .event-item:nth-child(3n+1) { clear: left; }



/* 41.2 Events Single item
============================================================================= */
/* Event item
--------------------------------------------------------- */
/* Wrapper */
.events-single-item .event-item { padding-bottom: 10px; }

/* Event item Title */
.events-single-item .event-item .event-item-body .event-item-title {
	font-size: 24px;
	line-height: 28px;
	margin: 0 auto 15px;
}

/* Event item Description */
.events-single-item .event-item-body .event-item-description { margin: 0 auto; }

/* downTime Block */
.events-single-item .downtime-counter-block-container {
	padding: 30px 30px 0;
	margin: 10px auto 25px;
	border: 2px solid #efefef;
}


/* 41.3 Related Events Blocks
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.related-events-blocks {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
}


/* Container
----------------------------------------------------------------------------- */
.related-events-blocks-container {
	width: 100%;
	overflow: hidden;
	padding: 0 0 15px;
	position: relative;
	margin: 15px auto 30px;
	border-bottom: 1px solid #efefef;
}
.related-events-blocks:last-child .related-events-blocks-container {
	border-bottom: 0;
	margin-bottom: 0;
	padding-bottom: 0;
}


/* Events Blocks item
----------------------------------------------------------------------------- */
/* List
--------------------------------------------------------- */
.related-events-blocks-container ul.events-blocks {
	width: auto;
	margin: 0 -15px;
}

/* items
--------------------------------------------------------- */
.related-events-blocks-container ul.events-blocks li {
	border: 0;
	float: left;
	padding: 0 15px;
	width: 33.33333333%;
	margin: 0 auto 30px;
}
.related-events-blocks-container ul.events-blocks li:nth-child(3n+1) { clear: left; }

.page-left-sidebar .related-events-blocks-container ul.events-blocks li,
.page-right-sidebar .related-events-blocks-container ul.events-blocks li {
	width: 50%;
}
.page-left-sidebar .related-events-blocks-container ul.events-blocks li:nth-child(2n+1),
.page-right-sidebar .related-events-blocks-container ul.events-blocks li:nth-child(2n+1) {
	clear: left;
}
.page-left-sidebar .related-events-blocks-container ul.events-blocks li:nth-child(3n+1),
.page-right-sidebar .related-events-blocks-container ul.events-blocks li:nth-child(3n+1) {
	clear: none;
}

/* image
--------------------------------------------------------- */
.related-events-blocks-container ul.events-blocks a.item-image { margin: 0 auto 25px; }

/* Event item Link (Title)
--------------------------------------------------------- */
.related-events-blocks-container ul.events-blocks li a.event-item-small-title {
	font-size: 18px;
	line-height: 24px;
}




/* =============================================================================
42. Search
============================================================================= */
/* Search items Wrapper
============================================================================= */
.search-items-wrapper {
	width: 100%;
	display: block;
	position: relative;
}
.search-items-wrapper::after {
	content: '';
	clear: both;
	display: table;
}



/* Search item
============================================================================= */
/* Search item Wrapper
============================================================================= */
.search-item {
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 0 0 50px;
	position: relative;
}
.search-item:last-child { padding-bottom: 30px; }



/* Search item Container
============================================================================= */
.search-item-container {
	width: 100%;
	display: block;
	position: relative;
	border-radius: 2px;
	background-color: #ffffff;
}
.search-item-container::after {
	content: '';
	clear: both;
	display: table;
}



/* Search item Body
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.search-item-container .search-item-body {
	z-index: 9;
	width: 100%;
	display: block;
	position: relative;
	border-radius: 2px;
	padding: 0 25px 25px;
	border: 1px solid #efefef;
}


/* Search item Meta
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.search-item-meta {
	padding: 0;
	width: 100%;
	font-size: 0;
	line-height: 0;
	display: block;
	overflow: hidden;
	font-weight: 700;
	margin: -1px auto 0;
	text-transform: uppercase;
}

/* Span
--------------------------------------------------------- */
.search-item-meta span {
	padding: 0;
	font-size: 13px;
	margin: 10px 0 0;
	line-height: 13px;
	position: relative;
	display: inline-block;
	vertical-align: bottom;
	letter-spacing: 0.30px;
}
.search-item-meta span span {
	margin: 0 !important;
	padding: 0 !important;
}

/* Dot
--------------------------------------------------------- */
.search-item-meta span::after {
	float: right;
	padding: 0 8px;
	font-size: 4px;
	content: '\\f111';
	line-height: inherit;
	font-family: 'FontAwesome';
}
.search-item-meta span:last-child::after { display: none; }

/* Time
--------------------------------------------------------- */
.search-item-meta span time { display: inline-block; }

/* Format
--------------------------------------------------------- */
/* Wrapper */
.search-item-meta span.item-meta-format { margin: 0 12px 0 0; }

/* Dot */
.search-item-meta span.item-meta-format::after { display: none; }

/* icon */
.search-item-meta span.item-meta-format i {
	width: 40px;
	height: 40px;
	display: block;
	margin: 0 auto;
	color: #ffffff;
	font-size: 14px;
	overflow: hidden;
	line-height: 40px;
	position: relative;
	text-align: center;
	background-color: #$primary_color;
	border-radius: 0 0 2px 2px;
}


/* Search item Title
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.search-item-body .search-item-title {
	padding: 0;
	width: 100%;
	color: #212121;
	display: block;
	font-size: 22px;
	font-weight: 400;
	line-height: 26px;
	position: relative;
	margin: 17px auto 0;
}

/* Link
--------------------------------------------------------- */
.search-item-title a {
	color: inherit;
	position: relative;
}
.search-item-title a:hover { color: #$primary_color; }


/* Search item Description
----------------------------------------------------------------------------- */
.search-item-body .search-item-description {
	width: 100%;
	display: block;
	overflow: hidden;
	margin: 10px auto 0;
}


/* search item Read More Button
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.search-item-body .search-item-read-btn {
	width: 100%;
	display: block;
	line-height: 1;
	font-size: 14px;
	font-weight: 700;
	overflow: hidden;
	margin: 17px auto 3px;
	text-transform: uppercase;
}

/* Link
--------------------------------------------------------- */
.search-item-read-btn a { display: inline-block; }

/* icon
--------------------------------------------------------- */
.search-item-read-btn a i {
	height: 14px;
	line-height: 14px;
	vertical-align: top;
	display: inline-block;

	-webkit-transition: margin 0.30s ease-in-out;
	transition: margin 0.30s ease-in-out;
}

/* Hover
--------------------------------------------------------- */
.search-item-read-btn a:hover i { margin-left: 3px; }




/* =============================================================================
42. SiteMap
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.sitemap-block {
	width: 100%;
	display: block;
	overflow: hidden;
	position: relative;
	margin: 0 auto 30px;
}


/* Container
----------------------------------------------------------------------------- */
.sitemap-block-container {
	width: auto;
	display: block;
	margin: 0 -15px;
	overflow: hidden;
	position: relative;
}


/* Title
----------------------------------------------------------------------------- */
.sitemap-block-container .sitemap-list-title { color: #$secondary_color; }


/* List
----------------------------------------------------------------------------- */
.sitemap-block-container ul {
	list-style: none;
	overflow-y: hidden;
	position: relative;
	padding-left: 20px;
}


/* items
----------------------------------------------------------------------------- */
.sitemap-block-container ul li {
	padding-top: 10px;
	position: relative;
	margin-top: 0 !important;
}
.sitemap-block-container ul li:first-child { padding-top: 0; }
.sitemap-block-container li li { padding-top: 10px !important; }

.sitemap-block-container ul li::after {
	top: 50%;
	left: -20px;
	width: 10px;
	height: 2px;
	content: '';
	margin-top: 5px;
	position: absolute;
	background-color: #dddddd;
}
.sitemap-block-container ul > li:first-child::after { margin-top: 0; }
.sitemap-block-container ul ul > li:first-child::after { margin-top: 5px; }
.sitemap-block-container ul li.sitemap-parent-list::after { top: 15px; }

.sitemap-block-container ul li::before {
	top: 0;
	width: 2px;
	left: -20px;
	content: '';
	height: 100%;
	margin-top: -10px;
	position: absolute;
	background-color: #dddddd;
}
.sitemap-block-container ul li:not(.sitemap-parent-list):last-child::before {
	top: auto;
	bottom: 50%;
	margin-top: 0;
	margin-bottom: -5px;
}




/* =============================================================================
44. To top button
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.btn-gfort-top {
	right: 20px;
	width: 40px;
	height: 40px;
	z-index: 999;
	bottom: -40px;
	color: #ffffff;
	position: fixed;
	font-size: 22px;
	line-height: 40px;
	text-align: center;
	border-radius: 2px;
	background-color: #$primary_color;
}
.btn-gfort-top.show-btn-gfort-top { bottom: 20px; }

.btn-gfort-top:hover {
	color: #ffffff;
	background-color: #$secondary_color;
}
.btn-gfort-top:focus {
	color: #ffffff;
	background-color: #$primary_color;
}


/* icon
----------------------------------------------------------------------------- */
.btn-gfort-top i {
	display: block;
	line-height: 37px;
}




/* =============================================================================
45. Footer
============================================================================= */
/* Wrapper
----------------------------------------------------------------------------- */
.footer-section {
	padding: 0;
	z-index: 3;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
}


/* Link
----------------------------------------------------------------------------- */
.footer-section a:not(.btn) { font-weight: 500; }


/* 45.1 Footer Top
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.footer-top-section {
	z-index: 1;
	padding: 0;
	width: 100%;
	color: #aaaaaa;
	display: block;
	margin: 0 auto;
	position: relative;
	background-color: #191919;
}

/* Link
--------------------------------------------------------- */
.footer-top-section .widget-block a:not(.btn),
.footer-top-section ul.blog-posts li a.blog-item-small-title {
	color: rgba(255, 255, 255, 0.75);
}
.footer-top-section a:hover,
.footer-top-section .widget-block a:not(.btn):hover,
.footer-top-section .secondary-menu ul li.current_page_item a,
.footer-top-section ul.blog-posts li a.blog-item-small-title:hover {
	color: #ffffff;
}

.footer-top-section .form-control {
	color: #ffffff;
	background-color: transparent;
	border-color: rgba(255, 255, 255, 0.20);
}
.footer-top-section .form-control:focus { border-color: rgba(255, 255, 255, 0.40); }

.footer-top-section .btn-gfort-grey:hover,
.footer-top-section .btn-gfort-grey:focus,
.footer-top-section .btn-gfort-grey.focus,
.footer-top-section .btn-gfort-grey.active,
.footer-top-section button.btn-gfort-grey:focus,
.footer-top-section button.btn-gfort-grey.focus {
	background-color: #$primary_color;
}

/* Container
--------------------------------------------------------- */
.footer-top-section-container {
	z-index: 1;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	padding: 60px 0 15px;
}

/* Widgets
--------------------------------------------------------- */
.footer-top-section-container .widget-block-container .widget-block-title::after,
.footer-top-section-container .widget-block-container .widget-block-title::before,
.footer-top-section-container .widget-block-container .widget-block-title h6::after {
	display: none;
}

.footer-top-section-container .widget-block-container .widget-block-body {
	border: 0;
	padding: 0;
}

.footer-top-section-container .twitter-feed-block .twitter-head { display: none; }

.footer-top-section-container ul.blog-posts li,
.footer-top-section-container ul.shop-products li,
.footer-top-section-container .twitter-feed-block li.gfort-twitter-item .gfort-twitter-item-container {
	border-color: rgba(255, 255, 255, 0.10);
}

.footer-top-section-container .widget-block-container .widget-block-title h6 { color: #ffffff; }

.footer-top-section-container ul.links-block li a::before,
.footer-top-section-container ul.categories-block li a::before {
	background-color: #ffffff;
}


/* 45.2 Footer Copyright
----------------------------------------------------------------------------- */
/* Wrapper
--------------------------------------------------------- */
.footer-copyright-section {
	z-index: 1;
	padding: 0;
	width: 100%;
	display: block;
	margin: 0 auto;
	position: relative;
	background-color: #ffffff;
	border-top: 1px solid #dddddd;
}

/* Link
--------------------------------------------------------- */
.footer-copyright-section a { color: #666666; }
.footer-copyright-section a:hover { color: #212121; }

/* Container
--------------------------------------------------------- */
.footer-copyright-section-container {
	z-index: 1;
	width: 100%;
	display: block;
	margin: 0 auto;
	padding: 10px 0;
	position: relative;
}

/* Widget
--------------------------------------------------------- */
/* Wrapper */
.copyright-widget {
	z-index: 5;
	display: block;
	margin: 0 auto;
	line-height: 0;
	position: relative;
	padding: 10px 15px;
}

/* Container */
.copyright-widget-container {
	padding: 0;
	display: inline-block;
}

/* info Block */
.copyright-widget-container .info-block-container,
.copyright-widget-container .info-block-container *:not(i):not(a) {
	font-weight: normal;
}

/* image */
.copyright-widget img {
	display: block;
	max-height: 28px;
}




/* =============================================================================
46. Helper Classes
============================================================================= */
/* Custom Padding
----------------------------------------------------------------------------- */
.custom-padding { padding: 100px 0 70px; }
@media (min-width: 1440px) {
	.custom-padding { padding: 170px 0 140px; }
}

.uc-custom-padding { padding: 0; }
.uc-custom-padding .section-container {
	min-height: 100vh;
	padding: 200px 0 170px;
}

.mm-custom-padding { padding: 0; }
.mm-custom-padding .section-container { padding: 200px 0 170px; }


.col-auto-margin {
	margin-left: 50%;

	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	transform: translateX(-50%);
}




/* =============================================================================
47. v1.2
============================================================================= */
/* 47.1 Account Form Block
============================================================================= */
.account-form-block-style-1 { padding: 30px 0 0; }
.account-form-block-style-1 .col-md-12 { padding: 0 45px; }
.account-form-block-style-1 .checkbox {
	float: left;
	margin: 18px 0 0;
}
.account-form-block-style-1 .checkbox:last-child {
	margin-top: 0;
	margin-bottom: -10px;
}
.account-form-block-style-1 .checkbox + .btn {
	width: auto;
	float: right;
}
.account-form-block-style-1 .gfort-checkbox {
	color: #dddddd;
	border-color: #dddddd;
}
.account-form-block-style-1 .col-md-12.account-form-block-footer {
	padding: 0 15px;
	margin-top: 15px;
	border-top: 1px solid #efefef;
}
.account-form-block-style-1 .col-md-12.account-form-block-footer .form-block-title { margin-bottom: 0; }
.account-form-block-style-1 .col-md-12.account-form-block-footer .btn {
	margin-top: 0;
	border-radius: 0;
	padding: 20px 25px;
}
.account-form-block-style-1 .col-md-12.account-form-block-footer .btn:hover,
.account-form-block-style-1 .col-md-12.account-form-block-footer .btn:focus,
.account-form-block-style-1 .col-md-12.account-form-block-footer .btn.focus,
.account-form-block-style-1 .col-md-12.account-form-block-footer .btn.active,
.account-form-block-style-1 .col-md-12.account-form-block-footer .btn:active {
	color: #666666;
	background-color: #f5f5f5;
	text-decoration: underline !important;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.account-form-block-style-2 { padding: 30px 0 0; }
.account-form-block-style-2 .col-md-12 { padding: 0 45px; }
.account-form-block-style-2 .gfort-checkbox {
	color: #dddddd;
	border-color: #dddddd;
}
.account-form-block-style-2 .col-md-12.account-form-block-footer {
	padding: 0 15px;
	margin-top: 15px;
	border-top: 1px solid #efefef;
}
.account-form-block-style-2 .col-md-12.account-form-block-footer .form-block-title {
	font-size: 14px;
	margin-bottom: 0;
	overflow: hidden;
	font-weight: 700;
	padding: 25px 30px;
}
.account-form-block-style-2 .form-block-title .form-link {
	color: #666666;
	margin-bottom: 0;
	text-decoration: underline !important;
}
.account-form-block-style-2 .form-block-title .form-link:hover { text-decoration: none !important; }
.account-form-block-style-2 .form-block-title .form-link:first-child { float: left; }

.account-form-block-style-3 {
	border: 0;
	padding: 0 15px;
	border-radius: 0;
	background-color: transparent;
}
.account-form-block-style-3 .col-md-12 {
	padding: 25px 30px 0;
	background-color: #ffffff;
	border-left: 1px solid #efefef;
	border-right: 1px solid #efefef;
}
.account-form-block-style-3 .col-md-12.account-form-block-header {
	border: 0;
	padding-top: 0;
	background-color: transparent;
	border-bottom: 1px solid #efefef;
}
.account-form-block-style-3 .col-md-12.account-form-block-header a,
.account-form-block-style-3 .col-md-12.account-form-block-header img {
	width: 100%;
	max-width: 200px;
	text-align: center;
	display: inline-block;
}
.account-form-block-style-3 .checkbox {
	float: left;
	margin: 13px 0 0;
	margin-bottom: 30px;
}
.account-form-block-style-3 .checkbox:last-child {
	margin-top: 0;
	margin-bottom: 0;
}
.account-form-block-style-3 .btn {
	margin-top: 5px;
	margin-bottom: 30px;
}
.account-form-block-style-3 .checkbox + .btn {
	width: auto;
	float: right;
	margin-top: 5px;
	margin-bottom: 30px;
}
.account-form-block-style-3 .gfort-checkbox {
	color: #dddddd;
	border-color: #dddddd;
}
.account-form-block-style-3 .col-md-12.account-form-block-footer {
	border: 0;
	background-color: transparent;
	border-top: 1px solid #efefef;
}
.account-form-block-style-3 .form-group { margin-bottom: 0; }
.account-form-block-style-3 .col-md-12.account-form-block-footer .form-block-title {
	font-size: 14px;
	margin-bottom: 0;
	overflow: hidden;
	font-weight: 700;
}
.account-form-block-style-3 .form-block-title .form-link {
	color: #666666;
	margin-bottom: 0;
	text-decoration: underline !important;
}
.account-form-block-style-3 .form-block-title .form-link:hover { text-decoration: none !important; }
.account-form-block-style-3 .form-block-title .form-link:first-child { float: left; }
.account-form-block-style-3 p { margin-bottom: 10px; }

.account-form-block-style-4 {
	border: 0;
	padding: 0 15px;
	border-radius: 0;
	background-color: transparent;
}
.account-form-block-style-4 .col-md-12 {
	padding: 25px 30px 0;
	background-color: #ffffff;
	border-left: 1px solid #efefef;
	border-right: 1px solid #efefef;
}
.account-form-block-style-4 .col-md-12:last-child {
	padding-bottom: 30px;
	border-bottom: 1px solid #efefef;
}
.account-form-block-style-4 .col-md-12.account-form-block-header {
	border: 0;
	padding-top: 0;
	border-radius: 2px 2px 0 0;

	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center center;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.account-form-block-style-4 .col-md-12.account-form-block-header .form-block-title {
	margin: 0 auto;
	padding: 80px 0;
}
.account-form-block-style-4 .col-md-12.account-form-block-header h4 { margin: 0 auto; }
.account-form-block-style-4 .col-md-12.account-form-block-header .form-link {
	margin: 0;
	top: 15px;
	right: 15px;
	font-size: 14px;
	font-weight: 700;
	position: absolute;
	text-transform: uppercase;
}
.account-form-block-style-4 .form-group { margin-bottom: 0; }
.account-form-block-style-4 .btn { margin-top: 5px; }
.account-form-block-style-4 a.form-link {
	float: none;
	color: #666666;
	font-size: 14px;
	font-weight: 700;
	text-align: center;
	margin: 20px auto 0;
	display: inline-block;
}
.account-form-block-style-4 a.form-link:hover { text-decoration: underline !important; }";

echo $full_content;

?>