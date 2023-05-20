<x-app-layout>
    <!-- Component Start -->
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 w-full max-w-6xl">
        <x-dashcard text="{{ $admins }}" desc="Admins" textColor="text-red-800" bg="bg-red-200" icon="fa fa-book" />
        <x-dashcard text="{{ $instructors }}" desc="Instructors" textColor="text-green-800" bg="bg-green-200"
            icon="fa fa-user" />
        <x-dashcard text="{{ $students }}" desc="Students" textColor="text-pink-800" bg="bg-pink-200"
            icon="fa fa-list" />
    </div>
    <!-- Component End  -->

    <div class="overflow-y-hidden rounded-lg border mt-10">
        <div class="flex justify-between p-2">
            <h4 class="text-md text-slate-700">Users ({{ $users->total() }})</h4>
            <a href="#" class="text-md text-blue-900 hover:underline">Add new</a>
        </div>
        <div class="overflow-x-auto rounded-lg border">
            <table class="w-full">
                <thead>
                    <tr class="bg-slate-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                        <x-th>ID</x-th>
                        <x-th>Fullname</x-th>
                        <x-th>Email </x-th>
                        <x-th>Role </x-th>
                        <x-th>Change Role </x-th>
                    </tr>
                </thead>
                <tbody class="text-gray-500">
                    @foreach ($users as $user)
                        <tr>
                            <x-td>{{ $user->id }}</x-td>
                            <x-td>{{ $user->firstname }}</x-td>
                            <x-td>{{ $user->email }}</x-td>
                            <x-td>{{ $user->role }}</x-td>
                            <x-td><a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-800">Change
                                    Role</a>
                            </x-td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <div class="p-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
