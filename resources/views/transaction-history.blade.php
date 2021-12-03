@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>Your Transaction History</strong></h2>
        </div>
    </div>
    <div class="list-product">
        @foreach ($transactions as $tr)
            <br>
            <div>
                <a href="/view-transaction-detail-history/{{$tr->id}}">
                    Transaction at {{$tr->created_at}}
                </a>
            </div>
            <br>
        @endforeach
    </div>
</div>
@endsection