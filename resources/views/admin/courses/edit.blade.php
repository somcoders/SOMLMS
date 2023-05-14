<x-app-layout>
    <x-section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Add new Course
            </h2>
            <x-input-error class="mt-2" :messages="$errors->all()" />
            <x-success />
        </header>

        <form method="post" action="{{ route('admin.courses.update', $course->id) }}" class="mt-6 space-y-6">
            @csrf
            @method('PATCH')
            <div class="flex justify-between gap-8 w-full">
                <div class="w-1/2">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required
                        autofocus autocomplete="name" value="{{ $course->name }}" />

                    <x-input-label for="desc" :value="__('Description')" class="mt-2" />
                    <x-textarea id="desc" name="description" value="{{ $course->description }}"> </x-textarea>

                    <select name="category_id" id="category" class="p-2 block rounded mt-2 w-full text-slate-500">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id === $course->category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>

                    <x-input-label for="gradient" :value="__('gradient')" class="mt-2" />
                    <x-text-input id="gradient" name="gradient" type="text" class="mt-1 block w-full" required
                        autofocus autocomplete="gradient" placeholder="Example red,yellow,pink"
                        value="{{ $course->gradient }}" />
                    <x-primary-button class="mt-2 py-4">Update</x-primary-button>

                </div>


                <div class="w-1/2">
                    <x-input-label for="price" :value="__('price')" />
                    <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" required
                        autofocus autocomplete="price" value="{{ $course->price }}" />

                    <x-input-label for="duration" :value="__('duration')" class="mt-2" />
                    <x-text-input id="duration" name="duration" type="number" class="mt-1 block w-full" required
                        autofocus autocomplete="duration" value="{{ $course->duration }}" />

                    <select name="level_name" class="p-2 block rounded mt-2 w-full text-slate-500">
                        <option value="">Choose Level</option>
                        <option value="beginer" {{ $course->level === 'beginer' ? 'selected' : '' }}>
                            Beginer
                        </option>
                        <option value="intermidiate" {{ $course->level === 'intermidiate' ? 'selected' : '' }}>
                            intermidiate</option>
                        <option value="advanced" {{ $course->level === 'advanced' ? 'selected' : '' }}>advanced
                        </option>
                    </select>


                    <p class="m-1">Is Visible?</p>
                    <div class="w-1/2 flex justify-between">
                        <x-radio value="1" name="is_visible" label="Yes"
                            checked="{{ $course->is_visible == 1 ? 'checked' : '' }}" />
                        <x-radio value="0" name="is_visible" label="No"
                            checked="{{ $course->is_visible == 0 ? 'checked' : '' }}" />
                    </div>


                </div>

            </div>
        </form>
    </x-section>
</x-app-layout>
