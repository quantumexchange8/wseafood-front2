<nav class="navbar" id="navbar">
    <div class="container relative flex flex-wrap items-center justify-between">
        <a class="navbar-brand md:me-8 flex items-center" href="/">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/wondering-logo.png') }}" class="h-12">
                <h6 class="uppercase text-lg font-bold tracking-wider ms-1 text-black dark:text-white">
                {{ __('messages.logo') }}
                </h6>
            </div>
        </a>


        <div class="nav-icons flex items-center lg_992:order-2 md:ms-6">
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-slate-900 dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu text-[24px]"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto dark:text-white" id="menu-collapse">
            <ul class="navbar-nav" id="navbar-navlist">
                <li class="nav-item">
                    @if (Request::is('/'))
                        <a class="nav-link active" href="#home"> {{ __('messages.home') }} </a>
                    @else
                        <a class="nav-link " href="{{ url('/#home') }}">{{ __('messages.home') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('/'))
                        <a class="nav-link" href="#about">{{ __('messages.about') }}</a>
                    @else
                        <a class="nav-link" href="{{ url('/#about') }}">{{ __('messages.about') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('/'))
                        <a class="nav-link" href="#features">{{ __('messages.features') }}</a>
                    @else
                        <a class="nav-link" href="{{ url('/#features') }}">{{ __('messages.features') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('/'))
                        <a class="nav-link" href="#faqs">{{ __('messages.faqs') }}</a>
                    @else
                        <a class="nav-link" href="{{ url('/#faqs') }}">{{ __('messages.faqs') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Request::is('/'))
                        <a class="nav-link" href="#download">{{ __('messages.download') }}</a>
                    @else
                        <a class="nav-link" href="{{ url('/#download') }}">{{ __('messages.download') }}</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>