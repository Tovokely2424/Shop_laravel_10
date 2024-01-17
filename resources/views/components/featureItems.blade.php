@props(['products'])
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    @foreach ($products as $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('storage/'.$product -> thumbnail) }}" alt="{{ $product -> thumbnail }}" />
                        <h2>{{ $product -> price }}</h2>
                        <p>{{ $product -> name }}</p>
                        <p>
                            @if($product -> tagps -> isNotEmpty())
                            <ul>
                                @foreach ( $product -> tagps as $tag )
                                <li><a href="{{ route('product.tag', ['tag' => $tag]) }}"></a>{{ $tag -> name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>$56</h2>
                            <p>{{ $product -> name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ route('product.show', ['product' => $product]) }}"><i class="fa fa-plus-square"></i>Voir détails</a></li>
                    @if($product -> category_product)
                    <li><a href="{{ route('product.category', ['category' => $product->category_product]) }}"><i class="fa fa-plus-square"></i>{{ $product -> category_product -> name }}</a></li>
                    @else
                    <li><a href="#"><i class="fa fa-plus-square"></i>Similaire</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    
</div>