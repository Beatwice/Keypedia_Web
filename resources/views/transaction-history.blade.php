@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>Your Transaction History</strong></h2>
        </div>
    </div>
    @if (count($transactions) <= 0 )
    <div class="bg-warning">
        <h2 style="text-align: center; margin-top:2%">Not Available</h2>
    </div>
    @else
    <div class="list-product">
            @foreach ($transactions as $tr)
                <br>
                    <a href="/view-transaction-detail-history/{{$tr->id}}" style=" text-decoration: none; color: black">
                        <div class="bg-info" style="text-align: center; border-radius: 20px; margin-left: 400px; margin-right: 400px">
                            Transaction at {{$tr->created_at}}
                        </div>
                    </a>
                <br>
            @endforeach
        </div>
        @endif
</div>
@endsection