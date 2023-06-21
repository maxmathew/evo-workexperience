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

    };  function calculate(event) {
        event.preventDefault();
        console.log( document.querySelectorAll('.staff'));
        document.querySelectorAll('.staff').forEach(function(item) {
            var name = ( item.querySelector(".staff_name").innerText);
            if (name.toLowerCase().indexOf(document.getElementById("letter").value) == -1) {
                item.classList.add('hidden');
            } 
            else {
                item.classList.remove('hidden');
            } 
        })}


        function calculate_article(event) {
        event.preventDefault();
        console.log( document.querySelectorAll('.article'));
        document.querySelectorAll('.article').forEach(function(item) {
            var name = ( item.querySelector(".article_name").innerText);
            if (name.toLowerCase().indexOf(document.getElementById("article").value) == -1) {
                item.classList.add('hidden');
            } 
            else {
                item.classList.remove('hidden');
            } 
        })
            

    };
</script>



<!-- Section: Design Block -->
<section class="container mx-auto px-4" >
    <h2>Latest articles</h2>
    
    <form onsubmit="calculate_article(event)" method="POST" src="#">
        <input type="text" id="article" name="article" method="POST" class=" flex border-4"/>
        @csrf
    </form>

    <div>
        <div class="flex flex-wrap gap-4">
        @foreach($articles as $item)
            <x-article image="{{ $item['image'] }}" description="{{ $item['description']}}" name="{{ $item['name']}}" date="{{ $item['date']}}"/>
        @endforeach   
    </div>
</section>

<section>
    <h2 class="container font-bold text-center text-2xl pt-20 pb-8"  >
        Meet the team 
        
    </h2>

    <form onsubmit="calculate(event)" method="POST" src="#">
        <input type="text" id="letter" name="enter_letter" method="POST" class=" flex border-4"/>
        @csrf
    </form>


    <div class="container mx-auto pr-20">
        <div class="flex flex-wrap gap-x-60 gap-y-10">
            @foreach($stafff as $item)

                    <x-staff image="{{ $item['image'] }}" name="{{ $item['name'] }}" job="{{ $item['job'] }}"/>
            @endforeach


        </div>
        
    
    
    </div>

</section>

