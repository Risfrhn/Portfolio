<div class="container mx-auto max-w-screen-xl px-5 xl:px-0">
    <!-- DYNAMIC BACKGROUND (TS Particles Plugin) -->
    <div id="tsparticles" class="fixed inset-0 z-[-1] pointer-events-none"></div>
    
    <!-- HERO SECTION -->
    <div id="HeroSection" class="relative flex flex-col items-center justify-center min-h-[90vh] p-4 pt-32 container mx-auto px-5 xl:px-0 overflow-hidden">
        
        <!-- Background Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[120px] animate-pulse pointer-events-none"></div>

        <!-- Floating Icons (Symmetrical Orbit)-->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Left Side -->
            <div class="absolute top-[20%] left-[10%] lg:left-[15%] animate-bounce delay-700">
                <div class="w-12 h-12 lg:w-16 lg:h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md flex items-center justify-center shadow-[0_0_20px_rgba(139,92,246,0.2)]">
                    <img src="{{ asset('Laravel.png') }}" alt="Laravel" class="w-8 h-8 lg:w-10 lg:h-10 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="absolute top-[50%] left-[5%] lg:left-[10%] animate-bounce delay-1000">
                <div class="w-10 h-10 lg:w-14 lg:h-14 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md flex items-center justify-center shadow-[0_0_20px_rgba(56,189,248,0.2)]">
                    <img src="{{ asset('Tailwind.png') }}" alt="Tailwind" class="w-6 h-6 lg:w-8 lg:h-8 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="absolute bottom-[20%] left-[12%] lg:left-[18%] animate-bounce delay-500">
                <div class="w-10 h-10 lg:w-14 lg:h-14 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md flex items-center justify-center shadow-[0_0_20px_rgba(239,68,68,0.2)]">
                    <img src="{{ asset('CI3.png') }}" alt="CodeIgniter" class=" rounded-lg w-6 h-6 lg:w-8 lg:h-8 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            
            <!-- Right Side -->
            <div class="absolute top-[20%] right-[10%] lg:right-[15%] animate-bounce delay-300">
                <div class="w-12 h-12 lg:w-16 lg:h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md flex items-center justify-center shadow-[0_0_20px_rgba(97,218,251,0.2)]">
                    <img src="{{ asset('vue.png') }}" alt="vue" class="rounded-lg w-8 h-8 lg:w-10 lg:h-10 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="absolute top-[50%] right-[5%] lg:right-[10%] animate-bounce delay-1200">
                <div class="w-10 h-10 lg:w-14 lg:h-14 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md flex items-center justify-center shadow-[0_0_20px_rgba(59,130,246,0.2)]">
                    <img src="{{ asset('Wordpress.png') }}" alt="wordpress" class="rounded-lg w-6 h-6 lg:w-8 lg:h-8 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="absolute bottom-[20%] right-[12%] lg:right-[18%] animate-bounce delay-200">
                <div class="w-10 h-10 lg:w-14 lg:h-14 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md flex items-center justify-center shadow-[0_0_20px_rgba(245,158,11,0.2)]">
                    <img src="{{ asset('firebase.png') }}" alt="Firebase" class="rounded-lg w-6 h-6 lg:w-8 lg:h-8 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
        </div>

        <!-- Main Content (Centered) -->
        <div class="relative z-10 flex flex-col items-center text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="invoke-badge inline-block px-4 py-1.5 mb-8 rounded-full border border-purple-500/30 bg-purple-900/10 backdrop-blur-md">
                <span class="text-purple-300 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Portofolio digital</span>
            </div>
            
            <h1 class="text-white text-3xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight tracking-tight">
                Halo, Saya <br> 
                <span class="bg-gradient-to-r from-white via-purple-200 to-purple-400 bg-clip-text text-transparent uppercase">Risky Farhan</span>
            </h1>
            
            <div class="h-[40px] md:h-[50px] flex items-center justify-center mb-8">
                <p class="uppercase typed-text text-xl md:text-3xl lg:text-4xl font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-orange-400 bg-clip-text text-transparent drop-shadow-[0_0_20px_rgba(168,85,247,0.4)]" data-strings='@json($dataLanding->skill_header)'></p>
            </div>
            
            <p class="text-gray-400 text-xs md:text-sm lg:text-base font-light leading-relaxed max-w-3xl mb-12">
                {{ $dataLanding->deskripsi_header }}
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap justify-center gap-6 items-center mb-16">
                <x-Component.Button.primary label="Unduh CV" href="{{ $dataLanding->CV ? asset('storage/' . $dataLanding->CV) : '#' }}" :solid="true" target="_blank"/>
                <x-Component.Button.primary label="Pengalaman Saya" href="{{ route('user.experience') }}"/>
            </div>
            
            <!-- Socials -->
            <div class="flex items-center gap-6 p-4 rounded-2xl bg-white/5 border border-white/5 backdrop-blur-sm hover:border-purple-500/20 transition-all duration-300">
                <a href="https://www.linkedin.com/in/muhammad-risky-farhan-596783309" target="_blank" class="transition-all duration-300 relative group">
                    <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-purple-600 group-hover:border-purple-400 group-hover:shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
                        <i class="fab fa-linkedin text-2xl text-gray-400 group-hover:text-white transition-colors"></i>
                    </div>
                    <span class="absolute -top-10 left-1/2 -translate-x-1/2 text-xs text-white bg-black/80 px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">LinkedIn</span>
                </a>
                <a href="https://github.com/Risfrhn/" target="_blank" class="transition-all duration-300 relative group">
                    <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-gray-700 group-hover:border-gray-500 group-hover:shadow-[0_0_20px_rgba(255,255,255,0.1)] transition-all">
                        <i class="fab fa-github text-2xl text-gray-400 group-hover:text-white transition-colors"></i>
                    </div>
                     <span class="absolute -top-10 left-1/2 -translate-x-1/2 text-xs text-white bg-black/80 px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">GitHub</span>
                </a>
                 <a href="https://www.instagram.com/risfrhn_/" target="_blank" class="transition-all duration-300 relative group">
                    <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-pink-600 group-hover:border-pink-400 group-hover:shadow-[0_0_20px_rgba(236,72,153,0.4)] transition-all">
                        <i class="fab fa-instagram text-2xl text-gray-400 group-hover:text-white transition-colors"></i>
                    </div>
                     <span class="absolute -top-10 left-1/2 -translate-x-1/2 text-xs text-white bg-black/80 px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Instagram</span>
                </a>
                 <a href="https://steamcommunity.com/id/Zoow1/" target="_blank" class="transition-all duration-300 relative group">
                    <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-blue-600 group-hover:border-blue-400 group-hover:shadow-[0_0_20px_rgba(37,99,235,0.4)] transition-all">
                        <i class="fab fa-steam text-2xl text-gray-400 group-hover:text-white transition-colors"></i>
                    </div>
                     <span class="absolute -top-10 left-1/2 -translate-x-1/2 text-xs text-white bg-black/80 px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Steam</span>
                </a>
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <div id="AboutSection" class="relative mt-20 md:mt-32 mb-24 md:mb-52 container mx-auto px-5 lg:px-0">
        <div class="grid grid-cols-12 gap-12 items-center">
            <!-- Image/Decoration Column -->
            <div class="col-span-12 lg:col-span-5 hidden lg:block relative">
                 <div class="relative w-[300px] h-[300px] xl:w-[400px] xl:h-[400px] mx-auto">
                    <!-- Rotating Border -->
                    <div class="absolute inset-0 rounded-full border-2 border-dashed border-purple-500/30 animate-[spin_10s_linear_infinite]"></div>
                    <!-- Inner Glow -->
                    <div class="absolute inset-4 rounded-full bg-purple-900/20 blur-2xl"></div>
                    
                    <!-- Main Image container -->
                    <div class="absolute inset-0 flex items-center justify-center transform hover:scale-105 transition-transform duration-500">
                        <div class="w-[250px] h-[250px] xl:w-[320px] xl:h-[320px] rounded-2xl overflow-hidden shadow-[0_0_50px_rgba(139,92,246,0.3)] border border-white/10 rotate-[-5deg] hover:rotate-0 transition-all duration-500 bg-[#150b2e]">
                            <img src="{{ asset('HeaderHero.png') }}" alt="Profile" class="w-full h-full object-cover opacity-90 hover:opacity-100 transition-opacity">
                        </div>
                    </div>

                    <!-- Floating Icons (Grayscale + Theme Glow) -->
                    <div class="absolute -top-5 -right-5 animate-bounce delay-100">
                        <div class="w-14 h-14 rounded-2xl bg-[#150b2e]/80 border border-purple-500/30 backdrop-blur-md flex items-center justify-center shadow-lg shadow-purple-500/20">
                            <i class="fas fa-code text-[#a78bfa] text-3xl drop-shadow-[0_0_15px_rgba(168,85,247,0.5)]"></i>
                        </div>
                    </div>
                    <div class="absolute -bottom-5 -left-5 animate-bounce delay-700">
                        <div class="w-14 h-14 rounded-2xl bg-[#150b2e]/80 border border-purple-500/30 backdrop-blur-md flex items-center justify-center shadow-lg shadow-purple-500/20">
                            <i class="fas fa-layer-group text-[#a78bfa] text-3xl drop-shadow-[0_0_15px_rgba(168,85,247,0.5)]"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-span-12 lg:col-span-7">
                <div class="mb-8">
                     <!-- Badge -->
                    <div class="inline-block px-4 py-1.5 mb-4 rounded-full border border-purple-500/30 bg-purple-900/20 backdrop-blur-md">
                        <span class="text-purple-400 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Tentang Saya</span>
                    </div>

                    <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Menciptakan <span class="bg-gradient-to-r from-purple-400 via-pink-500 to-orange-400 bg-clip-text text-transparent">Pengalaman Digital</span>
                    </h2>
                    <p class="text-gray-400 text-base lg:text-lg font-light leading-relaxed mb-8 border-l-2 border-purple-500/30 pl-6">
                        {{ $dataLanding->deskripsi_tentang }}
                    </p>
                </div>

                <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                </div> -->
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
            <x-Component.Tab.accordion-item
                id="1"
                icon="fas fa-desktop"
                title="Pengembangan Website"
                desc="Solusi web yang responsif, cepat, dan skalabel"
                :children="[
                    ['levels'=>4,'nameTool'=>'Laravel','image'=>asset('Laravel.png')],
                    ['levels'=>4,'nameTool'=>'Tailwind','image'=>asset('Tailwind.png')],
                    ['levels'=>3,'nameTool'=>'Livewire','image'=>asset('livewire.png')],
                    ['levels'=>3,'nameTool'=>'MySQL','image'=>asset('mysql.png')],
                    ['levels'=>3,'nameTool'=>'Codeigniter 3','image'=>asset('CI3.png')],
                    ['levels'=>2,'nameTool'=>'Node JS','image'=>asset('node.png')],
                    ['levels'=>2,'nameTool'=>'Express JS','image'=>asset('express.png')],
                    ['levels'=>4,'nameTool'=>'PHP','image'=>asset('php.png')]
                ]"
            />

            <x-Component.Tab.accordion-item
                id="2"
                icon="fas fa-mobile-alt"
                title="Pengembangan Mobile"
                desc="Aplikasi mobile native dan lintas platform"
                :children="[
                    ['levels'=>2,'nameTool'=>'Flutter','image'=>asset('flutter.png')],
                    ['levels'=>2,'nameTool'=>'React Native','image'=>asset('react.png')],
                    ['levels'=>2,'nameTool'=>'Firebase','image'=>asset('firebase.png')],
                ]"
            />

        </div>
    </div>


    <!-- Service Section -->
    <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-purple-900/50 to-transparent"></div>
    
    <div class="relative py-32 container mx-auto px-5 lg:px-0">
        <!-- Background Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-[800px] h-[400px] bg-gradient-to-r from-purple-900/20 via-blue-900/20 to-purple-900/20 blur-[100px] pointer-events-none"></div>

        <div class="relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20">
                 <!-- Badge -->
                <div class="inline-block px-4 py-1.5 mb-4 rounded-full border border-purple-500/30 bg-purple-900/20 backdrop-blur-md">
                    <span class="text-blue-400 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Layanan Saya</span>
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">
                    Bagaimana Saya Bisa <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600">Membantu Anda</span>
                </h2>
                <p class="text-gray-400 text-lg font-light">
                    Mengubah masalah kompleks menjadi solusi digital yang elegan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 place-items-center">
                <x-Component.Card.stat-icon icon="fas fa-laptop-code" name="Pengembangan Web & App" desc="Pengembangan full-stack untuk website, aplikasi web, dan sistem internal."/>
                <x-Component.Card.stat-icon icon="fas fa-file-alt" name="Manajemen Dokumen" desc="Memperlancar alur kerja dengan template otomatis, spreadsheet, dan pelaporan."/>
               <x-Component.Card.stat-icon icon="fas fa-pencil-ruler" name="UI/UX Design" desc="Merancang antarmuka yang intuitif dan pengalaman pengguna yang nyaman serta mudah digunakan."/>
                <x-Component.Card.stat-icon icon="fas fa-paint-brush" name="Desain & Konten" desc="Membuat desain UI/UX yang intuitif dan aset konten digital yang menarik."/>
            </div>
        </div>
    </div>


    <!-- Portfolio & Products Section -->
    <div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.5));"></div>
    <div class="relative my-24 container mx-auto px-5 lg:px-0">
        <!-- Background Assets (Grayscale + Theme) -->
        <img src="{{ asset('Boostrap.png') }}" alt="" class="animate-icon-1 z-0 absolute w-5 h-5 xl:w-10 xl:h-10 left-[50px] top-[70px] md:left-[230px] md:top-[70px] xl:top-[90px] xl:left-[300px] grayscale opacity-30 drop-shadow-[0_0_15px_rgba(168,85,247,0.3)]">
        <img src="{{ asset('Canva.png') }}" alt="" class="animate-icon-1 z-0 absolute w-5 h-5 xl:w-10 xl:h-10 md:left-[130px] left-[100px] top-[-30px] md:top-[30px] xl:top-[30px] xl:left-[150px] grayscale opacity-30 drop-shadow-[0_0_15px_rgba(168,85,247,0.3)]">
        <img src="{{ asset('Excel.png') }}" alt="" class="animate-icon-3 z-0 absolute w-5 h-5 xl:w-10 xl:h-10 md:left-[200px] left-[30px] top-[10px] md:top-[-10px] xl:top-[-10px] xl:left-[400px] grayscale opacity-30 drop-shadow-[0_0_15px_rgba(168,85,247,0.3)]">
        <img src="{{ asset('CI3.png') }}" alt="" class="animate-icon-2 z-0 absolute w-5 h-5 xl:w-10 xl:h-10 md:right-[230px] right-[50px] top-[70px] md:top-[70px] xl:top-[90px] xl:right-[300px] grayscale opacity-30 drop-shadow-[0_0_15px_rgba(168,85,247,0.3)]">
        <img src="{{ asset('Word.png') }}" alt="" class="animate-icon-2 z-0 absolute w-5 h-5 xl:w-10 xl:h-10 md:right-[130px] right-[100px] top-[-30px] md:top-[30px] xl:top-[30px] xl:right-[150px] grayscale opacity-30 drop-shadow-[0_0_15px_rgba(168,85,247,0.3)]">
        <img src="{{ asset('Laravel.png') }}" alt="" class="animate-icon-3 z-0 absolute w-5 h-5 xl:w-10 xl:h-10 md:right-[200px] right-[30px] top-[10px] md:top-[-10px] xl:top-[-10px] xl:right-[400px] grayscale opacity-30 drop-shadow-[0_0_15px_rgba(168,85,247,0.3)]">
        
        <div class="hidden sm:block absolute z-0 top-1/2 left-1/2 w-[300px] h-[300px] md:w-[600px] md:h-[600px] lg:w-[900px] lg:h-[900px] rounded-full bg-gradient-to-r from-purple-900/20 via-blue-900/20 to-purple-900/20 blur-[150px] transform -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

        <div class="relative z-10 w-full max-w-7xl mx-auto">
            <!-- Main Header -->
            <div class="text-center mb-16">
                 <!-- Badge -->
                <div class="invoke-badge inline-block px-4 py-1.5 mb-4 rounded-full border border-purple-500/30 bg-purple-900/20 backdrop-blur-md">
                    <span class="text-purple-300 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Portofolio</span>
                </div>

                <p class="text-3xl lg:text-5xl font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 bg-clip-text text-transparent">
                    Karya Pilihan
                </p>
                <p class="text-gray-400 mt-3 text-sm lg:text-base font-light tracking-wide">
                    Koleksi proyek dan produk digital yang telah saya buat
                </p>
            </div>

            <!-- 1. Featured Projects (Vertical Cards) -->
            <div class="mb-20">
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-[1px] flex-1 bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
                    <h3 class="text-lg font-bold text-white uppercase tracking-widest px-4 py-1 border border-purple-500/30 rounded-full bg-purple-900/20 backdrop-blur-sm">
                        Proyek Unggulan
                    </h3>
                    <div class="h-[1px] flex-1 bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
                </div>

                <div class="flex flex-wrap gap-6 justify-center">
                    @if($dataPortfolio->count() > 0)
                        @foreach($dataPortfolio->take(4) as $item)
                            <x-Component.Card.project-thumbnail link="{{ route('user.project.detail', $item->id) }}" image="{{ $item->gambar_flyer ? asset('storage/'.$item->gambar_flyer) : asset('Image.png') }}" name="{{ $item->nama_projek }}" type="{{ $item->kategori }}" desc="{{ $item->deskripsi_projek }}" />
                        @endforeach
                    @else
                        <x-Component.State.empty-state 
                            class="w-full"
                            title="Belum Ada Proyek Unggulan" 
                            description="Proyek-proyek menarik akan segera ditampilkan di sini." 
                        />
                    @endif
                </div>
            </div>

            <!-- 2. Digital Products (Horizontal Cards) -->
            <div>
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-[1px] flex-1 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
                    <h3 class="text-lg font-bold text-white uppercase tracking-widest px-4 py-1 border border-blue-500/30 rounded-full bg-blue-900/20 backdrop-blur-sm">
                        Produk Digital
                    </h3>
                    <div class="h-[1px] flex-1 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
                </div>

                <div class="grid grid-cols-12 gap-6 place-content-center">
                     @if($dataProduct->count() > 0)
                        @foreach($dataProduct->take(4) as $item)
                            <x-Component.Card.horizontal-list-item link="{{ route('user.project.detail', $item->id) }}" func="#" image="{{ $item->logo_projek ? asset('storage/'.$item->logo_projek) : asset('Image.png') }}" name="{{ $item->nama_projek }}" type="{{ $item->kategori }}" desc="{{ $item->deskripsi_projek }}" />
                        @endforeach
                    @else
                         <x-Component.State.empty-state 
                            class="col-span-full"
                            icon="fas fa-box-open"
                            title="Belum Ada Produk" 
                            description="Nantikan produk digital berkualitas yang sedang saya kembangkan." 
                        />
                    @endif
                </div>
            </div>
            
             <!-- See More Button (Optional) -->
            <div class="mt-16 text-center">
                <a href="{{ route('user.project') }}" wire:navigate class="inline-flex items-center gap-2 px-8 py-3 text-sm font-bold text-white uppercase tracking-wider bg-white/5 hover:bg-white/10 border border-white/10 rounded-full transition-all duration-300 hover:scale-105 active:scale-95 group">
                    <span class="bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent group-hover:text-white transition-colors">Lihat Semua Proyek</span>
                    <i class="fas fa-arrow-right text-purple-400 group-hover:text-white transition-colors duration-300 transform group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
    </div>


    <!-- Kontak -->
    <div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.5));"></div>
    <div id="ContactSection" class="relative mt-24 mb-40 mx-3 container mx-auto px-5 lg:px-0">
        <div class="grid grid-cols-12 my-24 gap-6 z-10">
            <div class="col-span-12 mb-10 text-center">
                 <!-- Badge -->
                <div class="invoke-badge inline-block px-4 py-1.5 mb-4 rounded-full border border-purple-500/30 bg-purple-900/20 backdrop-blur-md">
                    <span class="text-purple-300 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Hubungi Saya</span>
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold bg-gradient-to-r from-rose-400 via-fuchsia-500 to-indigo-500 bg-clip-text text-transparent drop-shadow-[0_0_15px_rgba(168,85,247,0.5)]">Mari Terhubung</h2>
                <p class="text-gray-400 mt-4 max-w-xl mx-auto">Ingin berkolaborasi atau membangun software khusus? Mari wujudkan ide Anda menjadi kenyataan.</p>
            </div>

            <!-- Send Message Card -->
            <div class="col-span-12 md:col-span-6 h-full bg-[#150b2e] border border-white/5 rounded-3xl p-8 hover:border-purple-500/30 hover:shadow-[0_0_30px_rgba(139,92,246,0.2)] transition-all duration-500 group relative overflow-hidden">
                <!-- Hover Glow -->
                <div class="absolute -right-20 -top-20 w-40 h-40 bg-purple-600/20 blur-[60px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-purple-300 transition-colors">Kirim Pesan</h3>
                <p class="text-gray-400 mb-8 text-sm">Isi formulir di bawah ini dan saya akan segera membalasnya.</p>
                
                <livewire:component.contact-form />
            </div>

            <!-- Social Links Card -->
            <div class="col-span-12 md:col-span-6 h-full bg-[#150b2e] border border-white/5 rounded-3xl p-8 hover:border-purple-500/30 hover:shadow-[0_0_30px_rgba(139,92,246,0.2)] transition-all duration-500 group relative overflow-hidden flex flex-col justify-between">
                 <!-- Hover Glow -->
                <div class="absolute -left-20 -bottom-20 w-40 h-40 bg-blue-600/20 blur-[60px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                <div>
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-purple-300 transition-colors">Informasi Kontak</h3>
                    <p class="text-gray-400 mb-8 text-sm">Jangan ragu untuk menghubungi saya melalui platform di bawah ini.</p>

                    <!-- Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <!-- Status -->
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10 group/item hover:bg-white/10 transition-colors">
                            <div class="relative w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center text-green-400 group-hover/item:text-green-300 transition-colors">
                                <span class="absolute top-0 right-0 w-3 h-3 bg-green-500 rounded-full animate-pulse border-2 border-[#150b2e]"></span>
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Status</h4>
                                <p class="text-gray-400 text-xs mt-1">Open to Work</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10 group/item hover:bg-white/10 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400 group-hover/item:text-purple-300 transition-colors">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm">Lokasi</h4>
                                <p class="text-gray-400 text-xs mt-1">Indonesia (Remote)</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                     <p class="text-white font-bold mb-4 text-sm uppercase tracking-wider opacity-60">Social Media</p>
                     <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 place-content-center">
                        <x-Component.Contact.social-link name="LinkedIn" icon="fab fa-linkedin" link="www.linkedin.com/in/muhammad-risky-farhan-596783309" bgColor="#0077B5"/>
                        <x-Component.Contact.social-link name="Github" icon="fab fa-github" link="https://github.com/Risfrhn/" bgColor="#4141aa"/>
                        <x-Component.Contact.social-link name="Instagram" icon="fab fa-instagram" link="https://www.instagram.com/risfrhn_/" bgColor="#8900df"/>
                        <x-Component.Contact.social-link name="Email" icon="fa-solid fa-envelope" link="" bgColor="#D44638"/>
                        <x-Component.Contact.social-link name="Steam" icon="fab fa-steam" link="https://steamcommunity.com/id/Zoow1/" bgColor="#012f9a"/>
                        <x-Component.Contact.social-link name="Whatsapp" icon="fab fa-phone" link="wa.me/081345765427" bgColor="#25D366"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
