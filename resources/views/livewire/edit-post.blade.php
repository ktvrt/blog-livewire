<div>
    <!-- Modal editar posto -->    
    <flux:modal name="editar-post-modal" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Editar Post</flux:heading>
                <flux:text class="mt-2">Ingresar los datos del Post.</flux:text>
            </div>

            <flux:input label="title" wire:model='title' placeholder="Titulo del Post" />
            <flux:input label="imagen" wire:model='imagen' type="file" placeholder="Imagen del Post" />
            <div class="flex items-center gap-2">
                
                <img src="{{ asset($this->imagen) }}" @class([
                    'w-12 h-12 rounded-2xl',
                    'opacity-30' => !$imagen
                ]) >
                @if ($imagen) 
                    <img src="{{ $imagen->temporaryUrl() }}" class="w-12 h-12 rounded-2xl" >
                @endif
            </div>

            <flux:textarea label="Body" wire:model='body' type="Body del Post" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='actualizar'>Actualizar</flux:button>
            </div>
        </div>
    </flux:modal>
    <!-- fin Modal editar posto -->
</div>
