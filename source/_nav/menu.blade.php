<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/') ? 'active text-blue-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="https://soundlog.io/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} pricing" href="https://soundlog.io/pricing"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/pricing') ? 'active text-blue-600' : '' }}">
        Pricing
    </a>
</nav>
