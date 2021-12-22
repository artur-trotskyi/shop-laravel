<?php

namespace App\Http\Controllers;

use App;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    /**
     * @var ProductService
     */
    private $product;

    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @param FilterRequest $request
     * @return View
     */
    public function index(FilterRequest $request): View
    {
        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
        ];

        $data = $request->validated();

        $filter = App::makeWith(ProductFilter::class, ['queryParams' => array_filter($data)]);
        $products = Product::filter($filter)->paginate(3);

        return view('/content/apps/ecommerce/app-ecommerce-shop', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $productId
     * @return  View
     */
    public function show($productId): View
    {
        $product = $this->product->findById($productId);

        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/shop", 'name' => "Shop"], ['name' => "Details"]
        ];

        return view('/content/apps/ecommerce/product-details', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs,
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
