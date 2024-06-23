<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h1
                        class="text-center font-large font-semibold text-xl text-gray-800 dark:text-white mt-5 leading-tight">
                        SEUS LIVROS</h1>
                <div class="p-6 text-gray-900 dark:text-gray-100 grid gap-4 grid-cols-2 ">
                    
                    @foreach ($book as $books)
                        @if (Auth::user()->id == $books->id_user)
                            <div class="dark:bg-zinc-900 mx-2 text-center h-auto w-auto rounded-lg">
                                @if ($books->capa == '')
                                    <p class="p-4">CAPA VAZIA!</p>
                                    <br>
                                    <h4 class="mb-2">TITULO DA OBRA: {{$books->titulo}}</h4>
                                @else
                                    <img class="object-scale-down rounded-lg object-center" src="{{asset('img/books/') ."/" . $books->capa}}" >
                                    <br>
                                    <h4 class="mb-2">TITULO DA OBRA: {{$books->titulo}}</h4>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
