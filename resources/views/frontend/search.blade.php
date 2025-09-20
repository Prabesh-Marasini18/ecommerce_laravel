<x-frontend-layout>

    <section>
    <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 ">
                    Search Results for "{{ $q }}"
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

           @if (count($products) > 0)
            <div class="grid grid-cols-4 gap-16">
            @foreach ($products as $product)
                <x-product-card :product="$product" />

            @endforeach
            </div>
            @else
            <div class="text-center py-16">
                <p class="text-gray-600 text-lg">No products found matching your search.</p>
                <a href="{{ route('home') }}" class="mt-4 inline-block px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Go Back to Home
                </a>
            </div>
           @endif
        </div>
    </section>


</x-frontend-layout>
