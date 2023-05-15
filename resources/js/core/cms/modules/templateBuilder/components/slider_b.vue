<template>
    <div class="row">
        <div class="form-group col-12">
            <pic-list-link :current-list="data.images" @updateItems="updateItems">
            </pic-list-link>
        </div>
        <hr>
        <div class="form-group col-12">
            <label>اندازه در PC</label>
            <select class="form-control" v-model="data.col_lg" @change="$emit('update:data', data);">
                <option value="12">ستون 12 تایی</option>
                <option value="11">ستون 11 تایی</option>
                <option value="10">ستون 10 تایی</option>
                <option value="9">ستون 9 تایی</option>
                <option value="8">ستون 8 تایی</option>
                <option value="7">ستون 7 تایی</option>
                <option value="6">ستون 6 تایی</option>
                <option value="5">ستون 5 تایی</option>
                <option value="4">ستون 4 تایی</option>
                <option value="3">ستون 3 تایی</option>
                <option value="2">ستون 2 تایی</option>
                <option value="1">ستون 1 تایی</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label>اندازه در Tablet</label>
            <select class="form-control" v-model="data.col_md" @change="$emit('update:data', data);">
                <option value="12">ستون 12 تایی</option>
                <option value="11">ستون 11 تایی</option>
                <option value="10">ستون 10 تایی</option>
                <option value="9">ستون 9 تایی</option>
                <option value="8">ستون 8 تایی</option>
                <option value="7">ستون 7 تایی</option>
                <option value="6">ستون 6 تایی</option>
                <option value="5">ستون 5 تایی</option>
                <option value="4">ستون 4 تایی</option>
                <option value="3">ستون 3 تایی</option>
                <option value="2">ستون 2 تایی</option>
                <option value="1">ستون 1 تایی</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label>اندازه در Mobile</label>
            <select class="form-control" v-model="data.col_sm" @change="$emit('update:data', data);">
                <option value="12">ستون 12 تایی</option>
                <option value="11">ستون 11 تایی</option>
                <option value="10">ستون 10 تایی</option>
                <option value="9">ستون 9 تایی</option>
                <option value="8">ستون 8 تایی</option>
                <option value="7">ستون 7 تایی</option>
                <option value="6">ستون 6 تایی</option>
                <option value="5">ستون 5 تایی</option>
                <option value="4">ستون 4 تایی</option>
                <option value="3">ستون 3 تایی</option>
                <option value="2">ستون 2 تایی</option>
                <option value="1">ستون 1 تایی</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                images: []
            };
        },
        methods: {
            updateItems(images) {
                this.data.images = images;
            }
        }
    }
</script>

<style scoped>

</style>