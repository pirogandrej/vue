<style scoped>
    .form-group{
        width: 100%;
        height: 40vh;
        background-color: lightgrey;
        overflow-y: auto;
    }
</style>

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="form-group" v-chat-scroll="{always: false, smooth: true}">
                    <p v-for="item in dataMessages">{{item.message}}</p>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Наберите сообщение" v-model="message">
                    <div class="input-group-append">
                        <button @click="sendMessage" class="btn btn-outline-secondary" type="button">Отправить</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    var socket = io(':6001');

//    socket
//     .on('message', function (data) {
//         console.log('From server: ', data);
//     })
//     .on('server-info', function (data) {
//         console.log('From server: ', data);
//     });

    export default {
        data: function () {
            return {
                dataMessages: [],
                message: "",
            }
        },
        mounted () {
            var app = this;
            socket
                .on ('message', function (data) {
                        console.log(data);
                        app.dataMessages.push(data);
                })
                .on('server-info', function (data) {
                    console.log(data);
//                    app.dataMessages.push(data);
                });
        },
        methods: {
            sendMessage: function () {
                var msg = {message: this.message};
                this.dataMessages.push(msg);
                socket.send(msg);
                this.message = '';
            }
        }
    }

</script>
