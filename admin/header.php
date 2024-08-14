<style>
    .main-container{
    display: flex;
    flex-direction: column;
    }

    header{
        display:flex;
        flex-direction:column;
        justify-content:space-between;
        background:black;
        color:#fff;
        align-items:center;
        width:260px;
        height:100vh;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .title{
        display:flex;
        flex-direction:column;
        align-items:center;
    }

    header h1{
        margin:20px;
        font-size:1.4rem;
        font-style: italic;
    }

    header h1 a{
        color:#fff;
        text-decoration:none;
    }

    .line{
        padding:2.5px;
        border-radius:50px;
        background:#fff;
        width:35%;
        margin-top:-10px;
    }

    .links{
        display:flex;
        flex-direction:column;
        margin-top: -15px;
        margin-left:20px;
    }

    .link{
        display:flex;
        flex-direction:row;
        align-items:center;
    }

    .link a img{
        width:17%;
        text-align:center;
        margin-right:10px;
        margin-top:-3.5px;
    }

    .links .link a{
        color:#fff;
        text-decoration:none;
        margin:20px;
        margin-top:30px;
        font-weight:500;
        font-size:1rem;
        display:flex;
        flex-direction:row;
        align-items:left;
    }

    .links .link a:hover{
        color:#d1d0d09e;
        transition: all ease-in-out 0.3s;

    }


    .footer{
        display:flex;
        flex-direction:column;
        align-items:center;
    }

    .footer a{
        color:black;
        background:#fff;
        border-radius:50px;
        text-decoration:none;
        margin:20px;
        font-weight:500;
        font-size:0.9rem;
        display:flex;
        flex-direction:column;
        align-items:left;
        padding:8px 20px;
        font-weight:bold;
        width:100%;
        text-align:center;
        border:1.5px solid #fff;
        transition: all ease-in-out 0.5s;
    }

    .footer a:hover{
        color:#fff;
        background: transparent;
        border:1.5px solid #fff;
        transition: all ease-in-out 0.5s;

    }
    </style>


    <div class="main-container">
       <header>
            <div class="title">
            <h1><a href="./Dashboard.php">SoundMix - Hub</a></h1>
            <div class="line"></div>
            </div>

            <div class="links">

                <div class="link">
                <a href="./Dashboard.php"><img src="imgs/dashboard.ico" alt=""> Dashboard</a>
                </div>

                <div class="link">
                <a href="./view_soundmixes.php"><img src="imgs/new_soundmix.ico" alt=""> SoundMixes</a>
                </div>

                <div class="link">
                <a href="./new_soundmix.php"><img src="imgs/new_soundmix.ico" alt=""> Add SoundMix</a>
                </div>

                <div class="link">
                <a href="./view_contacts.php"><img src="imgs/contacts.ico" alt=""> Contacts</a>
                </div>

                <div class="link">
                <a href="./admin_settings.php"><img src="imgs/settings.ico" alt=""> Settings</a>
                </div>

            </div>

            <div class="footer">

                <a href="./logout.php">Logout</a>
                
            </div>

        </header>

    </div>

