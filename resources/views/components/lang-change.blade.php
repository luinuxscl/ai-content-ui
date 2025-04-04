<div id="lang-switcher">
    <button id="btn-es" class="btn btn-soft btn-sm bg-transparent text-gray-500 dark:text-gray-200 hidden"
        onclick="changeLanguage('es')">ES</button>
    <button id="btn-en" class="btn btn-soft btn-sm bg-transparent text-gray-500 dark:text-gray-200 hidden"
        onclick="changeLanguage('en')">EN</button>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const savedLocale = localStorage.getItem('locale') || 'es';
            updateButtonVisibility(savedLocale);
        });

        function changeLanguage(locale) {
            fetch(`/change-language/${locale}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    locale: locale
                })
            }).then(response => {
                if (response.ok) {
                    localStorage.setItem('locale', locale);
                    updateButtonVisibility(locale);
                    location.reload();
                }
            });
        }

        function updateButtonVisibility(locale) {
            const btnEs = document.getElementById('btn-es');
            const btnEn = document.getElementById('btn-en');

            if (locale === 'es') {
                // Si el idioma es español, solo mostrar el botón de inglés
                btnEs.classList.add('hidden');
                btnEn.classList.remove('hidden');
            } else {
                // Si el idioma es inglés, solo mostrar el botón de español
                btnEs.classList.remove('hidden');
                btnEn.classList.add('hidden');
            }
        }
    </script>
</div>
