<x-app-layout>
    <x-section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Edit Category
            </h2>
            <x-input-error class="mt-2" :messages="$errors->all()" />
            <x-success />
        </header>

        <form method="post" action="{{ route('admin.categories.update', $category->id) }}" class="mt-6 space-y-6">
            @csrf
            @method('PATCH')
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="name" value="{{ $category->name }}" />
                <x-primary-button class="mt-2">Update</x-primary-button>
            </div>
        </form>
    </x-section>
</x-app-layout>
