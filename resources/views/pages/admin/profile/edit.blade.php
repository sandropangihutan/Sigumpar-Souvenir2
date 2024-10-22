<x-admin-layouts title="Home">
    <div class="container-fluid">

        <div class="row">
            {{-- <div class="col-xxl-3">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                <img src="assets/images/users/avatar-1.jpg"
                                    class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                    alt="user-profile-image">
                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    <input id="profile-img-file-input" type="file"
                                        class="profile-img-file-input">
                                    <label for="profile-img-file-input"
                                        class="profile-photo-edit avatar-xs">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <h5 class="mb-1">{{ Auth::user()->username }}</h5>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--end col-->
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
                            role="tablist">
                            <li class="nav-item m-3">
                                    <h5>Profile</h5>
                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                <form class="needs-validation" method="post" action="{{ route('admin.updateprofile', $user->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Nama</label>                                                     
                                                <input type="text" name="nama" class="form-control" id="Enter nama"
                                                    placeholder="Enter your firstname" value="{{$user->nama}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Gambar</label>
                                                <input type="file" name="image" class="form-control" placeholder="Masukkan Gambar" value="{{ $user->image }}" >
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">No HP</label>                                                      
                                                <input type="number" name="phone" class="form-control" 
                                                    id="phonenumberInput"
                                                    placeholder="Enter your phone number"
                                                    value="{{$user->phone}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email
                                                    Address</label>
                                                <input type="email" name="email" class="form-control" id="emailInput"
                                                    placeholder="Enter your email"
                                                    value="{{$user->email}}">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="JoiningdatInput" class="form-label">Joining
                                                    Date</label>
                                                <input type="text" class="form-control"
                                                    data-provider="flatpickr" id="JoiningdatInput"
                                                    data-date-format="d M, Y"
                                                    data-deafult-date="24 Nov, 2021"
                                                    placeholder="Select date" />
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="alamat"  class="form-label">Alamat
                                                    </label>
                                                <input type="text" name="alamat" class="form-control" id="emailInput"
                                                    placeholder="Enter your Alamat"
                                                    value="{{$user->alamat}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        
                                        {{-- <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="province" class="form-label">Provinsi</label>
                                                <select class="form-control" data-choices id="subdistrict" name="subdistrict">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Kota</label>
                                                <select class="form-control" data-choices id="subdistrict" name="subdistrict">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="district" class="form-label">Kecamatan</label>
                                                <select class="form-control" data-choices id="subdistrict" name="subdistrict">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Kode Pos</label>
                                                <select class="form-control" data-choices id="subdistrict" name="subdistrict">
                                                </select>
                                            </div>
                                            </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Nama Kartu</label>
                                                <input type="text" class="form-control" id="emailInput"
                                                    placeholder="Enter your Alamat"
                                                    value="0987654321">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Nomor Kartu</label>
                                                <input type="text" class="form-control" id="emailInput"
                                                    placeholder="Enter your Alamat"
                                                    value="0987654321">
                                            </div>
                                        </div>      --}}
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary">Updates</button>

                                                    <a href="{{ route('admin.mainprofile') }}" class="btn btn-success">
                                                            Cancel</a>
                                                {{-- <button type="button"
                                                    class="btn btn-soft-success">Cancel</button> --}}
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
</x-admin-layouts>