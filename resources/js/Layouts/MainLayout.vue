<script setup> 
import { Link } from '@inertiajs/vue3'; 
</script> 
 
<template> 
    <nav> 
        <Link href="/">Home</Link> 
        <Link href="/" class="ml-4 text-blue-500">About</Link> <br>
        <Link href="/home" class="ml-4 text-blue-500">Home</Link> <br>
        <Link href="/content" class="ml-4 text-blue-500">See Details</Link> <br>
        <Link href="/about" class="ml-4 text-blue-500">Profile</Link> <br>
        <Link href="/services" class="ml-4 text-blue-500">Your Needs</Link> <br>
        <Link href="/contactus" class="ml-4 text-blue-500">Phone number</Link> <br>

    </nav> 
</template>