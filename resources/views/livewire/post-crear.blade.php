<div>
    <!-- Modal crear posto -->
    
        <flux:modal.trigger name="crer-post-modal">
        <flux:button variant="primary" color="green" class="mb-2">Crear Post</flux:button>
        </flux:modal.trigger>

    <flux:modal name="crer-post-modal" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Crear Post</flux:heading>
                <flux:text class="mt-2">Ingresar los datos del Post.</flux:text>
            </div>

            <flux:input label="title" wire:model='title' placeholder="Titulo del Post" />
            <flux:input label="imagen" wire:model='imagen' type="file" placeholder="Imagen del Post" />

            <flux:textarea label="Body" wire:model='body' type="Body del Post" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='submit'>Guardar</flux:button>
            </div>
        </div>
    </flux:modal>
    <!-- fin Modal crear posto -->
</div>
