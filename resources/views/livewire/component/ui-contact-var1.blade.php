<form class="flex flex-col mt-10 gap-3">
    <input type="text" placeholder="Your Name" class="p-3 rounded-lg bg-[#2c2c50] shadow-inner shadow-[inset_2px_2px_5px_rgba(0,0,0,0.7)] text-white placeholder-gray-400 focus:outline-none"/>                                
    <textarea v-model="desc" placeholder="Your Message / Description" class="p-3 rounded-lg bg-[#2c2c50] shadow-inner shadow-[inset_2px_2px_5px_rgba(0,0,0,0.7)] text-white placeholder-gray-400 focus:outline-non" rows="4" required></textarea>

    <div class="flex gap-3 mt-2">
        <button type="button" class="flex-1 bg-transparent border-2 text-[#a78bfa] border-[#a78bfa] hover:bg-[#a78bfa] hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] hover:text-black transition-shadow duration-300 py-2 px-4 rounded-xl font-semibold">
        Send via Email
        </button>
        <button type="button" class="flex-1 bg-transparent border-2 text-green-600 border-green-600 hover:bg-green-600 hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] hover:text-black transition-shadow duration-300 py-2 px-4 rounded-xl font-semibold">
        Send via WhatsApp
        </button>
    </div>
</form>