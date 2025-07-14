<div>
    <!-- Modal crear posto -->    
    <flux:modal name="crer-post-modal" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Crear Post</flux:heading>
                <flux:text class="mt-2">Ingresar los datos del Post.</flux:text>
            </div>

            <flux:input label="title" wire:model='title' placeholder="Titulo del Post" />
            
            <flux:input label="imagen" wire:model='imagen' accept="image/*" type="file" placeholder="Imagen del Post" />
            <div>
                @if ($imagen) 
                    <img src="{{ $imagen->temporaryUrl() }}" class="w-12 h-12 rounded-2xl" >
                @endif
            </div>

            <flux:textarea label="Body" wire:model='body' type="Body del Post" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='submit'>Guardar</flux:button>
            </div>
        </div>
    </flux:modal>
    <!-- fin Modal crear posto -->
</div>
