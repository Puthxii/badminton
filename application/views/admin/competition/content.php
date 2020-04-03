<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Register for the competition
        <small>walailak university</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">การสมัคเข้าแข่งขัน</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>ชื่อ - สกุล</th>
                  <th>วันที่</th>
                  <th>ประเภทการแข่งขัน</th>
                  <th>สถานะ</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>สมชาย เกิดก้อง</td>
                  <td>11-7-2020</td>
                  <td>ประเภทเยาวชน</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>บุรินทร์ พันธ์ชาติ</td>
                  <td>11-7-2020</td>
                  <td>ประเภทเยาวชน</td>
                  <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>ธีนพัฒ์ รัตนวงศ์</td>
                  <td>11-7-2020</td>
                  <td>ประเภทประชาชน</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>จินนา วันดี</td>
                  <td>11-7-2020</td>
                  <td>ประเภทประชาชน</td>
                  <td><span class="label label-danger">Denied</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
            </div>
    </section>
    <!-- /.content -->
</div>
    <!-- /.content-wrapper -->

    <script>
        $(function() {
            $('#regis-compet').validate({
                rules: {
                    'P_name': "required",
                    'P_dob': "required",
                    'club_name': "required",
                    'phone_num': "required",
                    'line': "required",
                    'Comp_type': "required",
                    't_name': "required",
                    'name1': "required",
                    'nickname1': "required",
                    'dob1': "required",
                    'gender1': "required",
                    'his1': "required",
                    'name2': "required",
                    'nickname2': "required",
                    'dob2': "required",
                    'gender2': "required",
                    'his2': "required",
                },
                messages: {
                    'P_name': "กรอกชื่อผู้สมัครการแข่งขัน",
                    'P_dob': "กรอก วัน/เดือน/ปี เกิด ผู้สมัครการแข่งขัน",
                    'club_name': "กรอกชื่อสโมสรผู้สมัครการแข่งขัน",
                    'phone_num': "กรอกเบอร์โทรผู้สมัครการแข่งขัน",
                    'line': "กรอกไลน์ผู้สมัครการแข่งขัน",
                    'Comp_type': "เลือกประเภทการแข่งขัน",
                    't_name': "กรอกชื่อทีม",
                    'name1': "กรอกชื่อนักกีฬาคนที่ 1",
                    'nickname1': "กรอกชื่อเล่นนักกีฬาคนที่ 1",
                    'dob1': "กรอก วัน/เดือน/ปี เกิด นักกีฬาคนที่ 1",
                    'gender1': "กรอกเพศนักกีฬาคนที่ 1",
                    'his1': "กรอกประวัติการแข่งขันนักกีฬาคนที่ 1",
                    'name2': "กรอกชื่อนักกีฬาคนที่ 2",
                    'nickname2': "กรอกชื่อเล่นนักกีฬาคนที่ 2",
                    'dob2': "กรอก วัน/เดือน/ปี เกิด นักกีฬาคนที่ 2",
                    'gender2': "กรอกเพศนักกีฬาคนที่ 2",
                    'his2': "กรอกประวัติการแข่งขันนักกีฬาคนที่ 2",
                }
            });
        });
    </script>