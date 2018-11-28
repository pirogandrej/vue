<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea rows="6" readonly="" class="form-control">{{dataMessages.join('\n')}}</textarea>
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
    export default {
        data: function () {
            return {
                dataMessages: [],
                message: "",
            }
        },
        mounted () {
            var socket = io.connect('http://10.12.125.155:6001');
            var app = this;
            socket.on("news-action:App\\Events\\NewMessage", function (data) {
                    app.dataMessages.push(data.message);
                }
            );
        },
        methods: {
            sendMessage: function () {
                console.log(this.message);
                axios({
                    method: 'get',
                    url: '/start/send-message',
                    params: {message: this.message}
                }).then((response) => {
                    this.message = "";
                })
            }

        }
    }
</script>
