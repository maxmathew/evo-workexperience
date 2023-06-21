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

<section class="text-center pb-24">
    <h2 class="font-bold text-3xl pb-8">Services</h2>

    <div class="flex flex-row justify-center space-x-20 mr-41">
        <div class="basis-2/6 ml-5 shadow-xl rounded-md p-5">
            <div>
                <div class="border-b-4 pb-4 border-zinc-100">
                    <p class="pb-4">
                        <strong class="text-center">DESIGN</strong>
                    </p>
                    <button type="button" class="bg-blue-100 w-11/12 h-8 rounded-lg text-sm font-bold text-sky-800" >
                        OUR DESIGN SERVICES
                    </button>
                </div>
                <div>
                    <ol class="list-inside list-image-[url(checkmark.jpg)] text-left leading-8 pb-12">
                        <li>
                            Full site redesign
                        </li>
                        <li>
                            Usability testing
                        </li>
                        <li>
                            UX & UI
                        </li>
                        <li>
                            Brand
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="basis-2/6 shadow-xl rounded-md p-5">
            <div
            >
                <div class="border-b-4 pb-4 border-zinc-100">
                    <p class="pb-4">
                        <strong>PAID SEARCH</strong>
                    </p>
                    <button type="button" class="bg-blue-500 w-11/12 h-8 rounded-lg text-sm font-bold text-white">
                        OUR SEARCH SERVICES 
                    </button>
                </div>
                <div>
                    <ol class="list-inside list-image-[url(checkmark.jpg)] text-left leading-8">
                        <li >
                            Paid search ads
                        </li>
                        <li>
                            CRO recommendations
                        </li>
                        <li>
                            Socials Ads
                        </li>
                        <li>
                            Creative support
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="basis-2/6 mr-80 shadow-xl rounded-md p-5">
            <div>
                <div class="border-b-4 pb-4 border-zinc-100">
                    <p class="pb-4">
                        <strong>DEVELOPMENT</strong>
                    </p>
                    <button type="button" class="bg-blue-100 w-11/12 h-8 rounded-lg text-sm font-bold text-sky-800">
                        OUR DEVELOPMENT SERVICE
                    </button>
                </div>
                <div>
                    <ol class="list-inside list-image-[url(checkmark.jpg)] text-left leading-8">
                        <li>
                            Ecommerce
                        </li>
                        <li>
                            Technical consultancy
                        </li>
                        <li>
                            UX & UI
                        </li>
                        <li>
                            Web development
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <h2 class="font-bold text-3xl pb-14 text-center" >Testimonials</h2>

    <div class="flex flex-row justify-evenly">
        <x-testimonials image="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg" name="Maria Smantha" job="Web Developer" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                id officiis hic tenetur quae quaerat ad velit ab hic." stars="star.png"/>

        <x-testimonials image="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).jpg" name="Lisa Cudrow" job="Graphic designer" description="nima veniam, quis nostrum exercitationem ullam
                corporis suscipit laboriosam, nisi ut aliquid commodi." stars="star2.png"/>

        <!-- <x-testimonials image="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg" name="John Smith" job="Marketing specialist" description="At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti." stars="star3.png"/> -->

        
    </div>
</section>