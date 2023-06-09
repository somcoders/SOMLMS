@extends('layouts.frontend')

@section('title', 'Course')


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
                                {{ $course->name }}
                            </h3>
                            <div
                                class="flex justify-center text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                                <div class="mr-2">
                                    <i class="fas fa-signal text-lg text-gray-500"></i>
                                    {{ $course->level }}
                                </div>
                                <div class="mr-2">
                                    <i class="fas fa-clock text-lg text-gray-500"></i>
                                    {{ $course->duration }} Hrs
                                </div>

                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-gray-300 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-gray-200">
                                        {{ $course->description }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 pb-10 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full mt-10 lg:mb-0 rounded-lg overflow-hidden">
                    <iframe width="100%" height="480"
                        src="https://www.youtube.com/embed/{{ $video->embed ?? $course->embed }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="flex flex-col flex-wrap lg:py-6 -mb-10  lg:w-1/2 w-full lg:pl-12 lg:text-left text-center">
                    <div class="flex flex-col lg:items-start items-center">
                        <div class="w-full">
                            @forelse ($course->chapters as $chapter)
                                <p class="mt-5 px-"><b class="text-pink-400">{{ $chapter->name }}</b></p>
                                <ul class="list-none">
                                    @forelse ($chapter->lessons as $lesson)
                                        <li class="py-1">
                                            <div
                                                class="flex items-center bg-slate-700 p-2 rounded-full hover:bg-slate-100 ml-4">
                                                <div><span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                            class="fas fa-video"></i></span></div>
                                                <div>
                                                    <a href="{{ route('courses.show', [$course->slug, $lesson->slug]) }}"
                                                        class="text-slate-500">
                                                        {{ $lesson->name }}

                                                        <span class="{{ $lesson->is_free ? '' : 'fa fa-lock' }}"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <h2>No Lessons Found</h2>
                                    @endforelse

                                </ul>
                            @empty
                                <h2>No Chapters Found</h2>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
