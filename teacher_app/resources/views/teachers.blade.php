@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('All Teachers') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="card-container row d-flex justify-content-center">
                            @foreach($users as $user)
                                <div class="p-3 m-3 card col-lg-3 col-sm-5">
                                    <h5><strong>{{ $user->name }}</strong></h5>
                                    <p>{{ $user->email }}</p>
                                    <a class="btn btn-primary">Visit Profile</a>
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
