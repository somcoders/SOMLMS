@if (session()->has('success'))
    <div class="p-4">
        <p class="text-green-800"> {{ session()->get('success') }}</p>
    </div>
@endif
