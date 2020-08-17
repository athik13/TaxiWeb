<template>
    <div class="container-fluid">
        <div class="row no-gutters d-flex align-items-center row-padding-5">
            <div class="col">
                <div class="d-flex flex-row align-items-center">
                    <h5 class="title">{{ title }}</h5>
                    <input type="text" v-model="search" placeholder="Search Taxi Numbers"/>
                </div>
            </div>
            <div class="col-7">
                <marquee-text :duration="45">
                    {{ marqueeData }}
                </marquee-text>
            </div>
            <div class="col">
                <div class="buttons float-right">
                    <button v-on:click="taxiFilterKey = 'all'" class="btn btn-info btn-sm">All</button>
                    <button v-on:click="taxiFilterKey = 'paid'" class="btn btn-success btn-sm">Paid</button>
                    <button v-on:click="taxiFilterKey = 'unpaid'"  class="btn btn-danger btn-sm">Unpaid</button>
                    <button v-on:click="taxiFilterKey = 'expired'"  class="btn purple btn-sm">Expired</button>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <Taxi v-for="taxi in taxiFilter" :key="taxi.callCode" :taxi="taxi" />
        </div>
    </div>
</template>

<script>
    import Taxi from './Taxi'
    import MarqueeText from 'vue-marquee-text-component'

    export default {
        data () {
            return {
                taxiFilterKey: 'all',
                interval: undefined,
                title: '',
                search: '',
                marqueeData: '',
                taxis: []
            }
        },
        props: ['center'],
        components:{
            Taxi,
            MarqueeText
        },
        mounted() {
            const today = new Date()
        
            this.title = today.toLocaleString('default', { month: 'long' }) + ' - ' + this.center;

            // Taxi Data
            axios.get('http://taxiweb.test/api/display-taxi-data/'+ this.center)
                 .then(response => (this.taxis = response.data));

            // Marquee Data
            axios.get('http://taxiweb.test/api/display-marquee-text')
                 .then(response => (this.marqueeData = response.data));
            console.log('Marquee Data Updated.');
            
            this.interval = setInterval(() => {
                axios.get('http://taxiweb.test/api/display-taxi-data/'+ this.center)
                     .then(response => (this.taxis = response.data));
                console.log('Data Updated.')
            }, 60000 );
        },
        computed: {
            filteredList() {
                return this.taxis.filter(taxi => {
                    return taxi.taxiNo.toLowerCase().includes(this.search.toLowerCase())
                })
            },
            taxiFilter() {
                return this[this.taxiFilterKey]
            },
            all() {
                return this.filteredList
            },
            paid() {
                return this.all.filter((taxi) => taxi.taxiPaid)
            },
            unpaid() {
                return this.all.filter((taxi) => taxi.taxiUnPaid)
            },
            expired() {
                return this.all.filter((taxi) => taxi.taxiExpired)
            }
        }
    }
</script>