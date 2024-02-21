<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/dist/css/adminlte.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/daterangepicker/daterangepicker.css') }}">

    {{-- <link href="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script> --}}
</head>

<body class="hold-transition register-page">
    <p>
        <img src = "{{ asset('assets/image/energeek2 1.png') }}" />
    </p>
    <div class="register-box">
        <div class="card  card-primary">
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="http://127.0.0.1:8000/api/candidate/create" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                            placeholder="Cth: Khoirul Huda">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control select2" name="job_id" id="jabatan" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telepon</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                            placeholder="Cth: 0812332131">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            placeholder="Cth: mail@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="year" class="form-control datetimepicker-input"
                                data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Skill</label>
                        <select class="select2" multiple="multiple" name="skill_set[]" id="skill" data-placeholder="Select a State"
                            style="width: 100%;">
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Apply</button>
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery -->
        <script src="{{ asset('assets/adminLTE/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/adminLTE/dist/js/adminlte.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('assets/adminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ asset('assets/adminLTE/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/adminLTE/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
        <!-- date-range-picker -->
        <script src="{{ asset('assets/adminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('assets/adminLTE/dist/js/demo.js') }}"></script>
        <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                $('#jabatan').select2({
                    ajax: {
                        method: 'GET',
                        url: 'http://127.0.0.1:8000/api/job',
                        dataType: 'json',
                        data: function(params) {
                            var query = {
                                search: params.term,
                                type: 'user_search'
                            }
                            return query;
                        },
                        processResults: function(data) {
                            console.log(data);
                            return {
                                // results: data,
                                results: $.map(data, function(item){
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            }
                        },
                    },
                    cache: true,
                    placeholder: 'Jabatan',
                });
                $('#skill').select2({
                    ajax: {
                        method: 'GET',
                        url: 'http://127.0.0.1:8000/api/skill',
                        dataType: 'json',
                        data: function(params) {
                            var query = {
                                search: params.term,
                                type: 'user_search'
                            }
                            return query;
                        },
                        processResults: function(data) {
                            console.log(data);
                            return {
                                // results: data,
                                results: $.map(data, function(item){
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            }
                        },
                    },
                    cache: true,
                    placeholder: 'Jabatan',
                });

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                // $('#reservationdate').datetimepicker({
                //     format: 'L'
                // });
                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                            'MMMM D, YYYY'))
                    }
                )

                //Timepicker
                // $('#timepicker').datetimepicker({
                //     format: 'LT'
                // })

                //Initialize Select2 Elements
                // $('.select2bs4').select2({
                //     theme: 'bootstrap4'
                // })
            })
        </script>
</body>

</html>
