<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div id="app">
    <v-app>
      <v-toolbar dark color="primary">
        <v-toolbar-side-icon class="hidden-md-and-up" @click.native.stop="sideNav = !sideNav"></v-toolbar-side-icon>
        <v-toolbar-title class="white--text">Anisur Rahman</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down" v-for="item in items" :key="item.title" @click="">
          <v-btn flat>{{ item.title }}</v-btn>
        </v-toolbar-items>
      </v-toolbar>
      <v-navigation-drawer temporary v-model="sideNav" light>
        <v-toolbar flat class="transparent">
          <v-list class="pa-0">
            <v-list-tile avatar>
              <v-list-tile-avatar>
                <img src="img/anis.jpg" />
              </v-list-tile-avatar>
              <v-list-tile-content>
                <v-list-tile-title>Anisur Rahman</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
          </v-list>
        </v-toolbar>
        <v-list class="pt-0" dense>
          <v-divider></v-divider>
          <v-list-tile v-for="item in items" :key="item.title" @click="">
            <v-list-tile-action>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-navigation-drawer>
    </v-app>
  </div>
 
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
  <script>
    new Vue({ 
      el: '#app',
      data: {
        sideNav: false,
        items: [
          { title: 'Qualification', icon: 'dashboard', link: '#temp' },
          { title: 'Emp. History', icon: 'question_answer', link: '#temp' },
          { title: 'Education', icon: 'question_answer', link: '#temp' },
          { title: 'Training', icon: 'question_answer', link: '#temp' },
          { title: 'Strengths', icon: 'question_answer', link: '#temp' },
          { title: 'Personal Info', icon: 'question_answer', link: '#temp' },
          { title: 'Language', icon: 'question_answer', link: '#temp' },
          { title: 'Reference', icon: 'question_answer', link: '#temp' }
        ]
      }
    })
  </script>
</body>
</html>
