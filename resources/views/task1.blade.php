<style>
    .EvoLogo {
        text-align: center;
        margin-top: 70px
    }
    
    .LoginPageleft {
        flex-basis: 50%

    }
    .LoginPageRight {flex-direction: column 
        display: flex;
        flex-basis: 50%;
        position:relative;
        
        height:900;
        background-image: linear-gradient(to right, var(--pink) 0%, var(--purple) 51%, var(--blue) 100%);



    }
    .LoginPage {
        display: flex;
        background-color:white;
        border-width:20px;
        border-color:red;
        

    }


    .border{
        background-color:white;
        border-width:20px;
        border-color:red;
        

    }
    .LoginSection {
        margin-left: 70px;

      
    }
    .textinput{
        width: 90%;
        margin-bottom: 20px;
        height: 40px;
        
        
    }
    .textinput--username {
    }   

    .textinput--password{

    }
    .textinput--enter{
        background-image: linear-gradient(to right, var(--pink) 0%, var(--purple) 51%, var(--blue) 100%);
        color: white;
        margin-right: 50px
    }

    .RegisterButton{
        
        display:flex;
        margin-left: 50px;
        text-align:left;
        align-items: center;
        justify-content: center;
    }
    .GradientBackground{
        margin-top: 300px;
        color: white;
        font-size: 20px;
    }
    .ForgotPasswordPrompt{
        display: flex;
        justify-content: center;
        margin-right: 60px;
        
    }
    .RegisterPrompt{
        display:flex;
        justify-content: space-between;
        margin-top: 40px;
        margin-right: 60px;
    }
    .RegisterButton{
        color: red;
        background-color: white;
        border-color:#D3D3D3;
        height: 35px;
        width:100px
    }

    body {
        background-color:#dedede;
        --pink: #cc0099;
        --purple: #9900cc;
        --blue: #0000ff;

    }

    .RightPanelText{
        margin-left: 30px
    }
        
</style>

    <section class="LoginPage">
        <div class="LoginPageLeft">
            <!--Logo-->
            <div class="EvoLogo">
                <svg width="236" height="68" viewBox="0 0 998 308" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M998 154C998 239.052 929.052 308 844 308C758.948 308 690 239.052 690 154C690 68.9482 758.948 0 844 0C929.052 0 998 68.9482 998 154ZM511.789 302.422C511.052 303.896 508.948 303.896 508.211 302.422L360.447 6.89443C359.782 5.56462 360.749 4.00002 362.236 4.00002L657.764 4.00005C659.251 4.00005 660.218 5.56467 659.553 6.89447L511.789 302.422ZM0 6C0 4.89543 0.895431 4 2 4H298C299.105 4 300 4.89543 300 6V62C300 63.1046 299.105 64 298 64H2C0.895429 64 0 63.1046 0 62V6ZM2 124C0.895431 124 0 124.895 0 126V182C0 183.105 0.895429 184 2 184H298C299.105 184 300 183.105 300 182V126C300 124.895 299.105 124 298 124H2ZM2 244C0.895431 244 0 244.895 0 246V302C0 303.105 0.895429 304 2 304H298C299.105 304 300 303.105 300 302V246C300 244.895 299.105 244 298 244H2Z" fill="url(#evolinear)"></path>
                    <defs>
                        <linearGradient id="evolinear" x1="-8.15631e-07" y1="4.00001" x2="1013.97" y2="72.8975" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F43494"></stop>
                            <stop offset="1" stop-color="#1919FF"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <h4>
                    We are the Evo Agency
                </h4>        </div>

            <form class="LoginSection">
                <p >Please login to your account</p>
                <!--Username input-->
                <div >
                    <input type="text" placeholder="Username" class="textinput textinput--username"/>
                    <label for="exampleFormControlInput1"</label>
                </div>

                <!--Password input-->
                <div>
                    <input type="password" placeholder="Password" class="textinput textinput--password"/>
                    <label for="exampleFormControlInput11"></label>
                </div>

                <!--Submit button-->
                <div >
                    <button type="RegisterButton"class="textinput textinput--enter" >LOG IN </button>
                    <a href="#!" class="ForgotPasswordPrompt">Forgot password?</a>
                </div>

                <!--Register button-->
                <div class="RegisterPrompt">
                    <p>Don't have an account?</p>
                    <button type="button" class="RegisterButton">Register</button>
                </div> 
            </form>
        </div>


        <div class="LoginPageRight">
            <div class="GradientBackground">
                <h4 class="RightPanelText">
                    We are more than just a company
                </h4>
                <p class="RightPanelText">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.
                </p>
            </div>
        </div>
    </section>


