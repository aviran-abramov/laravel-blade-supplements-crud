<x-layout metaTitle="Login" title="Log In">
    <section class="w-[480px]">
        <form action="{{ route('session.store') }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf

            {{-- Email Address --}}
            <x-forms.form-field>
                <x-forms.label for="email">Email Address</x-forms.label>

                <x-forms.input type="email" id="email" name="email" required placeholder="johndoe@gmail.com" value="{{ old('email') ?? '' }}" />

                <x-forms.error name="email" />
            </x-forms.form-field>

            {{-- Password --}}
            <x-forms.form-field>
                <x-forms.label for="password">Password</x-forms.label>

                <x-forms.input type="password" id="password" name="password" placeholder="123456" required value="{{ old('password') ?? '' }}" />

                <x-forms.error name="password" />
            </x-forms.form-field>

            <div>
                <x-forms.submit-button color="bg-green-500">Login</x-forms.submit-button>

                <x-forms.link-button color="bg-gray-400" href="{{ route('supplements.index') }}">Cancel</x-forms.link-button>
            </div>
        </form>
    </section>
</x-layout>
