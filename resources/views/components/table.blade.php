@props([
    'striped' => false,
    'hover' => true,
    'bordered' => false,
    'small' => false,
    'responsive' => true,
    'class' => '',
])
@php
    $tableClasses = 'min-w-full divide-y divide-gray-200 dark:divide-gray-700 ';
    if ($striped) {
        $tableClasses .= 'table-striped ';
    }
    if ($bordered) {
        $tableClasses .= 'border border-gray-200 dark:border-gray-700 ';
    }
    if ($small) {
        $tableClasses .= 'text-small ';
    } else {
        $tableClasses .= 'text-paragraph ';
    }
    $tableClasses .= $class;
    $wrapperClass = $responsive ? 'overflow-x-auto relative' : '';
@endphp
<div class="{{ $wrapperClass }}">
    <table class="{{ $tableClasses }}">
        @if (isset($header))
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    {{ $header }}
                </tr>
            </thead>
        @endif
        <tbody class="box-custom divide-y divide-gray-200 dark:divide-gray-700">
            {{ $slot }}
        </tbody>
        @if (isset($footer))
            <tfoot class="bg-gray-50 dark:bg-gray-700">
                {{ $footer }}
            </tfoot>
        @endif
    </table>
</div>
@if ($hover)
    <style>
        .{{ $tableClasses }} tbody tr:hover {
            background-color: rgba(243, 244, 246, 0.5);
        }

        @media (prefers-color-scheme: dark) {
            .{{ $tableClasses }} tbody tr:hover {
                background-color: rgba(55, 65, 81, 0.5);
            }
        }
    </style>
@endif
