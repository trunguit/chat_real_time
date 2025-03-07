<template>

    <body class="tyn-body">
        <div class="tyn-root">
            <HeaderComponent />
            <div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
                <div class="tyn-aside tyn-aside-base">
                    <div class="tyn-aside-head">
                        <div class="tyn-aside-head-text">
                            <h3 class="tyn-aside-title">Chats</h3>
                        </div><!-- .tyn-aside-head-text -->
                        <div class="tyn-aside-head-tools">
                            <ul class="link-group gap gx-3">
                                <li class="dropdown">
                                    <button class="link" data-bs-toggle="modal" data-bs-target="#newChat">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg><!-- plus -->
                                        <span>New</span>
                                    </button>
                                </li><!-- li -->
                                <li class="dropdown">
                                    <button class="link dropdown-toggle" data-bs-toggle="dropdown"
                                        data-bs-offset="0,10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                                            <path
                                                d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                                        </svg><!-- filter -->
                                        <span>Filter</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="tyn-list-links nav nav-tabs border-0">
                                            <li>
                                                <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#all-chats">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-chat-square-text"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                        <path
                                                            d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                    </svg><!-- chat-square-text -->
                                                    <span>All Chats</span>
                                                </button>
                                            </li><!-- li -->
                                            <li>
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#active-contacts">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person-check"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                        <path
                                                            d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                    </svg><!-- person-check -->
                                                    <span>Active Contacts</span>
                                                </button>
                                            </li><!-- li -->
                                            <li>
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#archived-chats">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                    </svg><!-- archive -->
                                                    <span>Archived Chats</span>
                                                </button>
                                            </li><!-- li -->
                                            <li>
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#spam-messages">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-bookmark-x"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708" />
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                                                    </svg><!-- bookmark-x -->
                                                    <span>Spam Messages</span>
                                                </button>
                                            </li><!-- li -->
                                            <li>
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#trash-bin">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Trash Bin</span>
                                                </button>
                                            </li><!-- li -->
                                        </ul><!-- .nav -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .link-group -->
                        </div><!-- .tyn-aside-head-tools -->
                    </div><!-- .tyn-aside-head -->
                    <div class="tyn-aside-body" data-simplebar>
                        <div class="tyn-aside-search">
                            <div class="form-group tyn-pill">
                                <div class="form-control-wrap">
                                    <div class="form-control-icon start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg><!-- search -->
                                    </div>
                                    <input type="text" class="form-control form-control-solid" id="search"
                                        placeholder="Search contact / chat">
                                </div>
                            </div>
                        </div><!-- .tyn-aside-search -->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="all-chats" tabindex="0" role="tabpanel">
                                <ul class="tyn-aside-list">
                                    <li v-for="friend in friends"  @click="selectFriend(friend.id)" :class="{'tyn-aside-item js-toggle-main':true,'active':receiverId == friend.id} ">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img :src="friend.avatar || defaultAvatar" alt="">
                                            </div><!-- .tyn-media -->
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">{{ friend.name }}</h6>
                                                    <span class="typing"></span>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">{{ friend.last_message }}</p>
                                                    <span class="meta">{{ friend.last_message_time }}</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->

                                </ul><!-- .tyn-aside-list -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="active-contacts" tabindex="0" role="tabpanel">
                                <ul class="tyn-aside-list">
                                    <li class="tyn-aside-item js-toggle-main active">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/1.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Jasmine Thompson</h6>
                                                    <span class="typing">typing ...</span>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Had they visited Rome before</p>
                                                    <span class="meta">45 min</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/3.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Mathias Devos</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Hey, how&#39;s it going?</p>
                                                    <span class="meta">2 days</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/4.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Marie George</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Same here. I&#39;ve been trying to keep myself
                                                        occupied</p>
                                                    <span class="meta">2 days</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/5.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Phillip Burke</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">It&#39;s been really fun so far</p>
                                                    <span class="meta">4 days</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/6.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Romy Schulte</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">That&#39;s cool!</p>
                                                    <span class="meta">1 week</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/10.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Maxim Werner</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Definitely, let&#39;s plan on it</p>
                                                    <span class="meta">1 year</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                </ul><!-- .tyn-aside-list -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="archived-chats" tabindex="0" role="tabpanel">
                                <ul class="tyn-aside-list">
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/2.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Konstantin Frank</h6>
                                                    <div class="indicator varified">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-check-circle-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                        </svg><!-- check-circle-fill -->
                                                    </div>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Liked that disco music</p>
                                                    <span class="meta">1 days</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/4.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Marie George</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Same here. I&#39;ve been trying to keep myself
                                                        occupied</p>
                                                    <span class="meta">2 days</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/5.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Phillip Burke</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">It&#39;s been really fun so far</p>
                                                    <span class="meta">4 days</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/9.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Albert Henderson</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Sounds good to me</p>
                                                    <span class="meta">3 months</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/10.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Maxim Werner</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Definitely, let&#39;s plan on it</p>
                                                    <span class="meta">1 year</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                </ul><!-- .tyn-aside-list -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="spam-messages" tabindex="0" role="tabpanel">
                                <ul class="tyn-aside-list">
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/9.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Albert Henderson</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Sounds good to me</p>
                                                    <span class="meta">3 months</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                    <li class="tyn-aside-item js-toggle-main">
                                        <div class="tyn-media-group">
                                            <div class="tyn-media tyn-size-lg">
                                                <img src="/images/avatar/10.jpg" alt="">
                                            </div>
                                            <div class="tyn-media-col">
                                                <div class="tyn-media-row">
                                                    <h6 class="name">Maxim Werner</h6>
                                                </div>
                                                <div class="tyn-media-row has-dot-sap">
                                                    <p class="content">Definitely, let&#39;s plan on it</p>
                                                    <span class="meta">1 year</span>
                                                </div>
                                            </div><!-- .tyn-media-col -->
                                            <div class="tyn-media-option tyn-aside-item-option">
                                                <ul class="tyn-media-option-list">
                                                    <li class="dropdown">
                                                        <div class="btn btn-icon btn-white btn-pill dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-offset="0,0"
                                                            data-bs-auto-close="outside">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg><!-- three-dots -->
                                                        </div><!-- .dropdown-toggle -->
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="tyn-list-links">
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-check" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                                                        </svg><!-- check -->
                                                                        <span>Mark as Read</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-bell" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                                                        </svg><!-- bell -->
                                                                        <span>Mute Notifications</span></a></li>
                                                                <!-- li -->
                                                                <li><a href="contacts.html">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                        </svg><!-- person -->
                                                                        <span>View Profile</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#callingScreen" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-telephone" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                        </svg><!-- telephone -->
                                                                        <span>Audio Call</span></a></li><!-- li -->
                                                                <li><a href="#videoCallingScreen"
                                                                        data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-camera-video"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                        </svg><!-- camera-video -->
                                                                        <span>Video Call</span></a></li><!-- li -->
                                                                <li class="dropdown-divider"></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-file-earmark-arrow-down"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                                            <path
                                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                                                        </svg><!-- file-earmark-arrow-down -->
                                                                        <span>Archive</span></a></li><!-- li -->
                                                                <li><a href="#deleteChat" data-bs-toggle="modal">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                            <path
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg><!-- trash -->
                                                                        <span>Delete</span></a></li><!-- li -->
                                                                <li><a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-exclamation-triangle"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                            <path
                                                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                        </svg><!-- exclamation-triangle -->
                                                                        <span>Report</span></a></li><!-- li -->
                                                            </ul><!-- .tyn-list-links -->
                                                        </div><!-- .dropdown-menu -->
                                                    </li><!-- li -->
                                                </ul><!-- .tyn-media-option-list -->
                                            </div><!-- .tyn-media-option -->
                                        </div><!-- .tyn-media-group -->
                                    </li><!-- .tyn-aside-item -->
                                </ul><!-- .tyn-aside-list -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="trash-bin" tabindex="0" role="tabpanel">
                                <div class="tyn-aside-row text-center">
                                    <h6>Nothing in trash</h6>
                                    <p> Lets delete someting to test it. </p>
                                </div><!-- .tyn-aside-row -->
                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->
                    </div><!-- .tyn-aside-body -->
                </div><!-- .tyn-aside -->
                <div class="tyn-main tyn-chat-content" id="tynMain">
                    <div class="tyn-chat-head">
                        <ul class="tyn-list-inline d-md-none ms-n1">
                            <li><button class="btn btn-icon btn-md btn-pill btn-transparent js-toggle-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                                    </svg><!-- arrow-left -->
                                </button></li>
                        </ul>
                        <div class="tyn-media-group">
                            <div class="tyn-media tyn-size-lg d-none d-sm-inline-flex">
                                <img src="/images/avatar/1.jpg" alt="">
                            </div><!-- .tyn-media -->
                            <div class="tyn-media tyn-size-rg d-sm-none">
                                <img src="/images/avatar/1.jpg" alt="">
                            </div><!-- .tyn-media -->
                            <div class="tyn-media-col">
                                <div class="tyn-media-row">
                                    <h6 class="name">Jasmine <span class="d-none d-sm-inline-block">Thompson</span></h6>
                                </div>
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="meta">Active</span>
                                </div>
                            </div><!-- .tyn-media-col -->
                        </div><!-- .tyn-media-group -->
                        <ul class="tyn-list-inline gap gap-3 ms-auto">
                            <li><button class="btn btn-icon btn-light" data-bs-toggle="modal"
                                    data-bs-target="#callingScreen">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg><!-- telephone-fill -->
                                </button></li>
                            <li><button class="btn btn-icon btn-light" data-bs-toggle="modal"
                                    data-bs-target="#videoCallingScreen">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                    </svg><!-- camera-video-fill -->
                                </button></li>
                            <li class="d-none d-sm-block"><button class="btn btn-icon btn-light js-toggle-chat-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg><!-- search -->
                                </button></li>
                            <li><button class="btn btn-icon btn-light js-toggle-chat-options">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-layout-sidebar-inset-reverse" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                                        <path
                                            d="M13 4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1z" />
                                    </svg><!-- layout-sidebar-inset-reverse -->
                                </button></li>
                        </ul><!-- .tyn-list-inline -->
                        <div class="tyn-chat-search" id="tynChatSearch">
                            <div class="flex-grow-1">
                                <div class="form-group">
                                    <div class="form-control-wrap form-control-plaintext-wrap">
                                        <div class="form-control-icon start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                            </svg><!-- search -->
                                        </div>
                                        <input type="text" class="form-control form-control-plaintext"
                                            id="searchInThisChat" placeholder="Search in this chat">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap gap-3">
                                <ul class="tyn-list-inline ">
                                    <li><button class="btn btn-icon btn-sm btn-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
                                            </svg><!-- chevron-up -->
                                        </button></li>
                                    <li><button class="btn btn-icon btn-sm btn-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg><!-- chevron-down -->
                                        </button></li>
                                </ul>
                                <ul class="tyn-list-inline ">
                                    <li><button class="btn btn-icon btn-md btn-light js-toggle-chat-search">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                            </svg><!-- x-lg -->
                                        </button></li>
                                </ul>
                            </div>
                        </div><!-- .tyn-chat-search -->
                    </div><!-- .tyn-chat-head -->
                    <div ref="scrollContainer" class="tyn-chat-body js-scroll-to-end" id="tynChatBody" >
                        <div class="tyn-reply" id="tynReply">
                            <div v-if="isLoading" class="loading-indicator">
                                Loading...
                            </div>
                            <template v-for="(group, index) in formattedMessages" :key="index">
                               
                                <!-- Hiển thị thời gian nếu cần -->
                                <div v-if="group.showTimestamp" class="tyn-reply-separator">
                                    {{ formatTimestamp(group.messages[0].created_at) }}
                                </div>

                                <!-- Tin nhắn của người khác (incoming) -->
                                <div v-if="group.sender_id !== userId" class="tyn-reply-item incoming">
                                    <!-- Hiển thị avatar nếu cần -->
                                    <div v-if="group.showAvatar" class="tyn-reply-avatar">
                                        <div class="tyn-media tyn-size-md tyn-circle">
                                            <img :src="group.avatar || defaultAvatar" alt="">
                                            <!-- <img :src="`images/avatar/${group.sender_id}.jpg`" alt=""> -->
                                        </div>
                                    </div>

                                    <!-- Nhóm tin nhắn -->
                                    <div class="tyn-reply-group">
                                        <!-- Hiển thị tất cả tin nhắn trong nhóm -->
                                        <div
                                            v-for="message in group.messages"
                                            :key="message.id"
                                            class="tyn-reply-bubble"
                                        >
                                            <div class="tyn-reply-text">{{ message.content }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tin nhắn của bạn (outgoing) -->
                                <div v-else class="tyn-reply-item outgoing">
                                    <!-- Nhóm tin nhắn -->
                                    <div class="tyn-reply-group">
                                        <!-- Hiển thị tất cả tin nhắn trong nhóm -->
                                        <div
                                            v-for="message in group.messages"
                                            :key="message.id"
                                            class="tyn-reply-bubble"
                                        >
                                            <div class="tyn-reply-text">{{ message.content }}</div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div><!-- .tyn-reply -->
                    </div><!-- .tyn-chat-body -->
                    <div class="tyn-chat-form">
                        <div class="tyn-chat-form-insert">
                            <ul class="tyn-list-inline gap gap-3">
                                <li class="dropup">
                                    <button class="btn btn-icon btn-light btn-md btn-pill" data-bs-toggle="dropdown"
                                        data-bs-offset="0,10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                        </svg><!-- plus-lg -->
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul class="tyn-list-links">
                                            <li><a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person-video2"
                                                        viewBox="0 0 16 16">
                                                        <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                                        <path
                                                            d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM1 3a1 1 0 0 1 1-1h2v2H1zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3zm-4-2h3v2H2a1 1 0 0 1-1-1zm3-1H1V8h3zm0-3H1V5h3z" />
                                                    </svg><!-- person-video2 -->
                                                    <span>New Group</span></a></li>
                                            <li><a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                                        <path
                                                            d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                                                    </svg><!-- mic -->
                                                    <span>Voice Clip</span></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                                <li class="d-none d-sm-block"><button class="btn btn-icon btn-light btn-md btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                            <path
                                                d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                        </svg><!-- card-image -->
                                    </button></li><!-- li -->
                                <li class="d-none d-sm-block"><button class="btn btn-icon btn-light btn-md btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button></li><!-- li -->
                            </ul>
                        </div><!-- .tyn-chat-form-insert -->
                        <div class="tyn-chat-form-enter">
                            <input class="tyn-chat-form-input"  type="text" name="" v-model="message" id="tynChatInput">
                            <!-- <div class="tyn-chat-form-input"  id="tynChatInput" contenteditable></div> -->
                            <ul class="tyn-list-inline me-n2 my-1">
                                <li><button class="btn btn-icon btn-white btn-md btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                                            <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z" />
                                            <path
                                                d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                        </svg><!-- mic-fill -->
                                    </button></li>
                                <li><button @click="sendMessage" class="btn btn-icon btn-white btn-md btn-pill" id="tynChatSend">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                        </svg><!-- send-fill -->
                                    </button></li>
                            </ul>
                        </div><!-- .tyn-chat-form-enter -->
                    </div><!-- .tyn-chat-form -->

                    <!-- .tyn-chat-content-aside -->
                </div><!-- .tyn-main -->
            </div><!-- .tyn-content -->

        </div><!-- .tyn-root -->
        <div class="modal fade" tabindex="-1" id="callingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content border-0">
                    <div class="tyn-chat-call">
                        <div class="tyn-chat-cover">
                            <img src="/images/cover/1.jpg" alt="">
                        </div><!-- .tyn-chat-cover -->
                        <div class="tyn-media-group tyn-media-vr tyn-media-center mt-n4 pb-4">
                            <div class="tyn-media tyn-size-xl tyn-circle border border-2 border-white">
                                <img src="/images/avatar/1.jpg" alt="">
                            </div><!-- .tyn-media -->
                            <div class="tyn-media-col">
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="meta">Calling ...</span>
                                </div>
                                <div class="tyn-media-row">
                                    <h6 class="name">Konstantin Frank</h6>
                                </div>
                            </div><!-- .tyn-media-col -->
                        </div><!-- .tyn-media-group -->
                        <ul class="tyn-list-inline gap gap-3 m-auto py-4">
                            <li>
                                <button class="btn btn-light" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    data-bs-target="#videoCallingScreen">
                                    <span>Switch To</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                    </svg><!-- camera-video-fill -->
                                </button>
                            </li>
                        </ul><!-- .tyn-list-inline -->
                        <ul class="tyn-list-inline gap gap-3 mx-auto py-4">
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        <path fill-rule="evenodd"
                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                    </svg><!-- person-plus-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4 4 0 0 0 12 8V7a.5.5 0 0 1 1 0zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a5 5 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4m3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3" />
                                        <path
                                            d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607m-7.84-9.253 12 12 .708-.708-12-12z" />
                                    </svg><!-- mic-mute-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                    </svg><!-- telephone-x-fill -->
                                </button>
                            </li><!-- li -->
                        </ul><!-- .tyn-list-inline -->
                    </div><!-- .tyn-chat-call -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
        <div class="modal fade" tabindex="-1" id="videoCallingScreen" data-bs-backdrop="static"
            data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content border-0">
                    <div class="tyn-chat-call tyn-chat-call-video">
                        <div class="tyn-chat-call-stack">
                            <div class="tyn-chat-call-cover">
                                <img src="/images/v-cover/1.jpg" alt="">
                            </div>
                        </div><!-- .tyn-chat-call-stack -->
                        <div class="tyn-chat-call-stack on-dark">
                            <div class="tyn-media-group p-4">
                                <div class="tyn-media-col align-self-start pt-3">
                                    <div class="tyn-media-row has-dot-sap">
                                        <span class="meta">Talking With ...</span>
                                    </div>
                                    <div class="tyn-media-row">
                                        <h6 class="name">Konstantin Frank</h6>
                                    </div>
                                    <div class="tyn-media-row has-dot-sap">
                                        <span class="content">02:09 min</span>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <div class="tyn-media tyn-media-1x1_3 tyn-size-3xl border border-2 border-dark">
                                    <img src="/images/v-cover/2.jpg" alt="">
                                </div><!-- .tyn-media -->
                            </div><!-- .tyn-media-group -->
                            <ul class="tyn-list-inline gap gap-3 mx-auto py-4 justify-content-center  mt-auto">
                                <li>
                                    <button class="btn btn-icon btn-pill btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                            <path fill-rule="evenodd"
                                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                        </svg><!-- person-plus-fill -->
                                    </button>
                                </li><!-- li -->
                                <li>
                                    <button class="btn btn-icon btn-pill btn-light" data-bs-toggle="modal"
                                        data-bs-target="#callingScreen">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                        </svg><!-- camera-video-fill -->
                                    </button>
                                </li><!-- li -->
                                <li>
                                    <button class="btn btn-icon btn-pill btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4 4 0 0 0 12 8V7a.5.5 0 0 1 1 0zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a5 5 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4m3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3" />
                                            <path
                                                d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607m-7.84-9.253 12 12 .708-.708-12-12z" />
                                        </svg><!-- mic-mute-fill -->
                                    </button>
                                </li><!-- li -->
                                <li>
                                    <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                        </svg><!-- telephone-x-fill -->
                                    </button>
                                </li><!-- li -->
                            </ul><!-- .tyn-list-inline -->
                        </div><!-- .tyn-chat-call-stack -->
                    </div><!-- .tyn-chat-call -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
        <div class="modal fade" tabindex="-1" id="muteOptions">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content border-0">
                    <div class="modal-body p-4">
                        <h4 class="pb-2">Mute conversation</h4>
                        <ul class="tyn-media-list gap gap-2">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="muteFor" id="muteFor15min">
                                    <label class="form-check-label" for="muteFor15min"> For 15 minutes </label>
                                </div>
                            </li><!-- li -->
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Hour"
                                        checked>
                                    <label class="form-check-label" for="muteFor1Hour"> For 1 Hours </label>
                                </div>
                            </li><!-- li -->
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Days"
                                        checked>
                                    <label class="form-check-label" for="muteFor1Days"> For 1 Days </label>
                                </div>
                            </li><!-- li -->
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="muteFor" id="muteForInfinity"
                                        checked>
                                    <label class="form-check-label" for="muteForInfinity"> Until I turn back On </label>
                                </div>
                            </li><!-- li -->
                        </ul><!-- .tyn-media-list -->
                        <ul class="tyn-list-inline gap gap-3 pt-3">
                            <li>
                                <button class="btn btn-md btn-danger js-chat-mute">Mute</button>
                            </li>
                            <li>
                                <button class="btn btn-md btn-light" data-bs-dismiss="modal">Close</button>
                            </li>
                        </ul><!-- .tyn-list-inline -->
                    </div><!-- .modal-body -->
                    <button
                        class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3"
                        data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg><!-- x-lg -->
                    </button><!-- modal-close -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
        <div @shown.bs.modal="onShow" class="modal fade" tabindex="-1" id="newChat">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content border-0">
                    <div class="modal-body p-4">
                        <h4 class="pb-2">Search by Name</h4>
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <div class="form-control-icon start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg><!-- search -->
                                </div>
                                <input type="text" v-model="keyword" @keydown.enter="searchContact"
                                    class="form-control form-control-solid" id="search-contact"
                                    placeholder="Search contact">
                            </div>
                        </div><!-- .form-group -->
                        <ul class="tyn-media-list gap gap-3 pt-4">
                            <li v-for="user in listFriendSearch" :key="user.id">
                                <div class="tyn-media-group">
                                    <div class="tyn-media">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h6 class="name">{{ user.name }}</h6>
                                        </div>
                                        <div class="tyn-media-row">
                                            <p class="content">@{{ user.email }}</p>
                                        </div>
                                    </div><!-- .tyn-media-col -->
                                    <ul class="tyn-media-option-list me-n1">
                                        <li class="dropdown">
                                            <button @click="sendFriendRequest(user.id)"
                                                class="btn btn-icon btn-white btn-pill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-plus-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5">
                                                    </path>
                                                </svg><!-- person-plus-fill -->
                                            </button>
                                        </li>
                                    </ul>
                                </div><!-- .tyn-media-group -->
                            </li><!-- li -->

                        </ul><!-- .tyn-media-list -->
                    </div><!-- .modal-body -->
                    <button
                        class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3"
                        data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg><!-- x-lg -->
                    </button><!-- modal-close -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
        <div class="modal fade" tabindex="-1" id="deleteChat">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content border-0">
                    <div class="modal-body">
                        <div class="py-4 px-4 text-center">
                            <h3>Delete chat</h3>
                            <p class="small">Once you delete your copy of this conversation, it cannot be undone.</p>
                            <ul class="tyn-list-inline gap gap-3 pt-1 justify-content-center">
                                <li>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                                </li>
                                <li>
                                    <button class="btn btn-light" data-bs-dismiss="modal">No</button>
                                </li>
                            </ul><!-- .tyn-list-inline -->
                        </div>
                    </div><!-- .modal-body -->
                    <button
                        class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3"
                        data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg><!-- x-lg -->
                    </button><!-- modal-close -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- .modal -->
        <!-- Page Scripts -->

    </body>
</template>
<script>
import { reactive, onMounted, ref, computed, nextTick ,onUnmounted, watch} from 'vue';
import Echo from '../../plugins/echo';
import { useAuthStore } from '../../stores/authStore';
import { useFriendStore } from '../../stores/friendStore';
import api from '../../utils/axios';
import HeaderComponent from './Header.vue';
export default {
    components: {
        HeaderComponent,
    },
    setup(props) {
        const authStore = useAuthStore();
        const userId = authStore.user?.id;
        const friendStore = useFriendStore();
        const notifications = ref([]);
       
        const friends = ref({});
        const keyword = ref('');
        const listFriendSearch = ref([]);
        const messages = ref([]);
        const message = ref('');
        const receiverId = ref('');
        const isLoading = ref(false);
        const hasMore = ref(true);
        const page = ref(1);
        let simpleBody = null;
        const scrollContainer = ref(null);
        const isAutoScrolling = ref(false);
        const defaultAvatar = "/images/avatar/default.png"; 
        
        onMounted(async () => {
            
            await getFriendList();
           
            
            Echo.private(`friend-send-message.${userId}`)
                .listen(".friend.send.message", (data) => {
                    messages.value.unshift(data.message);
            });
            if (scrollContainer.value) {
                simpleBody = new SimpleBar(scrollContainer.value);
                const scrollElement = simpleBody.getScrollElement();
                scrollElement.addEventListener('scroll', handleScroll);
            }

        });
        
        onUnmounted(() => {
            if (scrollContainer.value) {
                scrollContainer.value.removeEventListener('scroll', handleScroll);
            }
        });
        const handleScroll = () => {
            if (isAutoScrolling.value) return; 

            const scrollElement = simpleBody.getScrollElement();
            if (scrollElement.scrollTop === 0) {
                loadMoreMessages();
            }
        };
        const getFriendList = async () => {
            try {
                await friendStore.getFriendList();
                friends.value = friendStore.friends;
                if (friendStore.friends.length > 0) {
                    selectFriend(friendStore.friends[0].id);
                    
                }
            } catch (error) {
                console.error("Lỗi tìm kiếm liên hệ:", error);
            }
        }
        const selectFriend = async (friendId) => {
            try {
                page.value = 1;
                const response = await api.get(`/api/message/${friendId}`, { params: { page: page.value } });
                messages.value = response.data.messages;
                receiverId.value = friendId;
                await nextTick();
                scrollToBottom();
            } catch (error) {
                console.error("Lỗi tìm kiếm liên hệ:", error);
            }
        };
        
        const formatUsername = (name) => {
            if (!name) return '';
            return name.replace(/\s+/g, '_').toLowerCase();
        };

        const onShow = () => {
            keyword.value = '';
            listFriendSearch.value = []; // Sửa lại đúng cú pháp
        };

        const searchContact = async () => {
            try {
                const response = await api.get('/api/search-contact/' + keyword.value);
                listFriendSearch.value = response.data.users;
            } catch (error) {
                console.error("Lỗi tìm kiếm liên hệ:", error);
            }
        };

        async function sendFriendRequest(receiverId) {
            try {
                await api.post('/api/send-friend-request', { receiver_id: receiverId }); // Xóa JSON.stringify
            } catch (error) {
                console.error("Lỗi gửi yêu cầu kết bạn:", error);
            }
        }
       

        // Kiểm tra xem có nên hiển thị thời gian không
        const formattedMessages = computed(() => {
            if (!messages.value || !Array.isArray(messages.value)) {
                return [];
            }

            const result = [];
            let currentGroup = null;
            
            // Duyệt mảng messages từ đầu đến cuối (từ mới đến cũ)
            messages.value.forEach((message, index) => {
                const prevMessage = messages.value[index - 1];
                const showTimestamp = shouldShowTimestamp(message, prevMessage);
                const shouldGroupWithPrevious =
                    prevMessage &&
                    prevMessage.sender_id === message.sender_id &&
                    !showTimestamp;
                if (!shouldGroupWithPrevious) {
                    currentGroup = {
                        sender_id: message.sender_id,
                        messages: [message],
                        avatar: message.sender?.avatar || defaultAvatar.value,
                        showTimestamp,
                        showAvatar: message.sender_id !== userId.value,
                    };
                    result.push(currentGroup);
                } else {
                    currentGroup.messages.push(message);
                }
            });
            
            return result;
        });
        const getGroupMessages = (index) => {
            const groupMessages = [];
            let currentIndex = index;
            groupMessages.push(formattedMessages.value[currentIndex]);

            // Kiểm tra các tin nhắn tiếp theo có cùng nhóm không
            while (
                currentIndex + 1 < formattedMessages.value.length &&
                formattedMessages.value[currentIndex + 1].groupWithPrevious
            ) {
                currentIndex++;
                groupMessages.push(formattedMessages.value[currentIndex]);
            }
            console.log(formattedMessages.value);
            return groupMessages;
        };
        // Kiểm tra xem có nên hiển thị thời gian không
        const shouldShowTimestamp = (currentMessage, prevMessage) => {
            if (!prevMessage) return true;
            const currentTime = new Date(currentMessage.created_at);
            const prevTime = new Date(prevMessage.created_at);
            const timeDiff = Math.abs(currentTime - prevTime) / (1000 * 60); // Tính khoảng cách thời gian (phút)
            return timeDiff > 5; // Hiển thị timestamp nếu khoảng cách > 5 phút
        };


        const formatTimestamp = (timestamp) => {
            const date = new Date(timestamp);
            return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        };
        const sendMessage = async () => {
            try {
                const response = await api.post('/api/send-message', { message: message.value , receiverId: receiverId.value});
                message.value = '';
                messages.value.unshift(response.data.message);
            } catch (error) {
                console.error("Lỗi gửi tin nhắn:", error);
            }
            
        }

        const loadMoreMessages = async () => {
            if (isLoading.value || !hasMore.value) return; // Nếu đang tải hoặc không còn tin nhắn, không làm gì

            isLoading.value = true; // Đánh dấu đang tải
            page.value += 1;
            try {
                const response = await api.get(`/api/message/${receiverId.value}`, { params: { page: page.value } });
                if (response.data.messages.length > 0) {
                    messages.value.push(...response.data.messages);                  
                } else {    
                    hasMore.value = false; // Không còn tin nhắn để tải
                }
            } catch (error) {
                console.error("Lỗi tải thêm tin nhắn:", error);
            } finally {
                isLoading.value = false; // Đánh dấu đã tải xong
            }
        };

        
        const scrollToBottom = () => {
            const container = document.querySelector('.js-scroll-to-end'); 
            if (container) {
                if (!simpleBody) {
                    simpleBody = new SimpleBar(container);
                    const scrollElement = simpleBody.getScrollElement();
                    scrollElement.scrollTop = scrollElement.scrollHeight;
                } else {
                    const scrollElement = simpleBody.getScrollElement();
                    scrollElement.scrollTop = scrollElement.scrollHeight;
                }
            }
        };

        return {
                notifications,
                authStore,
                userId,
                sendFriendRequest,
                keyword,
                searchContact,
                formatUsername,
                listFriendSearch,
                onShow,
                getFriendList,
                friends,
                messages,
                shouldShowTimestamp,
                formatTimestamp,
                formattedMessages,
                message,
                sendMessage,
                selectFriend,
                receiverId,
                getGroupMessages,
                isLoading,
                scrollContainer,
                defaultAvatar
            };
        }
};
</script>
<style scoped>
.tyn-chat-form-input{
    border: none;
}
.tyn-reply-group > *:not(:last-child) {
    margin-top: 0.375rem;
}
.tyn-reply-group {
    flex-direction: column-reverse;
}
    
</style>