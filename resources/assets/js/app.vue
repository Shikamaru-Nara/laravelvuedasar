<template>
    <div class="content-wrapper">
        <transition name="fade">
            <router-view></router-view>
        </transition>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 200ms
    }
    .fade-enter-active {
        transition-delay: 200ms;
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
</style>

<script>
    export default{}
</script>