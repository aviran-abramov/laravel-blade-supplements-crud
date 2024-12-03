<x-layout metaTitle="Create" title="New Supplement">
    <section class="w-[480px]">
        <form action="{{ route('supplements.store') }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf

            <x-forms.form-field>
                <x-forms.label for="name">Supplement</x-forms.label>

                <x-forms.input type="text" id="name" name="name" value="{{ old('name') ?? '' }}" />

                <x-forms.error name="name" />
            </x-forms.form-field>

            <x-forms.form-field>
                <x-forms.label for="description">Description</x-forms.label>

                <x-forms.textarea name="description" id="description" cols="30" rows="2" >{{ old('description') ?? '' }}</x-forms.textarea>

                <x-forms.error name="description" />
            </x-forms.form-field>

            <div>
                <x-forms.submit-button color="bg-green-500">Create</x-forms.submit-button>
            </div>
        </form>
    </section>
</x-layout>
