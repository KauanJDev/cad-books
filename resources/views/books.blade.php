<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1
                        class="text-center font-large font-semibold text-xl text-gray-800 dark:text-white mb-5 leading-tight">
                        SEUS LIVROS</h1>
                    <div class="col-8 m-auto">
                        @csrf
                        <table class="w-full text-center text-nowrap table-auto">
                            <thead>
                                <tr class="">
                                    <th scope="col">ID</th>
                                    <th scope="col">AUTOR</th>
                                    <th scope="col">TITULO</th>
                                    <th scope="col">SUBTITULO</th>
                                    <th scope="col">EDIÇÃO</th>
                                    <th scope="col">EDITORA</th>
                                    <th scope="col">ANO DA PUBLICAÇÃO</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($book as $books)
                                    @if (Auth::user()->id == $books->id_user)
                                        <tr>
                                            <th scope="row">{{ $books->id }}</th>
                                            <td>{{ $books->titulo }}</td>
                                            <td>{{ $books->autor }}</td>
                                            <td>{{ $books->subtitulo }}</td>
                                            <td>{{ $books->edição }}</td>
                                            <td>{{ $books->editora }}</td>
                                            <td>{{ $books->ano_da_publicação }}</td>
                                            <td style="display: flex;">
                                                <a href="{{ url("books/$books->id/edit") }}" class="js-del"
                                                    style="margin-right:20px">
                                                    <x-primary-button class="mt-2">
                                                        {{ __('Editar') }}
                                                    </x-primary-button>
                                                </a>
                                            
                                                <form action="{{ url("books/$books->id") }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <x-danger-button class="mt-2">
                                                        {{ __('Deletar') }}
                                                    </x-danger-button>
                                                </form>

                                            </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-5">
                        {{ $book->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
