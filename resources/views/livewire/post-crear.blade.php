<div>
    <!-- Modal crear posto -->    
    <flux:modal name="crer-post-modal" class="md:w-200">
        <form wire:submit.prevent='submit'>
            @csrf
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
                    <flux:button type="submit" variant="primary" >Guardar</flux:button>
                </div>

                <div wire:loading wire:target='submit' class="flex items-center gap-2"> 
                    <flux:badge color="lime">
                        Guardando post...
                    </flux:badge>
                </div>
            </div>
        </form>
    </flux:modal>
    <!-- fin Modal crear posto -->
</div>
