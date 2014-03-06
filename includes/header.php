
			<div class="header">
				<a href="register.php" style="position: absolute; top: 5px; right: 0px;">Register / Login</a>
				<a href="index.php"><div class="header-logo">
					<img alt="picture" class="header-logo-img" src="images/logo.gif" />
					<div class="header-cinema">CINEMA</div>
				</div></a>
				<div class="header-quick-book">
					<div class="dropdown-div"><!-- Movie Name -->
						<input type="text" class="quickbook-input-box" id="select-movie-name" placeholder="Select Movie" readonly>
						<img alt="picture" class="down-arrow" src="images/down-arrow.png" onClick="toggleMovieDropdown()">
						<div class="dropdown-list" id="dropdown-movie-list">
							<ul>
								<li onClick="selectedMovie(this.innerHTML,1)">Dhoom: 3 (U/A)</li>
								<li onClick="selectedMovie(this.innerHTML,2)">The Hobbit (3D) (U/A)</li>
								<li onClick="selectedMovie(this.innerHTML,3)">Frozen (U)</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="dropdown-div"><!-- Movie Date -->
						<input type="text" class="quickbook-input-box" id="select-movie-date" placeholder="Select Date" readonly>
						<img alt="picture" class="down-arrow" src="images/down-arrow.png" onClick="toggleDateDropdown()">
						<div class="dropdown-list" id="dropdown-date-list">
							<ul>
								<li onClick="selectedDate(this.innerHTML,1)">Wednesday, 25th December</li>
								<li onClick="selectedDate(this.innerHTML,2)">Thursday, 26th December</li>
								<li onClick="selectedDate(this.innerHTML,3)">Friday, 27th December</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<a href="javascript:window.location.href='movie.php?m='+m+'&d='+d"><div class="quick-book-submit">Book Now</div></a>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>

			</div>