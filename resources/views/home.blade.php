
@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    
                    <form method="POST" action="{{ route('deposit') }}">
                        @csrf
                        <h5 class="text-center mb-3">Make A Deposit Form</h5>
                        <!--<div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>
                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control @error('amount') is-invalid
                                @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div> -->


                        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>College Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your College Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rank</strong>
                    <input type="text" name="rank" class="form-control" placeholder="Enter Rank Number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subject</strong>
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject Name">
                </div>
            </div>

            <div class="row mb-3">
                            <label for="amount" class="col-md-3 col-form-label text-md-end">{{ __('Amount') }}</label>
                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control @error('amount') is-invalid
                                @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                           
             
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
