<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <x-cart color="white" size="30" />
            {{-- <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span> --}}
            <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
        </x-slot>
        <x-slot name="content">
            <div class="py-6 px-4">
                <p class="text-center text-gray-700">
                    You have no items in your shopping cart
                </p>
            </div>
           
        </x-slot>
    </x-jet-dropdown>


</div>