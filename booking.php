<?php
$title = 'Booking';
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require('includes/head.php'); ?>
		<script type="text/javascript">
		var seats = 0;
		var cost = 0;
		function closeTicketWindow() {
            document.getElementById('ticket-confirmation').style.display='none';
            document.getElementById('dark-overlay').style.display='none';
		}
		function toggleSeat(seat) {
			if(seat.style.backgroundColor == "green")
				seat.style.backgroundColor = "#fff";
			else
				seat.style.backgroundColor = "green";
		}
		function createReceipt() {
			seats = countSeats();
			if (seats < 1)
			{
				alert("No seats selected.");
				return false;
			}
			cost = seats * 100;
			document.getElementById('ticket-todays-date').innerHTML = calcDateFormat(new Date());
			document.getElementById('ticket-number-seats').innerHTML = seats;
			document.getElementById('ticket-movie-name').innerHTML = document.getElementById('dropdown-movie-list').children[0].children[m-1].innerHTML;
			document.getElementById('ticket-movie-date').innerHTML = document.getElementById('dropdown-date-list').children[0].children[d-1].innerHTML;
			var movTime = "10:10 AM";
			switch(t) {
				case '1': movTime = "10:10 AM";
				break;
				case '2': movTime = "1:15 PM";
				break;
				case '3': movTime = "4:20 PM";
				break;
				case '4': movTime = "7:30 PM";
				break;
				case '5': movTime = "10:40 PM";
				break;
			
			}
			document.getElementById('ticket-movie-time').innerHTML = movTime;
			document.getElementById('total-cost').innerHTML = "Total: Rs. " + cost;
			document.getElementById('dark-overlay').style.display="block";
			document.getElementById('ticket-confirmation').style.display="block";
		}
		function countSeats() {
			count = 0;
			seats = document.getElementById("seat-selector");
			rows = seats.children.length - 2;
			cols = seats.children[0].children.length - 1;
			for(i = 0;i < rows; i++) {
				for(j = 0;j < cols; j++) {
					if (seats.children[i].children[j].style.backgroundColor == "green")
						count++;
				}
			}
			return count;		
		}
		function printTicket() {
			var printWindow = window.open('','Print Receipt','width=300,height=320');
			printWindow.document.open();
			str = '<html><head><title>Print Ticket Receipt</title><style>*{margin: 0;padding: 0;} body{font-family: Calibri, sans-serif;} #ticket-confirmation .ticket-content div {border-bottom: 1px dotted black;}#ticket-confirmation div span{text-align: right;float: right;}</style></head><body onload="window.print()" id="ticket-confirmation" style="height: 300px;width: 300px;background-color: white;">'
			str = str + document.getElementById('ticket-body').innerHTML;
			printWindow.document.write(str);
			printWindow.document.close();
		}
		</script>
	</head>
	<body>
		<div class="main">
			<!-- Header -->
			<?php require('includes/header.php'); ?>
			<!-- Header close -->
			<!-- Content body -->
			<div class="content">
				<div id="seat-selector">
					<div class="r">
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="clearfix"></div>
					</div>
					<div class="r">
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="clearfix"></div>
					</div>
					<div class="r">
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="clearfix"></div>
					</div>
					<div class="r">
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="clearfix"></div>
					</div>
					<div class="r">
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="c" onclick="toggleSeat(this)"></div>
						<div class="c" onclick="toggleSeat(this)"></div><div class="clearfix"></div>
					</div>
					<div class="clearfix screen"></div>
				<div class="quick-book-submit clearfix" id="buy-tickets-submit" style="float: right" onclick="createReceipt()">Buy Tickets</div>
				</div>
			</div>
			<!-- Content body close -->
			<!-- Footer -->
			<?php require('includes/footer.php'); ?>
			<!-- Footer close -->
		</div>
		<div id="dark-overlay"></div>
		<div id="ticket-confirmation" style="display: none;z-index: 100;height: 370px;width: 300px;position: fixed;top: 50%;left: 50%;margin-left: -150px;margin-top: -200px;background-color: white;">
			<div id="ticket-body" style="height: 320px;position: relative;">
				<div style="border-bottom: 1px dotted black;border-top: 1px dotted black;padding: 10px;">
					<img alt="picture" style="display: block;width: 60px;margin: 0 auto;text-align: center;" src="images/logo.gif" />
					<div style="text-align: center;font-size: 10pt;font-weight: bold;">C I N E M A</div>
				</div>
				<div style="margin-top: 20px;" class="ticket-content">
					<div style="margin: 10px;font-size: 10pt;">Receipt No.: <span id="ticket-receipt-number">97644</span></div>
					<div style="margin: 10px;font-size: 10pt;">Date of Purchase: <span id="ticket-todays-date">21/1/2014</span></div>
					<div style="margin: 10px;font-size: 10pt;">Movie Name: <span id="ticket-movie-name">Dhoom: 3 (U/A)</span></div>
					<div style="margin: 10px;font-size: 10pt;">Number of Seats: <span id="ticket-number-seats">1</span></div>
					<div style="margin: 10px;font-size: 10pt;">Movie Date: <span id="ticket-movie-date">23/1/2014</span></div>
					<div style="margin: 10px;font-size: 10pt;">Show Time: <span id="ticket-movie-time">1:45 PM</span></div>
				</div>
				<div id="total-cost" style="margin-top: 20px; margin-right: 10px; float: right; border-top: 1px dotted black;">Total: Rs. 100</div>
			</div>
			<div onclick="printTicket()" class="quick-book-submit" style="position: absolute;bottom: 5px; left: 10px;">Print</div>
			<div onclick="closeTicketWindow()" class="quick-book-submit" style="position: absolute;bottom: 5px; right: 10px;">Cancel</div>
		</div>
	</body>
</html>