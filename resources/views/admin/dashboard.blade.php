@extends('layouts.admin')

@section('content')
    <div class="main-content-container overflow-hidden">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 p-4 bg-white rounded-3 mb-4">
                    <div class="d-flex flex-wrap gap-2 justify-content-between mb-30 pb-lg-2">
                        <div>
                            <h3 class="mb-1">Analytics Overview</h3>
                            <span>Track, Analyze, and Optimize Performance</span>
                        </div>
                        <div>
                            <ul class="analytics-tabs d-flex list-unstyled ps-0 mb-0">
                                <li><button>Day</button></li>
                                <li><button class="active">Week</button></li>
                                <li><button>Month</button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-8 col-md-7">
                            <div class="me-plus-27 mb-4 mb-md-0">
                                <div style="margin: -23px -9px -27px -17px;">
                                    <div id="analytics_overview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="ms-minus-27">
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2 pb-1">
                                        <div>
                                            <span class="fs-12 d-block mb-1 text-secondary">New Users</span>
                                            <h4 class="fs-16 mb-0">19.5k</h4>
                                        </div>
                                        <div class="text-end">
                                            <span class="fs-12 d-block mb-1">Goal Reached</span>
                                            <h4 class="fs-16 mb-0 text-body">75%</h4>
                                        </div>
                                    </div>
                                    <div class="progress rounded-pill" style="height: 4px;">
                                        <div class="progress-bar bg-primary rounded-pill" style="width: 75%; height: 4px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2 pb-1">
                                        <div>
                                            <span class="fs-12 d-block mb-1 text-secondary">Page Views</span>
                                            <h4 class="fs-16 mb-0">48k</h4>
                                        </div>
                                        <div class="text-end">
                                            <span class="fs-12 d-block mb-1">Goal Reached</span>
                                            <h4 class="fs-16 mb-0 text-body">45%</h4>
                                        </div>
                                    </div>
                                    <div class="progress rounded-pill" style="height: 4px;">
                                        <div class="progress-bar bg-primary-div rounded-pill"
                                            style="width: 45%; height: 4px;"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2 pb-1">
                                        <div>
                                            <span class="fs-12 d-block mb-1 text-secondary">Page Sessions</span>
                                            <h4 class="fs-16 mb-0">33.3k</h4>
                                        </div>
                                        <div class="text-end">
                                            <span class="fs-12 d-block mb-1">Goal Reached</span>
                                            <h4 class="fs-16 mb-0 text-body">55%</h4>
                                        </div>
                                    </div>
                                    <div class="progress rounded-pill" style="height: 4px;">
                                        <div class="progress-bar bg-primary rounded-pill" style="width: 55%; height: 4px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2 pb-1">
                                        <div>
                                            <span class="fs-12 d-block mb-1 text-secondary">Bounce Rate</span>
                                            <h4 class="fs-16 mb-0">22.45%</h4>
                                        </div>
                                        <div class="text-end">
                                            <span class="fs-12 d-block mb-1">Goal Reached</span>
                                            <h4 class="fs-16 mb-0 text-body">35%</h4>
                                        </div>
                                    </div>
                                    <div class="progress rounded-pill" style="height: 4px;">
                                        <div class="progress-bar bg-danger rounded-pill" style="width: 30%; height: 4px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 p-4 bg-white rounded-3 mb-4 position-relative">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 pe-4">
                            <div class="d-flex align-items-center justify-content-between position-relative">
                                <div class="mb-3">
                                    <span class="fs-14">Website Visits</span>
                                    <h3 class="fs-20 mb-0">215.2k</h3>
                                </div>
                                <div id="website_visits" class="chart-position for-sale" style="right: -10px; top: -30px;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between position-relative mt-1">
                                <span
                                    class="d-inline-block bg-success bg-opacity-10 text-success px-2 border border-success rounded-pill fs-12 fw-medium">+10%
                                    Increase</span>
                                <span class="fs-12">Last 7 days</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 border-start ps-lg-4">
                            <div class="d-flex align-items-center justify-content-between position-relative">
                                <div class="mb-3">
                                    <span class="fs-14">New Registers</span>
                                    <h3 class="fs-20 mb-0">35.3k</h3>
                                </div>
                                <div id="new_registers" class="chart-position for-sale" style="right: -10px; top: -30px;">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between position-relative mt-1">
                                <span
                                    class="d-inline-block bg-success bg-opacity-10 text-success px-2 border border-success rounded-pill fs-12 fw-medium">+15%
                                    Increase</span>
                                <span class="fs-12">Last 7 days</span>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-md-block">
                            <img src="{{ asset('assets-admin/images/shape-2.png') }}"
                                class="position-absolute top-0 end-0 bottom-0 shape-2" alt="shape">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 rounded-3 p-4 position-relative mb-4 realtime-for-dark"
                    style="background-color: #4936F5 !important;">
                    <img src="{{ asset('assets-admin/images/shape-3.png') }}" class="position-absolute top-0 end-0"
                        alt="shape">
                    <span class="fs-16 fw-normal text-border-color d-block mb-1">Realtime Active Users</span>
                    <h2 class="lh-1 fs-36 mb-0 fw-medium text-white mb-5">4,890</h2>
                    <span class="d-block mb-2 text-white fs-14 fw-normal pb-2"
                        style="border-bottom: 1px solid #605DFF;">Page views per second</span>
                    <div class="text-center" style="margin: -10px -20px -10px -32px;">
                        <div id="realtime"></div>
                    </div>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="pb-1 mb-2" style="border-bottom: 1px solid #605DFF;">
                            <span class="fs-14 fw-semibold text-white">Top Active Pages</span>
                        </li>
                        <li class="pb-1 mb-1 d-flex justify-content-between align-items-center"
                            style="border-bottom: 1px solid #605DFF;">
                            <p class="fs-14 fw-normal text-white mb-0">
                                /monitoring/user-activity
                                <a href="#" class="text-decoration-none"><i
                                        class="ri-external-link-line text-white fs-16"></i></a>
                            </p>
                            <span class="fs-14 fw-normal text-white">1520</span>
                        </li>
                        <li class="pb-1 mb-1 d-flex justify-content-between align-items-center"
                            style="border-bottom: 1px solid #605DFF;">
                            <p class="fs-14 fw-normal text-white mb-0">
                                /monitoring/user-activity
                                <a href="#" class="text-decoration-none"><i
                                        class="ri-external-link-line text-white fs-16"></i></a>
                            </p>
                            <span class="fs-14 fw-normal text-white">980</span>
                        </li>
                        <li class="d-flex justify-content-end mt-4">
                            <a href="#" class="btn btn-outline-primary text-white">
                                All Real-Time Report <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-4">
                            <h3 class="mb-0">Browser Used By Users</h3>
                            <select class="form-select month-select form-control p-0 h-auto border-0 pe-4 w-auto"
                                style="color: #64748B !important;">
                                <option selected value="2">September 01 - September 31, 2024</option>
                            </select>
                        </div>
                        <div class="default-table-area style-two browser-leads">
                            <div class="table-responsive">
                                <table class="table align-middle border-0">
                                    <thead>
                                        <tr class="border-bottom">
                                            <th scope="col" class="bg-transparent">Browser</th>
                                            <th scope="col" class="text-end bg-transparent">Users (%)</th>
                                            <th scope="col" class="text-end bg-transparent">Sessions</th>
                                            <th scope="col" class="text-end bg-transparent">Bounce Rate (%)</th>
                                            <th scope="col" class="text-end bg-transparent">Avg. Session Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="/my-profile" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets-admin/images/chrome.png') }}"
                                                        class="wh-16 rounded-circle" alt="chrome">
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-14">Google Chrome</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-end fw-medium">58.4%</td>
                                            <td class="text-end fw-medium">12,345</td>
                                            <td class="text-end fw-medium">34.2%</td>
                                            <td class="text-end fw-medium">3m 15s</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/my-profile" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets-admin/images/safari.png') }}"
                                                        class="wh-16 rounded-circle" alt="safari">
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-14">Safari</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-end fw-medium">58.4%</td>
                                            <td class="text-end fw-medium">12,345</td>
                                            <td class="text-end fw-medium">34.2%</td>
                                            <td class="text-end fw-medium">3m 15s</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/my-profile" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets-admin/images/edge.png') }}"
                                                        class="wh-16 rounded-circle" alt="edge">
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-14">Microsoft Edge</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-end fw-medium">58.4%</td>
                                            <td class="text-end fw-medium">12,345</td>
                                            <td class="text-end fw-medium">34.2%</td>
                                            <td class="text-end fw-medium">3m 15s</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/my-profile" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets-admin/images/firefox.png') }}"
                                                        class="wh-16 rounded-circle" alt="firefox">
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-14">Mozilla Firefox</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-end fw-medium">58.4%</td>
                                            <td class="text-end fw-medium">12,345</td>
                                            <td class="text-end fw-medium">34.2%</td>
                                            <td class="text-end fw-medium">3m 15s</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/my-profile" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets-admin/images/opera.png') }}"
                                                        class="wh-16 rounded-circle" alt="opera">
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-14">Opera</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-end fw-medium">58.4%</td>
                                            <td class="text-end fw-medium">12,345</td>
                                            <td class="text-end fw-medium">34.2%</td>
                                            <td class="text-end fw-medium">3m 15s</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/my-profile" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets-admin/images/other.png') }}"
                                                        class="wh-16 rounded-circle" alt="other">
                                                    <div class="ms-2">
                                                        <h6 class="fw-medium fs-14">Other</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-end fw-medium">58.4%</td>
                                            <td class="text-end fw-medium">12,345</td>
                                            <td class="text-end fw-medium">34.2%</td>
                                            <td class="text-end fw-medium">3m 15s</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-4">
                            <h3 class="mb-0">Device Sessions</h3>
                            <select class="form-select month-select form-control p-0 h-auto border-0 pe-4 w-auto"
                                style="color: #64748B !important;">
                                <option selected value="2">Last Year</option>
                            </select>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <div id="device_sessions"></div>
                            </div>
                            <div class="col-sm-7">
                                <ul class="ps-0 mb-0 list-unstyled ms-plus-21 border-top pt-1">
                                    <li class="d-flex justify-content-between align-items-center border-bottom pb-1 mb-1">
                                        <div class="d-flex align-items-center">
                                            <span class="d-inline-block bg-success rounded-circle"
                                                style="width: 10px; height: 10px;"></span>
                                            <div class="ps-3">
                                                <span class="fs-12 text-secondary d-block mb-1">Desktop</span>
                                                <h4 class="fw-semibold fs-16 mb-0">45.2%</h4>
                                            </div>
                                        </div>
                                        <div><span class="text-body d-block mb-1 fs-12">Sessions</span>
                                            <h4 class="text-body mb-0 fw-semibold">8,732</h4>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-bottom pb-1 mb-1">
                                        <div class="d-flex align-items-center">
                                            <span class="d-inline-block bg-primary rounded-circle"
                                                style="width: 10px; height: 10px;"></span>
                                            <div class="ps-3">
                                                <span class="fs-12 text-secondary d-block mb-1">Mobile</span>
                                                <h4 class="fw-semibold fs-16 mb-0">48.7%</h4>
                                            </div>
                                        </div>
                                        <div class="">
                                            <span class="text-body d-block mb-1 fs-12">Sessions</span>
                                            <h4 class="text-body mb-0 fw-semibold">9,416</h4>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-bottom pb-1 mb-1">
                                        <div class="d-flex align-items-center">
                                            <span class="d-inline-block bg-primary-div rounded-circle"
                                                style="width: 10px; height: 10px;"></span>
                                            <div class="ps-3">
                                                <span class="fs-12 text-secondary d-block mb-1">Tablet</span>
                                                <h4 class="fw-semibold fs-16 mb-0">32.3%</h4>
                                            </div>
                                        </div>
                                        <div class="">
                                            <span class="text-body d-block mb-1 fs-12">Sessions</span>
                                            <h4 class="text-body mb-0 fw-semibold">1,042</h4>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-bottom pb-1 mb-1">
                                        <div class="d-flex align-items-center">
                                            <span class="d-inline-block bg-danger rounded-circle"
                                                style="width: 10px; height: 10px;"></span>
                                            <div class="ps-3">
                                                <span class="fs-12 text-secondary d-block mb-1">Other</span>
                                                <h4 class="fw-semibold fs-16 mb-0">45.2%</h4>
                                            </div>
                                        </div>
                                        <div class="">
                                            <span class="text-body d-block mb-1 fs-12">Sessions</span>
                                            <h4 class="text-body mb-0 fw-semibold">135</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="fs-12 lh-16 mt-3 pt-2">This data helps you understand which devices are most commonly
                            used.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4 pb-0">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <h3 class="mb-0">Users by Country</h3>
                        </div>
                        <div class="map text-center my-5">
                            <img src="{{ asset('assets-admin/images/map.png') }}" alt="map">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 position-relative top-1">
                                        <img src="{{ asset('assets-admin/images/united-states-2.png') }}"
                                            class="rounded-circle" style="width: 20px; height: 20px;"
                                            alt="united-states">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <span class="fs-12 fw-medium d-block mb-1">United States</span>
                                        <h4 class="mb-0 fs-16 fw-semibold">12,800 <span
                                                class="text-body fs-12">35.6%</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 position-relative top-1">
                                        <img src="{{ asset('assets-admin/images/united-kingdom-2.png') }}"
                                            class="rounded-circle" style="width: 20px; height: 20px;"
                                            alt="united-kingdom">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <span class="fs-12 fw-medium d-block mb-1">United Kingdom</span>
                                        <h4 class="mb-0 fs-16 fw-semibold">6,750 <span
                                                class="text-body fs-12">18.7%</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="border-bottom mb-4"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 position-relative top-1">
                                        <img src="{{ asset('assets-admin/images/canada-2.png') }}" class="rounded-circle"
                                            style="width: 20px; height: 20px;" alt="canada">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <span class="fs-12 fw-medium d-block mb-1">Canada</span>
                                        <h4 class="mb-0 fs-16 fw-semibold">2,500 <span class="text-body fs-12">6.3%</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 position-relative top-1">
                                        <img src="{{ asset('assets-admin/images/australia.png') }}"
                                            class="rounded-circle" style="width: 20px; height: 20px;" alt="australia">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <span class="fs-12 fw-medium d-block mb-1">Australia</span>
                                        <h4 class="mb-0 fs-16 fw-semibold">2,200 <span class="text-body fs-12">5.4%</span>
                                        </h4>
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
