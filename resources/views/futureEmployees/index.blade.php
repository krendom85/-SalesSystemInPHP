<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Solicitud de trabajo') }}
        </h2>
      
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="overflow-x:auto">
                    <table class='mb-4'>
                        @foreach($people as $person)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{$person->name}}</td>
                            <td class="px-6 py-4">{{$person->email}}</td>
                            <td class="px-6 py-4">{{$person->job}}</td>
                            <td class="px-6 py-4">{{$person->description}}</td>
                        
                            <td class="px-6 py-4">
                                <a href="" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="" method="POST">
                                    @csrf 
                                    @method('DELETE')

                                    <input
                                        type="submit"
                                        value="Eliminar"
                                        class="bg-gray-800 text-white rounded px-4 py-2"
                                        onclick="return confirm('Desea eliminar?')"
                                    
                                    />
                                </form>
                            </td>
                        @endforeach
                    </table>
                    {{$people->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
