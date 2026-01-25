<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    My
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        Projects
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 sm:text-xl">
                    A collection of projects I've built, showcasing my skills and passion for development.
                </p>
            </div>
        </div>
    </section>

    {{-- Projects Grid --}}
    <section class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 flex items-center justify-between">
                <h2 class="text-2xl font-bold text-white sm:text-3xl">Featured Projects</h2>
                <div class="flex gap-2">
                    <button class="rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 transition hover:bg-white/10 hover:text-white">
                        All
                    </button>
                    <button class="rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 transition hover:bg-white/10 hover:text-white">
                        Web
                    </button>
                    <button class="rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 transition hover:bg-white/10 hover:text-white">
                        Mobile
                    </button>
                </div>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                {{-- Project 1 --}}
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">E-Commerce Platform</h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-300">
                            A full-featured e-commerce platform with shopping cart, payment integration, and admin dashboard.
                            Built with modern technologies for optimal performance.
                        </p>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Laravel</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">React</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">MySQL</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Stripe</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-emerald-400">
                            <span>View Details</span>
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Project 2 --}}
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">Task Management App</h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-300">
                            A collaborative task management application with real-time updates, drag-and-drop functionality,
                            and team collaboration features.
                        </p>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Vue.js</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Node.js</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">MongoDB</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Socket.io</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-emerald-400">
                            <span>View Details</span>
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Project 3 --}}
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">Mobile Banking App</h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-300">
                            A secure mobile banking application with biometric authentication, transaction history,
                            and bill payment features. Built with React Native.
                        </p>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">React Native</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">TypeScript</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Firebase</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Redux</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-emerald-400">
                            <span>View Details</span>
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Project 4 --}}
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">API Security Platform</h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-300">
                            A comprehensive API security and monitoring platform with rate limiting, authentication,
                            and analytics. Built for enterprise use.
                        </p>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Laravel</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Redis</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">PostgreSQL</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Docker</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-emerald-400">
                            <span>View Details</span>
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Project 5 --}}
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">Portfolio Website</h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-300">
                            A modern, responsive portfolio website showcasing projects and skills.
                            Built with Next.js and Tailwind CSS for optimal performance.
                        </p>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Next.js</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Tailwind CSS</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">TypeScript</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Framer Motion</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-emerald-400">
                            <span>View Details</span>
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Project 6 --}}
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <div class="flex gap-2">
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </a>
                                <a href="#" class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">Analytics Dashboard</h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-300">
                            A comprehensive analytics dashboard with real-time data visualization,
                            custom reports, and interactive charts for business intelligence.
                        </p>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">React</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">D3.js</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Python</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">FastAPI</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-emerald-400">
                            <span>View Details</span>
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="bg-slate-950 py-20">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                Have a Project in Mind?
            </h2>
            <p class="mb-8 text-lg text-slate-300">
                I'm always open to discussing new projects and opportunities. Let's bring your ideas to life!
            </p>
            <a
                href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
            >
                Get In Touch
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </section>
</x-layout>
