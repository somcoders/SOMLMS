@extends('layouts.frontend')

@section('title', 'Categories')
<main class="profile-page">
    <section class="relative block" style="height: 300px;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
    </section>
    <section class="relative py-16 bg-slate-900 h-96">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-slate-900  w-full shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="text-center mt-12">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-200">
                            All Categories
                        </h3>

                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300 text-center">

                        <div class="container px-5 pb-10 mx-auto flex flex-wrap">
                            <div class="w-full mt-10 lg:mb-0 rounded-lg overflow-hidden">
                                <div class="flex flex-wrap mt-12 justify-center">
                                    <div class="w-full lg:w-3/12 px-4 text-center">
                                        <a href="category.html">
                                            <div class="bg-gray-800 p-10 my-2 rounded-lg hover:bg-blue-900">
                                                <h6 class="text-xl font-semibold text-gray-200">
                                                    HTML
                                                    <span class="text-gray-500">(10)</span>
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full lg:w-3/12 px-4 text-center">
                                        <a href="category.html">
                                            <div class="bg-gray-800 p-10 my-2 rounded-lg hover:bg-blue-900">
                                                <h6 class="text-xl font-semibold text-gray-200">
                                                    CSS
                                                    <span class="text-gray-500">(10)</span>
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full lg:w-3/12 px-4 text-center">
                                        <a href="category.html">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @forelse ($categories as $category)
        <div style="background:teal;padding:10px;margin:5px;color:white">
            <h4><a href="{{ route('categories.show', [$category['slug']]) }}">{{ $category['name'] }}</a></h4>
        </div>

    @empty
        <p>No Categories Found</p>
    @endforelse
</main>


@section('contents')


@endsection
