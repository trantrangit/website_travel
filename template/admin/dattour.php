  <script src="../../ckfinder_php/ckeditor/ckeditor.js"></script>
   <div id="page-wrapper">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">QUẢN LÍ
                            <small>Đặt tour du lịch</small>
                        </h1>
                    </div>
                </div> 
                <hr>
                <div class="row">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                            <tr align="center">
                                <th>Mã chi tiết đặt</th>
                                <th>Tên tour</th>
                                <th>Tên khách hàng</th>
                                <th>Số lượng khách</th>
                                <th>Số lượng trẻ em</th>
                                <th>Số lượng sơ sinh</th>
                                <th>Ngày đặt</th>
                                <th>Chương trình </th>
                                <th>Phần trăm khuyến mãi</th>
                                <th>Thành tiền</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                              <tr>               
                                <td>CTT01</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                <td class="center">
                                         <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href=""  data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                               <div class="modal fade" id="frmCT" tabindex="-1" role="dialog" aria-labelledby="dangnhap" aria-hidden="true">
                                    <div class="modal-dialog modal-suatours" role="document" style="width: 1220px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dangnhap">HỦY TOUR</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container ctn-login">
                                                    <script src="../ckfinder_php/ckeditor/ckeditor.js"></script>
                                                    <div class="row">
                                                        <div class="col nodung">
                                                              <form action="" method="POST">
                                                                 <div class="form-group row">
                                                                  <label for="loaitour" class="col-sm-2 col-form-label">Loại tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="loaitour" name="loaitour" value="Du lịch biển">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="matours" class="col-sm-2 col-form-label">Mã tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="matours" name="matours" value="THCM01">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="tentours" class="col-sm-2 col-form-label">Tên tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tentours" name="tentours" value="Hồ Chí Minh - Đà Lạt">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="giatreem" class="col-sm-2 col-form-label">Thành tiền</label>
                                                                  <div class="col-sm-10">
                                                                     <input type="text" class="form-control" id="giatreem" name="giatreem" value="1.890.000 đ">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="thongtinsp" class="col-sm-2 col-form-label">Lý do</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea rows="20" cols="155" id="edtor2">
                                                                          
                                                                        </textarea>
                                                                        <script >
                                                                          CKEDITOR.replace('edtor2',{

                                                                          });
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group row">
                                                                  <div class="offset-sm-2 col-sm-10">
                                                                    <button type="submit" class="btn btn-primary">Gửi mail</button>
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
                              <tr>                                                                                                        
                                <td>CTT02</td>
                                <td>Quy Nhơn - Huế</td>
                                <td>Nguyễn Phướt Đạt</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                <td class="center">
                                         <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                              <tr>                                                                                                        
                                <td>CTT34</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                <td class="center">
                                         <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                              <tr>                                                                                                        
                                <td>CTT01</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>23.890.000đ</td>
                                <td class="center">
                                         <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>CTT10</td>
                                <td>Việt Nam - Thái Lan</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                <td class="center">
                                         <input type="checkbox" class="form-check-input">
                                 </form></td>
                                 <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                               <td>CTT09</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Phú Thọ</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                <td class="center">
                                        <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>CTT08</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Lê Thị Giang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùa hạ sinh động</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                <td class="center">
                                        <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>CTT05</td>
                                <td>Đà Lạt - Nha Trang</td>
                                <td>Hồ Anh Tuấn</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>26/7/2017</td>
                                <td>Không khuyến mãi</td>
                                <td>0%</td>
                                <td>6.390.000đ</td>
                                <td class="center">
                                         <input type="checkbox" class="form-check-input">
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmCT"><input type='submit' class='btn btn-success' value='Hủy'></a>
                                </td>

                              </tr>
                          </tbody>    
                    </table>
                </div>
                <div class="row">
                  
                  <form>
                     <a href="" data-toggle="modal" data-target="#frmDatTours" ><input type='submit' class='btn btn-info' value='Xác nhận tours đã được đặt'></a>
                     <div class="modal fade" id="frmDatTours" tabindex="-1" role="dialog" aria-labelledby="dangnhap" aria-hidden="true">
                                    <div class="modal-dialog " role="document" style="width: 1220px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dangnhap">Danh sách đã được phê duyệt</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container ctn-login">
                                                  <div class="row">
                                                    <div class="col">
                                                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                            <tr align="center">
                                <th>Mã chi tiết đặt</th>
                                <th>Tên tour</th>
                                <th>Tên khách hàng</th>
                                <th>Số lượng khách</th>
                                <th>Số lượng trẻ em</th>
                                <th>Số lượng sơ sinh</th>
                                <th>Ngày đặt</th>
                                <th>Chương trình </th>
                                <th>Phần trăm khuyến mãi</th>
                                <th>Thành tiền</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                              <tr>               
                                <td>CTT01</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                
                              </tr>
                               <div class="modal fade" id="frmCT" tabindex="-1" role="dialog" aria-labelledby="dangnhap" aria-hidden="true">
                                    <div class="modal-dialog modal-suatours" role="document" style="width: 1220px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dangnhap">HỦY TOUR</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container ctn-login">
                                                    <script src="../ckfinder_php/ckeditor/ckeditor.js"></script>
                                                    <div class="row">
                                                        <div class="col nodung">
                                                              <form action="" method="POST">
                                                                 <div class="form-group row">
                                                                  <label for="loaitour" class="col-sm-2 col-form-label">Loại tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="loaitour" name="loaitour" value="Du lịch biển">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="matours" class="col-sm-2 col-form-label">Mã tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="matours" name="matours" value="THCM01">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="tentours" class="col-sm-2 col-form-label">Tên tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tentours" name="tentours" value="Hồ Chí Minh - Đà Lạt">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="giatreem" class="col-sm-2 col-form-label">Thành tiền</label>
                                                                  <div class="col-sm-10">
                                                                     <input type="text" class="form-control" id="giatreem" name="giatreem" value="1.890.000 đ">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="thongtinsp" class="col-sm-2 col-form-label">Lý do</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea rows="20" cols="155" id="edtor2">
                                                                          
                                                                        </textarea>
                                                                        <script >
                                                                          CKEDITOR.replace('edtor2',{

                                                                          });
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group row">
                                                                  <div class="offset-sm-2 col-sm-10">
                                                                    <button type="submit" class="btn btn-primary">Gửi mail</button>
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
                              <tr>                                                                                                        
                                <td>CTT02</td>
                                <td>Quy Nhơn - Huế</td>
                                <td>Nguyễn Phướt Đạt</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                               
                              </tr>
                              <tr>                                                                                                        
                                <td>CTT34</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                               
                              </tr>
                              <tr>                                                                                                        
                                <td>CTT01</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>23.890.000đ</td>
                                
                              </tr>
                               <tr>                                                                                                        
                                <td>CTT10</td>
                                <td>Việt Nam - Thái Lan</td>
                                <td>Trần Thị Trang</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                
                              </tr>
                               <tr>                                                                                                        
                               <td>CTT09</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>
                                <td>Trần Phú Thọ</td>

                                <td>
                                    5
                                </td>
                                <td>
                                    4
                                </td>
                                <td>1</td>
                                <td>23/7/2017</td>
                                <td>Mùng tám tháng ba</td>
                                <td>30%</td>
                                <td>1.890.000đ</td>
                                
                              </tr>
                          </tbody>    
                    </table>
                       </div>
                           </div>
                                <script src="../ckfinder_php/ckeditor/ckeditor.js"></script>
                                      <div class="row">
                                          <div class="col nodung">
                                                <form action="" method="POST">
                                                  
                                                  <div class="form-group row">
                                                      <label for="thongtinsp" class="col-sm-2 col-form-label">Chi tiết về lịch trình - nội quy</label>
                                                      <div class="col-sm-10">
                                                          <textarea rows="20" cols="155" id="edtor3">
                                                            
                                                          </textarea>
                                                          <script >
                                                            CKEDITOR.replace('edtor3',{

                                                            });
                                                          </script>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                      <button type="submit" class="btn btn-primary">Gửi mail</button>
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
            </form>
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
