@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
@endsection
@section('content')
            <header class="row tm-welcome-section">
                <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
                <p class="col-12 text-center"> Total 3 HTML pages are included in this template. Header image has a
                    parallax effect. You can feel free to download, edit and use this TemplateMo layout for your
                    commercial or non-commercial websites.</p>
            </header>

            <div class="tm-paging-links">
                <nav>
                    <ul>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link active">dessert</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">meal</a></li>
                    </ul>
                </nav>
            </div>

            <div class="row tm-gallery">
                <!-- gallery page 1 -->
              <div id="tm-gallery-page-dessert" class="tm-gallery-page">
                @foreach($desserts as $m)
                  <article class=" col-md-4 col-sm-6 col-12 tm-gallery-item">
                                    <figure>
                      <img src="{{asset($m->img_link)}}" alt="Image" class="img-fluid tm-gallery-img" />
                      <figcaption>
                        <h4 class="tm-gallery-title">{{$m->meal_name}}</h4>
                        <p class="tm-gallery-description">{{$m->meal_description}}</p>
                        <form method="post" action="">


                          <div class="btn-group btn-group-toggle meal-rating-values" data-toggle="buttons" data-meal_id="{{$m->id}}">
                            <label class="btn btn-danger ">
                              <i class="fa fa-check @if(!($m->rating->value==0)) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" value="Bad">
                              Bad
                            </label>
                            <label class="btn btn-warning active">
                              <i class="fa fa-check @if(!($m->rating->value==1)) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" checked
                                value="Normal"> Normal
                            </label>
                            <label class="btn btn-success">
                              <i class="fa fa-check @if(!($m->rating->value==2)) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" value="Good">
                              Good
                            </label>

                          </div>
                          <br>



                        </form>
                      </figcaption>
                    </figure>
                  </article>
                @endforeach
              </div>
              <div id="tm-gallery-page-meal" class="tm-gallery-page hidden">
                @foreach($meals as $m)
                  <article class=" col-md-4 col-sm-6 col-12 tm-gallery-item">
                                    <figure>
                      <img src="{{asset($m->img_link)}}" alt="Image" class="img-fluid tm-gallery-img" />
                      <figcaption>
                        <h4 class="tm-gallery-title">{{$m->meal_name}}</h4>
                        <p class="tm-gallery-description">{{$m->meal_description}}</p>
                        <form method="post" action="">


                          <div class="btn-group btn-group-toggle meal-rating-values" data-toggle="buttons" data-meal_id="{{$m->id}}">
                            <label class="btn btn-danger ">
                             <i class="fa fa-check @if(!($m->rating->value==0)) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" value="Bad">
                              Bad
                            </label>
                            <label class="btn btn-warning active">
                             <i class="fa fa-check @if(!($m->rating->value==1)) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" checked
                                value="Normal"> Normal
                            </label>
                            <label class="btn btn-success">
                             <i class="fa fa-check @if(!($m->rating->value==2)) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" value="Good">
                              Good
                            </label>

                          </div>
                          <br>



                        </form>
                      </figcaption>
                    </figure>
                  </article>
                @endforeach
              </div>
              <div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
                @foreach($salads as $m)
                  <article class=" col-md-4 col-sm-6 col-12 tm-gallery-item">
                                    <figure>
                      <img src="{{asset($m->img_link)}}" alt="Image" class="img-fluid tm-gallery-img" />
                      <figcaption>
                        <h4 class="tm-gallery-title">{{$m->meal_name}}</h4>
                        <p class="tm-gallery-description">{{$m->meal_description}}</p>
                        <form method="post" action="">


                          <div class="btn-group btn-group-toggle meal-rating-values" data-toggle="buttons" data-meal_id="{{$m->id}}">
                            <label class="btn btn-danger ">
                             <i class="fa fa-check @if(!($m->rating->value=="0")) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" value="Bad">
                              Bad
                            </label>
                            <label class="btn btn-warning active">
                             <i class="fa fa-check @if(!($m->rating->value=="1")) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" checked
                                value="Normal"> Normal
                            </label>
                            <label class="btn btn-success">
                             <i class="fa fa-check @if(!($m->rating->value=="2")) d-none @endif"></i>
                              <input type="radio" name="options"  autocomplete="off" value="Good">
                              Good
                            </label>

                          </div>
                          <br>



                        </form>
                      </figcaption>
                    </figure>
                  </article>
                @endforeach
              </div>

            </div>
@endsection
@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $(document).ready(function() {
  $(document).on('click','.meal-rating-values label',function(){
       let meal_id = $(this).parent().data('meal_id')
       console.log(meal_id)
       let v =$(this).find('input').val()
       switch(v){
           case 'Bad' :
             v = 0
           break;
           case 'Normal' :
             v = 1
           break;
           case 'Good' :
             v = 2
           break;
           default:
            case 'Good' :
                    v = 2
                break;
       }
       var that = $(this);
       $.ajax({
           method:'post',
           url:'{{route("rate_meal")}}',
           data:{"_token":"{{ csrf_token() }}","meal_id":meal_id,"value":v},
           dataType:'json',
            success:function(data){
                 Swal.fire({
                   position:'top-end',
                  icon: 'success',
                  text: data.message,
                  showConfirmButton: false,
                  timer: 1500
                });
                $(that).parent().find('i').addClass('d-none');
                $(that).find('i').removeClass('d-none')
           }
       })
  });

        // Handle click on paging links
        $('.tm-paging-link').click(function(e) {
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });

    });

</script>

@endsection