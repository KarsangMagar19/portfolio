<x-layout>
    {{-- Hero Section --}}
    <section
        class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]">
        </div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="lang-text" data-en="My" data-np="मेरा">My</span>
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        <span class="lang-text" data-en="Projects" data-np="परियोजनाहरू">Projects</span>
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 sm:text-xl lang-text"
                    data-en="A collection of projects I've built, showcasing my skills and passion for development."
                    data-np="मेरो सीप र विकासप्रतिको जोश देखाउने परियोजनाहरूको संग्रह।">
                    A collection of projects I've built, showcasing my skills and passion for development.
                </p>
            </div>
        </div>
    </section>

    {{-- Projects Grid --}}
    <section class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 flex items-center justify-between">
                <h2 class="text-2xl font-bold text-white sm:text-3xl lang-text" data-en="Featured Projects" data-np="प्रमुख परियोजनाहरू">Featured Projects</h2>
                <div class="flex gap-2">
                    <button onclick="filterProjects('all')"
                        class="filter-btn active rounded-lg border border-white/10 bg-emerald-500/20 px-4 py-2 text-sm text-emerald-400 transition hover:bg-emerald-500/30 lang-text"
                        data-en="All" data-np="सबै">
                        All
                    </button>
                    <button onclick="filterProjects('web')"
                        class="filter-btn rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 transition hover:bg-white/10 hover:text-white lang-text"
                        data-en="Web" data-np="वेब">
                        Web
                    </button>
                    <button onclick="filterProjects('mobile')"
                        class="filter-btn rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 transition hover:bg-white/10 hover:text-white lang-text"
                        data-en="Mobile" data-np="मोबाइल">
                        Mobile
                    </button>
                    <button onclick="filterProjects('desktop')"
                        class="filter-btn rounded-lg border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 transition hover:bg-white/10 hover:text-white lang-text"
                        data-en="Desktop" data-np="डेस्कटप">
                        Desktop
                    </button>
                </div>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <div data-category="{{ strtolower($project->category->value) }}"
                        class="project-card group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100">
                        </div>
                        <div class="relative p-6">
                            <div class="mb-4 flex items-center justify-between">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <div class="flex gap-2">
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank"
                                            class="text-slate-400 transition hover:text-emerald-400" aria-label="View code">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if($project->live_url)
                                        <a href="{{ $project->live_url }}" target="_blank"
                                            class="text-slate-400 transition hover:text-emerald-400" aria-label="View live">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold text-white lang-text"
                                data-en="{{ $project->title }}"
                                data-np="{{ $project->title_np ?: $project->title }}">{{ $project->title }}</h3>
                            <div
                                class="mb-4 text-sm leading-relaxed text-slate-300 [&_p]:mb-2 [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_li]:mb-1 lang-text"
                                data-html="true"
                                data-en="{{ $project->description }}"
                                data-np="{{ $project->description_np ?: $project->description }}">
                                {!! $project->description !!}
                            </div>
                            <div class="mb-4 flex flex-wrap gap-2">
                                @foreach ($project->technologies as $technology)
                                    <span
                                        class="rounded-full bg-emerald-500/20 px-2.5 py-1 text-xs text-emerald-400">{{ $technology->title }}</span>
                                @endforeach
                            </div>
                            @if($project->live_url)
                                <div class="flex items-center gap-2 text-sm text-emerald-400">
                                    <span class="lang-text" data-en="View Details" data-np="विवरण हेर्नुहोस्">View Details</span>
                                    <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="bg-slate-950 py-20">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text"
                data-en="Have a Project in Mind?"
                data-np="मनमा कुनै परियोजना छ?">
                Have a Project in Mind?
            </h2>
            <p class="mb-8 text-lg text-slate-300 lang-text"
                data-en="I'm always open to discussing new projects and opportunities. Let's bring your ideas to life!"
                data-np="म सधैं नयाँ परियोजनाहरू र अवसरहरूबारे छलफल गर्न तयार छु। तपाईंका विचारहरूलाई जीवन्त बनाऊँ!">
                I'm always open to discussing new projects and opportunities. Let's bring your ideas to life!
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/50">
                <span class="lang-text" data-en="Get In Touch" data-np="सम्पर्क गर्नुहोस्">Get In Touch</span>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </section>

    <script>
        function filterProjects(category) {
            const projects = document.querySelectorAll('.project-card');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-emerald-500/20', 'text-emerald-400');
                btn.classList.add('bg-white/5', 'text-slate-300');
            });

            event.target.classList.add('active', 'bg-emerald-500/20', 'text-emerald-400');
            event.target.classList.remove('bg-white/5', 'text-slate-300');

            projects.forEach(project => {
                const projectCategory = project.getAttribute('data-category');

                if (category === 'all' || projectCategory === category) {
                    project.style.display = 'block';
                    project.style.opacity = '0';
                    setTimeout(() => {
                        project.style.transition = 'opacity 0.3s';
                        project.style.opacity = '1';
                    }, 10);
                } else {
                    project.style.display = 'none';
                }
            });
        }
    </script>
</x-layout>