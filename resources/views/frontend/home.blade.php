<x-frontend-layout>

    <section>
    <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 ">
                    Our Products
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="grid grid-cols-4 gap-16">
            @foreach ($products as $product)
                <x-product-card :product="$product" />

            @endforeach
            </div>
        </div>
    </section>

    <section>

        <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-2xl p-8 mt-12">
            <h2 class="text-3xl font-extrabold text-[var(--primary)] mb-8 text-center tracking-tight">
                <i class="fas fa-store mr-3 text-[var(--secondary)]"></i>
                Vendor Shop Request Form
            </h2>

            <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Shop Name -->
                <div>
                    <label for="name" class="block text-lg font-semibold text-gray-800 mb-2 items-center">
                        <i class="fas fa-signature mr-2 text-[var(--primary)]"></i> Shop Name
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="mt-1 block w-full px-4 py-3 border-2 border-gray-200 rounded-xl shadow-inner focus:border-[var(--secondary)] focus:ring-[var(--secondary)] focus:ring-1 text-gray-900 placeholder-gray-400 transition duration-200"
                        placeholder="Enter your shop name" required>
                    @error('name')
                        <div class="text-red-600 text-sm font-medium mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-lg font-semibold text-gray-800 mb-2 items-center">
                        <i class="fas fa-phone mr-2 text-[var(--primary)]"></i> Phone Number
                    </label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                        class="mt-1 block w-full px-4 py-3 border-2 border-gray-200 rounded-xl shadow-inner focus:border-[var(--secondary)] focus:ring-[var(--secondary)] focus:ring-1 text-gray-900 placeholder-gray-400 transition duration-200"
                        placeholder="Enter your phone number" required>
                    @error('phone')
                        <div class="text-red-600 text-sm font-medium mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-lg font-semibold text-gray-800 mb-2 items-center">
                        <i class="fas fa-envelope mr-2 text-[var(--primary)]"></i> Email Address
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="mt-1 block w-full px-4 py-3 border-2 border-gray-200 rounded-xl shadow-inner focus:border-[var(--secondary)] focus:ring-[var(--secondary)] focus:ring-1 text-gray-900 placeholder-gray-400 transition duration-200"
                        placeholder="Enter your email address" required>
                    @error('email')
                        <div class="text-red-600 text-sm font-medium mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Shop Photo -->
                <div>
                    <label for="photo" class="block text-lg font-semibold text-gray-800 mb-2 items-center">
                        <i class="fas fa-image mr-2 text-[var(--primary)]"></i> Shop Photo (Optional)
                    </label>
                    <input type="file" name="photo" id="photo"
                        class="mt-1 block w-full text-sm text-gray-600 file:mr-5 file:py-2.5 file:px-6
                                file:rounded-full file:border-0
                                file:text-sm file:font-medium
                                file:bg-[var(--primary)] file:text-white
                                hover:file:bg-[var(--secondary)] file:cursor-pointer file:shadow-md
                                file:transition file:duration-200">
                    @error('photo')
                        <div class="text-red-600 text-sm font-medium mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-8">
                    <button type="submit"
                            class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-white px-8 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Request
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-frontend-layout>
