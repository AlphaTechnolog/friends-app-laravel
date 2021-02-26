<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Registered friends</h3>
                </div>
                <div class="col" style='text-align: right;'>
                    <a
                        class="btn btn-success mt-1"
                        :href='appUrl + "/add_friend"'
                    >
                        Add friend
                    </a>
                </div>
            </div>
            
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th
                            v-for='(item, idx) of head'
                            :key='idx'
                        >
                            {{ item }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <Friends
                        :head='head'
                        :friends='friends'
                    ></Friends>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>

    import Friends from './Home/Friends.vue'

    export default {
        components: {
            Friends
        },
        props: ['friends'],
        data: function() {
            return {
                appUrl: window.env.APP_URL,
                head: [
                    '#',
                    'Name',
                    'Lastname',
                    'Marital Status',
                    'Sex'
                ]
            }
        }
    }

</script>