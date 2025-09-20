<x-frontend-layout>
    <style>
        :root {
            --primary: #1a0892;
            --light-primary: #efe9f1;
            --secondary: #a62fd2;
            --text: #666666;
        }
        .bg-primary { background-color: var(--primary); }
        .text-primary { color: var(--primary); }
        .bg-light-primary { background-color: var(--light-primary); }
        .text-secondary { color: var(--secondary); }
        .bg-secondary { background-color: var(--secondary); }
        .text-muted { color: var(--text); }
        .border-primary { border-color: var(--primary); }
        .hover\:bg-primary-dark:hover { background-color: #15067a; } /* Darker shade of primary */
        .hover\:bg-secondary-dark:hover { background-color: #8f27b8; }
    </style>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Product Section -->
        <section>
            <div class="container">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6">
                <!-- Image Gallery -->
                <div>
                    <!-- Main Image -->
                    <div class="mb-4 rounded-xl overflow-hidden shadow-md">
                        <img id="mainImage" src="{{asset(Storage::url($product->images[0]))}}"
                            alt="Chicken Momo" class="w-full h-80 object-cover rounded-lg">
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="flex space-x-4 overflow-x-auto image-gallery pb-2">
                    @foreach ($product->images as $img)
                        <div class="border-2 border-primary rounded-lg overflow-hidden cursor-pointer flex-shrink-0">
                            <img src="{{asset(Storage::url($img))}}"
                                class="w-24 h-24 object-cover" onclick="changeImage(this)">
                        </div>

                    @endforeach

                    </div>
                </div>

                <!-- Product Info -->
                <div class="py-4">
                    <h1 class="text-3xl font-bold text-primary mb-2">{{ $product->name }}</h1>

                    <!-- Rating -->
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ml-2 text-muted">4.5 (128 reviews)</span>
                    </div>

                    <!-- Price and Discount -->
                    <div class="flex items-center mb-4">
                        @php
                            $finalPrice = $product->price - ($product->price * $product->discount_percentage / 100);
                        @endphp
                        <span class="text-3xl font-bold text-primary mr-4">
                            Rs.{{ number_format($finalPrice, 2) }}
                        </span>
                        @if ($product->discount_percentage > 0)
                            <span class="bg-red-100 text-red-600 text-sm font-semibold px-3 py-1 rounded-full mr-3">
                                -{{ $product->discount_percentage }}% OFF
                            </span>
                            <span class="line-through text-gray-400 text-lg">Rs.{{ number_format($product->price, 2) }}</span>
                        @endif
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-primary mb-2">Description</h2>
                        {!! $product->description !!}

                    </div>

                    <!-- Add to Cart and Wishlist -->
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <span class="mr-3 text-muted font-medium">Quantity</span>
                            <div class="flex items-center border border-gray-300 rounded-md">
                                <button type="button" class="px-3 py-2 text-muted hover:text-primary" onclick="decrementQty()">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input id="qtyInput" type="number" class="w-12 text-center border-0 focus:ring-0" value="1" min="1">
                                <button type="button" class="px-3 py-2 text-muted hover:text-primary" onclick="incrementQty()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <button class="flex-1 bg-primary hover:bg-primary-dark text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center shadow-md hover:shadow-lg">
                                <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                            </button>
                            <button class="w-14 h-14 flex items-center justify-center bg-light-primary hover:bg-secondary hover:text-white rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                                <i class="fas fa-heart text-primary hover:text-white text-lg"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="border-t border-gray-200 pt-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <div class="bg-light-primary p-3 rounded-lg mr-3">
                                    <i class="fas fa-store text-primary text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted">Shop</p>
                                    <p class="font-medium text-primary">{{ $product->shop->name }}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-light-primary p-3 rounded-lg mr-3">
                                    <i class="fas fa-check-circle text-primary text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted">Status</p>
                                    <p class="font-medium {{ $product->status ? 'text-green-600' : 'text-red-600' }}">{{ $product->status ? 'In Stock' : 'Out of Stock' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </section>



    <script>
        function changeImage(element) {
            document.getElementById('mainImage').src = element.src;
            // Remove border from all thumbnails
            const thumbnails = document.querySelectorAll('.border, .border-2');
            thumbnails.forEach(thumb => {
                thumb.classList.remove('border-2', 'border-primary');
                thumb.classList.add('border');
            });
            // Add border to the clicked thumbnail
            element.parentElement.classList.remove('border');
            element.parentElement.classList.add('border-2', 'border-primary');
        }

        function incrementQty() {
            var qtyInput = document.getElementById('qtyInput');
            qtyInput.value = parseInt(qtyInput.value) + 1;
        }
        function decrementQty() {
            var qtyInput = document.getElementById('qtyInput');
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
        }
    </script>
</x-frontend-layout>
