<?php

namespace App\Http\Controllers;

use App\Enums\Taille;
use App\Http\Requests\ProductRequest;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Tagp;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this -> middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        return view('admin.products.index', [
            'products' => Product::without('category_product', 'tagps') -> latest() -> paginate(10),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.form', [
            'subcategories' => Subcategory::orderBy('name') ->get(),
            'tags' => Tagp::orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        
        $lastProduct = Product::latest('created_at')->first();
        $lastId = $lastProduct ->id + 1;
        $validated = $request -> validated();
        $cat = Subcategory::where('id' ,$validated['subcategory_id'])->first();
        $category_id = $cat -> category->id;
        $validated['excerpt'] = Str::limit($validated['description'], 50);
        $validated['disponible'] = true;
        $taillleDispo = array_column(Taille::cases(), 'value');
        $validated['']
        if($category['id'] < 6){
            $validated['colorable'] = true;
            if ($category->slug ==="vetements") {
                $validated['taillable'] = true;
                $validated['pointurable'] = true;
                for ($i = 0; $i < $compte; $i++) {
                    $validated['product_ref'] = ref_generator((string)$category,(string)$validated['subcategory_id'], $lastId);
                    $validated['thumbnail'] = $validated['thumbnail'.$i] -> store('thumbnails');
                    $validated['couleur'] = $validated['couleur'.$i];
                    $validated['ponture'] = 0;
                    $validated["taille"] = $validated['taille'.$i];
                    $chaine = $validated['name']+$validated['product_ref']+$validated['thumbnail']+$validated['couleur'];
                    $validated['slug'] = Str::slug($chaine);
                    $product = Product::create($validated);
                    $product->tagps()->sync($validated['tagp_id'] ?? null);
                }
                
            }else{
                $validated['taillable'] = false;
                $validated['pointurable'] = false;
                for ($i = 0; $i < $compte; $i++) {
                    $validated['product_ref'] = ref_generator((string)$category,(string)$validated['subcategory_id'], $lastId);
                    $validated['thumbnail'] = $validated['thumbnail'.$i] -> store('thumbnails');
                    $validated['couleur'] = $validated['couleur'.$i];
                    $validated['ponture'] = 0;
                    $validated['taille'] = Taille::Default->value;
                    $chaine = $validated['name']+$validated['product_ref']+$validated['thumbnail']+$validated['couleur'];
                    $validated['slug'] = Str::slug($chaine);
                    $product = Product::create($validated);
                    $product->tagps()->sync($validated['tagp_id'] ?? null);
                }
            }
        }else{
            $validated['colorable'] = false;
            $validated['taillable'] = false;
            $validated['product_ref'] = ref_generator((string)$category,(string)$validated['subcategory_id'], $lastId);
            $validated['pointurable'] = false;
            $validated['ponture'] = 0;
            $validated['taille'] = Taille::Default->value;
            $couleur="none";
            $validated['category_product_id'] = $category_id;
            $chaine = $validated['name']+$validated['product_ref']+$validated['thumbnail']+$validated['couleur'];
            $validated['slug'] = Str::slug($chaine);
            $product = Product::create($validated);
            $product -> tagps() ->sync($validated['tagp_id'] ?? null);
        }
        $validator = Validator::make($request->all(), (new ProductRequest())->rules());

    // Vérifiez si la validation a échoué
    if ($validator->fails()) {
        // Récupérez toutes les erreurs de validation
        $errors = $validator->errors()->all();

        // Faites quelque chose avec les erreurs, par exemple, renvoyez-les à la vue
        return view('votre_vue')->withErrors($errors);
    }

        return redirect() -> route('product.show', ['product' => $product]) -> withstatus('Votre produit est bien enregistré!');
    }

    public function storeWithAjax(ProductRequest $request){
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
