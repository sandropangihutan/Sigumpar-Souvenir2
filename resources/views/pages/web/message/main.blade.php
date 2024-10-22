<x-app-layout title="Home">
        <div class="container-fluid">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <!-- end chat leftsidebar -->
                <!-- Start User chat -->
                <div class="user-chat w-100 overflow-hidden">

                    <div class="chat-content d-lg-flex">
                        <!-- start chat conversation section -->
                        <div class="w-100 overflow-hidden position-relative">
                            <!-- conversation user -->
                            <div class="position-relative">
                                <div class="p-3 user-chat-topbar">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4 col-8">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                    <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <div class="d-flex align-items-center">                            
                                                        <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                            <span class="user-status"></span>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa</a></h5>
                                                            <p class="text-truncate text-muted mb-0 userStatus"><small class="fs-13">Online</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                                <!-- end chat user head -->

                                <div class="position-relative" id="users-chat" >
                                <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                                    <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                                        @foreach ($messages as $message)
                                        @if($message->user_id == Auth::user()->id)
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="chat-avatar">
                                                    <img src="{{asset('profile/image/'.Auth::user()->image)}}" alt="" >
                                                </div>
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">{{ $message->message }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><small class="text-muted time">{{ $message->created_at->diffForHumans() }}</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                </div>                
                                            </div>            
                                        </li>
                                        <!-- chat-list -->
                                        @else
                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="chat-avatar">
                                                    <img src="{{asset('profile/image/'.Auth::user()->image)}}" alt="" >
                                                </div>
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">{{ $message->message }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><small class="text-muted time">{{ $message->created_at->diffForHumans() }}</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                </div>                
                                            </div>            
                                        </li>
                                        @endif
                                        @endforeach
                                        <!-- chat-list -->
                                        <!-- chat-list -->
                                    </ul>
                                    <!-- end chat-conversation-list -->
                                    
                                </div>
                            </div>
                                
                                <!-- end chat-conversation -->

                                <div class="chat-input-section p-3 p-lg-4">
                                    <form action="{{ route('web.message.store') }}" method="post" enctype="multipart/form-data" >
                                        @csrf 
                                        <div class="row g-0 align-items-center">
                                            <div class="col">
                                                <div class="chat-input-feedback">
                                                    Please Enter a Message
                                                </div>
                                                <input type="text" class="form-control chat-input bg-light border-light" id="chat-input" placeholder="Type your message..." autocomplete="off">
                                            </div>
                                            <div class="col-auto">
                                                <div class="chat-input-links ms-2">
                                                    <div class="links-list-item">
                                                        <button type="submit" class="btn btn-success chat-send waves-effect waves-light">
                                                            <i class="ri-send-plane-2-fill align-bottom"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat-wrapper -->
            
        </div>
        <!-- container-fluid -->
</x-app-layouts>