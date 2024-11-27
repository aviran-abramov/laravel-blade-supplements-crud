<x-layout metaTitle="Create" title="New Supplement">
    <section class="w-[480px]">
        <form action="{{ route('supplements.store') }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf

            <div class="flex flex-col gap-1">
                <x-forms.label for="name">Supplement</x-forms.label>

                <input class="border border-black rounded px-2 py-1" type="text" id="name" name="name" placeholder="Ashwagandha" value="{{ old("name") ?? '' }}">

                <x-forms.error name="name" />
            </div>

            <div class="flex flex-col gap-1">
                <x-forms.label for="description">Description</x-forms.label>

                <textarea class="border border-black rounded p-2" name="description" id="" cols="30" rows=2" placeholder="Herb that promotes relaxation, helps with mental clarity, reduces stress and cortisol levels."">{{ old('name') ?? '' }}</textarea>

                <x-forms.error name="description" />
            </div>

            <div>
                <button class="border border-black bg-green-500 hover:text-white p-2 rounded" type="submit">Create</button>
            </div>
        </form>
    </section>
</x-layout>
