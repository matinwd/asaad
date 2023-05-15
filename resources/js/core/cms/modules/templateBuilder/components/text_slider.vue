<template>
    <div class="row">
        <div class="form-group col-12">
            <label>تیتر</label>
            <input type="text" class="form-control" v-model="data.title" @keyup="$emit('update:data', data);">
        </div>
        <div class="form-group col-12">
            <label>متن</label>
            <editor api-key="fymce8zuta7bvh8bp4u61nctf3aypy99ysf73akjxvpvhz38" :init="editor_config" v-model="data.text"
                    @keyup="$emit('update:data', data);"
                    @change="$emit('update:data', data);"/>
        </div>
        <div class="form-group col-12">
            <label>تصاویر - اسلایدر</label>
            <pic-list :current-list="data.images" @updateItems="updateItems">
            </pic-list>
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
    import Editor from '@tinymce/tinymce-vue';

    export default {
        components: {
            'editor': Editor
        },
        props: ['data'],
        data() {
            return {
                editor_config: {
                    language: 'fa',
                    directionality: "rtl",
                    path_absolute: "/",
                    relative_urls: false,
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table directionality",
                        "emoticons template paste textpattern"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | rtl ltr | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code",
                    automatic_uploads: true,
                    images_upload_url: 'uploader',
                }
            };
        },
        methods: {
            updateItems(images) {
                this.data.images = images;
                this.$emit('update:data', this.data);
            }
        }
    }
</script>

<style scoped>

</style>