<x-layout metaTitle="Index" title="Supplements">
    <section>
        @if($supplements->isNotEmpty())
            <div class="flex flex-wrap gap-4">
                @foreach($supplements as $supplement)
                    <div class="border border-black p-2 w-[300px] flex flex-col justify-between">
                        {{-- Text --}}
                        <div>
                            <h3 class="text-lg font-semibold">{{ $supplement->name }}</h3>
                            <p class="mt-0.5 text-gray-600 text-sm">{{ $supplement->description }}</p>
                        </div>

                        {{-- Buttons/Actions --}}
                        <div class="flex items-center gap-2 mt-2">
                            <x-forms.link-button color="bg-blue-400" href="{{ route('supplements.show', $supplement) }}">Show</x-forms.link-button>

                            <x-forms.link-button color="bg-purple-400" href="{{ route('supplements.edit', $supplement) }}">Edit</x-forms.link-button>

                            <form action="{{ route('supplements.destroy', $supplement) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <x-forms.submit-button color="bg-red-400">Delete</x-forms.submit-button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-400">No supplements yet.</p>
        @endif
    </section>
</x-layout>
