<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risky Farhan</title>
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <style>
        body{    
            font-family: 'Poppins', sans-serif;
            background-color: #0b0b14;
        }
    </style>
</head>
<body>
    <livewire:component.navigasi-bar-user />    
    {{ $slot }}
    @livewireScripts


    <footer class="bg-[#a78bfa]/10 py-5 w-full text-center bottom-0">
        <span class="text-md bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent text-center">© 2025 <a href="">Risfrhn™</a>. All Rights Reserved.
        </span>        
    </footer>
</body>
