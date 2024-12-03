<x-layout metaTitle="Show Supplement" title="Supplement: {{ $supplement->name }}">
    <section class="w-[480px]">
        <div class="border border-black flex flex-col gap-4 p-4 rounded">
            <div>
                <h3 class="text-lg font-semibold">{{ $supplement->name }}</h3>
                <p class="mt-0.5 text-gray-600 text-sm">{{ $supplement->description }}</p>
            </div>


            {{-- Buttons --}}
            <div class="flex items-center gap-2">
                <x-forms.link-button color="bg-purple-400" href="{{ route('supplements.edit', $supplement) }}">Edit</x-forms.link-button>

                <form id="delete-form" method="POST" action="{{ route('supplements.destroy', $supplement) }}">
                    @csrf
                    @method('DELETE')

                    <x-forms.submit-button form="delete-form" color="bg-red-400">Delete</x-forms.submit-button>
                </form>
            </div>
        </div>

    </section>
</x-layout>
