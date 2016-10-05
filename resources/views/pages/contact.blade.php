<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Suzana Zera blog</title>
        <meta name="viewport" content="width=device-width">

        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <!-- End Include All CSS -->


        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicona.png">
        <!-- Favicon Icon -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]--> 
    </head>
    <body class="animat">
        <div id="page">
            <div class="leftMenu">
                <div class="leftmenuHead">
                    <div class="logoleft pull-left">
                        <a href="#"><img src="images/logoleft.png" alt=""></a>
                    </div>
                    <a href="#" class="leftclose pull-right">x</a>
                    <div class="clearfix"></div>
                </div>
                <div class="leftmenuScroll">
                    <nav class="leftmainnav">
                        <ul>
                            <li><a href="index.html">Domov</a></li>
                            <li class="has-menu-items"><a href="#">Objave</a>
                                <ul class="sub-menu">
                                    <li><a href="blog_kategorija.html">Kategorije</a></li>
                                    <li><a href="arhiv.html">Arhiv</a></li>
                                </ul>
                            </li>
							<li><a href="about_me.html">O meni</a>
                            </li>
                            <li><a href="contact.html">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="socialleft">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <!--Header Top Start -->
            <section class="headerTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-2">
                            <div class="menuBar" id="leftTrigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-8 text-center">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-2 text-right">
                            <div class="search">
                                <a href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                                <form action="#" method="post" class="searchForm">
                                    <input type="search" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Header Top End -->
            <!--Header Start-->
            <header class="header">
                <div class="container">
                    <div class="headerIn">
                        <div class="row">
                            <div class="col-lg-8 col-sm-9 col-xs-12 pull-left noPaddingRight">
                                <nav class="mainNav">
                                    <div class="menuBar hidden-lg hidden-md">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <ul>
                                        <li class="has-menu-items"><a href="index.html">Domov</a></li>
                                        <li class="has-menu-items"><a href="javascript:void('0')">Objave</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog_kategorija.html">Kategorije</a></li>
                                                <li><a href="arhiv.html">Arhiv</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-menu-items"><a href="o_meni.html">O meni</a>
                                        </li>
										<li class="has-menu-items"><a href="kontakt.html">Kontakt</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-sm-3 col-xs-8 pull-right text-right">
                                <div class="socialHeader">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!--Header End-->
            <section class="mainContent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
									<div class="slider noMarginBottom">
                                <img src="images/author/author_01.jpg" alt="">
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="widgetTitle text-capitalize">Pišite mi</h3>
                                </div>
                            </div>
                            <div class="row">

                                {{ Form::open(array('route'=>'contact.send', 'method'=>'POST', 'class'=>'contactForm'))}}

                                <div class="col-lg-6">
                                {{ Form::label('name', 'Ime:')}}
                                {{ Form::text('name', null, array('class'=>'form-control required',  'maxlength'=>"255"))}}
                                </div>

                                <div class="col-lg-6">
                                {{ Form::label('email', 'Email naslov:')}}
                                {{ Form::email('email', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255")) }}
                                </div>
                                <div class="col-lg-12">
                                {{ Form::label('subject', 'Zadeva:')}}
                                {{ Form::text('subject', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>"255"))}}
                                </div>
                                <div class="col-lg-12">
                                {{ Form::label('body', 'Vsebina:')}}
                                {{ Form::textarea('body', null, array('class'=>'form-control', 'required'=>''))}}
                                </div>
                                {{ Form::submit('Pošlji sporočilo', array('class'=>'commentSubmit', 'style'=>'margin-top: 20px'))}}
                                    
                                {{ Form::close() }}
                                {{--
                                <form action="#" method="get" class="contactForm" id="contactForm">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Ime*" id="con_name" name="con_name" class="required">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email naslov*" id="con_email" name="con_email" class="required">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Tema" id="con_sub" class="required">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Vprašanje" id="con_message" name="con_message" class="required"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="commentSubmit" id="con_submit">Pošlji sporočilo</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="paginations">

            </section>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 text-center">
                            <div class="footLogo">
                                <a href="#">
                                    <img src="images/logo2.png" alt="">
                                </a>
                            </div>
                            <p class="copyrightText">Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam et purus at lectus tempus <span>Copyright © 2016 Suzana Zera. Vse pravice pridržane</span></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Include All JS -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
    </body>
</html>