<x-app-layout>
    <x-section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Edit Role
            </h2>
            <x-input-error class="mt-2" :messages="$errors->all()" />
            <x-success />
        </header>

        <form method="post" action="{{ route('admin.users.update', $user->id) }}" class="mt-6 space-y-6">
            @csrf
            @method('PATCH')
            <div>
                <h2>{{ $user->firstname }}" </h1>

                    <select name="role" id="role" class="p-2 block rounded mt-2 w-full text-slate-500">
                        @foreach ($roles as $role)
                            <option value="{{ $role }}" {{ $role === $user->role ? 'selected' : '' }}>
                                {{ $role }}</option>
                        @endforeach
                    </select>
                    <x-primary-button class="mt-2">Update</x-primary-button>
            </div>
        </form>
    </x-section>
</x-app-layout>
