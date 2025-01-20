@extends('layout')
@section('fullName', auth()->user()->username)
@section('institute', auth()->user()->institute)
@section('title', 'Contact Details')

@section('content')
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Contact Details</h4><br>
                    <p>Thank you for requesting the food. Please contact the contributor using the details below:</p>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{ $giver->username }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $giver->phone }}</td>
                        </tr>
                        <tr>
                            <th>Institute</th>
                            <td>{{ $giver->institute }}</td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection
