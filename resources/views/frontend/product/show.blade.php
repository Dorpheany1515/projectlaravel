@extends('frontend.layout')

@section('title', $product->product_name)

@section('content')
<div class="container py-5">
    <div class="row">
        {{-- Left: Product Image --}}
        <div class="col-md-6">
            <img src="{{ asset($product->image) }}" class="img-fluid" alt="{{ $product->product_name }}">
        </div>

        {{-- Right: Product Info --}}
        <div class="col-md-6">
            <h2>{{ $product->product_name }}</h2>
            <p class="text-muted">
                @if($product->regular_price > $product->sale_price)
                    <del>${{ number_format($product->regular_price, 2) }}</del>
                    <span class="text-danger fw-bold ms-2">${{ number_format($product->sale_price, 2) }}</span>
                @else
                    ${{ number_format($product->sale_price, 2) }}
                @endif
            </p>

            {{-- Color --}}
            <h6>1 Color available</h6>
            <img src="{{ asset($product->image) }}" alt="color" style="width: 60px;" class="border p-1">

            {{-- Sizes --}}
            <div class="mt-3">
                <h6>Size</h6>
                <div class="d-flex gap-2">
                    @foreach ($sizes as $size)
                        <button class="btn btn-outline-secondary btn-sm">{{ $size }}</button>
                    @endforeach
                </div>
                <small class="text-muted d-block mt-1">
                    Model is 161 cm tall / 43 kg and is wearing size XS.
                </small>
            </div>

            {{-- Qty --}}
            <div class="mt-3">
                <h6>Qty</h6>
                <div class="input-group" style="width: 120px;">
                    <button class="btn btn-outline-secondary">-</button>
                    <input type="number" value="1" min="1" class="form-control text-center">
                    <button class="btn btn-outline-secondary">+</button>
                </div>
            </div>

            {{-- Description --}}
            <div class="mt-3">
                <p class="small text-muted">
                    {{ $product->description }}
                </p>
                <p class="text-muted">ID: {{ $product->id }}</p>
            </div>

            {{-- Add to bag --}}
            <button class="btn btn-dark w-100 mt-2">Add to Bag</button>
        </div>
    </div>
</div>
@endsection
