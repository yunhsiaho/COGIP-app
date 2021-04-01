<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="header_style.css" />    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Becode - Boiler plate MVC</title>
</head>
<style>
*{
    background-color:#F6F6F4;
    font-family: 'Kiwi Maru', serif;
}
/* header */
header{
    width:100%;
    height:10%;
    margin-top:1rem;
    border:1px solid white;
}
.logo{
    position:absolute;
    left:-5%;
    top:0.5rem;
    /* border:1px solid purple; */
}
ul{
    list-style-type: none;
    text-align: right;
    list-style-position: inside;
    margin-left: 3rem;
    margin-right: 3rem;
    padding: 1.2rem;
    /* border:1px solid orange; */
}
a{
    text-decoration:none;
    color:#264653;
}
li{
    display:inline;
    text-align:right;
    margin: 2rem;
    padding: 1.2rem;
    font-size:1.2rem;
    font-weight:500;
    /* border:1px solid green; */
}
/* body-homepage */
h1{
    text-align:center;
}
.container{
    margin:5rem;
}
table{
    width:80%;
}
th{
    text-align:left;
}
/* footer */
footer{
    position:absolute;
    display:flex;
    width:100%;
    height:5%;
    bottom:0;
    left:-0.2%;
    right:-0.1%;
    background-color:#E3E0DD;
    color:#264653;
    justify-content:center;
    align-items:center;
}
</style>
<body>
    <header>
    <ul>
    <span class="logo"> <img src="./logo.png" alt="#" width="50%" height="50%"> </span>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="Invoices_page.php">Invoices</a></li>
        <li><a href="Companies_page.php">Companies</a></li>
        <li><a href="Contact_page.php">Contacts</a></li>
        <li><a href="Admin_page.php">Admin</a></li>
    </ul>
    </span>
    </header>

