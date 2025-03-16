<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { defineProps } from "vue";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
        interface User {
        id: number;
        name: string;
        email: string;
        created_at: string;
    }
        defineProps<{ users: User[] }>();
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <!-- <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
            </div> -->

            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-800 text-white text-center">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Created At</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id" class="text-center">
                    <td class="border border-gray-300 px-4 py-2">{{ user.id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ user.name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ user.email }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ new Date(user.created_at).toLocaleString() }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <button class="bg-blue-500 text-white px-3 py-1 rounded mr-2 hover:bg-blue-600">
                            Edit
                        </button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                            Delete
                        </button>
                    </td>
                    </tr>
                </tbody>
            </table>

            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border md:min-h-min">
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>
