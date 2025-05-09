@extends('layouts.app')
@section('content')
    <div class="page-content wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-3">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="card-title mb-0 flex-grow-1">Appointments</h6>
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">Jan 2024<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Oct 2024</a>
                                    <a class="dropdown-item" href="#">Nov 2024</a>
                                    <a class="dropdown-item" href="#">Dec 2024</a>
                                    <a class="dropdown-item" href="#">Jan 2024</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">01</h6>
                                                <p class="mb-0 text-muted fs-sm">TH</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">02</h6>
                                                <p class="mb-0 text-muted fs-sm">FR</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-primary text-body px-3 py-2 rounded">
                                            <div class="text-center">
                                                <h6 class="mb-1 text-white">03</h6>
                                                <p class="mb-0 text-white-75 fs-sm">SA</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">04</h6>
                                                <p class="mb-0 text-muted fs-sm">SU</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">05</h6>
                                                <p class="mb-0 text-muted fs-sm">MO</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">06</h6>
                                                <p class="mb-0 text-muted fs-sm">Jun</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">07</h6>
                                                <p class="mb-0 text-muted fs-sm">TU</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">08</h6>
                                                <p class="mb-0 text-muted fs-sm">WE</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">09</h6>
                                                <p class="mb-0 text-muted fs-sm">TH</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">10</h6>
                                                <p class="mb-0 text-muted fs-sm">FR</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">11</h6>
                                                <p class="mb-0 text-muted fs-sm">SA</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">12</h6>
                                                <p class="mb-0 text-muted fs-sm">SU</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">13</h6>
                                                <p class="mb-0 text-muted fs-sm">MO</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">14</h6>
                                                <p class="mb-0 text-muted fs-sm">TU</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide avatar-md h-auto">
                                        <a href="#!" class="avatar-title d-inline-block bg-body-secondary text-body px-3 py-2 rounded border border-light-subtle">
                                            <div class="text-center">
                                                <h6 class="mb-1">15</h6>
                                                <p class="mb-0 text-muted fs-sm">WE</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3">Total Appointments: 07</h6>
                                <ul class="acitivity-timeline-2 list-unstyled mb-0">
                                    <li>
                                        <p class="mb-2 fs-sm">09:00 AM to 09:30 AM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-transparent">
                                                        <img src="../admin/images/users/48/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Sadie Hampton</h6>
                                                    <p class="text-muted mb-0">Stomach Aches</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">10:00 AM to 10:30 AM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-transparent">
                                                        <img src="../admin/images/users/48/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Angie Henry</h6>
                                                    <p class="text-muted mb-0">Conjunctivitis ("pink eye“)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">11:00 AM to 11:30 AM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-transparent">
                                                        <img src="../admin/images/users/48/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Robert Trusty</h6>
                                                    <p class="text-muted mb-0">Infectious mononucleosis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">12:00 PM to 12:30 PM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-info-subtle text-info">
                                                        UA
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Utler Anthony</h6>
                                                    <p class="text-muted mb-0">Leptospirosis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">01:00 PM to 01:30 PM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-transparent">
                                                        <img src="../admin/images/users/48/avatar-5.jpg" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Sheila Gonzalez</h6>
                                                    <p class="text-muted mb-0">Cryptosporidiosis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">01:30 PM to 03:00 PM</p>
                                        <div class="border border-light-subtle p-4 rounded text-center">
                                            Lunch Break
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">03:00 PM to 03:30 PM</p>
                                        <div class="border border-light-subtle p-4 rounded text-center">
                                            No Appointments
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">04:30 PM to 05:00 PM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-secondary-subtle text-secondary">
                                                        DE
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Debra Esquibel</h6>
                                                    <p class="text-muted mb-0">Tuberculosis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">05:00 PM to 05:30 PM</p>
                                        <div class="border border-light-subtle px-3 py-2 rounded">
                                            <div class="d-flex gap-3">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title rounded-circle bg-transparent">
                                                        <img src="../admin/images/users/48/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Jodie Bentley</h6>
                                                    <p class="text-muted mb-0">Hepatitis B</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">06:30 PM to 07:00 PM</p>
                                        <div class="border border-light-subtle p-4 rounded text-center">
                                            No Appointments
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">07:00 PM to 07:30 PM</p>
                                        <div class="border border-light-subtle p-4 rounded text-center">
                                            No Appointments
                                        </div>
                                    </li>
                                    <li>
                                        <p class="mb-2 fs-sm">07:30 PM to 08:00 PM</p>
                                        <div class="border border-light-subtle p-4 rounded text-center">
                                            No Appointments
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9">
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm">
                                                <div class="avatar-title fs-4xl bg-info-subtle text-info rounded">
                                                    <i class="bx bx-user-voice"></i>
                                                </div>
                                            </div>

                                            <h4 class="mt-3">
                                                <div class="randomNumberDisplay"></div>
                                            </h4>
                                            <p class="mb-0 text-muted">Total Appointment</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm">
                                                <div class="avatar-title fs-4xl bg-primary-subtle text-primary rounded">
                                                    <i class="bx bx-user"></i>
                                                </div>
                                            </div>

                                            <h4 class="mt-3">
                                                <div class="randomNumberDisplay"></div>
                                            </h4>
                                            <p class="mb-0 text-muted">New Patients</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm">
                                                <div class="avatar-title fs-4xl bg-warning-subtle text-warning rounded">
                                                    <i class="bx bx-injection"></i>
                                                </div>
                                            </div>

                                            <h4 class="mt-3">
                                                <div class="randomNumberDisplay"></div>
                                            </h4>
                                            <p class="mb-0 text-muted">Follow Up Patients</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm">
                                                <div class="avatar-title fs-4xl bg-danger-subtle text-danger rounded">
                                                    <i class="bx bx-user-pin"></i>
                                                </div>
                                            </div>

                                            <h4 class="mt-3">
                                                <div class="randomNumberDisplay"></div>
                                            </h4>
                                            <p class="mb-0 text-muted">Total Patients</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm">
                                                <div class="avatar-title fs-4xl bg-secondary-subtle text-secondary rounded">
                                                    <i class="bx bx-copy-alt"></i>
                                                </div>
                                            </div>

                                            <h4 class="mt-3">
                                                <div class="randomNumberDisplay"></div>
                                            </h4>
                                            <p class="mb-0 text-muted">Review Reports</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm">
                                                <div class="avatar-title fs-4xl bg-success-subtle text-success rounded">
                                                    <i class="bx bx-wallet"></i>
                                                </div>
                                            </div>

                                            <h4 class="mt-3 d-flex align-items-center">$<div class="randomNumberDisplay"></div>
                                            </h4>
                                            <p class="mb-0 text-muted">Total Earning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card card-height-100">
                                <div class="card-header d-flex align-items-center">
                                    <h6 class="card-title mb-0 flex-grow-1">Overall Patients</h6>
                                    <a href="#!" class="text-decoration-underline flex-shrink-0 fs-md">View All Patients <i class="ri ri-arrow-right-line align-bottom"></i></a>
                                </div>
                                <div class="card-body">
                                    <div id="totalPatients" data-colors='["--tb-warning"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Appointment Booking View</h6>
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort By: <span class="text-muted ms-1">Jan 2024<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Oct 2024</a>
                                            <a class="dropdown-item" href="#">Nov 2024</a>
                                            <a class="dropdown-item" href="#">Dec 2024</a>
                                            <a class="dropdown-item" href="#">Jan 2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="basic_heatmap" data-colors='["--tb-secondary", "--tb-card-bg-custom"]' class="apex-charts ms-n3" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8">
                            <div class="card" id="patientsList">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">My Patients</h6>
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn fs-md" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort By: <span class="text-muted ms-1">Nov 2024<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Oct 2024</a>
                                            <a class="dropdown-item" href="#">Nov 2024</a>
                                            <a class="dropdown-item" href="#">Dec 2024</a>
                                            <a class="dropdown-item" href="#">Jan 2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="bg-light bg-opacity-50">
                                                <tr>
                                                    <th scope="col" class="sort cursor-pointer text-muted" data-sort="id">#</th>
                                                    <th scope="col" class="sort cursor-pointer text-muted" data-sort="name">Name</th>
                                                    <th scope="col" class="sort cursor-pointer text-muted" data-sort="diseases">Diseases</th>
                                                    <th scope="col" class="sort cursor-pointer text-muted" data-sort="age">Age</th>
                                                    <th scope="col" class="sort cursor-pointer text-muted" data-sort="date">Date</th>
                                                    <th scope="col" class="sort text-muted">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium text-muted id">01</a>
                                                    </td>
                                                    <td class="name">
                                                        Sadie Hampton
                                                    </td>
                                                    <td class="diseases">
                                                        Stomach Aches
                                                    </td>
                                                    <td class="age">
                                                        24
                                                    </td>
                                                    <td class="date">
                                                        25 Jan, 2024
                                                    </td>
                                                    <td class="d-flex align-items-center gap-3 justify-content-end">
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-edit-2-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium text-muted id">02</a>
                                                    </td>
                                                    <td class="name">
                                                        Angie Henry
                                                    </td>
                                                    <td class="diseases">
                                                        Conjunctivitis ("pink eye“)
                                                    </td>
                                                    <td class="age">
                                                        30
                                                    </td>
                                                    <td class="date">
                                                        19 Dec, 2024
                                                    </td>
                                                    <td class="d-flex align-items-center gap-3 justify-content-end">
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-edit-2-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium text-muted id">03</a>
                                                    </td>
                                                    <td class="name">
                                                        Robert Trusty
                                                    </td>
                                                    <td class="diseases">
                                                        Allergies
                                                    </td>
                                                    <td class="age">
                                                        21
                                                    </td>
                                                    <td class="date">
                                                        16 June, 2022
                                                    </td>
                                                    <td class="d-flex align-items-center gap-3 justify-content-end">
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-edit-2-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium text-muted id">04</a>
                                                    </td>
                                                    <td class="name">
                                                        Utler Anthony
                                                    </td>
                                                    <td class="diseases">
                                                        Cryptosporidiosis
                                                    </td>
                                                    <td class="age">
                                                        33
                                                    </td>
                                                    <td class="date">
                                                        15 Nov, 2024
                                                    </td>
                                                    <td class="d-flex align-items-center gap-3 justify-content-end">
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-edit-2-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium text-muted id">05</a>
                                                    </td>
                                                    <td class="name">
                                                        Amanda Reynolds
                                                    </td>
                                                    <td class="diseases">
                                                        Tuberculosis
                                                    </td>
                                                    <td class="age">
                                                        18
                                                    </td>
                                                    <td class="date">
                                                        08 Jan, 2024
                                                    </td>
                                                    <td class="d-flex align-items-center gap-3 justify-content-end">
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-edit-2-line"></i>
                                                        </a>
                                                        <a href="#!" class="text-muted">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>   
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-items-center pt-2 row">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">05</span> of <span class="fw-semibold">07</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Overview Patients</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="multi_radar" data-colors='["--tb-primary", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Doctors List</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body vstack gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-transparent">
                                                <img src="../admin/images/doctor/user-1.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Dr. Steven Frens</h6>
                                            <p class="mb-0">Dental</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-success-subtle text-success">Available</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-transparent">
                                                <img src="../admin/images/doctor/user-2.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Dr. Edith Amirian</h6>
                                            <p class="mb-0">Neurologist</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-success-subtle text-success">Available</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-transparent">
                                                <img src="../admin/images/doctor/user-3.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Dr. Zion Ypina</h6>
                                            <p class="mb-0">Neurosurgeon</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-danger-subtle text-danger">Absent</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-transparent">
                                                <img src="../admin/images/doctor/user-4.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Dr. Julie Hatori</h6>
                                            <p class="mb-0">Urologist</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-success-subtle text-success">Available</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-transparent">
                                                <img src="../admin/images/doctor/user-5.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Dr. Christian Gerl</h6>
                                            <p class="mb-0">Rheumatologist</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="badge bg-danger-subtle text-danger">Absent</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Patients Group</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body vstack gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-danger rounded-circle">
                                                D
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Dental</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-primary rounded-circle">
                                                G
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Gastroenterologists</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-warning rounded-circle">
                                                N
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Neurologist</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-info rounded-circle">
                                                U
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Urologist</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-success rounded-circle">
                                                R
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Rheumatologist</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-secondary rounded-circle">
                                                G
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">General Surgeon</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-xxs flex-shrink-0">
                                            <div class="avatar-title bg-secondary-subtle text-secondary rounded-circle">
                                                U
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Urologist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Availability of Staff</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body vstack gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">Doctors</p>
                                        <h6 class="mb-0 flex-shrink-0">28</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">Nurse</p>
                                        <h6 class="mb-0 flex-shrink-0">59</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">Pharmacist</p>
                                        <h6 class="mb-0 flex-shrink-0">03</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">Laboratorist</p>
                                        <h6 class="mb-0 flex-shrink-0">02</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">Accountant</p>
                                        <h6 class="mb-0 flex-shrink-0">04</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">Compounder</p>
                                        <h6 class="mb-0 flex-shrink-0">42</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="mb-0 flex-grow-1">HR</p>
                                        <h6 class="mb-0 flex-shrink-0">02</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection