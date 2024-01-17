<x-default-layout :title="$category -> name">
    <header id="header">
        <x-htop/>
        <x-hmiddle/>
        <x-hbottom/>
	</header>

    <x-sliderContent/>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Sous category</h2>
                        <!--/category-products-->
                        <x-cathegorieProduct/>
                        <!--/brands_products-->
                        <x-brandProducts/>
                        <!--/price-range-->
                        <x-priceRange/>
                        <!--/shipping-->
                        <x-shipping/>
                    </div>
                </div>
    
                <div class="col-sm-9 padding-right">
                    <!--/category-tab-->
                    <!--features_items-->
                    <x-featureItems :$products/>
                    <!--/recommended_items-->
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <x-footerTop/>
        <x-footerWidget/>
        <x-footerBottom/>
	</footer>
</x-default-layout>