*{
    padding: 0;
    margin: 0;
}
body{
    background: #d6d6d6;
}
nav{
    width: 100%;
    height: 60px;
    background: #4a4a4a;
}
.title,#text1,#text2,#text3{
    line-height: 60px;
    float: left;
    display: inline-block;
    color: #c3c3c3;
    width: 100px;
    text-align: center;
}
.title{
    color: white;
    width: 120px;
    text-transform: uppercase;
    font-family: FontAwesome;
}
#list1,#list2,#list3{
    list-style: none;
    background: white;
    text-align: center;
    width: 120px;
    line-height: 60px;
    border-radius: 5px;
    z-index: -1;
    position: absolute;
    left: 135px;
    top: -120px;
}
#list2{
    left: 235px;
}
#text1:hover,#text2:hover,#text3:hover{
    color: white;
    cursor: pointer;
}
#text1:hover ~ #list1,#text2:hover ~ #list2,#text3:hover ~ #list3{
    top: 60px;
    transition-duration: 0.5s;
}
#list1:hover,#list2:hover,#list3:hover{
    top: 60px;
    cursor: pointer;
}
.content1:hover,.content2:hover,.content3:hover{
    background: #747474;
    border-radius: 5px;
    cursor: pointer;
}
b{
    border-style: solid;
    border-width: 5px;
    border-color: white transparent transparent transparent;
    position: relative;
    top: 13px;
    left: 2px;
}
.text3{
	padding-left: 50px;
}
