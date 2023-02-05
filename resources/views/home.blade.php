@extends('layouts.frontend')

@section('title', 'Homepage')


@section('contents')
    <main>


        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-4xl">
                                Learn <b class="text-bold text-yellow-400">{Coding}</b> like a Pro
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                Learning is not just reading books and watching video.Get your hands in dirt with coding
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section class="bg-gray-100 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-2 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h6 class="text-xl font-semibold">3 Courses</h6>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-2 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h6 class="text-xl font-semibold text-indigo-900">10k Students</h6>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-2 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-video"></i>
                                </div>
                                <h6 class="text-xl font-semibold">400 Lessons</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-6 mb-5 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-xl w-3/4 px-4 md:px-8">
                <!-- Heading -->
                <div class="relative pt-8">
                    <h2 class="mb-4 text-center text-3xl font-bold text-indigo-800  md:mb-6 md:text-4xl">Latest
                        Courses
                    </h2>
                </div>
                <!-- /Courses -->
                <div class="grid gap-8 sm:grid-cols-2 sm:gap-12 lg:grid-cols-3 xl:grid-cols-4 xl:gap-16">
                    <x-course-grid :$courses />
                </div>
            </div>
        </section>
        <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                    version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-24">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Categories</h2>
                    </div>
                </div>
                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <a href="http://larasom.test/categories/html">
                            <div class="bg-gray-800 p-10 my-2 rounded-lg hover:bg-blue-900">
                                <h6 class="text-xl font-semibold text-gray-200">
                                    HTML
                                    <span class="text-gray-500">(10)</span>
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <a href="http://larasom.test/categories/css">
                            <div class="bg-gray-800 p-10 my-2 rounded-lg hover:bg-blue-900">
                                <h6 class="text-xl font-semibold text-gray-200">
                                    CSS
                                    <span class="text-gray-500">(10)</span>
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <a href="http://larasom.test/categories/javascript">
                            <div class="bg-gray-800 p-10 my-2 rounded-lg hover:bg-blue-900">
                                <h6 class="text-xl font-semibold text-gray-200">
                                    JS
                                    <span class="text-gray-500">(10)</span>
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <a href="http://larasom.test/categories/php">
                            <div class="bg-gray-800 p-10 my-2 rounded-lg hover:bg-blue-900">
                                <h6 class="text-xl font-semibold text-gray-200">
                                    PHP
                                    <span class="text-gray-500">(10)</span>
                                </h6>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </section>

        @include('layouts.footer')
    </main>
@endsection
