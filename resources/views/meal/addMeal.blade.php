@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <a href="{{route('new_meal')}}" >{{ __('Add Meal') }}</a>
                  ///
                  <a href="{{route('all_meals')}}" >{{ __('All Meal') }}</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add_meal') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="meal_name" class="col-md-4 col-form-label text-md-right">{{ __('meal_name') }}</label>

                            <div class="col-md-6">
                                <input id="meal_name" type="text" class="form-control @error('meal_name') is-invalid @enderror" name="meal_name" value="{{ old('meal_name') }}" required autocomplete="name" autofocus>

                                @error('meal_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $messmeal_description }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meal_description" class="col-md-4 col-form-label text-md-right">{{ __('meal_description') }}</label>

                            <div class="col-md-6">
                                <textarea  rows="10" id="meal_description" class="form-control @error('meal_description') is-invalid @enderror" name="meal_description" value="{{ old('meal_description') }}" required  ></textarea>

                                @error('meal_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $messmeal_description }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="g" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6 row">
                               <div class="col-sm-6">
                                    <label  for="type1" class="col-form-label">{{ __('Dessert') }}</label>
                                    <input  type="radio" id="type1" class=" is-invalid" name="type" value="dessert"   >
                               </div>
                               <div class="col-sm-6">
                                    <label  for="type2" class="col-form-label">{{ __('Meal') }}</label>
                                    <input  type="radio" id="type2" class=" is-invalid" name="type" value="meal"   >
                               </div>
                               <div class="col-sm-6">
                                    <label  for="type3" class="col-form-label">{{ __('Salad') }}</label>
                                    <input  type="radio" id="type3" class=" is-invalid" name="type" value="salad"   >
                               </div>
                            </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $messmeal_description }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $messmeal_description }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Meal') }}
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
