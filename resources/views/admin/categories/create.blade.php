<x-app-layout>
    <x-section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Add new Category
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                qoraal
            </p>
        </header>

        <form method="post" action="{{ route('admin.categories.store') }}" class="mt-6 space-y-6">
            @csrf
            @method('POST')
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="name" />
                <x-primary-button class="mt-2">Save</x-primary-button>
            </div>
        </form>
    </x-section>
</x-app-layout>
