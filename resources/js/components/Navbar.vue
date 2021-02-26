<template>
    <div>
        <nav class="navbar navbar-dark bg-dark expand-lg nav-contained">
            <a class='navbar-brand' href="/">{{ title }}</a>
        </nav>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                title: document.title
            }
        }
    }

</script>