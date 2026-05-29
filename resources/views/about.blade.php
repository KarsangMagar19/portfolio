<x-layout>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden border-b border-slate-200/50 dark:border-white/10 bg-gradient-to-b from-slate-50 via-slate-50 to-slate-100 dark:from-slate-950 dark:via-slate-950 dark:to-slate-900 transition-colors duration-300">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.05),transparent_50%)] dark:bg-[radial-gradient(circle_at_50%_50%,rgba(16,185,129,0.1),transparent_50%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="lang-text" data-en="About" data-np="मेरो बारेमा">About</span>
                    <span class="bg-gradient-to-r from-emerald-500 to-teal-400 dark:from-emerald-400 dark:to-teal-300 bg-clip-text text-transparent">
                        <span class="lang-text" data-en="Me" data-np="">Me</span>
                    </span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-slate-600 dark:text-slate-300 sm:text-xl lang-text"
                    data-en="Get to know more about my journey, passion, and what drives me as a developer."
                    data-np="मेरो यात्रा, जोश र के कुराले मलाई एक डेभलपरको रूपमा अघि बढाउँछ भनी थप जान्नुहोस्।">
                    Get to know more about my journey, passion, and what drives me as a developer.
                </p>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="border-b border-slate-200/50 dark:border-white/10 bg-slate-100/40 dark:bg-slate-900/40 py-20 transition-colors duration-300">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
                {{-- Left Column --}}
                <div class="space-y-8">
                    <div>
                        <h2 class="mb-4 text-2xl font-bold text-slate-900 dark:text-white lang-text" data-en="Who I Am" data-np="म को हुँ">Who I Am</h2>
                        <div class="mb-4 text-lg leading-relaxed text-slate-600 dark:text-slate-300 space-y-3 lang-text"
                            data-html="true"
                            data-en="{{ $personalinfo?->long_bio }}"
                            data-np="{{ $personalinfo?->long_bio_np ?: $personalinfo?->long_bio }}">
                            {!! $personalinfo?->long_bio !!}
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-4 text-2xl font-bold text-slate-900 dark:text-white lang-text" data-en="My Approach" data-np="मेरो तरिका">My Approach</h2>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 border border-emerald-500/10">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 font-semibold text-slate-900 dark:text-white lang-text" data-en="Problem Solving" data-np="समस्या समाधान">Problem Solving</h3>
                                    <p class="text-slate-600 dark:text-slate-300 lang-text"
                                        data-en="I approach every challenge with a systematic mindset, breaking down complex problems into manageable solutions."
                                        data-np="म हरेक चुनौतीलाई व्यवस्थित मानसिकताले सामना गर्छु, जटिल समस्याहरूलाई व्यवस्थापनयोग्य समाधानमा विभाजन गर्दै।">I approach every challenge with a systematic mindset, breaking down complex problems into manageable solutions.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 border border-emerald-500/10">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 font-semibold text-slate-900 dark:text-white lang-text" data-en="Performance First" data-np="प्रदर्शन प्राथमिकता">Performance First</h3>
                                    <p class="text-slate-600 dark:text-slate-300 lang-text"
                                        data-en="I prioritize performance and user experience, ensuring applications are fast, responsive, and accessible."
                                        data-np="म प्रदर्शन र प्रयोगकर्ता अनुभवलाई प्राथमिकता दिन्छु, एप्लिकेसनहरू छिटो, उत्तरदायी र पहुँचयोग्य छन् भनी सुनिश्चित गर्दै।">I prioritize performance and user experience, ensuring applications are fast, responsive, and accessible.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 border border-emerald-500/10">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 font-semibold text-slate-900 dark:text-white lang-text" data-en="Continuous Learning" data-np="निरन्तर सिकाइ">Continuous Learning</h3>
                                    <p class="text-slate-600 dark:text-slate-300 lang-text"
                                        data-en="The tech world evolves rapidly, and I'm committed to staying current with new tools, frameworks, and methodologies."
                                        data-np="प्रविधि संसार तीव्र गतिमा विकसित हुँदैछ, र म नयाँ उपकरणहरू, फ्रेमवर्कहरू र विधिहरूसँग अपडेट रहन प्रतिबद्ध छु।">The tech world evolves rapidly, and I'm committed to staying current with new tools, frameworks, and methodologies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="space-y-8">
                    <div class="rounded-2xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 p-8 backdrop-blur-sm transition-colors duration-300">
                        <h2 class="mb-6 text-2xl font-bold text-slate-900 dark:text-white lang-text" data-en="Personal Info" data-np="व्यक्तिगत जानकारी">Personal Info</h2>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between border-b border-slate-200 dark:border-white/10 pb-4">
                                <span class="text-slate-500 dark:text-slate-400 lang-text" data-en="Full Name" data-np="पूरा नाम">Full Name</span>
                                <span class="font-medium text-slate-800 dark:text-white">
                                    {{ $personalinfo ? $personalinfo->first_name . ' ' . $personalinfo->last_name : 'N/A' }}
                                </span>
                            </div>
                            <div class="flex items-center justify-between border-b border-slate-200 dark:border-white/10 pb-4">
                                <span class="text-slate-500 dark:text-slate-400 lang-text" data-en="Location" data-np="स्थान">Location</span>
                                <span class="font-medium text-slate-800 dark:text-white">Kathmandu, Nepal</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-slate-200 dark:border-white/10 pb-4">
                                <span class="text-slate-500 dark:text-slate-400 lang-text" data-en="Email" data-np="इमेल">Email</span>
                                @if ($personalinfo?->email)
                                    <a href="mailto:{{ $personalinfo->email }}" class="font-medium text-emerald-600 dark:text-emerald-400 transition hover:text-emerald-500 dark:hover:text-emerald-300 break-all">
                                        {{ $personalinfo->email }}
                                    </a>
                                @else
                                    <span class="font-medium text-slate-500 dark:text-slate-400">N/A</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between border-b border-slate-200 dark:border-white/10 pb-4">
                                <span class="text-slate-500 dark:text-slate-400 lang-text" data-en="Phone" data-np="फोन">Phone</span>
                                @if ($personalinfo?->phone)
                                    <a href="tel:{{ $personalinfo->phone }}" class="font-medium text-slate-800 dark:text-white hover:text-emerald-500">
                                        {{ $personalinfo->phone }}
                                    </a>
                                @else
                                    <span class="font-medium text-slate-500 dark:text-slate-400">N/A</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-slate-500 dark:text-slate-400 lang-text" data-en="Availability" data-np="उपलब्धता">Availability</span>
                                @php
                                    $available = $personalinfo?->is_available ?? true;
                                @endphp
                                <span class="rounded-full px-3 py-1 text-xs font-semibold border border-emerald-500/20 lang-text
                                    {{ $available ? 'bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400' : 'bg-slate-200 dark:bg-slate-700/40 text-slate-600 dark:text-slate-300' }}"
                                    data-en="{{ $available ? 'Open to work' : 'Not available' }}"
                                    data-np="{{ $available ? 'काम गर्न तयार' : 'उपलब्ध छैन' }}">
                                    {{ $available ? 'Open to work' : 'Not available' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 p-8 backdrop-blur-sm transition-colors duration-300">
                        <h2 class="mb-6 text-2xl font-bold text-slate-900 dark:text-white lang-text" data-en="Education" data-np="शिक्षा">Education</h2>
                        <div class="space-y-4">
                            @forelse ($educations ?? [] as $education)
                                <div class="rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-slate-900/40 p-4 transition-colors duration-300">
                                    <h3 class="mb-1 text-base font-semibold text-slate-900 dark:text-white lang-text"
                                        data-en="{{ $education->degree_name }}"
                                        data-np="{{ $education->degree_name_np ?: $education->degree_name }}">
                                        {{ $education->degree_name }}
                                    </h3>
                                    <p class="mb-1 text-sm font-medium text-emerald-600 dark:text-emerald-400 lang-text"
                                        data-en="{{ $education->university_name }}"
                                        data-np="{{ $education->university_name_np ?: $education->university_name }}">
                                        {{ $education->university_name }}
                                    </p>
                                    <p class="mb-2 text-xs text-slate-500 dark:text-slate-400">
                                        {{ $education->start_date }}
                                        -
                                        <span class="lang-text"
                                            data-en="{{ $education->is_current ? 'Present' : $education->end_date }}"
                                            data-np="{{ $education->is_current ? 'हालसालै' : $education->end_date }}">{{ $education->is_current ? 'Present' : $education->end_date }}</span>
                                    </p>
                                    @if (! empty($education->description))
                                        <p class="text-sm text-slate-600 dark:text-slate-300 lang-text"
                                            data-en="{{ $education->description }}"
                                            data-np="{{ $education->description_np ?: $education->description }}">
                                            {{ $education->description }}
                                        </p>
                                    @endif
                                </div>
                            @empty
                                <p class="text-sm text-slate-500 dark:text-slate-400 lang-text"
                                    data-en="Education details will be added soon."
                                    data-np="शिक्षाको विवरण चाँडै थपिनेछ।">
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
    <section class="bg-slate-50 dark:bg-slate-950 py-20 transition-colors duration-300">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-slate-900 dark:text-white sm:text-4xl lang-text" data-en="Interests & Hobbies" data-np="रुचि र शौकहरू">
                    Interests & Hobbies
                </h2>
                <div class="mx-auto h-1 w-16 rounded-full bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="group rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-slate-100/50 dark:hover:bg-white/10 transition-colors duration-300">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/10 dark:bg-emerald-500/20 text-3xl border border-emerald-500/10">
                            📚
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-slate-900 dark:text-white lang-text" data-en="Reading" data-np="पढाइ">Reading</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 lang-text"
                        data-en="Tech blogs, documentation, and programming books"
                        data-np="प्रविधि ब्लगहरू, कागजातहरू र प्रोग्रामिङ पुस्तकहरू">Tech blogs, documentation, and programming books</p>
                </div>
                <div class="group rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-slate-100/50 dark:hover:bg-white/10 transition-colors duration-300">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/10 dark:bg-emerald-500/20 text-3xl border border-emerald-500/10">
                            🎮
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-slate-900 dark:text-white lang-text" data-en="Gaming" data-np="गेमिङ">Gaming</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 lang-text"
                        data-en="Strategy games and puzzle solving"
                        data-np="रणनीति खेलहरू र पहेली समाधान">Strategy games and puzzle solving</p>
                </div>
                <div class="group rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-slate-100/50 dark:hover:bg-white/10 transition-colors duration-300">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/10 dark:bg-emerald-500/20 text-3xl border border-emerald-500/10">
                            🎵
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-slate-900 dark:text-white lang-text" data-en="Music" data-np="संगीत">Music</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 lang-text"
                        data-en="Exploring new genres and artists"
                        data-np="नयाँ शैलीहरू र कलाकारहरू खोज्दै">Exploring new genres and artists</p>
                </div>
                <div class="group rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 p-6 text-center transition hover:border-emerald-500/30 hover:bg-slate-100/50 dark:hover:bg-white/10 transition-colors duration-300">
                    <div class="mb-4 flex justify-center">
                        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-emerald-500/10 dark:bg-emerald-500/20 text-3xl border border-emerald-500/10">
                            🚴
                        </div>
                    </div>
                    <h3 class="mb-2 font-semibold text-slate-900 dark:text-white lang-text" data-en="Fitness" data-np="स्वास्थ्य">Fitness</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 lang-text"
                        data-en="Staying active and healthy"
                        data-np="सक्रिय र स्वस्थ रहने">Staying active and healthy</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
