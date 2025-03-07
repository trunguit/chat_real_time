<template>

    <body class="tyn-body">
        <div class="tyn-root">
            <HeaderComponent />
            <div class="tyn-content  tyn-content-page">
                <div class="tyn-main tyn-content-inner" id="tynMain">
                    <div class="container">
                        <div class="tyn-profile">
                            <div class="tyn-profile-head">
                                <div class="tyn-profile-cover">
                                    <img class="tyn-profile-cover-image" src="/images/cover/2.jpg" alt="">
                                </div><!-- .tyn-profile-cover -->
                                <div class="tyn-profile-info">
                                    <div class="tyn-media-group align-items-start">
                                        <div class="tyn-media tyn-media-bordered tyn-size-4xl tyn-profile-avatar">
                                            <i class="fa-solid fa-camera change-avatar" @click="openFileInput"></i>
                                            <input type="file" name="" ref="fileInput" @change="handleChangeAvatar" class="d-none" accept="image/*" id="">
                                            <img :src="authStore.user.avatar || defaultAvatar" alt="Avatar">
                                        </div>
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h4 class="name">{{ user.name }} <span class="username">@{{formatUsername(user.name) }}</span>
                                                </h4>
                                            </div><!-- .tyn-media-row -->
                                            <div class="tyn-media-row has-dot-sap">
                                                <span class="content">287 Contacts</span>
                                                <span class="meta">8 Groups</span>
                                            </div><!-- .tyn-media-row -->
                                            <div class="tyn-media-row pt-2">
                                                <div class="tyn-media-multiple">
                                                    <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                        <img src="/images/avatar/2.jpg" alt="">
                                                    </div>
                                                    <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                        <img src="/images/avatar/3.jpg" alt="">
                                                    </div>
                                                    <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                        <img src="/images/avatar/4.jpg" alt="">
                                                    </div>
                                                    <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                        <img src="/images/avatar/5.jpg" alt="">
                                                    </div>
                                                    <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                        <img src="/images/avatar/6.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div><!-- .tyn-media-row -->
                                        </div><!-- .tyn-media-col -->
                                    </div><!-- .tyn-media-group -->
                                </div><!-- .tyn-profile-info -->
                            </div><!-- .tyn-profile-head -->
                            <div class="tyn-profile-nav">
                                <ul class="nav nav-tabs nav-tabs-line">
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-edit" type="button"> Edit Profile </button>
                                    </li><!-- li -->
                                </ul><!-- .nav-tabs -->
                            </div><!-- .tyn-profile-nav -->
                            <div class="tyn-profile-details">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="profile-edit" tabindex="0">
                                        <div class="row gy-5">
                                            <div class="col-12">
                                                <div class="row gy-4">
                                                    <div class="col-lg-3">
                                                        <h6>Personal Information</h6>
                                                        <div class="tyn-subtext">Edit Your personal Info</div>
                                                    </div><!-- .col -->
                                                    <div class="col-lg-9">
                                                        <form @submit.prevent="handleSubmit">
                                                            <div class="row g-gs">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="firstName">Your
                                                                            Name</label>
                                                                        <div class="form-control-wrap">
                                                                            <input v-model="user.name" type="text"
                                                                                class="form-control" id="firstName"
                                                                                placeholder="Your Name">
                                                                        </div>
                                                                    </div><!-- .form-group -->
                                                                </div><!-- .col -->
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="lastName">Phone</label>
                                                                        <div class="form-control-wrap">
                                                                            <input v-model="user.phone" type="text"
                                                                                class="form-control" id="lastName"
                                                                                placeholder="Your Name" value="">
                                                                        </div>
                                                                    </div><!-- .form-group -->
                                                                </div><!-- .col -->
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label d-flex"
                                                                            for="primaryEmail">Main Email <span
                                                                                class="small ms-2 text-success">Varified</span>
                                                                            <a href="#"
                                                                                class="link link-primary ms-auto">Add
                                                                                Email</a></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="primaryEmail" disabled
                                                                                placeholder="Primary Email"
                                                                                v-model="user.email">
                                                                        </div>
                                                                        <div class="tyn-subtext mt-2">You need to have
                                                                            at least one email connected with your
                                                                            account</div>
                                                                    </div><!-- .form-group -->
                                                                </div><!-- .col -->
                                                                <div class="col-12">
                                                                    <button type="submit"
                                                                        class="btn btn-md btn-primary">Save</button>
                                                                </div>
                                                            </div><!-- .row -->
                                                        </form>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- .col -->

                                        </div><!-- .row -->
                                    </div><!-- .tab-pane -->
                                </div><!-- .tab-content -->
                            </div><!-- .tyn-profile-details -->
                        </div><!-- .tyn-profile -->
                    </div><!-- .container -->
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
        <div class="modal fade" tabindex="-1" id="addContact">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content border-0">
                    <div class="modal-body p-4">
                        <h4 class="pb-2">Search by UserName</h4>
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <div class="form-control-icon start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg><!-- search -->
                                </div>
                                <input type="text" class="form-control form-control-solid" id="search-username"
                                    placeholder="Enter username">
                            </div>
                        </div><!-- .form-group -->
                        <ul class="tyn-media-list gap gap-3 pt-4">
                            <li>
                                <div class="tyn-media-group">
                                    <div class="tyn-media">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h6 class="name">Jasmine Thompson</h6>
                                        </div>
                                        <div class="tyn-media-row">
                                            <p class="content">@thompson_jasmine</p>
                                        </div>
                                    </div><!-- .tyn-media-col -->
                                    <ul class="tyn-media-option-list me-n1">
                                        <li class="dropdown">
                                            <button class="btn btn-icon btn-white btn-pill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-plus-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                                </svg><!-- person-plus-fill -->
                                            </button>
                                        </li>
                                    </ul><!-- .tyn-media-option-list -->
                                </div><!-- .tyn-media-group -->
                            </li><!-- li -->
                            <li>
                                <div class="tyn-media-group">
                                    <div class="tyn-media">
                                        <img src="/images/avatar/2.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h6 class="name">Konstantin Frank</h6>
                                        </div>
                                        <div class="tyn-media-row">
                                            <p class="content">@konstantin_frank</p>
                                        </div>
                                    </div><!-- .tyn-media-col -->
                                    <ul class="tyn-media-option-list me-n1">
                                        <li class="dropdown">
                                            <button class="btn btn-icon btn-white btn-pill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-plus-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                                </svg><!-- person-plus-fill -->
                                            </button>
                                        </li>
                                    </ul><!-- .tyn-media-option-list -->
                                </div><!-- .tyn-media-group -->
                            </li><!-- li -->
                            <li>
                                <div class="tyn-media-group">
                                    <div class="tyn-media">
                                        <img src="/images/avatar/3.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h6 class="name">Mathias Devos</h6>
                                        </div>
                                        <div class="tyn-media-row">
                                            <p class="content">@mathias_devos</p>
                                        </div>
                                    </div><!-- .tyn-media-col -->
                                    <ul class="tyn-media-option-list me-n1">
                                        <li class="dropdown">
                                            <button class="btn btn-icon btn-white btn-pill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-plus-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                                </svg><!-- person-plus-fill -->
                                            </button>
                                        </li>
                                    </ul><!-- .tyn-media-option-list -->
                                </div><!-- .tyn-media-group -->
                            </li><!-- li -->
                            <li>
                                <div class="tyn-media-group">
                                    <div class="tyn-media">
                                        <img src="/images/avatar/4.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h6 class="name">Marie George</h6>
                                        </div>
                                        <div class="tyn-media-row">
                                            <p class="content">@marie_george</p>
                                        </div>
                                    </div><!-- .tyn-media-col -->
                                    <ul class="tyn-media-option-list me-n1">
                                        <li class="dropdown">
                                            <button class="btn btn-icon btn-white btn-pill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-plus-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                                </svg><!-- person-plus-fill -->
                                            </button>
                                        </li>
                                    </ul><!-- .tyn-media-option-list -->
                                </div><!-- .tyn-media-group -->
                            </li><!-- li -->
                            <li>
                                <div class="tyn-media-group">
                                    <div class="tyn-media">
                                        <img src="/images/avatar/5.jpg" alt="">
                                    </div><!-- .tyn-media -->
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h6 class="name">Phillip Burke</h6>
                                        </div>
                                        <div class="tyn-media-row">
                                            <p class="content">@phillip_burke</p>
                                        </div>
                                    </div><!-- .tyn-media-col -->
                                    <ul class="tyn-media-option-list me-n1">
                                        <li class="dropdown">
                                            <button class="btn btn-icon btn-white btn-pill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-plus-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                                </svg><!-- person-plus-fill -->
                                            </button>
                                        </li>
                                    </ul><!-- .tyn-media-option-list -->
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
        <!-- Page Scripts -->

    </body>
