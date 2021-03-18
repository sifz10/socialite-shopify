
@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h3>Create a new account</h3>
                        <p class="text-muted">Get our 30-day free trial and start increasing your sales today</p>
                    </div>
                    <hr class="mb-4">
                    <form method="GET" action="{{ route('login.shopify') }}" aria-label="{{ __('Register') }}">
                        <div class="form-group">
                            <label for="domain">Domain</label>

                            <div class="input-group mb-3">
                                <input id="domain" type="text" class="form-control{{ $errors->has('domain') ? ' is-invalid' : '' }}" name="domain" value="{{ old('domain') }}" placeholder="yourshop" aria-describedby="myshopify" required autofocus>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="myshopify">myshopify.com</span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Continue</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3">
                <p class="text-center text-muted">Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
            </div>
        </div>
    </div>
@endsection
