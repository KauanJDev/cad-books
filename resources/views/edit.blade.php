<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (isset($book))
                        <form method="POST" name="formEdit" action="{{ url("books/$book->id") }}"
                            class="d-flex flex-column align-items-center text-center">
                            @method('PUT')
                        @else
                            <form method="POST" action="{{ route('register.books') }}">
                    @endif

                    <h1 class="text-xl m-4">EDITAR</h1>
                    @csrf
                    <div>
                        <x-input-label for="autor" :value="__('Autor')" />
                        <x-text-input id="autor" class=" mt-1 m-full" type="text" name="autor"
                            value="{{ $book->autor }}" required autofocus autocomplete="autor" />
                    </div>
                    <div>
                        <x-input-label for="titulo" :value="__('Titulo')" />
                        <x-text-input id="titulo" class=" mt-1 m-full" type="text" name="titulo"
                            value="{{ $book->titulo }}" required autofocus autocomplete="titulo" />
                    </div>
                    <div>
                        <x-input-label for="subtitulo" :value="__('Subtitulo')" />
                        <x-text-input id="subtitulo" class=" mt-1 m-full" type="text" name="subtitulo"
                            value="{{ $book->subtitulo }}" required autofocus autocomplete="subtitulo" />
                    </div>
                    <div>
                        <x-input-label for="edição" :value="__('Edição')" />
                        <x-text-input id="edição" class=" mt-1 m-full" type="text" name="edição"
                            value="{{ $book->edição }}" required autofocus autocomplete="edição" />
                    </div>
                    <div>
                        <x-input-label for="editora" :value="__('Editora')" />
                        <x-text-input id="editora" class=" mt-1 m-full" type="text" name="editora"
                            value="{{ $book->editora }}" required autofocus autocomplete="editora" />
                    </div>
                    <div>
                        <x-input-label for="ano_publicacao" :value="__('Ano da Popublicação')" />
                        <x-text-input id="ano_publicacao" maxlength="4" class=" mt-1 m-full" type="text"
                        name="ano_da_publicação" value="{{ $book->ano_da_publicação }}" required autofocus
                        autocomplete="ano_publicacao" />
                    </div>
                    <x-primary-button class="mt-2">
                        {{ __('Editar Livro') }}
                    </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
