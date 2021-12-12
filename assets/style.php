<?php
header("Content-type: text/css; charset: UTF-8");
?>

/*Header */
.header{
display: inline-block;
align-items: center;
text-align:right;


}
.pgtitle{
position:center;
padding: 30px;
font-size: 20px;
font-family: Arial, Helvetica, sans-serif;
top:50%;
left: 50%;
color: white;
}

body,html{
height:100%;
}

#background-video {
width: 100vw;
height: 100vh;
object-fit: cover;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
z-index: -1;
}

@media (max-width: 750px) {
#background-video { display: none; }
body {
/* The image used */
background: url("images/backgroundvideo.mp4") no-repeat;
background-size: cover;

/* Full height */
height: 100%;
width:100%;
/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;

}
}
.logo{
padding: 30px;
object-position: left top;
}


.Home{
flex-basis:31%;
font-size:20px;
border-radius: 20px;
border-color:black;
margin-bottom:5%;
margin-left: 5%;
padding: 20px 12px;
box-sizing: border-box;
width: 700px;

justify-content: center;

background: rgba(255, 243, 243,0.75);
}
.Home2{
flex-basis:31%;
font-size:20px;
border-radius: 20px;
border-color:black;
margin-bottom:5%;
margin-left: 5%;
padding: 20px 12px;
box-sizing: border-box;
width: 700px;

justify-content: center;
background: rgba(232, 244, 248,0.75);
}

.Home:hover{
box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
background: rgb(255, 243, 243);

}

.Home2:hover{
box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
background: rgb(232, 244, 248);

}
.wrapper{
background: #81d4fa;
color: white;
text-align: center;
box-sizing: border-box;
position: absolute;
width: 500px;
height: 100px;
top: 40%;
left: 45%;
transform: translate(10%,10%);
justify-content: space-between;
margin: 35px 70px;

}
.wrapper:hover{
background: orange;

}
.upload_file_title{
font-size: 30px;
}
.error{
background: red;
color: white;
text-align: center;
right: 10%;
position: absolute;
width: 500px;
height: 30px;
transform: translate(10%,10%);
}

.success{
background: green;
text-align: center;
right:10%;
position: absolute;
width: 500px;
height: 30px;
transform: translate(10%,10%);
}

footer {
animation: popout 1s ease-in-out;
margin: auto;
width: 100%;
padding: 5px 20px;
background-color: black;
color: white;
text-align: center;
font-size: 20px;
}

@keyframes popout {
from{transform:scale(0)}
80%{transform:scale(1.1)}
to{transform:scale(1)}
}