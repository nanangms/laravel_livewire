<div>
    

    {{-- <div class="mb-3">
        <h2>Properti</h2>
        
        <input type="text" class="form-control" wire:model="nama"> 

        <textarea class="form-control" wire:model="nama"></textarea> 

        <input type="radio" name="jenis_kelamin" value="Laki" wire:model="nama">Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" wire:model="nama">Perempuan 

        <select class="form-control" wire:model="nama">
            <option>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> 
        <input 
        @if($show_password == 'show')
        type="text"
        @else
        type="password"

        @endif
         class="form-control" wire:model="nama">
        <label for="">Show password</label>
        <input type="checkbox" wire:model='show_password' value="show">

    </div> --}}
    

    <hr>
    <div class="mb-3">
        <h2>Action</h2>
        <input type="number" class="form-control" wire:model="keranjang"> 
    </div>
        <button class="btn btn-primary" wire:click="plus">+ Plus</button>
        @if($keranjang >= 1)
        <button class="btn btn-danger" wire:click="minus">- Minus</button>
        @endif
    
</div>
