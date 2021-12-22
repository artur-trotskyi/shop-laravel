@extends('layouts/detachedLayoutMaster')

@section('title', 'Shop')

@section('vendor-style')
    <!-- Vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/nouislider.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection
@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-sliders.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-ecommerce.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('content-sidebar')
    @include('content/apps/ecommerce/app-ecommerce-sidebar')
@endsection

@section('content')
    <!-- E-commerce Content Section Starts -->
    <section id="ecommerce-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="ecommerce-header-items">
                    <div class="result-toggler">
                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
                            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                        </button>
                        <div class="search-results">16285 results found</div>
                    </div>
                    <div class="view-options d-flex">
                        <div class="btn-group dropdown-sort">
                            <button
                                type="button"
                                class="btn btn-outline-primary dropdown-toggle me-1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <span class="active-sorting">Featured</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Featured</a>
                                <a class="dropdown-item" href="#">Lowest</a>
                                <a class="dropdown-item" href="#">Highest</a>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="radio_options" id="radio_option1"
                                   autocomplete="off" checked/>
                            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1">
                                <i data-feather="grid" class="font-medium-3"></i>
                            </label>
                            <input type="radio" class="btn-check" name="radio_options" id="radio_option2"
                                   autocomplete="off"/>
                            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2">
                                <i data-feather="list" class="font-medium-3"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- E-commerce Content Section Starts -->

    <!-- background Overlay when sidebar is shown  starts-->
    <div class="body-content-overlay"></div>
    <!-- background Overlay when sidebar is shown  ends-->

    <!-- E-commerce Search Bar Starts -->
    <section id="ecommerce-searchbar" class="ecommerce-searchbar">
        <div class="row mt-1">
            <div class="col-sm-12">
                <div class="input-group input-group-merge">
                    <input
                        type="text"
                        class="form-control search-product"
                        id="shop-search"
                        placeholder="Search Product"
                        aria-label="Search..."
                        aria-describedby="shop-search"
                    />
                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                </div>
            </div>
        </div>
    </section>
    <!-- E-commerce Search Bar Ends -->

    <!-- E-commerce Products Starts -->
    @include('content/apps/ecommerce/breadcrumbs/products-grid')
    <!-- E-commerce Products Ends -->

    <!-- E-commerce Pagination Starts -->
    <section id="ecommerce-pagination">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-2">
                        {!! $products->withQueryString()->links('content.apps.ecommerce.breadcrumbs.paginate') !!}
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- E-commerce Pagination Ends -->
@endsection

@section('vendor-script')
    <!-- Vendor js files -->
    <script src="{{ asset(mix('vendors/js/extensions/wNumb.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/nouislider.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/app-ecommerce.js')) }}"></script>
@endsection
