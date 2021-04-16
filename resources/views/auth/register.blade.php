@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="name" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="g" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6 row">
                               <div class="col-sm-6">
                                    <label  for="gender1" class="col-form-label">{{ __('male') }}</label>
                                    <input  type="radio" id="gender1" class=" is-invalid" name="gender" value="male"  required >
                               </div>
                               <div class="col-sm-6">
                                    <label for="gender2" class="col-form-label">{{ __('female') }}</label>
                                    <input  type="radio" id="gender2" class="is-invalid" name="gender" value="female"  required >
                               </div>
                            </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('height') }}</label>

                            <div class="col-md-6">
                                <input id="height" type="number" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}" required autocomplete="name" autofocus>

                                @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="width" class="col-md-4 col-form-label text-md-right">{{ __('width') }}</label>

                            <div class="col-md-6">
                                <input id="width" type="number" class="form-control @error('width') is-invalid @enderror" name="width" value="{{ old('width') }}" required autocomplete="name" autofocus>

                                @error('width')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sportive" class="col-md-4 col-form-label text-md-right">{{ __('sportive') }}</label>

                            <div class="col-md-6 row">
                               <div class="col-sm-6">
                                    <label  for="sportive1" class="col-form-label">{{ __('yes') }}</label>
                                    <input  type="radio" id="sportive1" class=" is-invalid" name="sportive" value="1"  required >
                               </div>
                               <div class="col-sm-6">
                                    <label for="sportive2" class="col-form-label">{{ __('no') }}</label>
                                    <input  type="radio" id="sportive2" class="is-invalid" name="sportive" value="0" required >
                               </div>
                            </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="diseas" class="col-md-4 col-form-label text-md-right">{{ __('Choose your diseases') }}</label>

                            <div class="col-md-6 ">
                               <div class="mr-1">
                                    <input  type="checkbox" id="diabetes" class="mr-1 is-invalid" name="health_status[]" value="Diabetes"  >
                                    <label  for="diabetes" class="col-form-label">{{ __('Diabetes') }}</label>
                               </div>
                               <div class="mr-1">
                                    <input  type="checkbox" id="Hypertension" class="mr-1 is-invalid" name="health_status[]" value="Hypertension"  >
                                    <label for="Hypertension" class="col-form-label">{{ __('Hypertension') }}</label>
                               </div>
                               <div class="mr-1">
                                    <input  type="checkbox" id="Obesity" class=" mr-1is-invalid" name="health_status[]" value="Obesity"  >
                                    <label for="Obesity" class="col-form-label">{{ __('Obesity') }}</label>

                               </div>
                            </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
