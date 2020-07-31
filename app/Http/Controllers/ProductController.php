<?php

namespace App\Http\Controllers;

use Google\Cloud\Core\Exception\GoogleException;
use Google\Cloud\Firestore\FirestoreClient;

class ProductController extends Controller {

    public function index() {
        try {
            $db = new FirestoreClient([
                'keyFile' => json_decode(file_get_contents(__DIR__ . '\xmltojson-key.json'), true)
            ]);

            $productsRef = $db->collection('products');
            $query = $productsRef->where('mainCategory','=','Takım');
            $snapshot = $query->documents();
            foreach ($snapshot as $product) {
                if ($product->exists()) {
                    printf('Document data for document %s:' . PHP_EOL, $product->id());
                    print_r($product->data());
                    printf(PHP_EOL);
                } else {
                    printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
                }
            }
        } catch (GoogleException $e) {
        }
    }

}
