<x-layout metaTitle="Create" title="New Supplement">
    <section class="w-[480px]">
        <form action="{{ route('supplements.store') }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf

            <div class="flex flex-col gap-1">
                <label for="name">Supplement</label>
                <input class="border border-black rounded px-2 py-1" type="text" id="name" name="name" placeholder="Ashwagandha" value="{{ old("name") ?? '' }}">
                @error('name')
                    <p class="text-red-500 text-sm">* {{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="description">Description</label>
                <textarea class="border border-black rounded p-2" name="description" id="" cols="30" rows=2" placeholder="Herb that promotes relaxation, helps with mental clarity, reduces stress and cortisol levels."">{{ old('name') ?? '' }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">* {{ $message }}</p>
                @enderror
            </div>

            <div>
                <button class="border border-black bg-gray-300 hover:text-white p-2 rounded" type="submit">Create</button>
            </div>
        </form>
    </section>
</x-layout>
