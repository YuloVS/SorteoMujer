<template>
        <div class="loaderWrapper">
            <div class="loaderThree">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="ml-16 loaderThree">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="ml-16 loaderThree">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="ml-16 loaderThree">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
</template>

<script>

</script>

<style>
.loaderWrapper{
    width: 170px;
    height: 170px;
    display: flex;
    justify-content: center;
    align-items: center;
}


.loaderThree{
    display: flex;
    justify-content: center;
    align-items: center;

}
.loaderThree > span {
    display: inline-block;
    background: purple;
    width: 0px;
    height: 0px;
    border-radius: 50%;
    margin: 0 8px;
    animation: bounce 0.6s infinite alternate;
    transform: translate3d(0);
}
.loaderThree > span:nth-child(2){
    background: palevioletred;
    animation-delay: 0.2s;
}
.loaderThree > span:nth-child(3){
    animation-delay: 0.4s;
}
@keyframes bounce {
    to {
        width: 16px;
        height: 16px;
        transform: translate3d(0, -16px, 0);
    }
}

</style>
