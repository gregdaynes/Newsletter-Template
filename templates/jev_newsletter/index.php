<?php $document = & JFactory::getDocument(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="<?php echo $document->language; ?>">
	<head>

		<style type="text/css" media="screen">
			body {
				background-color: #f2f2f2;
				text-align:center;
				font-family: helvetica;
			}

		    #layout {
		        border: 2px solid #ffffff;
				background:#ffffff;
	            margin: 10px auto;
				text-align:left;
		    }

			#header {
			    background-color: #ffffff;
				color: #33333;
		    	text-align: center;
		    }

		    .logo {
		    	font-size: 30px;
		    	font-weight: bold;
		    	font-family: helvetica;
		    	text-align: center;
		    }

		    .edition {
		    	font-size: 18px;
		    	font-style: italic;
		    	font-family: helvetica;
		    	text-align: center;
		    	display: block;
		    }

		    #content {
		        font-size: 12px;
		        color: #333333;
		        font-style: normal;
				font-weight: normal;
		        font-family: Helvetica;
				line-height: 1.25em;
		    }

		    #footer {
		        background-color: #eeeeee;
		        border-top: 0px none #ffffff;
		        padding: 20px;
				font-size: 10px;
		        color: #333333;
		        line-height: 100%;
		        font-family: Verdana;
		    }

		    #footer a {
		        color: #800000;
			    text-decoration: underline;
		        font-weight: normal;
		    }

		    a, a:link, a:visited {
		        color: #800000;
			    text-decoration: underline;
		        font-weight: normal;
		    }
			
		    a img, img, a, #header a {
		    	border: none;
				text-decoration: none;
		    }

			h1, h2, h3, h4 {
				font-size: 16px;
				text-align: left;
				border-bottom: 1px solid #bfbfbf;
				margin: 20px 10px 0;
				padding-bottom: 3px;
				text-transform: uppercase;
			}

			.image {
				padding-left: 10px;
				padding-top: 10px;
			}

			.title {
				padding-top: 10px;
				padding-left: 3px;
				padding-right: 10px;
				text-align: left;
			}

			.text {
				padding-left: 3px;
				padding-right: 6px;
				padding-top: 3px;
				text-align: left;
				display:  block;
			}

			#menu {
				line-height: 1.25em;
				padding: 10px;
				text-align: center;
			}

			#ads td, #leaderboard {
				background-color: #f2f2f2;
				text-align: center;
			}
			img {
				vertical-align:bottom
			}

		</style>
	</head>
	<body>
		<p><a href="*|ARCHIVE|*">Email not displaying correctly? View it in your browser.</a></p>

		<table id="layout" border="0" cellspacing="0" cellpadding="0" width="728">

			<!-- HEADER -->
			<tr>
				<td id="header" colspan="2" width="728" height="114">
					<jdoc:include type="modules" name="newsletter_header"  />
				</td>
			</tr>
			<!-- /HEADER -->

			<!-- LEADERBOARD -->
			<tr>
				<td id="leaderboard" colspan="2" width="728" height="90">
					<jdoc:include type="modules" name="newsletter_leaderboard"  />
				</td>
			</tr>
			<!-- /LEADERBOARD -->

			<!-- BODY -->
			<tr>
				<!-- ARTICLES -->
				<td id="content" mc:edit="content" width="467" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="467">
						<jdoc:include type="modules" name="newsletter_articles" style="content" />
					</table>
				</td>
				<!-- /ARTICLES -->

				<!-- ADVERTISEMENTS -->
				<td width="253" valign="top">
					<table id="ads">
						<jdoc:include type="modules" name="newsletter_advertising"  />
					</table>
				</td>
				<!-- /ADVERTISEMENTS -->

			</tr>
			<!-- /BODY -->

			<!-- MENU -->
			<tr>
				<td id="menu" colspan="2">
					<jdoc:include type="modules" name="newsletter_menu"  />
				</td>
			</tr>
			<!-- /MENU -->

			<!-- FOOTER -->
			<tr>
				<td id="footer" mc:edit="footer" colspan="2">
				    <p><a href="*|ARCHIVE|*" class="adminText">view email in browser</a> | <a href="*|UNSUB|*">Remove me from this list</a> | <a href="*|UPDATE_PROFILE|*">Update your profile</a> | <a href="*|FORWARD|*">Forward to a friend</a></p>

					<p>*|LIST:DESCRIPTION|*</p>

				    <p>*|HTML:LIST_ADDRESS_HTML|*</p>
				    <p>Copyright (C) 2010 Inside Golf Inc. All rights reserved.</p>
				    
				    <jdoc:include type="modules" name="newsletter_footer" />
				</td>
			</tr>
			<!-- /FOOTER -->
		</table>
	</body>
</html>