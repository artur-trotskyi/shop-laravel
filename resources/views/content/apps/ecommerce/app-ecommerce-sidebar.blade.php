<!-- Ecommerce Sidebar Starts -->
<div class="sidebar-shop">
    <div class="row">
        <div class="col-sm-12">
            <h6 class="filter-heading d-none d-lg-block">Filters</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <!-- Price Filter starts -->
            <div class="multi-range-price">
                <h6 class="filter-title mt-0">Multi Range</h6>
                <ul class="list-unstyled price-range" id="price-range">
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   @if(isset($_GET['price']) && !in_array($_GET['price'], ['less-than-10', 'from-10-to-100',
                                       'from-100-to-500', 'more-than-500']) || !isset($_GET['price'])) checked @endif />
                            <a href="{{ URL::current()."?price=all" }}" class="form-check-link">All</a>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   @if(isset($_GET['price']) && $_GET['price'] === 'less-than-10') checked @endif/>
                            <a href="{{ URL::current()."?price=less-than-10" }}" class="form-check-link">&lt;= $10</a>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   @if(isset($_GET['price']) && $_GET['price'] === 'from-10-to-100') checked @endif/>
                            <a href="{{ URL::current()."?price=from-10-to-100" }}" class="form-check-link">$10 - $100</a>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   @if(isset($_GET['price']) && $_GET['price'] === 'from-100-to-500') checked @endif/>
                            <a href="{{ URL::current()."?price=from-100-to-500" }}" class="form-check-link">$100 - $500</a>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   @if(isset($_GET['price']) && $_GET['price'] === 'more-than-500') checked @endif/>
                            <a href="{{ URL::current()."?price=more-than-500" }}" class="form-check-link">&gt;= $500</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Price Filter ends -->

            <!-- Price Slider starts -->
            <div class="price-slider">
                <h6 class="filter-title">Price Range</h6>
                <div class="price-slider">
                    <div class="range-slider mt-2" id="price-slider"></div>
                </div>
            </div>
            <!-- Price Range ends -->

            <!-- Categories Starts -->
            <div id="product-categories">
                <h6 class="filter-title">Categories</h6>
                <ul class="list-unstyled categories-list">
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category1" name="category-filter" class="form-check-input"
                                   data-product_filter="appliances" checked/>
                            <label class="form-check-label" for="category1">Appliances</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category2" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category2">Audio</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category3" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category3">Cameras & Camcorders</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category4" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category4">Car Electronics & GPS</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category5" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category5">Cell Phones</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category6" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category6">Computers & Tablets</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category7" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category7">Health, Fitness & Beauty</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category8" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category8">Office & School Supplies</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category9" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category9">TV & Home Theater</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="radio" id="category10" name="category-filter" class="form-check-input"/>
                            <label class="form-check-label" for="category10">Video Games</label>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Categories Ends -->

            <!-- Brands starts -->
            <div class="brands">
                <h6 class="filter-title">Brands</h6>
                <ul class="list-unstyled brand-list">
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand1"/>
                            <label class="form-check-label" for="productBrand1">Insignia™</label>
                        </div>
                        <span>746</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand2" checked/>
                            <label class="form-check-label" for="productBrand2">Samsung</label>
                        </div>
                        <span>633</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand3"/>
                            <label class="form-check-label" for="productBrand3">Metra</label>
                        </div>
                        <span>591</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand4"/>
                            <label class="form-check-label" for="productBrand4">HP</label>
                        </div>
                        <span>530</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand5" checked/>
                            <label class="form-check-label" for="productBrand5">Apple</label>
                        </div>
                        <span>442</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand6"/>
                            <label class="form-check-label" for="productBrand6">GE</label>
                        </div>
                        <span>394</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand7"/>
                            <label class="form-check-label" for="productBrand7">Sony</label>
                        </div>
                        <span>350</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand8"/>
                            <label class="form-check-label" for="productBrand8">Incipio</label>
                        </div>
                        <span>320</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand9"/>
                            <label class="form-check-label" for="productBrand9">KitchenAid</label>
                        </div>
                        <span>318</span>
                    </li>
                    <li>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="productBrand10"/>
                            <label class="form-check-label" for="productBrand10">Whirlpool</label>
                        </div>
                        <span>298</span>
                    </li>
                </ul>
            </div>
            <!-- Brand ends -->

            <!-- Rating starts -->
            <div id="ratings">
                <h6 class="filter-title">Ratings</h6>
                <div class="ratings-list">
                    <a href="#">
                        <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                        </ul>
                    </a>
                    <div class="stars-received">160</div>
                </div>
                <div class="ratings-list">
                    <a href="#">
                        <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                        </ul>
                    </a>
                    <div class="stars-received">176</div>
                </div>
                <div class="ratings-list">
                    <a href="#">
                        <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                        </ul>
                    </a>
                    <div class="stars-received">291</div>
                </div>
                <div class="ratings-list">
                    <a href="#">
                        <ul class="unstyled-list list-inline">
                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            <li>& up</li>
                        </ul>
                    </a>
                    <div class="stars-received">190</div>
                </div>
            </div>
            <!-- Rating ends -->

            <!-- Clear Filters Starts -->
            <div id="clear-filters">
                <button type="button" class="btn w-100 btn-primary">Clear All Filters</button>
            </div>
            <!-- Clear Filters Ends -->
        </div>
    </div>
</div>
<!-- Ecommerce Sidebar Ends -->
