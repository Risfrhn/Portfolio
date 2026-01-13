<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#1D1D29] border-e border-default">
        <ul class="space-y-2 font-medium flex flex-col h-full">
        <li>
            <router-link :to="{name: 'DashboardAdmin'}" class="flex items-center px-2 py-1.5 text-white rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                <i class="fa-solid fa-table-list"></i>
                <span class="ms-3">Dashboard</span>
            </router-link>
        </li>
        <li>
            <router-link :to="{name: 'ProjectAdmin'}"  class="flex items-center px-2 py-1.5 text-white rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                <i class="fa-solid fa-file-code"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Project</span>
            </router-link>
        </li>
        <li>
            <router-link :to="{name: 'ExperienceAdmin'}" class="flex items-center px-2 py-1.5 text-white rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Experience</span>
            </router-link>
        </li>
        <li class="mt-auto">
            <button @click="openModalConfirm" href="#" class="flex items-center px-2 py-1.5 text-white rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-fg-brand" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/></svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </button>
        </li>
        </ul>
    </div>
</aside>