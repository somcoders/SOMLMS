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

        <footer class="relative bg-gray-300 pt-8 pb-6">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                        <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                        <h5 class="text-lg mt-0 mb-2 text-gray-700">
                            Find us on any of these platforms, we respond 1-2 business days.
                        </h5>
                        <div class="mt-6">
                            <button
                                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-twitter"></i></button><button
                                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-facebook-square"></i></button><button
                                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-dribbble"></i></button><button
                                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-github"></i>
                            </button>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful
                                    Links</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://www.creative-tim.com/presentation">About Us</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://blog.creative-tim.com">Blog</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://www.github.com/creativetimofficial">Github</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://www.creative-tim.com/bootstrap-themes/free">Free Products</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other
                                    Resources</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT
                                            License</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/terms">Terms &amp; Conditions</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/privacy">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-400" />
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-gray-600 font-semibold py-1">
                            Copyright © 2019 Tailwind Starter Kit by
                            <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Creative
                                Tim</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
@endsection
