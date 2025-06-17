<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}
body{
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.container{
    width: relative;
    width: 100%;
    max-width: 1000px;
    min-height: 100px;
    margin: 50px;
    background:rgb(246, 247, 244);
    /* display: grid;
    grid-template-columns: 1fr 2fr;  */
    box-shadow: 0 36px 60px rgba(0, 0, 0, 0.1)  ;
}
.container .left_side{
    position: relative;
    background-color: pink;
    /* background: blue; */
    padding: 40px;
}
.profiletext{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
 .image{
    position: relative;
    left:400px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    /* overflow: hidden; */
}
.profiletext .image img{
    /* position: absolute; */
    top: 0; 
    /* left: 0; */
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.profiletext h2{
    color: #fff;
    font-size: 1.5em ;
    margin-top: 20px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 600;
    line-height: 1.4em;
}
.profiletext h2 span{
    color: #fff;
    font-size: 1.2rem;
    font-weight: 400;
}
.contactinfo{
   padding-top: 40px;
}
.tittle{
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;

} 
.contactinfo ul{
   position: relative;
}  
.contactinfo ul li{
    position: relative;
    list-style: none;
    margin: 10px 0;
    cursor: pointer;

}
.contactinfo ul li .icon{
   display: inline-block;
    width: 20px;
    font-size: 18px;
    color:#03a9f4;
}
.contactinfo ul li span{
    color: #fff;
    font-weight: 300;
}
.contactinfo.education li{
    margin-bottom: 15px;
  
}
.contactinfo.education h5{
    color: #03a9f4;;
    font-weight: 500;
}
.contactinfo.education h4:nth-child(2){
    color: #fff;
    font-weight: 500;

}
.contactinfo.education h4{
    color: #fff;
    font-weight: 300;
}
.contactinfo.language .percent{
    position: relative;
    width: 100%;
    height: 6px;
    background-color: #081921;
    display: block;
    margin-top: 5px;
}
.contactinfo.language .percent div {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background-color: #f11545;
}
.container .right_side{
    font-size: 0.8em;
    font-weight: 300;;
}
.about{
    margin-bottom: 50px;
}
.about :last-child{
    margin-bottom: 0;
}
.title2{
    color: black;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}
p{
    color: #333;
}
.about .box{
    display: flex;
    flex-direction: row;
    margin: 20px 0 ; 
}
.about .box .year_company{
    min-width: 150px;
}
.about .box .year_company h5{
    text-transform: uppercase;
    color: #848c90;
    font-weight: 600;
}
.about .box .text  h4{
    text-transform: uppercase;
    color: #02a7da2;
    font-size:16px;
}
.skills .box{
    position: relative
    width: 100%;
    display : flex
    grid-template-columns: 150px 1fr;
    justify-content: center;
    align-items : center;
}
.skills .box h4{
   text-transform: uppercase;
   color:  #848c99;
    font-weight: 500;
}
     </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">

        <div class="left_side">
            <div class="image">
                    <img src="profile.png" alt="">
                </div>   
            <div class="profiletext">
                <h2>Dipak Kumar Chaudhary<br><span>Web Development</span></h2>
            </div>
            <div class="contactinfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                     <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text">Kirtipur,tyanglaphat</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"> +977-9827726366</span>
                    </li>

                    <li>
                        <span class="icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
                        <span class="text">chydipak6366@gmail.com</span>
                    </li>
                     <li>
                        <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <span class="text">linkedin</span>
                    </li>
                </ul>
                
            </div>

            <div class="contactinfo education">
                <h3 class="title">Education</h3>
                <ul>
                     <li>
                        <h5>2020-2024</h5>
                        <h4>Bsc.Csit</h4>
                        <h4>University Name</h4>
                     
                    </li>
                     <li>
                        <h5>2017-2020</h5>
                        <h4>+2</h4>
                        <h4>Nepal Mega College</h4>
                    </li>
                </ul>
                
            </div>

             <div class="contactinfo lang">
                <h3 class="title">Language</h3>
                <ul>
                     <li>
                        <span class="icon"></span>
                        <span class="percent">Nepali</span>
                        <div style="width: 85%;"></div>
                     
                    </li>
                     <li>
                        <span class="icon"></span>
                        <span class="percent">English</span>
                        <div style="width: 75%;"></div>
                    </li>
                </ul>
                
            </div>

        <div class="right_side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore odio voluptate laborum autem suscipit mollitia officiis velit nisi, dolores, magnam quisquam et illum explicabo blanditiis fugit possimus ipsa aperiam quas!</p>
            </div>

            <div class="about">
                <h2 class="title2">Experiences</h2>
                <div class="box">
                    <div class="year_company">
                        <h5>2022-present</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Frontend Developer</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, dolorum inventore.</p>
                    </div>
                </div>

                   <div class="box">
                    <div class="year_company">
                        <h5>2020-2022</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Backend Developer</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, dolorum inventore.</p>
                    </div>
                </div>
            </div>
            <div class="about skills">
                <h2 class="title2">Skills</h2>
                <div class="box">
                    <h4>HTML</h4>
                </div>
                 <div class="box">
                    <h4>CSS</h4>
                </div>
                 <div class="box">
                    <h4>JAVASCRIPT</h4>
                </div>
                 <div class="box">
                    <h4>PHP</h4>
                </div>

            </div>
       </div>
    </div>
    
</body>
</html>