 
   <div id="page-wrapper">
            <div class="container-fluid">
                 <div class="col-lg-12">
                        <h1 class="page-header">QUẢN LÍ
                            <small>Khách hàng</small>
                        </h1>
                    </div>
                <div class="row">
                    <div class="col">
                         <form action="#" method="POST">
                            <div class="form-group row">
                              <label for="tenKH" class="col-sm-2 col-form-label">Tên khách hàng</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="tenKH" name="tenKH" placeholder="Nhập tên khách">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="CMND" class="col-sm-2 col-form-label">CMND</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="CMND" name="CMND" placeholder="Nhập CMND">
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="Email" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="Email" name="Email" placeholder="Nhập Email">
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="HinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                              <div class="col-sm-10">
                                <input type="file" class="form-control" id="HinhAnh" name="HinhAnh" placeholder="Nhập HinhAnh">
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="DiaChi" class="col-sm-2 col-form-label">Địa chỉ</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="DiaChi" name="DiaChi" placeholder="Nhập DiaChi">
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="SDT" class="col-sm-2 col-form-label">SDT</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="SDT" name="SDT" placeholder="Nhập SDT">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                              </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">

                    
                    <!-- /.col-lg-12 -->

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                             <thead>
                            <tr align="center">
                                <th>Mã KH</th>
                                <th>Tên khách hàng</th>
                                <th>CMND</th>
                                <th>Email</th>
                                <th>Hình ảnh</th>
                                <th>Địa chỉ</th>
                                <th>SDT</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                               <tr>                                                                                                        
                                <td>KH01</td>
                                <td>Trần Thị Trang</td>
                                <td>2001140478</td>
                                <td>trantrangit.cntp@gmail.com</td>
                                <td> <img src="../../images/logoletgo.png" width="100" height="50"></td>
                                <td>50/3 Phạm Đăng Giảng Phường Bình Hưng Hòa Quận Tân Phú</td>
                                <td>01276517110</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaKH"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                </td>
                              </tr>

                               <tr>                                                                                                        
                                <td>KH02</td>
                                <td>Nguyễn Phước Đạt</td>
                                <td>2003349576</td>
                                <td>datnp@gmail.com</td>
                                <td> <img src="../../images/logoletgo.png" width="100" height="50"></td>
                                <td>238 Cái Bè Quận 3 Thành phố Hồ Chí Minh</td>
                                <td>01276517110</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form>
                             </td>
                                <td class="center">                           
                                    <a href=""  data-toggle="modal" data-target="#frmsuaKH"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                                <div class="modal fade" id="frmsuaKH" tabindex="-1" role="dialog" aria-labelledby="dangnhap" aria-hidden="true">
                                    <div class="modal-dialog modal-formlogin" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dangnhap">SỬA TÀI KHOẢN</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container ctn-login">
                                                    <div class="row">
                                                        <div class="col nodung">
                                                            <form action="#" method="POST">
                                                                <div class="form-group row">
                                                                  <label for="tenKH" class="col-sm-2 col-form-label">Tên khách hàng</label>
                                                                  <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="tenKH" name="tenKH" placeholder="Nhập tên khách">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="CMND" class="col-sm-2 col-form-label">CMND</label>
                                                                  <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="CMND" name="CMND" placeholder="Nhập CMND">
                                                                  </div>
                                                                </div>
                                                                 <div class="form-group row">
                                                                  <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                                                  <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Nhập Email">
                                                                  </div>
                                                                </div>
                                                                 <div class="form-group row">
                                                                  <label for="HinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                                                                  <div class="col-sm-4">
                                                                    <input type="file" class="form-control" id="HinhAnh" name="HinhAnh" placeholder="Nhập HinhAnh">
                                                                  </div>
                                                                </div>
                                                                 <div class="form-group row">
                                                                  <label for="DiaChi" class="col-sm-2 col-form-label">Địa chỉ</label>
                                                                  <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="DiaChi" name="DiaChi" placeholder="Nhập DiaChi">
                                                                  </div>
                                                                </div>
                                                                 <div class="form-group row">
                                                                  <label for="SDT" class="col-sm-2 col-form-label">SDT</label>
                                                                  <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="SDT" name="SDT" placeholder="Nhập SDT">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <div class="offset-sm-2 col-sm-4">
                                                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                                                  </div>
                                                                </div>
                                                               
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                     </div>
                                </div>
                              </tr>
                            
                              <tr>                                                                                                        
                                <td>KH03</td>
                                <td>Nguyễn Thị Bình</td>
                                <td>0987463759</td>
                                <td>binhtt@gmail.com</td>
                                <td> <img src="../../images/logoletgo.png" width="100" height="50"></td>
                                <td>Bình Định</td>
                                <td>01276517110</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaKH"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>

                        </tbody>      
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
