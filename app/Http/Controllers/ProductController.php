<?php

namespace App\Http\Controllers;

use App\Domain\Product\ProductRepository;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Application\Product\CreateProductRequest;
use App\Application\Product\CreateProduct;

class ProductController extends Controller
{
    private ProductRepository $repository;
    private CreateProduct $createProduct;

    public function __construct(ProductRepository $repository, CreateProduct $createProduct)
    {
        $this->repository = $repository;
        $this->createProduct = $createProduct;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->repository->getAll();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request = new CreateProductRequest($request['name'], $request['description'], $request['price']);
        $this->createProduct->execute($request);
        return view('products.create');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
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
    public function update(UpdateProductRequest $request, Product $product)
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
