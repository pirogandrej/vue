<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <line-chart
                        :chart-data="data"
                        :height="100"
                        :options="{responsive: true, maintainAspectRation: true}">
                </line-chart>
                <input type="checkbox" v-model="realtime"/>realtime
                <input type="text" v-model="label"/>
                <input type="text" v-model="sale"/>
                <button @click="sendData" class="btn btn-primary btn-xs text mt-1 mh-100">
                    Обновить
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'
    export default {
        components: {
          LineChart
        },
        data: function () {
            return {
                data: [],
                realtime: false,
                label: '',
                sale: 500
            }
        },
        mounted () {
            var socket = io.connect('http://localhost:3000');
            var app = this;
            socket.on("news-action:App\\Events\\NewEvent", function (data) {
                    app.data = data.result;
                }
            );
            this.update()
        },
        methods: {
            update: function() {
                axios.get("/start/socket-chart").then((response) => {
                    this.data = response.data;
                })
            },
            sendData: function () {
                axios({
                    method: 'get',
                    url: '/start/socket-chart',
                    params: {label: this.label, sale: this.sale, realtime: this.realtime}
                }).then((response) => {
                    this.data = response.data;
                })
            }

        }
    }
</script>
