<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller {

  private $productsObj;
  
  public function __construct($app)
    {
      parent::__construct($app);
      $this->productsObj = new Products($this->app->path('/database/products.json'));

    }
 
    public function index ()
    {
      //  use construct to get all products

      //dump($productsObj);

      $products = $this->productsObj->getAll();

      //dd($products);

       return $this->app->view('products/index', ['products'=>$products]);
    }

    public function show() 
    {

      // old way -dump($_GET['sku']);
     //dump($this->app->param('sku'));
     
     $sku = $this->app->param('sku');

    # return all products using  construct method
    
    #get using get sku
    $product = $this->productsObj->getBySku($sku);
    //dump($product);

    # if the sku not found
     if (is_null($product)) {
      
      #dump('sku not found');
     // return $this->app->view('errors/404');
     return $this->app->view('products/missing');


     }

    return $this->app->view('products/show', ['product' => $product]);

    }

}