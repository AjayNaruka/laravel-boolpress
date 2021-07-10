<template>
  <div>
    <h1>BLOG VUE</h1>
    <div class="container">
      <div 
      v-for="(post,key) in posts"
      :key="key"
      class="card-container my-5">
        <h4>{{post.title}}</h4>
        <router-link :to="{name:'PostDetail',params:{'slug':post.slug}}">
          <button class="btn btn-primary">OPEN</button>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
      name:'Blog',
      data(){
        return {
          posts : [],
        }
      },
      mounted(){
        this.getPosts();
      },
      methods:{
        getPosts(){
          axios.get('http://127.0.0.1:8000/api/posts')
          .then(res => {
            this.posts=res.data;
            console.log(this.posts);
          })
          .catch(err => {
            console.error(err); 
          })
        }
      }
}
</script>

<style>

</style>