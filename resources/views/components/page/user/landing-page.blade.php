@extends('components.base.base-header')
@section('content')
<x-component.navigasi_bar_user /> 
<div class="container mx-auto max-w-screen-xl mt-10 px-5 xl:px-0">
    <div class="absolute z-1 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
    <div class="hidden  md:block absolute w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-30 animate-flare-slow blur-[150px] bottom-[800px] xl:bottom-[40px] right-[0px]"></div>


    <!-- HERO SECTION -->
    <div id="HeroSection" class="flex flex-wrap p-4 place-content-center pt-20 md:pt-24 lg:pt-40">
        <div class="w-[100%] md:w-[50%]">
            <p class="text-white my-2">Hello, Im</p>
            <p class="text-white my-2 text-4xl lg:text-5xl font-semibold">Risky Farhan</p>
            <p class="typed-text text-3xl md:text-4xl lg:text-5xl my-2 font-semibold min-h-[50px] bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" data-strings='@json(["Laravel Developer", "System Analyst", "Freelancer"])'></p>
            <p class="text-white text-xs lg:text-[15px] my-2 font-thin">Welcome to my portfolio. This platform presents an overview of my background, the products I professionally offer for sale, my professional experiences, and the projects I have completed. I hope this collection provides a clear understanding of my capabilities and the quality of work I strive to deliver.</p>

            <div class="flex flex-wrap my-5 gap-36 lg:gap-40">
                <div class="w-[0%]">
                    <livewire:component.ui-button-var1 label="Download CV" action="#"/>
                </div>
                <div class="w-[0%]">
                    <livewire:component.ui-button-var1 label="Pengalaman saya" href="#"/>
                </div>
            </div>
            <div class="flex flex-nowrap gap-8">
                <x-component.ui_icon_sosmed link="www.linkedin.com/in/muhammad-risky-farhan-596783309" icon="fab fa-linkedin"/>
                <x-component.ui_icon_sosmed link="https://github.com/Risfrhn/" icon="fab fa-github"/>
                <x-component.ui_icon_sosmed link="https://www.instagram.com/risfrhn_/" icon="fab fa-instagram"/>
                <x-component.ui_icon_sosmed link="https://steamcommunity.com/id/Zoow1/" icon="fab fa-steam"/>
            </div>
        </div>

        <div class="w-[100%] md:w-[50%] py-14 flex justify-center hidden md:flex">
            
            <img src="/Boostrap.png" alt="" class="animate-icon-1 absolute w-10 h-10 translate-x-[300px] hidden xl:block">
            <img src="/Canva.png" alt="" class="animate-icon-1 absolute w-10 h-10 -translate-x-[150px] -translate-y-[100px]">
        
        
            <img src="/CI3.png" alt="" class="animate-icon-2 absolute w-10 h-10  -translate-x-[130px] -translate-y-[30px]">
            <img src="/Word.png" alt="" class="animate-icon-2 absolute w-10 h-10 translate-x-[150px]  xl:translate-x-[200px] -translate-y-[100px]">
        
        
            <img src="/Excel.png" alt="" class="animate-icon-3 absolute w-10 h-10 -translate-x-[170px] translate-y-[200px]">
            <img src="/Laravel.png" alt="" class="animate-icon-3 absolute w-10 h-10 -translate-x-[100px] translate-y-[250px]">
            <img src="/Tailwind.png" alt="" class="animate-icon-3 absolute w-10 h-10 translate-x-[150px] xl:translate-x-[250px] translate-y-[250px]">
            
            <div class="w-[200px] h-[200px] lg:w-[250px] lg:h-[250px] xl:w-[300px] xl:h-[300px] rounded-xl shadow-lg rotate-[10deg] border-4 border-[#a78bfa] animate-glow translate-x-6 lg:translate-x-14  -translate-y-4 lg:-translate-y-14" style="background: linear-gradient(#0b0b14, #0b0b14) padding-box, linear-gradient(to right, #a855f7, #3b82f6, #6366f1) border-box;">
                <img src="/HeaderHero.png" alt="" class="w-60 h-60 lg:w-80 lg:h-80 xl:w-96 xl:h-96 object-cover rotate-[-10deg] lg:translate-x-10 xl:translate-x-14 translate-x-11 translate-y-7">
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <div id="AboutSection" class="relative mt-20 md:mt-32 mb-24 md:mb-52 px-3">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-4 hidden lg:block">
                <div class="w-[200px] h-[200px] lg:w-[250px] lg:h-[250px] xl:w-[300px] xl:h-[300px] rounded-xl shadow-lg rotate-[10deg] border-4 border-[#a78bfa] animate-glow translate-x-6 lg:translate-x-14  translate-y-11 lg:translate-y-10 xl:translate-y-1" style="background: linear-gradient(#0b0b14, #0b0b14) padding-box, linear-gradient(to right, #a855f7, #3b82f6, #6366f1) border-box;">
                    <img src="/HeaderHero.png" alt="" class="w-60 h-60 lg:w-80 lg:h-80 xl:w-96 xl:h-96 object-cover rotate-[-10deg] lg:translate-x-11 xl:translate-x-14 translate-x-11 translate-y-7">
                    <i class="absolute z-0 top-[10px] left-[250px] fas fa-code text-[#a78bfa] text-[20px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[30px] left-[180px] fas fa-code text-[#a78bfa] text-[15px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[-20px] left-[180px] fas fa-code text-[#a78bfa] text-[25px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[0px] left-[210px] fas fa-code text-[#a78bfa] text-[20px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[30px] left-[210px] fas fa-code text-[#a78bfa] text-[30px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[100px] left-[190px] fas fa-code text-[#a78bfa] text-[20px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[70px] left-[240px] fas fa-code text-[#a78bfa] text-[20px] opacity-20 rotate-[-10deg]"></i>
                    <i class="absolute z-0 top-[70px] left-[200px] fas fa-code text-[#a78bfa] text-[16px] opacity-20 rotate-[-10deg]"></i>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8 lg:ps-20">
                <p class="text-white text-xs font-bold">About me</p>
                <p class="text-3xl lg:text-5xl lg:my-2 font-semibold min-h-[50px] bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">Get to know me better</p>
                <p class="text-white text-[10px] lg:text-xs xl:text-sm font-thin leading-loose xl:leading-[25px] pb-5">I am a Software Engineer passionate about problem-solving and building reliable, user-focused web applications. I hold a degree in Software Engineering from Telkom University and have one year of professional experience. I specialize in web development with PHP and the CodeIgniter framework, skilled in MySQL database management and REST API development. I prioritize writing clear, well-structured technical documentation and effective communication to support maintainable software and productive team collaboration.</p>
                <div class="grid grid-cols-12 gap-3">
                    <div class="col-span-12 md:col-span-6">
                        <livewire:component.ui-tabs-var1 id="1" icon="fas fa-desktop" title="Website development" desc="responsive and user-friendly" 
                            :children="[
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png'],
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png'],
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png'],
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png']
                            ]"
                        />
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <livewire:component.ui-tabs-var1 id="2" icon="fas fa-mobile" title="Mobile development" desc="responsive and user-friendly"
                            :children="[
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png'],
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png'],
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png'],
                                ['levels' => 3, 'nameTool' => 'laravel', 'image' => '/Laravel.png']
                            ]"
                        />
                    </div>
                </div>
            </div>
        </div>
        <i class="absolute z-0 top-[-60px] right-[50px] fas fa-code text-[#a78bfa] text-[50px] md:text-[100px] lg:text-[100px] opacity-20 rotate-[-10deg]"></i>
    </div>


    <!-- Service -->
    <div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-fuchsia-500 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.8));"></div>
    <div class="relative my-24">
        <div class="grid grid-cols-12 gap-4 z-10 px-5">
            <div class="col-span-12">
                <p class="text-3xl text-center lg:text-5xl lg:my-2 font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">How I can help</p>
            </div>
            <div class="col-span-12">
                <p class="text-gray-500 text-center mt-1 mb-10">Transforming ideas into impactful digital experiences</p>
            </div>
            <div class="col-span-12 mt-0 md:mt-14 mb-14 z-10">
                <div class="flex flex-wrap gap-3 place-content-center">
                    <x-component.ui_card_var_1 icon="fas fa-laptop-code" name="Web & App Development" desc="Pembangunan website, aplikasi web, atau mobile, termasuk sistem manajemen dan portal."/>
                    <x-component.ui_card_var_1 icon="fas fa-file" name="Pengelolaan Dokumen & Office" desc="Pengelolaan template, spreadsheet, laporan."/>
                    <x-component.ui_card_var_1 icon="fas fa-paint-brush" name="Desain & Konten Digital" desc="UI/UX dasar, pembuatan konten untuk web atau portal internal"/>
                </div>
            </div>
        </div>
        <div class="hidden sm:block absolute z-0 md:top-[400px] xl:top-[300px] left-1/2 w-[300px] h-[300px] md:w-[700px] md:h-[600px] xl:w-[900px] xl:h-[200px] rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
        <i class="absolute z-0 top-[-60px] left-[50px] md:top-[-50px] md:left-[50px] fas fa-laptop-code text-[#a78bfa] text-[50px] md:text-[100px] lg:text-[150px] opacity-20 rotate-[-10deg]"></i>
        <i class="absolute z-0 top-[-60px] right-[50px] fas fa-code text-[#a78bfa] text-[50px] md:text-[100px] lg:text-[150px] opacity-20 rotate-[-10deg]"></i>
    </div>


    <!-- Project -->
    <div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-fuchsia-500 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.8));"></div>
    <div class="relative my-24">
        <img src="/Boostrap.png" alt="" class="animate-icon-1 z-10 absolute w-5 h-5 xl:w-10 xl:h-10 left-[50px] top-[70px] md:left-[230px] md:top-[70px] xl:top-[90px] xl:left-[300px]">
        <img src="/Canva.png" alt="" class="animate-icon-1 z-10 absolute w-5 h-5 xl:w-10 xl:h-10 md:left-[130px] left-[100px] top-[-30px] md:top-[30px] xl:top-[30px] xl:left-[150px]">
        <img src="/Excel.png" alt="" class="animate-icon-3 z-10 absolute w-5 h-5 xl:w-10 xl:h-10 md:left-[200px] left-[30px] top-[10px] md:top-[-10px] xl:top-[-10px] xl:left-[400px]">
    
        <img src="/CI3.png" alt="" class="animate-icon-2 z-10 absolute w-5 h-5 xl:w-10 xl:h-10 md:right-[230px] right-[50px] top-[70px] md:top-[70px] xl:top-[90px] xl:right-[300px]">
        <img src="/Word.png" alt="" class="animate-icon-2 z-10 absolute w-5 h-5 xl:w-10 xl:h-10 md:right-[130px] right-[100px] top-[-30px] md:top-[30px] xl:top-[30px] xl:right-[150px]">
        <img src="/Laravel.png" alt="" class="animate-icon-3 z-10 absolute w-5 h-5 xl:w-10 xl:h-10 md:right-[200px] right-[30px] top-[10px] md:top-[-10px] xl:top-[-10px] xl:right-[400px]">

        <x-layout.ui_layout_var_1 title="What I’ve Done" desc="Some of my recent projects">
            <x-slot name="card">
                <x-component.ui_card_var_2 link="#" image="#" name="Test" type="Test" desc="Test" />
                <x-component.ui_card_var_2 link="#" image="#" name="Test" type="Test" desc="Test" />
                <x-component.ui_card_var_2 link="#" image="#" name="Test" type="Test" desc="Test" />
            </x-slot>
        </x-layout.ui_layout_var_1>
        <div class="hidden sm:block absolute z-[0] md:top-[500px] left-1/2 w-[300px] h-[300px] md:w-[500px] md:h-[700px]  lg:w-[900px] lg:h-[500px] rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 blur-[120px] transform -translate-x-1/2 -translate-y-1/2"></div>
    </div>


    <!-- Product -->
    <div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-fuchsia-500 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.8));"></div>
    <div class="relative my-24">
        <x-layout.ui_layout_var_2 title="What I’ve Done" desc="Some of my recent projects">
            <x-slot name="card">
                <x-component.ui_card_var_3 link="#" func="#" image="#" name="Test" type="Test" desc="Test" />
                <x-component.ui_card_var_3 link="#" func="#" image="#" name="Test" type="Test" desc="Test" />
                <x-component.ui_card_var_3 link="#" func="#" image="#" name="Test" type="Test" desc="Test" />
            </x-slot>
        </x-layout.ui_layout_var_2>
        <div class="hidden sm:block absolute z-0 md:top-[300px] left-1/2 w-[300px] h-[300px] md:w-[500px] md:h-[700px]  lg:w-[900px] lg:h-[300px] rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 blur-[120px] transform -translate-x-1/2 -translate-y-1/2"></div>
    </div>


    <!-- Kontak -->
    <x-layout.ui_layout_var_3 header="Get in touch" subHeader="Want to collaborate or build custom software? Get in touch!" headerBox1="Send message" descSubHeaderBox1="Want to collaborate or build custom software? Get in touch!" headerBox2="Join Me Online" descSubHeaderBox2="Stay in the loop with my projects and posts by following me.">
        <x-slot name="slot1">
            <livewire:component.ui_contact_var1/>
        </x-slot>
        <x-slot name="slot2">
            <x-component.ui_contact_var_2 name="LinkedIn/Muhammad Risky Farhan" icon="fab fa-linkedin" link="www.linkedin.com/in/muhammad-risky-farhan-596783309" bgColor="#0077B5"/>
            <x-component.ui_contact_var_2 name="Github/Risfrhn" icon="fab fa-github" link="https://github.com/Risfrhn/" bgColor="#4141aa"/>
            <x-component.ui_contact_var_2 name="Instagram/risfrhn_" icon="fab fa-instagram" link="https://www.instagram.com/risfrhn_/" bgColor="#8900df"/>
            <x-component.ui_contact_var_2 name="Email/rskyfrhn801@gmail.com" icon="fa-solid fa-envelope" link="" bgColor="#D44638"/>
            <x-component.ui_contact_var_2 name="Steam/FarhanKebab" icon="fab fa-steam" link="https://steamcommunity.com/id/Zoow1/" bgColor="#012f9a"/>
            <x-component.ui_contact_var_2 name="Whatsapp/+6281345765427" icon="fab fa-phone" link="wa.me/081345765427" bgColor="#25D366"/>
        </x-slot>
    </x-layout.ui_layout_var_3>
</div>
@endsection