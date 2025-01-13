<script setup>
import { Link, usePage, useForm } from "@inertiajs/vue3";

// const { posts } = usePage().props;
const form = useForm({});

const deletePost = (id) => {
    form.delete(route("posts.destroy", { id }));
};

defineProps({
    posts: {
        type: Array,
        default: () => [],
    },
});
</script>

<template>
    <div>
        <h1 class="display-1">Welcome to Vue with Laravel</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="x in posts" :key="x.id">
                    <td>{{ x.title }}</td>
                    <td>{{ x.body }}</td>

                    <td>
                        <Link :href="route('posts.edit', x.id)"
                            ><i class="fa fa-cloud"></i
                        ></Link>
                        <button @click="deletePost(x.id)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <Link
        :href="route('posts.create')"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white"
        >New Entry</Link
    >
</template>

<style scoped></style>
