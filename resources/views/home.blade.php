@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('productDeleteConfirmation', event => {
            console.log(event);
            Swal.fire({
                title: 'Apakah Kamu yakin?',
                text: "Produk " + event.detail.product.name + " akan kamu hapus?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('productDestroy');
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })

        Livewire.on('success', data => {
            console.log(data.pesan);
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: data.pesan,
              showConfirmButton: false,
              timer: 1500
            })
        })

        
    </script>
    <script>
        Livewire.on('productStore', () => {
            $('#exampleModal').modal('hide');
            $('#editModal').modal('hide');
        })
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-3">
                    @livewire('product-form')
                </div>
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">
                        @livewire('product-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
