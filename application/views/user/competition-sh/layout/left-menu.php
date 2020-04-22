 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>เมนู</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url(); ?>RegisterCompetition/"><i class="fa fa-circle-o"></i>สมัครการแข่งขัน</a></li>
            <li ><a href="<?php echo base_url(); ?>RegisterCompetition/editCompetition"><i class="fa fa-circle-o"></i>แก้ไขข้อมูลการสมัคร</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>Competition"><i class="fa fa-circle-o"></i>รายการแข่งขัน</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>