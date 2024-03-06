<div class="grid gap-4 grid-cols-1 grid-row-1 m-3">
    <div class="bg-white">
        <div class="mx-auto max-w-2xl p-3">
            <div class="block w-full overflow-x-auto">
                <table class="items-center w-full border-collapse">
                    <thead class="thead-light ">
                        <tr>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Clave
                            </th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Nombre
                            </th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Precio
                            </th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    {{$producto->clave}}
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{$producto->nombre}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    $ {{$producto->precio}}
                                </td>
                                <td>
                                    Acciones
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            Facebook
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                            1,480
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2">60%</span>
                                <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                    <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            Facebook
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            5,480
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2">50%</span>
                                <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                                    <div style="width: 50%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                                </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            Google
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            4,807
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2">60%</span>
                                <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                                    <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                                </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            Instagram
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            3,678
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2">85%</span>
                                <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                                    <div style="width: 85%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500"></div>
                                </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                            twitter
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            2,645
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2">60%</span>
                                <div class="relative w-full">
                                <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                                    <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                </div>
                                </div>
                            </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>