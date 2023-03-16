@extends('layouts.app')
@section('title','Properties')
@section('section')
<body>
<section class="all_products">
    <div class="container">
        <div class="row">
            <!-- Products -->
            @foreach($propertydata as $prop)
            <div class="col-md-2 col-12 text-center card">
                <a href="{{ url('/property/'.$prop['reference'])}}" class="card-body">{{ $prop['reference'] }}</a>
            </div>
            @endforeach
            <div class="mt-3">{{ $propertydata->links() }}</div>
        </div>
    </div>
</section>
@endsection