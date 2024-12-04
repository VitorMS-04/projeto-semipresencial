@extends('layouts.base')
@section('content')

<div class="flex items-start" >
    <div class="py-8 p-4" >
        <a href="{{url('coaches/create')}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Adicionar Treinador</a>
    </div>
</div>
<div class="flex flex-wrap justify-center mt-10">
    @foreach($coaches as $entity)
        <div class=" text-center p-4 max-w-sm">
            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                <img class=" w-24.1 h-24 mb-3 rounded-full shadow-lg" src="{{ asset($entity->image) }}"
                    alt="{{$entity->name}}" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$entity->name}}</h5>
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ url('pokemon/' . $entity->id . '/edit') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>
                    <form action="{{ url('pokemon/' . $entity->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" py-2 px-4 ms-2   rounded-lg  bg-red-900 text-white  ">Delete</button>
                    </form>

                </div>
            </div>
        </div>

    @endforeach
</div>
@endsection