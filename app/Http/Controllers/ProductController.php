<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Throwable;

class ProductController extends Controller
{
    public function home(): View
    {
        $viewData = [];
        $viewData['title'] = 'Workshop 01 - Getting Started';
        $viewData['subtitle'] = 'Select an option';

        return view('product.home')->with('viewData', $viewData);
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName().' - Online Store';
        $viewData['subtitle'] = $product->getName().' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create product';
        $viewData['subtitle'] = 'Creation form';

        return view('product.create')->with('viewData', $viewData);
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        try {
            Product::create($request->only('name', 'price', 'specie', 'description', 'stock'));

            return redirect()
                ->route('product.home')
                ->with('status', 'Item created successfully');
        } catch (Throwable $e) {
            return redirect()
                ->route('product.home')
                ->with('status', 'Failed to create item.');
        }
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()
            ->route('product.index')
            ->with('success', 'Item successfully deleted');
    }
}
