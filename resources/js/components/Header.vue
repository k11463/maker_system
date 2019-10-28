<template>
  <div>
    <v-toolbar>
      <v-toolbar-title class="title">Title</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn to="/register" class="btn" text>Register</v-btn>
        <v-btn to="/login" class="btn" text>Login</v-btn>
      </v-toolbar-items>
    </v-toolbar>
  </div>
</template>

<style lang="scss" scoped>
.btn {
  color: rgb(236, 184, 104);
}
.title {
  color: rgb(190, 146, 79);
  letter-spacing: 4px;
}
</style>
