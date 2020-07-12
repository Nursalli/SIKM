@extends('layouts.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Saya</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Profil Saya</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-12">
      <div class="card">

      <div class="card-header">
        <a class="btn btn-warning" href="#" role="button" title="Ubah Profil Saya">
            <i class="fas fa-edit"> Ubah Profil Saya</i>
        </a>
      </div>

      <div class="card-body">

      <div class="row">
        <div class="col-md-2">
          <label for="role">Foto:</label><br>
          <img src="{!! asset('../adminlte/dist/img/user2-160x160.jpg') !!}" class="img-circle elevation-2" alt="User Image">
        </div>
      
      <div class="col-md-10">
        <label for="role">Role:</label>
        <p>Role 1</p>

        <label for="role">Username:</label>
        <p>Admin</p>

        <label for="role">Nama:</label>
        <p>Admin Dinas Perhubungan</p>
      </div>
      
      </div>
    </div>
  </div>
</div>
</section>
@endsection