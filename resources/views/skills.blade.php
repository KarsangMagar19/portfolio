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

    {{-- Skills Section --}}
    <section class="border-b border-white/10 bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Skills & Technologies
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>

            @if($skills->isEmpty())
                <p class="text-center text-lg text-slate-400">No skills have been added yet. Add them from the admin panel.</p>
            @else
                @php
                    $categoryConfig = [
                        'Frontend Development' => ['emoji' => '💻', 'label' => 'Frontend'],
                        'Backend Development'  => ['emoji' => '⚙️', 'label' => 'Backend'],
                        'Database & Storage'   => ['emoji' => '🗄️', 'label' => 'Database'],
                        'Tools & Technologies' => ['emoji' => '🛠️', 'label' => 'Tools'],
                        'Additional Skills'    => ['emoji' => '✨', 'label' => 'Additional'],
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
                                <h3 class="mb-2 font-semibold text-white">{{ $config['label'] }}</h3>
                                <p class="text-sm text-slate-400">
                                    {{ $grouped[$catName]->pluck('name')->join(', ') }}
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>

                {{-- Additional Skills pill section --}}
                @if($grouped->has('Additional Skills'))
                    <div class="mt-16">
                        <div class="mb-8 text-center">
                            <h3 class="mb-4 text-2xl font-bold text-white">Additional Skills</h3>
                            <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
                        </div>
                        <div class="flex flex-wrap justify-center gap-3">
                            @foreach($grouped['Additional Skills'] as $skill)
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
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
