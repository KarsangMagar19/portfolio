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
                    @foreach ($experience as $index => $item)
                        <div class="relative flex gap-8 md:gap-12">
                            <div class="flex w-full flex-col md:flex-row md:items-center">
                                @if ($index % 2 == 0)
                                    {{-- Left Side Content (Even) --}}
                                    <div class="md:w-1/2 md:pr-8 md:text-right">
                                        <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-4 py-1 text-sm font-medium text-emerald-400">
                                            {{ $item->start_date }} - {{ $item->is_current ? 'Present' : $item->end_date }}
                                        </div>
                                        <h3 class="mb-2 text-2xl font-bold text-white">{{ $item->title }}</h3>
                                        <p class="mb-4 text-lg text-emerald-400">{{ $item->company }}</p>
                                        <div class="text-slate-300 [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_li]:mb-1">
                                            {!! $item->description !!}
                                        </div>
                                    </div>
                                    {{-- Center Dot (Even) --}}
                                    <div class="relative mt-6 flex items-center md:mt-0 md:w-1/2 md:pl-8">
                                        <div class="absolute left-0 top-1/2 h-4 w-4 -translate-x-1/2 -translate-y-1/2 rounded-full border-4 border-slate-950 bg-emerald-500 md:left-1/2"></div>
                                    </div>
                                @else
                                    {{-- Center Dot (Odd) --}}
                                    <div class="relative mt-6 flex items-center md:mt-0 md:w-1/2 md:pr-8">
                                        <div class="absolute right-0 top-1/2 h-4 w-4 translate-x-1/2 -translate-y-1/2 rounded-full border-4 border-slate-950 bg-emerald-500 md:left-0 md:right-auto md:translate-x-0"></div>
                                    </div>
                                    {{-- Right Side Content (Odd) --}}
                                    <div class="md:w-1/2 md:pl-8">
                                        <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-4 py-1 text-sm font-medium text-emerald-400">
                                            {{ $item->start_date }} - {{ $item->is_current ? 'Present' : $item->end_date }}
                                        </div>
                                        <h3 class="mb-2 text-2xl font-bold text-white">{{ $item->title }}</h3>
                                        <p class="mb-4 text-lg text-emerald-400">{{ $item->company }}</p>
                                        <div class="text-slate-300 [&_ul]:list-disc [&_ul]:pl-5 [&_ol]:list-decimal [&_ol]:pl-5 [&_li]:mb-1">
                                            {!! $item->description !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
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
                @foreach ($technologies as $technology)
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">{{ $technology->title}}</span>
                @endforeach 
                
            </div>
        </div>
    </section>
</x-layout>
