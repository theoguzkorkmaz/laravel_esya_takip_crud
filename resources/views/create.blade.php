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
    <form action="{{route('esyas.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
      @csrf
      <div class="flex flex-col gap-2 border p-3">
        <label for="esya_ad" class="barlow-bold">Eşya ad:</label>
        <input type="text" name="esya_ad" id="esya_ad" placeholder="Eşya adını giriniz!" class="outline-0 bg-transparent border px-3 py-1 rounded">
      </div>

      <div class="flex flex-col gap-2 border p-3">
        <label for="esya_aciklama" class="barlow-bold">Eşya açıklama:</label>
        <textarea name="esya_aciklama" id="esya_aciklama" cols="30" rows="10" class="outline-0 bg-transparent border px-3 py-1 rounded"></textarea>
      </div>

      <div class="flex flex-col gap-2 border p-3">
        <label for="esya_birim" class="barlow-bold">Eşya birim:</label>
        <select name="esya_birim" id="esya_birim" class="outline-0 bg-transparent border px-3 py-1 rounded">
          <option value="-" selected disabled>Seçin</option>
          @foreach ($birims as $birim)
            <option value="{{$birim->id}}">{{$birim->birim_ad}}</option>
          @endforeach
        </select>
      </div>

      <div class="flex flex-col gap-2 border p-3">
        <label for="esya_stok" class="barlow-bold">Eşya stok:</label>
        <input type="number" name="esya_stok" id="esya_stok" placeholder="Eşya stok giriniz!" class="outline-0 bg-transparent border px-3 py-1 rounded">
      </div>

      <div class="flex flex-col gap-2 border p-3">
        <label for="esya_resim" class="barlow-bold">Eşya resim:</label>
        <input type="file" name="esya_resim" id="esya_resim" class="outline-0 bg-transparent border px-3 py-1 rounded">
      </div>

      <div class="flex flex-row items-center justify-between border p-3 gap-5">
        <button type="reset" class="w-1/2 bg-red-700 py-2 uppercase text-white rounded">Temizle</button>
        <button type="submit" class="w-1/2 bg-green-700 py-2 uppercase text-white rounded">Ekle</button>
      </div>
    </form>
  </div>
@endsection