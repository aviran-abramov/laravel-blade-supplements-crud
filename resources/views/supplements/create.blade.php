<x-layout metaTitle="Create" title="New Supplement">
    <section class="w-[480px]">
        <form action="{{ route('supplements.store') }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf

            <div class="flex flex-col gap-1">
                <x-forms.label for="name">Supplement</x-forms.label>

                <x-forms.input type="text" id="name" name="name" value="{{ old('name') ?? '' }}" />

                <x-forms.error name="name" />
            </div>

            <div class="flex flex-col gap-1">
                <x-forms.label for="description">Description</x-forms.label>

                <x-forms.textarea name="description" id="description" cols="30" rows="2" >{{ old('description') ?? '' }}</x-forms.textarea>

                <x-forms.error name="description" />
            </div>

            <div>
                <button class="border border-black bg-green-500 hover:text-white p-2 rounded" type="submit">Create</button>
            </div>
        </form>
    </section>
</x-layout>
