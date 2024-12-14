<x-layout>
    {{-- use the dynamic value in this show page; get the name properties from $ninja--}}
    <h2>Ninja id - {{ $ninja->name }}</h2>

    <div>
        <p><strong>Skill Level:</strong>{{ $ninja->skill }}</p>
        <p><strong>About Me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

    {{-- dojo info --}}
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Information</h3>
    <p><strong>Dojo name:</strong> {{ $ninja->dojo->name }}</p>
    <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
    <p><strong>About the Dojo:</strong></p>
    <p>{{ $ninja->dojo->description }}</p>
  </div>

  {{-- we put the form delete button here + add the parameter for wildcard--}}
  <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST"> {{-- form doesnt support 'delete', hence we use @method to convert it--}}
    {{-- add csrf to prevent malicious attack --}}
    @csrf
    @method('DELETE')

    <button type="submit" class="btn my-4">Delete Ninja</button>
  </form>
  
</x-layout>