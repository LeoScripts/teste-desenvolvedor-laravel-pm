<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Editar Categoria') }}
    </h2>
  </x-slot>

  <div class="p-1 flex items-center justify-center flex-col">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <span class=" text-red-600 rounded ">{{ $error }}</span>
    @endforeach
    @endif
  </div>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form action="{{ route('categories.update', $category->id) }}" method="post" class="w-full flex flex-col ">
            @method('PUT')
            @csrf
            <div class="w-xl flex items-center flex-col justify-center gap-4">
              <div class="flex flex-col">
                <label class="text-red-800" for="name">Nome</label>
                <input class="rounded" type="text" name="name" value="{{$category->name}}" placeholder="Nome da Categoria">
              </div>
            </div>
            <div class="flex items-center justify-center gap-4">
              <a href="{{route('categories.show', $category->id)}}" class="mt-2 px-4 py-2 bg-red-800 dark:bg-red-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-red-800 uppercase tracking-widest hover:bg-red-700 dark:hover:bg-white focus:bg-red-700 dark:focus:bg-white active:bg-red-900 dark:active:bg-red-300">Cancelar</a>
              <button type="submit" class=" mt-2 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300">Atualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
