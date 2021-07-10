<template>
  <div>
    <h1>POST DETAIL VUE</h1>
    <div class="container">
      <div class="card-post">
        <h4>{{post.title}}</h4>
        <p>{{post.content}}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
      name:'PostDetail',
      data(){
        return{
          post:{}
        }
      },
      created(){
        this.getPost();
      },
      methods:{
        getPost(){
          axios.get('http://127.0.0.1:8000/api/post/'+this.$route.params.slug)
          .then(res => {
            this.post=res.data;
            console.log(this.post);
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