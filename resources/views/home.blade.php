<x-layout>
    {{-- Hero Section --}}
    <section
        class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        {{-- Animated Background Elements --}}
        <div class="absolute inset-0 overflow-hidden">
            {{-- Animated Gradient Orbs --}}
            <div
                class="absolute -left-1/4 top-1/4 h-[500px] w-[500px] animate-float rounded-full bg-emerald-500/20 blur-3xl">
            </div>
            <div
                class="absolute -right-1/4 bottom-1/4 h-[600px] w-[600px] animate-float-delayed rounded-full bg-teal-500/20 blur-3xl">
            </div>
            <div
                class="absolute left-1/2 top-1/2 h-[400px] w-[400px] -translate-x-1/2 -translate-y-1/2 animate-pulse-slow rounded-full bg-emerald-400/10 blur-3xl">
            </div>

            {{-- Animated Grid Pattern --}}
            <div
                class="absolute inset-0 bg-[linear-gradient(rgba(16,185,129,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(16,185,129,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]">
            </div>

            {{-- Moving Gradient Mesh --}}
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(16,185,129,0.15),transparent_50%)] animate-gradient-shift">
            </div>
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(20,184,166,0.15),transparent_50%)] animate-gradient-shift-delayed">
            </div>

            {{-- Floating Particles --}}
            <div class="absolute left-1/4 top-1/3 h-2 w-2 animate-float-particle rounded-full bg-emerald-400/40"></div>
            <div
                class="absolute left-3/4 top-1/4 h-1.5 w-1.5 animate-float-particle-delayed rounded-full bg-teal-400/40">
            </div>
            <div
                class="absolute left-1/2 top-3/4 h-2.5 w-2.5 animate-float-particle-slow rounded-full bg-emerald-300/30">
            </div>
            <div class="absolute left-1/5 top-2/3 h-1 w-1 animate-float-particle rounded-full bg-teal-300/40"></div>
            <div
                class="absolute left-4/5 top-1/2 h-2 w-2 animate-float-particle-delayed rounded-full bg-emerald-400/30">
            </div>
        </div>

        {{-- Content --}}
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                @if ($personalinfo && $personalinfo->is_available)
                    <div
                        class="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-1.5 text-sm font-medium text-emerald-400 backdrop-blur-sm">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400"></span>
                        </span>
                        <span class="lang-text" data-en="Available for opportunities" data-np="अवसरका लागि उपलब्ध">Available for opportunities</span>
                    </div>
                @endif
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="lang-text" data-en="Hi, I'm" data-np="नमस्ते, म हुँ">Hi, I'm</span>
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        Karsang Thapa Magar
                    </span>
                </h1>
                <p class="mx-auto mb-8 max-w-2xl text-lg text-slate-300 sm:text-xl lang-text"
                    data-en="A passionate developer crafting beautiful and functional web experiences. I turn ideas into reality through code."
                    data-np="सुन्दर र कार्यात्मक वेब अनुभवहरू बनाउने एक उत्साही डेभलपर। म कोडका माध्यमबाट विचारहरूलाई वास्तविकतामा बदल्छु।">
                    A passionate developer crafting beautiful and functional web experiences.
                    I turn ideas into reality through code.
                </p>
                <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="{{ route('projects') }}"
                        class="group inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/50">
                        <span class="lang-text" data-en="View My Work" data-np="मेरो काम हेर्नुहोस्">View My Work</span>
                        <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50">
                        <span class="lang-text" data-en="Get In Touch" data-np="सम्पर्क गर्नुहोस्">Get In Touch</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text" data-en="About Me" data-np="मेरो बारेमा">
                    About Me
                </h2>
                <div
                    class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent">
                </div>
            </div>
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
                <div>
                    <p class="mb-4 text-lg leading-relaxed text-slate-300 lang-text"
                        data-en="{{ $personalinfo->short_bio }}"
                        data-np="{{ $personalinfo->short_bio_np ?: $personalinfo->short_bio }}">
                        {{$personalinfo->short_bio}}
                    </p>

                    <a href="{{ route('about') }}"
                        class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300">
                        <span class="lang-text" data-en="Learn more about me" data-np="मेरो बारेमा थप जान्नुहोस्">Learn more about me</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
                <div class="flex items-center justify-center">
                    <div class="relative">
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-400/20 to-teal-400/20 blur-2xl">
                        </div>
                        <div class="relative rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400 lang-text" data-en="Location:" data-np="स्थान:">Location:</span>
                                    <span class="font-medium text-white">Kathmandu, Nepal</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400 lang-text" data-en="Available:" data-np="उपलब्धता:">Available:</span>
                                    <span
                                        class="font-medium {{ ($personalinfo && $personalinfo->is_available) ? 'text-emerald-400' : 'text-slate-400' }}">
                                        {{ ($personalinfo && $personalinfo->is_available) ? 'Open to work' : 'Not available' }}
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400 lang-text" data-en="Email:" data-np="इमेल:">Email:</span>
                                    <span class="font-medium text-white">karsangmagar19@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="border-b border-white/10 bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text" data-en="Experience" data-np="अनुभव">
                    Experience
                </h2>
                <div
                    class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent">
                </div>
            </div>
            <div class="space-y-8">
                @forelse ($latestExperiences ?? [] as $experience)
                    <div
                        class="group relative rounded-xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-2 flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-semibold text-white lang-text"
                                    data-en="{{ $experience->title }}"
                                    data-np="{{ $experience->title_np ?: $experience->title }}">
                                    {{ $experience->title }}
                                </h3>
                                <p class="text-emerald-400 lang-text"
                                    data-en="{{ $experience->company }}"
                                    data-np="{{ $experience->company_np ?: $experience->company }}">
                                    {{ $experience->company }}
                                </p>
                            </div>
                            <span class="rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-medium text-emerald-400">
                                {{ $experience->start_date }}
                                -
                                <span class="lang-text" data-en="{{ $experience->is_current ? 'Present' : $experience->end_date }}" data-np="{{ $experience->is_current ? 'हालसालै' : $experience->end_date }}">{{ $experience->is_current ? 'Present' : $experience->end_date }}</span>
                            </span>
                        </div>
                        <div
                            class="text-slate-300 [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_li]:mb-1 lang-text"
                            data-html="true"
                            data-en="{{ $experience->description }}"
                            data-np="{{ $experience->description_np ?: $experience->description }}">
                            {!! $experience->description !!}
                        </div>
                    </div>
                @empty
                    <p class="text-slate-400 lang-text" data-en="Experience details will be added soon." data-np="अनुभवका विवरणहरू चाँडै थपिनेछन्।">
                        Experience details will be added soon.
                    </p>
                @endforelse
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('experience') }}"
                    class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300">
                    <span class="lang-text" data-en="View full experience" data-np="पूर्ण अनुभव हेर्नुहोस्">View full experience</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Projects Section --}}
    <section id="projects" class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text" data-en="Projects" data-np="परियोजनाहरू">
                    Projects
                </h2>
                <div
                    class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent">
                </div>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($randomProjects as $project)
                    <div
                        class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 transition group-hover:opacity-100">
                        </div>
                        <div class="relative p-6">
                            <div class="mb-4 flex items-center justify-between">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                @if($project->live_url)
                                    <a href="{{ $project->live_url }}" target="_blank"
                                        class="text-slate-400 transition hover:text-emerald-400">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                            <h3 class="mb-2 text-lg font-semibold text-white lang-text"
                                data-en="{{ $project->title }}"
                                data-np="{{ $project->title_np ?: $project->title }}">{{ $project->title }}</h3>
                            <div
                                class="mb-4 text-sm text-slate-300 line-clamp-3 [&_p]:mb-2 [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_li]:mb-1 lang-text"
                                data-html="true"
                                data-en="{{ $project->description }}"
                                data-np="{{ $project->description_np ?: $project->description }}">
                                {!! $project->description !!}
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($project->technologies->take(3) as $technology)
                                    <span
                                        class="rounded-full bg-emerald-500/20 px-2.5 py-1 text-xs text-emerald-400">{{ $technology->title }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('projects') }}"
                    class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300">
                    <span class="lang-text" data-en="View all projects" data-np="सबै परियोजनाहरू हेर्नुहोस्">View all projects</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Skills Section --}}
    <section id="skills" class="border-b border-white/10 bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text" data-en="Skills & Technologies" data-np="सीपहरू र प्रविधिहरू">
                    Skills & Technologies
                </h2>
                <div
                    class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent">
                </div>
            </div>
            @php
                $categoryConfig = [
                    'Frontend Development' => ['emoji' => '💻', 'label' => 'Frontend'],
                    'Backend Development'  => ['emoji' => '⚙️', 'label' => 'Backend'],
                    'Database & Storage'   => ['emoji' => '🗄️', 'label' => 'Database'],
                    'Tools & Technologies' => ['emoji' => '🛠️', 'label' => 'Tools'],
                ];
                $grouped = isset($skills) ? $skills->groupBy('category') : collect();
            @endphp
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($categoryConfig as $catName => $config)
                    <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div class="mb-4 flex justify-center">
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                                {{ $config['emoji'] }}
                            </div>
                        </div>
                        <h3 class="mb-2 font-semibold text-white">{{ $config['label'] }}</h3>
                        <p class="text-sm text-slate-400">
                            @if($grouped->has($catName))
                                <span class="lang-text"
                                    data-en="{{ $grouped[$catName]->pluck('name')->join(', ') }}"
                                    data-np="{{ $grouped[$catName]->map(fn($s) => $s->name_np ?: $s->name)->join(', ') }}">
                                    {{ $grouped[$catName]->pluck('name')->join(', ') }}
                                </span>
                            @else
                                <span class="lang-text" data-en="No skills added yet" data-np="अहिलेसम्म कुनै सीप थपिएको छैन">No skills added yet</span>
                            @endif
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('skills') }}"
                    class="inline-flex items-center gap-2 text-emerald-400 transition hover:text-emerald-300">
                    <span class="lang-text" data-en="View all skills" data-np="सबै सीपहरू हेर्नुहोस्">View all skills</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="bg-slate-900/40 py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text" data-en="Get In Touch" data-np="सम्पर्कमा आउनुहोस्">
                    Get In Touch
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 lang-text"
                    data-en="Have a project in mind or want to collaborate? I'd love to hear from you. Let's create something amazing together."
                    data-np="कुनै परियोजना मनमा छ वा सहकार्य गर्न चाहनुहुन्छ? म तपाईंसँग सुन्न उत्सुक छु। सँगै केही अद्भुत बनाऊँ।">
                    Have a project in mind or want to collaborate? I'd love to hear from you.
                    Let's create something amazing together.
                </p>
                <div
                    class="mx-auto mt-4 h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent">
                </div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                <div class="mb-8 grid gap-6 sm:grid-cols-2">
                    <a href="mailto:karsangmagar19@gmail.com"
                        class="group flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 p-4 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400 transition group-hover:bg-emerald-500/30">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-400 lang-text" data-en="Email" data-np="इमेल">Email</p>
                            <p class="font-medium text-white">karsangmagar19@gmail.com</p>
                        </div>
                    </a>
                    <a href="tel:+9779803665780"
                        class="group flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 p-4 transition hover:border-emerald-500/30 hover:bg-white/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400 transition group-hover:bg-emerald-500/30">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-400 lang-text" data-en="Phone" data-np="फोन">Phone</p>
                            <p class="font-medium text-white">+977-9803665780</p>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500/50">
                        <span class="lang-text" data-en="Send a Message" data-np="सन्देश पठाउनुहोस्">Send a Message</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>