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

                <table class="table table-sm table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Meal Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meals as $k => $meal)
                        <tr>
                        <th scope="row">{{$k}}</th>
                        <td>{{$meal->meal_name}}</td>
                        <td>{{$meal->type}}</td>
                        <td>
                        <a href="{{route('delete_meal',['id'=>$meal->id])}}" > Delete </a>
                        </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
</div>
</div>
</div>
</div>
@endsection