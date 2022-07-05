<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <!-- // -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">


    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">知识仓库</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                                <!-- //zhanxian zhishicangku -->
                                <?php 
                                    $files;
                                    class fileinfo
                                    {
                                        public $filename;
                                    }
                                    $dir = "../../Knowledge_warehouse/";
                                    // echo getcwd();
                                    $handler = opendir($dir);
                                    while(($filename=readdir($handler))==true){
                                        if($filename=="." || $filename=="..")continue;
                                        // echo $filen  ame;
                                        $temp=new fileinfo();
                                        $temp->filename=$filename;
                                        //
                                        // var_dump($filename);
                                        $dir_=  "../../Knowledge_warehouse/$filename";
                                        
                                        //
                                        $temp->filedate=date('c',filemtime($dir_));
                                        $temp->filesize=filesize($dir_);
                                        $files[]=$temp;
                                        // echo filesize($dir_);
                                    }
                                    closedir($handler);
                                    echo '<div class="uk-card uk-card-body uk-card-default" style="margin:20px"><table class="uk-table uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">文件名</th>
                                            <th style="text-align: center;">修改时间</th>
                                            <th style="text-align: center;">文件大小</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    echo '<tr><td><a class="" href="../../Knowledge_warehouse/">..</a><br></td><td></td><td></td></tr>';
                                    foreach($files as $fileinfo){
                                        echo'<tr>';
                                        echo '<td><a class="" href="../../Knowledge_warehouse/'.$fileinfo->filename.'">'.$fileinfo->filename.'</a></td>';
                                        echo '<td>'.$fileinfo->filedate.'</td>';
                                        echo '<td>'.$fileinfo->filesize.'bytes</td>';
                                        echo'</tr>';
                                    }
                                    echo '    </tbody>
                                    </table></div>';
                                    echo '<!-- UIkit CSS -->
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />

                                    <!-- UIkit JS -->
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>';

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- introduce -->
                <div class="span12">
                    <h1 class="page-title">知识仓库简介</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                                知识仓库起初来源于数据仓库（Data Warehouse），现代电子技术的日益发展，使基于计算机技术的数据库技术得以长足发展。 近年来，人们对数据库的研究方向由原来单一的日常事务电子化发展成对数据的阵系结构，数据的含义进行研究。 公认的数据库之父H.W.Inmon给数据仓库下的定义是：数据仓库是集成的、面向主题的，用于决策支持的数据库集合。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../primordial_js/lanhuo.js"></script>

</html>