<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'High Five Videos')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom Styles -->
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('head')

    <style>
        body {
            background: linear-gradient(180deg,
            rgba(15, 15, 15, 1),  /* Dark charcoal black */
            rgba(10, 10, 10, 0.95), /* Slightly darker */
            rgba(5, 5, 5, 0.9),  /* Almost pure black */
            rgba(0, 0, 0, 1)),  /* Deep black at the bottom */
            url("{{ asset('img/hexa.jpeg') }}") no-repeat right fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .card-bg {
            background-color: #262A2D;
        }
        .btn-group-style {
            background-color: #69787E;
        }
        .higlight-color {
            color: #f1bf38;
        }
        .custom-border {
            border-bottom: 0.5px solid;
            border-image-source: linear-gradient(169.15deg, rgba(255, 255, 255, 0.4) 0%, rgba(238, 237, 237, 0.2) 96.79%);
            box-shadow:
                0px 1px 2px 0px rgba(0, 0, 0, 0.3),
                0px 1px 3px 1px rgba(0, 0, 0, 0.15);
        }


        .home {
            display: flex;
            align-items: center;
            background: url("{{ asset('img/bg-img.png') }}") no-repeat right fixed;
            background-size: 800px;
            height: 120vh;
            min-height: 500px;
            background-blend-mode: multiply;
            background-position: right;
        }

        .home .max-width {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding: 40px 40px;
            height: fit-content;

        }

        .home-content {
            max-width: 600px;
            margin-left: 150px;
        }

        h1
        {
            font-size: 3rem;
        }
        .home h1 {
            font-size: 3rem;

        }
        .text-underline {
            text-decoration: underline;
        }

        .checkmarks p {
            font-size: 1.25rem;
            margin-top: 20px;
        }

        .checkmarks i {
            font-size: 1.5rem;
        }

        .search-box {
            margin-top: 20px;
            width: 100%;
        }

        .search-box input {
            width: 100%;
            padding: 10px;
        }

        .categories {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .categories button {
            font-size: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .home-content {
                margin-left: 0;
                text-align: center;
            }

            .home h1 {
                font-size: 2.5rem;
            }

            .checkmarks p {
                font-size: 1.1rem;
            }

            .search-box input {
                padding: 8px;
            }

            .categories button {
                font-size: 0.9rem;
                width: 100%;
            }
        }


        .bg-gradient-conic {
            background: conic-gradient(
                from 0deg,
                rgba(180, 202, 213, 0.2) 0%,
                rgba(180, 202, 213, 0.4) 25%,
                rgba(180, 202, 213, 0.6) 50%,
                rgba(180, 202, 213, 0.8) 75%,
                rgba(180, 202, 213, 1) 100%
            );
        }



        /* Ensure responsiveness */
        @media (max-width: 1024px) {
            .featured-heading {
                font-size: 28px;
            }

            .featured-heading span {
                font-size: 28px;
            }
        }

        @media (max-width: 768px) {
            .featured-heading {
                font-size: 24px;
            }

            .featured-heading span {
                font-size: 24px;
            }

            /* Adjust layout for smaller screens */
            .lg:w-1/2 {
            width: 100%;
        }

            .p-10 {
                padding: 6px;
            }

            .w-full {
                width: 100%;
            }

            .h-[440px] {
            height: auto;
        }

            /* Ensure button size is responsive */
            button {
                font-size: 16px;
            }
        }

        /* Ensure the image adapts to small mobile screens */
        @media (max-width: 767px) {
            .featured-heading {
                font-size: 1.5rem;
            }

            .text-lg {
                font-size: 1rem;
            }
        }

        .featured-heading {
            font-size: 36px;
            font-weight: 600;
            line-height: 1.3;
        }

        /* Background Gradient */
        .bg-gradient-conic {
            background: conic-gradient(
                from 0deg,
                rgba(180, 202, 213, 0.2) 0%,
                rgba(180, 202, 213, 0.4) 25%,
                rgba(180, 202, 213, 0.6) 50%,
                rgba(180, 202, 213, 0.8) 75%,
                rgba(180, 202, 213, 1) 100%
            );
        }

        /* Get Only the Best Section */
        section.position-relative {
            background-color: transparent;
        }

        section.position-relative .container {
            position: relative;
            z-index: 2;
        }

        section.position-relative .row {
            background: transparent;
        }


        h2.display-6 {
            font-size: 2rem;
        }

        .text-warning {
            color: #f4bf31;
        }


    </style>
</head>
<body class="text-white">
<!-- Navigation -->
<x-navbar />

<!-- Main Content -->
@yield('content')

<!-- Footer -->
<x-footer />

<!-- Mobile Menu Toggle Script -->
<script>
    document.getElementById('menu-toggle')?.addEventListener('click', function () {
        let menu = document.getElementById('mobile-menu');
        if(menu) {
            menu.classList.toggle('d-none');
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>

