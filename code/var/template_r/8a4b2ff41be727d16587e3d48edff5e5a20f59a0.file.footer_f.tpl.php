<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-26 09:42:43
         compiled from "F:\www\angular\code\tpl\oa\footer_f.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316505860759383a894-99207139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4b2ff41be727d16587e3d48edff5e5a20f59a0' => 
    array (
      0 => 'F:\\www\\angular\\code\\tpl\\oa\\footer_f.tpl',
      1 => 1480925440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316505860759383a894-99207139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5860759386d520_80494675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5860759386d520_80494675')) {function content_5860759386d520_80494675($_smarty_tpl) {?><!-- jQuery -->

<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="/js/fastclick.js"><?php echo '</script'; ?>
>
<!-- NProgress -->
<?php echo '<script'; ?>
 src="/js/nprogress.js"><?php echo '</script'; ?>
>
<!-- Chart.js -->
<?php echo '<script'; ?>
 src="/js/Chart.min.js"><?php echo '</script'; ?>
>
<!-- gauge.js -->
<?php echo '<script'; ?>
 src="/js/gauge.min.js"><?php echo '</script'; ?>
>
<!-- bootstrap-progressbar -->
<?php echo '<script'; ?>
 src="/js/bootstrap-progressbar.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="/js/icheck.min.js"><?php echo '</script'; ?>
>
<!-- Skycons -->
<?php echo '<script'; ?>
 src="/js/skycons.js"><?php echo '</script'; ?>
>
<!-- Flot -->
<?php echo '<script'; ?>
 src="/js/jquery.flot.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.flot.pie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.flot.time.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.flot.stack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.flot.resize.js"><?php echo '</script'; ?>
>
<!-- Flot plugins -->
<?php echo '<script'; ?>
 src="/js/jquery.flot.orderBars.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.flot.spline.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/curvedLines.js"><?php echo '</script'; ?>
>
<!-- DateJS -->
<?php echo '<script'; ?>
 src="/js/date.js"><?php echo '</script'; ?>
>
<!-- JQVMap -->
<?php echo '<script'; ?>
 src="/js/jquery.vmap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.vmap.world.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.vmap.sampledata.js"><?php echo '</script'; ?>
>
<!-- bootstrap-daterangepicker -->
<?php echo '<script'; ?>
 src="/js/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- Dropzone.js -->
<?php echo '<script'; ?>
 src="/js/dropzone.min.js"><?php echo '</script'; ?>
>
<!-- Custom Theme Scripts -->
<?php echo '<script'; ?>
 src="/js/custom.min.js"><?php echo '</script'; ?>
>

<!-- Flot -->
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
<?php echo '</script'; ?>
>
<!-- /Flot -->

<!-- JQVMap -->
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
    });
<?php echo '</script'; ?>
>
<!-- /JQVMap -->

<!-- Skycons -->
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var icons = new Skycons({
                    "color": "#73879C"
                }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    });
<?php echo '</script'; ?>
>
<!-- /Skycons -->

<!-- Doughnut Chart -->
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        var options = {
            legend: false,
            responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: options
        });
    });
<?php echo '</script'; ?>
>
<!-- /Doughnut Chart -->

<!-- bootstrap-daterangepicker -->
<?php echo '<script'; ?>
>
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
<?php echo '</script'; ?>
>
<!-- /bootstrap-daterangepicker -->

<!-- gauge.js -->
<?php echo '<script'; ?>
>
    var opts = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
            length: 0.75,
            strokeWidth: 0.042,
            color: '#1D212A'
        },
        limitMax: 'false',
        colorStart: '#1ABC9C',
        colorStop: '#1ABC9C',
        strokeColor: '#F0F3F3',
        generateGradient: true
    };
    var target = document.getElementById('foo'),
            gauge = new Gauge(target).setOptions(opts);

    gauge.maxValue = 6000;
    gauge.animationSpeed = 32;
    gauge.set(3200);
    gauge.setTextField(document.getElementById("gauge-text"));
<?php echo '</script'; ?>
>
<!-- /gauge.js -->
</body>
</html><?php }} ?>
