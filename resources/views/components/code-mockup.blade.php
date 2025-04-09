@props(['language' => 'php', 'code' => ''])

@php
// Procesar contenido
$codeContent = !empty($code) ? $code : (isset($slot) ? trim($slot) : '');
$codeLines = explode("\n", $codeContent);
$id = 'code-' . uniqid();
@endphp

<div {{ $attributes->merge(['class' => 'mockup-code bg-base-200 mb-4']) }}>
@forelse($codeLines as $index => $line)
    <pre data-prefix="{{ $index + 1 }}"><code>{{ $line }}</code></pre>
@empty
    <pre data-prefix=">"><code>// Sin código para mostrar</code></pre>
@endforelse

    <button 
        id="copy-btn-{{ $id }}"
        class="absolute top-2 right-2 btn btn-xs btn-ghost text-xs" 
        onclick="copyCode_{{ $id }}()">
        <span id="copy-text-{{ $id }}">Copy</span>
    </button>
</div>

<script>
    function copyCode_{{ $id }}() {
        const codeBlocks = document.querySelectorAll('#copy-btn-{{ $id }}').item(0)
            .closest('.mockup-code').querySelectorAll('pre code');
        let text = '';
        codeBlocks.forEach(block => { text += block.textContent + '\n'; });
        
        navigator.clipboard.writeText(text).then(() => {
            const btn = document.getElementById('copy-text-{{ $id }}');
            btn.textContent = 'Copied!';
            setTimeout(() => { btn.textContent = 'Copy'; }, 2000);
        });
    }
</script>
