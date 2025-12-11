<div class="bg-nav h-nav flex flex-row justify-start items-center space-x-2 px-2">

    <!-- Botones de navegación traducidos -->
    <button class="btn btn-soft btn-primary">
        <a href="/about">{{ __('messages.about') }}</a>
    </button>

    <button class="btn btn-soft btn-secondary">
        <a href="/noticias">{{ __('messages.news') }}</a>
    </button>

    <button class="btn btn-soft btn-warning">
        <a href="/contactar">{{ __('messages.contact') }}</a>
    </button>

    <!-- 🔥 Selector de idioma -->
    <div class="flex items-center space-x-2 ms-4">

        <a href="{{ route('lang.switch', 'en') }}"
           class="btn btn-soft btn-primary">
            English 🇬🇧
        </a>

        <a href="{{ route('lang.switch', 'es') }}"
           class="btn btn-soft btn-primary">
            Español 🇪🇸
        </a>

    </div>

</div>
