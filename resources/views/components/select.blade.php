<div class="form-control w-full {{ $class ?? '' }}">
    @if(isset($label))
        <label for="{{ $id ?? $name }}" class="label">
            <span class="label-text">{{ $label }}</span>
            @if(isset($optional) && $optional)
                <span class="label-text-alt text-gray-400">(Opcional)</span>
            @endif
        </label>
    @endif
    
    <select 
        id="{{ $id ?? $name }}"
        name="{{ $name ?? '' }}"
        {{ $attributes->merge([
            'class' => 'select select-bordered w-full ' . ($hasError ? 'select-error' : '') . ' ' . ($size ?? '')
        ]) }}
    >
        @if(isset($placeholder))
            <option value="" {{ !isset($value) || $value === '' ? 'selected' : '' }} disabled>{{ $placeholder }}</option>
        @endif
        
        {{ $slot }}
    </select>
    
    @if(isset($error))
        <label class="label">
            <span class="label-text-alt text-error">{{ $error }}</span>
        </label>
    @endif
    
    @if(isset($hint))
        <label class="label">
            <span class="label-text-alt">{{ $hint }}</span>
        </label>
    @endif
</div>
