<!DOCTYPE html>
@extends('layouts.frontend')

@section('title', 'courses')

@section('contents')
    <main class="profile-page">
        <section class="relative block" style="height: 300px;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
        </section>


        <section class="relative py-16 bg-slate-900">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-slate-900  w-full shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="text-center mt-12">
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-200">
                                Courses <span class="text-gray-500">(3)</span>
                            </h3>

                        </div>
                        <div class="mt-10 py-10 border-t border-gray-300 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-gray-200 flex ">
                                        <input type="text" class="p-4 bg-gray-700 rounded w-full" name="search"
                                            id="search" placeholder="Filter by name">
                                        <button class="mx-2 py-4 px-8 bg-gray-500 rounded">Filter</button>
                                    </p>
                                </div>
                            </div>
                            <div class="container px-5 pb-10 mx-auto flex flex-wrap">
                                <div class="w-full mt-10 lg:mb-0 rounded-lg overflow-hidden">
                                    <!-- /Courses -->
                                    <div
                                        class="grid gap-8 sm:grid-cols-2 sm:gap-12 lg:grid-cols-3 xl:grid-cols-4 xl:gap-16">

                                        <x-course-grid :$courses />

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
