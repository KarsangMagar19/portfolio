<footer class="border-t border-white/10 bg-slate-900/60 backdrop-blur-sm">
    <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">
            {{-- Resume --}}
            <div class="lg:pl-0">
                <h3 class="mb-4 text-xs font-semibold uppercase tracking-widest text-slate-400">
                    <span class="mr-1.5 inline-block h-0.5 w-4 rounded bg-emerald-500/60"></span>
                    Resume
                </h3>
                <a
                    href="{{ route('cv.download') }}"
                    class="group inline-flex items-center gap-2.5 rounded-xl bg-white/5 px-4 py-3 text-sm font-medium text-slate-200 ring-1 ring-white/10 transition hover:bg-emerald-500/15 hover:text-emerald-400 hover:ring-emerald-500/30 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/5 transition group-hover:bg-emerald-500/20">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </span>
                    Download CV
                </a>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="mb-4 text-xs font-semibold uppercase tracking-widest text-slate-400">
                    <span class="mr-1.5 inline-block h-0.5 w-4 rounded bg-emerald-500/60"></span>
                    Contact
                </h3>
                <ul class="space-y-3.5">
                    <li>
                        <a
                            href="mailto:karsangmagar19@gmail.com"
                            class="group flex items-center gap-3 rounded-lg py-1 transition hover:text-emerald-400"
                        >
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white/5 text-slate-400 transition group-hover:bg-emerald-500/15 group-hover:text-emerald-400">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span class="break-all text-sm text-slate-300">{{$personalinfo->email}}</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="tel:+9779803665780"
                            class="group flex items-center gap-3 rounded-lg py-1 transition hover:text-emerald-400"
                        >
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white/5 text-slate-400 transition group-hover:bg-emerald-500/15 group-hover:text-emerald-400">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </span>
                            <span class="text-sm text-slate-300">{{$personalinfo->phone}}</span>
                        </a>
                    </li>
                    <li class="flex items-center gap-3 rounded-lg py-1">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white/5 text-slate-400">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <span class="text-sm text-slate-300">Kathmandu, Nepal</span>
                    </li>
                </ul>
            </div>

            {{-- Connect --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <h3 class="mb-4 text-xs font-semibold uppercase tracking-widest text-slate-400">
                    <span class="mr-1.5 inline-block h-0.5 w-4 rounded bg-emerald-500/60"></span>
                    Connect
                </h3>
                <div class="flex flex-wrap gap-2">
                    <a
                        href="https://github.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-slate-400 transition hover:scale-105 hover:bg-emerald-500/20 hover:text-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        aria-label="GitHub"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a
                        href="https://linkedin.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-slate-400 transition hover:scale-105 hover:bg-emerald-500/20 hover:text-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        aria-label="LinkedIn"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a
                        href="https://twitter.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-slate-400 transition hover:scale-105 hover:bg-emerald-500/20 hover:text-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        aria-label="Twitter"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a
                        href="https://instagram.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/5 text-slate-400 transition hover:scale-105 hover:bg-emerald-500/20 hover:text-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        aria-label="Instagram"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.067-.06-1.407-.06-4.123v-.08c0-2.643.012-2.987.06-4.043.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm0 2.225h-.63c-2.098.006-3.115.06-3.957.148-.986.091-1.624.217-2.205.367a2.807 2.807 0 00-1.024.602 2.807 2.807 0 00-.602 1.024c-.15.581-.276 1.22-.367 2.205-.087.842-.142 1.859-.148 3.957v.63c.006 2.098.06 3.115.148 3.957.091.986.217 1.624.367 2.205.14.422.337.802.602 1.024.222.265.602.462 1.024.602.581.15 1.22.276 2.205.367.842.087 1.859.142 3.957.148h.63c2.098-.006 3.115-.06 3.957-.148.986-.091 1.624-.217 2.205-.367a2.807 2.807 0 001.024-.602 2.807 2.807 0 00.602-1.024c.15-.581.276-1.22.367-2.205.087-.842.142-1.859.148-3.957v-.63c-.006-2.098-.06-3.115-.148-3.957-.091-.986-.217-1.624-.367-2.205a2.807 2.807 0 00-.602-1.024 2.807 2.807 0 00-1.024-.602c-.581-.15-1.22-.276-2.205-.367-.842-.087-1.859-.142-3.957-.148zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 8.468a3.333 3.333 0 110-6.666 3.333 3.333 0 010 6.666zm5.338-9.87a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 sm:flex-row">
            <p class="text-sm text-slate-500 text-center">&copy; {{ date('Y') }} All rights reserved.</p>
        </div>
    </div>
</footer>
