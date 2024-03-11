<x-layout title="Videos" >

      <x-videos.form title="Envie um video" :update="false" action="/videos" :video="old('video->url')" > </x-videos.form>
    
</x-layout>