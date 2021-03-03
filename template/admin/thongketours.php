
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "THỐNG KÊ TOURS"
  },
  axisY: {
    title: "Số lượng khách"
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    legendText: "Tỉnh - Thành phố",
    dataPoints: [      
      { y: 300878, label: "Đà Lạt" },
      { y: 266455,  label: "Quy Nhơn" },
      { y: 169709,  label: "Canada" },
      { y: 158400,  label: "Sip" },
      { y: 142503,  label: "Huế" },
      { y: 101500, label: "Sóc Trăng" },
      { y: 97800,  label: "Bến Tre" },
      { y: 80000,  label: "Đà Nẵng" }
    ]
  }]
});
chart.render();

}
</script>
   <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row ">
            <div class="col">
              <form  class="form-inline row " style="margin-top: 100px;">
                  <div class="form-group col-6">
                    <label for="tungay" class="col-2 col-form-label">Từ ngày</label>
                    <div class="col-10">
                      <input class="form-control " type="date" value="2011-08-19" id="tungay"  style="margin-right: 30px">
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="denngay" class="col-2 col-form-label">Đến ngày</label>
                    <div class="col-10">
                      <input class="form-control " type="date" value="2011-08-19" id="denngay" >
                    </div>
                  </div>

                  
              </form>
            </div>
            
          </div>
            <div class="row">
                <div id="chartContainer" style="height: 370px; width: 100%; margin-top: 100px"></div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
