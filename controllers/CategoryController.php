<?php
require_once dirname(_DIR_). '/models/Category.php';
class CategoryController{
    function index(){
        $category = new Category();
        $categories = $category->getAll();
        
        // Return both the view path and the data
        return [
            'view' => '/views/categories/index.php',
            'categories' => $categories
        ];
    }
    
}
?>