<!DOCTYPE html>
<html lang="en">
<head>

<title>Form Registrasi</title>
  <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /> -->

<!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <!-- <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/daterangepicker/daterangepicker.css"> -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css">

  <!-- timepicker.js -->
  <link href="//cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css"  rel="stylesheet">

</head>
<body style="background-color: #ecf0f5"> 

<?php 
  $bintang = '<span style="color: red">*</span>';
 ?>



<?php echo validation_errors(); ?>

<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      

      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Form Pendaftaran Santri</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="<?=base_url('form');?>">
          <div class="box-body">           
            

            <div class="form-group">
              <label for="fullname" class="col-sm-2 control-label">Nama Lengkap<?=$bintang;?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email<?=$bintang;?></label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="kota_asal" class="col-sm-2 control-label">Kota Asal<?=$bintang;?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kota_asal" id="kota_asal" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="tmpt_lahir" class="col-sm-2 control-label">Tempat Lahir<?=$bintang;?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir<?=$bintang;?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="telepon" class="col-sm-2 control-label">Telepon/HP<?=$bintang;?></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="" required>
              </div>


          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
            <!-- <button type="submit" class="btn btn-info pull-right" style="visibility: hidden;">Submit</button> -->
            <!-- <button type="submit" class="btn btn-info" style="visibility: hidden;">Submit</button> -->
            <button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
            
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->

    </div>
  </div>
</div>


      

      




  


  <!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->


<!-- Include Required Prerequisites datepicker -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> -->
 
<!-- Include Date Range Picker -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> -->


<!-- jQuery 2.2.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/jquery.inputmask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.date.extensions.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.extensions.min.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?=base_url('assets/');?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?=base_url('assets/');?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('assets/');?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/');?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/');?>dist/js/demo.js"></script>

<script type="text/javascript" src="<?=base_url('assets/wickedpicker/dist/');?>wickedpicker.min.js"></script>

<!-- timepicker.js -->
<script src="//cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#date_arrival').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
      // timePicker24Hour : true
      // use24hours: true
    });

    // var optionsa = { now: "12:35" //hh:mm 24 hour format only, defaults to current time twentyFour: false, //Display 24 hour format, defaults to false upArrow: 'wickedpicker__controls__control-up', //The up arrow class selector to use, for custom CSS downArrow: 'wickedpicker__controls__control-down', //The down arrow class selector to use, for custom CSS close: 'wickedpicker__close', //The close class selector to use, for custom CSS hoverState: 'hover-state', //The hover state class to use, for custom CSS title: 'Timepicker', //The Wickedpicker's title, showSeconds: false, //Whether or not to show seconds, secondsInterval: 1, //Change interval for seconds, defaults to 1  , minutesInterval: 1, //Change interval for minutes, defaults to 1 beforeShow: null, //A function to be called before the Wickedpicker is shown show: null, //A function to be called when the Wickedpicker is shown clearable: false, //Make the picker's input clearable (has clickable "x") 
    // };

    // $('.timepicker2').wickedpicker(optionsa);

  });

</script>

<script type="text/javascript">
  var timepicker = new TimePicker(['clock_arrival', 'field2'], {
  theme: 'dark', // or 'blue-grey'
  lang: 'en' // 'en', 'pt' for now
});
timepicker.on('change', function(evt){
  console.info(evt);

  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;
});
</script>

</body>
</html>