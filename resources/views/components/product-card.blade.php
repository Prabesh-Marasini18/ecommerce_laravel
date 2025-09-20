@props(['product'])
<div class="rounded overflow-hidden shadow hover:shadow-xl duration-100 ">
                <a href="{{ route('product', $product->id) }}">
                    <div class="relative h-[180px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110  duration-200" src="{{asset(Storage::url($product->images[0]))}}" alt="">
                        @if ($product->discount_percentage > 0)
                        <span class="absolute top-1 right-0 bg-[red] text-white  px-4 py-1 rounded">
                            {{ $product->discount_percentage }}% off
                        </span>


                        @endif
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold">
                            {{ $product->name }}
                        </h3>
                        <p class="text-sm text-gray-600">
                            Rs.{{ $product->price - ($product->price * $product->discount_percentage / 100) }}
                            @if ($product->discount_percentage > 0)

                                <span class="line-through text-red-500 mr-2">Rs.{{ $product->price }}</span>

                            @endif
                        </p>
                        <a href="{{ route('product', $product->id) }}" class="text-sm flex justify-center border border-[var(--primary)] text-[var(--primary)] rounded-full px-3 py-1 mt-2 hover:bg-[var(--primary)] hover:text-white transition duration-200">
                            View details
                        </a>
                    </div>
                </a>
                </div>
