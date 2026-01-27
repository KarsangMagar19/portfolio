<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-white/10 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    About
                    <span class="bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent">
                        Me
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-300 sm:text-xl">
                    Get to know more about my journey, passion, and what drives me as a developer.
                </p>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="border-b border-white/10 bg-slate-900/40 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
                {{-- Left Column --}}
                <div class="space-y-8">
                    <div>
                        <h2 class="mb-4 text-2xl font-bold text-white">Who I Am</h2>
                        <div class="mb-4 text-lg leading-relaxed text-slate-300 space-y-3">
                            {!! $personalinfo?->long_bio !!}
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-4 text-2xl font-bold text-white">My Approach</h2>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 font-semibold text-white">Problem Solving</h3>
                                    <p class="text-slate-300">I approach every challenge with a systematic mindset, breaking down complex problems into manageable solutions.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 font-semibold text-white">Performance First</h3>
                                    <p class="text-slate-300">I prioritize performance and user experience, ensuring applications are fast, responsive, and accessible.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 font-semibold text-white">Continuous Learning</h3>
                                    <p class="text-slate-300">The tech world evolves rapidly, and I'm committed to staying current with new tools, frameworks, and methodologies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="space-y-8">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                        <h2 class="mb-6 text-2xl font-bold text-white">Personal Info</h2>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                                <span class="text-slate-400">Full Name</span>
                                <span class="font-medium text-white">
                                    {{ $personalinfo ? $personalinfo->first_name . ' ' . $personalinfo->last_name : 'N/A' }}
                                </span>
                            </div>
                            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                                <span class="text-slate-400">Location</span>
                                <span class="font-medium text-white">Kathmandu, Nepal</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                                <span class="text-slate-400">Email</span>
                                @if ($personalinfo?->email)
                                    <a href="mailto:{{ $personalinfo->email }}" class="font-medium text-emerald-400 transition hover:text-emerald-300">
                                        {{ $personalinfo->email }}
                                    </a>
                                @else
                                    <span class="font-medium text-slate-400">N/A</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                                <span class="text-slate-400">Phone</span>
                                @if ($personalinfo?->phone)
                                    <a href="tel:{{ $personalinfo->phone }}" class="font-medium text-white">
                                        {{ $personalinfo->phone }}
                                    </a>
                                @else
                                    <span class="font-medium text-slate-400">N/A</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-slate-400">Availability</span>
                                @php
                                    $available = $personalinfo?->is_available ?? true;
                                @endphp
                                <span class="rounded-full px-3 py-1 text-xs font-medium {{ $available ? 'bg-emerald-500/20 text-emerald-400' : 'bg-slate-700/40 text-slate-300' }}">
                                    {{ $available ? 'Open to work' : 'Not available' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                        <h2 class="mb-6 text-2xl font-bold text-white">Education</h2>
                        <div class="space-y-4">
                            @forelse ($educations ?? [] as $education)
                                <div class="rounded-xl border border-white/10 bg-slate-900/40 p-4">
                                    <h3 class="mb-1 text-base font-semibold text-white">
                                        {{ $education->degree_name }}
                                    </h3>
                                    <p class="mb-1 text-sm text-emerald-400">
                                        {{ $education->university_name }}
                                    </p>
                                    <p class="mb-2 text-xs text-slate-400">
                                        {{ $education->start_date }}
                                        -
                                        {{ $education->is_current ? 'Present' : $education->end_date }}
                                    </p>
                                    @if (! empty($education->description))
                                        <p class="text-sm text-slate-300">
                                            {{ $education->description }}
                                        </p>
                                    @endif
                                </div>
                            @empty
                                <p class="text-sm text-slate-400">
                                    Education details will be added soon.
                                </p>
                            @endforelse
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Interests Section --}}
    <section class="bg-slate-950 py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                    Interests & Hobbies
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                            📚
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Reading</h3>
                    <p class="text-sm text-slate-400">Tech blogs, documentation, and programming books</p>
                </div>
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                            🎮
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Gaming</h3>
                    <p class="text-sm text-slate-400">Strategy games and puzzle solving</p>
                </div>
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                            🎵
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Music</h3>
                    <p class="text-sm text-slate-400">Exploring new genres and artists</p>
                </div>
                <div class="group rounded-xl border border-white/10 bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-white/10">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/20 text-3xl">
                            🚴
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Fitness</h3>
                    <p class="text-sm text-slate-400">Staying active and healthy</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
