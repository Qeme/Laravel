<x-layout>
    <form action="{{ route('ninjas.store') }}" method="POST">
        {{-- add tag csrf Cross-Site Request Forgery (CSRF) Protection --}}
        @csrf

        <h2>Create a New Ninja</h2>
      
        <!-- ninja Name -->
        <label for="name">Ninja Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ old('name') }}" {{-- we use odl() method to retrieve the previous data instead of null --}}
          required
        >
      
        <!-- ninja Strength -->
        <label for="skill">Ninja Skill (0-100):</label>
        <input 
          type="number" 
          id="skill" 
          name="skill" 
          value="{{ old('skill') }}"
          required
        >
      
        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio" 
          name="bio"
          required
        >{{ old('bio') }}</textarea> {{-- the reason why no value= is because this is textarea which already an input value (closing tag)--}}
      
        <!-- select a dojo -->
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
          <option value="" disabled selected>Select a dojo</option>
          {{-- use foreach to iterate all the dojos --}}
          @foreach($dojos as $dojo)
            {{-- now this is a bit complicated which we need to check the old value wheter it is same to the $dojo->id, if yes, makes it selected --}}
            <option value="{{$dojo->id}}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
                {{$dojo->name}}
            </option>
          @endforeach
        </select>
      
        <button type="submit" class="btn mt-4">Create Ninja</button>
      
        <!-- validation errors -->
        {{-- use the if which take any of the errors type --}}
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                {{-- inside here, we loop all the errors if any; the reason we use $errors->all() not $errors because it is an object--}}
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

      </form>
</x-layout>