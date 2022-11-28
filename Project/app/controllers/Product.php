<?php
namespace app\controllers;
class Product extends \app\core\Controller {
	
    // Products Page
    public function index() {
        $product = new \app\models\Product();
        $products = $product->getAll();
		$this->view('Product/index', $products);
	}
	
    // Product Detail Page for admin
	public function details($product_id) {
		$product = new \app\models\Product();
        $product = $product->getProductbyId($product_id);
        $this->view('Product/adminProductDetail', $product);
	}

    // Product Detail Page for user
	public function userProductDetails($product_id) {
		$product = new \app\models\Product();
        $product = $product->getProductbyId($product_id);
        $this->view('Product/userProductDetails', $product);
	}

    // Add to wishlist
    public function addToWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->addProduct($product_id);
    }

    // Remove from wishlist
    public function removeFromWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->removeProduct($product_id);
    }

    // Review Product
    // Need to see if review and rate should be combined
    public function reviewProduct($product_id) {
        if(isset($_POST['action'])) {
            $review = new \app\models\Review();
            $review->comment = $_POST['comment'];
            $review->rating = $_POST['rating'];
            $review->date = date();
            $review->insert();
        } else {
            $this->view('Review/create');
        }
    }

    // Modify Review
    public function modifyReview($review_id) {
        if(isset($_POST['action'])) {
            $review = new \app\models\Review();
            $review->comment = $_POST['comment'];
            $review->rating = $_POST['rating'];
            $review->update();
        } else {
            $this->view('Review/create');
        }
    }

    // Catalog View
    public function catalog() {
		$product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/catalog', $products);
    }

    public function byCategory($category_id) {
        $category = new \app\models\Category();
        $category = $category->getByID($category_id);
        $product = new \app\models\Product();
        $products = $product->getByCategory($category_id);

        $this->view('Product/byCategory', ['category'=>$category, 'products'=>$products]);
    }

    public function searchByName() {
        if(isset($_POST['search'])) {
            if (!$_POST['search']=="") {
                $product = new \app\models\Product();
                $search = $_POST['search'];
                $search = ltrim($search);
                $search = rtrim($search);
                $products = $product->searchByName($search);
                $this->view('Product/byName', ['products'=>$products, 'search'=>$search]);
            } else {
                header('location:/Product/index');
            }
            
        }
    }

}