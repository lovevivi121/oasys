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
<style type="text/css">
	a:link {

color:#000000;
text-decoration:none;
}
a:visited {
color:blue;
text-decoration:none;
}
a:hover {
color:#FF0000;
text-decoration:none;
}
a:active {
color:#FFFFFF;
text-decoration:none;
}
</style>
<center>
</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">新闻公告</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                            <?php
		$conn = mysqli_connect("localhost", "root", "123456", "news", "33066") or die("链接失败！");
		mysqli_query($conn, "set names utf8");

		$sql = "select *from news order by time desc";
		$result = mysqli_query($conn, $sql);

		while ($row = mysqli_fetch_array($result)) {
		?>

			<form method="post">

				<table width="90%">

					<tr>
						<!-- <td width="10%" align="center"><?php echo $row["id"]; ?></td> -->
						<td width="50%" align="center">
							<h1><a href="main.php?id=<?php echo $row["id"]; ?>" target="_self">
									<?php
									echo $row["title"];
									?>
								</a></h1>
						</td>
						<td width="30%" align="center"><?php echo $row["time"]; ?></td>
					</tr>
				</table>
			</form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
<script src="../../primordial_js/lanhuo.js"></script>
<?php
		} ?>
        </center>