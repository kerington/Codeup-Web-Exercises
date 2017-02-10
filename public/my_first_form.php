<? php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Practice</title>
	</head>
	<body>
	
		<h2>User Login</h2>

		<form action="my_first_form.php" method="POST">
			<p>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" placeholder="Enter Username Here" value="admin" required>
			</p>

			<p>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Enter Password Here" required autofocus>
			</p>

			<label for="email_body">Email body</label>
			<textarea id="email_body" name="email_body" rows="5" cols="40"> Content Here</textarea>

			<!--<input type="submit" value="Login"> DOES THE SAME THING AS LINE BELOW!-->
			<button type="submit">Login</button> 
		</form>
		<h2>Compose an Email</h2>

		<form action="my_first_form.php" method="POST">

			<p>
				<label for="from">From:</label>
				<input type="from" name="from" id="from" placeholder="Enter your email address here." required autofocus>
			</p>

			<p>
				<label for="to">To:</label>
				<input type="text" name="to" id="to" placeholder="Who are you sending this to?" required>
			</p>

			<p>
				<label for="subject">Subject:</label>
				<input type="subject" name="subject" id="subject" placeholder="Enter email subject here." required autofocus>
			</p>
			<p>
			<label for="body">Email body</label>
			<textarea id="body" name="body" rows="5" cols="40"> Content Here</textarea>
			</p>
			<p>Would you like a copy of this e-mail saved to your sent folder?
			<label>
				<input type="radio" name="q1" id="yes" checked>Yes
			</label>
			<label>
				<input type="radio" name="q1" id="no">No
			</label>
			</p>
			<!--<input type="submit" value="Send"> DOES THE SAME THING AS LINE BELOW!-->
			<button type="submit">Send</button> 
		</form>
			<p>
		
		<form>
			<h2>Multiple Choice Test</h2>
			<p>What is the cutest dog in the world?</p>
			<p>
			<label>
				<input type="radio" name="q2" value="pug" checked>
				Pug
			</label>
			<label>
				<input type="radio" name="q2" value="lab">
				Lab
			</label>
			<label>
				<input type="radio" name="q2" value="poodle">
				Poodle
			</label>
			<label>
				<input type="radio" name="q2" value="chihuahua">
				Chihuahua
			</label>
			</p>
			<button type="submit">Submit</button>
			<p>What is the best fruit ever?</p>
			<p>
			<label>
				<input type="radio" name="q3" value="mango">
				Mango
			</label>
			<label>
				<input type="radio" name="q3" value="grapes">
				Grapes
			</label>
			<label>
				<input type="radio" name="q3" value="orange" checked>
				Orange
			</label>
			<label>
				<input type="radio" name="q3" value="pineapple">
				Pineapple
			</label>
		</form>
			</p>
			<button type="submit">Submit</button>

		<form>			
			<p>What word(s) best describe you?</p>
				<label>
					<input type="checkbox" id="os1" name="os[]" value="nice">Nice
				</label>
					<label>
					<input type="checkbox" id="os2" name="os[]" value="funny">Funny
				</label>
					<label>
					<input type="checkbox" id="os3" name="os[]" value="smart">Smart
				</label>
					<label>
					<input type="checkbox" id="os4" name="os[]" value="witty">Witty
				</label>
			<p>
			<button type="submit">Submit</button>
			</p>
		</form>
		<form>
			<p>Which of the following colors do you like best? (Check all that apply)</p>
				<label>
					<input type="checkbox" id="os1" name="os[]" value="red"> Red
				</label>
				<label>
					<input type="checkbox" id="os2" name="os[]" value="yellow"> Yellow
				</label>
				<label>
					<input type="checkbox" id="os3" name="os[]" value="green"> Green
				</label>
				<label>
					<input type="checkbox" id="os4" name="os[]" value="blue"> Blue
				</label>
			<p>
			<button type="submit">Submit</button>
			</p>
		</form>
		
		<form>
			<p>What sport(s) do you like best?<br><em>(hold "control" or "command" down to select more than one)</em></p>
				<select multiple>
					<option value="basketball">Basketball</option>
					<option value="football">Football</option>
					<option value="soccer">Soccer</option>
					<option value="volleyball">Volleyball</option>
				</select>
			<p>
			<button type="submit">Submit</button>
			</p>
		</form>

		<form>
			<h2>Select Testing</h2>
			<p>Do you like to code?</p>
			<p>
				<label>
					<input type="radio" name="q4" value="1" checked>Yes
				</label>
				<label>
					<input type="radio" name="q4" value="0">No
				</label>
			</p>
			<p>
			<button type="submit">Submit</button>
			</p>
		</form>

	</body>
</html>