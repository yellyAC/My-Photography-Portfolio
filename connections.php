<?php
$pdo = new PDO('mysql:host=localhost;dbname=webdev', 'root');
if (mysqli_connect_errno()) {
  echo "MYSQL CONNECTION ERROR: " . mysqli_connect_errno();
}
?>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tinos:wght@700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">


<style>
/* Home Page */
.header {
  overflow: hidden;
  background-color: #00000;
  padding: 50px 100px;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 25px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}


/* IAN ROBIN BREVA */
.myname{
  color: white;
  font-family: 'Tinos';
  text-indent: 15%;
  font-size: 50px;
  text-align: left, justify;
}

/* Street Photographer */
.streetphotog{
  color: white;
  font-family: 'Tinos';
  text-indent: 15%;
  text-align: left, justify;
}

/* introduction */
.introduction{
  color: white;
  padding-left: 15%;
  text-align: left, justify;
}

/* Social hyperlinks */
.socials{
  text-align: center;
  margin-top: 50px;
  font-size: 20px;
  color: white;
}

/*Contact Information*/
.contacttitle{
  text-align: center;
  color: white;
  font-size: 25px;
  font-family: 'Tinos';
}


/* About me */
.aboutmetitle{
  text-align: center;
  color: white;
  font-size: 25px;
  font-family: 'Tinos';
}


/* Contact message */
.contactmessage{
  text-align: center;
  font-size: 20px;
  font-family: 'Open Sans', sans-serif;
  color: white;

}


/* About me "box" */
.centered {
  font-family: 'Open Sans', sans-serif;
  font-size: 20px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: inline-block;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  color: #FFFFFF;
  border: 1px solid #fff;
  padding: .1em 1em;
  background-color: rgba(0, 0, 0, 0);
  z-index: 2; 
  line-height: 20%;
}

/* registeration */
.gradient-custom-3 {
/* fallback for old browsers */
background: #00000;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}

/* Log in */
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}


/*responsive image gallery*/
.row {
  -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

/*portfolio introduction*/
.portfolio{
  text-align: center;
  color: white;
  font-size: 25px;
  font-family: 'Tinos';
}

.portfoliomessage{
  text-align: center;
  color: white;
  font-size: 15px;
  font-family: 'Open Sans', sans-serif;
}

.logout{
  padding-left: 95%;
}

</style>