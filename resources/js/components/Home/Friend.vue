<template>
    <fragment>
        <tr>
            <td>{{ idx + 1 }}</td>
            <td>{{ friend.name }}</td>
            <td>{{ friend.lastname }}</td>
            <td>{{ friend.marital_status }}</td>
            <td>{{ friend.sex }}</td>
        </tr>
    </fragment>
</template>

<script>

    export default {
        props: [
            'friend',
            'idx'
        ]
    }

</script>