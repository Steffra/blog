<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-3 bg-dotbite border-dotbite rounded-md font text-xs text-white font-semibold tracking-widest hover:bg-dotibtedark active:bg-dotibtedarker focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
