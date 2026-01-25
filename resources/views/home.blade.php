<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        {{-- Animated Background Elements --}}
        <div class="absolute inset-0 overflow-hidden">
            {{-- Animated Gradient Orbs --}}
            <div class="absolute -left-1/4 top-1/4 h-[500px] w-[500px] animate-float rounded-full bg-emerald-500/20 blur-3xl"></div>
            <div class="absolute -right-1/4 bottom-1/4 h-[600px] w-[600px] animate-float-delayed rounded-full bg-teal-500/20 blur-3xl"></div>
            <div class="absolute left-1/2 top-1/2 h-[400px] w-[400px] -translate-x-1/2 -translate-y-1/2 animate-pulse-slow rounded-full bg-emerald-400/10 blur-3xl"></div>
            
            {{-- Animated Grid Pattern --}}
            <div class="absolute inset-0 bg-[linear-gradient(rgba(16,185,129,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(16,185,129,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>
            
            {{-- Moving Gradient Mesh --}}
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(16,185,129,0.15),transparent_50%)] animate-gradient-shift"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(20,184,166,0.15),transparent_50%)] animate-gradient-shift-delayed"></div>
            
            {{-- Floating Particles --}}
            <div class="absolute left-1/4 top-1/3 h-2 w-2 animate-float-particle rounded-full bg-emerald-400/40"></div>
            <div class="absolute left-3/4 top-1/4 h-1.5 w-1.5 animate-float-particle-delayed rounded-full bg-teal-400/40"></div>
            <div class="absolute left-1/2 top-3/4 h-2.5 w-2.5 animate-float-particle-slow rounded-full bg-emerald-300/30"></div>
            <div class="absolute left-1/5 top-2/3 h-1 w-1 animate-float-particle rounded-full bg-teal-300/40"></div>
            <div class="absolute left-4/5 top-1/2 h-2 w-2 animate-float-particle-delayed rounded-full bg-emerald-400/30"></div>
        </div>
        
        {{-- Content --}}
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-1.5 text-sm font-medium text-emerald-400 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400"></span>
                    </span>
                    Available for opportunities
                </div>
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    Hi, I'm
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        Karsang Thapa Magar
                    </span>
                </h1>
                <p class="mx-auto mb-8 max-w-2xl text-lg text-slate-300 sm:text-xl">
                    A passionate developer crafting beautiful and functional web experiences.
                    I turn ideas into reality through code.
                </p>
                <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a
                        href="{{ route('projects') }}"
                        class="group inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                    >
                        View My Work
                        <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                    >
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    About Me
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
                <div>
                    <p class="mb-4 text-lg leading-relaxed text-slate-300">
                        I'm a dedicated developer with a passion for creating elegant solutions to complex problems.
                        My journey in web development has been driven by curiosity and a commitment to continuous learning.
                    </p>
                    <p class="mb-6 text-lg leading-relaxed text-slate-300">
                        I specialize in building modern, responsive web applications that not only look great but also
                        perform exceptionally well. Every project is an opportunity to push boundaries and deliver
                        exceptional user experiences.
                    </p>
                    <a
                        href="{{ route('about') }}"
                        class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300"
                    >
                        Learn more about me
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
                <div class="flex items-center justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-400/20 to-teal-400/20 blur-2xl"></div>
                        <div class="relative rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400">Location:</span>
                                    <span class="font-medium text-white">Kathmandu, Nepal</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400">Available:</span>
                                    <span class="font-medium text-emerald-400">Open to work</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400">Email:</span>
                                    <span class="font-medium text-white">karsangmagar19@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Experience Section --}}
    <section id="experience" class="border-b border-white/10 bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Experience
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="space-y-8">
                <div class="group relative rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-2 flex items-start justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white">Senior Developer</h3>
                            <p class="text-emerald-400">Company Name</p>
                        </div>
                        <span class="rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-medium text-emerald-400">
                            2022 - Present
                        </span>
                    </div>
                    <p class="text-slate-300">
                        Leading development of modern web applications using cutting-edge technologies.
                        Collaborating with cross-functional teams to deliver high-quality solutions.
                    </p>
                </div>
                <div class="group relative rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-2 flex items-start justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white">Full Stack Developer</h3>
                            <p class="text-emerald-400">Previous Company</p>
                        </div>
                        <span class="rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-medium text-emerald-400">
                            2020 - 2022
                        </span>
                    </div>
                    <p class="text-slate-300">
                        Developed and maintained multiple web applications from concept to deployment.
                        Implemented responsive designs and optimized application performance.
                    </p>
                </div>
            </div>
            <div class="mt-8 text-center">
                <a
                    href="{{ route('experience') }}"
                    class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300"
                >
                    View full experience
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Projects Section --}}
    <section id="projects" class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Featured Projects
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <a href="#" class="text-slate-400 transition hover:text-emerald-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-white">Project Name</h3>
                        <p class="mb-4 text-sm text-slate-300">
                            A modern web application built with cutting-edge technologies.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Laravel</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">React</span>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <a href="#" class="text-slate-400 transition hover:text-emerald-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-white">Project Name</h3>
                        <p class="mb-4 text-sm text-slate-300">
                            An innovative solution that solves real-world problems.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Vue.js</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Tailwind</span>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                    <div class="relative p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <a href="#" class="text-slate-400 transition hover:text-emerald-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-white">Project Name</h3>
                        <p class="mb-4 text-sm text-slate-300">
                            A mobile-first application with exceptional user experience.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">Next.js</span>
                            <span class="rounded-full bg-white/5 px-2.5 py-1 text-xs text-slate-400">TypeScript</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center">
                <a
                    href="{{ route('projects') }}"
                    class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300"
                >
                    View all projects
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Skills Section --}}
    <section id="skills" class="border-b border-white/10 bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Skills & Technologies
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                            💻
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Frontend</h3>
                    <p class="text-sm text-slate-400">React, Vue.js, Next.js, Tailwind CSS</p>
                </div>
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                            ⚙️
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Backend</h3>
                    <p class="text-sm text-slate-400">Laravel, PHP, Node.js, Express</p>
                </div>
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                            🗄️
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Database</h3>
                    <p class="text-sm text-slate-400">MySQL, PostgreSQL, MongoDB</p>
                </div>
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                            🛠️
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Tools</h3>
                    <p class="text-sm text-slate-400">Git, Docker, AWS, CI/CD</p>
                </div>
            </div>
            <div class="mt-8 text-center">
                <a
                    href="{{ route('skills') }}"
                    class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300"
                >
                    View all skills
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="bg-slate-900/40 py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Get In Touch
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-slate-300">
                    Have a project in mind or want to collaborate? I'd love to hear from you.
                    Let's create something amazing together.
                </p>
                <div class="mx-auto mt-4 h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                <div class="mb-8 grid gap-6 sm:grid-cols-2">
                    <a
                        href="mailto:karsangmagar19@gmail.com"
                        class="group flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 p-4 transition hover:border-emerald-500/30 hover:bg-white/10"
                    >
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400 transition group-hover:bg-emerald-500/30">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-400">Email</p>
                            <p class="font-medium text-white">karsangmagar19@gmail.com</p>
                        </div>
                    </a>
                    <a
                        href="tel:+9779803665780"
                        class="group flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 p-4 transition hover:border-emerald-500/30 hover:bg-white/10"
                    >
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400 transition group-hover:bg-emerald-500/30">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-400">Phone</p>
                            <p class="font-medium text-white">+977-9803665780</p>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                    >
                        Send a Message
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
