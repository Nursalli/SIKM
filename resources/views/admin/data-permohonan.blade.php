@extends('layouts.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Permohonan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Permohonan</li>
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
              <h3 class="card-title">Data Permohonan</h3><br><br>

              <a class="btn btn-success" href="#" role="button" title="Tambah Pengguna">
                <i class="fas fa-sync"> Refresh</i>
              </a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>A</th>
                  <th>B</th>
                  <th>C</th>
                  <th>D</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0;
                  while($i<3):
                ?>
                <tr>
                  <td><?= $i+1; ?></td>
                  <td>Isi A</td>
                  <td>Isi B</td>
                  <td>Isi C</td>
                  <td>Isi D</td>
                  <td class="text-center">
                    <a class="btn btn-warning" href="#" role="button" title="Detail">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a class="btn btn-success" href="#" role="button" title="Terima" data-toggle="modal" data-target="#formModalHapus">
                      <i class="fas fa-check-square"></i>
                    </a>
                    <a class="btn btn-danger" href="#" role="button" title="Tolak" data-toggle="modal" data-target="#formModalHapus">
                      <i class="fas fa-window-close"></i>
                    </a>
                  </td>
                </tr>
                <?php $i++; endwhile; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>A</th>
                  <th>B</th>
                  <th>C</th>
                  <th>D</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection