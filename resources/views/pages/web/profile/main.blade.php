<x-app-layout title="Home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="{{asset('profile/image/'.Auth::user()->image)}}"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                        alt="user-profile-image">
                                    {{-- <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <input id="profile-img-file-input" type="file"
                                            class="profile-img-file-input">
                                        <label for="profile-img-file-input"
                                            class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                    </div> --}}
                                </div>
                                <h5 class="mb-1">{{ Auth::user()->nama }}</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                role="tablist">
                                <li class="nav-item m-3">
                                        <h5>Profile</h5>
                                    </a>
                                </li>
                                <li class="nav-item m-3">
                                    <div class="flex-shrink-0">
                                        <a href="{{ route('web.editprofile') }}"  class="badge bg-light text-primary fs-12"><i class="ri-edit-box-line align-bottom "></i> Edit</a>
                                    </div>

                                    {{-- <div class="flex-shrink-0">
                                        <a href="{{ route('web.edit') }}" class="btn btn-success"><i
                                        class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                    </div> --}}
                                </li>                                    
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">User Name</th> </th>
                                                                        <td class="text-muted">: {{ Auth::user()->username }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Phone Number </th>
                                                                        <td class="text-muted">: {{ Auth::user()->phone }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">E-mail </th>
                                                                        <td class="text-muted">: {{ Auth::user()->email }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Alamat </th>
                                                                        <td class="text-muted">: {{ Auth::user()->alamat }}</td>                                                                      
                                                                    </tr>
                                                                    {{-- <tr>
                                                                        <th class="ps-0" scope="row">Credit Card </th>
                                                                        <td class="text-muted">: ID:</td>                                                                      
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="ps-0" scope="row">Joining Date</th>
                                                                        <td class="text-muted">: 24 Nov 2021</td>
                                                                    </tr> --}}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div>
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
        <!-- container-fluid -->
</x-app-layout>