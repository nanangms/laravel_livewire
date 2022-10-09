<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Is Aktif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    
                        <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault{{ $item->id }}" wire:click="userStatus({{ $item->id }})" {{ $item->is_active != 'Y' ? '' : 'checked' }}>
                            <label class="form-check-label" for="flexSwitchCheckDefault{{ $item->id }}"></label>
                        </div>
                    
                    </td>
                    <td><a href="{{ route('user.show', $item->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
