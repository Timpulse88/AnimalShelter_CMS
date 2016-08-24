<div id="wrapper">
    <div class="content">    
        <p>This text is in frontend</p>
    </div>
    <div class="background">
        <p>Background text</p>
        <img src="http://nuclearpixel.com/content/icons/2010-02-09_stellar_icons_from_space_from_2005/earth_128.png" alt="background" />
        <img src="http://upload.wikimedia.org/wikipedia/en/0/0c/IrfanView_Logo.png" alt="background 2" />

    </div>
</div>

Final CSS:

#wrapper{
    position: relative;
    width: 200px;
    height: 200px;
}

.content{
    color: #FFFFFF;
    font-size: 26px;
    font-weight: bold;
    text-shadow: -1px -1px 1px #000, 1px 1px 1px #000;
    position: relative;
    z-index: 100;
}

.background{
    color: #999999;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -100;
}
