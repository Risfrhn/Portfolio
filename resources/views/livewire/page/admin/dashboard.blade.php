<div>
    <div class="w-full mt-5">
        <div class="absolute z-1 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
        
        
        <div class="flex flex-row my-5">
            <div class="w-full p-10 bg-[#1D1D29]/30 rounded-md hidden md:block z-[99] backdrop-blur-lg shadow-xl">
                <div class="flex flex-row">
                    <div class="col-span-12">
                        <p class="text-xl lg:text-4xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Welcome back Mr.Risky</p>
                        <p class="w-72 lg:w-96 text-[10px] lg:text-sm text-gray-500">Hey there! I was wondering if you have any good news or positive updates to share today?</p>
                    </div>
                    <img class=" absolute right-10 -top-5 lg:right-10 lg:-top-16 w-40 lg:w-52" src="{{ asset('Finance.gif') }}" alt="">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <x-Component.Card.stat-card count="{{$total_product}}" text="Total product" icon="fas fa-laptop-code" />
            <x-Component.Card.stat-card count="{{$total_projek}}" text="Total portfolio" icon="fas fa-laptop-code" />
            <x-Component.Card.stat-card count="20" text="Total experience" icon="fas fa-laptop-code" />
            <x-Component.Card.stat-card count="20" text="Total sertifkat" icon="fas fa-laptop-code" />
        </div>
        <div class="w-full h-[2px] my-[40px] bg-gradient-to-r from-transparent via-fuchsia-500 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.8));"></div>
        
        
        <div class="flex flex-col lg:flex-row">
            <h2 class="text-4xl mb-2 text-center lg:text-left font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Landing Page</h2>
            <div class="flex flex-row justify-center lg:justify-start lg:ml-auto mt-2 lg:mt-0 gap-2">
                <x-Component.Button.primary label="Update Landing Data" wire:click="openEdit({{$data->id}})" />
                <x-Component.Button.primary label="Preview Landing Data" wire:click="openPreviewModalLanding" />
            </div>
        </div>
        <livewire:component.table.table-landing :data="$data"/>
        <!-- Modal -->
        @if($show)
            <livewire:component.modal.landing-modal />
        @endif
        
        @if($showModalLogOut)
            <livewire:component.alert.alert-konfirmasi head="Sign out" desk="Apakah anda yakin mau keluar?" action="logout" closeEvent="close-modal-logout"/>
        @endif
        @if($showPreviewLanding)
            <livewire:component.modal.modal-info/>
        @endif
    </div>
</div>
