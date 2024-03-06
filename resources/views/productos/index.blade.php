<x-app-layout>
    {{-- <livewire:create-products></livewire:create-products> --}}
    <div class="m-3">
        <x-primary-button 
            onclick="Livewire.dispatch('openModal', { component: 'create-products'})"
            class="middle none center rounded-lg bg-gray-450 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-450/20 transition-all hover:shadow-lg hover:shadow-gray-450/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            <span>Crear producto</span>
        </x-primary-button>
    </div>
    
    <livewire:productos></livewire:productos>
</x-app-layout>