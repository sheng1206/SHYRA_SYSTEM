@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="relative min-h-[calc(100vh-88px)] overflow-hidden">

        <!-- background -->
        <div class="absolute inset-0">
            <img src="https://plus.unsplash.com/premium_photo-1664202526559-e21e9c0fb46a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Elegant gown" class="h-full w-full object-cover">

            <!-- overlay -->
            <div class="absolute inset-0 bg-white/55"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/50 to-transparent"></div>
        </div>

        <!-- hero -->
        <div class="relative mx-auto flex min-h-[calc(100vh-88px)] max-w-7xl items-center px-8">

            <div class="max-w-xl">

                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.3em] text-[#8E5572]">
                    Gown Rental & Reservation
                </p>

                <h1 class="text-5xl font-semibold leading-tight tracking-wide text-[#5B3A5D] md:text-6xl">
                    Your Perfect Look
                    <span class="block">
                        for Every Occasion
                    </span>
                </h1>

                <p class="mt-6 max-w-lg text-lg leading-8 text-gray-700">
                    Discover elegant gowns and formal wear designed to make
                    your special moments unforgettable.
                </p>

                <div class="mt-8 flex gap-4">
                    <a href="/catalog" class="rounded-full bg-[#6D3A5E] px-8 py-3.5 font-medium text-white shadow-lg
                                       transition duration-300 ease-out
                                       hover:-translate-y-1 hover:scale-105 hover:bg-[#D8A2A2] hover:shadow-xl
                                       active:translate-y-0 active:scale-95">
                        Explore Collection
                    </a>

                    <a href="/login" class="rounded-full border border-[#D8A2A2] bg-white/70 px-8 py-3.5 font-medium text-[#6D3A5E]
                                       transition duration-300 ease-out
                                       hover:-translate-y-1 hover:scale-105 hover:bg-[#D8A2A2] hover:shadow-lg
                                       active:translate-y-0 active:scale-95">
                        Make a Reservation
                    </a>
                </div>

            </div>
        </div>

    </section>

@endsection