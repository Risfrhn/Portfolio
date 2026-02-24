<div>
    {{-- ===================== DESKTOP SIDEBAR (sm ke atas) ===================== --}}
    <aside id="logo-sidebar" class="hidden sm:flex fixed left-4 top-4 bottom-4 z-40 bg-[#0b0b14] shadow-xl rounded-2xl border border-white/10 flex-col" aria-label="Sidebar">
        <div class="h-full flex flex-col items-center py-6 w-16">
            {{-- Logo --}}
            <div class="mb-6">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500 to-blue-600 flex items-center justify-center shadow-lg">
                    <i class="fa-solid fa-code text-white text-sm"></i>
                </div>
            </div>

            {{-- Label Menu --}}
            <p class="text-[9px] text-gray-600 font-semibold tracking-widest uppercase mb-2">Menu</p>

            <ul class="flex flex-col items-center gap-1 w-full px-2">
                <li class="w-full">
                    <a href="{{ route('dashboard-admin') }}" wire:navigate
                        class="flex items-center justify-center py-2.5 rounded-xl text-gray-500 hover:text-white hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('dashboard-admin') ? 'text-purple-400 bg-purple-500/10' : '' }}"
                        title="Dashboard">
                        <i class="fa-solid fa-house text-base"></i>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('project-admin') }}" wire:navigate
                        class="flex items-center justify-center py-2.5 rounded-xl text-gray-500 hover:text-white hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('project-admin') ? 'text-purple-400 bg-purple-500/10' : '' }}"
                        title="Project">
                        <i class="fa-solid fa-folder-open text-base"></i>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('experience-admin') }}" wire:navigate
                        class="flex items-center justify-center py-2.5 rounded-xl text-gray-500 hover:text-white hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('experience-admin') ? 'text-purple-400 bg-purple-500/10' : '' }}"
                        title="Experience">
                        <i class="fa-solid fa-briefcase text-base"></i>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('sertifikat-admin') }}" wire:navigate
                        class="flex items-center justify-center py-2.5 rounded-xl text-gray-500 hover:text-white hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('sertifikat-admin') ? 'text-purple-400 bg-purple-500/10' : '' }}"
                        title="Sertifikat">
                        <i class="fa-solid fa-certificate text-base"></i>
                    </a>
                </li>
            </ul>

            {{-- Bottom section --}}
            <div class="mt-auto w-full px-2 pt-4 border-t border-white/10">
                <p class="text-[9px] text-gray-600 font-semibold tracking-widest uppercase mb-2 text-center">Other</p>
                <ul class="flex flex-col items-center gap-1">
                    <li class="w-full">
                        <a href="{{ route('setting-admin') }}" wire:navigate
                            class="flex items-center justify-center py-2.5 rounded-xl text-gray-500 hover:text-white hover:bg-white/10 transition-all duration-200 {{ request()->routeIs('setting-admin') ? 'text-purple-400 bg-purple-500/10' : '' }}"
                            title="Setting">
                            <i class="fa-solid fa-gear text-base"></i>
                        </a>
                    </li>
                    <li class="w-full">
                        <button wire:click="openModalConfirm"
                            class="w-full flex items-center justify-center py-2.5 rounded-xl text-gray-500 hover:text-red-400 hover:bg-red-500/10 transition-all duration-200 cursor-pointer"
                            title="Logout">
                            <i class="fa-solid fa-right-from-bracket text-base"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    {{-- ===================== MOBILE BOTTOM NAVBAR (dibawah sm) ===================== --}}
    <nav class="sm:hidden fixed bottom-0 left-0 right-0 z-50 bg-[#0b0b14]/95 backdrop-blur-xl border-t border-white/10 shadow-2xl">
        <div class="flex items-center justify-around px-2 py-2">
            {{-- Dashboard --}}
            <a href="{{ route('dashboard-admin') }}" wire:navigate
                class="flex flex-col items-center gap-1 py-1 px-3 rounded-xl transition-all duration-200 {{ request()->routeIs('dashboard-admin') ? 'text-purple-400' : 'text-gray-500' }} hover:text-purple-400">
                <i class="fa-solid fa-house text-lg"></i>
                <span class="text-[9px] font-medium">Home</span>
            </a>

            {{-- Project --}}
            <a href="{{ route('project-admin') }}" wire:navigate
                class="flex flex-col items-center gap-1 py-1 px-3 rounded-xl transition-all duration-200 {{ request()->routeIs('project-admin') ? 'text-purple-400' : 'text-gray-500' }} hover:text-purple-400">
                <i class="fa-solid fa-folder-open text-lg"></i>
                <span class="text-[9px] font-medium">Project</span>
            </a>

            {{-- Experience --}}
            <a href="{{ route('experience-admin') }}" wire:navigate
                class="flex flex-col items-center gap-1 py-1 px-3 rounded-xl transition-all duration-200 {{ request()->routeIs('experience-admin') ? 'text-purple-400' : 'text-gray-500' }} hover:text-purple-400">
                <i class="fa-solid fa-briefcase text-lg"></i>
                <span class="text-[9px] font-medium">Experience</span>
            </a>

            {{-- Sertifikat --}}
            <a href="{{ route('sertifikat-admin') }}" wire:navigate
                class="flex flex-col items-center gap-1 py-1 px-3 rounded-xl transition-all duration-200 {{ request()->routeIs('sertifikat-admin') ? 'text-purple-400' : 'text-gray-500' }} hover:text-purple-400">
                <i class="fa-solid fa-certificate text-lg"></i>
                <span class="text-[9px] font-medium">Sertifikat</span>
            </a>

            {{-- Setting --}}
            <a href="{{ route('setting-admin') }}" wire:navigate
                class="flex flex-col items-center gap-1 py-1 px-3 rounded-xl transition-all duration-200 {{ request()->routeIs('setting-admin') ? 'text-purple-400' : 'text-gray-500' }} hover:text-purple-400">
                <i class="fa-solid fa-gear text-lg"></i>
                <span class="text-[9px] font-medium">Setting</span>
            </a>

            {{-- Logout --}}
            <button wire:click="openModalConfirm"
                class="flex flex-col items-center gap-1 py-1 px-3 rounded-xl transition-all duration-200 text-gray-500 hover:text-red-400 cursor-pointer">
                <i class="fa-solid fa-right-from-bracket text-lg"></i>
                <span class="text-[9px] font-medium">Logout</span>
            </button>
        </div>
    </nav>

    {{-- Modal Logout --}}
    @if($showModalLogOut)
        <livewire:component.alert.alert-konfirmasi
            head="Konfirmasi Logout"
            desk="Apakah anda yakin ingin logout?"
            action="logout"
            closeEvent="tutupModalLogout"
        />
    @endif
</div>
