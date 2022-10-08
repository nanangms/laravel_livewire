<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
                
            
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td><button class="btn btn-primary">Detail</button>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
