@props(['projects'])

@php
    $test123 = 'yolo123';
@endphp

<x-card1>
 {{-- iterative stuff here --}}
 {{$projects[0]->project}}
</x-card1>