<template>
    <div class="container">
        <form @submit.prevent="update" class="form">
            <div class="form-group">
                <label for="">title</label>

                <input type="text" v-model="form.title" class="from-control" />
            </div>

            <div class="form-group">
                <label for="">Body</label>
                <textarea id="body" v-model="form.body" class="from-control" placeholder="Location Den Re Bhai"></textarea>
            </div>
             <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white">
                                Update
                            </button>
        </form>
    </div>
</template>

<script setup>
import { usePage, useForm, Link } from "@inertiajs/vue3";
const { post } = usePage().props;
const form = useForm({
    title: post.title,
    body: post.body,
});

const update = () => {
    form.put(route('posts.update',post.id))
}
</script>

<style></style>
