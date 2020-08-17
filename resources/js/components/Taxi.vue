<template>
    <div class="col-lg-1 col-md-2 col-sm-6 col-xs-6">
        <div class="box" :class="computedClass">
            <div class="callCode circle" style="color: black;">
                {{ taxi.callCode }}
            </div>
            <div class="taxiNo">
                {{ taxi.taxiNo }}
            </div>
            <div class="phoneNumber">
                {{ taxi.phoneNumber }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            taxi: {
                type: Object,
                required: true
            }
        },
        mounted() {
            // console.log('Taxi Component mounted.')
        },
        computed: {
            computedClass() {
                let className = 'green';

                if (this.taxi.taxiUnPaid) {
                    return 'red';
                } 
                if (this.taxi.taxiExpired) {
                    return 'purple';
                }

                return className;
            }
        }
    }
</script>
