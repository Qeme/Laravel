{{-- to wrap all of these into layout components, use x-layout(component name) tag --}}
<x-layout>
    <h2>Currently Available Ninjas</h2>

    {{-- why not we put the array items inside the index page --}}
    <ul>
        {{-- first call for foreach directives and always close it --}}
        @foreach($ninjas as $ninja)
            <li>
                {{-- to pass the id, we can use href inside the custom component tag --}}
                {{-- we can also pass something similar to attributes called props (:x) -> similar to react or vue ; which we can pass dynamic value not string (strictly like attributes)--}}
                <x-card href="/ninjas/{{ $ninja->id }}" :highlight="$ninja['skill'] > 70">
                       {{-- this content will be put at $slot ... while the View Details will be dynamically called --}}
                    <h3>{{ $ninja->name }}</h3>
                </x-card>
            </li>
        @endforeach
        
    </ul>
</x-layout>