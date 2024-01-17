<div>
    <label for="{{ $id }}" class="mb-2 ml-1 font-bold text-xs text-slate-700">{{ $label }}</label>
    <div @class([
                'mt-2',
                'border-2 border-red-300' => $errors -> has($name),
                ])>
        <select 
            id="{{ $id }}" 
            name="{{ $name . ($multiple ? '[]' : '') }}" 
            class="
            bg-gray-50 border border-gray-300 text-gray-900 text-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @if($errors->has($name))
                    text-red-900 ring-red-300 focus:ring-red-500
                @else
                    text-gray-900 ring-gray-300 focus:ring-indigo-600
                @endif
                {{ $multiple ? 'form-multiselect' : 'form-select' }}
            "
            @if($multiple) multiple @endif
        >
            @foreach ($list as $item)
                <option value="{{ $item->$optionValuesKeys }}"
                    @selected($valueIsCollection ? $value->contains($item->$optionValuesText) : $item->$optionValuesText == $value)
                >
                    {{ $item->$optionValuesText }}
                </option>
            @endforeach
        </select>
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror

    @if($help)
        <p class="mt-2 text-sm text-gray-500">{{ $help }}</p>
    @endif
</div>
