<div>
    <aside id="logo-sidebar" class="hidden sm:block fixed left-4 top-4 bottom-4 z-40 bg-[#0b0b14] shadow-xl rounded-2xl border border-white/10" aria-label="Sidebar">
        <div class="h-full flex flex-col items-center py-6">
            <ul class="flex flex-col">
                <li class="mx-auto">
                    <a href="https://flowbite.com/" class="flex items-center justify-center mt-2">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    </a>
                </li>
                <li class="mx-auto my-8">
                    <a href="/search-admin" wire:navigate class="px-4 py-1.5 text-lg text-[#424954] hover:text-[#4C7BC3]">
                        <i class="fa-solid fa-magnifying-glass p-2 bg-black text-white rounded-lg"></i>
                    </a>
                </li>
                <li class="mx-auto mb-2">
                    <p class="text-xs text-gray-500 font-semibold">Menu</p>
                </li>
                <li class="mx-auto my-2">
                    <a href="/dashboard-admin" wire:navigate class="pr-3.5 pl-2.5 py-1.5 text-lg text-[#424954] border-l-4 border-transparent hover:border-[#4C7BC3] hover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-house p-2 hover:bg-black hover:text-white hover:p-2 rounded-lg"></i>
                    </a>
                </li>
                <li class="mx-auto my-2">
                    <a href="/project-admin" wire:navigate class="pr-3.5 pl-2.5 py-1.5 text-lg text-[#424954] border-l-4 border-transparent hover:border-[#4C7BC3] hover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-folder-open p-2 hover:bg-black hover:text-white hover:p-2 rounded-lg"></i>
                    </a>
                </li>
                <li class="mx-auto my-2">
                    <a href="/experience-admin" wire:navigate class="pr-3.5 pl-2.5 py-1.5 text-lg text-[#424954] border-l-4 border-transparent hover:border-[#4C7BC3] hover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-briefcase p-2 hover:bg-black hover:text-white hover:p-2 rounded-lg"></i>
                    </a>
                </li>
                <li class="mx-auto my-2">
                    <a href="/sertifikat-admin" wire:navigate class="pr-3.5 pl-2.5 py-1.5 text-lg text-[#424954] border-l-4 border-transparent hover:border-[#4C7BC3] hover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-certificate p-2 hover:bg-black hover:text-white hover:p-2 rounded-lg"></i>
                    </a>
                </li>
            </ul>
            <div class="mt-auto py-6 border-t-2 border-white/30">
                <ul class="flex flex-col">
                    <li class="mx-auto mb-2">
                        <p class="text-xs text-gray-500 font-semibold">Other</p>
                    </li>
                    <li class="my-2">
                        <a href="/setting-admin" wire:navigate class="pr-3.5 pl-2.5 py-1.5 text-lg text-[#424954] border-l-4 border-transparent hover:border-[#4C7BC3] hover:text-[#4C7BC3] transition-all duration-300">
                            <i class="fa-solid fa-gear p-2 hover:bg-black hover:text-white hover:p-2 rounded-lg"></i>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a wire:click="openModalConfirm" class="pr-3.5 pl-2.5 py-1.5 text-lg text-[#424954] border-l-4 border-transparent hover:border-[#4C7BC3] hover:text-[#4C7BC3] transition-all duration-300">
                            <i class="fa-solid fa-right-from-bracket p-2 hover:bg-black hover:text-white hover:p-2 rounded-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    @if($showModalLogOut)
        <livewire:component.alert.alert-konfirmasi 
            head="Konfirmasi Logout"
            desk="Apakah anda yakin ingin logout?"
            action="logout"
            closeEvent="tutupModalLogout"
        />
    @endif
</div>
