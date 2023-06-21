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



<!-- Section: Design Block -->
<section class="container mx-auto px-4" >
    <h2>Latest articles</h2> 
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

    <form onsubmit="calculate(this)" method="POST">
        <input type="text" id="letter" name="enter_letter" method="POST" class=" flex border-4"/>
        @csrf
    </form>


    <div class="container mx-auto pr-20">
        <div class="flex flex-wrap gap-x-60 gap-y-10">
            @foreach($stafff as $item)
            @php
                $regex = $_REQUEST['enter_letter'];
                $result="/".$regex."/"."i"
            @endphp
                @if (!$_REQUEST['enter_letter'] || preg_match($result, $item['name']))
                    <x-staff image="{{ $item['image'] }}" name="{{ $item['name'] }}" job="{{ $item['job'] }}"/>
                @endif
            @endforeach


        </div>
        
    
    
    </div>

</section>

