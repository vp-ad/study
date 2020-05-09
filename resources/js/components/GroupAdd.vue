<template>
    <div>
        <div class="block__item block__horizontal ingredients">
            <select class="custom-select" name="ingredient_name[]" >
                <option v-for="ingredient in ingredients" :value="ingredient.id">{{ingredient.name}}</option>
            </select>
            <input class="form-control form-control-lg" type="number" name="ingredient_weight[]" placeholder="1" value="1">
            <span>Грамм</span>
            <button v-on:click="removeFormElement(id)" class="block__delete"  onclick="return false;">x</button>
        </div></div>
</template>

<script>
export default {
        name: 'group-add',
        props: ['id', 'ingredients'],
        methods: {
            removeFormElement(id){
                this.$emit('remove', id)
            },
        },
    }

</script>


