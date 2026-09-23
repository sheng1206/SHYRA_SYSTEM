@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    @php
        $info = [
            [
                'label' => 'Call or Text',
                'value' => '0912 345 6789',
                'icon' => 'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z',
            ],
            [
                'label' => 'Email',
                'value' => 'hello@shyrabeautique.com',
                'icon' => 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75',
            ],
            [
                'label' => 'Visit Our Mini Shop',
                'value' => 'Bankeron 5-A Poblacion District, Davao City',
                'icon' => 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z',
            ],
            [
                'label' => 'Store Hours',
                'value' => 'Mon – Sat, 9:00 AM – 6:00 PM',
                'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
            ],
        ];
    @endphp

    <section class="px-8 py-16">
        <div class="mx-auto max-w-6xl">

            <!-- heading -->
            <div class="max-w-2xl">
                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.3em] text-[#8E5572]">
                    Get in Touch
                </p>

                <h1 class="text-4xl font-semibold leading-tight tracking-wide text-[#5B3A5D] md:text-5xl">
                    Contact Shyra Beautique
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Have questions about our gowns or reservations? Feel free to contact us.
                    We are happy to assist you with your formal wear rental needs.
                </p>
            </div>

            <!-- two columns: info (left) + form (right) -->
            <div class="mt-12 grid items-start gap-8 md:grid-cols-2">

                <!-- LEFT: contact info -->
                <div class="space-y-4">
                    @foreach ($info as $item)
                        <div class="flex items-center gap-4 rounded-2xl bg-white p-5 shadow-md">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#f8e4ee] text-[#6D3A5E]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8E5572]">
                                    {{ $item['label'] }}
                                </p>
                                <p class="mt-1 font-medium text-gray-700">
                                    {{ $item['value'] }}
                                </p>
                            </div>

                        </div>
                    @endforeach
                </div>

                <!-- RIGHT: message form -->
                <div class="rounded-2xl bg-white p-8 shadow-md">

                    <h2 class="text-xl font-semibold text-[#5B3A5D]">Send Us a Message</h2>

                    @if (session('success'))
                        <p class="mt-4 rounded-xl bg-green-100 px-4 py-3 text-sm text-green-700">
                            {{ session('success') }}
                        </p>
                    @endif

                    <form method="POST" action="/contact" class="mt-6 space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="text-sm font-medium text-gray-700">Your Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="mt-2 w-full rounded-xl border border-[#D8A2A2] px-4 py-3 outline-none transition focus:border-[#6D3A5E] focus:ring-2 focus:ring-[#8E5572]/30">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="mt-2 w-full rounded-xl border border-[#D8A2A2] px-4 py-3 outline-none transition focus:border-[#6D3A5E] focus:ring-2 focus:ring-[#8E5572]/30">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-2 w-full rounded-xl border border-[#D8A2A2] px-4 py-3 outline-none transition focus:border-[#6D3A5E] focus:ring-2 focus:ring-[#8E5572]/30">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="rounded-full bg-[#6D3A5E] px-8 py-3 font-medium text-white transition duration-300 ease-out
                                           hover:-translate-y-0.5 hover:bg-[#542C48] hover:shadow-lg
                                           active:translate-y-0 active:scale-95">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection