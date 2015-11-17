

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		
		<link type="image/ico" rel="shortcut icon" href="//resources.esri.com/favicon.ico">
		<link type="image/ico" rel="icon"  href="//resources.esri.com/favicon.ico">
		
		<!-- 
			To correctly reference your Map Series in search engine:
			 - create and fill out extensively an ArcGIS Online item that link to your final application
			 - edit the following four tags as well as the title tag above on line 4
		-->
		<meta name="description" content="This story map was created with the Story Map Series application in ArcGIS Online.">
		
		<!-- Facebook sharing -->
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="Story Map Series"/>
		<meta property="og:description" content="This story map was created with the Story Map Series application in ArcGIS Online."/>
		<meta property="og:image" content="resources/common/icons/esri-globe.png"/>
		
		<!-- 
			This application is released under the Apache License V2.0 by Esri http://www.esri.com/
			Checkout the project repository on GitHub to access source code, latest revision, developer documentation, FAQ and tips
			https://github.com/Esri/map-series-storytelling-template-js
		-->
		
		<script type="text/javascript">
			//-------------------------------------------------------------------------------------------
			//     Application configuration (ignored on ArcGIS Online, Portal and during development)
			//-------------------------------------------------------------------------------------------
			var configOptions = {
				// Enter an application ID created through the Map Series builder 
				appid: "bc1f0f52673d435286b474d3cb5424bf",
				// Optionally to secure Series's access, use an OAuth application ID (example: 6gyOg377fLUhUk6f)
				// User will need to sign-in to access the viewer even if your application is public
				oAuthAppId: "",
				// Optionally to be able to use the appid URL parameter, configure here the list of application author 
				//  whose application are allowed to be viewed by this Map Series deployment
				// This is the Portal username of the Series owner (e.g. ["user1"], ["user1", "user2"])
				authorizedOwners: [""]
			};
			// Optionally sharing and proxy URLs can be configured in app/tpl-config.js. This is only required  
			//  when the webmap is not hosted on ArcGIS Online or a Portal for ArcGIS instance and the application isn't deployed as /home/MapSeries/ or /apps/MapSeries/. 
			// Optionally Bing Maps key, Geometry and Geocode service's URLs can be configured in app/commonConfig.js. This is only required 
			//  if the Organization or Portal for ArcGIS instance default configuration has to be overwritten. If the application is deployed 
			//  on Portal for ArcGIS as /home/MapSeries/ or /apps/MapSeries/, that configuration is available in ../commonConfig.js
		</script>
		
		<!--
		
			Edit below at your own risk
		
		-->
		
		<script type="text/javascript">
			var app = {
				version: '1.1.0',
				pathJSAPI: '//js.arcgis.com/3.13/'
			};
		</script>
	</head>
	<body class="claro">
		<style>
			/* CUSTOM CSS RULES */
		</style>
		
		<!-- Builder top panel is injected here -->
		<div id="builderPanel" class="hide mainViewAboveMap"></div>
		
		<!-- Header -->
		<div id="header" class="mainViewAboveMap">
			<!-- Mobile header -->
			<div id="headerMobile" class="headerMobile mobileView">
				<div class="header">
					<div class="titleArea">
						<span class="glyphicon glyphicon-th-list menu-btn"></span>
						<div class="title"></div>
					</div>
					<div class="rightArea">
						<span class="glyphicon glyphicon-share share-btn share-all"></span>
					</div>
				</div>
				<div class="menu"></div>
			</div>
			<!-- Desktop header -->
			<div id="headerDesktop" aria-hidden="true">
				<div class="rightArea">
					<div class="linkSocialContainer">
						<button type="button" class="switchBuilder btn btn-xs btn-primary" tabindex="-1"></button>
						<span class="linkContainer"></span>
						<span class="shareBtns">
							<i class="shareIcon blackHover share_facebook icon-facebook-squared" title="Share on Facebook"></i>
							<i class="shareIcon blackHover share_twitter icon-twitter" title="Share on Twitter"></i>
							<i class="shareIcon blackHover share_bitly icon-link" title="Share a short link"></i>
						</span>
					</div>
					<div class="logoContainer">
						<table class="logoContainerInner">
							<tr>
								<td class="logoWrapper">
									<a class="logoLink" target="_blank" tabindex="-1">
										<img class="logoImg"/>
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="textArea">
					<h1 class="title" tabindex="0"></h1>
					<h2 class="subtitle" tabindex="0"></h2>
				</div>
				<div class="builder-mask"></div>
			</div>
		</div>
		
		<!-- Tab/bullet navigation bar -->
		<div id="nav-bar" class="mainViewAboveMap"></div>
		
		<!-- Content -->
		<div id="contentPanel" class="mobileView">
			<table class="containerPanelInner">
				<tr>
					<!-- Side Accordion panel -->
					<td id="accordionPanel" class="accordionPanel">
						<div class="content textEditorContent"></div>
						<div class="builder builder-content-panel">
							<div class="builder-content-panel-group builder-add">
								<div class="builder-btn"></div>
								<div class="builder-lbl"></div>
							</div>
							<div class="builder-content-panel-group builder-organize">
								<div class="builder-btn"></div>
								<div class="builder-lbl"></div>
							</div>
						</div>
						<div class="builder-mask"></div>
					</td>
					<!-- Main Stage -->
					<td id="mainStagePanel">
						<div id="mainStagePanelInner">
							<!-- Maps and media are injected here -->
							<div class="medias"></div>
							<!-- Loading -->
							<div id="mainStageLoadingIndicator" class="loadingIndicator">
							<div class="load-indicator icon-spin1 animate-spin"></div>
								<script>
									// Alternate loader on IE and FF
									if (navigator.userAgent.indexOf('MSIE') !== -1 
											|| navigator.appVersion.indexOf('Trident/') > 0
											|| navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
										document.write('\
											<style>\
										 		.load-indicator { display: none; }\
										 		.loadingIndicator { opacity: 1.0; margin-top: -60px; margin-left: -32px; }\
										 	</style>\
										    <img src="resources/tpl/viewer/icons/loading-light.gif" />');
									}
								</script>
							</div>
							<!-- Mobile info button -->
							<div id="mobileInfoBtn" class="mobileInfoBtn"></div>
							<!-- Builder -->
							<div id="builderQuotes"></div>
							<div id="builderLanding"></div>
							<div id="builderHelp" class="centerAlignOnFloat"></div>
						</div>
						
						<!-- Description and legend floating panel -->
						<div id="descLegendPanel" class="descLegendPanel" tabindex="0">
							<div class="descLegendPanelInner">
								<div class="backdrop"></div>
								<div class="descriptions textEditorContent"></div>
								<div class="legends" aria-hidden="true"></div>
								<div class="builder-mask"></div>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>

		<!-- Mobile footer -->
		<div id="footerMobile" class="footerMobile mobileView mainViewBelowMap">
			<!-- Mobile view footer is injected here -->
		</div>		
		
		<!-- Loading -->
		<style>
			#loadingOverlay {
				position: absolute; 
				top: 0; 
				left: 0; 
				z-index: 1100; 
				width: 100%; 
				height: 100%; 
				overflow: hidden; 
				background-color: #E5E5E5; 
				-webkit-box-shadow: inset 0px 0px 82px 19px rgba(0,0,0,0.3); 
				-moz-box-shadow: inset 0px 0px 82px 19px rgba(0,0,0,0.3); 
				box-shadow: inset 0px 0px 82px 19px rgba(0,0,0,0.3);
			}
			
			@keyframes fadein { from { opacity: 0; } to { opacity: 1; } }
			@-moz-keyframes fadein { from { opacity: 0; } to { opacity: 1; } }
			@-webkit-keyframes fadein { from { opacity: 0; } to { opacity: 1; } }
			@-ms-keyframes fadein { from { opacity: 0; } to { opacity: 1; } }
			@-o-keyframes fadein { from { opacity: 0; } to { opacity: 1; } }
			
			@keyframes fadeout { from { opacity: 1; } to { opacity: 0; } }
			@-moz-keyframes fadeout { from { opacity: 1; } to { opacity: 0; } }
			@-webkit-keyframes fadeout { from { opacity: 1; } to { opacity: 0; } }
			@-ms-keyframes fadeout { from { opacity: 1; } to { opacity: 0; } }
			@-o-keyframes fadeout { from { opacity: 1; } to { opacity: 0; } }
			
			#loadingOverlay.fadeOut {
				-webkit-animation: fadeout 1.1s;
				-moz-animation: fadeout 1.1s;
				-ms-animation: fadeout 1.1s;
				-o-animation: fadeout 1.1s;
				animation: fadeout 1.1s;
				-webkit-animation-fill-mode:forwards;
				-moz-animation-fill-mode:forwards;
				animation-fill-mode:forwards;
			}
			
			#loadingIndicator {
				position: fixed;
				top: 50%;
				left: 50%;
				z-index: 1101;
			}
			
			.loadingIndicator {
				width: 110px;
				height: 80px;
				margin-left: -60px;
				margin-top: -80px;
				color: #000;
			}
			
			.loadingIndicator.fadeOut {
				opacity: 1.0;
				-webkit-animation: initial;
				-moz-animation: initial;
				-ms-animation: initial;
				-o-animation: initial;
				animation: initial;
				-webkit-animation-fill-mode: initial;
				-moz-animation-fill-mode: initial;
				animation-fill-mode: initial;
			}
			
			.animate-spin {
				display: inline-block;
				font-size: 80px;
				line-height: 1;
				font-family: sans-serif  !important;
			}
			
			/*
			 * Inlining of resources/tpl/viewer/font/font/css/fontello.css and animation.css
			 */
			@font-face{font-family:'fontello';src:url(resources/tpl/viewer/font/font/fontello.eot?22851922);src:url(resources/tpl/viewer/font/font/fontello.eot?22851922#iefix) format("embedded-opentype"),url(resources/tpl/viewer/font/font/fontello.woff?22851922) format("woff"),url(resources/tpl/viewer/font/font/fontello.ttf?22851922) format("truetype"),url(resources/tpl/viewer/font/font/fontello.svg?22851922#fontello) format("svg");font-weight:400;font-style:normal}[class^="icon-"]:before,[class*=" icon-"]:before{font-family:"fontello";font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em}.icon-spin1:before{content:'\e800'}.icon-link:before{content:'\e801'}.icon-facebook-squared:before{content:'\e802'}.icon-twitter:before{content:'\e803'}.animate-spin{-moz-animation:spin 2s infinite linear;-o-animation:spin 2s infinite linear;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear;display:inline-block}@-moz-keyframes spin{0%{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(359deg);-o-transform:rotate(359deg);-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@-webkit-keyframes spin{0%{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(359deg);-o-transform:rotate(359deg);-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@-o-keyframes spin{0%{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(359deg);-o-transform:rotate(359deg);-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@-ms-keyframes spin{0%{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(359deg);-o-transform:rotate(359deg);-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes spin{0%{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(359deg);-o-transform:rotate(359deg);-webkit-transform:rotate(359deg);transform:rotate(359deg)}}
		</style>
		
		<script>
			// Loading indicator get fade effect except on IE and FF
			if ( ! (navigator.userAgent.indexOf('MSIE') !== -1 
					|| navigator.appVersion.indexOf('Trident/') > 0
					|| navigator.userAgent.toLowerCase().indexOf('firefox') > -1) ) {
				document.write('<style>.loadingIndicator {\
					opacity: 0.0;\
					-webkit-animation: fadein 3s;\
					-moz-animation: fadein 3s;\
					-ms-animation: fadein 3s;\
					-o-animation: fadein 3s;\
					animation: fadein 3s;\
					-webkit-animation-fill-mode: forwards;\
					-moz-animation-fill-mode: forwards;\
					animation-fill-mode: forwards;\
				}</style>');
			}
		</script>
		
		<div id="loadingOverlay"></div>
		<div id="loadingIndicator" class="loadingIndicator">
			<div class="load-indicator icon-spin1 animate-spin"></div>
			<script>
				// Alternate loader on IE and FF
				if (navigator.userAgent.indexOf('MSIE') !== -1 
						|| navigator.appVersion.indexOf('Trident/') > 0
						|| navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
					document.write('\
						<style>\
					 		.load-indicator { display: none; }\
					 		.loadingIndicator { opacity: 1.0; margin-top: -60px; margin-left: -32px; }\
					 	</style>\
						<img src="resources/tpl/viewer/icons/loading-light.gif" />');
				}
			</script>
		</div>
		<div id="loadingMessage"></div>
		
		<!-- Share dialog -->
		<div class="modal fade shareDialog" id="shareDialog" role="dialog" data-backdrop="static" tabindex="-1"></div>
		
		<!-- Builder views are injected here -->
		<div id="builder-views"></div>
		
		<!-- Fatal error box -->
		<div id="fatalError">
			<table border="0">
				<tr>
					<td width="70px" align="center" id="fatalError-icon"></td>
					<td id="fatalError-msg">
						<b class="error-title"></b>
						<p class="error-msg"></p>
					</td>
				</tr>
			</table>
		</div>
		
		<script type="text/javascript" src="app/main-config.js"></script>
		<script type="text/javascript">
			require(["dojo/topic"], function(topic) {
				/*
				 * Custom Javascript to be executed while the application is initializing goes here
				 */
				
				// The application is ready
				topic.subscribe("tpl-ready", function(){
					/*
					 * Custom Javascript to be executed when the application is ready goes here
					 */
				});
			});
		</script>
	</body>
</html>
