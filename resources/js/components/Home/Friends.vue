<template>
    <fragment>
        <tr v-if='friends.length === 0'>
            <td :colSpan='head.length'>
                Don't have friends to show
            </td>
        </tr>
        <Friend
            v-else
            v-for='(friend, idx) of friends'
            :key='idx'
            :friend='friend'
            :idx='idx'
        >
        </Friend>
    </fragment>
</template>

<script>

    import Friend from './Friend.vue'

    export default {
        props: ['friends', 'head'],
        components: {
            Friend
        },
    }

</script>