<!DOCTYPE html>
<html lang="en">
<head>

    {{-- Metadata --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- GOOGLE FONTS --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,400;0,600;0,700;1,300;1,400;1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');">


    {{-- BUILD SCRIPTS --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body>
    <main>
        {{$slot}}
    </main>
</body>
</html>