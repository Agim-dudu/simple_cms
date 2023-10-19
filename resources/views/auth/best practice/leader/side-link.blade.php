{{-- resources/views/components/nav-link.blade.php --}}

@props(['isActive' => false, 'iconClass', 'text', 'url'])

@php
$liClasses = $isActive
    ? 'active'
    : '';
@endphp

<li class="{{ $liClasses }}">
    <a href="{{ $url }}">
        <i class='{{ $iconClass }}'></i>
        <span class="text">{{ $text }}</span>
    </a>
</li>
