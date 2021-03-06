				
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="data.json"></script>
 <script type = "text/javascript">
         <!--
            function Warn() {
               alert ("Your tickets succesfully have been booked!!!");
               
            }
         //-->
         

      </script>    
      
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
</head>
<body>
<div class="content">
	<h1>Movie Ticket Booking System</h1>
	<div class="main">
		<h2>Cinema XII Movie Theatre</h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front">Select the seats shown below in screen</div>					
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Movie </li>
					<li>Time </li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>:Big Hero 6</li>
					<li>: March 19, 18:00</li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>Rs.</i><span id="total">0</span></b></li>
				</ul>

 
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>

<a href="payment.html"><input type="button" name="button" value="Pay Now"></a>

				
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
	    </div>

			<script type="text/javascript">
 
				var price = 150; //price
				$(document).ready(function() {
					var $cart = $('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total'); //Total money
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__________',
							'aaaaaaaa__',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Sold'],
								[ 'a', 'selected', 'Selected']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+price);
									let a = [];
									a.push(this.settings.id);
									localStorage.setItem('seat_no', JSON.stringify(a));
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(recalculateTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}

						}
					});
					//sold seat
					       data = JSON.parse(localStorage.getItem('seat_no'));
					        sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');	
					       for (i = 0; i < data.length; i++) { 
							     sc.get(data[i]).status('unavailable');							     
}
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>

</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
