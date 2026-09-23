@extends('layouts.app')

@section('title', 'Catalog')

@section('content')

    @php

        $categories = [
            'Gowns' => 'Gowns',
            'Dresses' => 'Dresses',
            'Suits' => 'Suits',
            'Sets' => 'Sets',
        ];

        $gowns = [

            //-- gowns --

            [
                'name' => 'Elegant Evening Gown',
                'category' => 'Gowns',
                'description' => 'Perfect for formal events and evening occasions.',
                'price' => 2500,
                'available' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQs_D28UQakFLAYyIiYq1rwUn1q_0tcA4JA5wlLgR8lig&s=10',
            ],
            [
                'name' => 'Classic Formal Gown',
                'category' => 'Gowns',
                'description' => 'A timeless style for memorable celebrations.',
                'price' => 3500,
                'available' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE3sKxjUkyeU63Zmu_OBu_pnj30ZNZ3snQo-uUj1xNZA&s=10',
            ],
            [
                'name' => 'Luxury Occasion Gown',
                'category' => 'Gowns',
                'description' => 'Designed to make you feel confident and beautiful.',
                'price' => 4800,
                'available' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFXna2RItgFvq-fO3swDYMQlhKZpM1GoKOmr4_PwwY1w&s=10',
            ],
            [
                'name' => 'Luxury Occasion Gown',
                'category' => 'Gowns',
                'description' => 'Designed to make you feel confident and beautiful.',
                'price' => 4800,
                'available' => true,
                'image' => 'https://i.pinimg.com/736x/09/cc/b4/09ccb46d34ca515e8c8db6278daaf188.jpg',
            ],
            [
                'name' => 'Royal Ball Gown',
                'category' => 'Gowns',
                'description' => 'A grand silhouette made for unforgettable entrances.',
                'price' => 5500,
                'available' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFXna2RItgFvq-fO3swDYMQlhKZpM1GoKOmr4_PwwY1w&s=10',
            ],
            [
                'name' => 'Js Prom Gown',
                'category' => 'Gowns',
                'description' => 'A fitted, flowing style that flatters every figure.',
                'price' => 2500,
                'available' => true,
                'image' => 'https://sg-test-11.slatic.net/p/a374eff08d6db23c5d72f0bdc84bb13d.jpg',
            ],
            [
                'name' => 'Bridal Lace Gown',
                'category' => 'Gowns',
                'description' => 'Delicate lace details for your most special day.',
                'price' => 3500,
                'available' => true,
                'image' => 'https://down-ph.img.susercontent.com/file/ph-11134207-7r98t-llrfixjkyokx83',
            ],

            //-- dresses --

            [
                'name' => 'Blush Cocktail Dress',
                'category' => 'Dresses',
                'description' => 'Light, elegant, and perfect for semi-formal events.',
                'price' => 1800,
                'available' => true,
                'image' => 'https://www.leobsession.com/cdn/shop/files/DSC_0119_c489cdbb-4291-4a7a-bcff-2e1583b68c99_800x.jpg?v=1719425800',
            ],
            [
                'name' => 'Satin Midi Dress',
                'category' => 'Dresses',
                'description' => 'Smooth satin finish, great for dinners and parties.',
                'price' => 1500,
                'available' => true,
                'image' => 'https://1861.ca/cdn/shop/files/thalix-ivory-ES-3.jpg?v=1779133902&width=1400',
            ],
            [
                'name' => 'Floral Garden Dress',
                'category' => 'Dresses',
                'description' => 'A fresh, feminine look for daytime celebrations.',
                'price' => 1200,
                'available' => true,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxpRAnYnpDWmpirzdo6jyKyDy17wcO8PpF0ZOjQsqeYjDLU35OVpSul7A&s=10',
            ],
            [
                'name' => 'Classic Black Dress',
                'category' => 'Dresses',
                'description' => 'A simple, timeless piece for any formal occasion.',
                'price' => 1400,
                'available' => true,
                'image' => 'https://thumbs.dreamstime.com/b/sophisticated-black-dress-displayed-mannequin-embodying-timeless-style-refined-taste-image-highlights-dress-392170324.jpg',
            ],

            //-- suits --

            [
                'name' => 'Classic Black Suit',
                'category' => 'Suits',
                'description' => 'A sharp, tailored suit for weddings and formal events.',
                'price' => 2200,
                'available' => true,
                'image' => 'https://www.suitably.com.au/wp-content/uploads/2019/06/noir1a.jpg',
            ],
            [
                'name' => 'Navy Slim-Fit Suit',
                'category' => 'Suits',
                'description' => 'Modern slim fit in a versatile navy shade.',
                'price' => 2400,
                'available' => true,
                'image' => 'https://www.suitably.com.au/wp-content/uploads/2019/06/noir1a.jpg',
            ],
            [
                'name' => 'Charcoal Three-Piece Suit',
                'category' => 'Suits',
                'description' => 'A sharp, tailored suit for weddings and formal events.',
                'price' => 2200,
                'available' => true,
                'image' => 'https://andreemilio.com/wp-content/uploads/2020/02/Solid-Charcoal-Grey-3-Piece-Suit.jpeg',
            ],
            [
                'name' => 'Navy Slim-Fit Suit',
                'category' => 'Suits',
                'description' => 'Modern slim fit in a versatile navy shade.',
                'price' => 2400,
                'available' => true,
                'image' => 'https://strlnsuits.com/cdn/shop/files/Navybluesuit1.png?v=1780203080',
            ],
            [
                'name' => 'Barong Set',
                'category' => 'Suits',
                'description' => 'Delicate lace details for your most special day.',
                'price' => 3500,
                'available' => true,
                'image' => 'https://down-ph.img.susercontent.com/file/ph-11134207-7r98t-llrfixjkyokx83',
            ],

            //-- pair / set attire --
            // photos are saved in public/images/sets/

            [
                'name' => 'Couple Wedding Set',
                'category' => 'Sets',
                'description' => 'Matching gown and barong or suit for the bride and groom.',
                'price' => 7500,
                'available' => true,
                'image' => 'https://images.unsplash.com/photo-1595407753234-0882f1e77954?auto=format&fit=crop&w=1000&q=85',
            ],
            [
                'name' => 'Prom Duo Set',
                'category' => 'Sets',
                'description' => 'Coordinated gown and suit for a perfect prom night pair.',
                'price' => 5500,
                'available' => true,
                'image' => 'https://images.unsplash.com/photo-1584634407036-a403356514cd?auto=format&fit=crop&w=1000&q=85',
            ],
            [
                'name' => 'Bridesmaid Set (2 pcs)',
                'category' => 'Sets',
                'description' => 'Three matching dresses for your bridal party.',
                'price' => 4500,
                'available' => true,
                'image' => 'https://images.unsplash.com/photo-1765229282730-0c5cfd5c8575?auto=format&fit=crop&w=1000&q=85',
            ],
            [
                'name' => 'Groom & Groomsmen Set',
                'category' => 'Sets',
                'description' => 'Matching suits or barongs for the whole groom squad.',
                'price' => 9500,
                'available' => true,
                'image' => 'https://images.unsplash.com/photo-1661332222138-fc1cf23dc0a2?auto=format&fit=crop&w=1000&q=85',
            ],
        ];

        //-- shows per catalogs --

        $selected = request('category');
        $items = collect($gowns)->when(
            array_key_exists($selected, $categories),
            fn($c) => $c->where('category', $selected)
        );

    @endphp

    <section class="px-8 py-16">

        <div class="mx-auto max-w-6xl">

            <!-- category filter -->
            <div class="mb-10 flex flex-wrap gap-3">
                <a href="/catalog"
                    class="rounded-full border px-5 py-2 text-sm font-medium transition
                            {{ $selected && array_key_exists($selected, $categories) ? 'border-[#D8A2A2] bg-white text-[#6D3A5E] hover:bg-[#fde8e4]' : 'border-[#6D3A5E] bg-[#6D3A5E] text-white' }}">
                    All
                </a>

                @foreach ($categories as $key => $label)
                    <a href="/catalog?category={{ $key }}"
                        class="rounded-full border px-5 py-2 text-sm font-medium transition
                                    {{ $selected === $key ? 'border-[#6D3A5E] bg-[#6D3A5E] text-white' : 'border-[#D8A2A2] bg-white text-[#6D3A5E] hover:bg-[#fde8e4]' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            <div class="grid gap-8 md:grid-cols-3">

                @forelse ($items as $gown)
                    <div class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-md transition
                                   {{ $gown['available'] ? 'hover:-translate-y-1 hover:shadow-xl' : '' }}">

                        <!-- image + status badge -->
                        <div class="relative">
                            @if ($gown['image'])
                                <img src="{{ str_starts_with($gown['image'], 'http') ? $gown['image'] : asset($gown['image']) }}"
                                    alt="{{ $gown['name'] }}"
                                    class="h-96 w-full object-cover {{ $gown['available'] ? '' : 'opacity-60 grayscale' }}">
                            @else
                                <div class="flex h-96 w-full items-center justify-center bg-[#f8e4ee] text-sm text-[#8E5572]">
                                    Photo coming soon
                                </div>
                            @endif

                            <span
                                class="absolute left-4 top-4 rounded-full px-3 py-1 text-xs font-semibold
                                            {{ $gown['available'] ? 'bg-green-100 text-green-700' : 'bg-gray-800/80 text-white' }}">
                                {{ $gown['available'] ? 'Available' : 'Not Available' }}
                            </span>
                        </div>

                        <div class="flex flex-1 flex-col p-6">

                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8E5572]">
                                {{ $categories[$gown['category']] ?? $gown['category'] }}
                            </p>

                            <h2 class="mt-1 text-xl font-semibold text-[#5B3A5D]">
                                {{ $gown['name'] }}
                            </h2>

                            <p class="mt-2 text-gray-600">
                                {{ $gown['description'] }}
                            </p>

                            <!-- price -->
                            <p class="mt-4 text-xl font-semibold text-[#8E5572]">
                                ₱{{ number_format($gown['price']) }}
                                <span class="text-sm font-normal text-gray-500">
                                    / {{ $gown['category'] === 'Sets' ? 'set' : 'rental' }}
                                </span>
                            </p>

                            <!-- mt-auto keeps every button/message at the bottom of its card -->
                            <div class="mt-auto pt-5">
                                @if ($gown['available'])
                                    <a href="/reservations/create"
                                        class="inline-block rounded-full bg-[#6D3A5E] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#542C48]">
                                        Reserve This {{ $gown['category'] === 'Sets' ? 'Set' : 'Item' }}
                                    </a>
                                @else
                                    <p class="rounded-xl bg-gray-100 px-4 py-3 text-sm text-gray-600">
                                        Sorry, this {{ $gown['category'] === 'Sets' ? 'set' : 'item' }} is not available anymore.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                @empty
                    <p class="col-span-full text-center text-gray-600">
                        No items in this category yet.
                    </p>
                @endforelse
            </div>
        </div>
    </section>
@endsection