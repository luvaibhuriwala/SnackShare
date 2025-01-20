@extends('layout')
@section('fullName', auth()->user()->username)
@section('institute', auth()->user()->institute)
@section('title', 'Available Food')

@section('content')
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Available Food</h4>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive mt-4">
                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                            <tr>
                                <th>Food Item</th>
                                <th>Expiry</th>
                                <th>Quantity</th>
                                <th>Request</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6>{{ $item->menu }} ({{ $item->quantity }} servings available)</h6>
                                        </div>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($item->expires_at)->addHours(5)->format('F j, Y h:i A') }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('requests.store') }}">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <input type="number" name="quantity" class="form-control"
                                                   id="quantity_{{ $item->id }}" max="{{ $item->quantity }}"
                                                   required placeholder="Enter quantity">
                                    </td>
                                    <td>
                                            <button type="submit" class="btn btn-primary">Request</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
