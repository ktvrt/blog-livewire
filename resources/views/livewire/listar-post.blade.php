<div>
    <div class="flex flex-col items-center p-2 md:flex-row md:gap-8">
        <!-- INICIO Modal crear post -->
        <livewire:post-crear />
        <!-- FIN Modal crear post -->
        <flux:input wire:model.live.debounce.300ms='buscador' 
        class="mb-1" icon="magnifying-glass" placeholder="Buscar Post..."/>
    </div>
     <h2>buscar: {{ $buscador }}</h2>  
    
    
    <div
    class="overflow-x-auto">
    <table class="w-full text-left text-xs rtl:text-right">
        <thead class="text-xs uppercase">
        <tr>
            <th scope="col" class="px-6 py-3">
            <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                TITULO
            </p>
            </th>
            <th scope="col" class="px-6 py-3">
            <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                BODY
            </p>
            </th>
            <th scope="col" class="px-6 py-3">
            <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                IMAGEN
            </p>
            </th>
            <th scope="col" class="px-6 py-3">
            <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                ACCIÓN
            </p>
            </th>
        </tr>
        </thead>
        <tbody class="text-sm font-normal text-blue-gray-700">
        @foreach ($posts as $post)        
            <tr wire:key="{{ $post->id }}" class="border-b border-blue-gray-50">
                <td class="px-6 py-2 font-medium">
                <p class="block text-sm antialiased font-normal leading-normal ">
                    {{ $post->title }}
                </p>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                <p class="block text-sm antialiased font-normal leading-normal ">
                    {{ $post->body }}
                </p>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                <p class="block text-sm antialiased font-normal leading-normal ">
                    {{ $post->image ? $post->image : 'No image' }}
                </p>
                </td>
                <td class="px-3 py-2">
                    <flux:button variant="primary" color="amber" size="sm">Editar</flux:button>
                    <flux:button variant="primary" color="red" size="sm">Eliminar</flux:button>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    </div>

    {{ $posts->links() }}
                          
</div>
