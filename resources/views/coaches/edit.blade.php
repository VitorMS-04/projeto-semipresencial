@extends('layouts.base')
@section('content')


<form class="max-w-sm mx-auto" action="{{ url('coaches/'.$coach->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nome do Treinador</label>
      <input type="text" name="name" id="name" placeholder="Nome" value="{{$coach->name}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
    <div class="mb-5" >
        <img src="{{asset($coach->image) }}" alt="">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="image">Imagem</label>
        <input class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="image" id="image">
    </div>
  
  <div class="flex justify-center" >
      <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Atualizar Treinador</button>
  </div>
  
</form>
@endsection
