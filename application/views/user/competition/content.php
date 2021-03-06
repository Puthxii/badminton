<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        สมัครการแข่งขัน
        <small>walailak university</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">การแข่งขันแบดมินตัน : ยืดเส้นสู้โควิด-19</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="regis-compet">
                        <div class="box-body">
                        <input type="hidden" name="id" value="<?php echo $user_data->id; ?>">
                            <div class="col-lg-3">
                                <label for="P_name">ชื่อ<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="P_name" name="P_name" placeholder="ชื่อ" value="<?php echo $user_data->name; ?>"  required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="P_surname">นามสกุล<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="P_surname" name="P_surname" placeholder="นามสกุล" value="<?php echo $user_data->lastname; ?>" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="P_dob">วัน เดือน ปีเกิด<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="P_dob" name="P_dob" placeholder="วัน เดือน ปีเกิด" value="<?php echo $user_data->birthday; ?>" required>
                                <br/>
                            </div>

                            <div class="col-lg-3">
                                <label for="club_name">สโมสร<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="club_name" name="club_name" placeholder="สโมสร" value="<?php echo $user_data->club; ?>" required>
                                <br/>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone_num">โทร<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="โทร" value="<?php echo $user_data->phone; ?>" required>
                                <br/>
                            </div>
                            <div class="col-lg-6">
                                <label for="line">line ID<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="line" name="line" placeholder="id" value="<?php echo $user_data->line_id; ?>" required>
                                <br/>
                            </div>
                            <div class="col-lg-12">
                                <label>รุ่น</label>
                                <select class="form-control" id="compettype" name="compettype">
                                    <option  value="youth">รุ่นเยาวชน</option>
                                    <option value="people">รุ่นประชาชน</option>
                                </select>
                            </div>

                            <!-- <div class="button dropdown"> 
                            <select id="colorselector">
                                <option value="1">Red</option>
                                <option value="2">Yellow</option>
                                <option value="blue">Blue</option>
                            </select>
                            </div> -->

                            <div class="output">
                                <div id="youth" class="colors">
                                    <div class="col-lg-6">
                                    <label for="Comp_type1">ประเภทการแข่งขันเดี่ยว<sup class="error">*</sup></label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 8 ปี (U9) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 10 ปี (U11) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 12 ปี (U13) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 14 ปี (U15) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 16 ปี (U17) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <br/>
                                </div>

                                <div class="col-lg-6">
                                    <label for="Comp_type2">ประเภทการแข่งขันคู่<sup class="error">*</sup></label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 8 ปี (U9) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 10 ปี (U11) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 12 ปี (U13) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 14 ปี (U15) เกิดปีพศ.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">รุ่นอายุไม่เกิน 16 ปี (U17) เกิดปีพศ.
                                        </label>
                                    </div>
                                </div>
                                </div>

                                <div id="people" class="colors" >
                                <div class="col-lg-12">
                            </div>

                           

                            <div class="col-lg-12">
                                <label>ประเภทรุ่นการแข่งขัน</label>
                                <select class="form-control" id="compet_typeduo" name="compet_typeduo">
                                    <option>ประเภทคู่ รุ่นมือ N มือใหม่</option>
                                    <option>ประเภทคู่ รุ่นมือ S- มือสมัครเล่น(ใหม่)</option>
                                    <option>ประเภทคู่ รุ่นมือ S+ มือสมัครเล่น(เก่า)</option>
                                    <option>ประเภทคู่ รุ่นมือ P- ประชาชนทั่วไป</option>
                                    <option>ประเภทคู่ รุ่นมือ P+C ประชาชนมือแข่งขัน/นักกีฬา</option>
                                </select>
                            </div>

                            <div class="col-lg-12">
                                <label for="t_name">ชื่อทีม</label>
                                <input type="text" class="form-control" id="t_name1" name="t_name1" placeholder="ชื่อทีม" required>
                                <br/>
                            </div>

                            <h3> นักกีฬาคนที่ 1</h3>

                            <div class="col-lg-3">
                                <label for="name1">ชื่อ<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="name1" name="name1" placeholder="ชื่อ" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="surname1">นามสกุล<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="surname1" name="surname1" placeholder="นามสกุล" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="dob1">วัน เดือน ปีเกิด<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="dob1" name="dob1" placeholder="วัน เดือน ปีเกิด" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="gender1">เพศ<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="gender1" name="gender1" placeholder="เพศ" required>
                                <br/>
                            </div>
                            <div class="col-lg-12">
                                <label for="his1">ประวัติการแข่งขันในปีล่าสุดหรือผลงานที่ผ่านมาของนักกีฬาคนที่ 1<sup class="error">*</sup></label>
                                <textarea class="form-control" id="his1" name="his1" rows="3" required></textarea>
                            </div>

                            <h3>นักกีฬาคนที่ 2</h3>

                            <label for="search">ค้นหานักกีฬาคนที่ 2<sup class="error"></sup></label>
                            <form class="search-form">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search"><br/>
                                    <div class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-warning btn-flat">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>                   
                            </form>
                            

                            <div class="col-lg-3">
                                <label for="name1">ชื่อ<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="name1" name="name1" placeholder="ชื่อ" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="surname2">นามสกุล<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="surname2" name="surname2" placeholder="นามสกุล" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="dob2">วัน เดือน ปีเกิด<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="dob2" name="dob2" placeholder="วัน เดือน ปีเกิด" required>
                                <br/>
                            </div>
                            <div class="col-lg-3">
                                <label for="gender2">เพศ<sup class="error">*</sup></label>
                                <input type="text" class="form-control" id="gender2" name="gender2" placeholder="เพศ" required>
                                <br/>
                            </div>
                            <div class="col-lg-12">
                                <label for="his2">ประวัติการแข่งขันในปีล่าสุดหรือผลงานที่ผ่านมาของนักกีฬาคนที่ 2<sup class="error">*</sup></label>
                                <textarea class="form-control" id="his2" name="his2" rows="3" required></textarea>
                            </div>
                                </div>
                               
                            </div>

                            

                            <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
                            <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                        <a href="<?php echo base_url('controllers/RegisterCompetition/index') ?>" type="button" class="btn btn-default">ยกเลิก</a>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<style>
    .colors { display: none; }
</style>