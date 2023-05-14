<x-app-layout>

    <div class="overflow-y-hidden rounded-lg border mt-10">
        <div class="flex justify-between p-2">
            <h4 class="text-md text-slate-700">Courses ({{ count($courses) }})</h4>
            <a href="{{ route('admin.categories.create') }}" class="text-md text-blue-900 hover:underline">Add new</a>
        </div>
        <div class="overflow-x-auto rounded-lg border">
            <x-success />
            <table class="w-full">
                <thead>
                    <tr class="bg-slate-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                        <x-th>ID </x-th>
                        <x-th>Name</x-th>
                        <x-th>Category</x-th>
                        <x-th>instructor</x-th>
                        <x-th>Level</x-th>
                        <x-th>Edit</x-th>
                        <x-th>Delete</x-th>
                    </tr>
                </thead>
                <tbody class="text-gray-500">
                    @foreach ($courses as $course)
                        <tr>
                            <x-td>{{ $course->id }}</x-td>
                            <x-td>{{ $course->name }}</x-td>
                            <x-td>{{ $course->category->name }}</x-td>
                            <x-td>{{ $course->instructor->firstname }}</x-td>
                            <x-td>{{ $course->level }}</x-td>
                            <x-td><a href="{{ route('admin.courses.edit', $course->id) }}" class="text-blue-800">Edit</a>
                            </x-td>
                            <x-td>
                                <form method="POST" action="{{ route('admin.courses.destroy', $course->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button>Delete</x-danger-button>
                                </form>
                            </x-td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="p-4">
                {{ $courses->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
