<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    <!-- Playfair Display Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />
    <!-- Cabin Display Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />
    {{-- Poppins Display Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Euphoria Script Display Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100..900;1,100..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap");


        .font-playfair {
            font-family: "Playfair Display", serif;
        }

        .font-cabin {
            font-family: "Cabin", sans-serif;
        }

        .font-poppins {
            font-family: "Poppins", sans-serif;
        }

        .font-roboto {
            font-family: "Roboto", sans-serif;
        }

        .font-euphoria {
            font-family: "Euphoria Script", cursive;
        }

        .bg-catering {
            background-image: url('{{ asset('images/cateringbackground.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .bg-catering2 {
            background-image: url('{{ asset('images/cateringbackground2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .bg-catering3 {
            background-image: url('{{ asset('images/cateringbackground3.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
