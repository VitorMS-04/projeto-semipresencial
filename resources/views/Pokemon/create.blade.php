@extends('layouts.base')
@section('content')
<!-- <form action="{{ url('pokemon') }}" method="POST">
   @csrf
   <input type="text" name="name" placeholder="Name" required>
   <input type="text" name="type" placeholder="type" required>
   <input type="number" name="power" placeholder="power" required>

   <button type="submit">Create Pokemon</button>
</form> -->

<form class="max-w-sm mx-auto" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nome do Pokemon</label>
        <input type="text" name="name" id="name" placeholder="Nome" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
    </div>
    <div class="mb-5">
        <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tipo do pokemon</label>
        <input type="text" name="type" id="type" placeholder="Tipo" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
    </div>
    <div class="mb-5">
        <label for="power" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pontos de Poder</label>
        <input type="number" name="power" id="power" placeholder="Poder" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="image">Image</label>
        <input class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="image" id="image">
    </div>
    <div class="mb-5" >
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="coach_id">Treinador</label>
    <select name="coach_id" id="coach_id">
        <option value="">Selecione o Treinador</option>
        @foreach ($coaches as $coach)
            <option value="{{$coach->id}}">{{$coach->name}}</option>
        
        @endforeach
    </select>
    </div>
    <div class="flex justify-center" >
        <button class=" mt-5 bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Criar Pokemon</button>
    </div>


</form>

@endsection