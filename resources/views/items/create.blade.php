@extends('layout')
@section('fullName', auth()->user()->username)
@section('institute', auth()->user()->institute)
@section('title', 'Share Food')

@section('content')
<br><br>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Share Food</h4>
        </div>
    </div>
    <div class="card-body">
        <p>Fill in the details below to share food with others in your institute.</p>
        <form method="POST" action="{{ route('items.store') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="control-label col-sm-3 align-self-center mb-0" for="menu">Menu:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Enter the menu" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3 align-self-center mb-0" for="quantity">Quantity (No. of people):</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3 align-self-center mb-0" for="expires_at">Expiry Date and Time:</label>
                <div class="col-sm-9">
                    <input type="datetime-local" class="form-control" id="expires_at" name="expires_at" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Share</button>
            </div>
        </form>
    </div>
</div>
@endsection
