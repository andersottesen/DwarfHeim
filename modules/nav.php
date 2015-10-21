<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
  <style>

  .navbar {
    height: 50px;
    padding:0;
    margin: 0;
    position: absolute;
  }
  .navbar li {
    height: auto;
  	width: 150px;
  	float: left;
  	text-align: center;
  	list-style: none;
  	font-family: 'Caesar Dressing', cursive;
    font-size: 16px;
  	padding: 0;
  	margin: 0;
  	background-color: #F0EDDA;
    opacity: 0.72;
    border: 1px solid #B8B8B8;
  }
  .navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }
  .navbar a	{
  		padding: 18px 0;
  		text-decoration: none;
  		display: block;
      color:  #E86700;
  }
  .navbar li ul 	{
  		display: none;
  		height: auto;
  		margin: 0;
  		padding: 0;
  }

  .navbar li:hover ul {
      display: block;
  }

  </style>
</head>

<body>
  <nav>
    <ul class="navbar">
        <li><a href="<?php echo $page["homepage"] ?>">Home</a></li>
        <li><a href="<?php echo $page["media"] ?>">Media</a>
          <ul>
            <li> <a href="<?php echo $page["videos"] ?>">Videos</a></li>
            <li> <a href="<?php echo $page["images"] ?>">Images</a></li>
          </ul></li>
        <li><a href="<?php echo $page["dwarfheim"] ?>">The Game</a></li>
        <li><a href="<?php echo $page["about"] ?>">The Crew</a></li>
          <ul>
            <li> <a href="<?php echo $page["contact"] ?>"> Contact </a> </li>
          </ul>
        <li><a href="<?php echo $page["faq"] ?>">FAQ</a></li>
        <li><a href="<?php echo $page["investor"] ?>">Investors</a></li>
    </ul>
  </nav>
  <div class="container">
</body>

</html>
