<x-layout metaTitle="Show Supplement" title="Supplement: {{ $supplement->name }}">
    <section class="w-[480px]">
        <div class="border border-black flex flex-col gap-4 p-4 rounded">
            <div>
                <h3 class="text-lg font-semibold">{{ $supplement->name }}</h3>
                <p class="mt-0.5 text-gray-600 text-sm">{{ $supplement->description }}</p>
            </div>


            {{-- Buttons --}}
            <div class="flex items-center gap-2">
                <a class="text-center border border-black bg-purple-400 hover:text-white p-2 rounded" href="{{ route('supplements.edit', $supplement) }}">Edit</a>

                <form id="delete-form" method="POST" action="{{ route('supplements.destroy', $supplement) }}">
                    @csrf
                    @method('DELETE')

                    <button form="delete-form" class="border border-black bg-red-400 hover:text-white p-2 rounded" type="submit">Delete</button>
                </form>
            </div>
        </div>

    </section>
</x-layout>
