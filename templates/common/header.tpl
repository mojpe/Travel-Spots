
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>{{title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/theme-cobalt.css" rel="stylesheet" type="text/css" media="all"/>
        <!---  -->
        <link href="/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/bootstrap-editable.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
        <!--[if gte IE 9]>
                <link rel="stylesheet" type="text/css" href="css/ie9.css" />
                <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    </head>
    <body>
        <div class="loader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

        <div class="nav-container">
        <nav class="top-bar overlay-bar">
            <div class="container">

                <div class="row utility-menu">
                    <div class="col-sm-12">
                        <div class="utility-inner clearfix">
                            <span class="alt-font"><i class="icon icon_pin"></i> 300 Collins St Melbourne</span>
                            <span class="alt-font"><i class="icon icon_mail"></i> hello@pivot.net</span>

                            <div class="pull-right">
                                {% if session.isLogged %}
                                <a href="/logout" class="btn btn-primary btn-white btn-xs">Logout</a>
                                {% else %}
                                <a href="/login" class="btn btn-primary btn-white btn-xs">Login</a>
                                <a href="/signup" class="btn btn-primary btn-filled btn-xs">Signup</a>
                                {% endif %}
                                <a href="#" class="language"><img alt="English" src="/img/english.png"></a>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="row nav-menu">
                    <div class="col-md-2 col-sm-3 columns">
                        <img class="logo logo-light" alt="Logo" src="/img/logo-light.png">
                        <img class="logo logo-dark" alt="Logo" src="/img/logo-dark.png">
                    </div>

                        <div class="col-md-10 col-sm-9 columns">
                            <ul class="menu">
                                <li><a href="/">Home</a></li>

                                {% if session.isLogged %}
                                <li class="has-dropdown"><a href="/account">Account</a>
                                    <ul class="subnav">
                                        <li><a href="/account/update">Update Details</a></li>
                                        <li><a href="/account/password">Change Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="/articles">Articles</a></li>
                                <li><a href="/newArticle">New Article</a></li>
                                    {% endif %}
                                <!--START OF DROPDOWN LINKS
                                <li class="has-dropdown"><a href="#">Dropdown</a>
                                        <ul class="subnav">
                                                <li><a href="#">Example</a></li>
                                                <li><a href="#">Example</a></li>
                                                <li><a href="#">Example</a></li>
                                                <li><a href="#">Example</a></li>
                                        </ul>
                                </li>
                                <li class="has-dropdown"><a href="#">Half Width</a>
                                        <div class="subnav subnav-halfwidth">
                                                <div class="col-sm-6">
                                                        <h6 class="alt-font">Subnav Title</h6>
                                                        <ul class="subnav">
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                        </ul>	
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                        <h6 class="alt-font">Subnav Title</h6>
                                                        <ul class="subnav">
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                        </ul>	
                                                </div>
                                        </div>
                                </li>
                                <li class="has-dropdown"><a href="#">Fullwidth</a>
                                        <div class="subnav subnav-fullwidth">
                                                <div class="col-md-3">
                                                        <h6 class="alt-font">Subnav Title</h6>
                                                        <ul class="subnav">
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                        </ul>	
                                                </div>
                                                
                                                <div class="col-md-3">
                                                        <h6 class="alt-font">Subnav Title</h6>
                                                        <ul class="subnav">
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                        </ul>	
                                                </div>
                                                
                                                <div class="col-md-3">
                                                        <h6 class="alt-font">Subnav Title</h6>
                                                        <ul class="subnav">
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                        </ul>	
                                                </div>
                                                
                                                <div class="col-md-3">
                                                        <h6 class="alt-font">Subnav Title</h6>
                                                        <ul class="subnav">
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                                <li><a href="#">Example</a></li>
                                                        </ul>	
                                                </div>
                                        </div>
                                </li>
                                END OF DROPDOWN LINKS--> 

                            </ul>

                            <ul class="social-icons text-right">
                                <li>
                                    <a href="#">
                                        <i class="icon social_twitter text-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon social_facebook text-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mobile-toggle">
                        <i class="icon icon_menu"></i>
                    </div>

                </div>
            </nav>

        </div>

        <div class="main-container">