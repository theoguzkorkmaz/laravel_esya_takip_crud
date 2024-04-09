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
    <form action="{{route('esyas.update', $esya->id)}}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
      @csrf
      @method('PUT')
      <div class="flex flex-col gap-2 p-3 border">
        <label for="esya_ad" class="barlow-bold">Eşya ad:</label>
        <input type="text" name="esya_ad" id="esya_ad" value="{{$esya->esya_ad}}" class="px-3 py-1 bg-transparent border rounded outline-0">
      </div>

      <div class="flex flex-col gap-2 p-3 border">
        <label for="esya_aciklama" class="barlow-bold">Eşya açıklama:</label>
        <textarea name="esya_aciklama" id="esya_aciklama" cols="30" rows="10" class="px-3 py-1 bg-transparent border rounded outline-0">
          {{$esya->esya_aciklama}}
        </textarea>
      </div>

      <div class="flex flex-col gap-2 p-3 border">
        <label for="esya_birim" class="barlow-bold">Eşya birim:</label>
        <select name="esya_birim" id="esya_birim" class="px-3 py-1 bg-transparent border rounded outline-0">
          <option value="-" selected disabled>Seçin</option>
          @foreach ($birims as $birim)
            <option {{$birim->id == $esya->birim_id ? 'selected' : ''}} value="{{$birim->id}}">{{$birim->birim_ad}}</option>
          @endforeach
        </select>
      </div>

      <div class="flex flex-col gap-2 p-3 border">
        <label for="esya_stok" class="barlow-bold">Eşya stok:</label>
        <input type="number" name="esya_stok" id="esya_stok" value="{{$esya->esya_stok}}" class="px-3 py-1 bg-transparent border rounded outline-0">
      </div>

      <div class="flex flex-col gap-2 p-3 border">
        <label for="esya_resim" class="barlow-bold">Varolan eşya resim:</label>
        <img src="{{asset('storage/'.$esya->esya_resim)}}" alt="" width="80">
      </div>

      <div class="flex flex-col gap-2 p-3 border">
        <label for="esya_resim" class="barlow-bold">Yeni resim ekle:</label>
        <input type="file" name="esya_resim" id="esya_resim" class="px-3 py-1 bg-transparent border rounded outline-0">
      </div>

      <div class="flex flex-row items-center justify-between gap-5 p-3 border">
        <button type="reset" class="w-1/2 py-2 text-white uppercase bg-red-700 rounded">Temizle</button>
        <button type="submit" class="w-1/2 py-2 text-white uppercase bg-orange-700 rounded">Güncelle</button>
      </div>
    </form>
  </div>
@endsection