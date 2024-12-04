<x-layout metaTitle="Register" title="New User">
    <section class="w-[480px]">
        <form action="{{ route('register.store') }}" method="POST" class="border border-black flex flex-col gap-4 p-4 rounded">
            @csrf

            {{-- Email Address --}}
            <x-forms.form-field>
                <x-forms.label for="email">Email Address</x-forms.label>

                <x-forms.input type="email" id="email" name="email" required placeholder="johndoe@gmail.com" value="{{ old('email') ?? '' }}" />

                <x-forms.error name="email" />
            </x-forms.form-field>

            {{-- First Name --}}
            <x-forms.form-field>
                <x-forms.label for="first_name">First Name</x-forms.label>

                <x-forms.input type="text" id="first_name" name="first_name" placeholder="John" required value="{{ old('first_name') ?? '' }}" />

                <x-forms.error name="first_name" />
            </x-forms.form-field>

            {{-- Last Name --}}
            <x-forms.form-field>
                <x-forms.label for="last_name">Last Name</x-forms.label>

                <x-forms.input type="text" id="last_name" name="last_name" placeholder="Doe" required value="{{ old('last_name') ?? '' }}" />

                <x-forms.error name="last_name" />
            </x-forms.form-field>

            {{-- Password --}}
            <x-forms.form-field>
                <x-forms.label for="password">Password</x-forms.label>

                <x-forms.input type="password" id="password" name="password" placeholder="123456" required value="{{ old('password') ?? '' }}" />

                <x-forms.error name="password" />
            </x-forms.form-field>

            {{-- Password Confirmation --}}
            <x-forms.form-field>
                <x-forms.label for="password_confirmation">Confirm Password</x-forms.label>

                <x-forms.input type="password" id="password_confirmation" name="password_confirmation" required placeholder="123456" value="{{ old('password_confirmation') ?? '' }}" />

                <x-forms.error name="password_confirmation" />
            </x-forms.form-field>


            <div>
                <x-forms.submit-button color="bg-green-500">Register</x-forms.submit-button>

                <x-forms.link-button color="bg-gray-300" href="{{ route('supplements.index') }}">Cancel</x-forms.link-button>
            </div>
        </form>
    </section>
</x-layout>
