<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type="text" v-on:input="changename">
                        <h1>Example input : {{ name }}</h1>
                        <a v-bind:href="url">github (pirogandrej)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                name: '',
                url: 'http://github.com/pirogandrej'
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            changename: function (event) {
                this.name = event.target.value;
            }
        }
    }
</script>
