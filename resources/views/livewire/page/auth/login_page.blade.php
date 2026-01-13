@section('hideFooter', true)
<div class="relative grid grid-cols-12 w-full min-h-screen bg-[#0b0b14] place-items-center overflow-hidden">
    <div class="absolute z-0 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[-100px] left-[-100px]"></div>
    <div class="z-0 absolute w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-30 animate-flare-slow blur-[150px] bottom-[40px] right-[0px]"></div>
    <div class="col-span-12 z-10">
        <div class="w-full max-w-sm mx-auto p-10 rounded-xl bg-white/5 backdrop-blur-xl">
            <p class="text-xl text-center font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent mt-2">Welcome back Mr. Risky!</p>
            <p class="text-xs text-center text-gray-500 mb-5">We are happy to see you again</p>
            <form wire:submit.prevent="login">
                <div class="mb-5 relative">
                    <x-component.input.var1 label="Email" type="email" placeholder="Masukkan email" model="email" readonly="0"/>
                    <span class="absolute right-5 top-14 -translate-y-1/2 text-gray-400 pointer-events-none">
                        <i class="fa-regular fa-envelope"></i>
                    </span>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="relative">
                    <x-component.input.var1 label="Password" type="password" placeholder="Masukkan password" model="password" readonly="0"/>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex mt-2">
                    <a href="" class="ml-auto font-semibold text-sm bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Forgot password</a>
                </div>
                <button type="submit" class="inline-flex w-full items-center my-3 justify-center p-0.5 text-sm font-medium tracking-wide text-white transition duration-300 rounded-full shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                    <span class="relative px-5 py-2.5 w-full transition-all ease-in duration-75 bg-[#0b0b14] rounded-full group-hover:bg-transparent group-hover:dark:bg-transparent">
                        Submit
                    </span>
                </button> 
            </form>
        </div>
    </div>
</div>
