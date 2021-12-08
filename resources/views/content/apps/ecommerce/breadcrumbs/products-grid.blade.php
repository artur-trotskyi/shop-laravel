<section id="ecommerce-products" class="grid-view">
    @foreach($products as $product)
        <div class="card ecommerce-card">
            <div class="item-img text-center">
                <a href="{{ url('shop/product/' . $product->id) }}">
                    <img
                        class="img-fluid card-img-top"
                        src="{{ asset($product->image) }}"
                        alt="img-placeholder"
                    />
                </a>
            </div>
            <div class="card-body">
                <div class="item-wrapper">
                    <div class="item-rating">
                        <ul class="unstyled-list list-inline">
                            @for ($star = 0; $star < 5; $star++)
                                <li class="ratings-list-item">
                                    <i data-feather="star"
                                       @if($product->rating > $star) class="filled-star"
                                       @else class="unfilled-star" @endif>
                                    </i>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div>
                        <h6 class="item-price">${{ $product->price }}</h6>
                    </div>
                </div>
                <h6 class="item-name">
                    <a class="text-body" href="{{ url('shop/product/' . $product->id) }}">{{ $product->name }}</a>
                    <span class="card-text item-company">
                        By <a href="#" class="company-name">{{ $product->brand }}</a>
                    </span>
                </h6>
                <p class="card-text item-description">
                        {{ $product->description }}
                </p>
            </div>
            <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-cost">
                        <h4 class="item-price">${{ $product->price }}</h4>
                    </div>
                </div>
                <a href="#" class="btn btn-light btn-wishlist">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
                <a href="#" class="btn btn-primary btn-cart">
                    <i data-feather="shopping-cart"></i>
                    <span class="add-to-cart">Add to cart</span>
                </a>
            </div>
        </div>
    @endforeach
</section>
