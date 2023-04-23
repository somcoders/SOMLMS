@props(['text' => 0, 'textColor' => 'text-green-800', 'desc' => '', 'icon' => 'fa fa-eye', 'bg' => 'bg-green-200'])
<!-- Tile 1 -->
<div class="flex items-center p-4 bg-white rounded">
    <div class="flex flex-shrink-0 items-center justify-center {{ $bg }} h-16 w-16 rounded">
        <span class="{{ $icon }} {{ $textColor }} text-3xl"></span>
    </div>
    <div class="flex-grow flex flex-col ml-4">
        <span class="text-xl font-bold">{{ $text }}</span>
        <div class="flex items-center justify-between">
            <span class="text-gray-500">{{ $desc }}</span>
        </div>
    </div>
</div>
