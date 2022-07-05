<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">
    

    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <!-- //报表图js -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <script src="../../primordial_js/chart.js"></script>

</head>

<body>
<?php                     
            //连接数据库
            $con = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
            mysqli_set_charset($con, 'utf8mb4');
            //查找表
            $sql = "SELECT * FROM sale";
            $result = mysqli_query($con, $sql);
            $arr = array();
            //数据存入数组里
            if($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    $arr[]=$row[1];
                }  
            }     
?>
    <div id="content"> 
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box-holder">
                                <div class="span5" style="margin-left: 10px;">
                                    <h1 class="page-title">销售总额</h1>
                                    <div class="box-container">
                                        <div class="box ">
                                            <div class="box" >
                                            <div id="container" style="width: 100%; height: 100%; margin: 0 auto">
                                            <script language="JavaScript">
                                            $(document).ready(function() {
                                            var title = {
                                                text: ''   
                                            };
                                            var subtitle = {
                                                text: ' '
                                            };
                                            var xAxis = {
                                                categories: ['a', 'b', 'c', 'd', 'e', 'f',
                                                    'g', 'h', 'i', 'j', 'k', 'l']
                                            };
                                            var yAxis = {
                                                title: {
                                                    
                                                },
                                                plotLines: [{
                                                    value: 0,
                                                    width: 1,
                                                    color: '#808080'
                                                }]
                                            };   

                                            var tooltip = {
                                            
                                            }

                                            var legend = {
                                                layout: 'vertical',
                                                align: 'right',
                                                verticalAlign: 'middle',
                                                borderWidth: 0
                                            };

                                            var series =  [
                                                {
                                                    name: ' ',
                                                    data: [
                                                        //存入数据
                                                        5, 10, 3, 6, 20, 24, 25, 26, 25, 26, 28, 30
                                                        ]
                                                }, 
                                            
                                            ];

                                            var json = {};

                                            json.title = title;
                                            json.subtitle = subtitle;
                                            json.xAxis = xAxis;
                                            json.yAxis = yAxis;
                                            json.tooltip = tooltip;
                                            json.legend = legend;
                                            json.series = series;

                                            $('#container').highcharts(json);
                                            });
                                            </script>
                                            </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="span5" style="margin-left: 73px;">
                                    <h1 class="page-title">销售笔数</h1>
                                    <div class="box-container">
                                        <div class="box-holder">
                                            <div class="box">
                                            <div id="container2" style="width: 550px; height: 400px; margin: 0 auto"></div>
                                                <script language="JavaScript">
                                                $(document).ready(function() {  
                                                var chart = {
                                                    type: 'bar'
                                                };
                                                var title = {
                                                    text: '销售笔数 '   
                                                };
                                                var subtitle = {
                                                    text: ''    
                                                };
                                                var xAxis = {
                                                    categories: ['1月', '2月', '3月', '4月', '5月'],
                                                    title: {
                                                        text: null
                                                    }
                                                };
                                                var yAxis = {
                                                    min: 0,
                                                    title: {
                                                        text: 'Population (millions)',
                                                        align: 'high'
                                                    },
                                                    labels: {
                                                        overflow: 'justify'
                                                    }
                                                };
                                                var tooltip = {
                                                    valueSuffix: ' millions'
                                                };
                                                var plotOptions = {
                                                    bar: {
                                                        dataLabels: {
                                                            enabled: true
                                                        }
                                                    }
                                                };
                                                var legend = {
                                                    layout: 'vertical',
                                                    align: 'right',
                                                    verticalAlign: 'top',
                                                    x: -40,
                                                    y: 100,
                                                    floating: true,
                                                    borderWidth: 1,
                                                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                    shadow: true
                                                };
                                                var credits = {
                                                    enabled: false
                                                };
                                                
                                                var series= [
                                                        {
                                                            name: ' ',
                                                            data: [973, 914, 4054, 732, 34]      
                                                        }
                                                ];     
                                                    
                                                var json = {};   
                                                json.chart = chart; 
                                                json.title = title;   
                                                json.subtitle = subtitle; 
                                                json.tooltip = tooltip;
                                                json.xAxis = xAxis;
                                                json.yAxis = yAxis;  
                                                json.series = series;
                                                json.plotOptions = plotOptions;
                                                json.legend = legend;
                                                json.credits = credits;
                                                $('#container2').highcharts(json);
                                                
                                                });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 销售趋势 -->
                <div class="span12">
                    <h1 class="page-title">销售趋势</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                            <div id="container1" style="width: 600px; height: 500px; margin: 0 auto"></div>
                                <script language="JavaScript">
                                $(document).ready(function() {
                                var title = {
                                    text: ''   
                                };
                                var subtitle = {
                                    text: ''
                                };
                                var xAxis = {
                                    categories: ['1', '2', '3', '4', '5', '6',
                                        '7', '8', '9', '10', '11', '12']
                                };
                                var yAxis = {
                                    title: {
                                        
                                    },
                                    plotLines: [{
                                        value: 0,
                                        width: 1,
                                        color: '#808080'
                                    }]
                                };   

                                var tooltip = {
                                   
                                }

                                var legend = {
                                    layout: 'vertical',
                                    align: 'right',
                                    verticalAlign: 'middle',
                                    borderWidth: 0
                                };

                                var series =  [
                                    {
                                        
                                        data: [
                                            //存入数据
                                            <?php echo "$arr[0]," ?>
                                            <?php echo "$arr[1]," ?>
                                            <?php echo "$arr[2]," ?>
                                            <?php echo "$arr[3]," ?>
                                            <?php echo "$arr[4]," ?>
                                            <?php echo "$arr[5]," ?>
                                            <?php echo "$arr[6]," ?>
                                            <?php echo "$arr[7]," ?>
                                            <?php echo "$arr[8]," ?>
                                            <?php echo "$arr[9]," ?>
                                            <?php echo "$arr[10]," ?>
                                            <?php echo "$arr[11]" ?>
                                            ]
                                    }, 
                                   
                                ];

                                var json = {};

                                json.title = title;
                                json.subtitle = subtitle;
                                json.xAxis = xAxis;
                                json.yAxis = yAxis;
                                json.tooltip = tooltip;
                                json.legend = legend;
                                json.series = series;

                                $('#container1').highcharts(json);
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../primordial_js/lanhuo.js"></script>
</body>

</html>