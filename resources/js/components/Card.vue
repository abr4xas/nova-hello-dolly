<template>
    <card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3">
            <blockquote class="blockquote">
                <p>{{ quote }}</p>
                <footer>—Jerry Herman, <cite>Hello Dolly song</cite></footer>
            </blockquote>
        </div>
    </card>
</template>

<script>
export default {
    data() {
        return {
            quote: '',
        }
    },
    props: ['card',],

    mounted() {
        this.getQuote()
    },
    methods: {
        getQuote() {
            Nova.request().get('/nova-vendor/nova-hello-dolly/quote').then(response => {
                this.quote = response.data
            })
        },
    }
}
</script>
<style>
    blockquote {
        padding: 0.5em 10px;
        quotes: "\201C""\201D""\2018""\2019";
    }
    blockquote:before {
        color: #ccc;
        content: open-quote;
        font-size: 4em;
        line-height: 0.1em;
        margin-right: 0.25em;
        vertical-align: -0.4em;
    }
    blockquote p {
        display: inline;
    }
</style>
