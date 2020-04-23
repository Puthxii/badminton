<script>
        $(function() {
          
  
            $('#compettype').change(function(){
                $('.colors').hide();
                $('#' + $(this).val()).show();
            });
 
            $('#regis-compet').validate({
                rules: {

                    'P_name': "required",
                    'P_surname': "required",
                    'P_dob': "required",
                    'club_name': "required",
                    'phone_num': "required",
                    'line': "required",
                    'Comp_type': "required",
                    't_name': "required",
                    'name1': "required",
                    'surname1': "required",
                    'dob1': "required",
                    'gender1': "required",
                    'his1': "required",
                    'name2': "required",
                    'surname2': "required",
                    'dob2': "required",
                    'gender2': "required",
                    'his2': "required",

                },
                messages: {

                    'P_name': "กรอกชื่อผู้สมัครการแข่งขัน",
                    'P_surname': "กรอกนามสกุลผู้สมัครการแข่งขัน",
                    'P_dob': "กรอก วัน/เดือน/ปี เกิด ผู้สมัครการแข่งขัน",
                    'club_name': "กรอกชื่อสโมสรผู้สมัครการแข่งขัน",
                    'phone_num': "กรอกเบอร์โทรผู้สมัครการแข่งขัน",
                    'line': "กรอกไลน์ผู้สมัครการแข่งขัน",
                    'Comp_type': "เลือกประเภทการแข่งขัน",
                    't_name': "กรอกชื่อทีม",
                    'name1': "กรอกชื่อนักกีฬาคนที่ 1",
                    'surname1': "กรอกนามสกุลนักกีฬาคนที่ 1",
                    'dob1': "กรอก วัน/เดือน/ปี เกิด นักกีฬาคนที่ 1",
                    'gender1': "กรอกเพศนักกีฬาคนที่ 1",
                    'his1': "กรอกประวัติการแข่งขันนักกีฬาคนที่ 1",
                    'name2': "กรอกชื่อนักกีฬาคนที่ 2",
                    'surname2': "กรอกชื่อเล่นนักกีฬาคนที่ 2",
                    'dob2': "กรอก วัน/เดือน/ปี เกิด นักกีฬาคนที่ 2",
                    'gender2': "กรอกเพศนักกีฬาคนที่ 2",
                    'his2': "กรอกประวัติการแข่งขันนักกีฬาคนที่ 2",

                }
            });

        });
    </script>