<x-layout>
    {{-- use the dynamic value in this show page; get the name properties from $ninja--}}
    <h2>Ninja id - {{ $ninja->name }}</h2>

    <div>
        <p><strong>Skill Level:</strong>{{ $ninja->skill }}</p>
        <p><strong>About Me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>
</x-layout>