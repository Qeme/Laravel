{{-- to wrap all of these into layout components, use x-layout(component name) tag --}}
<x-layout>
    <h2>Currently Available Ninjas</h2>

    {{-- impliment if statement/blade directives like react which render certain part if the if statement equals to true --}}
    @if($greeting == "hi")
        <p>Hi from inside the if statement</p>
    @endif

    {{-- we want to pass dynamic value $ which will return a string hello --}}
    <p>{{ $greeting }}</p> 

    {{-- why not we put the array items inside the index page --}}
    <ul>
        {{-- first call for foreach directives and always close it --}}
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja["name"] }}</p>
                <a href="/ninjas/{{ $ninja["id"] }}">View Details</a>
            </li>
        @endforeach
        
    </ul>
</x-layout>