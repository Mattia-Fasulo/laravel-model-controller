<?php

$linkMenu = [
    [
        'title' => 'About',
        'href' => '#',
    ],
    [
        'title' => 'Features',
        'href' => '#',
    ],
    [
        'title' => 'Pricing',
        'href' => '#',
    ],
    [
        'title' => 'About',
        'href' => '#',
    ],

];

?>


<header>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="d-flex justify-content-between collapse navbar-collapse" id="navbar">
                <div class="logo">
                    <h1>Boolflix</h1>
                </div>
                <div>
                    <ul class="navbar-nav flex-row mb-2 mb-lg-0">
                        @foreach($linkMenu as $link)
                            <li class="nav-item">
                            <a class="nav-link" href="{{$link['href']}}">{{ $link['title'] }}</a>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
    </div>
    </nav>
    </div>
</header>
