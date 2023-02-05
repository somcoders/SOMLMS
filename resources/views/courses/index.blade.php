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
                                        <article class="h-40">
                                            <a class="block h-full flex flex-col justify-around rounded-lg bg-gradient-to-r from-red-500 via-blue-400 to-blue-400 p-2 transition hover:scale-105"
                                                href="http://larasom.test/course/html-basics">
                                                <h2 class="mx-4 mt-4 font-semibold text-xl font-semibold text-white">
                                                    HTML basic
                                                </h2>
                                                <div class="flex flex-wrap justify-around text-gray-200">
                                                    <div>
                                                        <span class="fa fa-signal"></span>
                                                        <span class="mr-1">beginer</span>
                                                    </div>
                                                    <div>
                                                        <span class="fa fa-clock"></span>
                                                        <span class="mr-1">1 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                        <article class="h-40">
                                            <a class="block h-full flex flex-col justify-around rounded-lg bg-gradient-to-r from-blue-500 via-cyan-400 to-cyan-400 p-2 transition hover:scale-105"
                                                href="http://larasom.test/course/css-basics">
                                                <h2 class="mx-4 mt-4 font-semibold text-xl font-semibold text-white">
                                                    CSS basics
                                                </h2>
                                                <div class="flex flex-wrap justify-around text-gray-200">
                                                    <div>
                                                        <span class="fa fa-signal"></span>
                                                        <span class="mr-1">intermidiate</span>
                                                    </div>
                                                    <div>
                                                        <span class="fa fa-clock"></span>
                                                        <span class="mr-1">2 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                        <article class="h-40">
                                            <a class="block h-full flex flex-col justify-around rounded-lg bg-gradient-to-r from-purple-500 via-blue-400 to-blue-400 p-2 transition hover:scale-105"
                                                href="http://larasom.test/course/php-beyond-the-basics">
                                                <h2 class="mx-4 mt-4 font-semibold text-xl font-semibold text-white">
                                                    PHP beyond the basics
                                                </h2>
                                                <div class="flex flex-wrap justify-around text-gray-200">
                                                    <div>
                                                        <span class="fa fa-signal"></span>
                                                        <span class="mr-1">advanced</span>
                                                    </div>
                                                    <div>
                                                        <span class="fa fa-clock"></span>
                                                        <span class="mr-1">3 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <h1>Courses List</h1>

        @forelse ($courses as $course)
            <div style="background:teal;padding:10px;margin:5px;color:white">
                <h4><a href="{{ route('courses.show', [$course['slug']]) }}">{{ $course['name'] }}</a></h4>
            </div>

        @empty
            <p>No courses found</p>
        @endforelse
    </main>
@endsection
