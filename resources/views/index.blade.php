@extends('layout')
@section('title','Home')
@section('fullName', auth()->user()->username)
@section('institute', auth()->user()->institute)
@section('content')

<section id="about" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="{{ asset('images/food-sharing.png') }}" class="card-img" alt="Sharing Food">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5>Hi, {{ auth()->user()->username }}</h5><br>
                                <h2 class="card-title text-primary">Welcome to Snack Share</h2>
                                <p class="card-text text-justify">
                                    Snack Share is an initiative to bring together the spirit of sharing and community within your institute.
                                    Whether you have extra food you'd like to give away or you're in need of a meal, Snack Share bridges the
                                    gap between givers and requesters with ease.
                                </p>
                                <p class="card-text text-secondary text-justify">
                                    By using our platform, you can contribute to reducing food waste while fostering a culture of generosity
                                    and kindness. Join us in building a better, more connected community where no meal goes to waste, and
                                    everyone is cared for.
                                </p>
                                <a class="btn btn-outline-primary btn-lg" href="{{ route('items.create') }}">
                                    <span class="item-name">Share</span>
                                </a>
                                <br>
                                <a class="btn btn-outline-primary btn-lg" href="{{ route('requests.index') }}">
                                    <span class="item-name">Request</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
