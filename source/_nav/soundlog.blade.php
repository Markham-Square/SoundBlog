<nav class="w-full pt-6 px-4 sm:px-6">
    <div class="flex items-baseline justify-between max-w-screen-xl mx-auto">
        <div class="flex items-center">
            <div class="flex items-center justify-between w-full md:w-auto">
            @if ($page->getPath())
                <a href="{{$page->baseUrl}}" aria-label="Home">
                    <h1 class="text-xl text-blue-500 font-bold">SoundLog</h1>
                </a>
            @else
                <a href="https://soundlog.io/" aria-label="Home">
                    <h1 class="text-xl text-blue-500 font-bold">SoundLog</h1>
                </a>
            @endif    
            </div>
        </div>
        <div class="flex items-center">
            <div class="md:flex md:space-x-6 items-center space-x-4">
              <a href="https://soundlog.io/about" class="text-sm md:text-base font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">About</a>
              <a href="https://soundlog.io/pricing" class="text-sm md:text-base font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Pricing</a>
              <a href="https://soundlog.io/login" class="text-sm md:text-base font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Log In </a>
              <a href="https://calendly.com/andrew-soundlog/onboarding" class="bg-blue-100 duration-150 ease-in-out font-medium hidden hover:bg-blue-200 hover:text-blue-700 md:text-base px-4 py-1 rounded sm:inline text-blue-500 text-sm transition">Book a Demo</a>
            </div>
        </div>
    </div>
</nav>