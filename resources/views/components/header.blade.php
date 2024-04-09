<div class="container flex flex-row items-center justify-between p-4 mx-auto bg-gray-100 rounded">  
  <a href="#" class="text-xl tracking-wider uppercase barlow-medium-italic">
    eşya takip crud
  </a>

  <ul class="flex flex-row items-center gap-4">
    <li class="flex flex-row items-center gap-2 px-5 border border-gray-700 rounded">
      <a href="{{route('esyas.index')}}" class="cursor-pointer first:border-dashed first:border-r first:pr-3 first:border-gray-700 last:pl-2 last:text-gray-500">Eşya</a>
      <a href="{{route('esyas.create')}}" class="cursor-pointer first:border-dashed first:border-r first:pr-3 first:border-gray-700 last:pl-2 last:text-gray-500">Eşya Ekle</a>
    </li>
    <li class="flex flex-row items-center gap-2 px-5 border border-gray-700 rounded">
      <a href="{{route('esyas.index')}}" class="cursor-pointer first:border-dashed first:border-r first:pr-3 first:border-gray-700 last:pl-2 last:text-gray-500">Birim</a>
      <a href="{{route('esyas.create')}}" class="cursor-pointer first:border-dashed first:border-r first:pr-3 first:border-gray-700 last:pl-2 last:text-gray-500">Birim Ekle</a>
    </li>
  </ul>
</div>