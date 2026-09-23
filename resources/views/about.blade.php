@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <section class="bg-[#fff8fc] px-8 py-16">

        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-12 md:grid-cols-2">

                <!-- img -->
                <div class="overflow-hidden rounded-3xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1566174053879-31528523f8ae?auto=format&fit=crop&w=1000&q=85"
                        alt="Elegant formal gown" class="h-[550px] w-full object-cover">
                </div>

                <!-- text -->
                <div>

                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#8E5572]">
                        Making Every Occasion
                        <span class="block">Beautiful and Memorable</span>
                    </p>

                    <p class="mt-6 leading-8 text-gray-600">
                        Shyra Beautique is a formal wear rental business offering
                        elegant gowns, dresses, suits, barongs, and coordinated
                        sets for special occasions.
                    </p>

                    <p class="mt-4 leading-8 text-gray-600">
                        Our goal is to make it easier for customers to discover
                        beautiful formal wear and manage their reservations
                        conveniently.
                    </p>

                    <a href="/catalog" class="mt-8 inline-block rounded-full bg-[#6D3A5E] px-8 py-3.5 font-medium text-white
                                transition duration-300 ease-out
                                hover:-translate-y-1 hover:scale-105 hover:bg-[#D8A2A2] hover:shadow-xl
                                active:translate-y-0 active:scale-95">
                        Explore Our Collection
                    </a>

                </div>

            </div>
        </div>

    </section>

@endsection