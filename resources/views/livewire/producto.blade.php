<div>
    <div class="grid gap-4 grid-cols-1 grid-row-1 m-3">
        <x-text-input type="text" class="rounded-lg border float-right border-gray-300 mb-4 w1/3 pl-8" placeholder="Buscar producto" wire:model.live="search"></x-text-input>
    </div>
    <div class="grid gap-4 grid-cols-1 grid-rows-3 md:grid-cols-2 lg:grid-cols-3 m-3">
        @if ($productos->isEmpty())
            <div class="flex w-full bg-red-100 p-5 rounded-lg">
                <p class="text-red-400">No hay productos registrados</p>
            </div>
        @else
            @foreach ($productos as $producto)
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl p-3">
                        <h2 class="text-2xl font-bold text-center p-2 ">{{$producto->nombre}}</h2>
                        <div class="p-2">
                            <div class="m-3">
                                <div class="group relative">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75 lg:h-80">
                                        <img src="https://cdn.pixabay.com/photo/2016/03/27/21/59/bread-1284438_1280.jpg" alt="Pan" 
                                        class="h-96 sm:h-80 w-full object-center">
                                    </div>
                                </div>
                                <div class="mt-4 flex justify-between text-lg ">
                                    <div>
                                        <h3 class="text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true"></span>
                                                {{$producto->nombre}}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{$producto->descripcion}}
                                        </p>
                                    </div>
                                    <p class="font-bold text-gray-900">$ {{$producto->precio}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
