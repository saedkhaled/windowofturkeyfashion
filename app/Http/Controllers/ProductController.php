<?php

namespace App\Http\Controllers;

use Google\Cloud\Core\Exception\GoogleException;
use Google\Cloud\Firestore\FirestoreClient;

class ProductController extends Controller {

    public function show($id) {
        try {
            $db = new FirestoreClient([
                'keyFile' => json_decode(file_get_contents(__DIR__ . '\xmltojson-key.json'), true)
            ]);

            $productsRef = $db->collection('products');
            $query = $productsRef->where('id','=',$id);

            $snapshot = $query->documents();
            foreach ($snapshot as $product) {
                if ($product->exists()) {
                    return view('singleProduct',compact('product'));
                } else {
                    printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
                }
            }
        } catch (GoogleException $e) {
        }

    }

    public function index($category,$number) {
        try {
            $db = new FirestoreClient([
                'keyFile' => json_decode(file_get_contents(__DIR__ . '\xmltojson-key.json'), true)
            ]);

            $productsRef = $db->collection('products');
            $query = $productsRef->where('mainCategory','=',$category)->limit(20)->offset(($number-1)*20);

            $snapshot = $query->documents();
            $products = array();
            foreach ($snapshot as $product) {
                if ($product->exists()) {
//                    return view('products',compact('product'));
                    array_push($products,$product);

                } else {
                    printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
                }
            }
            return view('products',compact('products','category','number'));
        } catch (GoogleException $e) {
        }
    }



}
