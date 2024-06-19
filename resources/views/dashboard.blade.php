<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('register.books') }}"
                        class="d-flex flex-column align-items-center text-center">
                        @csrf
                        <select name="id_user" id="id_user"
                            class="text-center border-gray-300 dark:border-gray-700 dark:bg-zinc-500 dark:text-white focus:border-white dark:focus:border-white focus:ring-white dark:focus:ring-white rounded-md shadow-sm">

                            <option value="">Selecione o Usuario</option>

                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>

                        </select>
                        <div>
                            <x-input-label for="autor" :value="__('Autor')" />
                            <x-text-input id="autor" class=" mt-1 m-full" type="text" name="autor"
                                :value="old('autor')" required autofocus autocomplete="autor" />
                        </div>
                        <div>
                            <x-input-label for="titulo" :value="__('Titulo')" />
                            <x-text-input id="titulo" class=" mt-1 m-full" type="text" name="titulo"
                                :value="old('titulo')" required autofocus autocomplete="titulo" />

                        </div>
                        <div>
                            <x-input-label for="subtitulo" :value="__('Subtitulo')" />
                            <x-text-input id="subtitulo" class=" mt-1 m-full" type="text" name="subtitulo"
                                :value="old('subtitulo')" required autofocus autocomplete="subtitulo" />

                        </div>
                        <div>
                            <x-input-label for="edição" :value="__('Edição')" />
                            <x-text-input id="edição" class=" mt-1 m-full" type="text" name="edição"
                                :value="old('edição')" required autofocus autocomplete="edição" />

                        </div>
                        <div>
                            <x-input-label for="editora" :value="__('Editora')" />
                            <x-text-input id="editora" class=" mt-1 m-full" type="text" name="editora"
                                :value="old('editora')" required autofocus autocomplete="editora" />

                        </div>
                        <div>
                            <x-input-label for="ano_publicacao" :value="__('Ano da Popublicação')" />
                            <x-text-input id="ano_publicacao" maxlength="4" class=" mt-1 m-full" type="text"
                                name="ano_publicacao" :value="old('ano_publicacao')" required autofocus
                                autocomplete="ano_publicacao" />

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
