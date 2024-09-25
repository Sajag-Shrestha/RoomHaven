<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RoomHaven - Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('backend-assets/img/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('backend-assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('backend-assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend-assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend-assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend-assets/css/adminstyle.min.css') }}" />

    <!-- Add Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    {{-- Setting Style  --}}
    <link rel="stylesheet" href="{{ asset('backend-assets/css/setting.css') }}" />


</head>
