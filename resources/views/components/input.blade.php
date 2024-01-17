<label for="{{ $id }}" class="mb-2 ml-1 font-bold text-xs text-slate-700" >{{ $label }}</label>
    <div @class(['mb-4', 'relative rounded-md shadow-sm' => $errors ->has($name)])>
        <input 
            id="{{ $id }}" 
            name="{{ $name }}" 
            type="{{ $type }}" 
            value="{{ old($name) ?? $value }}" 
            placeholder="{{ $placeholder }}"
            aria-label="{{ $arial_label }}"
            aria-describedby="{{ $aria_describedby }}"
            @class([
                'focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow',
                'pr-10 text-red-900 ring-red-300 border-2 border-red-500 placeholdet:text-red-300 focus:ring-red-500' => $errors -> has($name),
                'text-gray-900 shadow-sm  ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600' => ! $errors -> has($name)
            ])
        >
        @error($name)
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
        @enderror
    </div>
    @error($name)
        <p class="mt-3 mb-3 text-sm text-red-600">{{ $message }}</p>
    @enderror

    @if($help)
        <p class="mt-2 text-sm text-gray-500" >{{ $help }}</p>
    @endif