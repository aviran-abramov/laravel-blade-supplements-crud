<x-layout metaTitle="Index" title="Supplements">
    <section>
        <div class="flex flex-wrap gap-4">
            @foreach($supplements as $supplement)
                <div class="border border-black p-2 w-[300px] flex flex-col justify-between">
                    {{-- Text --}}
                    <div>
                        <h3 class="text-lg font-semibold">{{ $supplement->name }}</h3>
                        <p class="mt-0.5 text-gray-600 text-sm">{{ $supplement->description }}</p>
                    </div>

                    {{-- Buttons --}}
                    <a class="text-center border border-black bg-purple-400 hover:text-white p-2 rounded" href="{{ route('supplements.edit', ['id' => $supplement->id]) }}">Edit</a>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
