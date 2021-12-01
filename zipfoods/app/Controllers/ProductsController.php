<?php

namespace App\Controllers;

use App\Products;



class ProductsController extends Controller {

  //private $productsObj;
 
  /*
  public function __construct($app)
    {
      parent::__construct($app);
      $this->productsObj = new Products($this->app->path('/database/products.json'));

    }
 */
    public function index ()
    {
      //  use construct to get all products

      //dump($productsObj);

     // $products = $this->productsObj->getAll();
        $products = $this->app->db()->all('products');

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
    #$product = $this->productsObj->getBySku($sku);
     $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);
    //dump($product);
    //dd($productQuery);

    # if the sku not found
    # if (is_null($product)) {
      if (empty($productQuery)) {
      
      #dump('sku not found');
     // return $this->app->view('errors/404');
     return $this->app->view('products/missing');
    } else {
      $product = $productQuery[0];

    }

   #   dd($product);

     $reviewSaved = $this->app->old('reviewSaved');
     
     $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);
     

    return $this->app->view('products/show', [
      'product' => $product,
      'reviewSaved' => $reviewSaved,
      'reviews' => $reviews
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

     
    # Save review data process here
    # Set up all the variables we need to make a connection
    #$host = $this->app->env('DB_HOST');
    #$database = $this->app->env('DB_NAME');
    #$username = $this->app->env('DB_USERNAME');
    #$password = $this->app->env('DB_PASSWORD');
    
    # DSN (Data Source Name) string
    # contains the information required to connect to the database
    #$dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
  /*
    # Driver-specific connection options
    $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        # Create a PDO instance representing a connection to a database
        $pdo = new \PDO($dsn, $username, $password, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    dump('Connection successful!');
    */
    # insert reviews record
    /*
    $sqlTemplate = "INSERT INTO reviews (name, sku, review) 
                    VALUES (:name, :sku, :review)";

    $values = [
                'name' => $this->app->input('name'),
                'sku' => $this->app->input('sku'),
                'review' => $this->app->input('review'),
              ];

    $statement = $pdo->prepare($sqlTemplate);
    $statement->execute($values);
    */

    $this->app->db()->insert('reviews', [
      'sku' => $sku,
      'name' => $name,
      'review' => $review
    ]);

     #Todo: Persist review to the database here

     return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved'=>true]);
}

public function new() 
{
  
  $newSaved = $this->app->old('newSaved');
  $sku = $this->app->old('sku');
  
/*
# insert into table
$this->app->db()->insert('products', [
  'sku' => $sku,
  'name' => $name,
  'description' => $description,
  'price' => $price
 # 'available' => $available,
 # 'weight' => $weight,
 # 'perishable' => $persishable
]);
*/
#Todo: Persist review to the database here

return $this->app->view('products/new', [
  'newSaved'=> $newSaved,
  'sku' => $sku
]);

}

public function save() 
{

 # Validation comes here!

 $this->app->validate([
    'sku' => 'required|alphaNumericDash', # Note how multiple validation rules are separated by a |
    'name' => 'required', 
    'description' => 'required', 
    'price' => 'required|numeric',
    'available' => 'required|digit',
    'weight' => 'required|numeric',
 #  'perishable' => 'required'
 ]);
 
#Todo: Persist review to the database here
/*
 $newProduct = [
   'name' => $this->app->input('name'),
   'sku' = > $this->app->input('sku'),
   'description' => $this->app->input('description'),
   'price' => $this->app->input('price'),
   'weight' => $this->app->input('weight'),
   'available' => $this->app->input('available')
 ];
  $this->app->db()->insert('products', $newProduct);
*/

$this->app->db()->insert('products', $this->app->inputAll());

return $this->app->redirect('/products/new', [
  'newSaved'=> true,
  'sku' => $this->app->input('sku')
]);

}
}