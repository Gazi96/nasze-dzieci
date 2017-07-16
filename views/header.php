<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->title; ?> - Stowarzyszenie Nasze Dzieci</title>
        <link rel="stylesheet" href='<?php echo URL; ?>public/css/default.css'/>
        <link rel="stylesheet" href='<?php echo URL; ?>public/fontello/css/fontello.css'/>
    </head>
    <body>
      
        <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
                </script>
      
       
        <header id="header">
            <nav>
                
                <div id="top-nav">
                    <div id="logo">
                        <img src="public/img/opp.png" alt="">       
                    </div>
                    
                    <h1>STOWARZYSZENIE NASZE DZIECI</h1>
                    <h2>KRS 0321775696</h2>
                    <span>1<i>%</i></span>
                    <i class="icon-facebook"></i>
                    
                </div>
                
                <div id="nav">
                    <ul>
                        <li><a href="<?php echo URL; ?>aktualnosci">Aktualności</a></li>
                        <li><a href="<?php echo URL; ?>o-nas">O nas</a>
                            <ul>
                                <li><a href="<?php echo URL; ?>dzialania">Nasze działania</a></li>
                                <li><a href="<?php echo URL; ?>statut">Statut</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo URL; ?>mozesz-pomoc">Jak możesz pomóc</a></li>
                        <li><a href="<?php echo URL; ?>partnerzy">Partnerzy</a></li>
                        <li><a href="<?php echo URL; ?>kontakt">Kontakt</a></li>
                    </ul>
                </div>
            </nav>
        </header>
