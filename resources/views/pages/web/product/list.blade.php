<x-app-layout title="Home">
    <div class="row">
        @foreach ($product as $item)
        <div class="col-sm-6 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ asset('product/image/'.$item->image) }}" style="height: 150px;" alt="Card image cap">
                <div class="card-body">
                    <h5 style="font-size: 1rem">
                        {{ $item->nama }} 
                    </h5>
                    <small class="text-muted">
                        Stok : {{$item->stock}}
                        <span class="text-muted">Kg</span>
                    </small>
    
                    <div class="text-end">
                        {{-- <a href="{{ route('web.product.show', $item->id) }}"
                            class="text-primary d-inline-block edit-item-btn">
                            <i class="ri-eye-fill fs-16">Detail</i>
                        </a> --}}
                        <a href="{{ route('web.product.show', $item->id) }}"
                            class="btn btn-primary d-inline-block edit-item-btn">
                            <i class="bi bi-eye-fill me-2"></i>Detail
                        </a>
                        {{-- <a href="javascript:;" onclick="load_detail('{{route('web.menu.show',$item->id)}}')" class="btn btn-secondary">Detail</a> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- {{ $menu->links('theme.app.pagination') }} <br> --}}
</x-app-layout>