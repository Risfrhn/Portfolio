<div class="w-full mt-5">
    <div class="absolute z-1 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
    <div class="hidden  md:block absolute w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-30 animate-flare-slow blur-[150px] bottom-[800px] xl:bottom-[40px] right-[0px]"></div>
    <x-component.button.var1 label="Update Landing Data" action="#"/>
    <div class="flex flex-row my-5">
        <div class="w-full p-10 bg-[#1D1D29]/30 rounded-md hidden md:block z-[99] backdrop-blur-lg shadow-xl">
            <div class="flex flex-row">
                <div class="col-span-12">
                    <p class="text-xl lg:text-4xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Welcome back Mr.Risky</p>
                    <p class="w-72 lg:w-96 text-[10px] lg:text-sm text-gray-500">Hey there! I was wondering if you have any good news or positive updates to share today?</p>
                </div>
                <img class=" absolute right-10 -top-5 lg:right-10 lg:-top-16 w-40 lg:w-52" src="/Finance.gif" alt="">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <livewire:component.card.var1 count=20 text="Total product" icon="fas fa-laptop-code"/>
        <livewire:component.card.var1 count=20 text="Total project" icon="fas fa-laptop-code"/>
        <livewire:component.card.var1 count=20 text="Total experience" icon="fas fa-laptop-code"/>
    </div>
</div>