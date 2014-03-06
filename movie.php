<?php
$title = 'Movies';
$movie_num = $_GET['m'];
$con=mysqli_connect("mysql.hostinger.in","u281142704_spark","sparkspark","u281142704_spark");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM movies
WHERE mid=" . $movie_num);
$movie_name = "";
$release_date = "";
$running_time = "";
$director = "";
$genre = "";
$cast = "";
$synopsis = "";
if($row = mysqli_fetch_array($result))
{
	$movie_title = $row['mname'];
	$release_date = $row['release'];
	$running_time = $row['runningtime'];
	$director = $row['director'];
	$genre = $row['genre'];
	$cast = $row['cast'];
	$synopsis = $row['synopsis'];
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require('includes/head.php'); ?>
	</head>
	<body>
		<div class="main">
			<!-- Header -->
			<?php require('includes/header.php'); ?>
			<!-- Header close -->
			<!-- Content body -->
			<div class="content">
				<div class="col fleft movie-info">
					<h2><?php echo $movie_title; ?></h2>
					<img alt="picture" src="images/posters/<?php echo $movie_num; ?>.jpg" id="movie-poster" />
					<div id="movie-details">
						<div><b>Release Date</b><em><?php echo $release_date; ?></em></div>
						<div><b>Running Time</b><em><?php echo $running_time; ?></em></div>
						<div><b>Director</b><em><?php echo $director; ?></em></div>
						<div><b>Genre</b><em><?php echo $genre; ?></em></div>
						<div><b>Cast</b><em><?php echo $cast; ?></em></div>
					</div>
					<div class="clearfix">
					<h4>Synopsis</h4>
					<em><?php echo $synopsis; ?></em>
					</div>
				</div>
				<div class="col fright show-times">
					<?php
					if ( ((int) $movie_num) < 4)
					echo '<h2>Show Times</h2>
					<script type="text/javascript">
					function bookTickets(_t) {
						t = _t;
						window.location.href = "booking.php?m=" + m + "&d=" + d + "&t=" + t;
					}
					</script>
					<a onclick="bookTickets(1)"><div>10:10</div></a>
					<a onclick="bookTickets(2)"><div>1:15</div></a>
					<a onclick="bookTickets(3)"><div>4:20</div></a>
					<a onclick="bookTickets(4)"><div>7:30</div></a>
					<a onclick="bookTickets(5)"><div>10:40</div></a>
					<div class="clearfix"></div>'; ?>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- Content body close -->
			<!-- Footer -->
			<?php require('includes/footer.php'); ?>
			<!-- Footer close -->
		</div>
	</body>
</html>