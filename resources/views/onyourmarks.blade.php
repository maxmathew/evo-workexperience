<meta name="viewport" content="width=device-width, initial-scale=1" />

<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet"/>
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"/>
<script src="https://cdn.tailwindcss.com/3.3.0"></script>


<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
        },
        corePlugins: {
            preflight: false,
        },
    };


</script>
<style>

.border{
    background-image: linear-gradient(#00A2FE, #00FD91) 30;
    border-width: 20px;
    border-style: solid;
    border-radius: 10px;
}

</style>

<div class="relative">
    <div class="bg-black h-[60px] w-[100%]  flex flex-row p-[15px] sticky top-0">
                <div class="mr-[20px]"><img src="Vector.png"/></div>
                <div><img src="Union.png"/></div>
                <div class="mr-[20px] ml-[190px]"><img src="group.png" class="pl-[px]"/></div>
                <div><img src="Frame.png"/></div>            
        </div>
    <section>


        <div class="h-132  flex">
            <div class="text-xl h-[90px] w-[90px] bg-gradient-to-r from-green-400 to-blue-500 rounded-xl text-center p-[2px] mt-[8px]">
                <button type="button" class="flex justify-center items-center h-[100%] bg-white rounded-xl"> Shop Men's</button>
            </div>
            <img src="Logo.png" class="mx-auto w-[74px] h-[108px]"/>
            <div class="text-base h-[90px] w-[90px] rounded-xl bg-gradient-to-r from-green-400 to-blue-500 text-center p-[2px] mt-[8px]">
                <button type="button" class="text-lg whitespace-normal justify-center items-center h-[100%] bg-white rounded-xl"> Shop Women's</h2>
            <div>
        </div>

    </section>

    <section>
        <div class="bg-[url(sprinter.png)] h-[400px] flex  flex-col p-[10px]">
            <h class="text-4xl bold text-white w-[100%]"> Push Your Pace </h>
            <div class="text-white bg-gradient-to-r from-green-400 to-blue-500 text-center p-[2px] w-[139px] h-[43px] mt-auto ml-auto rounded-[43px] ml-[]">
                <button type="button" class="rounded-full text-xl text-black font-bold bg-white block w-[135px] h-[39px]">SHOP NOW</button>
            </div>
            
        </div>
    </section>

    <section >
        <div class="h-[80px]">
            <h class="text-xl font-bold ml-[12px]"> New Releases </h>
            <button type="button" class="rounded-full bg-slate-800 w-[35px] h-[35px] text-xl text-cyan-500 font-bold mt-[35px] ml-[150px]"><</button>
            <button type="button" class="rounded-full bg-slate-800 w-[35px] h-[35px] text-xl text-cyan-500 font-bold mt-[35px]">></button>
        </div>

        <div class="h-64 mb-[11px] flex flex-row" id="my-slider">
            <div class="flex flex-col">
                <img src="Runningspikes1.png" class="h-[114] w-[169] ml-[10px]"/>
                <div class="ml-[13px]">
                    <h class="text-lg font-bold"> V7 Running Spikes</h>
                    <p class="text-base"> Mens Shoes</p>
                    <p class="text-base"> £79.99</p>
                </div>   
            </div>
            <div class="flex flex-col"> 
                <img src="Runningspikes2.png" class="h-[114] w-[169] ml-[15px]"/>
                <div class="ml-[33px]">
                    <h class="text-lg font-bold"> V8 Running Spikes</h>
                    <p class="text-base"> Mens Shoes</p>
                    <p class="text-base"> £59.99</p>
                </div>
            </div>
            <!-- <div class="flex flex-col">
                <img src="Runningspikes1.png" class="h-[114] w-[169] ml-[10px]"/>
                <div class="ml-[13px]">
                    <h class="text-lg font-bold"> V7 Running Spikes</h>
                    <p class="text-base"> Mens Shoes</p>
                    <p class="text-base"> £79.99</p>
                </div>   
            </div>
            <div class="flex flex-col"> 
                <img src="Runningspikes2.png" class="h-[114] w-[169] ml-[15px]"/>
                <div class="ml-[33px]">
                    <h class="text-lg font-bold"> V8 Running Spikes</h>
                    <p class="text-base"> Mens Shoes</p>
                    <p class="text-base"> £59.99</p>
                </div>
            </div> -->
        </div>
    </section>

    <section>
        <div class="bg-[url(runningspikes22.png)] h-[512px]  flex flex-col">
            <h class="text-4xl text-center font-[600] text-white m-[15px]">Achieve  Greatness</h>
            <div class="flex h-[50px]  mt-[350px] justify-between">
                <div class="mb-[5px] ml-[35px] flex flex-col">
                    <h class="text-base text-white">new </h>
                    <h class="text-xl font-[800] text-white">V19 </h>
                    <h class="text-xl font-[800] text-white">Running spikes </h>
                </div>
                <button type="button" class="rounded-full w-[130px] h-[49px] text-xl font-bold text-center mt-[27px] mr-[20px] bg-white">Buy Now</button>
            </div>
            
        </div>
    </section>

    <section>
        <div class="bg-slate-700 h-[463px]  flex flex-col text-center">
            <h class="text-white font-bold text-xl mb-8 mt-8">Sign in</h>
            <h class="text-white font-bold text-xl mb-8">About us</h>
            <h class="text-white font-bold text-xl mb-8">Help</h>
            <h class="text-white font-bold text-xl mb-8">Join Us</h>
            <div class="flex flex-row justify-center mb-10 gap-x-2">
                <div><img src="twitters.png"/></div>
                <div><img src="facebook.png"/></div>
                <div><img src="instagram.png"/></div>

            </div>
            <h class="text-white text-sm">Terms Of Use</h>
            <h class="text-white text-sm">Terms And Conditions</h>
            <h class="text-white text-sm">Cookie Settings</h>
            <h class="text-white text-sm">All Rights Reserved</h>


        </div>
    </section>
</div>


