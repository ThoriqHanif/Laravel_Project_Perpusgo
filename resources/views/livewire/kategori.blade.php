<div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-sm btn-primary">+ Tambah Data</a>
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th width="10%">No</th>
                            <th>Nama Kategori</th>
                            <th width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($kategori as $item)
                          <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Detail</a>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
</div>
