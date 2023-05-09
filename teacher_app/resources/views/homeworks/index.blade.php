@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('All Homeworks') }}
                    <a class="btn btn-danger">create new homework</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="card-container row d-flex justify-content-center">
                            @foreach($homeworks as $homework)
                                <div class="p-3 m-3 card col-lg-3 col-sm-5">
                                    <h5><strong>{{ $homework->title }}</strong></h5>
                                    <p>{{ $homework->description }}</p>
                                    <p>{{ $homework->due_date }}</p>
                                    <a class="btn btn-primary">More Details</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
