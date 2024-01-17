<div>
    <label for="{{ $id }}" class="mb-2 ml-1 font-bold text-xs text-slate-700">{{ $label }}</label>
    <div class="mt-2">
        <textarea 
            id="{{ $id }}" 
            name="{{ $name }}" 
            rows="4";
            @class([
                'form-textarea block shadow-sm w-full rounded-md border-0 py-1.5 ring-1 ring-inset focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6',
                'text-red-200 ring-red-300 placeholdet:text-red-300 focus:ring-red-200' => $errors -> has($name),
                ' text-gray-900  ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600' => ! $errors -> has($name)
            ])
        >{{ old($name) ?? $slot}}</textarea>
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror

    @if($help)
        <p class="mt-2 text-sm text-gray-500" >{{ $help }}</p>
    @endif
</div>