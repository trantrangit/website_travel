 
   <div id="page-wrapper">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">QUẢN LÍ
                            <small>Tài khoản</small>
                        </h1>
                    </div>

                   <div class="container">
                        <form action="" method="POST">
                            <div class="form-group row">
                              <label for="tenTK" class="col-sm-2 col-form-label">Tên tài khoản</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="tenTK" name="tenTK" placeholder="Nhập tên tài khoản">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="matkhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu">
                              </div>
                            </div>
                            <fieldset class="form-group">
                                <legend>Ẩn/ hiện tài khoản</legend>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="anhien" id="optionsRadios1" value="0" checked>
                                   Ẩn
                                  </label>
                                </div>
                                <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="anhien" id="optionsRadios2" value="1">
                                  Hiện
                                  </label>
                                </div>
                               
                              </fieldset>
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                             <thead>
                            <tr align="center">
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Hoạt động</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                               <tr>                                                                                                        
                                <td>viuocmocsBoRua</td>
                                <td>12345643232trang</td>
                                <td>Có</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href=""  data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                                 <div class="modal fade" id="frmsuaTK" tabindex="-1" role="dialog" aria-labelledby="dangnhap" aria-hidden="true">
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
                                                               <form action="" method="POST">
                                                                    <div class="form-group row">
                                                                      <label for="tenTK" class="col-sm-2 col-form-label">Tên tài khoản</label>
                                                                      <div class="col-sm-4">
                                                                        <input type="text" class="form-control" id="tenTK" name="tenTK" placeholder="Nhập tên tài khoản">
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                      <label for="matkhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                                                                      <div class="col-sm-4">
                                                                        <input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu">
                                                                      </div>
                                                                    </div>
                                                                    <fieldset class="form-group row">
                                                                        <div class="col-sm-4">
                                                                            <legend>Ẩn/ hiện tài khoản</legend>
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="radio" class="form-check-input" name="anhien" id="optionsRadios1" value="0" checked>
                                                                                   Ẩn
                                                                                  </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="radio" class="form-check-input" name="anhien" id="optionsRadios2" value="1">
                                                                                  Hiện
                                                                                  </label>
                                                                                </div>
                                                                        </div>
                                                                       
                                                                      </fieldset>
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
                                <td>beluoi</td>
                                <td>beluoi1234@</td>
                                <td>Có</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                              <tr>                                                                                                        
                                <td>PhuocDat</td>
                                <td>100394dat</td>
                                <td>Có</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href=""><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                              <tr>                                                                                                        
                                <td>Cobedautay</td>
                                <td>cobedautay</td>
                                <td>Có</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>HoaCoDai</td>
                                <td>12564645</td>
                                <td>Không</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                 <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>SauRieng</td>
                                <td>sauhaha</td>
                                <td>Có</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>NgoiNhaHanhPhuc</td>
                                <td>76429876543</td>
                                <td>Không</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>Tàu</td>
                                <td>taugh</td>
                                <td>Có</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
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
