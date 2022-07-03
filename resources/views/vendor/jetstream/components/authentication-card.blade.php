<div class="flex flex-col items-center min-h-screen pt-6 mt-16 bg-white sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-blue-100 shadow-lg sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
