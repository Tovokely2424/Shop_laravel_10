

<?php

if(!function_exists('page_title')){
    function page_title(?string $title = null) : string {
        return $title
        ? config('app.name').'.::.'.$title
        : config('app.name');
    }
}

if(! function_exists('ref_generator')){
    function ref_generator(string $category, string $subcath ,string $identificator){
        $cat = substr($category, 0, 3);
        $s = substr($subcath,0,3);
        $chaine = \Illuminate\Support\Str::random(4);
        return 'REF'.$cat.$s.$chaine.'0'.$identificator;
    }
}