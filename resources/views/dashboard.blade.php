<x-app-layout>
    <!-- Component Start -->
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 w-full max-w-6xl">
        <x-dashcard text="{{ $courses }}" desc="Courses" textColor="text-red-800" bg="bg-red-200" icon="fa fa-book" />
        <x-dashcard text="{{ $students }}" desc="Students" textColor="text-green-800" bg="bg-green-200"
            icon="fa fa-user" />
        <x-dashcard text="{{ $categories }}" desc="Categories" textColor="text-pink-800" bg="bg-pink-200"
            icon="fa fa-list" />
    </div>
    <!-- Component End  -->
    <div class="overflow-y-hidden rounded-lg border mt-10">
        <div class="flex justify-between p-2">
            <h4 class="text-md text-slate-700">Categories</h4>
            <a href="#" class="text-md text-blue-900 hover:underline">Add new</a>
        </div>
        <div class="overflow-x-auto rounded-lg border">
            <table class="w-full">
                <thead>
                    <tr class="bg-slate-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                        <x-th>Qoraal </x-th>
                        <x-th>Qoraal2 </x-th>
                        <x-th>Qoraal4 </x-th>
                    </tr>
                </thead>
                <tbody class="text-gray-500">
                    <tr>
                        <x-td>99</x-td>
                        <x-td>Qoraal</x-td>
                        <x-td>Qoraal kale</x-td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
