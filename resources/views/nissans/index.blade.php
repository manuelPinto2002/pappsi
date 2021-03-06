@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection



@section ('produtos')
 <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ URL::asset('img/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ URL::asset('img/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ URL::asset('img/3.png') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        
        <div align="center">
        <a href="{{route('nissans.create')}}"><button type="button" class="btn btn-outline-primary">Criar</button></a>
</div><br>
        <div class="row">

         @foreach($nissans as $nissan)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/logo.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">


                  <a href="{{route('nissans.show', ['id'=>$nissan->id_nissan])}} "class="list-group-item"  >{{$nissan->motor}}</a>
                </h4>
                <h5>{{$nissan->preco}} ???</h5>
                <p class="card-text">{{$nissan->info}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

@endforeach



          

          
         

         


          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>

@endsection

@section ('rodape')
@endsection





</ul>

   

