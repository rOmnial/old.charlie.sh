<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>

        <meta name="description" content="A 20 year old developer from London, who loves building websites, managing servers and learning new things.">
        <meta property="og:locale" content="en_EN">
        <meta property='og:type' content="website">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:description" content="A 20 year old developer from London, who loves building websites, managing servers and learning new things.">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:secure_url" content="{{ config('app.url') }}/img/opengraph.jpg">
        <meta property="og:image" content="{{ config('app.url') }}/img/opengraph.jpg">
        <meta name="twitter:card" content="summary_large_image" />

        <link rel="icon" type="image/png" href="{{ config('app.url') }}/favicon/favicon-32x32.png">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ config('app.url') }}/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ config('app.url') }}/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ config('app.url') }}/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ config('app.url') }}/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ config('app.url') }}/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ config('app.url') }}/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ config('app.url') }}/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ config('app.url') }}/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.url') }}/favicon/apple-icon-180x180.png">

        <link rel="icon" type="image/png" sizes="192x192" href="{{ config('app.url') }}/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.url') }}/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ config('app.url') }}/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.url') }}/favicon/favicon-16x16.png">

        <link rel="manifest" href="{{ config('app.url') }}/favicon/manifest.json">

        <meta name="msapplication-TileColor" content="#699AD8">
        <meta name="msapplication-TileImage" content="{{ config('app.url') }}/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#699AD8">

        {{-- Stylesheet --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Scripts --}}
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

        {{-- Fathom - beautiful, simple website analytics --}}
        <script src="{{ config('fathom.site_url') }}/script.js" data-site="{{ config('fathom.site_key') }}" defer></script>
        {{-- / Fathom --}}
    </head>
    <body class="p-10 mx-auto">

        <div class="flex flex-row-reverse lg:flex-row justify-between items-center py-10">
            <div class="lg:w-2/3 ml-4 lg:ml-0">
                <h1 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl lg:w-10/12">Hi! I'm Charlie, a Web & Software Developer based in London, England.</h1>
                <p class="flex space-x-3 mt-2 lg:mt-4">
                    <a href="https://github.com/heychazza">
                        <img src="https://img.shields.io/github/followers/heychazza?label=GitHub&amp;style=social" alt="HeyChazza GitHub">
                    </a>
                    <a href="https://twitter.com/heychazza">
                        <img src="https://img.shields.io/twitter/follow/heychazza?style=social&label=Twitter" alt="HeyChazza Twitter">
                    </a>
                </p>
            </div>
            <div class="lg:w-1/3">
                <img class="w-40 rounded" src="https://avatars.githubusercontent.com/u/47271716?v=4" alt="">
            </div>
        </div>

        <div class="lg:flex lg:justify-between">
            <div class="lg:w-7/12 prose">
                <h3>Background</h3>

                <p>I grew up in a generation where technology was around us, and so I picked up using a computer fairly quickly from a young age. My passion of LEGO allowed me to build things - However, I had an issue, I couldn't carry it with me without the fear of my hard work crumbling beneath me.</p>
                <p>This is where Minecraft changed that, at 10 years old I first found out about Minecraft and it's changed my life on a huge scale. It not only allowed me to take my creations anywhere, but also be able to share with others much easier and connect with school friends to play.</p>
                <p>This game became my gateway to computer programming, at 13 years old I started building server-sided modifications, which not only gave me experience, but taught me about financials and how my hobby could earn me money in-turn.</p>

                <h3>Current Progress</h3>
                <p>I have gone on to build innovative solutions that have been used by close to <span class="font-medium text-green-500">1 million</span> monthly visitors. Recently I sold my first successful business for a <span class="font-medium text-green-500">5-figure</span> amount - a Minecraft analytics platform for tracking rare items within the game. We kept our site free to use, and generated <span class="font-medium text-green-500">4 figures</span> per month by selling advertisement space on our sites.</p>
                <p>Prior to selling, I worked for an insurance company, where I built a fully-fledged fraud detection system that utilised a series of inter-connected checks to find risky customers. I am now going full-time building <a href="https://analyse.net">Analyse</a> - a Minecraft server analytics platform for providing in-depth community analysis.</p>

                <h3>Notable Achievements</h3>
                <ul>
                    <li>At 13: I dived into computer programming using Java.</li>
                    <li>At 14: I built a server-sided modification that reached <strong>40,000</strong> downloads.</li>
                    <li>At 15: I created a server-sided java modification that generated <strong>$10,000</strong>.</li>
                    <li>At 18: I sold my first domain name for <strong>$2,700</strong>.</li>
                    <li>At 19: I launched a project that reached <strong>200</strong> concurrent visitors, with <strong>800,000</strong> monthly visitors, in turn generating thousands per month.</li>
                    <li>At 20: I sold a successful business for a 5 figure sum, after running it for a year.</li>
                    <li class="italic">At xx, who knows what the future holds..</li>
                </ul>
            </div>
            <div class="lg:w-1/3 mt-5 lg:mt-0 prose">
                <h3>Projects</h3>
                <ul>
                    <li><a href="https://analyse.net">Analyse</a></li>
                    <li><a href="https://octanna.com">Octanna</a></li>
                    <li><a href="https://btcczone.com">BTCC Zone</a></li>
                    <li><a href="https://growyourserver.com">GrowYourServer</a></li>
                    <li><a href="https://thewildupdate.com">TheWildUpdate</a></li>
                </ul>

                <h3>Tech Stack</h3>
                <ul>
                    <li>PHP (Laravel)</li>
                    <li>Javascript (Vue)</li>
                    <li>Docker</li>
                </ul>
            </div>
        </div>
    </body>
</html>
