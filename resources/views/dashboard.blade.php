<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('register.books') }}"
                        class="d-flex flex-column align-items-center text-center">
                        <h1 class="text-xl m-4">CADASTRO DE LIVROS</h1>
                        @csrf
                        <div>

                            <x-text-input id="autor" class=" mt-1 m-full" type="text" name="autor"
                                :value="old('autor')" required autofocus autocomplete="autor" />
                            <x-input-label for="autor" :value="__('Autor')" />
                        </div>
                        <div>

                            <x-text-input id="titulo" class=" mt-1 m-full" type="text" name="titulo"
                                :value="old('titulo')" required autofocus autocomplete="titulo" />
                            <x-input-label for="titulo" :value="__('Titulo')" />

                        </div>
                        <div>

                            <x-text-input id="subtitulo" class=" mt-1 m-full" type="text" name="subtitulo"
                                :value="old('subtitulo')" required autofocus autocomplete="subtitulo" />
                            <x-input-label for="subtitulo" :value="__('Subtitulo')" />

                        </div>
                        <div>

                            <x-text-input id="edição" class=" mt-1 m-full" type="text" name="edição"
                                :value="old('edição')" required autofocus autocomplete="edição" />
                            <x-input-label for="edição" :value="__('Edição')" />

                        </div>
                        <div>

                            <x-text-input id="editora" class=" mt-1 m-full" type="text" name="editora"
                                :value="old('editora')" required autofocus autocomplete="editora" />
                            <x-input-label for="editora" :value="__('Editora')" />

                        </div>
                        <div>

                            <x-text-input id="ano_publicacao" maxlength="4" class=" mt-1 m-full" type="text"
                                name="ano_publicacao" :value="old('ano_publicacao')" required autofocus
                                autocomplete="ano_publicacao" />
                            <x-input-label for="ano_publicacao" :value="__('Ano da Popublicação')" />
                        </div>
                        <x-primary-button class="mt-2">
                            {{ __('Cadastrar Livro') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
