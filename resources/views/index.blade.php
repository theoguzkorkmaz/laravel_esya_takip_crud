@extends('layouts.main')

@section('content')
  <x-header></x-header>

  <div class="w-4/5 mx-auto mt-5">
    <table class="border-separate border-spacing-0.5 border border-slate-500 w-full">
      <thead>
        <tr>
          <td class="border border-slate-600 barlow-black w-1/12">Eşya id</td>
          <td class="border border-slate-600 barlow-black w-2/12">Eşya ad</td>
          <td class="border border-slate-600 barlow-black w-4/12">Eşya açıklama</td>
          <td class="border border-slate-600 barlow-black w-1/12">Eşya birim</td>
          <td class="border border-slate-600 barlow-black w-1/12">Eşya stok</td>
          <td class="border border-slate-600 barlow-black w-2/12">Eşya resim</td>
          <td class="border border-slate-600 barlow-black w-1/12">-</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($esyas as $esya)
          <tr>                
            <td class="border border-slate-700 text-center">{{$esya->id}}</td>                         
            <td class="border border-slate-700 p-3">{{$esya->esya_ad}}</td>        
            <td class="border border-slate-700 p-3">{{Str::limit($esya->esya_aciklama, 50, '...')}}</td>        
            <td class="border border-slate-700 p-3">{{$esya->birim->birim_ad}}</td>        
            <td class="border border-slate-700 p-3">{{$esya->esya_stok}}</td>        
            <td class="border border-slate-700 p-3"><img src="{{asset('storage/'.$esya->esya_resim)}}" alt="" width="80" class="mx-auto"></td>
            <td class="border border-slate-700 text-center">
              <div class="flex flex-col gap-5 p-3">
                <a href="#" class="py-1 text-white uppercase barlow-black text-xs rounded bg-yellow-500">güncelle</a>
                <a href="#" class="py-1 text-white uppercase barlow-black text-xs rounded bg-red-500">Sil</a>                
              </div>
            </td>
          </tr>
        @endforeach        
      </thead>
    </table>
  </div>
@endsection