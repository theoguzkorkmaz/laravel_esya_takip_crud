@extends('layouts.main')

@section('content')
  <x-header></x-header>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
    @endforeach
  @endif

  <div class="w-2/5 mx-auto mt-5">
    <form action="{{route('birims.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
      @csrf
      <div class="flex flex-col gap-2 p-3 border">
        <label for="birim_ad" class="barlow-bold">Birim ad:</label>
        <input type="text" name="birim_ad" id="birim_ad" placeholder="Birim adını giriniz!" class="px-3 py-1 bg-transparent border rounded outline-0">
      </div>

      <div class="flex flex-row items-center justify-between gap-5 p-3 border">
        <button type="reset" class="w-1/2 py-2 text-white uppercase bg-red-700 rounded">Temizle</button>
        <button type="submit" class="w-1/2 py-2 text-white uppercase bg-green-700 rounded">Ekle</button>
      </div>
    </form>
  </div>
@endsection