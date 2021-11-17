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

     if(is_null($sku)) {

         $this->app->redirect('/products');

     }

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

     $reviewSaved = $this->app->old('reviewSaved');

    return $this->app->view('products/show', [
      'product' => $product,
      'reviewSaved' => $reviewSaved
    ]);

    }

    public function saveReview() 
    {

     // return 'you are in saveReview ....';
     # Validation comes here

       $this->app->validate([
        'sku' => 'required',
        'name' => 'required', # Note how multiple validation rules are separated by a |
        'review' => 'required|minLength:150' # Note that some rules accept paramaters, which follow a :
      ]);


# If the above validation fails, the user is redirected back to where they came from (ex- /prodict) automatically
# None of the code below wil be executed!

     /* dump($this->app->input('sku'));
     dump($this->app->input('name'));
     dump($this->app->input('review')); */

     $sku = $this->app->input('sku');
     $name = $this->app->input('name');
     $review = $this->app->input('review');

     

     
     #Todo: Persist review to the database here

     return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved'=>true]);



    }

}