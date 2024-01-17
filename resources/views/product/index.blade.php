
<x-default-layout title="Acceuil">
   <header id="header">
       <x-htop/>
       <x-hmiddle/>
       <x-hbottom/>
  </header>
   {{-- <x-headfloat/> --}}
   <x-sliderContent/>
   
   <section>
       <div class="container">
           <div class="row">
               <div class="col-sm-3">
                   <div class="left-sidebar">
                       <h2>Cethegorie</h2>
                       <!--/category-products-->
                       <x-cathegorieProduct :$categories :$subcategories/>
                       <!--/brands_products-->
                       <x-brandProducts/>
                       <!--/price-range-->
                       <x-priceRange/>
                       <!--/shipping-->
                   </div>
               </div>
   
               <div class="col-sm-9 padding-right">
                   <!--/category-tab-->
                   <x-cathegorieTab :$categories :$subcategories/>
                   <!--features_items-->
                   <x-featureItems :$products/>
                   <!--/recommended_items-->
                   <x-recommendedItems/>
               </div>
           </div>
       </div>
   </section>

   <x-footeradmin/>
   @section('script')
    <script>
        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            
            $('.nav-tabs a').on('click', function(event) {
                event.preventDefault();
                let id = $(this).attr('id');
                $('.tab-pane').removeClass('active in');
                $('#c' + id).addClass('active in');
                $.ajax({
                    url: "{{ route('index.getsubcategories') }}",
                    method: 'POST', // Utilisez la méthode POST pour les requêtes sécurisées
                    data: { slug: id },
                    success: function(response) {
                        console.log('Sous-catégories récupérées via AJAX :', response.subcategoriesAjax);
                        var targetTabPane = $('#c' + id);
                        //alert(targetTabPane.length);
                        if (response.subcategoriesAjax.length > 0 && targetTabPane.length > 0) {
                            var subcategoriesHtml = '';
                                subcategoriesHtml += '<div id="rowsSub" class="row">'
                            response.subcategoriesAjax.forEach(function(subcategory) {
                                subcategoriesHtml += '<div class="col-sm-3">';
                                subcategoriesHtml += '<div class="product-image-wrapper">';
                                subcategoriesHtml += '<div class="single-products">';
                                subcategoriesHtml += '<div class="productinfo text-center">';
                                subcategoriesHtml += '<img src="storage/' + subcategory.thumbnail + '" alt="' + subcategory.name + '" />';
                                subcategoriesHtml += '<h2>' + subcategory.name + '</h2>';
                                subcategoriesHtml += '<p>' + subcategory.slug + '</p>';
                                subcategoriesHtml += '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
                                subcategoriesHtml += '</div></div></div></div>';
                            });
                            subcategoriesHtml +='</div>';
                            targetTabPane.empty().append(subcategoriesHtml);
                            
                        } else {
                            console.log('Aucune sous-catégorie trouvée pour ce slug.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erreur lors de la récupération des sous-catégories :', error);
                    }
                });
                
            });
        });
    </script>
   @endsection
</x-default-layout>