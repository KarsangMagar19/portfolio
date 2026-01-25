@php
    $currentRoute = request()->route()?->getName();
    $navLinks = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'experience', 'label' => 'Experience'],
        ['route' => 'projects', 'label' => 'Projects'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];
@endphp

<nav
    class="sticky top-0 z-50 w-full border-b border-white/10 bg-slate-950/80 backdrop-blur-xl supports-[backdrop-filter]:bg-slate-950/60"
    aria-label="Main navigation"
>
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
        {{-- Logo / brand --}}
        <a
            href="{{ route('home') }}"
            class="group flex shrink-0 items-center gap-2 font-semibold tracking-tight text-white transition hover:text-emerald-400"
        >
            <span class="text-lg sm:text-xl">Portfolio</span>
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 opacity-0 transition group-hover:opacity-100 group-hover:scale-150"></span>
        </a>

        {{-- Desktop nav links --}}
        <div class="hidden items-center gap-1 md:flex">
            @foreach ($navLinks as $link)
                @php
                    $isActive = $currentRoute === $link['route'];
                @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'relative rounded-lg px-3 py-2 text-sm font-medium transition',
                        'text-emerald-400' => $isActive,
                        'text-slate-300 hover:bg-white/5 hover:text-white' => ! $isActive,
                    ])
                >
                    @if ($isActive)
                        <span class="absolute inset-x-2 -bottom-px h-px bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></span>
                    @endif
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        {{-- Mobile: details/summary menu (no JS) --}}
        <div class="relative md:hidden">
            <details id="navbar-mobile-details" class="group">
                <summary
                    class="flex h-10 w-10 list-none cursor-pointer items-center justify-center rounded-lg border border-white/10 bg-white/5 text-slate-300 transition hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 [&::-webkit-details-marker]:hidden"
                    aria-label="Toggle menu"
                >
                    <span class="relative block h-5 w-5">
                        <span class="absolute left-0 top-1 block h-0.5 w-5 rounded-full bg-current"></span>
                        <span class="absolute left-0 top-2 block h-0.5 w-5 rounded-full bg-current"></span>
                        <span class="absolute left-0 top-3 block h-0.5 w-5 rounded-full bg-current"></span>
                    </span>
                </summary>
                <div class="absolute right-0 top-full mt-1 w-56 rounded-xl border border-white/10 bg-slate-900/95 py-2 shadow-xl backdrop-blur-xl">
                    @foreach ($navLinks as $link)
                        @php
                            $isActive = $currentRoute === $link['route'];
                        @endphp
                        <a
                            href="{{ route($link['route']) }}"
                            @class([
                                'block rounded-lg mx-2 px-4 py-2.5 text-sm font-medium transition',
                                'bg-emerald-500/15 text-emerald-400' => $isActive,
                                'text-slate-300 hover:bg-white/5 hover:text-white' => ! $isActive,
                            ])
                        >
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            </details>
        </div>
    </div>
</nav>
