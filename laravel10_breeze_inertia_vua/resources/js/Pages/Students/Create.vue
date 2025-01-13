<template>
    <div class="container">
        <br />
        <form @submit.prevent="submit" class="form">
            <div class="mb-4 form-group">
                <label
                    for="name"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    Name:</label
                >
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Name"
                    id="name"
                    v-model="form.name"
                />
            </div>

            <div class="mb-4 form-group">
                <label
                    for="address"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    Address:</label
                >
                <textarea
                    class="form-control"
                    id="address"
                    v-model="form.address"
                    placeholder="Enter Address"
                ></textarea>
            </div>
            <div class="mb-4 form-group">
                <label
                    for="dob"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    Date of Birth:</label
                >
                <input
                    type="date"
                    class="form-control"
                    placeholder="Enter Date of Birth"
                    id="dob"
                    v-model="form.dob"
                />
            </div>
            <div class="mb-4 form-group">
                <label
                    for="gender"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    Gender:</label
                >
                <input
                    type="radio"
                    class="form-control"
                    name="gender"
                    id="gender"
                    v-model="form.gender"
                    value="male"
                />Male &nbsp;
                <input
                    type="radio"
                    class="form-control"
                    name="gender"
                    id="gender"
                    v-model="form.gender"
                    value="female"
                />Female
            </div>
            <div class="mb-4 form-group">
                <label
                    for="district"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    District:</label
                >
                <select
                    class="form-control"
                    name=""
                    id="district"
                    v-model="form.district"
                >
                    <option disabled value="">Select one</option>
                    <option>Dhaka</option>
                    <option>Narayanganj</option>
                    <option>Cumilla</option>
                    <option>Chittagong</option>
                </select>
            </div>
            <div class="mb-4 form-group">
                <label
                    for="langauge"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    Language:</label
                >
                <input
                    type="checkbox"
                    class="form-control"
                    name="language"
                    id="langauge"
                    v-model="form.language"
                    value="PHP"
                />
                PHP &nbsp;
                <input
                    type="checkbox"
                    class="form-control"
                    name="language"
                    id="langauge"
                    v-model="form.language"
                    value="Javascript"
                />
                Javascript &nbsp;
                <input
                    type="checkbox"
                    class="form-control"
                    name="language"
                    id="langauge"
                    v-model="form.language"
                    value="Laravel"
                />
                Laravel &nbsp;
                <input
                    type="checkbox"
                    class="form-control"
                    name="language"
                    id="langauge"
                    v-model="form.language"
                    value="React"
                />
                React
            </div>
            <div class="mb-4 form-group">
                <label
                    for="photo"
                    class="block text-gray-700 text-sm font-bold mb-2"
                >
                    Photo:</label
                >
                <input
                    type="file"
                    class="form-control"
                    name="photo"
                    id="photo"
                />
            </div>
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white"
            >
                Submit
            </button>
        </form>
    </div>
</template>

<script>

import axios from "axios";

export default {
    data() {
        return {
            name: "",
            dob: "",
            address: "",
            gender: "",
            district: "",
            language: "",
            photo: "",
        };
    },
    methods: {
        submit() {
            axios.post(route("students.store"), {
                name: this.name,
                dob: this.dob,
                address: this.address,
                gender: this.gender,
                district: this.district,
                language: this.language,
            });
        },
    },
};
</script>

<style></style>
