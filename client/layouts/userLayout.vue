<template>
  <div>
    <user-header></user-header>
    <nuxt/>
  </div>
</template>

<script>
import UserHeader from '@/components/UserHeader.vue'
export default {
  name: 'userLayout',
  component: {
    UserHeader
  }
}
</script>

<style>

</style>
