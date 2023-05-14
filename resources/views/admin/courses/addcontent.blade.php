<x-app-layout>
    <main class="flex">
        <div class="w-2/3">
            <x-section>
                <h2 class="text-2xl p-2">{{ $course->name }}</h2>
                <hr>

                <ul class="py-4">
                    @foreach ($course->chapters as $chapter)
                        <li class="bg-slate-600 p-2 rounded m-2 text-white hover:bg-slate-800">{{ $chapter->name }}</li>
                        <ul class="px-2">
                            @foreach ($chapter->lessons as $lesson)
                                <li class="p-1 rounded mx-2 text-gray-800">
                                    <span class="fa fa-play-circle text-gray-800 mx-2"></span>
                                    <span class="mr-1">{{ $lesson->position }}</span>
                                    <span>{{ $lesson->name }}</span>
                                    <span class="float-right uppercase">{{ $lesson->is_free ? 'FREE' : 'Premium' }}
                                    </span>
                                    <span class="font-sm">({{ $lesson->is_visible ? 'Visible' : 'Hidden' }})</span>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </ul>

            </x-section>
        </div>
        <div class="w-1/3 flex flex-col">
            <x-section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        Add new Chapter
                    </h2>
                    <x-input-error class="mt-2" :messages="$errors->all()" />
                    <x-success />
                </header>

                <form method="post" action="{{ route('admin.courses.addchapter', $course->id) }}"
                    class="mt-6 space-y-6">
                    @csrf
                    @method('POST')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required
                            autofocus autocomplete="name" value="{{ old('name') }}" />

                        <x-input-label for="position" :value="__('Position')" class="mt-2" />
                        <x-text-input id="position" name="position" type="number" placeholder="position"
                            class="mt-1 block w-full" required autofocus autocomplete="position"
                            value="{{ old('position') }}" />

                        <x-primary-button class="mt-2">Save</x-primary-button>
                    </div>
                </form>
            </x-section>

            <x-section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        Add new Lesson
                    </h2>
                    <x-input-error class="mt-2" :messages="$errors->all()" />
                    <x-success />
                </header>

                <form method="post" action="{{ route('admin.courses.addchapter', $course->id) }}"
                    class="mt-6 space-y-6">
                    @csrf
                    @method('POST')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required
                            autofocus autocomplete="name" value="{{ old('name') }}" />

                        <x-input-label for="embed" :value="__('Embed')" />
                        <x-text-input id="embed" name="embed" type="text" placeholder="embed"
                            class="mt-1 block w-full" required autofocus autocomplete="embed"
                            value="{{ old('embed') }}" />

                        <select name="chapter_id" id="chapter" class="p-2 block rounded mt-2 w-full text-slate-500">
                            @foreach ($course->chapters as $chapter)
                                <option value="{{ $chapter->id }}">{{ $chapter->name }}</option>
                            @endforeach
                        </select>

                        <p class="m-1">Is Visible?</p>
                        <div class="w-1/2 flex justify-between">
                            <x-radio value="1" name="is_visible" label="Yes" />
                            <x-radio value="0" name="is_visible" label="No" />
                        </div>

                        <x-primary-button class="mt-2">Save</x-primary-button>
                    </div>
                </form>
            </x-section>
        </div>
    </main>
</x-app-layout>
