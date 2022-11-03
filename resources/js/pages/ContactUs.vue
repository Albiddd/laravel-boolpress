<template>
    <section>
        <div class="container mx-auto my-4">
        <h1 class="text-center font-bold text-4xl">Contatti</h1>
        <p>Compila il form per contattarci:</p>
      </div>
        <div class="container mx-auto ">
            <lead-form></lead-form>
        </div>
    </section>
</template>

<script>
import LeadForm from '../components/LeadForm.vue'
export default {
  components: { LeadForm },
   
}
</script>

<style lang="scss" scoped>

</style>