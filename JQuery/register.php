<!DOCTYPE html>
<html>
<head>
	<title> Registration  </title>
	<style>
		td{
			font-weight:bold;
			
		}
		.first,th{
			text-align:right;
		}
		
	</style>
</head>
<body>
	<form action="empty.html" method="post">
		<table border="0" cellspacing="5" width="100%" bgcolor="#f7f4ae">
			<tr>
				
				<th> <h1>Register User</h1>  </th>
				
			</tr>
			
			<tr>
				<td colspan="2">  </td>
				<tr>
					<td class="first"> Name: </td>
					<td> <input type="text" name="txtname" id="name"/>  </td> <br/>
					
				</tr>
				<tr>
					<td class="first"> User ID: </td>
					<td> <input type="text" name="txtname" id="user_id"/>  </td>
				</tr>
				<tr>
					<td class="first"> Password: </td>
					<td> <input type="password" name="txtname" id="password"/>  </td>
				</tr>
				<tr>
					<td class="first"> Confirm Password: </td>
					<td> <input type="password" name="txtname" id="cnf_pwd"/>  </td>
					
				</tr>
				<tr>
					<td class="first"> Gender: </td>
					<td> <input type="radio" name="male"/> Male <br/>
						<input type="radio" name="female"/> Female
					</td>
				</tr>
				<tr>
					<td class="first"> Date Of Birth: </td>
					<td> <input type="text" name="txtname" placeholder="dd/mm/yyyy"/>  </td>
				</tr>
				<tr>
					<td class="first"> Country: </td>
					<td> <select>
							<option> </option>
							<option>India</option>
							<option> U.S </option>
							<option> U.K</option>
							<option> Canada</option>
							<option> Nepal</option>
							<option>Singapore </option>
							<option> Malasia</option>
							<option>Bangladesh </option>
							<option> sri Lanka </option>
							<option> Mauritius </option>
							<option> Maldives</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="first"> Industry: </td>
					<td> <textarea rows="4" cols="20"> </textarea>  </td>

				</tr>
				<tr>
					<td class="first"> Telephone: </td>
					<td> <input type="text" name="txtname"/>  </td>
				</tr>
				<tr>
					<td class="first"> Mobile: </td>
					<td> <input type="text" name="txtname"/>  </td>
				</tr>
				<tr>
					<td class="first"> Email ID: </td>
					<td> <input type="text" name="txtname"/>  </td>
				</tr>
				<tr>
					<td> </td>
					<td > <input type="checkbox" >I Agree Terms & Conditions  </td>
				</tr>
				<tr>
					
					<td class="first"> <input type="Submit" value="Submit" >  </td>
					
					<td > <input type="button" value="Display" name="display" id="display" target="empty.html">  </td>
					<div id="button" >  </div>
				</tr>
			</tr>
			
		</table>
	</form>
	<span id="name_span">    </span><br/>
			<span id="user_span">    </span><br/>
			<span id="pwd_span">    </span><br/>
			<span id="cpwd_span">    </span>
			<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
			
</body>
</html>