<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  total: Number,
});
</script>

<template>
  <h1>Page2</h1>

  <p>Total price:{{ total }}</p>
  <Link href="/page1" class="text-gray-500 text-sm mb-4 inline-block"
    >&larr; Back to list</Link
  >
</template>
