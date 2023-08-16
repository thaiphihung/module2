@foreach($all_products as $key => $product)
<li class="product-item">
    <div class="row">
        <div class="product-thumb clearfix col-3">
            <a href="#" class="product-thumb">
                <img style="width:372px;height:417px;" src="{{ asset($product->image) }}" alt="image">
            </a>
        </div>
        <div class="product-info text-center clearfix">
            <span class="product-title">{{$product->name}}</span>
            <div class="price">
                <ins>
                    <span class="amount">${{$product->price}}</span>
                </ins>
            </div>
        </div>
        <div class="product-review">
            <div class="add-cart">
                <a href="#" class="like1"><i class="fa fa-refresh" aria-hidden="true"></i></a>
            </div>
            <div class="add-cart">
                <a href="#" class="like2"><i class="fa-regular fa-heart" aria-hidden="true"></i></a>
            </div>
            <div class="add-cart">
                <a href="{{ route('add.to.cart', ['id' => $product->id]) }}" class="like3">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

</li>
@endforeach