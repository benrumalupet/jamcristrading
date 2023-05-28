<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
    padding: 0%;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}
    nav {
    width: 980px;
    border-radius: 10px;
    margin: auto;
    margin-left: auto;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#b66363;
}

nav ul {
    display: flex;
    list-style-type: none;  
    justify-content: center; 
}
nav ul li{
    margin:0 5px;
}
nav ul a{
    text-decoration: none;
    padding: 0.3rem 1.3rem;
    font-size: 17px;
    font-weight: bold;
    color: #161515;
    position: relative;
    margin-left: 110px;
    z-index: 1;
}

nav ul a::after{
    content: "";
    width: 0%;
    height: 100%;
    position: absolute;
    top:0;
    left:0px;
    border-radius: 20px;
    background-color: #55b1e6;
    z-index: -1;
    transition: 0.5s;
}
nav ul a:hover:after{
    width: 100%;
}
.main-content {
    width: 60%;
    padding-top: 100px;
    margin-left: 3rem;
    display: flex;
    align-items: center;
  
    justify-content: space-around;
}
    </style>

</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>

            <li><a href="about-index.php">About</a></li>



        </ul>
        <img src="image/logo.png" alt="">
    </nav>

</body>
</html>