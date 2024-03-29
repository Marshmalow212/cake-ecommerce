@extends('components.master')
@section('content')


    @include('elements.breadcrumb',['title'=>'Shop Detail'])

    <!--markup for wrapper-->
    <section id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <div class="large-5 column">
                            <div class="xzoom-container"> <img class="xzoom" id="xzoom-default" src="img/shop/product-2.jpg" xoriginal="img/shop/product-2.jpg" />
                                <div class="xzoom-thumbs"> <a href="https://i.imgur.com/uC0mRJc.jpg"> <img class="xzoom-gallery" width="80" src="https://i.imgur.com/vfPagtf.jpg" xpreview="https://i.imgur.com/b7R8dRr.jpg"></a> <a href="https://i.imgur.com/oNaczTl.jpg"> <img class="xzoom-gallery" width="80" src="https://i.imgur.com/r03r46u.jpg"> </a> <a href="https://i.imgur.com/853Jrff.jpg"><img class="xzoom-gallery" width="80" src="https://i.imgur.com/BpfNBDk.jpg"></a> <a href="https://i.imgur.com/Q7xvBFf.jpg"><img class="xzoom-gallery" width="80" src="https://i.imgur.com/3SuUpUH.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="container">
                        <h2 class="h1 mt-2 mb-2">Chocolate Caramel</h2>
                        <div class="row border-bottom">
                            <div class="col-md-3">
                                <p class="card-text">

                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>

                                </p>
                            </div>
                            <div class="col-md-2"><p>5 reviews</p></div>
                            <div class="col-md-2"><p>write review</p></div>
                        </div>
                        <div class="row mt-3 mb-4 border-bottom">
                            <p class="h4">&dollar;<?=number_format((float)35,2,'.','')?></p>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <form class="form" method="post" action="#">
                                    <div class="row">
                                        <div class="col-md-2 mr-2">
                                            <label for="">Qty
                                            </label>
                                        </div>

                                        <div class="col-md">

                                            <input class="form-control" type="number" name="qty" value="1">
                                        </div>
                                    </div>

                                    <div class="col-md mt-2">
                                        <button type="submit" class="btn btn-danger add-to-cart">ADD TO CART</button></div>

                                    {{--<input type="hidden" name="product_title" value="<?=$result['title']?>">--}}
                                    {{--<input type="hidden" name="product_id" value="<?=$result['id']?>">--}}
                                    {{--<input type="hidden" name="unit_price" value="<?=$result['mrp']?>">--}}
                                    {{--<input type="hidden" name="picture" value="<?=$result['picture']?>">--}}

                                </form>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>

    </section>

@endsection
