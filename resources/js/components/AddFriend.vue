<template>
    <fragment>
        <div class="container">
            <h3>Add friend</h3>
        </div>

        <AddFriendForm
            :registerFriend='registerFriend'
        >
        </AddFriendForm>
    </fragment>
</template>

<script>

    import AddFriendForm from './AddFriend/AddFriendForm'

    export default {
        components: {
            AddFriendForm
        },
        methods: {
            registerFriend(newFriend) {
                console.log(newFriend)
            }
        }
    }

</script>