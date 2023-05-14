 @props(['id' => '', 'name' => 'name', 'value' => ''])
 <textarea id="{{ $id }}" name="{{ $name }}"
     class="mb-8 w-full resize-y overflow-auto rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-blue-500 focus:outline-none hover:border-blue-500">
     {{ $value }}
</textarea>
