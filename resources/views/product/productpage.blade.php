<x-default-layout :title="$product -> name">
    <header id="header">
        <x-htop/>
        <x-hmiddle/>
        <x-hbottom/>
	</header>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <!--/category-products-->
                        <x-cathegorieProduct :$categories :$subcategories/>
                        <!--/brands_products-->
                        <x-brandProducts/>
                        <!--/price-range-->
                    </div>
                </div>
    
                <div class="col-sm-9 padding-right">
                    <x-productdetail :$product/>
                </div>
            </div>
        </div>
    </section>
</x-default-layout>