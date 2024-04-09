@extends('layouts.main')

@section('content')
  <x-header></x-header>

  <div class="container mx-auto mt-5">
    <div class="flex flex-row items-start justify-start gap-8 items-">
      <img src="{{asset('storage/'.$esya->esya_resim)}}" alt="" class="object-cover w-3/12 h-full mx-auto rounded-lg shadow-sm">        
      <div class="flex flex-col justify-around gap-8 p-5">
        <h3 class="text-xl barlow-semibold">{{$esya->esya_ad}}</h3>
        <p class="text-sm">{{$esya->esya_aciklama}}</p>
        <p class="text-lg lowercase">{{$esya->esya_stok}} x {{$esya->birim->birim_ad}}</p>
        <div class="flex flex-row w-1/2 gap-4">          
          <a href="{{route('esyas.edit', $esya->id)}}" class="w-full py-1 text-sm text-center text-white uppercase bg-yellow-500 rounded">güncelle</a>                
          <form action="{{route('esyas.destroy', $esya->id)}}" method="POST" class="w-full">
            @csrf
            @method('DELETE')
            <button class="w-full py-1 text-sm text-white uppercase bg-blue-500 rounded">sil</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection