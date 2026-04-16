@php
    $currentRoute = request()->route()?->getName();
    $navLinks = [
        ['route' => 'home',       'label' => 'Home',       'label_np' => 'गृहपृष्ठ'],
        ['route' => 'about',      'label' => 'About',      'label_np' => 'मेरो बारेमा'],
        ['route' => 'experience', 'label' => 'Experience', 'label_np' => 'अनुभव'],
        ['route' => 'projects',   'label' => 'Projects',   'label_np' => 'परियोजनाहरू'],
        ['route' => 'skills',     'label' => 'Skills',     'label_np' => 'सीपहरू'],
        ['route' => 'contact',    'label' => 'Contact',    'label_np' => 'सम्पर्क'],
    ];
@endphp

<nav class="sticky top-0 z-50 w-full border-b border-white/10 bg-slate-950/80 backdrop-blur-xl supports-[backdrop-filter]:bg-slate-950/60"
    aria-label="Main navigation">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
        {{-- Logo / brand --}}
        <a href="{{ route('home') }}"
            class="group flex shrink-0 items-center gap-2 font-semibold tracking-tight text-white transition hover:text-emerald-400">
            <span class="text-lg sm:text-xl">Portfolio</span>
            <span
                class="h-1.5 w-1.5 rounded-full bg-emerald-400 opacity-0 transition group-hover:opacity-100 group-hover:scale-150"></span>
        </a>

        {{-- Desktop nav links --}}
        <div class="hidden items-center gap-1 md:flex">
            @foreach ($navLinks as $link)
                @php
                    $isActive = $currentRoute === $link['route'];
                @endphp
                <a href="{{ route($link['route']) }}" @class([
                    'relative rounded-lg px-3 py-2 text-sm font-medium transition lang-text',
                    'text-emerald-400' => $isActive,
                    'text-slate-300 hover:bg-white/5 hover:text-white' => !$isActive,
                ])
                    data-en="{{ $link['label'] }}"
                    data-np="{{ $link['label_np'] }}">
                    @if ($isActive)
                        <span
                            class="absolute inset-x-2 -bottom-px h-px bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></span>
                    @endif
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        {{-- Right side: Language Toggle + Mobile Menu --}}
        <div class="flex items-center gap-2">
            {{-- Language Toggle Button --}}
            <button
                id="lang-toggle-btn"
                onclick="toggleLanguage()"
                title="Switch language"
                class="flex items-center gap-1.5 rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-3 py-1.5 text-xs font-semibold text-emerald-400 transition hover:bg-emerald-500/20 hover:border-emerald-400/50 hover:text-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-500/50">
                <svg class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg>
                <span id="lang-toggle-label">EN</span>
            </button>

            {{-- Mobile: details/summary menu (no JS) --}}
            <div class="relative md:hidden">
                <details id="navbar-mobile-details" class="group">
                    <summary
                        class="flex h-10 w-10 list-none cursor-pointer items-center justify-center rounded-lg border border-white/10 bg-white/5 text-slate-300 transition hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 [&::-webkit-details-marker]:hidden"
                        aria-label="Toggle menu">
                        <span class="relative block h-5 w-5">
                            <span class="absolute left-0 top-1 block h-0.5 w-5 rounded-full bg-current"></span>
                            <span class="absolute left-0 top-2 block h-0.5 w-5 rounded-full bg-current"></span>
                            <span class="absolute left-0 top-3 block h-0.5 w-5 rounded-full bg-current"></span>
                        </span>
                    </summary>
                    <div
                        class="absolute right-0 top-full mt-1 w-56 rounded-xl border border-white/10 bg-slate-900/95 py-2 shadow-xl backdrop-blur-xl">
                        @foreach ($navLinks as $link)
                            @php
                                $isActive = $currentRoute === $link['route'];
                            @endphp
                            <a href="{{ route($link['route']) }}" @class([
                                'block rounded-lg mx-2 px-4 py-2.5 text-sm font-medium transition lang-text',
                                'bg-emerald-500/15 text-emerald-400' => $isActive,
                                'text-slate-300 hover:bg-white/5 hover:text-white' => !$isActive,
                            ])
                                data-en="{{ $link['label'] }}"
                                data-np="{{ $link['label_np'] }}">
                                {{ $link['label'] }}
                            </a>
                        @endforeach
                    </div>
                </details>
            </div>
        </div>
    </div>
</nav>

{{-- Language Toggle Script --}}
<script>
    (function () {
        const STORAGE_KEY = 'portfolio_lang';

        function applyLanguage(lang) {
            // Translate all .lang-text elements
            document.querySelectorAll('.lang-text').forEach(function (el) {
                const val = el.getAttribute('data-' + lang);
                if (val !== null) {
                    // Elements with data-html="true" contain rich HTML (descriptions, bios)
                    // Use innerHTML so tags render properly instead of showing as raw text
                    if (el.getAttribute('data-html') === 'true') {
                        el.innerHTML = val;
                    } else {
                        const hasChildSpans = el.querySelectorAll('span').length > 0;
                        if (hasChildSpans) {
                            el.childNodes.forEach(function (node) {
                                if (node.nodeType === Node.TEXT_NODE && node.textContent.trim() !== '') {
                                    node.textContent = val;
                                }
                            });
                        } else {
                            el.textContent = val;
                        }
                    }
                }
            });

            // Translate placeholder text on inputs/textareas
            document.querySelectorAll('[data-placeholder-en]').forEach(function (el) {
                const val = el.getAttribute('data-placeholder-' + lang);
                if (val !== null) el.placeholder = val;
            });

            // Update button label
            const btn = document.getElementById('lang-toggle-label');
            if (btn) btn.textContent = lang === 'en' ? 'EN' : 'NP';

            document.documentElement.lang = lang === 'np' ? 'ne' : 'en';
            localStorage.setItem(STORAGE_KEY, lang);
        }

        window.toggleLanguage = function () {
            const current = localStorage.getItem(STORAGE_KEY) || 'en';
            applyLanguage(current === 'en' ? 'np' : 'en');
        };

        // Restore saved preference on every page load
        document.addEventListener('DOMContentLoaded', function () {
            const saved = localStorage.getItem(STORAGE_KEY) || 'en';
            if (saved === 'np') applyLanguage('np');
            else {
                const btn = document.getElementById('lang-toggle-label');
                if (btn) btn.textContent = 'EN';
            }
        });
    })();
</script>