<x-layout metaTitle="Edit Supplement" title="Edit Supplement: {{ $supplement->name }}">
    <section class="w-[480px]">
        <form action="{{ route('supplement->update', ['id' => $supplement->id]) }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf
            @method("PATCH")

            <div class="flex flex-col gap-1">
                <label for="name">Supplement</label>
                <input class="border border-black rounded px-2 py-1" type="text" id="name" name="name" placeholder="Ashwagandha" value="{{ old("name") ?? $supplement->name }}">
                @error('name')
                    <p class="text-red-500 text-sm">* {{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="description">Description</label>
                <textarea class="border border-black rounded p-2" name="description" id="" cols="30" rows=2" placeholder="Herb that promotes relaxation, helps with mental clarity, reduces stress and cortisol levels."">{{ old('description') ?? $supplement->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">* {{ $message }}</p>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="flex items-center gap-2">
                <button class="border border-black bg-orange-400 hover:text-white p-2 rounded" type="submit">Update</button>

                <button form="delete-form" class="border border-black bg-red-400 hover:text-white p-2 rounded" type="submit">Delete</button>
            </div>
        </form>

        <form id="delete-form" method="POST" action="{{ route('supplement.destroy', ['id' => $supplement->id]) }}" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </section>
</x-layout>
