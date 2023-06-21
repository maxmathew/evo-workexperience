<script>
    function calculate(e) {
        console.log("Form submitted!");
    };
</script>


<!-- Section: Design Block -->
<section>
    <form onsubmit="calculate(this)" method="POST">
        <textarea name="inputText"></textarea>
        @csrf
        <button type="submit">Submit</button>
    </form>
</section>
