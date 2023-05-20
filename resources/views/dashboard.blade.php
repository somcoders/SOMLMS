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
</x-app-layout>
