<div>
    <div class="flex flex-col items-center p-2 md:flex-row md:gap-8">
        <flux:modal.trigger name="crer-post-modal">
        <flux:button variant="primary" color="green" class="mb-2">Crear Post</flux:button>
        </flux:modal.trigger>
        
        <flux:input wire:model.live.debounce.300ms='buscador' 
        class="mb-1" icon="magnifying-glass" placeholder="Buscar Post..."/>
    </div>

    <!-- INICIO Modal crear post -->
    <livewire:post-crear />
    <!-- FIN Modal crear post -->
    <!-- INICIO Modal editar post -->
    <livewire:edit-post />
    <!-- FIN Modal editar post -->
    <!-- INICIO Modal eliminar post -->
    <flux:modal name="eliminar-post-modal" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Eliminar Post?</flux:heading>

                <flux:text class="mt-2">
                    <p>You're about to eliminar este post.</p>
                    <p>This action cannot be reversed.</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button wire:click='destruir' type="submit" variant="danger">Eliminar post</flux:button>
            </div>
        </div>
    </flux:modal>
    <!-- FIN Modal eliminar post -->

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
                    <flux:button 
                        wire:click='editar({{ $post->id }})' variant="primary" color="amber" size="sm">Editar</flux:button>
                    <flux:button 
                        wire:click='eliminar({{ $post->id }})' variant="primary" color="red" size="sm">Eliminar</flux:button>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    </div>

    {{ $posts->links() }}
                          
</div>
