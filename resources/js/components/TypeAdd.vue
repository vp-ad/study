<template>
    <div>
        <select class="custom-select" name="category[]">
            <option v-for="type1 in types1" :value="type1.id">{{type1.name}}</option>

        </select>
        <button v-on:click="removeFormElement(id)" class="block__delete" onclick="return false;">x</button>
    </div>
</template>

<script>
    export default {
        name: 'type-add',
        props: ['id', 'types1'],
        methods: {
            removeFormElement(id) {
                console.log('WARN');
                this.$emit('remove', id)
            },
        },
    }

</script>


