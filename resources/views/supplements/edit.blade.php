<x-layout metaTitle="Edit Supplement" title="Edit Supplement: {{ $supplement->name }}">
    <section class="w-[480px]">
        <form action="{{ route('supplements.update', $supplement) }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf
            @method("PATCH")

            <div class="flex flex-col gap-1">
                <x-forms.label for="name">Supplement</x-forms.label>

                <x-forms.input type="text" id="name" name="name" value="{{ old('name') ?? $supplement->name }}" />

                <x-forms.error name="name" />
            </div>

            <div class="flex flex-col gap-1">
                <x-forms.label for="description">Description</x-forms.label>

                <x-forms.textarea name="description" id="description" cols="30" rows="2">{{ old('description') ?? $supplement->description }}</x-forms.textarea>

                <x-forms.error name="description" />
            </div>

            {{-- Buttons --}}
            <div class="flex items-center gap-2">
                <button class="border border-black bg-orange-400 hover:text-white p-2 rounded" type="submit">Update</button>

                <button form="delete-form" class="border border-black bg-red-400 hover:text-white p-2 rounded" type="submit">Delete</button>
            </div>
        </form>

        <form id="delete-form" method="POST" action="{{ route('supplements.destroy', $supplement) }}" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </section>
</x-layout>
