<x-app-layout title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>

    <form class="needs-validation" method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card">
          <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                
              <div class="mb-3">
                  <label for="Nama Product" class="form-label">Nama Product</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Product" >
              </div>
                @error('nama')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="Jensi Product" class="form-label">Jenis Product</label>
                    <select name="category" class="form-select">
                        <option disabled selected>Pilih Jenis Product</option>                                        
                        <option value="stola" >Stola</option>
                        <option value="sortali">Sortali</option>
                        <option value="gantungan_kunci">Gantugan Kunci</option>
                    </select>
                </div>
                @error('category')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

              <div class="mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label class="form-label" for="product-price-input">Harga</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="product-price-addon">Rp</span>
                                <input type="number" name="price" class="form-control" id="product-price-input" placeholder="Masukkan Harga" aria-label="Price" aria-describedby="product-price-addon">
                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label class="form-label" for="product-discount-input">Stock</label>
                            <div class="input-group mb-3">
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" name="stock" class="product-quantity" value="1" min="0"
                                        max="100">
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div  class="mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        @error('price')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        @error('stock')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
              </div>
                

                {{-- <div class="mb-3">
                    <h5 class="fs-15 mb-1">Product Image</h5>
                    <p class="text-muted">Add Product main Image.</p>
                    <input type="file" name="image"  class="form-control @error('image') is-invalid @enderror" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg" placeholder="Masukkan Gambar">
                </div>
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror --}}

                <div class="mb-3">
                    <h5 class="fs-14 mb-3">Image :</h5>
                    {{-- <p class="text-muted">Add Product main Image.</p> --}}
                    <input class="form-control" name="image" class="form-controll @error('image') is invalid @enderror" id="image" type="file" accept="image/png, image/gif, image/jpeg" >
                </div>
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror



              <div class="mb-3">
                  <label for="Deskripsi" class="form-label">Deskripsi</label>
                  <textarea name="description" style="height:140px;" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
              </div>
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
          </div>
          <div class="card-footer">
              <div class="hstack gap-2 justify-content">
                  <a type="button" class="btn btn-light" href="{{ route('admin.main') }}" ><i class="fas fa-times"></i> Batal</a>
                  <button type="submit" class="btn btn-primary" id="add-btn">Submit</button>
          </div>
      </div>
    </form>
    
        

</x-app-layouts>