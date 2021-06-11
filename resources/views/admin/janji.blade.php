@include('dashboard.pasien')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pasien</th>
                        <th>Psikolog</th>
                        <th>Jadwal</th>
                        <th>Bukti bayar</th>
                        <th>Status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Andre</td>
                        <td>Dr andi</td>
                        <td>Senin, 30 Januari 2022</td>
                        <td><img src="https://media.karousell.com/media/photos/products/2019/12/25/bukti_transfer_trf__1577263390_4882166a_progressive.jpg" alt="" width="100px" height="100px"></td>
                        <td>Pending</td>
                        <td width="7%">
                            <a href="janjidetail.php">
                              <button type="button" class="btn btn-block btn-primary">Lihat</button>
                            </a>
                        </td>
                        <td width="7%">
                            <a href="#">
                              <button type="button" class="btn btn-block btn-success">Terima</button>
                            </a>
                        </td>
                        <td width="7%">
                            <button type="button" class="btn btn-block btn-danger">Tolak</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
@include('dashboard.footer')