@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-zinc-500 dark:text-white focus:border-white dark:focus:border-white focus:ring-white dark:focus:ring-white rounded-md shadow-sm']) !!}>
