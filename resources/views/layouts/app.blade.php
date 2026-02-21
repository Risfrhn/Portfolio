<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risky Farhan</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <style>
        body{    
            font-family: 'Poppins', sans-serif;
            background-color: #12121E;
        }
    </style>
</head>
<body>
    <div>
        <livewire:component.navbar.top-nav/>     
        
        <!-- Konten halaman -->
        <main >
            <div class="fixed z-1 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
            <div class="hidden  md:block fixed w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-30 animate-flare-slow blur-[150px] bottom-[800px] xl:bottom-[40px] right-[0px]"></div>
            {{ $slot }}
            @livewireScripts
        </main>
        
    </div>
    <footer class="bg-[#a78bfa]/10 py-5 w-full text-center bottom-0">
        <span class="text-md bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent text-center">© 2025 <a href="">Risfrhn™</a>. All Rights Reserved.
        </span>        
    </footer>  
    
</body>
</html>
    


    
    <!-- TS Particles Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", async function () {
            await tsParticles.load("tsparticles", {
                fpsLimit: 60,
                fullScreen: { enable: false }, // Let container handle size
                particles: {
                    number: {
                        value: 50,
                        density: {
                            enable: true,
                            area: 800
                        }
                    },
                    color: {
                        value: ["#ffffff", "#a855f7", "#3b82f6"] // White, Purple, Blue
                    },
                    shape: {
                        type: "circle"
                    },
                    opacity: {
                        value: 0.5,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 1,
                            opacity_min: 0.1,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 2,
                            size_min: 0.1,
                            sync: false
                        }
                    },
                    move: {
                        enable: true,
                        speed: 0.5,
                        direction: "none",
                        random: true,
                        straight: false,
                        outModes: {
                            default: "out"
                        },
                        attract: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detectsOn: "canvas",
                    events: {
                        onHover: {
                            enable: true,
                            mode: "bubble"
                        },
                        resize: true
                    },
                    modes: {
                        bubble: {
                            distance: 200,
                            size: 4,
                            duration: 2,
                            opacity: 0.8,
                            speed: 3
                        }
                    }
                },
                detectRetina: true,
                background: {
                    color: "transparent"
                }
            });
        });
    </script>
</body>
</html>
