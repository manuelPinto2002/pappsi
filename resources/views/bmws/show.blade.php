@extends('layout')
<link href=" {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>




@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')





         



@endsection

@section ('produtos')
<div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="{{asset('imagens/Bmw/'.$bmw->imagem_capa)}}" >
          <div class="card-body">
            <h3 class="card-title"></h3>
            <h5>{{$bmw->preco}}€</h5>
            <p class="card-text">TLorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
             Reviews do Produto
          </div>
          <div class="card-body">
            <p>Motor muito bom aguenta a pancada</p>
            <small class="text-muted">Posted by Daniel on 01/03/2021</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Fazer Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>


@endsection

@section ('rodape')
@endsection




<br>
<br><br><br>










