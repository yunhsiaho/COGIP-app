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
/* body-page */
h1{
    text-align:center;
}
.container{
    position:relative;
    padding:5rem;
    min-height:100vh;
}
table{
    width:80%;
}
th{
    text-align:left;
}
/* admin */
.admin-container form{
    height:50%;
    width:50%;
    margin-left:auto;
    margin-right:auto;
    margin-top:3rem;
    margin-bottom:3rem;
    padding-top:6rem;
    padding-bottom:6rem;
    text-align:center;
    font-size:2rem;
    /* border:2px solid #9A8F84; */
    border-radius:30px;
    background-color:#E3E0DD;
}
.admin-container label{
    background-color:#E3E0DD;
    color:#264653;
}

.admin-container input{
    height:2rem;
    margin:1rem;
    background-color:#F6F5F4;
    border:none;
    font-size:1.2rem;
}
.admin-button{
    font-size:1.2rem;
    height:3rem;
    width:6rem;
    margin-top:2rem;
    background-color:#F6F5F4;
    color:#264653;
    border:none;
    border-radius:10px;
}
</style>