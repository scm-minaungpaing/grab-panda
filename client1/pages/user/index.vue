<template>
  <div>
    <el-row type="flex" class="row-bg" justify="center">
      <el-col :span="6"></el-col>
      <el-col :span="8">
        <div class="grid-content">
          Login to GrabPanda
          <el-form label-width="100px">
            <el-form-item label="Name">
              <el-input></el-input>
            </el-form-item>
            <el-form-item label="Activity zone">
              <el-input></el-input>
            </el-form-item>
            <el-form-item label="Activity form">
              <el-input></el-input>
            </el-form-item>
          </el-form>
        </div>
      </el-col>
      <el-col :span="6"></el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  layout: 'userLayout',
  components: {

  },
}
</script>

<style scoped>
.grid-content {
  border-radius: 4px;
  margin-top: 20px;
  /* border: 1px solid red; */
}
</style>
