<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    Work
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        Experience
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 sm:text-xl">
                    A journey through my professional career and the projects I've worked on.
                </p>
            </div>
        </div>
    </section>

    {{-- Experience Timeline --}}
    <section class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="relative">
                {{-- Timeline Line --}}
                <div class="absolute left-8 top-0 h-full w-0.5 bg-gradient-to-b from-emerald-500/50 via-emerald-500/30 to-transparent md:left-1/2"></div>

                {{-- Experience Items --}}
                <div class="space-y-12">
                    {{-- Experience 1 --}}
                    <div class="relative flex gap-8 md:gap-12">
                        <div class="flex w-full flex-col md:flex-row md:items-center">
                            <div class="md:w-1/2 md:pr-8 md:text-right">
                                <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-4 py-1 text-sm font-medium text-emerald-400">
                                    2022 - Present
                                </div>
                                <h3 class="mb-2 text-2xl font-bold text-white">Senior Full Stack Developer</h3>
                                <p class="mb-4 text-lg text-emerald-400">Company Name</p>
                                <p class="text-slate-300">
                                    Leading development of modern web applications using cutting-edge technologies.
                                    Collaborating with cross-functional teams to deliver high-quality solutions.
                                </p>
                                <ul class="mt-4 space-y-2 text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Architected and developed scalable web applications</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Mentored junior developers and conducted code reviews</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Optimized application performance and reduced load times by 40%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative mt-6 flex items-center md:mt-0 md:w-1/2 md:pl-8">
                                <div class="absolute left-0 top-1/2 h-4 w-4 -translate-x-1/2 -translate-y-1/2 rounded-full border-4 border-slate-950 bg-emerald-500 md:left-1/2"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Experience 2 --}}
                    <div class="relative flex gap-8 md:gap-12">
                        <div class="flex w-full flex-col md:flex-row md:items-center">
                            <div class="relative mt-6 flex items-center md:mt-0 md:w-1/2 md:pr-8">
                                <div class="absolute right-0 top-1/2 h-4 w-4 translate-x-1/2 -translate-y-1/2 rounded-full border-4 border-slate-950 bg-emerald-500 md:left-0 md:right-auto md:translate-x-0"></div>
                            </div>
                            <div class="md:w-1/2 md:pl-8">
                                <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-4 py-1 text-sm font-medium text-emerald-400">
                                    2020 - 2022
                                </div>
                                <h3 class="mb-2 text-2xl font-bold text-white">Full Stack Developer</h3>
                                <p class="mb-4 text-lg text-emerald-400">Previous Company</p>
                                <p class="text-slate-300">
                                    Developed and maintained multiple web applications from concept to deployment.
                                    Implemented responsive designs and optimized application performance.
                                </p>
                                <ul class="mt-4 space-y-2 text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Built RESTful APIs and integrated third-party services</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Collaborated with designers to implement pixel-perfect UIs</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Improved code quality through testing and refactoring</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Experience 3 --}}
                    <div class="relative flex gap-8 md:gap-12">
                        <div class="flex w-full flex-col md:flex-row md:items-center">
                            <div class="md:w-1/2 md:pr-8 md:text-right">
                                <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-4 py-1 text-sm font-medium text-emerald-400">
                                    2018 - 2020
                                </div>
                                <h3 class="mb-2 text-2xl font-bold text-white">Junior Developer</h3>
                                <p class="mb-4 text-lg text-emerald-400">Startup Company</p>
                                <p class="text-slate-300">
                                    Started my professional journey working on various web projects.
                                    Learned industry best practices and modern development workflows.
                                </p>
                                <ul class="mt-4 space-y-2 text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Developed frontend components using modern frameworks</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Participated in agile development processes</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="mt-1 h-4 w-4 shrink-0 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Contributed to open-source projects</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative mt-6 flex items-center md:mt-0 md:w-1/2 md:pl-8">
                                <div class="absolute left-0 top-1/2 h-4 w-4 -translate-x-1/2 -translate-y-1/2 rounded-full border-4 border-slate-950 bg-emerald-500 md:left-1/2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Skills Summary --}}
    <section class="bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Technologies I've Worked With
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Laravel</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">PHP</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">React</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Vue.js</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Next.js</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">TypeScript</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">JavaScript</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Tailwind CSS</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">MySQL</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">PostgreSQL</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">MongoDB</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Docker</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Git</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">AWS</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">CI/CD</span>
            </div>
        </div>
    </section>
</x-layout>
