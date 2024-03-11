<x-layout title=" Videos - Editar" >

    <x-videos.form update="{{ true }}" title="Editar Video" :video="$video" action="/videos/{{$video->id}}" > </x-videos.form>
</x-layout>