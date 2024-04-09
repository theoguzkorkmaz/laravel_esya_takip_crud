@extends('layouts.main')

@section('content')
  <x-header></x-header>

  <div class="container grid grid-cols-4 gap-4 mx-auto mt-5 cursor-default grid-rows-auto">
    @foreach ($esyas as $esya)
      <div class="text-gray-600 bg-gray-100 rounded-lg drop-shadow-sm">
        <img src="{{asset('storage/'.$esya->esya_resim)}}" alt="" class="object-cover w-full mx-auto rounded-lg shadow-sm h-36">        
        <div class="flex flex-col gap-4 p-5">
          <h3 class="text-xl barlow-semibold">{{$esya->esya_ad}}</h3>
          <p class="text-sm">{{Str::limit($esya->esya_aciklama, 50, '...')}}</p>
          <p class="text-lg lowercase">{{$esya->esya_stok}} x {{$esya->birim->birim_ad}}</p>
          <div class="flex flex-row items-center gap-4">
            <a href="{{route('esyas.show', $esya->id)}}" class="w-1/3 py-1 text-sm text-center text-white uppercase bg-green-500 rounded">detaylı</a>
            <a href="{{route('esyas.edit', $esya->id)}}" class="w-1/3 py-1 text-sm text-center text-white uppercase bg-yellow-500 rounded">güncelle</a>                
            <form action="{{route('esyas.destroy', $esya->id)}}" method="POST" class="w-1/3">
              @csrf
              @method('DELETE')
              <button class="w-full py-1 text-sm text-white uppercase bg-blue-500 rounded">sil</button>
            </form>
          </div>
        </div>
      </div>      
    @endforeach
  </div>
@endsection