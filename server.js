var io = require('socket.io')(6001);
io.on('connection', function (socket) {
    console.log('New connection!',socket.id);

    //send message
    // socket.send('Message from server');

    //fire event
    // socket.emit('server-info', {version: 12});

    socket.broadcast.send('new user');

    //join to room
    // socket.join('vip', function (error) {
    //     console.log(socket.rooms);
    // })

    socket.on('message', function (data) {
        socket.broadcast.send(data);
    });

});



//
// var http = require('http').Server();
// var io = require('socket.io')(http);
// var Redis = require('ioredis');
//
// var redis = new Redis();
// redis.subscribe('news-action');
// redis.on('message', function (channel, message) {
//     console.log('Message recieved: ' + message);
//     console.log('Channel: ' + channel);
//     message = JSON.parse(message);
//     io.emit(channel + ':' + message.event, message.data);
// });
//
// http.listen(3000, function () {
//     console.log('Listening on Port: 3000');
// });
