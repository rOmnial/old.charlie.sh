<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Charlie J</title>

        <meta name="description" content="A 20 year old developer from London, who loves building websites, managing servers and learning new things.">
        <meta property="og:locale" content="en_EN">
        <meta property='og:type' content="website">
        <meta property="og:title" content="Charlie J">
        <meta property="og:site_name" content="Charlie J">
        <meta property="og:description" content="A 20 year old developer from London, who loves building websites, managing servers and learning new things.">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:secure_url" content="{{ config('app.url') }}/img/opengraph.png">
        <meta property="og:image" content="{{ config('app.url') }}/img/opengraph.png">
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
    </head>
    <body class="font-mono antialiased bg-gray-900">
        <div class="flex h-screen">
            <div class="m-auto mx-auto w-10/12 xl:w-7/12">
                <div class="overflow-hidden px-5 pt-4 pb-6 text-sm subpixel-antialiased leading-relaxed bg-gray-800 rounded-lg shadow-lg lg:text-lg">
                    <div class="flex mb-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <div class="ml-2 w-3 h-3 bg-yellow-300 rounded-full"></div>
                        <div class="ml-2 w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                    <div class="flex mt-4">
                        <span class="text-green-400">charlies-mbp:~$</span>
                        <p class="flex-1 items-center pl-2 text-gray-100" id="typed"></p>
                        <br>
                    </div>

                    <div class="mt-2" id="commandResponse" style="opacity: 0">
                        <section class="mt-4 mb-6">
                            <h2 class="bg-blue-400 px-1 py-0.5 max-w-max text-white mb-2 sr-only">Heading</h2>
                            <p class="text-gray-300">
                                Hey, I'm Charlie! 👋
                            </p>
                        </section>
                        <div class="space-y-8">
                            <section>
                                <h2 class="bg-blue-400 px-1 py-0.5 max-w-max text-white mb-2">About</h2>
                                <p class="text-gray-100">
                                    I am a 20 year old developer from London, I love <span class="text-blue-200">building websites</span>, <span class="text-blue-200">managing servers</span> and <span class="text-blue-200">learning new things</span>. I'm also building my own brand <a class="font-medium text-blue-200 underline">Octanna</a> and have been <a class="font-medium text-blue-200 underline">blogging</a> my journey.
                                </p>
                            </section>
                            <section>
                                <h2 class="bg-blue-400 px-1 py-0.5 max-w-max text-white mb-2">Analytics</h2>
                                <p class="text-gray-100">
                                    According to <a href="" class="text-purple-200 underline">Fathom Analytics</a>, I currently have <span class="text-blue-200">{{ number_format($liveVisitors) }}</span> visitors across all my sites - with a total of <span class="text-blue-200">{{ number_format($totalViews) }}</span> visitors in the last 30 days.
                                </p>
                            </section>
                            <section>
                                <h2 class="bg-blue-400 px-1 py-0.5 max-w-max text-white mb-2">Projects</h2>
                                <p class="text-gray-100">
                                    🎮 <a href="https://twitter.com/heychazza">joinservers.com</a>
                                    📊 <a href="https://twitter.com/heychazza">analyse.org</a>
                                    🚗 <a href="https://twitter.com/heychazza">btcczone.com</a>
                                </p>
                            </section>
                            <section>
                                <h2 class="bg-blue-400 px-1 py-0.5 max-w-max text-white mb-2">Contact</h2>
                                <p class="text-gray-100">
                                    Feel free to contact me on 🐦 <a class="text-blue-200" href="https://twitter.com/heychazza">@heychazza</a> or  📧 <a class="text-blue-200" href="https://twitter.com/heychazza">ch@rli.es</a>.
                                </p>
                            </section>
                        </div>
                    </div>
                    <div class="flex mt-4" id="nextCommand" style="opacity: 0">
                        <span class="text-green-400">charlies-mbp:~$</span>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <script defer>
            startTyping();
        </script>
    </body>
</html>
