<x-admin-layouts title="Message">


    <div class="container-fluid">
        <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
            <div class="chat-leftsidebar">
                <div class="px-4 pt-4 mb-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="mb-4">Chats</h5>
                        </div>
                    </div>
                    <div class="search-box">
                        <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                        <i class="ri-search-2-line search-icon"></i>
                    </div>

                </div> <!-- .p-4 -->

                <div class="chat-room-list" data-simplebar>

                    <div class="d-flex align-items-center px-4 mb-2">
                        <div class="flex-grow-1">
                            <h4 class="mb-0 fs-12 text-muted text-uppercase">Direct Messages</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="New Message">
                            </div>
                        </div>
                    </div>

                    <div class="chat-message-list">

                        <ul class="list-unstyled chat-list chat-user-list" id="userList">
                            <li class="active">
                                <a href="javascript: void(0);">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                            <div class="avatar-xxs">
                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle img-fluid userprofile" alt="">
                                            </div>
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-truncate mb-0">Lisa Parker</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End chat-message-list -->
                </div>

            </div>
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
                                                        <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
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
                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" >
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Good morning 😊</p>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                            </div>                
                                        </div>            
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" >
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                            </div>                
                                        </div>            
                                    </li>
                                </ul>
                                <!-- end chat-conversation-list -->
                                
                            </div>
                            {{-- <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard" role="alert">
                                Message copied
                            </div> --}}
                        </div>
                            
                            <!-- end chat-conversation -->

                            <div class="chat-input-section p-3 p-lg-4"> 
            
                                <form id="chatinput-form" enctype="multipart/form-data" > 
                                    <div class="row g-0 align-items-center">
                                        <div class="col-auto">
                                            <div class="chat-input-links me-2">
                                                <div class="links-list-item">
                                                    <button type="button" class="btn btn-link text-decoration-none emoji-btn" id="emoji-btn">
                                                        <i class="bx bx-smile align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
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

                            <div class="replyCard">
                                <div class="card mb-0">
                                    <div class="card-body py-3">
                                        <div class="replymessage-block mb-0 d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="conversation-name"></h5>
                                                <p class="mb-0"></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button type="button" id="close_toggle" class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                                    <i class="bx bx-x align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chat-wrapper -->
        
    </div>
    <!-- container-fluid -->



</x-admin-layouts>