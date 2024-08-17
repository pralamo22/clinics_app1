<x-layout>
    <h1>pruebas</h1>
    <x-slot:metaTitle>
        página de pruebas
    </x-slot>
    <x-slot:metaDescription>
        Pagina de pruebas de la aplicacion Clinics
    </x-slot>

    @dump($posts)
    <br>

    @foreach ($posts as $post)
        {{ $post['title'] }}
        <br>
    @endforeach




</x-layout>
