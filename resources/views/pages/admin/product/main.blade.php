<x-app-layout title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Daftar Menu</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>

    <div class="card-footer">
        <div class="hstack gap-2 justify-content">
            <a type="button" class="btn btn-primary" href="{{ route('admin.create') }}" ><i class="fas fa-times"></i> Tambah Produk</a>
        </div>
    </div>

    <div class="card-body">
        <div>
            <div class="table-responsive table-card mb-1">
                <table class="table align-middle">
                    <thead class="table-primary text-muted ">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list form-check-all bg-white">
                        @foreach($product as $key => $item)
                        <tr>
                            <td >{{ $loop->iteration }}</td>
                            <td class="text-capitalize">{{$item->nama}}</td>
                            <td class="text-capitalize">{{$item->category}}</td>
                            <td class="text-capitalize">{{$item->price}}</td>
                            <td class="text-capitalize">{{$item->stock}}</td>
                            <td>
                                <ul class="list-inline hstack gap-2 mb-0">
                                    <li class="list-inline-item show" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="show">
                                        <a href="{{ route('admin.show', $item->id) }}"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="{{ route('admin.edit', $item->id) }}"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-pencil-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Remove">
                                        
                                        {{-- <a href="{{ route('admin.destroy',$item->id) }}"
                                            class="text-danger d-inline-block remove-item-btn">
                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                        </a> --}}
                                        {{-- <form action="{{ route('admin.destroy',$item->id) }}" method="DELETE">
                                            <button type="submit" class="text-danger d-inline-block remove-item-btn"><i class="ri-delete-bin-5-fill fs-16"></i></button>
                                        </form> --}}

                                        <form action="{{ route('admin.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                        {{-- <form method="DELETE" action="{{ route('admin.destroy',$item->id) }}">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
                                        </form> --}}
                                    </li>
                                </ul>
    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layouts>

