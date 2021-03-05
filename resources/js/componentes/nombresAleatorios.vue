<template>
    <h1></h1>
</template>

<script>

</script>

<style lang="scss" scope>
@import url('https://fonts.googleapis.com/css?family=Lexend+Tera&display=swap');

$words: 'Ayy','Panini','dont','you','be','a','meanie','Thought','you','wanted','me','to','go','up','Why','you','tryna','keep','me','teeny?','I','Its','a','dreamy','wished','it','on','a','genie','I','got','fans','finally','aint','you','wanting','them','to','see','me?','I','thought','you','want','this','for','my','life','for','my','life','Said','you','wanted','to','see','me','thrive','you','lied','Just','say','to','me','what','you','want','from','me','Just','say','to','me','what','you','want','from','me','Ayy','Panini','dont','you','be','a','meanie','Thought','you','wanted','me','to','go','up','Why','you','tryna','keep','me','teeny','now?','Now','they','need','me','number','one','on','streaming','Oh','yeah','you','used','to','love','me','So','what','happened','whats','the','meaning?','I','thought','you','want','this','for','my','life','for','my','life','Said','you','wanted','to','see','me','thrive','you','lied','Now','when','its','all','done','I','get','the','upper','hand','I','need','a','big','Benz','not','another','fan','But','I','still','want','you','as','a','fan','Ima','need','to','sit','down','dont','mean','to','make','demands','But','I','need','you','to','Say','to','me','what','you','want','from','me','Just','say','to','me','what','you','want','from','me';

h1 {
    position: relative;
    font-family: 'Lexend Tera', sans-serif;
    //text-transform: ;
    font-size: 4vw;

    &::before {
        color: black;
        animation: text 0.1s linear infinite;
        content: nth($words, 1);
        animation: text #{length($words) / 4}s ease infinite;
        text-shadow: 0 10px 20px rgba(black, 0.1);
    }
}



@keyframes text {
    @for $i from 1 through length($words) {
        #{$i * 100 / length($words)}% {
            content: nth($words, $i)
        }
    }
}

</style>
