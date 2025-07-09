<div>


    <!-- Modal crear posto -->
    <flux:modal.trigger name="crer-post-modal">
        <flux:button>Crear Post</flux:button>
    </flux:modal.trigger>

    <flux:modal name="crer-post-modal" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Crear Post</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>

            <flux:input label="Name" placeholder="Your name" />

            <flux:input label="Date of birth" type="date" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>
    <!-- fin Modal crear posto -->
    
    <div
    class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <table class="w-full text-left table-auto min-w-max">
        <thead>
        <tr>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                TIRULO
            </p>
            </th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                BODY
            </p>
            </th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                Employed
            </p>
            </th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                ACCIÓN
            </p>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                John Michael
            </p>
            </td>
            <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                Manager
            </p>
            </td>
            <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                23/04/18
            </p>
            </td>
            <td class="p-4 border-b border-blue-gray-50">
            <a href="#" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                Edit
            </a>
            </td>
        </tr>
        
        </tbody>
    </table>
    </div>
                          
</div>
