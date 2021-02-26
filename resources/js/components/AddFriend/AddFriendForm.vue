<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="input-group my-2">
                    <input
                        type='text'
                        class='form-control'
                        v-model='newFriend.name'
                        @keyup.enter='save'
                        placeholder='Enter the name'
                    >
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="input-group my-2">
                    <input
                        type='text'
                        class='form-control'
                        v-model='newFriend.lastname'
                        @keyup.enter='save'
                        placeholder='Enter the lastname'
                    >
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="input-group my-2">
                    <select class="form-select" v-model='newFriend.sex'>
                        <option selected disabled value=''>Select a sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="input-group my-2">
                    <select class='form-select' v-model='newFriend.marital_status'>
                        <option disabled selected value="">Select a marital status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widower">Widower</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 d-grid gap-2">
                <button class="btn btn-success" @click='save'>
                    Save
                </button>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['registerFriend'],
        data() {
            return {
                newFriend: {
                    name: '',
                    lastname: '',
                    sex: '',
                    marital_status: ''
                }
            }
        },
        methods: {
            save() {
                this.registerFriend(
                    this.newFriend
                )
            }
        }
    }

</script>