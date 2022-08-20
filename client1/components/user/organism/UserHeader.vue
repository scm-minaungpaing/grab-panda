<template>
  <header class="logo">
      <img :src="img"/> <span class="second">Gr</span><span class="second">ab</span><span class="main">Pan</span><span class="second">da</span>
  </header>
</template>

<script>
export default {
  data() {
    return {
      img: require('@/assets/img/Logo.png')
    }
  }


}
</script>

<style scoped>
header {
  height: 70px;
  background: #fff;
  box-shadow: 3px 3px 10px rgba(0,0,0, 0.1);
  padding: 0 20px;
}
img {
  width: 70px;
}
.logo {
  display: flex;
  align-items: center;
  font-size: 1.75rem;
  font-weight: 500;
}
.second {
  color: var(--main-color);
}
.main {
  color: var(--secondary-color);
}
</style>
