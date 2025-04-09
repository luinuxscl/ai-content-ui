@props(['language' => 'php', 'code' => ''])

@php
    // Ensure the language class is properly formatted for Prism.js
    $languageClass = 'language-' . $language;
@endphp

<div {{ $attributes->merge(['class' => 'code-block-container relative mb-4']) }}>
    <pre class="{{ $languageClass }} rounded-md"><code class="{{ $languageClass }}">{{ $code ?? $slot }}</code></pre>
    <button type="button" class="copy-button absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white rounded-md px-2 py-1 text-xs">
        <span class="copy-text">Copy</span>
        <span class="copied-text hidden">Copied!</span>
    </button>
</div>

@once
    @push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css">
    <style>
        .code-block-container {
            position: relative;
        }
        .copy-button {
            transition: opacity 0.3s;
            opacity: 0.7;
        }
        .copy-button:hover {
            opacity: 1;
        }
        pre[class*="language-"] {
            margin: 0;
            padding: 1.5rem 1rem;
            overflow: auto;
            border-radius: 0.375rem;
        }
        /* Dark theme overrides */
        html.dark pre[class*="language-"] {
            background: #1e1e2e;
        }
        html.dark .copy-button {
            background-color: #44475a;
        }
        html.dark .copy-button:hover {
            background-color: #6272a4;
        }
        /* Mobile responsiveness */
        @media (max-width: 640px) {
            pre[class*="language-"] {
                padding: 1rem 0.5rem;
                font-size: 0.875rem;
            }
            .copy-button {
                top: 0.5rem;
                right: 0.5rem;
                font-size: 0.7rem;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all copy buttons
            document.querySelectorAll('.code-block-container').forEach(function(block) {
                const copyButton = block.querySelector('.copy-button');
                const codeElement = block.querySelector('code');
                const copyText = copyButton.querySelector('.copy-text');
                const copiedText = copyButton.querySelector('.copied-text');
                
                copyButton.addEventListener('click', function() {
                    // Get the text content
                    const textToCopy = codeElement.textContent;
                    
                    // Copy to clipboard
                    navigator.clipboard.writeText(textToCopy).then(function() {
                        // Show "Copied!" text
                        copyText.classList.add('hidden');
                        copiedText.classList.remove('hidden');
                        
                        // Revert back to "Copy" after 2 seconds
                        setTimeout(function() {
                            copyText.classList.remove('hidden');
                            copiedText.classList.add('hidden');
                        }, 2000);
                    }).catch(function(error) {
                        console.error('Unable to copy text: ', error);
                    });
                });
            });
        });
    </script>
    @endpush
@endonce
