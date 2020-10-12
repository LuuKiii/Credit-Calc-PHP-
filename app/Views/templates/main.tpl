<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
    <link rel="stylesheet" href="{$conf->app_url}/css/default.css">	
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href="{$conf->app_url}/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" >
    
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
    
<div id="header-wrapper">
	<div id="header" class="container">


		<div id="menu">
			<ul>
                               <li ><a href="{$conf->action_root}Ad" title="">Reklama</a></li>
				<li ><a href="{$conf->action_root}" title="">Kalkulator</a></li>
                                <li><a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a></li>
			</ul>
		</div>
	</div>
</div>
    
<div class="wrapper">
{block name=content}  {/block}
</div><!-- content -->

	<div id="copyright">
	<p>&copy; Kalkulator | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>