<style scoped>
    .textchat{
        width: 100%;
        height: 50px;
    }
</style>

<template>
    <div class="container">
         <div class="row">
            <div class="col-md-12">

                <ul class="chat"></ul>

                <hr>
                <form>
                    <textarea class="textchat"></textarea>
                    <input type="submit" value="Отправить"/>
                </form>



            </div>
        </div>
    </div>
</template>

<script>
    var socket = io(':6001');
    $('form').on('submit', function () {
        var text = $('textarea').val(),
            msg = {message: text};
        socket.send(msg);
        return false;
    });
    // socket
    //     .on('message', function (data) {
    //         console.log('From server: ', data);
    //     })
    //     .on('server-info', function (data) {
    //         console.log('From server: ', data);
    //     });
    function appendMessage(data) {
        $('.chat').append(
            $('<li/>').text(data.message)
        );
    }
    socket.on('message', function (data) {
        console.log(data);
    });


        export default {
        prop: {
            arraymsg: []
        },
        data: function(){
            return {
                textmsg: '',
                arraymsg: []

            }
        },

        mounted(){
        },
        methods: {
            sendchat: function() {
                var text = textmsg;
                var msg = {message: text};
                socket.send(msg);
                arraymsg.push(msg.message);
                text = '';
            }
        }

    }



</script>
