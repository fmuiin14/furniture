<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <title>Furniture</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="apple-touch-icon" href="{{ url('/fe/images/content/favicon.png') }} " />
    <!-- Place favicon.ico in the root directory -->

    <link rel="icon" href="{{ url('/fe/images/content/favicon.png') }}" />

    <meta name="theme-color" content="#000" />
    <link rel="icon" href="{{ url('/fe/images/content/favicon.png') }}">
    <link href="{{ url('/fe/css/app.minify.css') }}" rel="stylesheet">

    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <style>
        html {
            font-family: 'Roboto', sans-serif;
        }

    </style>
</head>

<body>
    <!-- Add your site or application content here -->

    @include('components.frontend.navbar');

    @yield('content');

    @include('components.frontend.footer');

    <!-- START: LOAD SVG -->
    <!-- <svg width="23" height="26" class="hidden" id="icon-play">
      <path
        d="M21 9.536c2.667 1.54 2.667 5.39 0 6.928l-15 8.66c-2.667 1.54-6-.385-6-3.464V4.34C0 1.26 3.333-.664 6 .876l15 8.66z"
        fill="#fff"
      />
    </svg> -->
    <!-- END: LOAD SVG  -->

    <script>
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        async function showLetter(item, selectedIndex) {
            var selectedIndex = selectedIndex ? selectedIndex : 0
            var demo_input = document.getElementById('placetextheader');

            if (selectedIndex <= item.length) {
                var currentIndex = selectedIndex++;
                demo_input.textContent = item.substr(0, currentIndex);
                await sleep(50);
                showLetter(item, selectedIndex);
            }
        };

        async function typeLetter() {
            // var demo_input = document.getElementById('placetextheader')[0];

            var items = [
                "Anda berkarya.",
                "berbagi cerita.",
                "beristirahat dengan nyenyak.",
                "kehangatan keluarga."
            ];

            for (var i = 0; i < items.length; i++) {
                var selectedItem = items[i];

                await sleep(2000);
                showLetter(selectedItem)
            }
        }

        typeLetter();

    </script>
    <script src="{{url('fe')}}/js/app.js"></script>
</body>

</html>
