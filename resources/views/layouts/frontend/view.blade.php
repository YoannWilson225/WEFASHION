@extends('layouts.app')
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="left-images">
                <img src="{{asset ('assets/uploads/'.$product->image)}}" alt="" >
            </div>
        </div>
        <div class="col-lg-4">
            <div class="right-content">
                <h4>{{$product->name}}</h4>
                <span class="price">{{$product->prix}} FCFA</span>
                <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
                <div class="quote">
                    <i class="fa fa-quote-left"></i><p>{{$product->description}}</p>
                </div>
                <div class="quantity-content">
                    <div class="right-content">
                        <select name="" id="">
                            <option value="">Taille</option>
                            <option value="">XS</option>
                            <option value="">S</option>
                            <option value="">M</option>
                            <option value="">L</option>
                            <option value="">XL</option>
                          </select>
                    </div>
                </div>
                <div class="total">
                    <div class="main-border-button"><a href="#">Acheter</a></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

