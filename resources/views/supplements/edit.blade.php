<x-layout metaTitle="Edit Supplement" title="Edit Supplement: {{ $supplement->name }}">
    <section class="w-[480px]">
        <form action="{{ route('supplements.update', $supplement) }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf
            @method("PATCH")

            <x-forms.form-field>
                <x-forms.label for="name">Supplement</x-forms.label>

                <x-forms.input type="text" id="name" name="name" placeholder="Ashwagandha" required :value="old('name') ?? $supplement->name" />

                <x-forms.error name="name" />
            </x-forms.form-field>

            <x-forms.form-field>
                <x-forms.label for="description">Description</x-forms.label>

                <x-forms.textarea name="description" id="description" cols="30" rows="2" required>{{ old('description') ?? $supplement->description }}</x-forms.textarea>

                <x-forms.error name="description" />
            </x-forms.form-field>

            {{-- Buttons --}}
            <div class="flex items-center gap-2">
                <x-forms.submit-button color="bg-orange-400">Update</x-forms.submit-button>

                <x-forms.submit-button form="delete-form" color="bg-red-400">Delete</x-forms.submit-button>
            </div>
        </form>

        <form id="delete-form" method="POST" action="{{ route('supplements.destroy', $supplement) }}" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </section>
</x-layout>