</template>
<script>
import { reactive, onMounted, ref, nextTick } from 'vue';
import axios from 'axios';
import api from '../../utils/axios';

import { useRouter } from 'vue-router';
import HeaderComponent from './Header.vue';
import { useAuthStore } from '../../stores/authStore';
export default {
    components: {
        HeaderComponent,
    },
    setup() {

    const errors = reactive({});
    const router = useRouter();
    const fileInput = ref(null);
    const authStore = useAuthStore();

    const user = ref({
        name: '',
        email: '',
        phone: '',
    });

    const defaultAvatar = "/images/avatar/default.png"; 

    const formatUsername = (name) => {
      if (!name) return '';
      return name.replace(/\s+/g, '_').toLowerCase();
    };

    const handleSubmit = async () => {
      Object.keys(errors).forEach(key => delete errors[key]);
      try {
        const response = await api.post('/api/update-profile', user.value);
        router.push('/profile');
      } catch (error) {
        if (error.response && error.response.status == 422) {
          Object.assign(errors, error.response.data.errors);
        }
      }
    };

    const openFileInput = () => {
      if (fileInput.value) {
        fileInput.value.click();
      } else {
        console.error("fileInput is not defined yet!");
      }
    };

    const handleChangeAvatar = async (event) => {
      const file = event.target.files[0]; // Lấy file được chọn

      if (!file) return;

      // Kiểm tra loại file và kích thước
      const allowedTypes = ["image/jpeg", "image/png", "image/gif"];
      const maxSize = 2 * 1024 * 1024; // 2MB

      if (!allowedTypes.includes(file.type)) {
        alert("Chỉ chấp nhận file ảnh (JPEG, PNG, GIF).");
        return;
      }

      if (file.size > maxSize) {
        alert("File ảnh không được vượt quá 2MB.");
        return;
      }

      // Hiển thị ảnh trước khi upload
      const avatarPreview = URL.createObjectURL(file);

      // Gọi API để upload ảnh
      await authStore.uploadAvatar(file);

      // Cập nhật avatar trong store (nếu cần)
      authStore.user.avatar = avatarPreview;
    };

    onMounted(() => {
      user.value = authStore.user;
      console.log(user.value);
    });

    return {
      handleSubmit,
      errors,
      user,
      openFileInput,
      handleChangeAvatar,
      authStore,
      formatUsername,
      defaultAvatar,
      fileInput
    };
    },
   
};
</script>
<style scoped>
.tyn-profile-avatar {
    position: relative;
}

.change-avatar {
    position: absolute;
    top: 4px;
    right: 4px;
    font-size: 21px;
    color: black;
    cursor: pointer;
}
</style>