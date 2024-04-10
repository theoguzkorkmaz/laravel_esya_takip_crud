@extends('layouts.main')

@section('content')
  <x-header></x-header>

  <div class="container mx-auto mt-5">
    <div class="flex flex-row items-start justify-start gap-8 items-">      
      <div class="flex flex-col justify-around gap-8 p-5">
        <h3 class="text-xl barlow-semibold">{{$birim->birim_ad}}</h3>
        
        <div class="flex flex-row w-1/2 gap-4">          
          <a href="{{route('birims.edit', $birim->id)}}" class="w-full py-1 text-sm text-center text-white uppercase bg-yellow-500 rounded">güncelle</a>                
          <form action="{{route('birims.destroy', $birim->id)}}" method="POST" class="w-full">
            @csrf
            @method('DELETE')
            <button class="w-full py-1 text-sm text-white uppercase bg-blue-500 rounded">sil</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection