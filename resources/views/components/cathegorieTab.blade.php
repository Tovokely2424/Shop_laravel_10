@props(['categories', 'subcategories'])
<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach ($categories as $category)
                <li @class(['', 'active' => $category -> id == 1])>
                    <a id="{{ $category -> slug }}" href="" data-toggle="tab">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content">
        @foreach ($categories as $category)
            <div @class(['tab-pane fade', 'active in' => $loop->first]) id="{{'c'.$category->slug }}">
                <div class="row" id="contentSub">
                    @foreach ($subcategories as $subcategory)
                        @if ($subcategory->category->slug === $category->slug)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div id="catg" class="productinfo text-center">
                                            <img src="{{ asset('storage/'.$subcategory->thumbnail) }}" alt="{{ $subcategory->name }}" />
                                            <h2>{{ $subcategory->name }}</h2>
                                            <p>{{ $subcategory->slug }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>