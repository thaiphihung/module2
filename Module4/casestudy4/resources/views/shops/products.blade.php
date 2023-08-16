@extends('shops.layouts.master')
@section('content')

<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div> <!-- /.loading-overlay -->
    <div class="page-title parallax parallax1 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-content text-center">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li class="blog"><a href="#">Shop Full Width</a></li>
                                </ul>
                            </div>
                            <div class="page-title-heading">
                                 <h2 class="title"><a href="#">ARCHIVES PRODUCTS</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- /.page-title -->
<div class="main-shop-fullwidth">
    <div class="container">
            <div class="filter-shop clearfix">
              <ul>
                  <li class="list"><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                  <li class="grid"><a href="#"><i class="fa fa-list" aria-hidden="true"></i></a></li>
              </ul>
               <span class="filter-icon"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
               <span class="filter-right">Sort by price: low to high</span>   
            </div>
            <article class="post">
                <div class="post-border">
                    <div class="featured-post">
                        <img src="{{asset('shop/asset/image/shop-list1.jpg')}}" alt="image">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                           <h2><a href="#">Trius Vidal Icewine 2016</a></h2>
                        </div>
                        <div class="post-meta">
                            <ul>
                                 <li><a href="#">0100494</a></li>
                                 <li><a href="#">750ml</a></li>
                                 <li><a href="#">13</a></li>
                            </ul>
                        </div>
                        <div class="post-main">
                            <span>A fabulous sipper with slightly rich flavours of juicy peach and citrus. Enjoy in the heat of summer and on cool fall nights!</span>
                        </div>
                        <div class="post-price">
                            <span>$22.99 - $42.99</span>
                        </div>
                        <div class="post-submit">
                             <a href="#" class="hvr-shutter-out-horizontal">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post post-center">
                  <div class="post-border">
                      <div class="featured-post">
                          <img src="{{asset('shop/asset/image/shop-list2.jpg')}}" alt="image">
                      </div>
                      <div class="post-content">
                          <div class="post-title">
                             <h2><a href="#">Thirty Bench Small Lot Rosé 2017</a></h2>
                          </div>
                          <div class="post-meta">
                              <ul>
                                   <li><a href="#">0100494</a></li>
                                   <li><a href="#">750ml</a></li>
                                   <li><a href="#">13</a></li>
                              </ul>
                          </div>
                          <div class="post-main">
                              <span>A fabulous sipper with slightly rich flavours of juicy peach and citrus. Enjoy in the heat of summer and on cool fall nights!</span>
                          </div>
                          <div class="post-price">
                              <span>$32.99 - $42.99</span>
                          </div>
                          <div class="post-submit">
                               <a href="#" class="hvr-shutter-out-horizontal">BUY NOW</a>
                          </div>
                      </div>
                  </div>
            </article>
            <article class="post">
                <div class="post-border">
                  <div class="featured-post">
                      <img src="{{asset('shop/asset/image/shop-list3.jpg')}}" alt="image">
                  </div>
                  <div class="post-content">
                      <div class="post-title">
                         <h2><a href="#">Josh Cellars Cabernet 1924</a></h2>
                      </div>
                      <div class="post-meta">
                          <ul>
                               <li><a href="#">0100494</a></li>
                               <li><a href="#">750ml</a></li>
                               <li><a href="#">13</a></li>
                          </ul>
                      </div>
                      <div class="post-main">
                          <span>A fabulous sipper with slightly rich flavours of juicy peach and citrus. Enjoy in the heat of summer and on cool fall nights!</span>
                      </div>
                      <div class="post-price">
                          <span>$28.99 - $52.99</span>
                      </div>
                      <div class="post-submit">
                           <a href="#" class="hvr-shutter-out-horizontal">BUY NOW</a>
                      </div>
                  </div>
                </div>
            </article>
            <article class="post">
                <div class="post-border">
                    <div class="featured-post">
                        <img src="{{asset('shop/asset/image/shop-list4.jpg')}}" alt="image">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                           <h2><a href="#">Chateau Vivonne Bandol Rose 1875</a></h2>
                        </div>
                        <div class="post-meta">
                            <ul>
                                 <li><a href="#">0100494</a></li>
                                 <li><a href="#">750ml</a></li>
                                 <li><a href="#">13</a></li>
                            </ul>
                        </div>
                        <div class="post-main">
                            <span>A fabulous sipper with slightly rich flavours of juicy peach and citrus. Enjoy in the heat of summer and on cool fall nights!</span>
                        </div>
                        <div class="post-price">
                            <span>$33.99 - $41.99</span>
                        </div>
                        <div class="post-submit">
                             <a href="#" class="hvr-shutter-out-horizontal">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </article>
            <div class="blog-pagination text-center">
                <ul class="flat-pagination">
                    <li class="prev"><a href="#" class=" hvr-shutter-out-horizontal"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a></li>
                    <li><a href="#" class=" hvr-shutter-out-horizontal"> 1 </a></li>
                    <li><a href="#" class=" hvr-shutter-out-horizontal"> 2 </a></li>
                    <li><a href="#" class=" hvr-shutter-out-horizontal"> 3 </a></li>
                    <li class="next"><a href="#" class=" hvr-shutter-out-horizontal"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                </ul>
            </div> 
    </div> <!-- /container --> 
</div> <!-- /main-shop-fullwidth --> 
<a id="scroll-top"><i class="fa fa-angle-right" aria-hidden="true"></i></a> <!-- /#scroll-top -->
@endsection
