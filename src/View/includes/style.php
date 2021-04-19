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
}
.logo{
    position: absolute;
    left: 5%;
    top: 2.5rem;
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
    color:#264653;
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
/* create pages */
.create-container form{
    height:50%;
    width:50%;
    margin-left:auto;
    margin-right:auto;
    margin-top:-4%;
    padding:4rem;
    /* border:2px solid #9A8F84; */
    border-radius:30px;
    background-color:#C7DDE6;
    text-align:center;
}
.input-form{
    background-color:#C7DDE6;
    text-align:left;
}
.create-container label{
    background-color:#C7DDE6;
    color:#264653;
    margin-left:1rem;
    margin-top:1rem;
    font-size:1.8rem;
}
.create-container input {
    height:2rem;
    width:95%;
    background-color:#F6F5F4;
    border:none;
    font-size:1.2rem;
    margin-top:0.5rem;
    margin-bottom:2rem;
    margin-left:1rem;
}
.create-container select{
    height:2rem;
    width:95%;
    background-color:#F6F5F4;
    border:none;
    font-size:1.2rem;
    margin-top:0.5rem;
    margin-bottom:2rem;
    margin-left:1rem;
}
.create-button{
    font-size:1.5rem;
    height:4rem;
    width:8rem;
    background-color:#F6F5F4;
    color:#264653;
    border:none;
    border-radius:10px;
}
</style>