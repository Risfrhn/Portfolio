<div id="accordion-{{ $id }}" class="mb-4">
    <h2 id="accordion-card-heading-{{ $id }}">
        <button
            type="button"
            onclick="toggleAccordion('body-{{ $id }}', 'icon-{{ $id }}', 'btn-{{ $id }}')"
            id="btn-{{ $id }}"
            class="w-full relative overflow-hidden rounded-xl border border-white/5 bg-[#150b2e] p-1 transition-all duration-300 hover:border-purple-500/30 hover:shadow-[0_0_20px_rgba(139,92,246,0.15)] group"
        >
            <!-- Hover Glow -->
            <div class="absolute -right-10 -top-10 w-20 h-20 bg-purple-600/20 blur-[30px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="relative flex items-center p-4 gap-4 z-10">
                <!-- ICON -->
                <div id="icon-box-{{ $id }}" class="flex-shrink-0 w-12 h-12 rounded-lg bg-purple-900/20 border border-purple-500/20 flex items-center justify-center text-[#a78bfa] group-hover:text-white group-hover:bg-purple-600 group-hover:border-purple-400 transition-all duration-300">
                    <i class="{{ $icon }} text-xl"></i>
                </div>

                <!-- TITLE & DESC -->
                <div class="flex-1 text-left">
                    <p id="title-{{ $id }}" class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors">
                        {{ $title }}
                    </p>
                    <p class="text-gray-400 text-xs mt-1 group-hover:text-gray-300 transition-colors">{{ $desc }}</p>
                </div>

                <!-- Arrow Indicator -->
                <div id="icon-{{ $id }}" class="text-gray-500 transition-transform duration-300">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </button>
    </h2>

    <!-- ACCORDION BODY -->
    <div
        id="body-{{ $id }}"
        class="w-full overflow-hidden transition-all duration-400 ease-in-out"
        style="max-height: 0; opacity: 0; margin-top: 0;"
    >
        <div class="p-4 rounded-xl bg-[#150b2e]/50 border border-white/5 flex flex-wrap gap-4">
            @foreach($children as $child)
                <div class="flex">
                    <x-Component.Icon.skill-badge
                    :image="$child['image']"
                    :nameTool="$child['nameTool']"
                    :levels="$child['levels']"
                    />
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
function toggleAccordion(bodyId, iconId, btnId) {
    var body = document.getElementById(bodyId);
    var icon = document.getElementById(iconId);
    var btn  = document.getElementById(btnId);

    var isOpen = body.style.maxHeight !== '0px' && body.style.maxHeight !== '';

    if (isOpen) {
        body.style.maxHeight  = '0';
        body.style.opacity    = '0';
        body.style.marginTop  = '0';
        icon.style.transform  = 'rotate(0deg)';
        icon.style.color      = '';
        btn.style.borderColor = '';
        btn.style.boxShadow   = '';
    } else {
        body.style.maxHeight  = body.scrollHeight + 'px';
        body.style.opacity    = '1';
        body.style.marginTop  = '0.5rem';
        icon.style.transform  = 'rotate(180deg)';
        icon.style.color      = '#a78bfa';
        btn.style.borderColor = 'rgba(168,85,247,0.5)';
        btn.style.boxShadow   = '0 0 20px rgba(139,92,246,0.2)';
    }
}
</script>
