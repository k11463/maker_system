<template>
  <div>
    <v-row>
      <v-col lg="2"></v-col>
      <v-col lg="8">
        <v-container>
          <v-row>
            <v-col lg="3"></v-col>
            <v-col lg="6">
              <v-card>
                <v-card-title>Login</v-card-title>
                <v-card-text>
                  <v-text-field label="Email" outlined shaped v-model="form.email"></v-text-field>
                  <v-text-field
                    type="password"
                    label="Password"
                    outlined
                    shaped
                    v-model="form.password"
                  ></v-text-field>
                </v-card-text>
                <div class="errormsg" v-if="errors.length > 0">
                  <div v-for="error in errors" :key="error">{{ error[0] }}</div>
                </div>
                <v-card-actions>
                  <v-btn @click="Login" :loading="isSend">Login</v-btn>
                  <v-spacer></v-spacer>
                  <v-btn>Home</v-btn>
                </v-card-actions>
              </v-card>
            </v-col>
            <v-col lg="3"></v-col>
          </v-row>
        </v-container>
      </v-col>
      <v-col lg="2"></v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      form: {
        email: "",
        password: ""
      },
      errors: [],
      isSend: false
    };
  },
  methods: {
    Login() {
      axios
        .post("/login", this.form)
        .then(res => {
          console.log(res);
        })
        .catch(err => {
          if (err.response.status == 422) {
            this.isSend = false;
            this.errors = Object.values(err.response.data.errors);
          }
        });
    }
  }
};
</script>
