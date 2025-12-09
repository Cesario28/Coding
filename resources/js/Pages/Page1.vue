<script setup>

import {useForm} from "@inertiajs/vue3";

const form = useForm({
firstname: "",
lastname: "",
unitprice:0,
quantity:0

});
const submit = () => {
    form.post("/page2");
}
</script>
    <template> 
<div class="max-w-md mx-auto p-6 bg-white rounded shadow mt-10"> 
<h1 class="text-xl font-bold mb-4">Edit Profile</h1> 
<form @submit.prevent="submit"> 
      <div class="mb-4"> 
        <label class="block text-gray-700">Name</label> 
        <input  
          v-model="form.name"  
          type="text"  
          class="border p-2 w-full rounded" 
        /> 
        <div v-if="form.errors.name" class="text-red-500 text-sm mt-1"> 
            {{ form.errors.name }} 
        </div> 
      </div> 
 
      <div class="mb-4"> 
        <label class="block text-gray-700">LastName</label> 
        <input  
          v-model="form.email"  
          type="email"  
          class="border p-2 w-full rounded" 
        /> 
        <div v-if="form.errors.email" class="text-red-500 text-sm mt-1"> 
            {{ form.errors.email }} 
        </div> 
      </div> 
 
      <button  
        type="submit"  
        :disabled="form.processing" 
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 disabled:opacity-50" 
      > 
        {{ form.processing ? 'Saving...' : 'Submit' }} 
      </button> 
    </form> 
  </div> 
</template>