  <script src="../../ckfinder_php/ckeditor/ckeditor.js"></script>
   <div id="page-wrapper">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">QUẢN LÍ
                            <small>Tours du lịch</small>
                        </h1>
                    </div>

                   <div class="container">
                        <form action="" method="POST">
                            <div class="form-group row">
                             <label for="loaiKS" class="col-sm-2 col-form-label">Loại tours</label>
                                <div class="col-sm-10">
                                <select class="selectpicker form-control" >
                                  <option>Du lịch biển</option>
                                  <option>Du lịch khám phá</option>
                                  <option>Du lịch nước ngoài</option>
                                  <option>Du lịch khám phá</option>
                                  <option>Du lịch nước ngoài</option>
                                  <option>Du lịch tâm linh</option>
                                  <option>Du lịch thành phố</option>
                                  <option>Du lịch trong nước</option>
                                   <option>Du lịch hàng ngày</option>
                                  <option>Du lịch tuần</option>
                                  <option>Tour khách hàng</option>
                                </select>
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="matours" class="col-sm-2 col-form-label">Mã tours</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="matours" name="matours" placeholder="THCM01">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tentours" class="col-sm-2 col-form-label">Tên tours</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="tentours" name="tentours" placeholder="Nhập tên tours">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tentours" class="col-sm-2 col-form-label">Tóm tắt tours</label>
                              <div class="col-sm-10">
                                <textarea rows="5" cols="132">
                                  
                                </textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="thongtinsp" class="col-sm-2 col-form-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea rows="70" cols="50" id="edtor1">
                                      
                                    </textarea>
                                    <script >
                                      CKEDITOR.replace('edtor1',{

                                      });
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="giatreem" class="col-sm-2 col-form-label">Giá trẻ em</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="giatreem" name="giatreem" placeholder="Nhập giá trẻ em">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="giatresosinh" class="col-sm-2 col-form-label">Giá trẻ sơ sinh</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="giatresosinh" name="giatresosinh" placeholder="Nhập giá trẻ sơ sinh">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gianguoilon" class="col-sm-2 col-form-label">Giá người lớn</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="gianguoilon" name="gianguoilon" placeholder="Nhập giá người lớn">
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                            <tr align="center">
                                <th>Mã loại tour</th>
                                <th>Mã tours</th>
                                <th>Tên tours</th>
                                <th>Tóm tắt</th>
                                <th>Nội dung</th>
                                <th>Giá trẻ em</th>
                                <th>Giá trẻ sơ sinh</th>
                                <th>Giá người lớn</th>
                               
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                               <tr>                                                                                                        
                                <td>LT001</td>
                                <td>TDL001</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                               

                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href=""  data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                                 <div class="modal fade" id="frmsuaTK" tabindex="-1" role="dialog" aria-labelledby="dangnhap" aria-hidden="true">
                                    <div class="modal-dialog modal-suatours" role="document" style="width: 1220px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dangnhap">SỬA TÀI KHOẢN</h5>
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
                                                                 <label for="loaiKS" class="col-sm-2 col-form-label">Loại tours</label>
                                                                    <div class="col-sm-10">
                                                                    <select class="selectpicker form-control" >
                                                                      <option>Du lịch biển</option>
                                                                      <option>Du lịch khám phá</option>
                                                                      <option>Du lịch nước ngoài</option>
                                                                      <option>Du lịch khám phá</option>
                                                                      <option>Du lịch nước ngoài</option>
                                                                      <option>Du lịch tâm linh</option>
                                                                      <option>Du lịch thành phố</option>
                                                                      <option>Du lịch trong nước</option>
                                                                       <option>Du lịch hàng ngày</option>
                                                                      <option>Du lịch tuần</option>
                                                                      <option>Tour khách hàng</option>
                                                                    </select>
                                                                  </div>
                                                                </div>
                                                                 <div class="form-group row">
                                                                  <label for="matours" class="col-sm-2 col-form-label">Mã tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="matours" name="matours" placeholder="THCM01">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="tentours" class="col-sm-2 col-form-label">Tên tours</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="tentours" name="tentours" placeholder="Nhập tên tours">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="tentours" class="col-sm-2 col-form-label">Tóm tắt tours</label>
                                                                  <div class="col-sm-10">
                                                                    <textarea rows="5" cols="155">
                                                                      
                                                                    </textarea>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="thongtinsp" class="col-sm-2 col-form-label">Nội dung</label>
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
                                                                  <label for="giatreem" class="col-sm-2 col-form-label">Giá trẻ em</label>
                                                                  <div class="col-sm-10">
                                                                     <input type="text" class="form-control" id="giatreem" name="giatreem" placeholder="Nhập giá trẻ em">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="giatresosinh" class="col-sm-2 col-form-label">Giá trẻ sơ sinh</label>
                                                                  <div class="col-sm-10">
                                                                     <input type="text" class="form-control" id="giatresosinh" name="giatresosinh" placeholder="Nhập giá trẻ sơ sinh">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <label for="gianguoilon" class="col-sm-2 col-form-label">Giá người lớn</label>
                                                                  <div class="col-sm-10">
                                                                     <input type="text" class="form-control" id="gianguoilon" name="gianguoilon" placeholder="Nhập giá người lớn">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                  <div class="offset-sm-2 col-sm-10">
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
                                <td>LT003</td>
                                <td>TDL004</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                              <tr>                                                                                                        
                                <td>LT002</td>
                                <td>TDL006</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href=""><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                              <tr>                                                                                                        
                                <td>LT001</td>
                                <td>TDL008</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>LT001</td>
                                <td>TDL009</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                 <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>LT001</td>
                                <td>TDL0010</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>LT001</td>
                                <td>TDL0013</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
                                <td class="center">
                                        <input type='submit' onclick='return confirm("Bạn thật sự muốn xoá?");' class='btn btn-danger' value='Xoá'>
                                 </form></td>
                                <td class="center">                           
                                    <a href="" data-toggle="modal" data-target="#frmsuaTK"><input type='submit' class='btn btn-success' value='Sửa'></a>
                                 </td>
                              </tr>
                               <tr>                                                                                                        
                                <td>LT001</td>
                                <td>TDL0016</td>
                                <td>Hồ Chí Minh - Đà Lạt</td>

                                <td>
                                  Du Lịch Đà Lạt 3 ngày khởi hành từ Sài Gòn giá tiết kiệm (T12/2017)
                                  ĐÀ LẠT KHÁM PHÁ VƯỜN RAU - TẶNG BUFFET TRƯA
                                  Khám phá vườn rau, vườn hoa - Cánh đồng cẩm tú cầu - Thác Datanla</td>
                                <td>
                                    Du Lịch Đà Lạt tháng 12 là thời điểm chuyển mình từ Thu sang Đông, nên thời gian này khí hậu Đà Lạt trở nên se lạnh cùng với hoa dã quỳ, cỏ tuyết nở rộ, đó chính là những lý do khiến ai cũng phải hối hả lên Đà Lạt. Tháng 12, Đà Lạt cũng là mùa đẹp nhất khiến ai cũng phải mải mê check-in quên cả lối về.
                                </td>
                                <td>500.000đ</td>
                                <td>0đ</td>
                                <td>1600.000đ</td>
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
