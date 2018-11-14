<!doctype html>
	<head>
	<title>About us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		#outer
		{
		height:auto;
		width:100%;
		
		border:1px solid black;
		margin:0px auto;
		}
		#upper
		{
		height:150px;
		width:100%;
		border:1px solid black;
		margin:0px auto;
		}
		#logo
		{
		height:100px;
		width:100%;
		
		
		margin:0px auto;
		}
		#menu
		{
		height:50px;
		width:100%;
		background-color:#33FF00;
		border:1px solid black;
		margin:0px auto;
		}
		
		#main
        {
		height:auto;
		width:100%;
		}
		
		#footer
        {
		height:45px;
		width:100%;
		background:black;
		}
		#menu ul a li:hover
		{
background:#d5440d;
color:white;
transition:all ease 1s;
border-radius:5px;
}
#menu ul a
{
color:#330066;
text-decoration:none;
font-weight:bold;
font-size:17px;
}
#menu ul a li
{
display:inline;

padding:8px;
margin:20px;
}
#inner
{
height:400px;
width:100%;
background:rgba(0,0,0,.4);
color:white;
font-size:60px;
text-align:center;
line-height:400px;
}
.fpart
{
height:45px;
width:500px;
color:white;
float:left;
text-align:center;
line-height:45px;
font-size:20px;
}


#for {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
p
{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-family: "Times New Roman", Times, serif;
	font-size:25px;
	
}
#round {
  border-radius: 50%;

    background-color: #f2f2f2;
    padding: 20px;
}
table tr td
{
 text-align:center;


font-size:25px;
}

	</style>
		</head>
	
	<body onload="slider()">
	    <div id="outer">
		<div id="upper">
		<div id="logo">
			<center><a href="index.php"><img src="logo.png" height="100"></a></center>
		</div>
		<div id="menu">
		<ul>
       <a href="donate.php"><li>DONATE</li></a>
		<a href="#"><li>ABOUT</li></a>
		<a href="#"><li>WORK</li></a>
		<a href="index.php#for"><li>CONTACT</li></a>
		<a href="team.php"><li>TEAM</li></a>
		<a href="#"><li>STAR DONATORS</li></a>
		</ul>
		</div>
		</div>
		<div id="main">
		<center><?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>SNo</th><th>University Roll No</th><th>Name</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uphaar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT SNo, Name, Roll_No FROM details"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> </center>


</div>


		
		<div id="footer">  
		<div class="fpart">
&copy;uphaar a co-operative society
</div></div>
		
	</body>
</html>
