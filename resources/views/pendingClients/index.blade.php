<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Solicitudes de informacion') }}
        </h2>
      
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class='mb-4'>
                        @foreach($pendingClients as $client)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{$client->email}}</td>
                            <td class="px-6 py-4">
                                <a href="" class="text-indigo-600">Contactar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{route('pendingClients.destroy',$client)}}" method="POST">
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
                    {{$pendingClients->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
