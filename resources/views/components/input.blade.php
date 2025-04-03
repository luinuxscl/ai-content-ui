<div class="form-control w-full {{ $class ?? '' }}">
    @if(isset($label))
        <label for="{{ $id ?? $name }}" class="label">
            <span class="label-text">{{ $label }}</span>
            @if(isset($optional) && $optional)
                <span class="label-text-alt text-gray-400">(Opcional)</span>
            @endif
        </label>
    @endif
    
    <input 
        type="{{ $type ?? 'text' }}"
        id="{{ $id ?? $name }}"
        name="{{ $name ?? '' }}"
        {{ $attributes->merge([
            'class' => 'input input-bordered w-full ' . ($hasError ? 'input-error' : '') . ' ' . ($size ?? '')
        ]) }}
    />
    
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
