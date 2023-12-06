<?php


header('Content-type: text/css; charset:UTF-8');


?>

:root {
--color-blue: blue;
}

html,
body {

height: 100%;
width: 100%;
}

body {
color: var(--color-blue);
letter-spacing: 2px;
font-size: 15px;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
background: linear-gradient(90deg, blue 50%, white 50%);
}

form {
position: relative;
}


.container {
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
gap: 20px;
}

.container .col {
position: relative;
margin-top: 17px;

}

.container .col .inputBox {
position: relative;
}

.container .col .inputBox span {
position: absolute;
z-index: -1;
transition: 0.5s;

}

.container .col .inputBox input {
position: absolute;
background-color: transparent;
outline: none;
border: 0.1px solid var(--color-blue);
border-top-style: none;
border-right-style: none;
border-left-style: none;
}

.container .col .inputBox input:valid~span,
.container .col .inputBox input:focus~span {
transform: translateY(-20px);
}


.button-9:disabled {
cursor: default;
}

button {
line-height: 1.15;
height: 44px;
margin: 12px 0 0;
left: -8px;
border-radius: 6px;
border-width: 0;
box-sizing: border-box;
cursor: pointer;
background: linear-gradient(90deg, white 50%, blue 50%);
position: relative;

}

button span {
font-family: 'Open Sans';
font-size: 20px;
font-weight: 900;
color: var(--color-blue);
-webkit-text-stroke: 1px white;


}

button span ::before {
content: attr(data-text);
position: absolute;
top: 0;
left: 0;
width: 146px;
overflow: hidden;
color: yellow;
}





h4 {
position: relative;
padding: 0;
font-size: 40px;
font-family: 'Open Sans';
font-weight: 900;
-webkit-text-fill-color: transparent;
-webkit-text-stroke: 1px;
-webkit-text-stroke-color: white;
text-shadow: 10px 5px 21px black;
letter-spacing: 4px;

}

h4:after {
content: "";
background-color: white;
min-width: 300px;
height: 2px;
position: absolute;
bottom: 0;
left: 0;
margin-top: 16px;
}



h4 span {
font-size: 40px;
font-family: 'Open Sans';
font-weight: 900;
-webkit-text-fill-color: white;
-webkit-text-stroke: 1px;
-webkit-text-stroke-color: var(--color-blue);
text-shadow: 10px 5px 21px black;
letter-spacing: 20px;
position: relative;
}

a {
position: relative;
overflow: hidden;
text-decoration: none;
color: var(--color-blue);
font-family: 'Open Sans';
font-size: 40px;
font-weight: 900;
-webkit-text-stroke: 1px white;
z-index: 100;

}

a::before {
content: attr(data-text);
position: absolute;
top: 0;
left: 0;
/* border: 1px solid red;
border-top-style: none;
border-right-style: none;
border-bottom-style: none; */
width: 220px;
overflow: hidden;
color: white;


}

.alert {
font-weight: 900;
color: var(--color-blue);
font-size: 20px;

}

button span {
position: relative;
color: white;
-webkit-text-stroke: 1px yellow;
font-size: 20px;
}

button span::before {
content: attr(data-text);
position: absolute;
left: 0;
top: 0;
width: 45px;
overflow: hidden;
color: var(--color-blue);

}