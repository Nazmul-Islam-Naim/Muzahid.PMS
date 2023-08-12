<style>
    .mobile-menu-area .mean-nav {
    background: #186b56 none repeat scroll 0 0;
}

.mainmenu ul.sub-menu {
    background-color: #ffffff;
    border-top: 1px solid #1bb4b9;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    left: -23px;
    margin: 0;
    padding: 14px 21px 16px;
    position: absolute;
    text-align: left;
    top: 30px;
    -webkit-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: center top 0;
    -ms-transform-origin: center top 0;
    transform-origin: center top 0;
    -webkit-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
    visibility: hidden;
    width: 261px;
    z-index: -99;
}
.mainmenu ul#nav li ul.sub-menu > li a {
    color: #444444;
    display: block;
    font-size: 13px;
    font-weight: 300;
    line-height: 33px;
    text-transform: capitalize;
}

.menu {
    display: inline-block;
    position: relative;
}
.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    padding: 10px;
}
.menu:hover .submenu {
    display: block;
}
/* Additional submenus */
.subsubmenu {
    width:200px;
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    background-color: #f9f9f9;
    box-shadow: 0px 0px 10px 0px rgb(192, 192, 192);
    padding: 10px;
}
.submenu:hover .subsubmenu {
    display: block;
}
</style>
<!--Header Area Start-->
<header>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="">
                <a href="#"><img src="{{asset('custom/website/img/header_pppo.jpg')}}" width="100%" alt="PPPA"></a>
            </div>
        </div>
    </div>
<!--Logo Mainmenu Start-->
<div class="row" style="background-color: #186b59; border: 1px solid white; text-align:center">
    <div class="col-lg-12 d-none d-lg-block">
        <div class="mainmenu-area" style="padding:0px; float: unset;">
            <div class="mainmenu">
                <nav>
                    <ul id="nav">
                        <li class="current"><a style="line-height:30px; color:white; text-decoration:none" href="{{route('web-project-list')}}">Projects</a></li>
                        <li class="current"><a style="line-height:30px; color:white; text-decoration:none" href="{{route('sectors')}}">Sector</a></li>
                        <li class="current"><a style="line-height:30px; color:white; text-decoration:none" href="{{route('ministries')}}">Ministry</a></li>
                        <li><a style="line-height:30px; color:white; text-decoration:none" href="#">Phases<i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li class="current"><a  style="text-decoration:none"  href="{{route('phase','identification-phase')}}">Identitification Phase</a></li>
                                <li class="current"><a  style="text-decoration:none"  href="{{route('phase','development-phase')}}">Development Phase</a></li>
                                <li class="current"><a  style="text-decoration:none"  href="{{route('phase','procurement-phase')}}">Procurement Phase</a></li>
                                <li class="current"><a  style="text-decoration:none"  href="{{route('phase','award-phase')}}">Award Phase</a></li>
                                <li class="current submenu">
                                    <a style="text-decoration:none;"  href="{{route('phase','implementation-phase')}}">
                                        Implementation Phase<i class="fa fa-angle-right" style="margin-left:80px"></i>
                                    </a>

                                    <ul class="subsubmenu">
                                        <li class="current"><a  style="text-decoration:none"  href="{{route('cp-obligations')}}">CP Obigations</a></li>
                                        <li class="current"><a  style="text-decoration:none"  href="{{route('construction-begins')}}">Constructions</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="current"><a style="line-height:30px; color:white; text-decoration:none" href="{{route('glossary')}}">PPP Glossary</a></li>
                        <li class="current"><a style="line-height:30px; color:white; text-decoration:none" href="{{route('faq')}}">FAQ</a></li>
                        <li class="current"><a style="line-height:30px; color:white; text-decoration:none" href="{{route('login')}}">Sign in</a></li>
                    </ul>
                </nav>
            </div>
        </div>    
    </div>
</div>
<!--End of Logo Mainmenu-->
<!-- Mobile Menu Area start -->
<div class="mobile-menu-area" style="background: #186b56">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="current"><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="{{route('web-project-list')}}">Projects</a></li>
                            <li class="current"><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="{{route('sectors')}}">Sector</a></li>
                            <li class="current"><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="{{route('ministries')}}">Ministry</a></li>
                            <li><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="#">Phases<i class="fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="current"><a  style="text-decoration:none ; background:#eee; color:#186B59;"  href="{{route('phase','identification-phase')}}">Identitification Phase</a></li>
                                    <li class="current"><a  style="text-decoration:none ; background:#eee; color:#186B59;"  href="{{route('phase','development-phase')}}">Development Phase</a></li>
                                    <li class="current"><a  style="text-decoration:none ; background:#eee; color:#186B59;"  href="{{route('phase','procurement-phase')}}">Procurement Phase</a></li>
                                    <li class="current"><a  style="text-decoration:none ; background:#eee; color:#186B59;"  href="{{route('phase','award-phase')}}">Award Phase</a></li>
                                    <li class="current submenu">
                                        <a style="text-decoration:none ;background:#98A4FF; color:#fff;"  href="{{route('phase','implementation-phase')}}">
                                            Implementation Phase<i class="fa fa-angle-right" style="margin-left:80px"></i>
                                        </a>
    
                                        <ul class="subsubmenu">
                                            <li class="current"><a  style="text-decoration:none ; background:#eee; color:#186B59;"  href="{{route('cp-obligations')}}">CP Obigations</a></li>
                                            <li class="current"><a  style="text-decoration:none ; background:#eee; color:#186B59;"  href="{{route('construction-begins')}}">Constructions</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="current"><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="{{route('glossary')}}">PPP Glossary</a></li>
                            <li class="current"><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="{{route('faq')}}">FAQ</a></li>
                            <li class="current"><a style="line-height:30px; background:#eee; color:#186B59; text-decoration:none" href="{{route('login')}}">Sign in</a></li>
                        </ul>
                    </nav>
                </div>					
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end -->  
</header>
<!--End of Header Area-->