<div>
    <!-- INICIO Modal crear post -->
    <livewire:post-crear />
    <!-- FIN Modal crear post -->
    
    
    <div
    class="overflow-x-auto">
    <table class="w-full text-left text-xs rtl:text-right">
        <thead class="text-xs uppercase">
        <tr>
            <th scope="col" class="px-6 py-3">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                TITULO
            </p>
            </th>
            <th scope="col" class="px-6 py-3">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                BODY
            </p>
            </th>
            <th scope="col" class="px-6 py-3">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                IMAGEN
            </p>
            </th>
            <th scope="col" class="px-6 py-3">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                ACCIÓN
            </p>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)        
            <tr wire:key="{{ $post->id }}"" class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                <td class="px-6 py-2 font-medium">
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                    {{ $post->title }}
                </p>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                    {{ $post->body }}
                </p>
                </td>
                <td class="p-4 border-b border-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                    {{ $post->image ? $post->image : 'No image' }}
                </p>
                </td>
                <td class="px-6 py-2 space-x-1">
                    <button 
                    >Eliminar 
                </button>
                <a href="#" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                    Editar                    
                </a>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    </div>

    {{ $posts->links() }}
                          
</div>
