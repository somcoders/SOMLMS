<x-app-layout>

    <div class="overflow-y-hidden rounded-lg border mt-10">
        <div class="flex justify-between p-2">
            <h4 class="text-md text-slate-700">Categories ({{ count($categories) }})</h4>
            <a href="{{ route('admin.categories.create') }}" class="text-md text-blue-900 hover:underline">Add new</a>
        </div>
        <div class="overflow-x-auto rounded-lg border">
            <x-success />
            <table class="w-full">
                <thead>
                    <tr class="bg-slate-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                        <x-th>ID </x-th>
                        <x-th>Name</x-th>
                        @can('edit_category')
                            <x-th>Edit</x-th>
                        @endcan
                        @can('delete_category')
                            <x-th>Delete</x-th>
                        @endcan
                    </tr>
                </thead>
                <tbody class="text-gray-500">
                    @foreach ($categories as $category)
                        <tr>
                            <x-td>{{ $category->id }}</x-td>
                            <x-td>{{ $category->name }}</x-td>
                            @can('edit_category')
                                <x-td><a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="text-blue-800">Edit</a></x-td>
                                <x-td>
                                @endcan
                                @can('delete_category')
                                    <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>Delete</x-danger-button>
                                    </form>
                                @endcan

                            </x-td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
