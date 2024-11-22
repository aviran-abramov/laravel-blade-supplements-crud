<x-layout metaTitle="Index" title="Supplements">
    <section>
        <div class="flex flex-wrap gap-4">
            @foreach($supplements as $supplement)
                <div class="border border-black p-2 w-[300px]">
                    <h3 class="text-lg font-semibold">{{ $supplement->name }}</h3>
                    <p class="mt-0.5 text-gray-600 text-sm">{{ $supplement->description }}</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
