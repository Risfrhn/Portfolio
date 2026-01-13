<div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
    <img src="/Forms.gif" alt="" class="w-20">
    <slot name="tagSlot"/>
    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">{{ name }}</p>
    <p class="text-xs w-[300px] text-gray-500">{{ desc }}</p>
</div>
<div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
    <slot name="inputField0"/>
</div>
<div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
    <slot name="inputField1"/>
</div>
<div class="col-span-12 grid grid-cols-2 gap-5 mb-5">
    <slot name="inputField2"/>
</div>
<div class="col-span-12 grid grid-cols-3 gap-5">
    <slot name="inputField3"/>
</div>
<div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
    <slot name="buttonSubmit"/>
    <button @click="emit('update:open', false)" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
        Close
    </button> 
</div>
