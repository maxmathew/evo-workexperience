<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div x-data="{ open: false }">
    <button @click="open = true">Expand</button>

    <span x-show="open">
        Content...
    </span>
</div>