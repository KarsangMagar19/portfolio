<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="lang-text" data-en="Skills &" data-np="सीपहरू र">Skills &</span>
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        <span class="lang-text" data-en="Technologies" data-np="प्रविधिहरू">Technologies</span>
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 sm:text-xl lang-text"
                    data-en="A comprehensive overview of my technical expertise and the tools I use to build amazing products."
                    data-np="मेरो प्राविधिक दक्षता र अद्भुत उत्पादनहरू बनाउन प्रयोग गर्ने उपकरणहरूको एक व्यापक अवलोकन।">
                    A comprehensive overview of my technical expertise and the tools I use to build amazing products.
                </p>
            </div>
        </div>
    </section>

    {{-- Skills Section --}}
    <section class="border-b border-white/10 bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lang-text"
                    data-en="Skills & Technologies" data-np="सीपहरू र प्रविधिहरू">
                    Skills & Technologies
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>

            @if($skills->isEmpty())
                <p class="text-center text-lg text-slate-400 lang-text"
                    data-en="No skills have been added yet. Add them from the admin panel."
                    data-np="अहिलेसम्म कुनै सीप थपिएको छैन। एडमिन प्यानलबाट थप्नुहोस्।">No skills have been added yet. Add them from the admin panel.</p>
            @else
                @php
                    $categoryConfig = [
                        'Frontend Development' => ['emoji' => '💻', 'label' => 'Frontend',  'label_np' => 'फ्रन्टएन्ड'],
                        'Backend Development'  => ['emoji' => '⚙️', 'label' => 'Backend',   'label_np' => 'ब्याकएन्ड'],
                        'Database & Storage'   => ['emoji' => '🗄️', 'label' => 'Database',  'label_np' => 'डाटाबेस'],
                        'Tools & Technologies' => ['emoji' => '🛠️', 'label' => 'Tools',     'label_np' => 'उपकरण'],
                        'Additional Skills'    => ['emoji' => '✨', 'label' => 'Additional', 'label_np' => 'थप सीप'],
                    ];

                    $grouped = $skills->groupBy('category');
                @endphp

                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach($categoryConfig as $catName => $config)
                        @if($grouped->has($catName) && $catName !== 'Additional Skills')
                            <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                                <div class="mb-4 flex justify-center">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-2xl">
                                        {{ $config['emoji'] }}
                                    </div>
                                </div>
                                <h3 class="mb-2 font-semibold text-white lang-text"
                                    data-en="{{ $config['label'] }}"
                                    data-np="{{ $config['label_np'] }}">{{ $config['label'] }}</h3>
                                <p class="text-sm text-slate-400">
                                    <span class="lang-text"
                                        data-en="{{ $grouped[$catName]->pluck('name')->join(', ') }}"
                                        data-np="{{ $grouped[$catName]->map(fn($s) => $s->name_np ?: $s->name)->join(', ') }}">
                                        {{ $grouped[$catName]->pluck('name')->join(', ') }}
                                    </span>
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>

                {{-- Additional Skills pill section --}}
                @if($grouped->has('Additional Skills'))
                    <div class="mt-16">
                        <div class="mb-8 text-center">
                            <h3 class="mb-4 text-2xl font-bold text-white lang-text"
                                data-en="Additional Skills" data-np="थप सीपहरू">Additional Skills</h3>
                            <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
                        </div>
                        <div class="flex flex-wrap justify-center gap-3">
                            @foreach($grouped['Additional Skills'] as $skill)
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300 lang-text"
                                    data-en="{{ $skill->name }}"
                                    data-np="{{ $skill->name_np ?: $skill->name }}">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </section>

</x-layout>
