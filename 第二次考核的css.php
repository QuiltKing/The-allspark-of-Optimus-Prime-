*{
    padding: 0;
    margin: 0;
}
.a ul li ul{
    display: none;
}
.a ul li:hover ul{
    display: block;
}
td:hover{
        color: red;
}
.loop-wrap{
        position: relative;
        width: 500px;
        height: 300px;
        margin: 100px auto;
}
.loop-images-container{
        position: absolute;
        left: 0;top: 0;
        width: 500%;
        height: 100%;
        font-size: 0;
        transform: translate(0,0);
        animation: loop .25s, 100ms linear infinite;
}
.loop-image{
        width: 500px;
        height: 300px;
}
.b{
    text-align: center;
    background-color: darkgray;
}
div:hover{
    color: red;
}
body{
    background-color:white;
}
.c{
    text-decoration: none;
}
