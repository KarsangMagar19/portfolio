<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    Skills &
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        Technologies
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 sm:text-xl">
                    A comprehensive overview of my technical expertise and the tools I use to build amazing products.
                </p>
            </div>
        </div>
    </section>

    {{-- Skills Categories --}}
    <section class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            {{-- Frontend Skills --}}
            <div class="mb-16">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                        💻
                    </div>
                    <h2 class="text-3xl font-bold text-white">Frontend Development</h2>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">React</h3>
                            <span class="text-sm text-emerald-400">90%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[90%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Component-based UI development, hooks, state management</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Vue.js</h3>
                            <span class="text-sm text-emerald-400">85%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[85%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Vue 3 Composition API, Pinia, Vue Router</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Next.js</h3>
                            <span class="text-sm text-emerald-400">88%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[88%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Server-side rendering, static site generation</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">TypeScript</h3>
                            <span class="text-sm text-emerald-400">85%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[85%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Type-safe development, interfaces, generics</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Tailwind CSS</h3>
                            <span class="text-sm text-emerald-400">92%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[92%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Utility-first CSS, responsive design, custom components</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">JavaScript</h3>
                            <span class="text-sm text-emerald-400">95%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[95%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">ES6+, async/await, modern JavaScript patterns</p>
                    </div>
                </div>
            </div>

            {{-- Backend Skills --}}
            <div class="mb-16">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                        ⚙️
                    </div>
                    <h2 class="text-3xl font-bold text-white">Backend Development</h2>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Laravel</h3>
                            <span class="text-sm text-emerald-400">90%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[90%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">MVC architecture, Eloquent ORM, API development</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">PHP</h3>
                            <span class="text-sm text-emerald-400">88%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[88%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Object-oriented programming, PSR standards</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Node.js</h3>
                            <span class="text-sm text-emerald-400">80%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[80%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Express.js, RESTful APIs, real-time applications</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Python</h3>
                            <span class="text-sm text-emerald-400">75%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[75%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">FastAPI, Django, scripting and automation</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">REST APIs</h3>
                            <span class="text-sm text-emerald-400">92%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[92%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">API design, authentication, documentation</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">GraphQL</h3>
                            <span class="text-sm text-emerald-400">70%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[70%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Schema design, resolvers, Apollo Server</p>
                    </div>
                </div>
            </div>

            {{-- Database Skills --}}
            <div class="mb-16">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                        🗄️
                    </div>
                    <h2 class="text-3xl font-bold text-white">Database & Storage</h2>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">MySQL</h3>
                            <span class="text-sm text-emerald-400">90%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[90%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Query optimization, indexing, transactions</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">PostgreSQL</h3>
                            <span class="text-sm text-emerald-400">85%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[85%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Advanced queries, stored procedures, JSON support</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">MongoDB</h3>
                            <span class="text-sm text-emerald-400">80%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[80%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">NoSQL, aggregation pipelines, indexing</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-semibold text-white">Redis</h3>
                            <span class="text-sm text-emerald-400">75%</span>
                        </div>
                        <div class="mb-2 h-2 overflow-hidden rounded-full bg-white/5">
                            <div class="h-full w-[75%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                        </div>
                        <p class="text-sm text-slate-400">Caching, session management, pub/sub</p>
                    </div>
                </div>
            </div>

            {{-- Tools & Technologies --}}
            <div>
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                        🛠️
                    </div>
                    <h2 class="text-3xl font-bold text-white">Tools & Technologies</h2>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex justify-center">
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                                🐳
                            </div>
                        </div>
                        <h3 class="mb-2 font-semibold text-white">Docker</h3>
                        <p class="text-sm text-slate-400">Containerization, orchestration</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex justify-center">
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                                ☁️
</div>
                        </div>
                        <h3 class="mb-2 font-semibold text-white">AWS</h3>
                        <p class="text-sm text-slate-400">Cloud services, deployment</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex justify-center">
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                                🔀
                            </div>
                        </div>
                        <h3 class="mb-2 font-semibold text-white">Git</h3>
                        <p class="text-sm text-slate-400">Version control, collaboration</p>
                    </div>
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex justify-center">
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                                ⚡
                            </div>
                        </div>
                        <h3 class="mb-2 font-semibold text-white">CI/CD</h3>
                        <p class="text-sm text-slate-400">Automated deployment pipelines</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Additional Skills --}}
    <section class="bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Additional Skills
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Agile/Scrum</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Test-Driven Development</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Code Review</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Performance Optimization</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Security Best Practices</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Responsive Design</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">UI/UX Design</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Problem Solving</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Team Leadership</span>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">Mentoring</span>
            </div>
        </div>
    </section>
</x-layout>
