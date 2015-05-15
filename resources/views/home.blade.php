@extends('index')

@section('content')
    <body class="landing">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.html">Spectral</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="generic.html">Generic</a></li>
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="#">Sign Up</a></li>
                                <li><a href="#">Log In</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <h2>Más Huerto <br> Más Casa</h2>
                <p>HARVESTING ENCOUNTERS, <br>
                    KNITTING SOCIETY</p>
                <ul class="actions">
                    <li><a href="#" class="button special">Activate</a></li>
                </ul>
            </div>
            <a href="#one" class="more scrolly">Learn More</a>
        </section>

        <!-- One -->
        <section id="one" class="wrapper style1 special">
            <div class="inner">
                <header class="major">
                    <h2>Arcu aliquet vel lobortis ata nisl<br />
                        eget augue amet aliquet nisl cep donec</h2>
                    <p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
                        fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
                </header>
                <ul class="icons major">
                    <li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
                    <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                    <li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
                </ul>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper alt style2">
            <section class="spotlight">
                <div class="image"><img src="{{ asset('images/pic01.jpg') }}" alt="" /></div><div class="content">
                    <h2>Magna primis lobortis<br />
                        sed ullamcorper</h2>
                    <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="{{ asset('images/pic02.jpg') }}" alt="" /></div><div class="content">
                    <h2>Tortor dolore feugiat<br />
                        elementum magna</h2>
                    <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="{{ asset('images/pic03.jpg') }}" alt="" /></div><div class="content">
                    <h2>Augue eleifend aliquet<br />
                        sed condimentum</h2>
                    <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                </div>
            </section>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper style3 special">
            <div class="inner">
                <header class="major">
                    <h2>Accumsan mus tortor nunc aliquet</h2>
                    <p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
                        fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
                </header>
                <ul class="features">
                    <li class="icon fa-paper-plane-o">
                        <h3>Arcu accumsan</h3>
                        <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                    </li>
                    <li class="icon fa-laptop">
                        <h3>Ac Augue Eget</h3>
                        <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                    </li>
                    <li class="icon fa-code">
                        <h3>Mus Scelerisque</h3>
                        <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                    </li>
                    <li class="icon fa-headphones">
                        <h3>Mauris Imperdiet</h3>
                        <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                    </li>
                    <li class="icon fa-heart-o">
                        <h3>Aenean Primis</h3>
                        <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                    </li>
                    <li class="icon fa-flag-o">
                        <h3>Tortor Ut</h3>
                        <p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA -->
        <section id="cta" class="wrapper style4">
            <div class="inner">
                <header>
                    <h2>Arcue ut vel commodo</h2>
                    <p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
                </header>
                <ul class="actions vertical">
                    <li><a href="#" class="button fit special">Activate</a></li>
                    <li><a href="#" class="button fit">Learn More</a></li>
                </ul>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Untitled</li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('/js/skel.min.js') }}"></script>
    <script src="{{ asset('/js/init.js') }}"></script>

    </body>
@endsection
