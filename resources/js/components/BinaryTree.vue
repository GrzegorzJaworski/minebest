<template>
    <vo-basic :data="chartData"></vo-basic>
</template>

<script>
    import { VoBasic } from 'vue-orgchart'

    export default {
        components: { VoBasic },

        created () {
            this.getTree()

        },

        data() {
            return {
                chartData: {},
            }
        },

        methods: {
            getTree() {
                axios.get('/api/tree')
                    .then(({data}) => {

                        this.chartData = data;
                    });

            }
        }

    }
</script>

<style scoped>
    @import url("https://cdn.jsdelivr.net/npm/vue-orgchart/dist/style.min.css");
</style>