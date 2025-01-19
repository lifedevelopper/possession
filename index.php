<head>
<title>Possession</title>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0;">

</head>
<html>
    <body>
    
        <div class="page">
                        <img src="possession-title.png"></img>
                        <div class="moteur">

                        <img id="possession" src="" alt="Possession Image" width="300">

                        <script>
                        const images = ['blank.png','demon.png','goodfortune.png','pentagram.png','question.png','spider.png','spiderweb.png','stars.png'];

                        function getRandomImage() {
                            const randomIndex = Math.floor(Math.random() * images.length);
                            return images[randomIndex];
                        }

                        document.getElementById('possession').src = 'images/' + getRandomImage();
                        </script>

                        </div>   
    
                        <button onClick="window.location.reload();">RELOAD</button>

        </div> 

    </body>
</html>

<style>
body{
background-color: #000000;
}
.page{
width: 555px;
text-align: center;
color: white;
margin: 10px auto 100px;
}

.page img{
width: 555px;
text-align: center;
color: white;
margin: 10px auto 70px;
font-size: 51px;
}

.moteur img{
width: 333px;
}


button{
width: 100px;
height: 30px;
margin: 50px auto 10px;
background-color: white;
color: black;
background-color: red;
}
    
.bg {  
    width: 100vw;
    height: 120%;
    object-fit: cover;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -2;
 }
    @media screen and (max-width: 700px) {
.page {
    max-width: 90%;
}
.moteur{
    width: auto;
}
}
</style>
