{{-- now we can use the props value as long as it not get overwrited --}}
@props(['highlight' => false])

{{-- it will check either the highlight is false or true, the 'card' which doesnt have assigned with any value, will always be executed (means u can remove class="card") --}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    {{-- later we can href dynamically -> we call $attribute and get the id from href using dynamic value--}}
    <a href="{{ $attributes -> get('href') }}" class="btn">View Details</a>
    {{-- <a {{ $attributes }} class="btn">View Details</a> this is easier way to write as there is only 1 attribute which is href, if many all will be included --}}
</div>