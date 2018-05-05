@extends('layout.admin')
@section('content')
  <div class="container mt-5">
    <div class="row">

      <div class="col-md-8">
        <div class="card cat-list">
          <div class="card-header"><i class="fas fa-th"></i> Categories
            <div style="float:right;">

            </div>
          </div>
          <div class="card-body">

            <div class="item"><b>Category Name</b> <span title="Cources">745</span> </div>

          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card cat-suggesstion">
          <div class="card-header"><i class="far fa-lightbulb"></i> Categories Suggestions</div>
          <div class="card-body">
            <div class="item"><b>Category Name</b> <span>mehars.6925@gmail.com</span> <i title="Delete">&times;</i> </div>

          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
