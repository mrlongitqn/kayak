<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <!--header menu-->
        <header id="fh5co-header-section" class="sticky-banner" style="background: #77a921">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="/">
                            <img src="/images/logo.png" />
                            <span class="text-logo">
								SONG
								<span class="logo-text-small">
									ADVENTURES
								</span>
                </div>
                </a></h1>
                <!-- START #fh5co-menu-wrap -->
                <div class="col-md-3 f-right">
                    <p class="fh5co-social-icons social-top">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100011444329204" target="_blank"><i class="icon-facebook2"></i></a>
                        <a href="https://www.instagram.com/hoiankayaktours/" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-pinterest2"></i></a>
                    </p>
                </div>
            </div>
            <div class="clear"></div>

    </div>

    <div class="row" style="background:#4e7013">
        <div class="container">
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                    <li><a href="/">HOME</a></li>
                    <li>
                        <a  href="/alltours" class="fh5co-sub-ddown">TOURS</a>
                        <ul class="fh5co-sub-menu">
                            @if(!empty($category_menu))
                                @foreach($category_menu as $category)
                                    <li><a href="/tour/{{$category['id']}}">{{$category['name']}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li><a href="#">SERVICES</a>
                    </li>
                    <li><a href="/projects">RESPONSIBLE TRAVEL</a>
                    </li>
                    <li><a href="#">CONTACT US</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </header>