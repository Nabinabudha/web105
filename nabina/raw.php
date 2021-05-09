<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">		    
	<meta charset="utf-8">
	<title>Feeds</title>		
</head>
<body>
	<form action="form.php" method="POST">
		<fieldset>
			<table>
				<b><h1>Form</h1></b>
				<h2>************</h2>
				<div name="">
					<b>Event from:</b>
					<input type="text" name="Event_from" id="" placeholder="event From" required>
				</div>
				<div>
					<b>Event to:</b>
					<input type="text" name="Event_to" id="" placeholder="Event To" required>
				</div>
				

				          
		        <div>
					<b>Event time:</b>
					<input type="time" name="Event_time" id="" placeholder="enter your event time"required >
				</div>           
				<div>
					<b>Event date:</b>
					<input type="date" name="Event_date" id="" placeholder="enter your email" required>
				</div>
				<div>
					<b>Email:</b>					
					<input type="text" name="Email" id="" placeholder="enter your email"required >
				</div>
				<div>
					<b>Address:</b>
					<input type="text" name="Address" id="" placeholder="enter your address" required>
				</div>				
				<div>
					<b>Event name:</b>
					<input type="text" name="Event_name" id="" placeholder="enter your cname" required>

				</div>				
				<div>
					<b>Event category:<b>
					<select name="Event_category">
						<option value="PHP">PHP</option>
						<option value="HTML">HTML</option>
						<option value="CSS">CSS</option>
						<option value="JS">JS</option>
					</select>					
				</div>
				<div>
					<b>Other suggestion:</b>
					<textarea name="Other_suggestion" rows="5" cols ="21" placeholder="Something say..."required ></textarea>
				</div>	
				<div>				
					<b>Organizer description:</b>
					<textarea name="Organizer_description" rows="5" cols ="21" placeholder="description  about....."required ></textarea>
				</div>
				<div>
					<b>what service:</b>
					<textarea name="what_service" rows="5" cols ="21" placeholder=" how can  we serve  it? if any....." required></textarea>
				</div>
				<div>					
					<input type="submit" name="submit">
				</div>
					
			</table>                     
		</fieldset>
    </form>
</body>
</html>