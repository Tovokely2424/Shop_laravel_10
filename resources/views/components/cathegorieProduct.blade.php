@props(['categories', 'subcategories'])
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    @foreach ($categories as $category)
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="{{ '#'.$category ->slug }}">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    {{ $category ->name }}
                </a>
            </h4>
        </div>
        <div id="{{ $category ->slug }}" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    @foreach ($subcategories as $subcategory)
                        @if ($subcategory ->category_product_id == $category ->id)
                            <li><a href="#">{{ $subcategory ->name }} </a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @endforeach
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Enfant</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Promotion</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Nos selections</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Sandales</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Colliers</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Bagues</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="#">Chaussure</a></h4>
        </div>
    </div>
</div>