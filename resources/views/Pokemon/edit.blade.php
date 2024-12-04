@extends('layouts.base')
@section('content')
<!-- <form action="{{ url('pokemon/'.$pokemon->id)  }}" method="POST">
   @csrf
   @method('PUT')
   <input type="text" name="name" placeholder="Name" value="{{$pokemon->name}}" required>
   <input type="text" name="type" placeholder="Name" value="{{$pokemon->type}}" required>
   <input type="number" name="power" placeholder="Name" value="{{$pokemon->power}}" required>

   <button type="submit">Create Pokemon</button>
</form>
</form> -->

<form class="max-w-sm mx-auto" action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nome do Pokemon</label>
      <input type="text" name="name" id="name" placeholder="Nome" value="{{$pokemon->name}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-5">
      <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tipo do pokemon</label>
      <input type="text" name="type" id="type" placeholder="Tipo" value="{{$pokemon->type}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-5">
      <label for="power" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pontos de Poder</label>
      <input type="number" name="power" id="power" placeholder="Poder" value="{{$pokemon->power}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
    <div class="mb-5" >
        <img src="{{asset($pokemon->image) }}" alt="">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="image">Image</label>
        <input class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="image" id="image">
    </div>
    <div class="mb-5" >
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="coach_id">Treinador</label>
    <select name="coach_id" id="coach_id" required>
        <option value="">Selecione o Treinador</option>
        @foreach ($coaches as $coach)
            @if ($coach->id === $pokemon->coach->id)
            <option value="{{$coach->id}}"selected>{{$coach->name}}</option>
            @else
            <option value="{{$coach->id}}">{{$coach->name}}</option>
            @endif
        
        @endforeach
    </select>
    </div>
  
  <div class="flex justify-center" >
      <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Atualizar Pokemon</button>
  </div>
  
</form>
@endsection
